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
                    <v-row class="d-flex justify-space-between align-center">
                        <v-col cols="6">
                            {{-- 跳轉到列表 --}}
                            <v-btn color="primary" text href="{{ route('v2.app.tasks.index') }}">
                                <v-icon left>mdi-arrow-left</v-icon>
                                返回列表
                            </v-btn>
                        </v-col>
                        <v-col cols="6" class="text-right">
                            {{-- 跳轉到新增缺失 --}}
                            <v-btn color="primary" text href="{{ route('v2.app.tasks.clear-defect.create', $task->id) }}">
                                新增缺失
                                <v-icon right>mdi-arrow-right</v-icon>
                            </v-btn>
                        </v-col>
                    </v-row>

                    <v-row>
                        <v-col cols="12">
                            <v-card class="elevation-0">
                                <v-card-text>
                                    <v-row>
                                        <v-col cols="12" sm="6">
                                            <v-card class="elevation-0">

                                                <v-card-text>
                                                    <v-row>
                                                        <v-col cols="12">
                                                            <v-text-field label="內場分數" v-model="totalInnerScore"
                                                                readonly dense :loading="loading"></v-text-field>
                                                        </v-col>
                                                    </v-row>
                                                </v-card-text>
                                            </v-card>
                                        </v-col>
                                        <v-col cols="12" sm="6">
                                            <v-card class="elevation-0">

                                                <v-card-text>
                                                    <v-row>
                                                        <v-col cols="12">
                                                            <v-text-field label="外場分數" v-model="totalOuterScore"
                                                                readonly dense :loading="loading"></v-text-field>
                                                        </v-col>
                                                    </v-row>
                                                </v-card-text>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                </v-card-text>
                            </v-card>
                        </v-col>
                    </v-row>

                    <template>
                        {{-- 預加載 --}}
                        <v-row v-if="loading">
                            <v-col cols="12" sm="4" v-for="n in 6" :key="n">
                                <template>
                                    <v-sheet class="pa-3">
                                        <v-skeleton-loader class="mx-auto" type="card"></v-skeleton-loader>
                                    </v-sheet>
                                </template>
                            </v-col>
                        </v-row>

                        <v-tabs color="deep-purple accent-4" right v-model="tab" show-arrows>
                            <v-tab v-for="tab in tabs" :key="tab">@{{ tab }}</v-tab>
                            <v-tab-item v-for="tab in tabs" :key="tab" class="grey lighten-4">
                                <v-row>

                                    <v-col cols="12" sm="4" v-for="taskDefect in taskDefects[tab]"
                                        :key="taskDefects.id">

                                        <v-card class="elevation-0" class="mx-auto">
                                            <v-card-title>

                                            </v-card-title>

                                            <v-carousel height="200">
                                                <v-carousel-item v-for="(item,i) in taskDefect.images_url"
                                                    :key="i" :href="item" target="_blank">
                                                    <v-img :src="item" :lazy-src="item"
                                                        aspect-ratio="1"></v-img>
                                                </v-carousel-item>
                                            </v-carousel>

                                            <v-card-text>
                                                <v-row>
                                                    <v-col cols="12">
                                                        <v-chip-group>
                                                            {{-- 扣分 --}}
                                                            <v-chip color="warning" text dark small label
                                                                v-if="!(taskDefect.is_ignore||taskDefect.is_not_reach_deduct_standard||taskDefect.is_suggestion)">
                                                                @{{ taskDefect.amount * -2 }}分
                                                            </v-chip>
                                                            <v-chip color="red" text dark small label
                                                                v-if="taskDefect.is_ignore">忽略扣分</v-chip>
                                                            <v-chip color="red" text dark small label
                                                                v-if="taskDefect.is_not_reach_deduct_standard">未達扣分標準</v-chip>
                                                            <v-chip color="red" text dark small label
                                                                v-if="taskDefect.is_suggestion">建議事項</v-chip>
                                                        </v-chip-group>
                                                    </v-col>
                                                    {{-- 主項目 --}}
                                                    <v-col cols="12">
                                                        <v-text-field label="主項目"
                                                            v-model="taskDefect.clear_defect.main_item" readonly
                                                            dense></v-text-field>
                                                    </v-col>
                                                    {{-- 次項目 --}}
                                                    <v-col cols="12">
                                                        <v-text-field label="次項目"
                                                            v-model="taskDefect.clear_defect.sub_item" readonly
                                                            dense></v-text-field>
                                                    </v-col>
                                                    {{-- 數量 --}}
                                                    <v-col cols="12">
                                                        <v-text-field label="數量" v-model="taskDefect.amount"
                                                            readonly dense></v-text-field>
                                                    </v-col>
                                                    <v-col cols="12">
                                                        <v-textarea label="備註" v-model="taskDefect.memo" readonly
                                                            rows="2"></v-textarea>
                                                    </v-col>

                                                </v-row>

                                            </v-card-text>
                                            <v-card-actions>
                                                <v-spacer></v-spacer>
                                                <v-btn color="primary" text @click="openDialog(taskDefect)">編輯</v-btn>
                                                <v-btn color="red" text @click="deleteItem(taskDefect)">刪除</v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-col>
                                </v-row>
                            </v-tab-item>

                        </v-tabs>

                    </template>

                    {{-- 編輯dialog --}}
                    <v-dialog v-model="dialog" max-width="500px" persistent>
                        <v-card>
                            <v-card-title>
                                <span class="headline">編輯缺失</span>
                            </v-card-title>
                            <v-card-text>
                                <v-container>
                                    <v-row>
                                        <v-col cols="12">
                                            {{-- 主項目 --}}
                                            <v-select label="主項目" v-model="editedItem.clear_defect.main_item"
                                                :items="main_defects" dense></v-select>
                                        </v-col>
                                        <v-col cols="12">
                                            {{-- 次項目 --}}
                                            <v-select label="次項目" v-model="editedItem.clear_defect_id"
                                                :items="activeDefects[editedItem.clear_defect.main_item]"
                                                item-text="sub_item" item-value="id" dense></v-select>
                                        </v-col>
                                        <v-col cols="12">
                                            {{-- 數量 --}}
                                            <v-text-field v-model="editedItem.amount" label="數量" type="number"
                                                :rules="[v => v >= 0 || '數量不得為負']">
                                                <v-icon slot="append" color="green" @click="editedItem.amount++">
                                                    mdi-plus
                                                </v-icon>
                                                <v-icon slot="prepend" color="red" @click="editedItem.amount--">
                                                    mdi-minus
                                                </v-icon>
                                            </v-text-field>
                                        </v-col>

                                        {{-- 忽略扣分 未達扣分標準 建議事項 --}}
                                        <v-col cols="6">
                                            <v-checkbox v-model="editedItem.is_ignore" label="忽略扣分"
                                                color="red"></v-checkbox>
                                        </v-col>
                                        <v-col cols="6">
                                            <v-checkbox v-model="editedItem.is_not_reach_deduct_standard" label="未達扣分標準"
                                                color="red"></v-checkbox>
                                        </v-col>
                                        <v-col cols="6">
                                            <v-checkbox v-model="editedItem.is_suggestion" label="建議事項"
                                                color="red"></v-checkbox>
                                        </v-col>

                                        <v-col cols="12">
                                            <v-textarea label="備註" v-model="editedItem.memo"
                                                rows="2"></v-textarea>
                                        </v-col>
                                    </v-row>
                                </v-container>
                            </v-card-text>

                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="blue darken-1" text @click="close">取消</v-btn>
                                <v-btn color="blue darken-1" text @click="save"
                                    :disabled="!editedItem.clear_defect_id || (editedItem.amount < 1)">
                                    儲存
                                </v-btn>
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
                    // 任務的缺失
                    taskDefects: null,
                    tab: null,
                    tabs: [],
                    loading: false,
                    dialog: false,
                    editedItem: {
                        clear_defect: {

                        },
                    },
                    activeDefects: [],
                    main_defects: [],

                    totalInnerScore: 0,
                    totalOuterScore: 0,

                },

                methods: {
                    getDefects() {
                        this.loading = true;
                        axios.get(`/api/tasks/{{ $task->id }}/clear-defects`).then((res) => {
                            this.taskDefects = res.data.data;
                            this.tabs = Object.keys(this.taskDefects);
                            this.loading = false;
                        });
                    },

                    getActiveDefects() {
                        axios.get(`/api/clear-defects/active`).then((res) => {
                            this.activeDefects = res.data.data;
                            // 將缺失條文的key值轉成陣列
                            this.main_defects = Object.keys(this.activeDefects);
                        });
                    },

                    // 取得食安內外場扣分
                    getTaskScore() {
                        axios.get(`/api/tasks/{{ $task->id }}/clear-defect/score`).then((res) => {
                            this.totalInnerScore = res.data.data.inner_score;
                            this.totalOuterScore = res.data.data.outer_score;
                        });
                    },

                    openDialog(taskDefect) {
                        this.editedItem = taskDefect;
                        this.dialog = true;
                    },

                    close() {
                        this.loading = true;
                        this.dialog = false;
                        this.getDefects();
                        this.getTaskScore();
                    },
                    save() {
                        this.dialog = false;
                        this.loading = true;
                        axios.put(`/api/tasks/clear-defects/${this.editedItem.id}`, {
                            clear_defect_id: this.editedItem.clear_defect_id,
                            amount: this.editedItem.amount,
                            is_ignore: this.editedItem.is_ignore,
                            is_not_reach_deduct_standard: this.editedItem.is_not_reach_deduct_standard,
                            is_suggestion: this.editedItem.is_suggestion,
                            memo: this.editedItem.memo,
                        }).then((res) => {
                            if (res.data.status == 'success') {
                                this.getDefects();
                                this.getTaskScore();
                                // 將tab設定為編輯前的tab
                                this.loading = false;
                                alert('編輯成功');
                            } else {
                                this.loading = false;
                                alert('編輯失敗');
                            }
                        });
                    },

                    // 刪除
                    deleteItem(taskDefect) {
                        const confirm = window.confirm('確定要刪除嗎?');
                        if (!confirm) {
                            return;
                        }
                        this.loading = true;
                        axios.delete(`/api/tasks/clear-defects/${taskDefect.id}`).then((res) => {
                            if (res.data.status == 'success') {
                                this.getDefects();
                                this.getTaskScore();
                                this.loading = false;
                                alert('刪除成功');
                            } else {
                                this.loading = false;
                                alert('刪除失敗');
                            }
                        });
                    },
                },


                mounted() {
                    this.getDefects();
                    this.getActiveDefects();
                    this.getTaskScore();
                },

            })
        </script>
    </x-slot:footerFiles>
</x-base-layout>