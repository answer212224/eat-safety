<x-base-layout :scrollspy="false">
    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <x-slot:headerFiles>
        <link rel="stylesheet" href="{{ asset('plugins/filepond/filepond.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/filepond/FilePondPluginImagePreview.min.css') }}">
        @vite(['resources/scss/light/plugins/filepond/custom-filepond.scss'])
        @vite(['resources/scss/dark/plugins/filepond/custom-filepond.scss'])

        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/tomSelect/tom-select.default.min.css') }}">
        @vite(['resources/scss/light/plugins/tomSelect/custom-tomSelect.scss'])
        @vite(['resources/scss/dark/plugins/tomSelect/custom-tomSelect.scss'])
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
                            <v-btn color="primary" text href="{{ route('v2.app.tasks.clear-defect.edit', $task->id) }}">
                                稽核紀錄
                                <v-icon right>mdi-arrow-right</v-icon>
                            </v-btn>
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col cols="12">
                            {{-- 步驟1上傳圖片,步驟2選擇區站,步驟3選擇缺失條文 --}}
                            <form action="{{ route('task-clear-defect-store', $task->id) }}" method="POST">
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
                                                        {{-- 主項目 --}}
                                                        <v-col cols="12" sm="12">
                                                            <v-select v-model="selectedMainDefect"
                                                                :items="main_defects" item-text="description"
                                                                item-value="id" label="主項目"
                                                                name="defect_description">
                                                            </v-select>
                                                        </v-col>
                                                        {{-- 子項目 --}}
                                                        <v-col cols="12" sm="12">
                                                            <v-select v-model="selectedSubDefect"
                                                                :items="active_clear_defects[selectedMainDefect]"
                                                                item-text="sub_item" item-value="id" label="子項目"
                                                                name="clear_defect_id" :disabled="!selectedMainDefect"
                                                                :rules="[v => v != null || '請選擇子項目']">
                                                            </v-select>
                                                        </v-col>
                                                        {{-- 缺失說明複選 --}}
                                                        <v-col cols="12" sm="12">
                                                            <label>缺失說明複選</label>
                                                            <select id="select-state" name="description[]" multiple
                                                                placeholder="選擇缺失或自行輸入(可複選)" autocomplete="off"
                                                                required>
                                                                <option value="">選擇缺失或自行輸入(可複選)</option>
                                                                <option value="積垢不潔">積垢不潔</option>
                                                                <option value="積塵">積塵</option>
                                                                <option value="留有食渣">留有食渣</option>
                                                                <option value="留有病媒屍體">留有病媒屍體</option>
                                                            </select>
                                                        </v-col>
                                                        {{-- 數量 --}}
                                                        <v-col cols="12" sm="12">
                                                            <v-text-field v-model="selectedAmount" label="數量"
                                                                type="number" name="demo3_21"
                                                                :rules="[v => v >= 0 || '數量不得為負']">
                                                                <v-icon slot="append" color="green"
                                                                    @click="selectedAmount++">
                                                                    mdi-plus
                                                                </v-icon>
                                                                <v-icon slot="prepend" color="red"
                                                                    @click="selectedAmount--">
                                                                    mdi-minus
                                                                </v-icon>
                                                            </v-text-field>
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
                                                            <v-textarea label="備註" name="memo"
                                                                rows="2"></v-textarea>
                                                        </v-col>
                                                    </v-row>
                                                </v-card-text>
                                            </v-card>
                                            <v-divider></v-divider>
                                            <v-card-actions>
                                                <v-spacer></v-spacer>
                                                <v-btn color="primary" @click="e1 = 2">上一步</v-btn>
                                                <v-btn color="primary" type="submit"
                                                    :disabled="!selectedSubDefect || !selectedAmount || selectedAmount < 0">
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
        <script src="{{ asset('plugins/tomSelect/tom-select.base.js') }}"></script>
        <script>
            new Vue({
                el: '#app',
                vuetify: new Vuetify(),
                data: {
                    e1: 1,
                    selectedStation: null,
                    selectedMainDefect: null,
                    selectedSubDefect: null,
                    selectedAmount: null,
                    restaurant_workspaces: [],
                    active_clear_defects: [],
                    main_defects: [],
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
                        axios.get(`/api/tasks/{{ $task->id }}`).then((res) => {
                            this.restaurant_workspaces = res.data.data.restaurant.restaurant_workspaces;
                        }).catch((err) => {
                            console.log(err);
                        }).finally(() => {
                            this.loading = false;
                        });
                    },
                    getActiveClearDefects() {
                        this.loading = true;
                        axios.get(`/api/clear-defects/active`).then((res) => {
                            this.active_clear_defects = res.data.data;
                            // 將缺失條文的key值轉成陣列
                            this.main_defects = Object.keys(this.active_clear_defects);
                        }).finally(() => {
                            this.loading = false;
                        });
                    },

                },

                mounted() {
                    this.getTask();
                    this.getActiveClearDefects();

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
                acceptedFileTypes: ['image/png', 'image/jpeg', 'image/jpg'],
                maxFiles: 4,
                maxFileSize: '4MB',
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

            new TomSelect("#select-state", {
                persist: false,
                createOnBlur: true,
                create: true
            });
        </script>
    </x-slot:footerFiles>
</x-base-layout>
