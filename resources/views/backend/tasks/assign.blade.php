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

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

        
        <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
        <script src="https://npmcdn.com/flatpickr/dist/l10n/zh-tw.js"></script>
        {{-- jq --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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

                        <livewire:meal-select />

                    </div>
                    <div class="modal-footer">
                        <a class="btn" href="" role="button">Close</a>
                        <button type="submit" class="btn btn-primary btn-add-event">新增稽核</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- unassignedStoresModal Modal -->
    <div class="modal modal-lg fadeInUp" id="unassignedStoresModal" tabindex="-1" aria-labelledby="unassignedStoresModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="unassignedStoresModalLabel">未指派的分店</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="unassignedStores">

                    </div>
                    <div class="modal-footer">
                        <a class="btn btn btn-light-dark" data-bs-dismiss="modal">Close</a>
                    </div>
                </div>
        </div>
    </div>



    <!-- BEGIN CUSTOM SCRIPTS FILE -->
    <x-slot:footerFiles>
        <script src="{{ asset('plugins/fullcalendar/fullcalendar.min.js') }}"></script>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));

                var calendarsEvents = {
                    "食安及5S": 'primary',
                    "清潔檢查": 'warning',
                    "餐點採樣": 'success'
                }

                // Calendar AddEvent fn.
                var calendarAddEvent = function() {
                    myModal.show();
                }

                var calendarAddEvent2 = function() {
                    // 當前月曆的年份和月份
                    var currentMonth = calendar.getDate().getMonth() + 1;
                    var currentYear = calendar.getDate().getFullYear();

                    // 顯示當顯月分未指派的分店
                    $.ajax({
                        url: "{{ route('getUnassignedStores') }}",
                        type: "GET",
                        data: {
                            month: currentMonth,
                            year: currentYear
                        },
                        success: function(data) {
                            console.log(data);
                            var stores = data.stores;
                            var html = '';
                            stores.forEach(function(store) {
                                html += '<li class="list-group-item">' + store.brand + store.shop + '</li>';
                            });
                            $('#unassignedStores').html(html);
                            // 顯示月份
                            $('#unassignedStoresModalLabel').html('未指派的分店 - ' + currentYear + '年' + currentMonth + '月' + ' (' + stores.length + '間)');
                            $('#unassignedStoresModal').modal('show');

                        }
                    });

                }

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',

                    locale: 'zh-tw',
                    customButtons: {
                        myCustomButton: {
                            text: '新增稽核',
                            click: calendarAddEvent
                        },
                        myCustomButton2: {
                            text: '顯示未指派的分店',
                            click: calendarAddEvent2
                        },
                        
                    },

                    eventClassNames: function({
                        event: calendarEvent
                    }) {
                        const getColorValue = calendarsEvents[calendarEvent._def.extendedProps.category];
                        return [
                            // Background Color
                            'event-fc-color fc-bg-' + getColorValue
                        ];
                    },

                    @can('create-task')
                        headerToolbar: {
                            left: 'prev next myCustomButton myCustomButton2',
                            center: 'title',
                            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                        },
                    @endcan

                    @cannot('create-task')
                        headerToolbar: {
                            left: 'prev next myCustomButton2',
                            center: 'title',
                            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                        },
                    @endcannot

                    buttonText: {
                        today: '今天',
                        month: '月',
                        week: '週',
                        day: '日',
                        list: '列表'
                    },

                    events: @json($tasks),

                });

                calendar.render();
            });
        </script>

    </x-slot:footerFiles>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
