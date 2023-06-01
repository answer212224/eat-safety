<x-base-layout :scrollspy="false">
    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/scss/light/assets/components/modal.scss'])
        @vite(['resources/scss/dark/assets/components/modal.scss'])

        @vite(['resources/scss/light/assets/components/font-icons.scss'])
        @vite(['resources/scss/dark/assets/components/font-icons.scss'])

        <!--  END CUSTOM STYLE FILE  -->
    </x-slot:headerFiles>
    <!-- END GLOBAL MANDATORY STYLES -->

    <div class="row layout-top-spacing">

        {{-- role tabel --}}
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th colspan="3">角色</th>
                        <th class="text-end">
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#roleModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-fill-add" viewBox="0 0 16 16">
                                    <path
                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path
                                        d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
                                </svg>
                            </button>
                        </th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Guard</th>
                        <th>Permission</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->guard_name }}</td>
                            <td>
                                @if ($role->name == 'super-admin')
                                    <span class="badge badge-light-success">all</span>
                                @endif
                                @foreach ($role->permissions as $permission)
                                    <span class="badge badge-light-secondary">{{ $permission->name }}</span>
                                @endforeach
                            </td>
                            <td class="text-end">
                                <a href="{{ route('role-destroy', ['role' => $role]) }}" class="btn btn-danger btn-sm"
                                    data-confirm-delete="true">Delete</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr />

        {{-- permission tabel --}}
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th colspan="2">權限</th>
                        <th class="text-end">
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                data-bs-target="#permissionModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-shield-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                    <path
                                        d="M8 4.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5a.5.5 0 0 1 .5-.5z" />
                                </svg>
                            </button>
                        </th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Guard</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->guard_name }}</td>
                            <td class="text-end">
                                <a href="{{ route('permission-destroy', ['permission' => $permission]) }}"
                                    class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- roleModal -->
    <form action="{{ route('role-store') }}" method="post">
        @csrf
        <div class="modal fade inputForm-modal" id="roleModal" tabindex="-1" role="dialog"
            aria-labelledby="roleModalModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">


                <div class="modal-content">

                    <div class="modal-header" id="roleModalModalLabel">
                        <h5 class="modal-title">新增角色</b></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg></button>
                    </div>
                    <div class="modal-body">
                        <form class="mt-0">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                                            <path
                                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            <path
                                                d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="role" aria-label="role"
                                        name="role_name">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect"
                            data-bs-dismiss="modal">add</button>
                    </div>
                </div>

            </div>
        </div>
    </form>

    <!-- permissionModal -->
    <form action="{{ route('permission-store') }}" method="post">
        @csrf
        <div class="modal fade inputForm-modal" id="permissionModal" tabindex="-1" role="dialog"
            aria-labelledby="permissionModalModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">


                <div class="modal-content">

                    <div class="modal-header" id="permissionModalModalLabel">
                        <h5 class="modal-title">新增角色</b></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg></button>
                    </div>
                    <div class="modal-body">
                        <form class="mt-0">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-shield-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                            <path
                                                d="M8 4.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="permission"
                                        aria-label="role" name="permission_name">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect"
                            data-bs-dismiss="modal">add</button>
                    </div>
                </div>

            </div>
        </div>
    </form>
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{ asset('plugins/font-icons/feather/feather.min.js') }}"></script>

        <script>
            feather.replace();
        </script>
    </x-slot:footerFiles>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
