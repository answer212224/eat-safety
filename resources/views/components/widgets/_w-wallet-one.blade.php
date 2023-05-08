{{-- 

/**
*
* Created a new component <x-rtl.widgets._w-wallet-one/>.
* 
*/

--}}


<div class="widget widget-wallet-one">
    
    <div class="wallet-info text-center mb-3">

        <p class="wallet-title mb-3">{{$title}}</p>
        
        <p class="total-amount mb-3">$ 26,177.88</p>

        <a href="#" class="wallet-text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up me-2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg> Get 6% interest</a>

    </div>


    <div class="wallet-action text-center d-flex justify-content-around">
                
        <button class="btn btn-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
            <span class="btn-text-inner">Topup</span>
        </button>
                
        <button class="btn btn-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="12 16 16 12 12 8"></polyline><line x1="8" y1="12" x2="16" y2="12"></line></svg>
            <span class="btn-text-inner">Send</span>
        </button>
        
    </div>

    <hr>
    
    <ul class="list-group list-group-media">
        <li class="list-group-item ">
            <div class="media">
                <div class="me-3">
                    <img alt="avatar" src="{{Vite::asset('resources/images/netflix.svg')}}" class="img-fluid rounded-circle">
                </div>
                <div class="media-body">
                    <h6 class="tx-inverse">Netflix</h6>
                    <p class="mg-b-0">June 6, 10:34</p>
                    <p class="amount">- $18.06</p>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="media">
                <div class="me-3">
                    <img alt="avatar" src="{{Vite::asset('resources/images/apple-app-store.svg')}}" class="img-fluid rounded-circle">
                </div>
                <div class="media-body">
                    <h6 class="tx-inverse">App Design</h6>
                    <p class="mg-b-0">June 14, 05:21</p>
                    <p class="amount">- $90.65</p>
                </div>
            </div>
        </li>
    </ul>

    <button class="btn btn-secondary w-100 mt-3">View Transaction History</button>
    
</div>