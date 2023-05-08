{{-- 

/**
*
* Created a new component <x-rtl.widgets._w-card-four/>.
* 
*/

--}}


<div class="widget widget-card-four">
    <div class="widget-content">
        <div class="w-header">
            <div class="w-info">
                <h6 class="value">{{$title}}</h6>
            </div>
            <div class="task-action">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="expenses" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                    </a>

                    <div class="dropdown-menu left" aria-labelledby="expenses" style="will-change: transform;">
                        <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-content">

            <div class="w-info">
                <p class="value">$ 45,141 <span>this week</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></p>
            </div>
            
        </div>

        <div class="w-progress-stats">                                            
            <div class="progress">
                <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="">
                <div class="w-icon">
                    <p>57%</p>
                </div>
            </div>
            
        </div>
    </div>
</div>