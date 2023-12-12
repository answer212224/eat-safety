<x-base-layout :scrollspy="false">
    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/scss/light/assets/apps/blog-create.scss'])
        @vite(['resources/scss/dark/assets/apps/blog-create.scss'])
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/tomSelect/tom-select.default.min.css') }}">
        @vite(['resources/scss/light/plugins/tomSelect/custom-tomSelect.scss'])
        @vite(['resources/scss/dark/plugins/tomSelect/custom-tomSelect.scss'])


        <!--  END CUSTOM STYLE FILE  -->
    </x-slot:headerFiles>
    <!-- END GLOBAL MANDATORY STYLES -->


    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">資料</a></li>
                <li class="breadcrumb-item"><a href="{{ route('user-index') }}">同仁資料</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
            </ol>
        </nav>
    </div>
    <form action="{{ route('user-update', ['user' => $user]) }}" method="post">
        @method('PUT')
        @csrf
        <div class="row layout-top-spacing">
            <div class="col-lg-9 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">

                        <div class="row">
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">員工編號</span>
                                    <input type="text" class="form-control" value="{{ $user->uid }}"
                                        name="uid" disabled>

                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">姓名</span>
                                    <input type="text" class="form-control" value="{{ $user->name }}"
                                        name="name" disabled>
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">部門</span>
                                    <input type="text" class="form-control" value="{{ $user->department }}"
                                        name="department" disabled>
                                </div>
                                <select id="select-state" name="role[]" multiple placeholder="選擇角色..."
                                    autocomplete="off">
                                    <option value="">選擇角色...</option>
                                    @foreach ($roles as $role)
                                        <option @if ($user->roles->contains($role)) selected @endif
                                            value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">電子郵箱</span>
                                    <input type="text" class="form-control" value="{{ $user->email }}"
                                        name="email" disabled>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <button type="submit" class="btn btn-outline-success w-100 mb-3">更新</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{ asset('plugins/tomSelect/tom-select.base.js') }}"></script>
        <script>
            new TomSelect("#select-state", {
                maxItems: 2
            });
        </script>
    </x-slot:footerFiles>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
