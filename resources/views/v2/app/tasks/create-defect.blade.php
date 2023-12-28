<x-base-layout :scrollspy="false">
    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <x-slot:headerFiles>
        <link rel="stylesheet" href="{{ asset('plugins/filepond/filepond.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/filepond/FilePondPluginImagePreview.min.css') }}">
        @vite(['resources/scss/light/plugins/filepond/custom-filepond.scss'])
        @vite(['resources/scss/dark/plugins/filepond/custom-filepond.scss'])
    </x-slot:headerFiles>


    <div id="app">
        <v-app v-cloak>
            <v-main class="grey lighten-4">
                <v-container>
                    {{-- loading --}}
                    <v-overlay :value="loading">
                        <v-progress-circular indeterminate size="64"></v-progress-circular>
                    </v-overlay>
                    <v-row class="d-flex justify-space-between align-center">
                        <v-col cols="6">
                            {{-- 跳轉到列表 --}}
                            <v-btn color="primary" text href="{{ route('v2.app.tasks.index') }}">
                                <v-icon left>mdi-arrow-left</v-icon>
                                返回列表
                            </v-btn>
                        </v-col>
                        <v-col cols="6" class="text-right">
                            {{-- 跳轉到稽核紀錄 --}}
                            <v-btn color="primary" text href="{{ route('v2.app.tasks.defect.edit', $task->id) }}">
                                稽核紀錄
                                <v-icon right>mdi-arrow-right</v-icon>
                            </v-btn>
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col cols="12">
                            {{-- 步驟1上傳圖片,步驟2選擇區站,步驟3選擇缺失條文 --}}
                            <form action="{{ route('task-defect-store', $task->id) }}" method="POST">
                                @csrf
                                <v-stepper v-model="e1">
                                    <v-stepper-header>
                                        <v-stepper-step :complete="e1 > 1" step="1">上傳圖片</v-stepper-step>
                                        <v-divider></v-divider>
                                        <v-stepper-step :complete="e1 > 2" step="2">選擇區站</v-stepper-step>
                                        <v-divider></v-divider>
                                        <v-stepper-step :complete="e1 > 3" step="3">選擇缺失條文</v-stepper-step>
                                    </v-stepper-header>

                                    <v-stepper-items>
                                        <v-stepper-content step="1">
                                            <v-card>
                                                <v-card-title>
                                                    <span class="headline">上傳圖片</span>
                                                </v-card-title>

                                                <v-card-text>
                                                    <v-row>
                                                        <v-col cols="12" sm="12">
                                                            <input type="file" name="filepond[]" multiple>
                                                        </v-col>
                                                    </v-row>
                                                </v-card-text>
                                                <v-divider></v-divider>
                                                <v-card-actions>
                                                    <v-spacer></v-spacer>
                                                    <v-btn color="primary" @click="checkImg">
                                                        下一步
                                                    </v-btn>
                                                </v-card-actions>
                                            </v-card>
                                        </v-stepper-content>

                                        <v-stepper-content step="2">
                                            <v-card>
                                                <v-card-title>
                                                    <span class="headline">選擇區站</span>
                                                </v-card-title>

                                                <v-card-text>
                                                    <v-row>
                                                        <v-col cols="12">
                                                            <v-select v-model="selectedStation"
                                                                :items="restaurant_workspaces" item-text="area"
                                                                item-value="id" label="區站" name="workspace">
                                                            </v-select>
                                                        </v-col>
                                                    </v-row>
                                                </v-card-text>
                                            </v-card>
                                            <v-divider></v-divider>
                                            <v-card-actions>
                                                <v-spacer></v-spacer>
                                                <v-btn color="primary" @click="e1 = 1">上一步</v-btn>
                                                <v-btn color="primary" @click="e1 = 3" :disabled="!selectedStation">
                                                    下一步
                                                </v-btn>
                                            </v-card-actions>
                                        </v-stepper-content>

                                        <v-stepper-content step="3">
                                            <v-card>
                                                <v-card-title>
                                                    <span class="headline">選擇缺失條文</span>
                                                </v-card-title>
                                                <v-card-text>
                                                    <v-row>
                                                        <v-col cols="12">
                                                            <v-select v-model="selectedDefectGroup"
                                                                :items="groups" label="缺失分類">
                                                            </v-select>
                                                        </v-col>

                                                        <v-col cols="12">
                                                            <v-select v-model="selectedDefectTitle"
                                                                :items="titles" label="子項目">
                                                            </v-select>
                                                        </v-col>

                                                        <v-col cols="12">
                                                            <v-select v-model="selectedDefectDescription"
                                                                :items="descriptions" label="稽核標準"
                                                                item-text="description" item-value="id"
                                                                name="defect_id">

                                                                <template v-slot:item="{ item }">
                                                                    <div style="white-space: normal; line-height: 1.5;">
                                                                        @{{ item.description }}
                                                                        , @{{ item.deduct_point }}分
                                                                        , @{{ item.category }} 。
                                                                    </div>
                                                                </template>
                                                            </v-select>
                                                        </v-col>
                                                        <v-col cols="6">
                                                            <v-checkbox label="忽略扣分" name="is_ignore" value="1"
                                                                color="red darken-3"></v-checkbox>
                                                        </v-col>
                                                        <v-col cols="6">
                                                            <v-checkbox label="未達扣分標準"
                                                                name="is_not_reach_deduct_standard" value="1"
                                                                color="red darken-3"></v-checkbox>
                                                        </v-col>
                                                        <v-col cols="6">
                                                            <v-checkbox label="建議事項" name="is_suggestion"
                                                                value="1" color="red darken-3"></v-checkbox>
                                                        </v-col>
                                                        <v-col cols="12">
                                                            <v-textarea label="備註" name="memo"></v-textarea>
                                                        </v-col>
                                                    </v-row>
                                                </v-card-text>
                                            </v-card>
                                            <v-divider></v-divider>
                                            <v-card-actions>
                                                <v-spacer></v-spacer>
                                                <v-btn color="primary" @click="e1 = 2">上一步</v-btn>
                                                <v-btn color="primary" type="submit"
                                                    :disabled="!selectedDefectDescription">
                                                    送出
                                                </v-btn>
                                            </v-card-actions>
                                        </v-stepper-content>
                                    </v-stepper-items>
                                </v-stepper>
                            </form>
                        </v-col>
                    </v-row>

                </v-container>
            </v-main>
        </v-app>
    </div>

    <x-slot:footerFiles>
        <script src="{{ asset('plugins/filepond/filepond.min.js') }}"></script>
        <script src="{{ asset('plugins/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
        <script src="{{ asset('plugins/filepond/FilePondPluginImageExifOrientation.min.js') }}"></script>
        <script src="{{ asset('plugins/filepond/FilePondPluginImagePreview.min.js') }}"></script>
        <script src="{{ asset('plugins/filepond/FilePondPluginImageCrop.min.js') }}"></script>
        <script src="{{ asset('plugins/filepond/FilePondPluginImageResize.min.js') }}"></script>
        <script src="{{ asset('plugins/filepond/FilePondPluginImageTransform.min.js') }}"></script>
        <script src="{{ asset('plugins/filepond/filepondPluginFileValidateSize.min.js') }}"></script>
        <script>
            new Vue({
                el: '#app',
                vuetify: new Vuetify(),
                data: {
                    e1: 1,
                    selectedStation: null,
                    selectedDefectGroup: null,
                    selectedDefectTitle: null,
                    selectedDefectDescription: null,
                    restaurant_workspaces: [],
                    defects: [],
                    groups: [],
                    titles: [],
                    descriptions: [],
                    loading: false,
                },

                methods: {
                    checkImg() {
                        // 如果沒有上傳圖片或正在上傳中，則不可進入下一步
                        if (pond.getFiles().length == 0) {
                            alert('請上傳圖片');
                            return;
                        } else if (pond.getFiles().length > 0 && pond.getFiles().length != pond.getFiles().filter(
                                file => file.status == 5).length) {
                            alert('圖片上傳中，請稍後');
                            return;
                        } else {
                            this.e1 = 2;
                        }
                    },

                    // getTask
                    getTask() {
                        this.loading = true;
                        axios.get(`/api/tasks/{{ $task->id }}`)
                            .then((res) => {
                                this.task = res.data.data;
                                this.restaurant_workspaces = res.data.data.restaurant.restaurant_workspaces;
                            })
                            .finally(() => {
                                this.loading = false;
                            });

                    },

                    getActiveDefects() {
                        this.loading = true;
                        axios.get(`/api/defects/active`)
                            .then((res) => {
                                this.defects = res.data.data;
                                // 將缺失條文的key值轉成陣列
                                this.groups = Object.keys(this.defects);
                            }).finally(() => {
                                this.loading = false;
                            });
                    },

                },

                watch: {
                    selectedDefectGroup: function() {
                        this.titles = Object.keys(this.defects[this.selectedDefectGroup]);
                    },
                    selectedDefectTitle: function() {
                        this.descriptions = this.defects[this.selectedDefectGroup][this
                            .selectedDefectTitle
                        ];
                    },
                },

                mounted() {
                    this.getTask();
                    this.getActiveDefects();
                },

            })


            const inputElement = document.querySelector('input[name="filepond[]"]');

            FilePond.registerPlugin(
                FilePondPluginImagePreview,
                FilePondPluginImageExifOrientation,
                FilePondPluginFileValidateSize,
                FilePondPluginFileValidateType
            );

            const pond = FilePond.create(inputElement, {
                allowImagePreview: true,
                allowMultiple: true,
                allowReorder: true,
                maxFiles: 4,
                maxFileSize: '4MB',
                acceptedFileTypes: ['image/png', 'image/jpeg', 'image/gif'],
                labelIdle: '將圖片拖曳至此或點擊此處上傳',
                server: {
                    url: "/filepond/api",
                    process: "/process",
                    revert: "/process",
                    patch: "?patch=",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    },
                },
            });
        </script>
    </x-slot:footerFiles>
</x-base-layout>
