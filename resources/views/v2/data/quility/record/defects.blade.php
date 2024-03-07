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
                        {{-- 圖表連結 --}}
                        <v-btn :href="`{{ route('quality-defect-chart') }}?yearMonth=${month}`" target="_blank" icon>
                            <v-icon>mdi-chart-bar</v-icon>
                        </v-btn>
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
                        axios.get('/api/quality-defect-records', {
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
