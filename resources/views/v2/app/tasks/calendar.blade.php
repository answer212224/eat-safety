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
                    {{-- 行事曆骨架 --}}
                    <v-row v-show="loading">
                        <v-col cols="12">
                            <v-skeleton-loader type="table" transition="scale-transition" elevation="2" height="600px"
                                class="mb-2"></v-skeleton-loader>
                        </v-col>
                    </v-row>
                    {{-- 行事曆 --}}

                    <v-row class="fill-height" v-show="!loading">
                        <v-col>
                            <v-sheet height="64">
                                <v-toolbar flat>
                                    <v-btn outlined class="mr-4" color="grey darken-2" @click="setToday">
                                        Today
                                    </v-btn>
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

                                </v-toolbar>
                            </v-sheet>
                            <v-sheet height="auto">
                                <v-calendar ref="calendar" v-model="focus" color="primary" :events="events"
                                    type="month" @click:event="showEvent" event-overlap-mode="column"
                                    :event-more="false" @change="updateRange" locale="zh-tw"></v-calendar>
                                <v-menu v-model="selectedOpen" :close-on-content-click="false"
                                    :activator="selectedElement" offset-y>
                                    <v-card>
                                        <v-toolbar :color="selectedEvent.color" dark>
                                            @can('update-task')
                                                <v-btn icon dark @click="editEvent(selectedEvent)">
                                                    <v-icon>mdi-pencil</v-icon>
                                                </v-btn>
                                                <v-toolbar-title>@{{ selectedEvent.name }}</v-toolbar-title>
                                            @endcan
                                        </v-toolbar>
                                        <v-card-text>
                                            <v-row>
                                                <v-col cols="12" sm="12" md="6">
                                                    <v-icon left color="teal darken-2" small>mdi-calendar</v-icon>
                                                    <span class="text--primary">
                                                        @{{ selectedEvent.start }}</span>

                                                </v-col>

                                                <v-col cols="12" sm="12" md="6">
                                                    <v-icon left color="teal darken-2" small>mdi-account</v-icon>
                                                    <span class="text--primary" v-for="user in selectedEvent.users">
                                                        @{{ user.name }}</span>

                                                </v-col>

                                                <v-col cols="12">
                                                    <v-icon left color="teal darken-2" small>mdi-food</v-icon>
                                                    <v-chip v-for="meal in selectedEvent.meals" class="ma-1"
                                                        :key="meal.id" color="blue-grey darken-3" dark small>
                                                        @{{ meal.name }}
                                                        <v-icon right small v-show="meal.pivot.is_taken"
                                                            color="green">mdi-check</v-icon>
                                                    </v-chip>
                                                </v-col>

                                                <v-col cols="12">
                                                    <v-icon left color="teal darken-2" small>mdi-clipboard-text</v-icon>
                                                    <v-chip v-for="project in selectedEvent.projects" class="ma-1"
                                                        :key="project.id" color="blue-grey darken-3" dark small>
                                                        @{{ project.name }}
                                                        <v-icon right small v-show="project.pivot.is_checked"
                                                            color="green">mdi-check</v-icon>
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
                                            <v-spacer></v-spacer>
                                            <v-btn text color="blue darken-1" @click="selectedOpen = false">
                                                取消
                                            </v-btn>
                                        </v-card-actions>
                                    </v-card>
                                </v-menu>
                            </v-sheet>
                        </v-col>
                    </v-row>


                    {{-- 編輯 --}}
                    <v-dialog v-model="dialog" max-width="500px">
                        <v-card>
                            <v-card-title>
                                <span class="headline">編輯</span>
                            </v-card-title>

                            <v-card-text>

                                <v-row>
                                    <v-col cols="12" sm="12" md="6">
                                        <v-datetime-picker></v-datetime-picker>
                                    </v-col>

                            </v-card-text>

                            <v-card-actions>
                                <v-spacer></v-spacer>

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
                    focus: '',
                    selectedEvent: {},
                    selectedElement: null,
                    selectedOpen: false,
                    events: [],
                    loading: false,
                    dialog: false,
                    categories: {
                        '食安及5S': 'blue',
                        '清潔檢查': 'orange',
                        '餐點採樣': 'green',
                        '食安及5S複稽': 'red',
                    },
                    editedItem: {
                        task_date: '',
                    },
                    datetime: '',

                }),

                mounted() {
                    this.$refs.calendar.checkChange()
                },

                methods: {
                    viewDay({
                        date
                    }) {
                        this.focus = date
                        this.type = 'day'
                    },

                    setToday() {
                        this.focus = ''
                    },
                    prev() {
                        this.$refs.calendar.prev()
                    },
                    next() {
                        this.$refs.calendar.next()
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
                    updateRange({}) {
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
                                    })
                                })
                                this.loading = false

                            })
                            .catch((err) => {
                                console.log(err)
                            })
                    },
                    editEvent(event) {
                        this.dialog = true
                        this.editedItem = event
                    },
                },

            });
        </script>
    </x-slot:footerFiles>
</x-base-layout>
