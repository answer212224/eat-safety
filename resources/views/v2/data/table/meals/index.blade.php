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
                    <v-row>
                        <v-col cols="12">
                            <v-data-table :items="meals" :loading="loading" class="elevation-1" item-key="id"
                                :search="search" :headers="headers" height="calc(100vh - 250px)"
                                sort-by="effective_date" sort-desc fixed-header>
                                <template v-slot:top>
                                    <v-toolbar flat>
                                        <v-toolbar-title>{{ $title }}</v-toolbar-title>

                                        <v-divider class="mx-4" inset vertical></v-divider>
                                        <v-spacer></v-spacer>
                                        <v-text-field v-model="search" append-icon="mdi-magnify" label="Search"
                                            single-line hide-details class="mr-2"></v-text-field>

                                        @can('import-data')
                                            <v-btn fab small color="primary" class="mr-2" @click="importDialog = true">
                                                <v-icon>mdi-file-import</v-icon>
                                            </v-btn>
                                        @endcan
                                        @can('create-meal')
                                            <v-btn fab small color="primary" @click="dialog = true;editedIndex = -1">
                                                <v-icon small>
                                                    mdi-plus
                                                </v-icon>
                                            </v-btn>
                                        @endcan
                                    </v-toolbar>
                                </template>
                                <template v-slot:item.actions="{ item }">
                                    @can('update-meal')
                                        <v-icon small class="mr-2" @click="editItem(item)">mdi-pencil</v-icon>
                                    @endcan
                                    @can('delete-meal')
                                        <v-icon small @click="deleteItem(item)">mdi-delete</v-icon>
                                    @endcan
                                </template>
                        </v-col>
                    </v-row>

                    <v-dialog v-model="dialog" max-width="500px" @click:outside="close">
                        <v-card>
                            <v-card-title>
                                <span v-if="editedIndex === -1">新增</span>
                                <span v-else>編輯</span>
                            </v-card-title>

                            <v-card-text>
                                <v-form ref="form" v-model="valid">
                                    <v-container>
                                        <v-row>
                                            <v-col cols="12" sm="6">
                                                <v-menu ref="menu" v-model="menu" transition="scale-transition"
                                                    offset-y max-width="290px" min-width="290px">
                                                    <template v-slot:activator="{ on, attrs }">
                                                        <v-text-field v-model="editedItem.effective_date" label="啟用月份"
                                                            prepend-icon="mdi-calendar" readonly v-bind="attrs"
                                                            v-on="on" :rules="[v => !!v || '啟用月份必需填寫']">
                                                        </v-text-field>
                                                    </template>
                                                    <v-date-picker v-model="editedItem.effective_date" no-title
                                                        scrollable type="month" locale="zh-tw">
                                                    </v-date-picker>
                                                </v-menu>
                                            </v-col>
                                            <v-col cols="12" sm="6">
                                                <v-text-field v-model="editedItem.sid" label="品牌店代碼"
                                                    prepend-icon="mdi-tag"
                                                    :rules="[v => !!v || '品牌店代碼必需填寫']"></v-text-field>
                                            </v-col>
                                            <v-col cols="12" sm="6">
                                                <v-text-field v-model="editedItem.brand" label="品牌"
                                                    prepend-icon="mdi-tag"
                                                    :rules="[v => !!v || '品牌必需填寫']"></v-text-field>
                                            </v-col>
                                            <v-col cols="12" sm="6">
                                                <v-text-field v-model="editedItem.shop" label="店別"
                                                    prepend-icon="mdi-tag"></v-text-field>
                                            </v-col>
                                            <v-col cols="12" sm="6">
                                                <v-text-field v-model="editedItem.category" label="類別"
                                                    prepend-icon="mdi-tag"
                                                    :rules="[v => !!v || '類別必需填寫']"></v-text-field>
                                            </v-col>
                                            <v-col cols="12" sm="6">
                                                <v-text-field v-model="editedItem.chef" label="廚別"
                                                    prepend-icon="mdi-tag"
                                                    :rules="[v => !!v || '廚別必需填寫']"></v-text-field>
                                            </v-col>
                                            <v-col cols="12" sm="6">
                                                <v-text-field v-model="editedItem.workspace" label="區站"
                                                    prepend-icon="mdi-tag"
                                                    :rules="[v => !!v || '區站必需填寫']"></v-text-field>
                                            </v-col>
                                            <v-col cols="12" sm="6">
                                                <v-text-field v-model="editedItem.qno" label="編號"
                                                    prepend-icon="mdi-tag"
                                                    :rules="[v => !!v || '編號必需填寫']"></v-text-field>
                                            </v-col>
                                            <v-col cols="12" sm="6">
                                                <v-text-field v-model="editedItem.name" label="名稱"
                                                    prepend-icon="mdi-tag"
                                                    :rules="[v => !!v || '名稱必需填寫']"></v-text-field>
                                            </v-col>
                                            <v-col cols="12" sm="6">
                                                <v-text-field v-model="editedItem.note" label="備註"
                                                    prepend-icon="mdi-tag"></v-text-field>
                                            </v-col>
                                            <v-col cols="12" sm="6">
                                                <v-text-field v-model="editedItem.item" label="檢項"
                                                    prepend-icon="mdi-tag"
                                                    :rules="[v => !!v || '檢項必需填寫']"></v-text-field>
                                            </v-col>
                                            <v-col cols="12" sm="6">
                                                <v-text-field v-model="editedItem.items" label="檢樣項目"
                                                    prepend-icon="mdi-tag"
                                                    :rules="[v => !!v || '檢樣項目必需填寫']"></v-text-field>
                                            </v-col>
                                        </v-row>
                                    </v-container>
                            </v-card-text>

                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="blue darken-1" text @click="close">取消</v-btn>
                                <v-btn color="blue darken-1" text @click="save" :disabled="!valid">儲存</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-dialog>

                    <v-dialog v-model="importDialog" max-width="500px">
                        <v-card>
                            <v-card-title>
                                匯入
                            </v-card-title>
                            <v-card-text>
                                <v-file-input v-model="file" label="選擇檔案" accept=".xlsx" :loading="loading"
                                    :rules="[v => !!v || '檔案必需選擇']">
                                </v-file-input>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="blue darken-1" text @click="importDialog = false">取消</v-btn>
                                <v-btn color="blue darken-1" text :disabled="!file" @click="importMeals">
                                    <v-icon left>mdi-file-import</v-icon>
                                    匯入
                            </v-card-actions>
                        </v-card>
                    </v-dialog>

                </v-container>
            </v-main>
        </v-app>
    </div>

    <x-slot:footerFiles>
        <script>
            new Vue({
                el: '#app',
                vuetify: new Vuetify(),
                data: {
                    loading: false,
                    meals: [],
                    search: '',
                    dialog: false,
                    headers: [{
                            text: '啟用月份',
                            value: 'effective_date'
                        },
                        {
                            text: '品牌店代碼',
                            value: 'sid'
                        },
                        {
                            text: '品牌',
                            value: 'brand'
                        },
                        {
                            text: '店別',
                            value: 'shop'
                        },
                        {
                            text: '類別',
                            value: 'category'
                        },
                        {
                            text: '廚別',
                            value: 'chef'
                        },
                        {
                            text: '區站',
                            value: 'workspace'
                        },
                        {
                            text: '編號',
                            value: 'qno'
                        },
                        {
                            text: '名稱',
                            value: 'name'
                        },
                        {
                            text: '備註',
                            value: 'note'
                        },
                        {
                            text: '檢項',
                            value: 'item'
                        },
                        {
                            text: '檢樣項目',
                            value: 'items'
                        },
                        {
                            text: '動作',
                            value: 'actions',
                            sortable: false
                        },
                    ],
                    editedIndex: -1,
                    editedItem: {},
                    valid: false,
                    importDialog: false,
                    file: null,
                    menu: false,

                },
                methods: {
                    getMeals() {
                        this.loading = true
                        axios.get('/api/meals')
                            .then(response => {
                                this.meals = response.data.data
                            })
                            .catch(error => {
                                alert(error)
                            })
                            .finally(() => {
                                this.loading = false
                            })
                    },

                    editItem(item) {
                        this.editedIndex = this.meals.indexOf(item)
                        this.editedItem = Object.assign({}, item)
                        this.dialog = true
                    },

                    close() {
                        this.dialog = false
                        setTimeout(() => {
                            this.editedItem = {}
                            this.editedIndex = -1
                        }, 300)
                    },

                    save() {
                        this.loading = true
                        if (this.editedIndex > -1) {
                            axios.put('/api/meals/' + this.editedItem.id, this.editedItem)
                                .then(response => {
                                    alert('更新成功')
                                    this.getMeals()
                                })
                                .catch(error => {
                                    alert(error.response.data.message)
                                })
                                .finally(() => {
                                    this.loading = false
                                })
                        } else {
                            axios.post('/api/meals', this.editedItem)
                                .then(response => {
                                    alert('新增成功')
                                    this.getMeals()
                                })
                                .catch(error => {
                                    alert(error.response.data.message)
                                })
                                .finally(() => {
                                    this.loading = false
                                })
                        }
                        this.close()
                    },

                    deleteItem(item) {
                        if (confirm('確定要刪除嗎?')) {
                            this.loading = true
                            axios.delete('/api/meals/' + item.id)
                                .then(response => {
                                    alert('刪除成功')
                                    this.getMeals()
                                })
                                .catch(error => {
                                    alert(error.response.data.message)
                                })
                                .finally(() => {
                                    this.loading = false
                                })
                        }
                    },

                    importMeals() {
                        this.loading = true
                        const formData = new FormData()
                        formData.append('file', this.file)
                        axios.post('/api/meals/import', formData, {
                                headers: {
                                    'Content-Type': 'multipart/form-data'
                                }
                            })
                            .then(response => {
                                if (response.data.status == 'error') {
                                    alert(response.data.message)
                                    return
                                } else {
                                    alert('匯入成功')
                                }

                                this.importDialog = false
                                this.getMeals()
                            })
                            .catch(error => {
                                alert(error.response.data.message)
                            })
                            .finally(() => {
                                this.loading = false
                                this.file = null
                                this.importDialog = false
                            })
                    }


                },

                mounted() {
                    this.getMeals()
                }
            })
        </script>
    </x-slot:footerFiles>


</x-base-layout>
