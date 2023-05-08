{{-- 

/**
*
* Created a new component <x-rtl.widgets._w-card-two/>.
* 
*/

--}}



<div class="widget widget-card-two">
    <div class="widget-content">

        <div class="media">
            <div class="w-img">
                <img src="{{Vite::asset('resources/images/g-8.png')}}" alt="avatar">
            </div>
            <div class="media-body">
                <h6>{{$title}}</h6>
                <p class="meta-date-time">Bronx, NY</p>
            </div>
        </div>

        <div class="card-bottom-section">
            <h5>4 Members Going</h5>
            <div class="img-group">
                <img src="{{Vite::asset('resources/images/profile-19.jpeg')}}" alt="avatar">
                <img src="{{Vite::asset('resources/images/profile-6.jpeg')}}" alt="avatar">
                <img src="{{Vite::asset('resources/images/profile-8.jpeg')}}" alt="avatar">
                <img src="{{Vite::asset('resources/images/profile-3.jpeg')}}" alt="avatar">
            </div>
            <a href="javascript:void(0);" class="btn">View Details</a>
        </div>
    </div>
</div>