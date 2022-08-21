@extends('layout')
@section('content')
    <!--================Product Area =================-->
    @push('custom-css')
        <style>
            .filterDiv {
                display: none;
            }
            .show {
                display: block;
            }
            /* Style the buttons */
            .filter {
                cursor: pointer;
            }
            .filter.active {
                color: #f195b2;
            }
            .dropbtn {
                background-color: #04AA6D;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            .dropbtn:hover, .dropbtn:focus {
                background-color: #3e8e41;
            }

            #myInput {
                box-sizing: border-box;
                background-image: url('searchicon.png');
                background-position: 14px 12px;
                background-repeat: no-repeat;
                font-size: 16px;
                padding: 14px 20px 12px 45px;
                border: none;
                border-bottom: 1px solid #ddd;
            }

            #myInput:focus {outline: 3px solid #ddd;}

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f6f6f6;
                min-width: 230px;
                overflow: auto;
                border: 1px solid #ddd;
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown a:hover {background-color: #ddd;}
            #find{ display: none}
            .show {display: block;}
        </style>
    @endpush
    <div class="container">
        <div class="row product_inner_row">
            <div class="col-lg-9">
                <div class="row m0 product_task_bar">
                    <div class="product_task_inner">
                        <div class="float-left">
                            <a class="active" ><i class="fa fa-th-large" aria-hidden="true" onclick="myFunction()"></i></a>
                            <a ><i class="fa fa-th-list" aria-hidden="true"></i></a>
                            <span>Showing 1 - 10 of 55 results</span>
                        </div>
                    </div>
                </div>
                <div class="row product_item_inner container">

                    @foreach($all_product as $key => $product)
                        @if($product->ExpirationDate>$today)
                            <div class="col-lg-4 col-md-4 col-6 filterDiv {{$product->category_id}} price_{{$product->product_price}}">
                                <form>
                                    @csrf
                                    <input type="hidden" value="{{$product->product_id}}"
                                           class="cart_product_id_{{$product->product_id}}">
                                    <input type="hidden" value="{{$product->product_name}}"
                                           class="cart_product_name_{{$product->product_id}}">

                                    <input type="hidden" value="{{$product->product_quantity}}"
                                           class="cart_product_quantity_{{$product->product_id}}">

                                    <input type="hidden" value="{{$product->product_image}}"
                                           class="cart_product_image_{{$product->product_id}}">
                                    <input type="hidden" value="{{$product->product_price}}"
                                           class="cart_product_price_{{$product->product_id}}">
                                    <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">
                                    <div class="cake_feature_item">
                                        <a href="{{URL::to('/chi-tiet/'.$product->product_id)}}">
                                            <div class="cake_img">
                                                <img width="270" height="226"
                                                     src="{{URL::to('uploads/product/'.$product->product_image)}}"
                                                     alt="">
                                            </div>
                                            <div class="cake_text">
                                                <h4>${{number_format($product->product_price,0,',','.')}}</h4>
                                                <h3>{{$product->product_name}}</h3>
                                            </div>
                                        </a>
                                        <input type="button" value="Thêm giỏ hàng"
                                               class="btn btn-default add-to-cart pest_btn"
                                               data-id_product="{{$product->product_id}}" name="add-to-cart">
                                    </div>
                                    {{--                                            <a href="{{URL::to('/chi-tiet/'.$product->product_id)}}">--}}
                                    {{--                                                <img src="{{URL::to('uploads/product/'.$product->product_image)}}" alt="" />--}}
                                    {{--                                                <h2>{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</h2>--}}
                                    {{--                                                <p>{{$product->product_name}}</p>--}}
                                    {{--                                            </a>--}}
                                </form>

                            </div>
                        @endif
                    @endforeach

                </div>
                <div class="product_pagination">
                    <div class="left_btn">
                        <a href="#"><i class="lnr lnr-arrow-left"></i> New posts</a>
                    </div>
                    <div class="middle_list">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                {!!$all_product->links()!!}
                            </ul>
                        </nav>
                    </div>
                    <div class="right_btn"><a href="#">Older posts <i class="lnr lnr-arrow-right"></i></a></div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product_left_sidebar">
                    <aside class="left_sidebar search_widget">
                        <div class="input-group">

                            <input type="text" class="form-control" type="text" class="form-control" placeholder="Search Product.."
                                   id="myInput" onfocus="myFunction()" onkeyup="filterFunction()" onblur="myFunction()">
                            <div id="myDropdown" class="dropdown-content" style="width: 100%;">
                                <div id="find">
                                    @foreach($all_product as $key => $product)
                                        <a href="{{URL::to('/chi-tiet/'.$product->product_id)}}">
                                            {{$product->product_name}}</a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="input-group-append">
                                <button class="btn" type="button"><i class="icon icon-Search"></i></button>
                            </div>
                        </div>
                    </aside>
                    <aside class="left_sidebar p_catgories_widget">
                        <div class="p_w_title">
                            <h3>Product Categories</h3>
                        </div>
                        <ul class="list_style" id="myBtnContainer">
                            @foreach($category as $key => $cate)
                                <li><a style="cursor: pointer;" class="filter"
                                       onclick="filterSelection('{{$cate->category_id}}')">
                                        {{$cate->category_name}}</a></li>
                            @endforeach
                        </ul>
                    </aside>
                    <aside class="left_sidebar p_price_widget">
                        <div class="p_w_title">
                            <h3>Filter By Price</h3>
                        </div>
                        <div class="filter_price">
                            <div id="slider-range">a</div>
                            <form action="{{route('filter-price')}}" method="post">
                            @csrf
                            <label for="amount">Price range:</label>
                            <input type="text" name="min_price" id="amount" readonly/>
                            <button type="submit" href="">Filter</button>
                            </form>
                        </div>
                    </aside>
                    <aside class="left_sidebar p_sale_widget">
                        <div class="p_w_title">
                            <h3>Top Sale Products</h3>
                        </div>
                        <div class="media">
                            <div class="d-flex">
                                <img src="public/layout/img/product/sale-product/s-product-1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Brown Cake</h4></a>
                                <ul class="list_style">
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h5>$29</h5>
                            </div>
                        </div>
                        <div class="media">
                            <div class="d-flex">
                                <img src="public/layout/img/product/sale-product/s-product-2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Brown Cake</h4></a>
                                <ul class="list_style">
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h5>$29</h5>
                            </div>
                        </div>
                        <div class="media">
                            <div class="d-flex">
                                <img src="public/layout/img/product/sale-product/s-product-3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Brown Cake</h4></a>
                                <ul class="list_style">
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h5>$29</h5>
                            </div>
                        </div>
                        <div class="media">
                            <div class="d-flex">
                                <img src="public/layout/img/product/sale-product/s-product-4.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <a href="#"><h4>Brown Cake</h4></a>
                                <ul class="list_style">
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h5>$29</h5>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!--================End Product Area =================-->
    @push('min-script')

        <script>
            filterSelection("all")
            function filterSelection(c) {
                var x, i;
                x = document.getElementsByClassName("filterDiv");
                if (c == "all") c = "";
                for (i = 0; i < x.length; i++) {
                    w3RemoveClass(x[i], "show");
                    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
                }
            }

            function w3AddClass(element, name) {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) {
                    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
                }
            }

            function w3RemoveClass(element, name) {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) {
                    while (arr1.indexOf(arr2[i]) > -1) {
                        arr1.splice(arr1.indexOf(arr2[i]), 1);
                    }
                }
                element.className = arr1.join(" ");
            }

            // Add active class to the current button (highlight it)
            var btnContainer = document.getElementById("myBtnContainer");
            var btns = btnContainer.getElementsByClassName("filter");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function(){
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }
            function hiddenTogle(){
                document.getElementById("myDropdown").classList.toggle("show");
            }
            function filterFunction() {
                document.getElementById("find").style.display="block";
                var input, filter, ul, li, a, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                div = document.getElementById("myDropdown");
                a = div.getElementsByTagName("a");
                for (i = 0; i < a.length; i++) {
                    txtValue = a[i].textContent || a[i].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                    } else {
                        a[i].style.display = "none";
                    }
                }
            }
        </script>
    @endpush
@endsection
