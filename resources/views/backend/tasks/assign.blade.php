<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{ $title }}
    </x-slot:pageTitle>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/fullcalendar.min.css') }}">
        @vite(['resources/scss/light/plugins/fullcalendar/custom-fullcalendar.scss'])
        @vite(['resources/scss/light/assets/components/modal.scss'])

        @vite(['resources/scss/dark/plugins/fullcalendar/custom-fullcalendar.scss'])
        @vite(['resources/scss/dark/assets/components/modal.scss'])


        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/tomSelect/tom-select.default.min.css') }}">
        @vite(['resources/scss/light/plugins/tomSelect/custom-tomSelect.scss'])
        @vite(['resources/scss/dark/plugins/tomSelect/custom-tomSelect.scss'])

        @vite(['resources/scss/light/assets/components/list-group.scss'])
        @vite(['resources/scss/dark/assets/components/list-group.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot:headerFiles>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- CONTENT HERE -->

    <div class="row layout-top-spacing layout-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="calendar-container">
                <div class="calendar" id="calendar"></div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('task-store') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">指派稽核</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="d-flex">
                                    <div class="n-chk">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input" type="radio" name="category" checked
                                                value="食安及5S" id="rwork">
                                            <label class="form-check-label" for="rwork">食安及5S</label>
                                        </div>
                                    </div>
                                    <div class="n-chk">
                                        <div class="form-check form-check-warning form-check-inline">
                                            <input class="form-check-input" type="radio" name="category"
                                                value="清潔檢查" id="rtravel">
                                            <label class="form-check-label" for="rtravel">清潔檢查</label>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="form-group mt-3">
                                    <label class="form-label">選擇稽核員</label>
                                    <select class="form-control" name="users[]" multiple placeholder="選擇稽核員..."
                                        autocomplete="off" required id="select-users">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <livewire:meal-select />

                        </div>


                    </div>
                    <div class="modal-footer">
                        <a class="btn" href="" role="button">Close</a>
                        <button type="submit" class="btn btn-primary btn-add-event">新增稽核</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- BEGIN CUSTOM SCRIPTS FILE -->
    <x-slot:footerFiles>
        <script src="{{ asset('plugins/fullcalendar/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('plugins/tomSelect/tom-select.base.js') }}"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));

                var calendarsEvents = {
                    completed: 'success',
                    processing: 'warning',
                    pending: 'primary',
                    pending_approval: 'danger',
                }

                // Calendar AddEvent fn.
                var calendarAddEvent = function() {
                    myModal.show();
                }

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'zh-tw',
                    customButtons: {
                        myCustomButton: {
                            text: '新增稽核',
                            click: calendarAddEvent
                        }
                    },
                    eventClassNames: function({
                        event: calendarEvent
                    }) {
                        const getColorValue = calendarsEvents[calendarEvent._def.extendedProps.status];
                        return [
                            // Background Color
                            'event-fc-color fc-bg-' + getColorValue
                        ];
                    },

                    headerToolbar: {
                        @can('create-task')
                            center: 'myCustomButton'
                        @endcan
                    },

                    events: @json($tasks),

                });




                calendar.render();
            });
        </script>

        <script>
            new TomSelect("#select-users", {
                maxItems: 2
            });
        </script>

    </x-slot:footerFiles>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
