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
                    {{-- 預加載 --}}
                    <v-row v-show="loading">
                        <v-col cols="12" sm="4" v-for="n in 6" :key="n">
                            <template>
                                <v-sheet class="pa-3">
                                    <v-skeleton-loader class="mx-auto" type="card"></v-skeleton-loader>
                                </v-sheet>
                            </template>
                        </v-col>
                    </v-row>

                    <v-row v-show="!loading">
                        <v-col cols="12" sm="4" v-for="task in tasks" :key="task.id">
                            <v-lazy :options="{ threshold: 0.3 }" transition="fade-transition" class="my-4">
                                <v-card>
                                    <v-card-title>
                                        @{{ task.category }}
                                        <v-chip v-if="task.status === 'pending'" label color="purple darken-4" dark
                                            small class="ml-2">未稽核
                                        </v-chip>
                                        <v-chip v-if="task.status === 'processing'" label color="warning" dark small
                                            class="ml-2">稽核中
                                        </v-chip>
                                        <v-chip v-if="task.status === 'pending_approval'" label color="red darken-4"
                                            dark small class="ml-2">待核對
                                        </v-chip>
                                        <v-chip v-if="task.status === 'completed'" label color="success" dark small
                                            class="ml-2">已完成
                                        </v-chip>
                                        <v-spacer></v-spacer>
                                        <v-switch
                                            v-model="task.users.find(user => user.id === {{ auth()->user()->id }}).pivot.is_completed"
                                            inset color="success" :loading="loading"
                                            :disabled="task.status == 'completed' || task.task_date < '{{ now()->toDateString() }}'"
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
                                                <v-chip v-for="meal in task.meals" :key="meal.id" label
                                                    color="blue-grey darken-3" class="ma-1" dark
                                                    @click="mealDialog = true; taskItem = task">
                                                    <v-icon small left>mdi-food</v-icon>
                                                    @{{ meal.name }}
                                                    <v-icon v-show="meal.pivot.is_taken" class="ml-1" small
                                                        color="success">
                                                        mdi-check
                                                    </v-icon>
                                                    <v-chip v-show="meal.pivot.memo" class="ml-1" small label
                                                        color="purple darken-4" dark>
                                                        @{{ meal.pivot.memo }}
                                                    </v-chip>
                                                </v-chip>

                                            </div>
                                            <v-divider class="text--secondary"></v-divider>
                                            <div class="subtitle-2">
                                                專案@{{ task.projects.length }}項:
                                                <v-chip v-for="project in task.projects" :key="project.id" label
                                                    class="ma-1" color="blue-grey darken-3" dark
                                                    @click="projectDialog = true; taskItem = task">
                                                    <v-icon small left>mdi-clipboard-check-outline</v-icon>
                                                    @{{ project.name }}:@{{ project.description }}
                                                    <v-icon v-show="project.pivot.is_checked" class="ml-1" small
                                                        color="success">
                                                        mdi-check
                                                    </v-icon>
                                                </v-chip>
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
                                                    <v-list-item @click="approvalDialog = true; taskItem = task"
                                                        :disabled="task.status !== 'pending_approval'">
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
                            </v-lazy>
                        </v-col>
                    </v-row>

                    {{-- project 狀態切換和 diolog --}}
                    <v-dialog v-model="projectDialog" max-width="500px" persistent>
                        <v-card>
                            <v-card-title>
                                <span class="headline">專案查核</span>
                            </v-card-title>

                            <v-card-text>
                                <v-container>
                                    <v-row>
                                        <v-col cols="12" sm="6"
                                            v-for="project in (taskItem && taskItem.projects)" :key="project.id">
                                            <span
                                                class="subtitle-2">@{{ project.name }}@{{ project.description }}</span>
                                            <v-switch v-model="project.pivot.is_checked" inset color="success"
                                                :loading="loading"
                                                :label="project.pivot.is_checked ? '已查核' : '未查核'">
                                            </v-switch>
                                        </v-col>
                                    </v-row>
                                </v-container>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>

                                <v-btn color="blue darken-1" text @click="saveProjectIsChecked">
                                    儲存
                                </v-btn>
                                <v-btn color="blue darken-1" text
                                    @click="projectDialog = false;taskItem = null;getTasks()">
                                    取消
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-dialog>

                    {{-- meal 狀態和備註修改 dialog --}}
                    <v-dialog v-model="mealDialog" max-width="500px" persistent>
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
                                        <v-col cols="12" sm="6"
                                            v-for="meal in (taskItem && taskItem.meals)" :key="meal.id">
                                            <span class="subtitle-2">@{{ meal.qno }} @{{ meal.name }}
                                                @{{ meal.chef }} @{{ meal.workspace }}</span>
                                            <v-switch v-model="meal.pivot.is_taken" inset color="success"
                                                :loading="loading" :label="meal.pivot.is_taken ? '已帶回' : '未帶回'">

                                            </v-switch>
                                            <v-text-field v-model="meal.pivot.memo" label="備註"
                                                dense></v-text-field>
                                        </v-col>
                                    </v-row>
                                </v-container>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="blue darken-1" text @click="saveMealIsTaken">
                                    儲存
                                </v-btn>
                                <v-btn color="blue darken-1" text
                                    @click="mealDialog = false;taskItem = null;getTasks()">
                                    取消
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-dialog>

                    {{-- 主管簽核 dialog --}}
                    <v-dialog v-model="approvalDialog" max-width="500px" persistent>
                        <v-card>
                            <v-card-title>
                                <span class="headline">主管簽核</span>
                            </v-card-title>

                            <v-card-text>
                                <v-container>
                                    <v-row>
                                        {{-- 內場主管 --}}
                                        <v-col cols="12" sm="6">
                                            <v-text-field label="內場主管" dense
                                                v-model="taskItem && taskItem.inner_manager">
                                        </v-col>
                                        {{-- 外場主管 --}}
                                        <v-col cols="12" sm="6">
                                            <v-text-field label="外場主管" dense
                                                v-model="taskItem && taskItem.outer_manager">
                                        </v-col>
                                    </v-row>
                                </v-container>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="blue darken-1" text @click="saveBoss">
                                    儲存
                                </v-btn>
                                <v-btn color="blue darken-1" text
                                    @click="approvalDialog = false;taskItem = null;getTasks()">
                                    取消
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
                    status: null,
                    loading: false,
                    projectDialog: false,
                    taskItem: null,
                    mealDialog: false,
                    approvalDialog: false,
                },

                methods: {
                    getTasks() {
                        this.loading = true
                        axios.get("/api/user/tasks", {
                                params: {
                                    status: this.status
                                }
                            })
                            .then(response => {
                                this.tasks = response.data.data
                                this.loading = false
                            })
                            .catch(error => {
                                console.log(error)
                            })
                    },

                    changeStatus(taskId, isCompleted) {
                        axios.put(`/api/user/tasks/${taskId}`, {
                                is_completed: isCompleted
                            })
                            .then(response => {
                                this.getTasks()
                            })
                            .catch(error => {
                                console.log(error)
                            })
                    },
                    // save multiple project is_checked
                    saveProjectIsChecked() {
                        this.loading = true
                        axios.put(`/api/tasks/${this.taskItem.id}/projects`, {
                                projects: this.taskItem.projects
                            })
                            .then(response => {
                                if (response.data.status === 'success') {
                                    alert('儲存成功')
                                } else {
                                    alert('儲存失敗')
                                }
                                this.loading = false
                                this.projectDialog = false
                                this.taskItem = null
                                this.getTasks()
                            })
                            .catch(error => {
                                console.log(error)
                            })
                    },

                    // save multiple meal is_taken and memo
                    saveMealIsTaken() {
                        this.loading = true
                        axios.put(`/api/tasks/${this.taskItem.id}/meals`, {
                                meals: this.taskItem.meals
                            })
                            .then(response => {
                                if (response.data.status === 'success') {
                                    alert('儲存成功')
                                } else {
                                    alert('儲存失敗')
                                }
                                this.loading = false
                                this.mealDialog = false
                                this.taskItem = null
                                this.getTasks()

                            })
                            .catch(error => {
                                console.log(error)
                            })
                    },

                    // save boss
                    saveBoss() {
                        this.loading = true
                        axios.put(`/api/tasks/${this.taskItem.id}/boss`, {
                                inner_manager: this.taskItem.inner_manager,
                                outer_manager: this.taskItem.outer_manager
                            })
                            .then(response => {
                                if (response.data.status === 'success') {
                                    alert('簽核成功')
                                } else {
                                    alert('簽核失敗')
                                }
                                this.loading = false
                                this.approvalDialog = false
                                this.taskItem = null
                                this.getTasks()
                            })
                            .catch(error => {
                                console.log(error)
                            })
                    },
                },

                watch: {
                    status() {
                        this.getTasks()
                    }
                },

                mounted() {
                    this.getTasks()

                },

            })
        </script>

    </x-slot:footerFiles>
</x-base-layout>
