{{-- 

/**
*
* Created a new component <x-rtl.widgets._w-six/>.
* 
*/

--}}


<div class="widget widget-six">
    <div class="widget-heading">
        <h6 class="">{{$title}}</h6>
        <div class="task-action">

            <div class="btn-group c-custom-dropdown dropend" role="group">
                <button id="statistics" type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                </button>
                
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="statistics" style="">
                    <a class="dropdown-item" href="javascript:void(0);">View</a>
                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                </div>
            </div>
            
        </div>
    </div>
    <div class="w-chart">
        <div class="w-chart-section">
            <div class="w-detail">
                <p class="w-title">Total Visits</p>
                <p class="w-stats">423,964</p>
            </div>
            <div class="w-chart-render-one">
                <div id="total-users"></div>
            </div>
        </div>

        <div class="w-chart-section">
            <div class="w-detail">
                <p class="w-title">Paid Visits</p>
                <p class="w-stats">7,929</p>
            </div>
            <div class="w-chart-render-one">
                <div id="paid-visits"></div>
            </div>
        </div>
    </div>
</div>