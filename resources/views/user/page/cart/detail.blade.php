@extends('user.usershop')
@section('usermain')
    <div class="hero-wrap hero-bread" style="background-image: url('userdashboard/images/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-0 bread">Cart</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container">
            <div class="row d-flex justify-content-center py-3">
                <div class="col-12">
                    <ul class="float-left" style="list-style: none; display: flex; padding-left: 0; margin: 0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        {{-- <li class="breadcrumb-item">
                            <a href="#">Product</a>
                        </li>
                        <li class="breadcrumb-item active">Slug</li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bgpt">
        <div class="container card py-2">
            <h2>Giỏ hàng</h2>
            <hr>
            @if ($count_cartDetails < 0)
                <h3 class="cart-item-center">Không có sản phẩm</h3>
            @else
                <div class="row cart-detail-main">
                    <div class="col-8">
                        @foreach ( $cartDetails as $cartDetail )
                            @foreach ( $products as $product )
                                @if ($cartDetail->product_id === $product->id)
                                    <div class="row">
                                        <div class="col-1">
                                            <abbr title="Xóa">
                                                <a href=" {{ route('cart.delete', $cartDetail->id)}} ">
                                                    <button type="button" class="btn btn-default btn-sm"><b>x</b></button>
                                                </a>
                                            </abbr>
                                        </div>
                                        <div class="col-2 cart-item-center">
                                            <img class="img-cart-detail" src="{{$product->image_path}}" alt="{{$product->image_name}}">
                                        </div>
                                        <div class="col-9">
                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="{{ route('product.slug', $product->slug->nameSlug) }}">
                                                        <span class="item-cart-detail">
                                                            {{$product->name}}
                                                        </span>
                                                    </a>
                                                    <span class="item-cart-detail">
                                                        @foreach ( $units as $unit )
                                                            @if ($product->id_unit === $unit->id)
                                                                {{$unit->type}}
                                                            @endif
                                                        @endforeach
                                                    </span>
                                                </div>
                                                <div class="col-2 py-2">
                                                    <span class="price-cart-detail">{{number_format($cartDetail->price)}}<u>đ</u></span>
                                                </div>
                                                <div class="col-4 py-2">
                                                    <div class="row">
                                                        <div class="col-3"><button class="btn btn-success">-</button></div>
                                                        <div class="col-6 py-1"><input type="text" class="input-cart-detail" value="{{$cartDetail->amount}}"></div>
                                                        <div class="col-2"><button class="btn btn-success">+</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                    <div class="col-3 ml-5 cart-detail-main-2">
                        <h6 style="color: red"><u>CHỌN THỜI GIAN GIAO HÀNG</u></h6>
                        <form class="mt-3" action="">
                            @csrf
                            <div class="row pl-3 mb-4">
                                <label for="delivery_date" style="font-size: 13px; margin-bottom: 5px; color: black">Ngày giờ nhận hàng</label>
                                <div>
                                    <input id="delivery_date" type="datetime-local" name="delivery_date" value="1990-01-01T00:00" />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    <span>Tổng tiền</span>
                                </div>
                                <div class="col-5">
                                    <span style="color: black" class="price-cart-detail">
                                        <b>{{number_format($total)}}<u>đ</u></b>
                                    </span>
                                </div>
                            </div>
                            <div class="row pl-3">
                                <a href="#" class="payment-btn">Thanh toán</a>
                            </div>
                        </form>
                        {{-- <div class="row">
                            <div class="col-7">
                                <div class="group-status">
                                    <span>
                                        Thương hiệu:
                                        <span> {{ $productDetails->id_trademark }}</span>
                                        <span> | </span>
                                    </span>
                                    <span>
                                        Tình trạng:
                                        @if ($productDetails->status == 1)
                                            <span class="badge badge-primary"> Còn hàng</span>
                                        @else
                                            @if ($productDetails->status == 0)
                                                <span class="badge badge-success"> Liên hệ</span>
                                            @endif
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="product-policises-wrapper">
                                    <h5>Chỉ có ở Na Fruits</h5>
                                    <ul class="product-policises">
                                        <li class="media">
                                            <div class="mr-3">
                                                <img class="img-fluid" src="/storage/products/policy_product_image_1.png"
                                                    alt="policy_product_image_1.png" width="100%">
                                            </div>
                                            <div class="media-body">Giao hàng nội thành</div>
                                        </li>
                                        <li class="media">
                                            <div class="mr-3">
                                                <img class="img-fluid" src="/storage/products/policy_product_image_2.png"
                                                    alt="policy_product_image_2.png" width="100%">
                                            </div>
                                            <div class="media-body">Đổi trả trong 48H nếu sản phẩm không đạt chất lượng cam kết
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="mr-3">
                                                <img class="img-fluid" src="/storage/products/policy_product_image_3.png"
                                                    alt="policy_product_image_3.png" width="100%">
                                            </div>
                                            <div class="media-body">Giá có thể thay đổi theo thời điểm</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6">
                    <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                    <span>Get e-mail updates about our latest shops and special offers</span>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
