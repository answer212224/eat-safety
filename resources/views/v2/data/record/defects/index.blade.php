<x-base-layout :scrollspy="false">
    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <x-slot:headerFiles>
        <script src="{{ asset('js/xlsx.full.min.js') }}"></script>
    </x-slot:headerFiles>

    <div id="app">
        <v-app v-cloak>
            <v-main class="grey lighten-4">
                <v-container>
                    <v-toolbar color="primary darken-2" dark>
                        <v-toolbar-title>{{ $title }}</v-toolbar-title>
                        <v-spacer></v-spacer>
                        {{-- 月分篩選 --}}
                        <v-menu transition="scale-transition" offset-y max-width="290px" min-width="auto">
                            <template v-slot:activator="{ on, attrs }">
                                <v-text-field v-model="month" label="月份" hide-details append-icon="mdi-calendar"
                                    readonly v-bind="attrs" v-on="on" class="mr-2"></v-text-field>
                            </template>
                            <v-date-picker v-model="month" type="month" scrollable :locale="locale"
                                @input="getDefectRecords">
                            </v-date-picker>
                        </v-menu>
                        {{-- search --}}
                        <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" single-line hide-details
                            class="mr-2"></v-text-field>
                    </v-toolbar>
                    <v-data-table class="elevation-1" :headers="headers" :items="defectRecords" item-key="id"
                        :search="search" :loading="loading" height="calc(100vh - 250px)" fixed-header>
                        <template v-slot:item.reason="{ item }">
                            <v-chip v-if="item.is_ignore" color="success" class="mr-2" small>忽略扣分</v-chip>
                            <v-chip v-if="item.is_suggestion" color="info" class="mr-2" small>建議</v-chip>
                            <v-chip v-if="item.is_repeat" color="warning" class="mr-2" small>重複</v-chip>
                            <v-chip v-if="item.is_not_reach_deduct_standard" color="error" class="mr-2"
                                small>未達扣分標準</v-chip>
                        </template>
                        <template v-slot:item.actions="{ item }">
                            <v-btn icon small @click="dialog = true; detail = item">
                                <v-icon>mdi-eye</v-icon>
                            </v-btn>
                        </template>
                    </v-data-table>
                </v-container>

                {{-- 詳細 --}}
                <v-dialog v-model="dialog" max-width="900px">
                    <v-card>
                        <v-card-title>
                            <span class="headline">詳細資訊</span>
                        </v-card-title>
                        <v-card-text>
                            <v-row>
                                <v-col cols="12" sm="6">
                                    <v-text-field label="稽核日期" v-model="detail.task.task_date"
                                        readonly></v-text-field>
                                </v-col>
                                <v-col cols="12" sm="6">
                                    <v-text-field label="品牌" v-model="detail.restaurant_workspace.restaurant.brand"
                                        readonly></v-text-field>
                                </v-col>
                                <v-col cols="12" sm="6">
                                    <v-text-field label="分店" v-model="detail.restaurant_workspace.restaurant.shop"
                                        readonly></v-text-field>
                                </v-col>
                                <v-col cols="12" sm="6">
                                    <v-text-field label="區站" v-model="detail.restaurant_workspace.area"
                                        readonly></v-text-field>
                                </v-col>
                                <v-col cols="12" sm="6">
                                    <v-text-field label="巡檢員" v-model="detail.user.name" readonly></v-text-field>
                                </v-col>
                                <v-col cols="12" sm="6">
                                    <v-text-field label="任務" v-model="detail.task.category" readonly></v-text-field>
                                </v-col>
                                <v-col cols="12" sm="6">
                                    <v-text-field label="缺失類別" v-model="detail.defect.category"
                                        readonly></v-text-field>
                                </v-col>
                                <v-col cols="12" sm="6">
                                    <v-text-field label="缺失分類" v-model="detail.defect.group" readonly></v-text-field>
                                </v-col>
                                <v-col cols="12" sm="6">
                                    <v-text-field label="子項目" v-model="detail.defect.title" readonly></v-text-field>
                                </v-col>
                                <v-col cols="12" sm="6">
                                    <v-text-field label="稽核標準" v-model="detail.defect.description"
                                        readonly></v-text-field>
                                </v-col>
                                <v-col cols="12" sm="6">
                                    <v-text-field label="報告呈現" v-model="detail.defect.report_description"
                                        readonly></v-text-field>
                                </v-col>
                                <v-col cols="12" sm="6">
                                    <v-text-field label="分數" v-model="detail.defect.deduct_point"
                                        readonly></v-text-field>
                                </v-col>
                                <v-col cols="12" sm="6">
                                    <v-text-field label="備註" v-model="detail.memo" readonly></v-text-field>
                                </v-col>
                                <v-col cols="12">
                                    <v-img v-if="detail.images" v-for="(image, index) in detail.images"
                                        :key="index" :src="`/storage/${image}`" contain></v-img>
                                </v-col>
                            </v-row>
                        </v-card-text>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="blue darken-1" text @click="dialog = false">關閉</v-btn>
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
                    search: null,
                    month: new Date().toISOString().substr(0, 7),
                    locale: "zh-TW",
                    // "id": 81,
                    // "user_id": 37,
                    // "task_id": 174,
                    // "restaurant_workspace_id": 2307,
                    // "defect_id": 492,
                    // "images": [
                    //     "uploads/XWz_174_20240103043701.jpg"
                    // ],
                    // "memo": null,
                    // "is_not_reach_deduct_standard": 0,
                    // "is_suggestion": 0,
                    // "is_repeat": 0,
                    // "is_ignore": 0,
                    // "is_impoved": 0,
                    // "created_at": "2024-01-03 16:37:01",
                    // "updated_at": "2024-01-03 16:37:01",
                    // "task": {
                    //     "id": 174,
                    //     "restaurant_id": 753,
                    //     "category": "食安及5S複稽",
                    //     "task_date": "2024-01-03 10:00:00",
                    //     "status": "processing",
                    //     "inner_manager": null,
                    //     "outer_manager": null,
                    //     "start_at": "2024-01-03 16:34:43",
                    //     "end_at": null,
                    //     "created_at": "2024-01-03T08:30:35.000000Z",
                    //     "updated_at": "2024-01-03T08:34:43.000000Z"
                    // },
                    // "defect": {
                    //     "id": 492,
                    //     "effective_date": "2023-12-01",
                    //     "group": "重大缺失",
                    //     "title": "重大交叉污染",
                    //     "category": "重大缺失",
                    //     "description": "任一餐點成品、半成品含有病媒異物，例如：蟑螂(含屍體)、老鼠屎、飛蟲、螞蟻等，仍預計出餐之情形，或已出餐的餐點",
                    //     "deduct_point": -10,
                    //     "report_description": "餐點成品、半成品含有病媒異物",
                    //     "created_at": "2023-12-11T09:57:39.000000Z",
                    //     "updated_at": "2023-12-11T09:57:39.000000Z"
                    // },
                    // "restaurant_workspace": {
                    //     "id": 2307,
                    //     "restaurant_id": 753,
                    //     "sort": 3,
                    //     "area": "日廚壽司",
                    //     "status": 1,
                    //     "category_value": "ONE001",
                    //     "created_at": "2023-10-31T06:44:28.000000Z",
                    //     "updated_at": "2023-11-01T08:23:11.000000Z"
                    // },
                    // "user": {
                    //     "id": 37,
                    //     "uid": "11004083",
                    //     "name": "温惠婷",
                    //     "email": "huiting.wen@eatogether.com.tw",
                    //     "department": "食安本部巡檢部",
                    //     "department_serial": "000100010001000100020002",
                    //     "email_verified_at": null,
                    //     "status": 1,
                    //     "created_at": "2023-10-31T07:51:34.000000Z",
                    //     "updated_at": "2024-01-31T01:36:48.000000Z",
                    //     "deleted_at": null
                    // }
                    defectRecords: [],
                    headers: [{
                            text: '日期',
                            align: 'start',
                            value: 'created_at'
                        },
                        {
                            text: '品牌',
                            value: 'restaurant_workspace.restaurant.brand'
                        },
                        {
                            text: '分店',
                            value: 'restaurant_workspace.restaurant.shop'
                        },
                        {
                            text: '區站',
                            value: 'restaurant_workspace.area'
                        },
                        {
                            text: '巡檢員',
                            value: 'user.name'
                        },
                        {
                            text: '任務',
                            value: 'task.category'
                        },
                        {
                            text: '缺失',
                            value: 'defect.title'
                        },
                        {
                            text: '扣分',
                            value: 'defect.deduct_point'
                        },
                        {
                            text: '不扣分原因',
                            value: 'reason'
                        },
                        {
                            text: '操作',
                            value: 'actions',
                            sortable: false
                        }
                    ],
                    detail: {
                        restaurant_workspace: {
                            area: '',
                            restaurant: {
                                brand: '',
                                shop: ''
                            }

                        },

                        user: {
                            name: ''
                        },
                        task: {
                            task_date: '',
                            category: ''
                        },
                        defect: {
                            title: '',
                            deduct_point: ''
                        },
                        memo: '',
                        images: []
                    },
                    dialog: false,

                },
                methods: {
                    getDefectRecords() {
                        this.loading = true;
                        axios.get('/api/defect-records', {
                            params: {
                                month: this.month
                            }
                        }).then(response => {
                            this.defectRecords = response.data.data;
                            // 假如忽略扣分或是建議或是重複或未達扣分標準或是改善，則deduct_point=0
                            this.defectRecords.forEach(record => {
                                if (record.is_ignore || record.is_suggestion || record.is_repeat ||
                                    record.is_not_reach_deduct_standard || record.is_impoved) {
                                    record.defect.deduct_point = 0;
                                }
                            });
                            this.loading = false;
                        }).catch(error => {
                            console.log(error);
                            this.loading = false;
                        });
                    },

                },

                mounted() {
                    this.getDefectRecords();
                },

                watch: {
                    month() {
                        this.getDefectRecords();
                    }
                }
            })
        </script>
    </x-slot:footerFiles>


</x-base-layout>
