{{-- 

/**
*
* Created a new component <x-rtl.widgets._w-table-one/>.
* 
*/

--}}


<div class="widget widget-table-one">
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
        <div class="transactions-list">
            <div class="t-item">
                <div class="t-company-name">
                    <div class="t-icon">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        </div>
                    </div>
                    <div class="t-name">
                        <h4>Electricity Bill</h4>
                        <p class="meta-date">04 Jan 1:00PM</p>
                    </div>

                </div>
                <div class="t-rate rate-dec">
                    <p><span>-$16.44</span></p>
                </div>
            </div>
        </div>

        <div class="transactions-list t-info">
            <div class="t-item">
                <div class="t-company-name">
                    <div class="t-icon">
                        <div class="avatar">
                            <span class="avatar-title">SP</span>
                        </div>
                    </div>
                    <div class="t-name">
                        <h4>Shaun Park</h4>
                        <p class="meta-date">10 Jan 1:00PM</p>
                    </div>
                </div>
                <div class="t-rate rate-inc">
                    <p><span>+$36.11</span></p>
                </div>
            </div>
        </div>

        <div class="transactions-list">
            <div class="t-item">
                <div class="t-company-name">
                    <div class="t-icon">
                        <div class="avatar">
                            <span class="avatar-title">AD</span>
                        </div>
                    </div>
                    <div class="t-name">
                        <h4>Amy Diaz</h4>
                        <p class="meta-date">31 Jan 1:00PM</p>
                    </div>

                </div>
                <div class="t-rate rate-inc">
                    <p><span>+$66.44</span></p>
                </div>
            </div>
        </div>

        <div class="transactions-list t-secondary">
            <div class="t-item">
                <div class="t-company-name">
                    <div class="t-icon">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        </div>
                    </div>
                    <div class="t-name">
                        <h4>Netflix</h4>
                        <p class="meta-date">02 Feb 1:00PM</p>
                    </div>

                </div>
                <div class="t-rate rate-dec">
                    <p><span>-$32.00</span></p>
                </div>
            </div>
        </div>


        <div class="transactions-list t-info">
            <div class="t-item">
                <div class="t-company-name">
                    <div class="t-icon">
                        <div class="avatar">
                            <span class="avatar-title">DA</span>
                        </div>
                    </div>
                    <div class="t-name">
                        <h4>Daisy Anderson</h4>
                        <p class="meta-date">15 Feb 1:00PM</p>
                    </div>
                </div>
                <div class="t-rate rate-inc">
                    <p><span>+$10.08</span></p>
                </div>
            </div>
        </div>

        <div class="transactions-list">
            <div class="t-item">
                <div class="t-company-name">
                    <div class="t-icon">
                        <div class="avatar">
                            <span class="avatar-title">OG</span>
                        </div>
                    </div>
                    <div class="t-name">
                        <h4>Oscar Garner</h4>
                        <p class="meta-date">20 Feb 1:00PM</p>
                    </div>

                </div>
                <div class="t-rate rate-dec">
                    <p><span>-$22.00</span></p>
                </div>
            </div>
        </div>
        
        
        
    </div>
</div>