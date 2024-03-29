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
                        <v-menu ref="menu" v-model="menu" :return-value.sync="month" :close-on-content-click="false"
                            transition="scale-transition" offset-y max-width="290px" min-width="auto">
                            <template v-slot:activator="{ on, attrs }">
                                <v-text-field v-model="month" label="月份" hide-details append-icon="mdi-calendar"
                                    readonly v-bind="attrs" v-on="on" class="mr-2"></v-text-field>
                            </template>
                            <v-date-picker v-model="month" type="month" scrollable :locale="locale"
                                @input="$refs.menu.save(month)">
                            </v-date-picker>
                        </v-menu>
                        {{-- search --}}
                        <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" single-line hide-details
                            class="mr-2"></v-text-field>

                        {{-- 匯出 --}}
                        <v-btn icon @click="exportExcel">
                            <v-icon>mdi-file-excel</v-icon>
                        </v-btn>
                    </v-toolbar>


                    <v-data-table class="elevation-1" :headers="headers" :items="mealRecords"
                        :search="search" sort-desc :loading="loading" sort-by="task_date"
                        height="calc(100vh - 250px)" fixed-header>

                        <template v-slot:item.is_taken="{ item }">
                            <v-chip v-if="item.is_taken" color="green" dark small>已取</v-chip>
                            <v-chip v-else color="red" dark small>未取</v-chip>
                        </template>
                    </v-data-table>

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
                    search: null,
                    month: new Date().toISOString().substr(0, 7),
                    mealRecords: [],
                    menu: false,
                    locale: "zh-TW",
                    headers: [{
                            text: '月份',
                            align: 'start',
                            sortable: true,
                            value: 'meal_effective_month'
                        },
                        {
                            text: '日期',
                            align: 'start',
                            sortable: true,
                            value: 'task_date'
                        },
                        {
                            text: '品牌',
                            align: 'start',
                            sortable: true,
                            value: 'restaurant_brand'
                        },
                        {
                            text: '店別',
                            align: 'start',
                            sortable: true,
                            value: 'restaurant_shop'
                        },
                        {
                            text: '類別',
                            align: 'start',
                            sortable: true,
                            value: 'meal_category'
                        },
                        {
                            text: '廚別',
                            align: 'start',
                            sortable: true,
                            value: 'meal_chef'
                        },
                        {
                            text: '區站',
                            align: 'start',
                            sortable: true,
                            value: 'meal_workspace'
                        },
                        {
                            text: '編號',
                            align: 'start',
                            sortable: true,
                            value: 'meal_qno'
                        },
                        {
                            text: '名稱',
                            sortable: true,
                            value: 'meal_name'
                        },
                        {
                            text: '備註',
                            align: 'start',
                            sortable: true,
                            value: 'meal_note'
                        },
                        {
                            text: '檢項',
                            align: 'start',
                            sortable: true,
                            value: 'meal_item'
                        },
                        {
                            text: '檢驗項目',
                            align: 'start',
                            sortable: true,
                            value: 'meal_items'
                        },
                        {
                            text: '是否已取',
                            align: 'start',
                            sortable: true,
                            value: 'is_taken'
                        },
                        {
                            text: '原因',
                            align: 'start',
                            sortable: true,
                            value: 'memo'
                        },

                    ]

                },
                methods: {
                    getMealRecords() {
                        this.loading = true
                        axios.get('/api/quality-meal-records', {
                                params: {
                                    month: this.month
                                }
                            })
                            .then(response => {
                                this.mealRecords = response.data.data
                            })
                            .catch(error => {
                                alert(error.response.data.message)
                            })
                            .finally(() => {
                                this.loading = false
                            })
                    },

                    exportExcel() {
                        var wb = XLSX.utils.book_new();
                        var ws = XLSX.utils.json_to_sheet(
                            this.mealRecords.map(({
                                meal_effective_month,
                                task_date,
                                restaurant_brand,
                                restaurant_shop,
                                meal_category,
                                meal_chef,
                                meal_workspace,
                                meal_qno,
                                meal_name,
                                meal_note,
                                meal_item,
                                meal_items,
                                is_taken,
                                memo
                            }) => ({
                                '月份': meal_effective_month,
                                '日期': task_date,
                                '品牌': restaurant_brand,
                                '店別': restaurant_shop,
                                '類別': meal_category,
                                '廚別': meal_chef,
                                '區站': meal_workspace,
                                '編號': meal_qno,
                                '名稱': meal_name,
                                '備註': meal_note,
                                '檢項': meal_item,
                                '檢驗項目': meal_items,
                                '是否已取': is_taken ? '已取' : '未取',
                                '原因': memo
                            }))
                        );
                        XLSX.utils.book_append_sheet(wb, ws, "Sheet1");
                        XLSX.writeFile(wb, this.month + '食材_成品採樣記錄.xlsx');
                    },

                },

                mounted() {
                    this.getMealRecords()
                },

                watch: {
                    month() {
                        this.getMealRecords()
                    }
                }
            })
        </script>
    </x-slot:footerFiles>


</x-base-layout>
