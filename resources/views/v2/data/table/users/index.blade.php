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
                        <v-spacer></v-spacer>
                        <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" single-line hide-details
                            class="mr-2"></v-text-field>
                        @can('update-user')
                            <v-btn icon @click="syncUsers">
                                <v-icon>mdi-refresh</v-icon>
                            </v-btn>
                        @endcan
                    </v-toolbar>

                    <v-data-table :headers="headers" :items="users" :search="search" item-key="id"
                        class="elevation-1" :loading="loading" sort-by="status" fixed-header
                        height="calc(100vh - 250px)">
                        <template v-slot:item.roles="{ item }">
                            <v-chip v-for="role in item.roles" :key="role.id" color="primary" dark small
                                class="mr-2">
                                @{{ role.name }}
                            </v-chip>
                        </template>
                        <template v-slot:item.status="{ item }">
                            {{-- 0:試 1:正 2:離 3:約 4:留 5:未 6:永不 8:未知 9:開發 --}}
                            <v-chip v-if="item.status == 0" color="warning" dark small>試用</v-chip>
                            <v-chip v-if="item.status == 1" color="success" dark small>正式</v-chip>
                            <v-chip v-if="item.status == 2" color="error" dark small>離職</v-chip>
                            <v-chip v-if="item.status == 3" color="info" dark small>約聘</v-chip>
                            <v-chip v-if="item.status == 4" color="primary" dark small>留職</v-chip>
                            <v-chip v-if="item.status == 5" color="grey" dark small>未</v-chip>
                            <v-chip v-if="item.status == 6" color="grey" dark small>永不</v-chip>
                            <v-chip v-if="item.status == 8" color="grey" dark small>未知</v-chip>
                            <v-chip v-if="item.status == 9" color="grey" dark small>開發</v-chip>
                        </template>
                        <template v-slot:item.actions="{ item }">
                            <a :href="'/v1/data/table/users/' + item.id + '/chart'">
                                <v-icon small>mdi-chart-bar</v-icon>
                            </a>
                            <a :href="'/v1/data/table/users/' + item.id + '/show'">
                                <v-icon small>mdi-eye</v-icon>
                            </a>
                            @can('update-user')
                                <v-icon small @click="editUser(item)">mdi-pencil</v-icon>
                            @endcan
                        </template>
                    </v-data-table>
                </v-container>

                <v-dialog v-model="dialog" max-width="500">
                    <v-card>
                        <v-card-title class="headline">
                            {{ $title }}
                        </v-card-title>
                        <v-card-text>
                            <v-container>
                                <v-row>
                                    <v-col cols="12" sm="6">
                                        <v-text-field v-model="editedItem.name" label="姓名" read-only></v-text-field>
                                    </v-col>
                                    <v-col cols="12" sm="6">
                                        <v-select v-model="editedItem.roles" :items="roles" label="角色" chips
                                            dense multiple :item-text="item => item.name" :item-value="item => item.id">
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-card-text>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="blue darken-1" text @click="save">儲存</v-btn>
                        </v-card-actions>
                    </v-card>
            </v-main>
        </v-app>
    </div>

    <x-slot:footerFiles>
        <script>
            new Vue({
                el: '#app',
                vuetify: new Vuetify(),
                data: {
                    users: [],
                    search: '',
                    loading: false,
                    headers: [{
                            text: 'ID',
                            value: 'id'
                        },
                        {
                            text: '員編',
                            value: 'uid'
                        },
                        {
                            text: '姓名',
                            value: 'name'
                        },
                        {
                            text: 'Email',
                            value: 'email'
                        },
                        {
                            text: '部門',
                            value: 'department'
                        },
                        {
                            text: '角色',
                            value: 'roles'
                        },
                        {
                            text: '狀態',
                            value: 'status'
                        },
                        {
                            text: '操作',
                            value: 'actions',
                            sortable: false
                        }
                    ],
                    dialog: false,
                    editedItem: {
                        roles: []
                    },
                    roles: [],
                },
                methods: {
                    getUsers() {
                        this.loading = true;
                        axios.get('/api/users')
                            .then(response => {
                                this.users = response.data.data;
                                this.loading = false;
                            })
                            .catch(error => {
                                alert(error.response.data.message);
                                this.loading = false;
                            });
                    },

                    getRoles() {
                        axios.get('/api/roles')
                            .then(response => {
                                this.roles = response.data.data;
                            })
                            .catch(error => {
                                alert(error.response.data.message);
                            });
                    },

                    editUser(item) {
                        this.editedItem = Object.assign({}, item);
                        this.dialog = true;
                    },

                    save() {
                        // users/{user}/roles
                        axios.put('/api/users/' + this.editedItem.id + '/roles', {
                                roles: this.editedItem.roles
                            })
                            .then(response => {
                                this.dialog = false;
                                this.getUsers();
                            })
                            .catch(error => {
                                alert(error.response.data.message);
                            });
                    },

                    syncUsers() {
                        this.loading = true;
                        axios.post('/api/users/sync')
                            .then(response => {
                                this.getUsers();
                                alert(response.data.message);
                            })
                            .catch(error => {
                                alert(error.response.data.message);
                            });
                    }


                },
                mounted() {
                    this.getUsers();
                    this.getRoles();

                },

            })
        </script>
    </x-slot:footerFiles>


</x-base-layout>
