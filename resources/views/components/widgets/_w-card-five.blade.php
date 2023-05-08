{{-- 

/**
*
* Created a new component <x-widgets._w-card-five/>.
* 
*/

--}}


<div class="widget widget-card-five">
    <div class="widget-content">
        <div class="account-box">

            <div class="info-box">
                <div class="icon">
                    <span>
                        <img src="{{Vite::asset('resources/images/money-bag.png')}}" alt="money-bag">
                    </span>
                </div>

                <div class="balance-info">
                    <h6>{{$title}}</h6>
                    <p>{{$balance}}</p>
                </div>
            </div>

            <div class="card-bottom-section">
                <div><span class="badge badge-light-success">{{$percentage}} <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></span></div>
                <a href="{{$link}}">{{$button}}</a>
            </div>
        </div>
    </div>
</div>