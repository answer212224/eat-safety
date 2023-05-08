{{-- 

/**
*
* Created a new component <x-rtl.widgets._w-three/>.
* 
*/

--}}


<div class="widget widget-three">
    <div class="widget-heading">
        <h5 class="">{{$title}}</h5>

        <div class="task-action">
            <div class="btn-group c-custom-dropdown dropend" role="group">
                <button id="summary" type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                </button>
                
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="summary">
                    <a class="dropdown-item" href="javascript:void(0);">View</a>
                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                </div>
            </div>
        </div>

    </div>
    <div class="widget-content">

        <div class="order-summary">

            <div class="summary-list">
                <div class="w-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                </div>
                <div class="w-summary-details">
                    
                    <div class="w-summary-info">
                        <h6>Income</h6>
                        <p class="summary-count">$92,600</p>
                    </div>

                    <div class="w-summary-stats">
                        <div class="progress">
                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="summary-list">
                <div class="w-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                </div>
                <div class="w-summary-details">
                    
                    <div class="w-summary-info">
                        <h6>Profit</h6>
                        <p class="summary-count">$37,515</p>
                    </div>

                    <div class="w-summary-stats">
                        <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="summary-list">
                <div class="w-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                </div>
                <div class="w-summary-details">
                    
                    <div class="w-summary-info">
                        <h6>Expenses</h6>
                        <p class="summary-count">$55,085</p>
                    </div>

                    <div class="w-summary-stats">
                        <div class="progress">
                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

            </div>
            
        </div>
        
    </div>
</div>