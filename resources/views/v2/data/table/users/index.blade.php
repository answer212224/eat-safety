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

                    <v-toolbar color="primary darken-2" dark>
                        <v-toolbar-title>{{ $title }}</v-toolbar-title>

                        <v-divider class="mx-4" inset vertical></v-divider>
                        <v-spacer></v-spacer>
                        <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" single-line hide-details
                            class="mr-2"></v-text-field>
                        @can('update-restaurant')
                            <v-btn icon @click="updateRestaurants">
                                <v-icon>mdi-refresh</v-icon>
                            </v-btn>
                        @endcan

                    </v-toolbar>

                    <v-data-table :headers="headers" :items="restaurants" :search="search" item-key="id"
                        class="elevation-1" :loading="loading" sort-by="status" sort-desc fixed-header
                        height="calc(100vh - 250px)">
                        <template v-slot:item.status="{ item }">
                            <v-icon v-if="item.status" color="success">mdi-check</v-icon>
                            <v-icon v-else color="error">mdi-close</v-icon>
                        </template>
                        <template v-slot:item.actions="{ item }">

                            {{-- more --}}
                            <v-menu offset-y>
                                <template v-slot:activator="{ on, attrs }">
                                    <v-btn icon v-bind="attrs" v-on="on">
                                        <v-icon>mdi-dots-vertical</v-icon>
                                    </v-btn>
                                </template>
                                <v-list>
                                    <v-list-item @click="editRestaurant(item)">
                                        <v-list-item-title>區站資料</v-list-item-title>
                                    </v-list-item>
                                    <v-list-item :href="`/v1/data/table/restaurants/${item.id}/chart`" target="_blank">
                                        <v-list-item-title>食安圖表</v-list-item-title>
                                    </v-list-item>
                                    <v-list-item :href="`/v1/data/table/restaurants/${item.id}/defects`"
                                        target="_blank">
                                        <v-list-item-title>
                                            食安缺失
                                        </v-list-item-title>
                                    </v-list-item>
                                </v-list>
                            </v-menu>

                        </template>
                    </v-data-table>
                </v-container>

                {{-- restaurantWorkspace資料 --}}
                <v-dialog v-model="dialog" max-width="500px">
                    <v-card>
                        <v-card-title>
                            <v-btn icon @click="editDialog = true">
                                <v-icon>mdi-plus</v-icon>
                            </v-btn>
                            <span class="headline">@{{ title }}</span>
                        </v-card-title>
                        <v-card-text>
                            <v-container>
                                <v-data-table :headers="workspaceHeaders" :items="restaurantWorkspaces" item-key="id"
                                    class="elevation-1" :loading="loading" sort-by="sort" fixed-header
                                    height="calc(100vh - 250px)">
                                    <template v-slot:item.status="{ item }">
                                        <v-icon v-if="item.status" color="success">mdi-check</v-icon>
                                        <v-icon v-else color="error">mdi-close</v-icon>
                                    </template>
                                    @can('update-restaurant')
                                        <template v-slot:item.actions="{ item }">
                                            <v-btn icon @click="editWorkspace(item)">
                                                <v-icon>mdi-pencil</v-icon>
                                            </v-btn>
                                        </template>
                                    @endcan

                                </v-data-table>
                            </v-container>
                        </v-card-text>

                    </v-card>
                </v-dialog>

                {{-- 編輯restaurantWorkspace資料 --}}
                <v-dialog v-model="editDialog" max-width="600px" @click:outside="editDialog = false;editedItem = {}">
                    <v-card>
                        <v-card-title>
                            <span class="headline">編輯區站資料</span>
                            <v-spacer></v-spacer>
                            <v-switch v-model="editedItem.status" :label="editedItem.status ? '啟用' : '停用'"
                                color="success"></v-switch>
                        </v-card-title>
                        <v-card-text>
                            <v-container>
                                <v-form>
                                    <v-row>
                                        <v-col cols="12" sm="6">
                                            <v-text-field v-model="editedItem.sort" label="排序"
                                                type="number"></v-text-field>
                                        </v-col>
                                        <v-col cols="12" sm="6">
                                            <v-text-field v-model="editedItem.area" label="區域"></v-text-field>
                                        </v-col>
                                    </v-row>
                                </v-form>
                            </v-container>
                        </v-card-text>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="blue darken-1" text @click="save">儲存</v-btn>
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
                    headers: [{
                            text: '品牌店代碼',
                            value: 'sid',
                        },
                        {
                            text: '品牌',
                            value: 'brand',
                        },
                        {
                            text: '店別',
                            value: 'shop',
                        },
                        {
                            text: '區域',
                            value: 'location',
                        },
                        {
                            text: '狀態',
                            value: 'status',
                        },
                        {
                            text: '操作',
                            value: 'actions',
                            align: 'center',
                        }
                    ],
                    workspaceHeaders: [{
                            text: '排序',
                            value: 'sort',
                        },
                        {
                            text: '區域',
                            value: 'area',
                        },

                        {
                            text: '狀態',
                            value: 'status',
                        },
                        {
                            text: '操作',
                            value: 'actions',
                        }
                    ],

                    restaurants: [],
                    search: '',
                    loading: false,
                    dialog: false,
                    restaurantWorkspaces: [],
                    editedItem: {
                        sort: '',
                        area: '',
                        status: '',

                    },

                    restaurantId: '',
                    title: '',
                    editDialog: false,
                },
                methods: {
                    // {"id":1,"sid":"DOR001","brand":"朵頤","brand_code":"DOR","shop":"台北市府店","address":null,"location":"臺北市","status":0,"created_at":"2023-08-29T09:46:12.000000Z","updated_at":"2024-02-19T01:23:26.000000Z","restaurant_workspaces":[{"id":1,"restaurant_id":1,"sort":99,"area":"西廚鐵板熱菜","status":1,"category_value":"DXC301","created_at":"2023-08-29T09:46:12.000000Z","updated_at":"2023-08-29T09:46:12.000000Z"},{"id":2,"restaurant_id":1,"sort":99,"area":"西廚熱鍋爐台","status":1,"category_value":"DXC302","created_at":"2023-08-29T09:46:12.000000Z","updated_at":"2023-08-29T09:46:12.000000Z"},{"id":3,"restaurant_id":1,"sort":99,"area":"西廚裁切備料","status":1,"category_value":"DXC303","created_at":"2023-08-29T09:46:12.000000Z","updated_at":"2023-08-29T09:46:12.000000Z"},{"id":4,"restaurant_id":1,"sort":99,"area":"西廚冷菜西點","status":1,"category_value":"DXC304","created_at":"2023-08-29T09:46:12.000000Z","updated_at":"2023-08-29T09:46:12.000000Z"},{"id":5,"restaurant_id":1,"sort":99,"area":"火線","status":1,"category_value":"DXC211","created_at":"2023-08-29T09:46:12.000000Z","updated_at":"2023-08-29T09:46:12.000000Z"},{"id":6,"restaurant_id":1,"sort":99,"area":"非火線","status":1,"category_value":"DXC212","created_at":"2023-08-29T09:46:12.000000Z","updated_at":"2023-08-29T09:46:12.000000Z"},{"id":7,"restaurant_id":1,"sort":99,"area":"外場","status":1,"category_value":"outside","created_at":"2023-08-29T09:46:12.000000Z","updated_at":"2023-08-29T09:46:12.000000Z"}]}
                    getRestaurants() {
                        loading = true
                        axios.get('/api/restaurants')
                            .then(response => {
                                this.restaurants = response.data.data
                            })
                            .catch(error => {
                                alert(error.response.data.message)
                            })
                            .finally(() => {
                                this.loading = false
                            })
                    },

                    editRestaurant(restaurant) {
                        this.dialog = true
                        this.title = restaurant.brand + ' ' + restaurant.shop
                        this.restaurantId = restaurant.id
                        this.restaurantWorkspaces = restaurant.restaurant_workspaces
                    },

                    editWorkspace(workspace) {
                        this.editDialog = true
                        this.editedItem = Object.assign({}, workspace)
                    },

                    save() {
                        if (this.editedItem.id === undefined) {
                            // 新增
                            this.editedItem.category_value = 'ADD'
                            axios.post(`/api/restaurant/${this.restaurantId}/restaurant-workspaces`, this.editedItem)
                                .then(response => {
                                    this.editDialog = false
                                    this.restaurantWorkspaces.push(response.data.data)
                                    this.getRestaurants()
                                })
                                .catch(error => {
                                    alert(error.response.data.message)
                                })
                        } else {
                            // 修改
                            axios.put(`/api/restaurant-workspaces/${this.editedItem.id}`, this.editedItem)
                                .then(response => {
                                    this.editDialog = false
                                    // 取代原本的資料
                                    const index = this.restaurantWorkspaces.findIndex(item => item.id === response
                                        .data
                                        .data.id)
                                    this.restaurantWorkspaces.splice(index, 1, response.data.data)

                                    this.getRestaurants()
                                })
                                .catch(error => {
                                    alert(error.response.data.message)
                                })
                        }

                    },

                    updateRestaurants() {
                        this.loading = true
                        axios.put('/api/restaurants/upsert')
                            .then(response => {
                                this.getRestaurants()
                                alert('更新成功')
                            })
                            .catch(error => {
                                alert(error.response.data.message)
                            })
                            .finally(() => {
                                this.loading = false
                            })


                    }


                },

                mounted() {
                    this.getRestaurants()
                }
            })
        </script>
    </x-slot:footerFiles>


</x-base-layout>
