{{-- 

/**
*
* Created a new component <x-rtl.widgets._w-table-two/>.
* 
*/

--}}


<div class="widget widget-table-two">
    
    <div class="widget-heading">
        <h5 class="">{{$title}}</h5>
    </div>

    <div class="widget-content">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><div class="th-content">Customer</div></th>
                        <th><div class="th-content">Product</div></th>
                        <th><div class="th-content">Invoice</div></th>
                        <th><div class="th-content th-heading">Price</div></th>
                        <th><div class="th-content">Status</div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><div class="td-content customer-name"><img src="{{Vite::asset('resources/images/profile-13.jpeg')}}" alt="avatar"><span>Luke Ivory</span></div></td>
                        <td><div class="td-content product-brand text-primary">Headphone</div></td>
                        <td><div class="td-content product-invoice">#46894</div></td>
                        <td><div class="td-content pricing"><span class="">$56.07</span></div></td>
                        <td><div class="td-content"><span class="badge badge-success">Paid</span></div></td>
                    </tr>
                    
                    <tr>
                        <td><div class="td-content customer-name"><img src="{{Vite::asset('resources/images/profile-7.jpeg')}}" alt="avatar"><span>Andy King</span></div></td>
                        <td><div class="td-content product-brand text-warning">Nike Sport</div></td>
                        <td><div class="td-content product-invoice">#76894</div></td>
                        <td><div class="td-content pricing"><span class="">$88.00</span></div></td>
                        <td><div class="td-content"><span class="badge badge-primary">Shipped</span></div></td>
                    </tr>
                    <tr>
                        <td><div class="td-content customer-name"><img src="{{Vite::asset('resources/images/profile-10.jpeg')}}" alt="avatar"><span>Laurie Fox</span></div></td>
                        <td><div class="td-content product-brand text-danger">Sunglasses</div></td>
                        <td><div class="td-content product-invoice">#66894</div></td>
                        <td><div class="td-content pricing"><span class="">$126.04</span></div></td>
                        <td><div class="td-content"><span class="badge badge-success">Paid</span></div></td>
                    </tr>                                            
                    <tr>
                        <td><div class="td-content customer-name"><img src="{{Vite::asset('resources/images/profile-5.jpeg')}}" alt="avatar"><span>Ryan Collins</span></div></td>
                        <td><div class="td-content product-brand text-warning">Sport</div></td>
                        <td><div class="td-content product-invoice">#89891</div></td>
                        <td><div class="td-content pricing"><span class="">$108.09</span></div></td>
                        <td><div class="td-content"><span class="badge badge-primary">Shipped</span></div></td>
                    </tr>
                    <tr>
                        <td><div class="td-content customer-name"><img src="{{Vite::asset('resources/images/profile-4.jpeg')}}" alt="avatar"><span>Irene Collins</span></div></td>
                        <td><div class="td-content product-brand text-primary">Speakers</div></td>
                        <td><div class="td-content product-invoice">#75844</div></td>
                        <td><div class="td-content pricing"><span class="">$84.00</span></div></td>
                        <td><div class="td-content"><span class="badge badge-danger">Pending</span></div></td>
                    </tr>
                    <tr>
                        <td><div class="td-content customer-name"><img src="{{Vite::asset('resources/images/profile-11.jpeg')}}" alt="avatar"><span>Sonia Shaw</span></div></td>
                        <td><div class="td-content product-brand text-danger">Watch</div></td>
                        <td><div class="td-content product-invoice">#76844</div></td>
                        <td><div class="td-content pricing"><span class="">$110.00</span></div></td>
                        <td><div class="td-content"><span class="badge badge-success">Paid</span></div></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>