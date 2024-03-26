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
                            <v-btn color="primary" text href="{{ route('v2.app.tasks.defect.create', $task->id) }}">
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

                                                            <v-chip color="warning" text dark small label
                                                                v-if="!(taskDefect.is_ignore||taskDefect.is_not_reach_deduct_standard||taskDefect.is_suggestion||taskDefect.is_repeat)">
                                                                @{{ taskDefect.defect.deduct_point }}分
                                                            </v-chip>
                                                            <v-chip color="red" text dark small label
                                                                v-if="taskDefect.is_ignore">忽略扣分</v-chip>
                                                            <v-chip color="red" text dark small label
                                                                v-if="taskDefect.is_not_reach_deduct_standard">未達扣分標準</v-chip>
                                                            <v-chip color="red" text dark small label
                                                                v-if="taskDefect.is_suggestion">建議事項</v-chip>
                                                            <v-chip color="red" text dark small label
                                                                v-if="taskDefect.is_repeat">重複缺失</v-chip>
                                                        </v-chip-group>
                                                    </v-col>
                                                    <v-col cols="12">
                                                        <v-text-field label="缺失類別"
                                                            v-model="taskDefect.defect.category"
                                                            readonly></v-text-field>
                                                    </v-col>
                                                    <v-col cols="12">
                                                        <v-text-field label="缺失分類" v-model="taskDefect.defect.group"
                                                            readonly></v-text-field>
                                                    </v-col>
                                                    <v-col cols="12">
                                                        <v-text-field label="子項目" v-model="taskDefect.defect.title"
                                                            readonly></v-text-field>
                                                    </v-col>
                                                    <v-col cols="12">
                                                        <v-textarea label="稽核標準"
                                                            v-model="taskDefect.defect.description" readonly
                                                            rows="3"></v-textarea>
                                                    </v-col>

                                                    <v-col cols="12">
                                                        <v-textarea label="備註" v-model="taskDefect.memo" readonly
                                                            rows="2"></v-textarea>
                                                    </v-col>
                                                    {{-- 稽核員 --}}
                                                    <v-col cols="12">
                                                        <v-text-field label="稽核員" v-model="taskDefect.user.name"
                                                            readonly></v-text-field>
                                                    </v-col>
                                                    {{-- 稽核日期 --}}
                                                    <v-col cols="12">
                                                        <v-text-field label="稽核時間" v-model="taskDefect.created_at"
                                                            readonly></v-text-field>
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
                    <v-dialog v-model="dialog" max-width="500px">
                        <v-card>
                            <v-card-title>
                                <span class="headline">編輯缺失</span>
                            </v-card-title>
                            <v-card-text>
                                <v-container>
                                    <v-row>
                                        {{-- 區站 --}}
                                        <v-col cols="12">
                                            <v-select label="區站" v-model="editedItem.restaurant_workspace_id"
                                                :items="workSpaces" item-text="area" item-value="id"
                                                dense></v-select>
                                        </v-col>
                                        <v-col cols="12">
                                            <v-select label="缺失分類" :items="groups"
                                                v-model="editedItem.defect.group">
                                            </v-select>
                                        </v-col>

                                        <v-col cols="12">
                                            <v-select label="子項目" :items="titles"
                                                v-model="editedItem.defect.title">
                                            </v-select>
                                        </v-col>
                                        <v-col cols="12">
                                            <v-select
                                                :items="(activeDefects[editedItem.defect.group] && activeDefects[editedItem
                                                    .defect.group][editedItem.defect.title]) ? activeDefects[editedItem
                                                    .defect.group][editedItem.defect.title]: []"
                                                label="稽核標準" item-text="description" item-value="id"
                                                v-model="editedItem.defect_id">
                                                <template v-slot:item="{ item }">
                                                    <div style="white-space: normal; line-height: 1.5;">
                                                        @{{ item.description }}
                                                        , @{{ item.deduct_point }}分
                                                        , @{{ item.category }} 。
                                                    </div>
                                                </template>
                                            </v-select>
                                        </v-col>
                                        {{-- 忽略扣分 未達扣分標準 建議事項 重複缺失 --}}
                                        <v-col cols="6">
                                            <v-checkbox color="red" label="忽略扣分"
                                                v-model="editedItem.is_ignore"></v-checkbox>
                                        </v-col>
                                        <v-col cols="6">
                                            <v-checkbox color="red" label="未達扣分標準"
                                                v-model="editedItem.is_not_reach_deduct_standard"></v-checkbox>
                                        </v-col>
                                        <v-col cols="6">
                                            <v-checkbox color="red" label="建議事項"
                                                v-model="editedItem.is_suggestion"></v-checkbox>
                                        </v-col>
                                        <v-col cols="6">
                                            <v-checkbox color="red" label="重複缺失"
                                                v-model="editedItem.is_repeat"></v-checkbox>
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
                                <v-btn color="blue darken-1" text @click="save" :disabled="!editedItem.defect_id">
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
                    workSpaces: [],
                    editedItem: {
                        defect: {},
                    },
                    activeDefects: [],
                    groups: [],
                    titles: [],
                    totalInnerScore: 0,
                    totalOuterScore: 0,
                },

                methods: {
                    getDefects() {
                        this.loading = true;
                        axios.get(`/api/tasks/{{ $task->id }}/defects`).then((res) => {
                            this.taskDefects = res.data.data;
                            this.tabs = Object.keys(this.taskDefects);
                        }).catch((err) => {
                            alert(err.response.data.message);
                        }).finally(() => {
                            this.loading = false;
                        });

                    },

                    getActiveDefects() {
                        this.loading = true;
                        axios.get(`/api/defects/active`).then((res) => {
                            this.activeDefects = res.data.data;
                            // 將缺失條文的key值轉成陣列
                            this.groups = Object.keys(this.activeDefects);
                        }).catch((err) => {
                            alert(err.response.data.message);
                        }).finally(() => {
                            this.loading = false;
                        });
                    },

                    // 取得食安內外場扣分
                    getTaskScore() {
                        loading = true;
                        axios.get(`/api/tasks/{{ $task->id }}/defect/score`).then((res) => {
                            this.totalInnerScore = res.data.data.inner_score;
                            this.totalOuterScore = res.data.data.outer_score;
                        }).catch((err) => {
                            alert(err.response.data.message);
                        }).finally(() => {
                            this.loading = false;
                        });
                    },

                    getRestaurantsWorkSpaces() {
                        axios.get(`/api/restaurants/work-spaces`, {
                                params: {
                                    restaurant_id: {{ $task->restaurant_id }}
                                }
                            })
                            .then((res) => {
                                this.workSpaces = res.data.data.restaurant_workspaces;
                            })
                            .catch((err) => {
                                alert(err.response.data.message);
                            })
                            .finally(() => {
                                this.loading = false;
                            });
                    },

                    openDialog(taskDefect) {
                        this.editedItem = structuredClone(taskDefect);
                        this.dialog = true;
                        this.titles = Object.keys(this.activeDefects[this.editedItem.defect.group]);
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
                        axios.put(`/api/tasks/defects/${this.editedItem.id}`, {
                            restaurant_workspace_id: this.editedItem.restaurant_workspace_id,
                            defect_id: this.editedItem.defect_id,
                            memo: this.editedItem.memo,
                            is_ignore: this.editedItem.is_ignore,
                            is_not_reach_deduct_standard: this.editedItem
                                .is_not_reach_deduct_standard,
                            is_suggestion: this.editedItem.is_suggestion,
                            is_repeat: this.editedItem.is_repeat,
                        }).then((res) => {
                            if (res.data.status == 'success') {
                                this.getDefects();
                                this.getTaskScore();
                            } else {
                                alert('編輯失敗');
                            }
                        }).catch((err) => {
                            alert(err.response.data.message);
                        }).finally(() => {
                            this.loading = false;
                        });
                    },

                    deleteItem(taskDefect) {
                        const confirm = window.confirm('確定要刪除嗎?');
                        if (!confirm) {
                            return;
                        }
                        this.loading = true;
                        axios.delete(`/api/tasks/defects/${taskDefect.id}`).then((res) => {
                                if (res.data.status == 'success') {
                                    this.getDefects();
                                    this.getTaskScore();
                                    alert('刪除成功');
                                } else {
                                    alert('刪除失敗');
                                }
                            })
                            .catch((err) => {
                                alert(err.response.data.message);
                            })
                            .finally(() => {
                                this.loading = false;
                            });
                    },
                },


                watch: {
                    // 監聽缺失分類的改變
                    'editedItem.defect.group': function(val) {
                        this.titles = Object.keys(this.activeDefects[val]);
                    },

                },

                mounted() {
                    this.getDefects();
                    this.getActiveDefects();
                    this.getTaskScore();
                    this.getRestaurantsWorkSpaces();
                },

            })
        </script>
    </x-slot:footerFiles>
</x-base-layout>
