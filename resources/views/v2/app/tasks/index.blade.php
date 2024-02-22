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
                    {{-- 篩選狀態 --}}
                    <v-row>
                        <v-col cols="12" sm="6">
                            <v-select label="狀態" v-model="status" :items="items" item-text="text"
                                item-value="value" dense></v-select>
                        </v-col>
                    </v-row>


                    <v-row>
                        {{-- 一開始只顯示6筆 拉到底再顯示6筆 --}}
                        <v-col cols="12" sm="4" v-for="task in tasks" :key="task.id">
                            <v-card>
                                <v-card-title>
                                    @{{ task.category }}
                                    <v-chip v-if="task.status === 'pending'" label color="purple darken-4" dark small
                                        class="ml-2">未稽核
                                    </v-chip>
                                    <v-chip v-if="task.status === 'processing'" label color="warning" dark small
                                        class="ml-2">稽核中
                                    </v-chip>
                                    <v-chip v-if="task.status === 'pending_approval'" label color="red darken-4" dark
                                        small class="ml-2">待核對
                                    </v-chip>
                                    <v-chip v-if="task.status === 'completed'" label color="success" dark small
                                        class="ml-2">已完成
                                    </v-chip>
                                    <v-spacer></v-spacer>
                                    <v-switch
                                        v-model="task.users.find(user => user.id === {{ auth()->user()->id }}).pivot.is_completed"
                                        inset color="success"
                                        :disabled="task.status == 'completed' || task.task_date >
                                            '{{ now()->toDateTimestring() }}'"
                                        @change="changeStatus(task.id, task.users.find(user => user.id === {{ auth()->user()->id }}).pivot
                                                .is_completed)"
                                        :label="task.users.find(user => user.id === {{ auth()->user()->id }}).pivot
                                            .is_completed ? '完成' : '未完成'">
                                    </v-switch>
                                </v-card-title>
                                <v-card-text>
                                    <v-row>
                                        <div class="subtitle-2">
                                            採樣@{{ task.meals.length }}項:
                                            <v-btn v-if="task.meals.length > 0" small color="blue darken-3" dark
                                                @click="openMealDialog(task)">
                                                <v-icon left>mdi-food-apple-outline</v-icon>
                                                採樣
                                            </v-btn>
                                        </div>
                                        <v-divider class="text--secondary"></v-divider>
                                        <div class="subtitle-2">
                                            專案@{{ task.projects.length }}項:
                                            <v-btn v-if="task.projects.length > 0" small color="blue darken-3" dark
                                                @click="openProjectDialog(task)">
                                                <v-icon left>mdi-file-document-edit-outline</v-icon>
                                                專案
                                            </v-btn>
                                        </div>
                                    </v-row>
                                    <v-row>
                                        <div class="subtitle-2 col-12 col-sm-6">
                                            <v-icon small color="teal darken-2">mdi-map-marker</v-icon>
                                            <span class="text--primary">
                                                @{{ task.restaurant.brand + ' ' + task.restaurant.shop }}</span>
                                        </div>
                                        <div class="subtitle-2 col-12 col-sm-6">
                                            <v-icon small color="teal darken-2">mdi-calendar</v-icon>
                                            <span class="text--primary">
                                                @{{ task.task_date }}
                                            </span>
                                        </div>
                                        <div class="subtitle-2 col-12 col-sm-6">
                                            <v-icon small color="teal darken-2">mdi-account</v-icon>
                                            <span class="text--primary">
                                                @{{ task.users.map(user => user.name).join(', ') }}
                                            </span>
                                        </div>

                                    </v-row>
                                    <v-row>
                                        <div class="subtitle-2 col-12 col-sm-6">
                                            <v-icon small color="teal darken-2">mdi-timer-play-outline</v-icon>
                                            <span class="text--primary">
                                                @{{ task.start_at }}
                                            </span>
                                        </div>
                                        <div class="subtitle-2 col-12 col-sm-6">
                                            <v-icon small color="teal darken-2">mdi-timer-off-outline</v-icon>
                                            <span class="text--primary">
                                                @{{ task.end_at }}
                                            </span>
                                        </div>
                                    </v-row>
                                </v-card-text>
                                <v-card-actions>
                                    <v-spacer></v-spacer>
                                    <v-menu v-if="task.category !== '餐點採樣'" :close-on-content-click="false"
                                        origin="center center" transition="scale-transition" top left>
                                        <template v-slot:activator="{ on, attrs }">
                                            <v-btn color="blue darken-1" text v-bind="attrs" v-on="on">
                                                <v-icon>mdi-dots-vertical</v-icon>
                                            </v-btn>
                                        </template>
                                        <v-list>
                                            <v-list-group prepend-icon="mdi-file-document-edit-outline">
                                                <template v-slot:activator>
                                                    <v-list-item-content>
                                                        <v-list-item-title>稽核相關</v-list-item-title>
                                                    </v-list-item-content>
                                                </template>
                                                {{-- 新增食安缺失頁面 --}}
                                                <v-list-item :href="`/v2/app/task/${task.id}/defect/create`"
                                                    v-show="task.category === '食安及5S' || task.category === '食安及5S複稽'"
                                                    :disabled="!(new Date(task.task_date).toISOString().substring(0, 10) ==
                                                        '{{ now()->toDateString() }}')">
                                                    <v-list-item-title>新增食安缺失</v-list-item-title>
                                                </v-list-item>
                                                {{-- 食安稽核紀錄 --}}
                                                <v-list-item :href="`/v2/app/task/${task.id}/defect/edit`"
                                                    v-show="task.category === '食安及5S' || task.category === '食安及5S複稽'">
                                                    <v-list-item-title>食安稽核紀錄</v-list-item-title>
                                                </v-list-item>
                                                {{-- 新增清檢缺失頁面 --}}
                                                <v-list-item :href="`/v2/app/task/${task.id}/clear-defect/create`"
                                                    v-show="task.category === '清潔檢查'"
                                                    :disabled="!(new Date(task.task_date).toISOString().substring(0, 10) ==
                                                        '{{ now()->toDateString() }}')">
                                                    <v-list-item-title>新增清檢缺失</v-list-item-title>
                                                </v-list-item>
                                                {{-- 清檢稽核紀錄 --}}
                                                <v-list-item :href="`/v2/app/task/${task.id}/clear-defect/edit`"
                                                    v-show="task.category === '清潔檢查'">
                                                    <v-list-item-title>清檢稽核紀錄</v-list-item-title>
                                                </v-list-item>
                                                {{-- 主管簽核 --}}
                                                <v-list-item @click="isAllCompleted(task)">
                                                    <v-list-item-title>主管簽核</v-list-item-title>
                                                </v-list-item>
                                            </v-list-group>

                                            <v-list-group prepend-icon="mdi-file-pdf-box">
                                                <template v-slot:activator>
                                                    <v-list-item-content>
                                                        <v-list-item-title>報告相關</v-list-item-title>
                                                    </v-list-item-content>
                                                </template>
                                                {{-- 內場報告 --}}
                                                <v-list-item :href="`/v1/app/task/${task.id}/inner-report`"
                                                    target="_blank">
                                                    <v-list-item-title>內場報告</v-list-item-title>
                                                </v-list-item>
                                                {{-- 外場報告 --}}
                                                <v-list-item :href="`/v1/app/task/${task.id}/outer-report`"
                                                    target="_blank">
                                                    <v-list-item-title>外場報告</v-list-item-title>
                                                </v-list-item>
                                            </v-list-group>

                                        </v-list>
                                    </v-menu>
                                </v-card-actions>
                            </v-card>
                        </v-col>
                    </v-row>

                    <v-row v-show="noMoreData">
                        <v-col cols="12">
                            <v-alert type="info" outlined>

                                已無更多資料
                            </v-alert>
                        </v-col>
                    </v-row>

                    <v-row v-show="loading">
                        <v-col cols="12">
                            <v-progress-linear indeterminate color="blue darken-1"></v-progress-linear>
                        </v-col>
                    </v-row>

                    {{-- project 狀態切換和 diolog --}}
                    <v-dialog v-model="projectDialog" max-width="500px">
                        <v-card>
                            <v-card-title>
                                <span class="headline">專案查核</span>
                            </v-card-title>

                            <v-card-text>
                                <v-container>
                                    <v-row>
                                        <v-col cols="12" sm="6" v-for="project in taskItem.projects"
                                            :key="project.id">
                                            <span class="subtitle-2">@{{ project.name }}@{{ project.description }}</span>
                                            <v-switch v-model="project.pivot.is_checked" inset color="success"
                                                :label="project.pivot.is_checked ? '已查核' : '未查核'">
                                            </v-switch>
                                        </v-col>
                                    </v-row>
                                </v-container>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="blue darken-1" text @click="close">
                                    取消
                                </v-btn>
                                <v-btn color="blue darken-1" text @click="saveProjectIsChecked">
                                    儲存
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-dialog>

                    {{-- meal 狀態和備註修改 dialog --}}
                    <v-dialog v-model="mealDialog" max-width="500px">
                        <v-card>
                            <v-card-title>
                                <span class="headline">餐點採樣</span>
                                <v-spacer></v-spacer>
                                {{-- 採樣單excel --}}
                                <v-btn color="blue darken-1" text small target="_blank"
                                    :href="taskItem && `/v1/app/task/${taskItem.id}/meal/export`">
                                    <v-icon left>mdi-file-excel</v-icon>
                                    採樣單
                                </v-btn>
                            </v-card-title>

                            <v-card-text>
                                <v-container>
                                    <v-row>
                                        <v-col cols="12" sm="6" v-for="meal in taskItem.meals"
                                            :key="meal.id">
                                            <span class="subtitle-2">@{{ meal.qno }} @{{ meal.name }}
                                                @{{ meal.chef }} @{{ meal.workspace }}
                                            </span>
                                            <v-switch v-model.lazy="meal.pivot.is_taken" inset color="success"
                                                :label="meal.pivot.is_taken ? '已取' : '未取'">
                                            </v-switch>
                                            <v-text-field v-model.lazy="meal.pivot.memo" label="備註"
                                                dense></v-text-field>
                                            {{-- meal.note --}}
                                            <span class="subtitle-2">備忘錄: @{{ meal.note }}</span>
                                            <v-divider></v-divider>
                                        </v-col>
                                    </v-row>
                                </v-container>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>

                                <v-btn color="blue darken-1" text @click="close">
                                    取消
                                </v-btn>

                                <v-btn color="blue darken-1" text @click="saveMealIsTaken">
                                    儲存
                                </v-btn>

                            </v-card-actions>
                        </v-card>
                    </v-dialog>

                    {{-- 主管簽核 dialog --}}
                    <v-dialog v-model="approvalDialog" max-width="500px">
                        <v-card>
                            <v-card-title>
                                <span class="headline">主管簽核</span>
                            </v-card-title>

                            <v-card-text>
                                <v-container>
                                    <v-row>
                                        {{-- 內場主管 --}}
                                        <v-col cols="12" sm="6">
                                            <v-text-field label="內場主管" dense v-model.lazy="taskItem.inner_manager">
                                        </v-col>
                                        {{-- 外場主管 --}}
                                        <v-col cols="12" sm="6">
                                            <v-text-field label="外場主管" dense v-model.lazy="taskItem.outer_manager">
                                        </v-col>
                                    </v-row>
                                </v-container>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="blue darken-1" text @click="saveBoss">
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
                    items: [{
                            text: '全部',
                            value: null
                        },
                        {
                            text: '未稽核',
                            value: 'pending'
                        },
                        {
                            text: '稽核中',
                            value: 'processing'
                        },
                        {
                            text: '待核對',
                            value: 'pending_approval'
                        },
                        {
                            text: '已完成',
                            value: 'completed'
                        },
                    ],
                    tasks: [],
                    limit: 6,
                    total: 0,
                    noMoreData: false,
                    status: null,
                    loading: false,
                    projectDialog: false,
                    taskItem: {
                        projects: [],
                        meals: [],
                        inner_manager: '',
                        outer_manager: '',
                    },
                    mealDialog: false,
                    approvalDialog: false,

                },

                methods: {
                    getTasks() {
                        this.loading = true
                        axios.get("/api/user/tasks", {
                                params: {
                                    status: this.status,
                                    limit: this.limit
                                }
                            })
                            .then(response => {
                                this.tasks = response.data.data
                                this.total = response.data.total
                            })
                            .catch(error => {
                                alert(error.response.data.message)
                            })
                            .finally(() => {
                                this.loading = false
                            })
                    },

                    changeStatus(taskId, isCompleted) {
                        this.loading = true
                        axios.put(`/api/user/tasks/${taskId}`, {
                                is_completed: isCompleted
                            })
                            .then(response => {
                                this.getTasks()
                            })
                            .catch(error => {
                                alert(error.response.data.message)
                            })
                            .finally(() => {
                                this.loading = false
                            })
                    },

                    openProjectDialog(task) {
                        this.projectDialog = true
                        this.taskItem = structuredClone(task)
                    },

                    openMealDialog(task) {
                        this.mealDialog = true
                        this.taskItem = structuredClone(task)
                    },

                    openApprovalDialog(task) {
                        this.approvalDialog = true
                        this.taskItem = structuredClone(task)
                    },
                    // 確認此任務所有人員都已完成
                    isAllCompleted(task) {
                        axios.get(`/api/tasks/${task.id}/is-all-completed`)
                            .then(response => {
                                if (response.data.data) {
                                    const confirm = window.confirm('確認此任務所有人員都已完成，並進行主管簽核？')
                                    if (confirm) {
                                        this.openApprovalDialog(task)
                                    }


                                } else {
                                    alert('此任務尚有人員未完成')
                                }
                            })
                            .catch(error => {
                                alert(error.response.data.message)
                            })
                    },

                    close() {
                        this.projectDialog = false
                        this.mealDialog = false
                        this.approvalDialog = false
                        this.taskItem = {}
                    },

                    saveProjectIsChecked() {
                        this.loading = true
                        axios.put(`/api/tasks/${this.taskItem.id}/projects`, {
                                projects: this.taskItem.projects
                            })
                            .then(response => {

                            })
                            .catch(error => {
                                alert(error.response.data.message)
                            })
                            .finally(() => {
                                this.loading = false
                                this.close()
                                this.getTasks()
                            })
                    },

                    saveMealIsTaken() {
                        this.loading = true
                        axios.put(`/api/tasks/${this.taskItem.id}/meals`, {
                                meals: this.taskItem.meals
                            })
                            .then(response => {

                            })
                            .catch(error => {
                                alert(error.response.data.message)
                            })
                            .finally(() => {
                                this.loading = false
                                this.close()
                                this.getTasks()
                            })
                    },

                    saveBoss() {
                        this.loading = true
                        axios.put(`/api/tasks/${this.taskItem.id}/boss`, {
                                inner_manager: this.taskItem.inner_manager,
                                outer_manager: this.taskItem.outer_manager
                            })
                            .then(response => {

                            })
                            .catch(error => {
                                alert(error.response.data.message)
                            })
                            .finally(() => {
                                this.loading = false
                                this.close()
                                this.getTasks()
                            })
                    },

                    handleScroll() {
                        if ((window.innerHeight + window.scrollY + 10) >= document.body.offsetHeight) {
                            if (this.loading) return
                            if (this.limit >= this.total) {
                                this.noMoreData = true
                                return
                            }
                            this.limit += 3
                        }
                    },

                },

                watch: {
                    status() {
                        this.noMoreData = false
                        this.limit = 6
                        this.getTasks()
                    },

                    limit() {
                        this.getTasks()
                    },

                },

                mounted() {
                    this.getTasks()
                    window.addEventListener('scroll', this.handleScroll);
                },

            })
        </script>

    </x-slot:footerFiles>
</x-base-layout>
