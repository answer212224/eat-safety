{{-- 

/**
*
* Created a new component <x-rtl.widgets._w-chart-three/>.
* 
*/

--}}


<div class="widget widget-chart-three">
    <div class="widget-heading">
        <div class="">
            <h5 class="">{{$title}}</h5>
        </div>
        
        <div class="btn-group c-custom-dropdown dropend" role="group">
            <button id="uniqueVisitors" type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
            </button>
            
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueVisitors">
                <a class="dropdown-item" href="javascript:void(0);">View</a>
                <a class="dropdown-item" href="javascript:void(0);">Update</a>
                <a class="dropdown-item" href="javascript:void(0);">Download</a>
            </div>
        </div>
    </div>

    <div class="widget-content">
        <div id="uniqueVisits"></div>
    </div>
</div>