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
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot:headerFiles>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- CONTENT HERE -->

    <div class="row layout-top-spacing layout-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="calendar-container">
                <div class="calendar"></div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="">
                                <label class="form-label">Enter Title</label>
                                <input id="event-title" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12 d-none">
                            <div class="">
                                <label class="form-label">Enter Start Date</label>
                                <input id="event-start-date" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12 d-none">
                            <div class="">
                                <label class="form-label">Enter End Date</label>
                                <input id="event-end-date" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">

                            <div class="d-flex mt-4">
                                <div class="n-chk">
                                    <div class="form-check form-check-primary form-check-inline">
                                        <input class="form-check-input" type="radio" name="event-level" value="Work"
                                            id="rwork">
                                        <label class="form-check-label" for="rwork">Work</label>
                                    </div>
                                </div>
                                <div class="n-chk">
                                    <div class="form-check form-check-warning form-check-inline">
                                        <input class="form-check-input" type="radio" name="event-level" value="Travel"
                                            id="rtravel">
                                        <label class="form-check-label" for="rtravel">Travel</label>
                                    </div>
                                </div>
                                <div class="n-chk">
                                    <div class="form-check form-check-success form-check-inline">
                                        <input class="form-check-input" type="radio" name="event-level"
                                            value="Personal" id="rPersonal">
                                        <label class="form-check-label" for="rPersonal">Personal</label>
                                    </div>
                                </div>
                                <div class="n-chk">
                                    <div class="form-check form-check-danger form-check-inline">
                                        <input class="form-check-input" type="radio" name="event-level"
                                            value="Important" id="rImportant">
                                        <label class="form-check-label" for="rImportant">Important</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success btn-update-event" data-fc-event-public-id="">Update
                        changes</button>
                    <button type="button" class="btn btn-primary btn-add-event">Add Event</button>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN CUSTOM SCRIPTS FILE -->
    <x-slot:footerFiles>
        <script src="{{ asset('plugins/fullcalendar/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('plugins/uuid/uuid4.min.js') }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                // Date variable
                var newDate = new Date();

                /**
                 *
                 * @getDynamicMonth() fn. is used to validate 2 digit number and act accordingly
                 *
                 */
                function getDynamicMonth() {
                    getMonthValue = newDate.getMonth();
                    _getUpdatedMonthValue = getMonthValue + 1;
                    if (_getUpdatedMonthValue < 10) {
                        return `0${_getUpdatedMonthValue}`;
                    } else {
                        return `${_getUpdatedMonthValue}`;
                    }
                }

                // Modal Elements
                var getModalTitleEl = document.querySelector('#event-title');
                var getModalStartDateEl = document.querySelector('#event-start-date');
                var getModalEndDateEl = document.querySelector('#event-end-date');
                var getModalAddBtnEl = document.querySelector('.btn-add-event');
                var getModalUpdateBtnEl = document.querySelector('.btn-update-event');
                var calendarsEvents = {
                    Work: 'primary',
                    Personal: 'success',
                    Important: 'danger',
                    Travel: 'warning',
                }

                // Calendar Elements and options
                var calendarEl = document.querySelector('.calendar');
                var checkWidowWidth = function() {
                    if (window.innerWidth <= 1199) {
                        return true;
                    } else {
                        return false;
                    }
                }

                var calendarHeaderToolbar = {
                    left: 'prev next addEventButton',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                }
                var calendarEventsList = [{
                    id: 1,
                    title: 'All Day Event',
                    start: `${newDate.getFullYear()}-${getDynamicMonth()}-01`,
                    extendedProps: {
                        calendar: 'Work'
                    }
                }]

                // Calendar Select fn.
                var calendarSelect = function(info) {
                    getModalAddBtnEl.style.display = 'block';
                    getModalUpdateBtnEl.style.display = 'none';
                    myModal.show()
                    getModalStartDateEl.value = info.startStr;
                    getModalEndDateEl.value = info.endStr;
                }

                // Calendar AddEvent fn.
                var calendarAddEvent = function() {
                    var currentDate = new Date();
                    var dd = String(currentDate.getDate()).padStart(2, '0');
                    var mm = String(currentDate.getMonth() + 1).padStart(2, '0'); //January is 0!
                    var yyyy = currentDate.getFullYear();
                    var combineDate = `${yyyy}-${mm}-${dd}T00:00:00`;
                    getModalAddBtnEl.style.display = 'block';
                    getModalUpdateBtnEl.style.display = 'none';
                    myModal.show();
                    getModalStartDateEl.value = combineDate;
                }

                // Calendar eventClick fn.
                var calendarEventClick = function(info) {
                    var eventObj = info.event;

                    if (eventObj.url) {
                        window.open(eventObj.url);

                        info.jsEvent.preventDefault(); // prevents browser from following link in current tab.
                    } else {
                        var getModalEventId = eventObj._def.publicId;
                        var getModalEventLevel = eventObj._def.extendedProps['calendar'];
                        var getModalCheckedRadioBtnEl = document.querySelector(
                            `input[value="${getModalEventLevel}"]`);

                        getModalTitleEl.value = eventObj.title;
                        getModalCheckedRadioBtnEl.checked = true;
                        getModalUpdateBtnEl.setAttribute('data-fc-event-public-id', getModalEventId)
                        getModalAddBtnEl.style.display = 'none';
                        getModalUpdateBtnEl.style.display = 'block';
                        myModal.show();
                    }
                }


                // Activate Calender
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    selectable: true,
                    height: checkWidowWidth() ? 900 : 1052,
                    initialView: checkWidowWidth() ? 'listWeek' : 'dayGridMonth',
                    initialDate: `${newDate.getFullYear()}-${getDynamicMonth()}-07`,
                    headerToolbar: calendarHeaderToolbar,
                    events: calendarEventsList,
                    select: calendarSelect,
                    unselect: function() {
                        console.log('unselected')
                    },
                    customButtons: {
                        addEventButton: {
                            text: 'Add Event',
                            click: calendarAddEvent
                        }
                    },
                    eventClassNames: function({
                        event: calendarEvent
                    }) {
                        const getColorValue = calendarsEvents[calendarEvent._def.extendedProps.calendar];
                        return [
                            // Background Color
                            'event-fc-color fc-bg-' + getColorValue
                        ];
                    },

                    eventClick: calendarEventClick,
                    windowResize: function(arg) {
                        if (checkWidowWidth()) {
                            calendar.changeView('listWeek');
                            calendar.setOption('height', 900);
                        } else {
                            calendar.changeView('dayGridMonth');
                            calendar.setOption('height', 1052);
                        }
                    }

                });

                // Add Event
                getModalAddBtnEl.addEventListener('click', function() {

                    var getModalCheckedRadioBtnEl = document.querySelector('input[name="event-level"]:checked');

                    var getTitleValue = getModalTitleEl.value;
                    var setModalStartDateValue = getModalStartDateEl.value;
                    var setModalEndDateValue = getModalEndDateEl.value;
                    var getModalCheckedRadioBtnValue = (getModalCheckedRadioBtnEl !== null) ?
                        getModalCheckedRadioBtnEl.value : '';

                    calendar.addEvent({
                        id: uuidv4(),
                        title: getTitleValue,
                        start: setModalStartDateValue,
                        end: setModalEndDateValue,
                        allDay: true,
                        extendedProps: {
                            calendar: getModalCheckedRadioBtnValue
                        }
                    })
                    myModal.hide()

                    var myHeaders = new Headers();
                    myHeaders.append("Content-Type", "application/json");

                    var raw = JSON.stringify({
                        "restaurant_id": "1",
                        "category": "S5"
                    });

                    var requestOptions = {
                        method: 'POST',
                        headers: myHeaders,
                        body: raw,
                        redirect: 'follow'
                    };

                    fetch("http://localhost:8000/api/submit-form?restaurant_id&category", requestOptions)
                        .then(response => response.text())
                        .then(result => console.log(result))
                        .catch(error => console.log('error', error));
                })



                // Update Event
                getModalUpdateBtnEl.addEventListener('click', function() {
                    var getPublicID = this.dataset.fcEventPublicId;
                    var getTitleUpdatedValue = getModalTitleEl.value;
                    var getEvent = calendar.getEventById(getPublicID);
                    var getModalUpdatedCheckedRadioBtnEl = document.querySelector(
                        'input[name="event-level"]:checked');

                    var getModalUpdatedCheckedRadioBtnValue = (getModalUpdatedCheckedRadioBtnEl !== null) ?
                        getModalUpdatedCheckedRadioBtnEl.value : '';

                    getEvent.setProp('title', getTitleUpdatedValue);
                    getEvent.setExtendedProp('calendar', getModalUpdatedCheckedRadioBtnValue);
                    myModal.hide()
                })

                // Calendar Renderation
                calendar.render();

                var myModal = new bootstrap.Modal(document.getElementById('exampleModal'))
                var modalToggle = document.querySelector('.fc-addEventButton-button ')

                document.getElementById('exampleModal').addEventListener('hidden.bs.modal', function(event) {
                    getModalTitleEl.value = '';
                    getModalStartDateEl.value = '';
                    getModalEndDateEl.value = '';
                    var getModalIfCheckedRadioBtnEl = document.querySelector(
                        'input[name="event-level"]:checked');
                    if (getModalIfCheckedRadioBtnEl !== null) {
                        getModalIfCheckedRadioBtnEl.checked = false;
                    }
                })
            });
        </script>
    </x-slot:footerFiles>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
