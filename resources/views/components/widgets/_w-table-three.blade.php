{{-- 

/**
*
* Created a new component <x-rtl.widgets._w-table-three/>.
* 
*/

--}}


<div class="widget widget-table-three">
    
    <div class="widget-heading">
        <h5 class="">{{$title}}</h5>
    </div>

    <div class="widget-content">
        <div class="table-responsive">
            <table class="table table-scroll">
                <thead>
                    <tr>
                        <th><div class="th-content">Product</div></th>
                        <th><div class="th-content th-heading">Price</div></th>
                        <th><div class="th-content th-heading">Discount</div></th>
                        <th><div class="th-content">Sold</div></th>
                        <th><div class="th-content">Source</div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><div class="td-content product-name"><img src="{{Vite::asset('resources/images/product-headphones.jpg')}}" alt="product"><div class="align-self-center"><p class="prd-name">Headphone</p><p class="prd-category text-primary">Digital</p></div></div></td>
                        <td><div class="td-content"><span class="pricing">$168.09</span></div></td>
                        <td><div class="td-content"><span class="discount-pricing">$60.09</span></div></td>
                        <td><div class="td-content">170</div></td>
                        <td><div class="td-content"><a href="javascript:void(0);" class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-danger feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Direct</a></div></td>
                    </tr>
                    <tr>
                        <td><div class="td-content product-name"><img src="{{Vite::asset('resources/images/product-shoes.jpg')}}" alt="product"><div class="align-self-center"><p class="prd-name">Shoes</p><p class="prd-category text-warning">Faishon</p></div></div></td>
                        <td><div class="td-content"><span class="pricing">$108.09</span></div></td>
                        <td><div class="td-content"><span class="discount-pricing">$47.09</span></div></td>
                        <td><div class="td-content">130</div></td>
                        <td><div class="td-content"><a href="javascript:void(0);" class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Google</a></div></td>
                    </tr>
                    <tr>
                        <td><div class="td-content product-name"><img src="{{Vite::asset('resources/images/product-watch.jpg')}}" alt="product"><div class="align-self-center"><p class="prd-name">Watch</p><p class="prd-category text-danger">Accessories</p></div></div></td>
                        <td><div class="td-content"><span class="pricing">$88.00</span></div></td>
                        <td><div class="td-content"><span class="discount-pricing">$20.00</span></div></td>
                        <td><div class="td-content">66</div></td>
                        <td><div class="td-content"><a href="javascript:void(0);" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-warning feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Ads</a></div></td>
                    </tr>
                    <tr>
                        <td><div class="td-content product-name"><img src="{{Vite::asset('resources/images/product-laptop.jpg')}}" alt="product"><div class="align-self-center"><p class="prd-name">Laptop</p><p class="prd-category text-primary">Digital</p></div></div></td>
                        <td><div class="td-content"><span class="pricing">$110.00</span></div></td>
                        <td><div class="td-content"><span class="discount-pricing">$33.00</span></div></td>
                        <td><div class="td-content">35</div></td>
                        <td><div class="td-content"><a href="javascript:void(0);" class="text-info"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-info feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Email</a></div></td>
                    </tr>
                    <tr>
                        <td><div class="td-content product-name"><img src="{{Vite::asset('resources/images/product-camera.jpg')}}" alt="product"><div class="align-self-center"><p class="prd-name">Camera</p><p class="prd-category text-primary">Digital</p></div></div></td>
                        <td><div class="td-content"><span class="pricing">$126.04</span></div></td>
                        <td><div class="td-content"><span class="discount-pricing">$26.04</span></div></td>
                        <td><div class="td-content">30</div></td>
                        <td><div class="td-content"><a href="javascript:void(0);" class="text-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-secondary feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> Referral</a></div></td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>