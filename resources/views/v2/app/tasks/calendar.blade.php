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
                    <v-row v-show="loading">
                        <v-col cols="12">
                            <v-skeleton-loader type="table" transition="scale-transition" elevation="2" height="600px"
                                class="mb-2"></v-skeleton-loader>
                        </v-col>
                    </v-row>
                    <v-row class="fill-height" v-show="!loading">
                        <v-col>
                            <v-sheet height="64">
                                <v-toolbar flat>
                                    <v-btn fab text small color="grey darken-2" @click="prev">
                                        <v-icon small>
                                            mdi-chevron-left
                                        </v-icon>
                                    </v-btn>
                                    <v-btn fab text small color="grey darken-2" @click="next">
                                        <v-icon small>
                                            mdi-chevron-right
                                        </v-icon>
                                    </v-btn>
                                    <v-toolbar-title v-if="$refs.calendar">
                                        @{{ $refs.calendar.title }}
                                    </v-toolbar-title>
                                    <v-spacer></v-spacer>
                                    <v-btn fab small color="primary" @click="showNotAssign" class="mr-2">
                                        <v-icon small>
                                            mdi-eye
                                        </v-icon>
                                    </v-btn>
                                    @can('import-task')
                                        <v-btn fab small color="primary" @click="importDialog = true;importFile=null"
                                            class="mr-2">
                                            <v-icon small>
                                                mdi-calendar-import
                                            </v-icon>
                                        </v-btn>
                                    @endcan
                                    @can('create-task')
                                        <v-btn fab small color="primary" @click="dialog = true">
                                            <v-icon small>
                                                mdi-plus
                                            </v-icon>
                                        </v-btn>
                                    @endcan
                                </v-toolbar>
                            </v-sheet>
                            <v-sheet height="auto">
                                <v-calendar ref="calendar" v-model="focus" color="primary" :events="events"
                                    type="month" @click:event="showEvent" event-overlap-mode="column"
                                    :event-more="false" locale="zh-tw">
                                </v-calendar>
                                <v-menu v-model="selectedOpen" :activator="selectedElement" offset-y>
                                    <v-card>
                                        <v-toolbar :color="selectedEvent.color" dark>
                                            @can('update-task')
                                                <v-btn icon dark @click="editEvent(selectedEvent);">
                                                    <v-icon>mdi-pencil</v-icon>
                                                </v-btn>
                                            @endcan
                                            <v-toolbar-title>
                                                @{{ selectedEvent.name }}
                                            </v-toolbar-title>

                                        </v-toolbar>
                                        <v-card-text>
                                            <v-row>
                                                <v-col cols="12" sm="12" md="6">
                                                    <v-icon left color="teal darken-2" small>mdi-calendar</v-icon>
                                                    <span class="text--primary">
                                                        @{{ selectedEvent.start }}</span>

                                                </v-col>

                                                {{-- 地點 --}}
                                                <v-col cols="12" sm="12" md="6">
                                                    <v-icon left color="teal darken-2" small>mdi-map-marker</v-icon>
                                                    <span class="text--primary">
                                                        @{{ selectedEvent.brand }} @{{ selectedEvent.shop }}</span>
                                                </v-col>

                                                <v-col cols="12" sm="12" md="12">
                                                    <v-icon left color="teal darken-2" small>mdi-account</v-icon>
                                                    <span class="text--primary" v-for="user in selectedEvent.users">
                                                        @{{ user.name }}</span>

                                                </v-col>

                                                <v-col cols="12">
                                                    <v-icon left color="teal darken-2" small>mdi-food</v-icon>
                                                    <v-chip v-for="meal in selectedEvent.meals" class="ma-1"
                                                        :key="meal.id" color="blue-grey darken-3" dark small>
                                                        @{{ meal.name }}
                                                        <v-icon v-if="meal.pivot && meal.pivot.is_taken" right small
                                                            color="success">mdi-check</v-icon>
                                                    </v-chip>
                                                </v-col>

                                                <v-col cols="12">
                                                    <v-icon left color="teal darken-2" small>mdi-clipboard-text</v-icon>
                                                    <v-chip v-for="project in selectedEvent.projects" class="ma-1"
                                                        :key="project.id" color="blue-grey darken-3" dark small>
                                                        @{{ project.name }}
                                                        <v-icon v-if="project.pivot && project.pivot.is_checked" right
                                                            small color="success">mdi-check</v-icon>
                                                    </v-chip>
                                                </v-col>
                                                <v-col cols="12" sm="12" md="6">
                                                    <v-icon left color="teal darken-2"
                                                        small>mdi-timer-play-outline</v-icon>
                                                    <span class="text--primary">
                                                        @{{ selectedEvent.start_at }}</span>

                                                </v-col>
                                                <v-col cols="12" sm="12" md="6">
                                                    <v-icon left color="teal darken-2"
                                                        small>mdi-timer-off-outline</v-icon>
                                                    <span class="text--primary">
                                                        @{{ selectedEvent.end_at }}</span>
                                                </v-col>
                                            </v-row>
                                        </v-card-text>
                                        <v-divider></v-divider>
                                        <v-card-actions>
                                            <v-btn text color="blue darken-1" v-show="selectedEvent.category!=='餐點採樣'"
                                                :href="'/v1/app/task/' + selectedEvent.id + '/inner-report'"
                                                target="_blank">
                                                內場報告
                                            </v-btn>

                                            <v-btn text color="blue darken-1" v-show="selectedEvent.category!=='餐點採樣'"
                                                :href="'/v1/app/task/' + selectedEvent.id + '/outer-report'"
                                                target="_blank">
                                                外場報告
                                            </v-btn>
                                            <v-spacer></v-spacer>
                                            @can('delete-task')
                                                <v-btn text color="red darken-1" @click="remove(selectedEvent.id)">
                                                    刪除
                                                </v-btn>
                                            @endcan
                                        </v-card-actions>
                                    </v-card>
                                </v-menu>
                            </v-sheet>
                        </v-col>
                    </v-row>


                    <v-dialog v-model="dialog" max-width="500px" persistent>
                        <v-card>
                            <v-card-title>
                                <span class="headline" v-if="editedIndex === -1">新增任務</span>
                                <span class="headline" v-else>編輯任務</span>
                            </v-card-title>

                            <v-card-text>

                                {{-- 類別 --}}
                                <v-row>
                                    <v-col cols="12" sm="12" md="12">
                                        <v-select v-model="editedItem.category" :items="Object.keys(categories)"
                                            label="類別" :readonly="editedIndex > -1">
                                        </v-select>
                                    </v-col>
                                </v-row>

                                <v-row>
                                    <v-col cols="12" sm="12" md="6">
                                        <v-menu ref="selectDateOpen" v-model="selectDateOpen"
                                            transition="scale-transition" offset-y min-width="auto">
                                            <template v-slot:activator="{ on, attrs }">
                                                <v-text-field v-model="editedItem.date" label="日期"
                                                    prepend-icon="mdi-calendar" readonly v-bind="attrs"
                                                    v-on="on">
                                                </v-text-field>
                                            </template>
                                            <v-date-picker v-model="editedItem.date" scrollable locale="zh-tw">
                                            </v-date-picker>
                                        </v-menu>
                                    </v-col>
                                    <v-col cols="12" sm="12" md="6">
                                        <v-menu ref="selectTimeOpen" v-model="selectTimeOpen"
                                            transition="scale-transition" offset-y min-width="auto"
                                            :close-on-content-click="false">
                                            <template v-slot:activator="{ on, attrs }">
                                                <v-text-field v-model="editedItem.time" label="時間"
                                                    prepend-icon="mdi-clock-time-four-outline" readonly v-bind="attrs"
                                                    v-on="on">
                                                </v-text-field>
                                            </template>
                                            <v-time-picker v-model="editedItem.time" :allowed-minutes="allowedStep"
                                                locale="zh-tw">
                                            </v-time-picker>
                                        </v-menu>
                                    </v-col>

                                    <v-col cols="12" sm="12" md="12">
                                        <v-select v-model="editedItem.users" :items="users" multiple chips
                                            label="同仁" item-text="name" item-value="id" return-object>
                                        </v-select>
                                    </v-col>

                                    <v-col cols="12" sm="12" md="12">
                                        <v-select v-model="editedItem.brand" :items="Object.keys(restaurants)"
                                            label="品牌">
                                        </v-select>
                                    </v-col>

                                    <v-col cols="12" sm="12" md="12">
                                        <v-select v-model="editedItem.restaurant"
                                            :items="restaurants[editedItem.brand]" label="分店" item-text="shop"
                                            item-value="sid" return-object>
                                        </v-select>
                                    </v-col>

                                    <v-col cols="12" sm="12" md="12"
                                        v-if="editedItem.restaurant">
                                        <v-select v-model="editedItem.meals" :items="meals" multiple chips
                                            label="餐點" item-text="name" item-value="id" return-object clearable
                                            :loading="loading">
                                        </v-select>
                                    </v-col>

                                    <v-col cols="12" sm="12" md="12"
                                        v-if="editedItem.restaurant&&editedItem.category!=='餐點採樣'">
                                        <v-select v-model="editedItem.projects" :items="projects" multiple chips
                                            label="專案" item-text="description" item-value="id" return-object
                                            clearable>
                                        </v-select>
                                    </v-col>

                                </v-row>

                            </v-card-text>

                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="blue darken-1" text @click="close">取消</v-btn>
                                <v-btn color="blue darken-1" text @click="save"
                                    :disabled="!editedItem.category || !editedItem.date || !editedItem
                                        .time || !editedItem.users ||
                                        !editedItem.restaurant">
                                    儲存
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-dialog>

                    <v-dialog v-model="notAssignDialog" max-width="500px">
                        <v-card>
                            <v-card-title>
                                <span class="headline">未排任務 - 共 @{{ notAssign.length }} 筆</span>
                            </v-card-title>

                            <v-card-text>
                                <v-row>
                                    <v-col cols="12" sm="12" md="12">
                                        <v-list>
                                            <v-list-item v-for="item in notAssign" :key="item.id">
                                                <v-list-item-content>
                                                    <v-list-item-title>
                                                        @{{ item.brand_code }} @{{ item.shop }}
                                                    </v-list-item-title>
                                                </v-list-item-content>
                                            </v-list-item>
                                        </v-list>
                                    </v-col>
                                </v-row>
                            </v-card-text>
                        </v-card>
                    </v-dialog>

                    <v-dialog v-model="importDialog" max-width="500px">
                        <v-card>
                            <v-card-title>
                                <span class="headline">匯入任務</span>
                            </v-card-title>

                            <v-card-text>
                                <v-row>
                                    <v-col cols="12" sm="12" md="12">
                                        <v-file-input v-model="importFile" label="選擇檔案" dense
                                            :loading="loading" accept=".xlsx">
                                        </v-file-input>
                                    </v-col>
                                </v-row>
                            </v-card-text>

                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="blue darken-1" text @click="importDialog = false">取消</v-btn>
                                <v-btn color="blue darken-1" text @click="importTask" :disabled="!importFile">
                                    匯入
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

                data: () => ({
                    focus: new Date().toISOString().substr(0, 10),
                    selectedEvent: {},
                    selectedElement: null,
                    selectedOpen: false,
                    events: [],
                    loading: false,
                    dialog: false,
                    categories: {
                        '食安及5S': 'primary',
                        '清潔檢查': 'warning',
                        '餐點採樣': 'success',
                        '食安及5S複稽': 'error',
                    },
                    editedItem: {

                    },
                    selectDateOpen: false,
                    selectTimeOpen: false,
                    users: [],
                    restaurants: [],
                    meals: [],
                    projects: [],
                    editedIndex: -1,
                    notAssignDialog: false,
                    notAssign: [],
                    importDialog: false,
                    importFile: null,
                }),

                methods: {
                    viewDay({
                        date
                    }) {
                        this.focus = date
                        this.type = 'day'
                    },


                    prev() {
                        this.$refs.calendar.prev()
                    },
                    next() {
                        this.$refs.calendar.next()
                    },

                    showNotAssign() {

                        axios.get('/api/restaurants/unassigned', {
                                params: {
                                    date: this.focus,
                                }
                            })
                            .then((res) => {
                                this.notAssignDialog = true
                                this.notAssign = res.data.data

                            })
                            .catch((err) => {
                                console.log(err)
                            })
                    },

                    showEvent({
                        nativeEvent,
                        event
                    }) {
                        const open = () => {
                            this.selectedEvent = event
                            this.selectedElement = nativeEvent.target
                            requestAnimationFrame(() => requestAnimationFrame(() => this.selectedOpen =
                                true))
                        }

                        if (this.selectedOpen) {
                            this.selectedOpen = false
                            requestAnimationFrame(() => requestAnimationFrame(() => open()))
                        } else {
                            open()
                        }

                        nativeEvent.stopPropagation()
                    },

                    updateRange() {
                        this.events = []
                        this.loading = true
                        // 取得任務資料
                        axios.get('/api/tasks/')
                            .then((res) => {
                                res.data.data.forEach((item) => {
                                    this.events.push({
                                        id: item.id,
                                        name: item.restaurant.brand_code + item
                                            .restaurant.shop,
                                        brand: item.restaurant.brand_code,
                                        shop: item.restaurant.shop,
                                        users: item.users,
                                        meals: item.meals,
                                        projects: item.projects,
                                        start: item.task_date,
                                        end_at: item.end_at,
                                        start_at: item.start_at,
                                        color: this.categories[item.category],
                                        date: item.task_date.split(' ')[0],
                                        time: item.task_date.split(' ')[1],
                                        category: item.category,
                                        restaurant: item.restaurant,
                                    })
                                })
                                this.loading = false

                            })
                            .catch((err) => {
                                console.log(err)
                            })
                    },

                    editEvent(event) {
                        this.editedIndex = this.events.indexOf(event)
                        this.selectedOpen = false
                        this.dialog = true
                        this.editedItem = event
                    },

                    allowedStep: m => m % 10 === 0,

                    getExecuteTaskUsers() {
                        axios.get('/api/users/execute-task')
                            .then((res) => {
                                this.users = res.data.data
                            })
                            .catch((err) => {
                                console.log(err)
                            })
                    },

                    getRestaurants() {
                        loading = true
                        axios.get('/api/restaurants', {
                                params: {
                                    is_group_by_brand_code: true,
                                }
                            })
                            .then((res) => {
                                this.restaurants = res.data.data
                                loading = false
                            })
                            .catch((err) => {
                                console.log(err)
                            })
                    },

                    getMeals() {
                        loading = true
                        axios.get('/api/restaurants/meals', {
                                params: {
                                    date: this.editedItem.date,
                                    sid: this.editedItem.restaurant.sid,
                                    brand_code: this.editedItem.restaurant.brand_code,
                                }
                            })
                            .then((res) => {
                                this.meals = res.data.data
                                if (this.editedIndex === -1) {
                                    this.editedItem.meals = this.meals
                                }
                                loading = false
                            })
                            .catch((err) => {
                                console.log(err)
                            })
                    },

                    getActiveProjects() {
                        axios.get('/api/projects/active')
                            .then((res) => {
                                this.projects = res.data.data
                                if (this.editedIndex === -1) {
                                    this.editedItem.projects = this.projects
                                }
                            })
                            .catch((err) => {
                                console.log(err)
                            })
                    },

                    save() {
                        if (this.editedIndex > -1) {
                            axios.put('/api/tasks/' + this.editedItem.id, {
                                    date: this.editedItem.date,
                                    time: this.editedItem.time,
                                    users: this.editedItem.users,
                                    restaurant: this.editedItem.restaurant,
                                    meals: this.editedItem.meals,
                                    projects: this.editedItem.projects,
                                    category: this.editedItem.category,
                                })
                                .then((res) => {
                                    this.updateRange()
                                })
                                .catch((err) => {
                                    console.log(err)
                                })

                        } else {
                            axios.post('/api/tasks', {
                                    date: this.editedItem.date,
                                    time: this.editedItem.time,
                                    users: this.editedItem.users,
                                    restaurant: this.editedItem.restaurant,
                                    meals: this.editedItem.meals,
                                    projects: this.editedItem.projects,
                                    category: this.editedItem.category,
                                })
                                .then((res) => {
                                    this.updateRange()
                                })
                                .catch((err) => {
                                    console.log(err)
                                })
                        }
                        this.dialog = false
                        this.editedItem = {}
                    },

                    close() {
                        this.updateRange()
                        this.dialog = false
                        this.editedItem = {}
                        this.editedIndex = -1
                    },

                    remove(id) {
                        const confirm = window.confirm('確定刪除?')
                        if (!confirm) {
                            return
                        }
                        axios.delete('/api/tasks/' + id)
                            .then((res) => {
                                this.updateRange()
                            })
                            .catch((err) => {
                                console.log(err)
                            })
                            .finally(() => {
                                this.selectedOpen = false
                            })
                    },

                    importTask() {
                        this.loading = true
                        const formData = new FormData()
                        formData.append('file', this.importFile)

                        axios.post('/api/tasks/import', formData, {
                                headers: {
                                    'Content-Type': 'multipart/form-data'
                                }
                            })
                            .then((res) => {
                                if (res.data.status == 'success') {
                                    alert('匯入成功')
                                } else {
                                    alert(res.data.message)
                                }
                            })
                            .catch((err) => {
                                alert(err.response.data.message)
                            }).finally(() => {
                                this.importDialog = false
                                this.updateRange()
                                this.loading = false
                            })
                    },
                },

                watch: {
                    'editedItem.restaurant': function() {
                        if (this.editedItem.restaurant && this.editedItem.date) {
                            this.getMeals()
                            this.getActiveProjects()
                        }
                    },
                },


                mounted() {
                    this.updateRange()
                    this.getExecuteTaskUsers()
                    this.getRestaurants()
                },

            });
        </script>
    </x-slot:footerFiles>
</x-base-layout>
