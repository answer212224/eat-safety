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
                            <v-card>
                                <v-card-text>
                                    <v-data-table :items="projects" :loading="loading" class="elevation-1"
                                        item-key="id" :search="search" :headers="headers" sort-by="id"
                                        sort-desc>
                                        <template v-slot:top>
                                            <v-toolbar flat>
                                                <v-toolbar-title>{{ $title }}</v-toolbar-title>

                                                <v-divider class="mx-4" inset vertical></v-divider>
                                                <v-spacer></v-spacer>
                                                <v-text-field v-model="search" append-icon="mdi-magnify" label="Search"
                                                    single-line hide-details class="mr-2"></v-text-field>
                                                @can('create-project')
                                                    <v-btn color="primary" dark class="mb-2" fab small
                                                        @click="editItem(-1)">
                                                        <v-icon>mdi-plus</v-icon>
                                                    </v-btn>
                                                @endcan
                                            </v-toolbar>
                                        </template>
                                        <template v-slot:item.status="{ item }">
                                            <v-chip color="success" small dark v-if="item.status">啟用</v-chip>
                                            <v-chip color="error" small dark v-else>停用</v-chip>
                                        </template>
                                        <template v-slot:item.actions="{ item }">
                                            @can('update-project')
                                                <v-icon small class="mr-2" @click="editItem(item)">mdi-pencil</v-icon>
                                            @endcan

                                        </template>

                                </v-card-text>
                            </v-card>
                        </v-col>
                    </v-row>
                </v-container>

                <v-dialog v-model="dialog" max-width="500px" @click:outside="close">
                    <v-card>
                        <v-card-title>
                            <span class="headline">@{{ formTitle }}</span>
                        </v-card-title>

                        <v-card-text>
                            <v-container>
                                <v-form v-model="valid" ref="form">
                                    <v-row>
                                        {{-- 專案名稱 --}}
                                        <v-col cols="12" sm="6">
                                            <v-text-field v-model="editedItem.name" :rules="[v => !!v || '請輸入專案名稱']"
                                                label="專案名稱" required></v-text-field>
                                        </v-col>
                                        {{-- 專案狀態 --}}
                                        <v-col cols="12" sm="6">
                                            <v-select v-model="editedItem.status" :items="statusItems" label="專案狀態"
                                                required></v-select>
                                        </v-col>

                                        {{-- 專案月份 --}}
                                        <v-col cols="12" sm="6" v-if="editedIndex == -1">
                                            <v-menu ref="menu" v-model="menu" :close-on-content-click="false"
                                                :return-value.sync="date" transition="scale-transition" offset-y
                                                max-width="290px" min-width="auto">
                                                <template v-slot:activator="{ on, attrs }">
                                                    <v-text-field v-model="date" label="專案月份"
                                                        prepend-icon="mdi-calendar" readonly v-bind="attrs"
                                                        v-on="on"></v-text-field>
                                                </template>
                                                <v-date-picker v-model="date" type="month" no-title scrollable
                                                    locale="zh-tw" @input="$refs.menu.save(date)">
                                                </v-date-picker>
                                            </v-menu>
                                        </v-col>

                                        {{-- (內外場)食安缺失子項目 --}}
                                        <v-col cols="12" sm="6" v-if="editedIndex == -1">
                                            <v-select v-model="editedItem.description" :items="projectDefects"
                                                label="食安缺失子項目" required :rules="[v => !!v || '請選擇食安缺失子項目']">
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
                    search: '',
                    projects: [],
                    formTitle: '',
                    headers: [{
                            text: 'ID',
                            align: 'start',
                            value: 'id',
                        },
                        {
                            text: '專案名稱',
                            value: 'name',
                        },
                        {
                            text: '專案描述',
                            value: 'description',
                        },
                        {
                            text: '狀態',
                            value: 'status',
                        },
                        {
                            text: '動作',
                            value: 'actions',
                            sortable: false,
                        },
                    ],
                    dialog: false,
                    editedIndex: -1,
                    editedItem: {
                        id: 0,
                        name: '',
                        description: '',
                        status: 1,
                    },
                    defaultItem: {
                        id: 0,
                        name: '',
                        description: '',
                        status: 1,
                    },
                    statusItems: [{
                            text: '啟用',
                            value: 1,
                        },
                        {
                            text: '停用',
                            value: 0,
                        },
                    ],
                    valid: false,
                    date: new Date().toISOString().substr(0, 7),
                    menu: false,
                    projectDefects: [],
                },
                methods: {
                    getProjects() {
                        this.loading = true;
                        axios.get('/api/projects')
                            .then((response) => {
                                this.projects = response.data.data;
                            })
                            .catch((error) => {
                                alert(error.response.data.message);
                            })
                            .finally(() => {
                                this.loading = false;
                            });
                    },
                    getProjectDefects() {
                        this.loading = true;
                        axios.get('/api/project-defects', {
                                params: {
                                    month: this.date,
                                }
                            })
                            .then((response) => {
                                this.projectDefects = response.data.data;
                                if (this.projectDefects.length > 0) {
                                    this.projectDefects = this.projectDefects.map((item) => {
                                        return [
                                            '(內場)' + item.description,
                                            '(外場)' + item.description,
                                        ]
                                    });
                                    this.projectDefects = this.projectDefects.flat();
                                }

                            })
                            .catch((error) => {
                                alert(error.response.data.message);
                            })
                            .finally(() => {
                                this.loading = false;
                            });
                    },

                    editItem(item) {
                        this.editedIndex = this.projects.indexOf(item);


                        if (this.editedIndex == -1) {
                            this.formTitle = '新增專案';
                        } else {
                            this.formTitle = '編輯專案';
                            this.editedItem = Object.assign({}, item);
                        }

                        this.dialog = true;
                    },



                    close() {
                        this.dialog = false;
                        setTimeout(() => {
                            this.editedItem = Object.assign({}, this.defaultItem);
                            this.editedIndex = -1;
                        }, 300);
                    },

                    save() {
                        if (this.editedIndex > -1) {
                            this.loading = true;
                            axios.put('/api/projects/' + this.editedItem.id, this.editedItem)
                                .then((response) => {
                                    this.getProjects();
                                })
                                .catch((error) => {
                                    alert(error.response.data.message);
                                })
                                .finally(() => {
                                    this.loading = false;

                                });
                        } else {
                            this.loading = true;
                            axios.post('/api/projects/', this.editedItem)
                                .then((response) => {
                                    this.getProjects();
                                })
                                .catch((error) => {
                                    alert(error.response.data.message);
                                })
                                .finally(() => {
                                    this.loading = false;
                                });
                        }
                        this.close();
                    },
                },

                watch: {
                    date() {
                        this.getProjectDefects();
                    },
                },

                mounted() {
                    this.getProjects();
                    this.getProjectDefects();
                }
            })
        </script>
    </x-slot:footerFiles>


</x-base-layout>
