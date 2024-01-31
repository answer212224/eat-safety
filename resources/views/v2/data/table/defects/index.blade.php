<x-base-layout :scrollspy="false">
    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <x-slot:headerFiles>
    </x-slot:headerFiles>

    <div id="app">
        <v-app v-cloak>
            <v-main class="grey lighten-4">
                <v-container>
                    {{-- data table --}}
                    <v-data-table :headers="header" :items="defects" :loading="loading"
                        class="elevation-1" :search="search" sort-by="effective_date" sort-desc fixed-header
                        height="calc(100vh - 250px)">
                        <template v-slot:top>
                            <v-toolbar flat>
                                <v-toolbar-title>{{ $title }}</v-toolbar-title>

                                <v-divider class="mx-4" inset vertical></v-divider>
                                <v-spacer></v-spacer>
                                <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" single-line
                                    hide-details class="mr-2"></v-text-field>

                                @can('import-data')
                                    <v-btn fab small color="primary" class="mr-2" @click="importDialog = true">
                                        <v-icon>mdi-file-import</v-icon>
                                    </v-btn>
                                @endcan

                                @can('create-defect')
                                    <v-btn color="primary" dark fab small @click="editItem(-1)">
                                        <v-icon>mdi-plus</v-icon>
                                    </v-btn>
                                @endcan
                            </v-toolbar>
                        </template>
                        <template v-slot:item.actions="{ item }">
                            @can('update-defect')
                                <v-icon small class="mr-2" @click="editItem(item)">mdi-pencil</v-icon>
                            @endcan
                            @can('delete-defect')
                                <v-icon small @click="deleteItem(item)">mdi-delete</v-icon>
                            @endcan

                        </template>
                    </v-data-table>
                </v-container>

                {{-- dialog --}}
                <v-dialog v-model="dialog" max-width="500px">
                    <v-card>
                        <v-card-title>
                            <span class="headline">@{{ formTitle }}</span>
                        </v-card-title>

                        <v-card-text>
                            <v-container>
                                <v-form v-model="valid">
                                    <v-row>
                                        <v-col cols="12" sm="6">
                                            <v-menu ref="menu" v-model="menu" transition="scale-transition" offset-y
                                                max-width="290px" min-width="290px">
                                                <template v-slot:activator="{ on }">
                                                    <v-text-field v-model="editedItem.effective_date" label="啟動月份"
                                                        prepend-icon="mdi-calendar" readonly v-on="on"
                                                        :rules="[v => !!v || '啟動月份必須填寫']" required></v-text-field>
                                                </template>
                                                <v-date-picker v-model="editedItem.effective_date" no-title scrollable
                                                    type="month" locale="zh-TW" locale="zh-TW">


                                                </v-date-picker>
                                            </v-menu>
                                        </v-col>
                                        <v-col cols="12" sm="6">
                                            <v-text-field v-model="editedItem.group" label="分類"
                                                prepend-icon="mdi-format-list-bulleted-type"
                                                :rules="[v => !!v || '分類必須填寫']" required></v-text-field>
                                        </v-col>
                                        <v-col cols="12" sm="6">
                                            <v-text-field v-model="editedItem.title" label="子項目" required
                                                prepend-icon="mdi-format-list-bulleted-type"
                                                :rules="[v => !!v || '子項目必須填寫']"></v-text-field>
                                        </v-col>
                                        <v-col cols="12" sm="6">
                                            <v-text-field v-model="editedItem.category" label="類別" required
                                                prepend-icon="mdi-format-list-bulleted-type"
                                                :rules="[v => !!v || '類別必須填寫']"></v-text-field>
                                        </v-col>
                                        <v-col cols="12" sm="6">
                                            <v-text-field v-model="editedItem.deduct_point" label="扣分" required
                                                prepend-icon="mdi-minus-circle-outline" type="number"
                                                :rules="[v => !!v || '扣分必須填寫', v => v <= 0 || '扣分必須小於0']"></v-text-field>
                                        </v-col>
                                        <v-col cols="12">
                                            <v-textarea v-model="editedItem.description" label="稽核標準" required
                                                prepend-icon="mdi-format-list-bulleted-type" rows="2"
                                                :rules="[v => !!v || '稽核標準必須填寫']"></v-text-field>
                                        </v-col>
                                        <v-col cols="12">
                                            <v-textarea v-model="editedItem.report_description" label="報告呈現說明" required
                                                prepend-icon="mdi-format-list-bulleted-type" rows="2"
                                                :rules="[v => !!v || '報告呈現說明必須填寫']"></v-text-field>
                                        </v-col>
                                    </v-row>
                                </v-form>
                            </v-container>
                        </v-card-text>

                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="blue darken-1" text @click="close">取消</v-btn>
                            <v-btn color="blue darken-1" text @click="save" :disabled="!valid">儲存</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>

                {{-- importDialog --}}
                <v-dialog v-model="importDialog" max-width="500px">
                    <v-card>
                        <v-card-title>
                            <span class="headline">匯入資料</span>
                        </v-card-title>

                        <v-card-text>
                            <v-container>
                                <v-form v-model="valid">
                                    <v-row>
                                        <v-col cols="12">
                                            <v-file-input v-model="file" label="選擇檔案" accept=".xlsx"
                                                prepend-icon="mdi-paperclip" :rules="[v => !!v || '檔案必須選擇']"
                                                required></v-file-input>
                                        </v-col>
                                    </v-row>
                                </v-form>
                            </v-container>
                        </v-card-text>

                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="blue darken-1" text @click="importDialog = false">取消</v-btn>
                            <v-btn color="blue darken-1" text @click="importData" :disabled="!valid">匯入</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>
            </v-main>
        </v-app>
    </div>

    <x-slot:footerFiles>
        <script>
            new Vue({
                el: '#app',
                vuetify: new Vuetify(),
                data: {
                    defects: [],
                    loading: false,
                    header: [{
                            text: '啟動月份',
                            value: 'effective_date',
                        },
                        {
                            text: '分類',
                            value: 'group'
                        },
                        {
                            text: '子項目',
                            value: 'title',
                        },
                        {
                            text: '類別',
                            value: 'category',
                        },
                        {
                            text: '扣分',
                            value: 'deduct_point'
                        },
                        {
                            text: '稽核標準',
                            value: 'description',
                        },
                        {
                            text: '報告呈現說明',
                            value: 'report_description',
                        },
                        {
                            text: '操作',
                            value: 'actions',
                            sortable: false
                        },
                    ],
                    editedIndex: -1,
                    editedItem: {
                        effective_date: '',
                        group: '',
                        title: '',
                        category: '',
                        deduct_point: '',
                        description: '',
                        report_description: '',
                    },
                    defaultItem: {
                        effective_date: '',
                        group: '',
                        title: '',
                        category: '',
                        deduct_point: '',
                        description: '',
                        report_description: '',
                    },
                    dialog: false,
                    formTitle: '',
                    search: '',
                    menu: false,
                    valid: false,
                    importDialog: false,
                    file: null,
                },

                methods: {
                    getDefects() {
                        this.loading = true;
                        axios.get('/api/defects')
                            .then(response => {
                                this.defects = response.data.data;
                            })
                            .catch(error => {
                                console.log(error);
                            })
                            .finally(() => {
                                this.loading = false;
                            });
                    },

                    editItem(item) {
                        this.editedIndex = this.defects.indexOf(item);
                        this.editedItem = Object.assign({}, item);
                        this.dialog = true;
                    },

                    close() {
                        this.dialog = false;
                        setTimeout(() => {
                            this.editedItem = Object.assign({}, this.defaultItem);
                            this.editedIndex = -1;
                        }, 300)
                    },

                    save() {
                        if (this.editedIndex > -1) {
                            axios.put('/api/defects/' + this.editedItem.id, this.editedItem)
                                .then(response => {
                                    this.getDefects();
                                })
                                .catch(error => {
                                    alert(error.response.data.message);
                                })
                                .finally(() => {
                                    this.loading = false;
                                });
                        } else {
                            axios.post('/api/defects', this.editedItem)
                                .then(response => {
                                    this.getDefects();
                                })
                                .catch(error => {
                                    alert(error.response.data.message);
                                })
                                .finally(() => {
                                    this.loading = false;
                                });
                        }
                        this.close();
                    },

                    deleteItem(item) {
                        const comfirmDelete = confirm('確定要刪除嗎?');
                        if (!comfirmDelete) {
                            return;
                        }
                        this.loading = true;
                        axios.delete('/api/defects/' + item.id)
                            .then(response => {
                                this.getDefects();
                            })
                            .catch(error => {
                                alert(error.response.data.message);
                            })
                            .finally(() => {
                                this.loading = false;
                            });
                    },

                    importData() {
                        const formData = new FormData();
                        formData.append('file', this.file);
                        this.loading = true;
                        axios.post('/api/defects/import', formData, {
                                headers: {
                                    'Content-Type': 'multipart/form-data'
                                }
                            })
                            .then(response => {
                                if (response.data.status == 'success') {
                                    alert('匯入成功');
                                } else {
                                    alert(response.data.message);
                                }
                                this.getDefects();
                            })
                            .catch(error => {
                                alert(error.response.data.message);
                            })
                            .finally(() => {
                                this.loading = false;
                                this.importDialog = false;
                            });
                    },
                },

                mounted() {
                    this.getDefects();
                },
            })
        </script>
    </x-slot:footerFiles>


</x-base-layout>
