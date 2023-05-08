{{-- 

/**
*
* Created a new component <x-rtl.widgets._w-chart-one/>.
* 
*/

--}}


<div class="widget widget-chart-one">
    <div class="widget-heading">
        <h5 class="">{{$title}}</h5>
        <div class="task-action">
            
            <div class="btn-group c-custom-dropdown dropend" role="group">
                <button id="revenue" type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                </button>
                
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="revenue">
                    <a class="dropdown-item" href="javascript:void(0);">View</a>
                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-content">
        <div id="revenueMonthly"></div>
    </div>
</div>