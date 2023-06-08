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
                <li class="breadcrumb-item"><a href="{{ route('meal-index') }}">餐點採樣資料</a></li>
                <li class="breadcrumb-item active" aria-current="page">編輯</li>
            </ol>
        </nav>
    </div>
    <form action="{{ route('role-updatePermissions', ['role' => $role]) }}" method="post">
        @method('PUT')
        @csrf
        <div class="row layout-top-spacing">
            <div class="col-lg-9 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">

                        <div class="row">
                            <div class="col-6">
                                <select id="select-state" name="permissions[]" multiple placeholder="選擇權限..."
                                    autocomplete="off">
                                    <option value="">選擇權限...</option>

                                    @foreach ($permissions as $permission)
                                        <option @if ($role->permissions->contains($permission)) selected @endif
                                            value="{{ $permission->id }}">{{ $permission->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <button type="submit" class="btn btn-outline-success w-100 mb-3">更新</button>
                        <a class="btn btn-outline-dark w-100" href="{{ route('meal-index') }}">上一頁</a>
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

            });
        </script>
    </x-slot:footerFiles>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
