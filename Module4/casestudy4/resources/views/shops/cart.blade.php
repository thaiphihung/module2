@extends('shops.layouts.master')
@section('content')
@include('sweetalert::alert')

<body>
    <div id="loading-overlay">
        <div class="loader"></div>
    </div> <!-- /.loading-overlay -->
    <div class="page-title parallax parallax1 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content text-center">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Product</a></li>
                                <li class="blog"><a href="#">Shopping Cart</a></li>
                            </ul>
                        </div>
                        <div class="page-title-heading">
                            <h2 class="title"><a href="#">Cart</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.page-title -->
    <div class="main-shop-cart">
        <section class="flat-cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="woocommerce-tabs wc-tabs-wrapper">
                            <ul class="tabs">
                                <li><a class="tab active" data-id="#tab-description" href="#"><i class="fas fa-shopping-cart icon_bag" aria-hidden="true"></i>SHOPPING CART</a></li>
                                <li><a class="tab" data-id="#tab-reviews" href="#"><i class="fas fa-check-circle icon_ribbon" aria-hidden="true"></i>CHECK OUT</a></li>
                                <li><a class="tab" data-id="#tab-order" href="#"><i class="fas fa-arrow-down arrow_carrot-down_alt" aria-hidden="true"></i>ORDER COMPLETE</a></li>
                            </ul>
                            <div class="cart-wrap">
                                <div id="tab-description" class="tab-content">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th class="delete"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $total = 0;
                                            $totalAll = 0;
                                            @endphp
                                            @if(session('cart'))
                                            @foreach(session('cart') as $id => $product)
                                            @php
                                            $total = $product['price'] * $product['quantity'];
                                            $totalAll += $total;
                                            @endphp
                                            <tr rowId="{{ $id }}">
                                                <td class="text-center">
                                                    <img src="{{ asset($product['image']) }}" alt="image" style="max-width: 100px; max-height: 100px; object-fit: cover;">
                                                </td>
                                                <td class="list text">{{$product['name']}}</td>
                                                <td class="text-center list price">${{$product['price']}}</td>
                                                <td class="text-center list" data-title="Stock">
                                                    <input type="number" value="{{ $product['quantity'] }}" class="form-control quantity" min="1" max="{{ $product['max'] }}" />
                                                    <script>
                                                        // Lấy giá trị số lượng hàng từ trang web
                                                        var stockQuantity = parseInt("{{ $product['max'] }}");

                                                        // Lấy trường nhập số lượng sản phẩm
                                                        var quantityInput = document.querySelector('.quantity');

                                                        // Thêm trình lắng nghe sự kiện cho trường nhập số lượng
                                                        quantityInput.addEventListener('change', function() {
                                                            // Lấy giá trị số lượng khách hàng muốn đặt hàng
                                                            var quantity = parseInt(this.value);

                                                            // Nếu số lượng vượt quá số lượng trong kho, giới hạn số lượng cho phù hợp
                                                            if (quantity > stockQuantity) {
                                                                this.value = stockQuantity;
                                                            }
                                                        });
                                                    </script>
                                                </td>
                                                <td class="text-center list price">${{ number_format($total) }}</td>
                                                <td class="text-center delete">
                                                    <button class="btn btn-outline-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash"></i></button>
                                                    <button class="btn btn-outline-info btn-sm update-cart" data-id="{{ $id }}">
                                                        <i class="fa fa-solid fa-recycle"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                    <div class="cart-btn">
                                        <div class="btn-continue">
                                            <div class="elm-btn">
                                                <a href="{{route('home.index')}}" class="themesflat-button outline ol-accent margin-top-40 hvr-shutter-out-horizontal">CONTINUE SHOPPING</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="wrap-discount-estimate-cart">
                                            <div class="col-lg-4 col-md-4 discount">
                                                <h2 class="discount-heading"><a href="#">Discount Codes</a></h2>
                                                <p class="discount-text">Enter your coupin if you have one</p>
                                                <input type="text" name="discount-codes">
                                                <div class="elm-btn">
                                                    <a href="#" class="themesflat-button outline ol-accent margin-top-40 hvr-shutter-out-horizontal">submit</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 estimate">
                                                <h2 class="estimate-heading"><a href="#">Estimate Shipping</a></h2>
                                                <p class="estimate-text">Enter your destination to get shipping</p>
                                                <div class="estimate-select country">
                                                    <div class="title-select">
                                                        <p>COUNTRY</p>
                                                    </div>
                                                    <div class="select">
                                                        <select>
                                                            <option value="volvo">United States</option>
                                                            <option value="saab">Saab</option>
                                                            <option value="opel">Opel</option>
                                                            <option value="audi">Audi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="estimate-select postal">
                                                    <div class="title-select">
                                                        <p>POSTAL CODE/ZIP'</p>
                                                    </div>
                                                    <div class="selectt">
                                                        <select>
                                                            <option value="volvo">01234567</option>
                                                            <option value="saab">Saab</option>
                                                            <option value="opel">Opel</option>
                                                            <option value="audi">Audi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="elm-btn">
                                                    <a href="#" class="themesflat-button outline ol-accent margin-top-40 hvr-shutter-out-horizontal">GET A QUOTE</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 cart">
                                                <h2 class="cart-heading"><a href="#">Cart Total</a></h2>
                                                <div class="wrap-cart">
                                                    <div class="sub-total">
                                                        <span>SUB TOTAL</span>
                                                        <p class="price">${{ number_format($totalAll) }}</p>
                                                    </div>
                                                    <div class="shipping">
                                                        <span>SHIPPING</span>
                                                        <p class="price">Free</p>
                                                    </div>
                                                    <div class="totall">
                                                        <span>TOTAL</span>
                                                        <p class="price">${{ number_format($totalAll) }}</p>
                                                    </div>
                                                </div>
                                                <div class="elm-btn">
                                                    <a href="#" class="themesflat-button outline ol-accent margin-top-40 hvr-shutter-out-horizontal">PROCEED TO CHECK OUT</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-reviews" class="tab-content">
                                    <div class="check-out">
                                        <h3 class="heading-check">Billing Address</h3>
                                        <form class="form-checkout" method="POST" action="{{ route('orders') }}">
                                            @csrf
                                            @if (isset(Auth()->guard('customers')->user()->name))
                                            <div class="input-wrap">
                                                <label>Name <span> *</span></label>
                                                <input name="name" class="form-control" type="text" placeholder="John" value="{{ Auth()->guard('customers')->user()->name }}" id="full_name" placeholder="">
                                            </div>
                                            <div class="input-wrap">
                                                <label>Email<span> *</span></label>
                                                <input name="email" class="form-control" type="text" placeholder="example@email.com" value="{{ Auth()->guard('customers')->user()->email }}" id="user_city">
                                            </div>
                                            <div class="input-wrap">
                                                <label>Address<span> *</span></label>
                                                <input name="address" class="form-control" type="text" placeholder="123 Street" value="{{ Auth()->guard('customers')->user()->address }}" id="user_address" placeholder="">
                                            </div>
                                            <div class="input-wrap">
                                                <label>Phone<span> *</span></label>
                                                <input name="phone" class="form-control" type="text" placeholder="+123 456 789" value="{{ Auth()->guard('customers')->user()->phone }}" id="user_post_code">
                                            </div>
                                            <div class="row-check clearfix">
                                                <div class="input-wrap ">
                                                    <input type="checkbox" name="check-ship" class="mg-right-15">Create an account?
                                                </div>
                                                <div class="input-wrap ">
                                                    <input type="checkbox" name="check-create" class="mg-right-15"> Ship to different address?
                                                </div>
                                            </div>
                                            <div class="input-wrap ">
                                                <label>Order note <span> *</span></label>
                                                <textarea name="messages" required=""></textarea>
                                            </div>
                                            @else
                                            <h4>Please login before paying</h4>
                                            <a href="{{ route('login.shop') }}" class="btn btn-danger">Login</a>
                                            @endif

                                            <div class="wrap-check mg-top-20">
                                                <div class="input-wrap mg-bottom-15">
                                                    <input type="checkbox" name="bank"> DIRECT BANK TRANSFER
                                                </div>
                                                <div class="wrap-check-text">
                                                    <p>Make your payment directly into our bank account. Please use your Order ID as the pay ments reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                                </div>
                                                <div class="input-wrap mg-bottom-15 ">
                                                    <input type="checkbox" name="payment"> CHECK PAYMENTS
                                                </div>
                                                <div class="input-wrap mg-bottom-15">
                                                    <input type="checkbox" name="paypal"> PAYPAL<img src="{{asset('shop/asset/image/homepage136.png')}}" alt="image">
                                                </div>

                                                <div class="wc-proceed-to-checkout text-center pd-top-20">
                                                    <div class="elm-btn">
                                                        <button type="submit" class="themesflat-button outline ol-accent margin-top-40 hvr-shutter-out-horizontal">PROCEED TO CHECKOUT</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="review-order">
                                        <h3>Your Order</h3>
                                        <table class="order-table">

                                            <tbody>
                                                <tr class="cart-subtotal cart-title-details">
                                                    <td class="product-name">Product</td>
                                                    <td class="total" data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>Total</span></td>
                                                </tr>
                                                @if (session('cart'))
                                                @foreach (session('cart') as $id => $product)
                                                @php
                                                $price = $product['price'];
                                                $total = $product['price'] * $product['quantity'];
                                                $totalAll += $total
                                                @endphp
                                                <tr class="cart-subtotal">
                                                    <td class="product-name">{{$product['name']}}</td>
                                                    <input type="hidden" value="{{ $id }}" name="product_id[]">
                                                    <input type="hidden" value="{{ $product['quantity'] }}" name="quantity[]">
                                                    <input type="hidden" value="{{ $total }}" name="total[]">
                                                    <td class="total" data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{number_format( $total) }}</span></td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>

                                        </table>
                                        <div class="wrap-check mg-top-20">
                                            <table class="order-table">
                                                <tbody>
                                                    <tr class="order-total">
                                                        <td class="product-name">Total </td>
                                                        <td class="total text-d90000 font-weight-500" data-title="Total"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($totalAll) }}</span> </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <td class="product-name">Shipping</td>
                                                        <td class="total" data-title="Total"> Free Shipping</td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <td class="title product-name">ORDER TOTAL </td>
                                                        <td class="total text-d90000 font-weight-500" data-title="Total"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($totalAll) }}</span> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-order" class="tab-content">
                                    <div class="order-complete">
                                        <p class="heading-order">Thank you. Your order has been received</p>
                                        <div class="order-wrap">
                                            <ul class="order-menu">
                                                <li>
                                                    <h3>Order number:</h3>
                                                    <p>1599</p>
                                                </li>
                                                <li>
                                                    <h3>Date:</h3>
                                                    <p>December 11, 2018</p>
                                                </li>
                                                <li>
                                                    <h3>Total:</h3>
                                                    <p>$88.95</p>
                                                </li>
                                                <li>
                                                    <h3>Payment methob:</h3>
                                                    <p>Cash on delivery</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="order-details">
                                            <h1><a href="#">Order details</a></h1>
                                            <div class="order-table">
                                                <table class="order-table">
                                                    <tbody>
                                                        <tr class="cart-subtotal">
                                                            <td class="product-name">PRODUCT</td>
                                                            <td class="total" data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>TOTAL</span></td>
                                                        </tr>
                                                        <tr class="cart-subtotal">
                                                            <td class="product-name"></td>
                                                            <td class="total" data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29.99</span></td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <td class="product-name">Olema Rose Cotes De</td>
                                                            <td class="total" data-title="Total"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>36.89</span> </td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <td class="product-name">Total </td>
                                                            <td class="total text-d90000 font-weight-500" data-title="Total"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol ">$</span>66.88</span> </td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <td class="product-name">Shipping</td>
                                                            <td class="total" data-title="Total"> Free Shipping</td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <td class="product-name">Payment methob:</td>
                                                            <td class="total" data-title="Total"> Cash on delivery</td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <td class="title product-name">ORDER TOTAL </td>
                                                            <td class="total text-d90000 font-weight-500" data-title="Total"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>69.99</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> <!-- /main-order-tracking -->
    @endsection