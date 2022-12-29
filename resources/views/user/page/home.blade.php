@extends('user.usershop')
@section('usermain')

{{-- Slider --}}
@include('user.page.slider')
{{-- Slider --}}

<section class="ftco-section bgpt">
      <div class="container bw">
          <div class="row no-gutters ftco-services">
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-shipped"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Free Shipping</h3>
        </div>
      </div>      
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-diet"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Always Fresh</h3>
        </div>
      </div>    
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-award"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Superior Quality</h3>
        </div>
      </div>      
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-customer-service"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Support</h3>
        </div>
      </div>      
    </div>
  </div>
      </div>
  </section>

  {{-- <section class="ftco-section ftco-category ftco-no-pt">
      <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <div class="row">
                      <div class="col-md-6 order-md-last align-items-stretch d-flex">
                          <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(userdashboard/images/category.jpg);">
                              <div class="text text-center">
                                  <h2>Vegetables</h2>
                                  <p>Protect the health of every home</p>
                                  <p><a href="#" class="btn btn-primary">Shop now</a></p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(userdashboard/images/category-1.jpg);">
                              <div class="text px-3 py-1">
                                  <h2 class="mb-0"><a href="#">Fruits</a></h2>
                              </div>
                          </div>
                          <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(userdashboard/images/category-2.jpg);">
                              <div class="text px-3 py-1">
                                  <h2 class="mb-0"><a href="#">Vegetables</a></h2>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(userdashboard/images/category-3.jpg);">
                      <div class="text px-3 py-1">
                          <h2 class="mb-0"><a href="#">Juices</a></h2>
                      </div>		
                  </div>
                  <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(userdashboard/images/category-4.jpg);">
                      <div class="text px-3 py-1">
                          <h2 class="mb-0"><a href="#">Dried</a></h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section> --}}

  <section class="ftco-section bgpt">
    <div class="container bw">
        <div class="title_module_main heading-bar d-flex justify-content-between align-items-center mb-3">
            <h2 class="heading-bar__title ">
                <a class='link' href="#" title="Hot sale">
                    <img class="ml-2" src="../userdashboard/images/hotsale.jpg" alt="hotsale.jpg" height="90px" width="180px">
                </a>
            </h2>
        </div>
        <div class="row">
            <div class="row p-3">
                <div class="col-15 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-1.jpg" alt="Colorlib Template">
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Bell Pepper</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-15 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-1.jpg" alt="Colorlib Template">
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Bell Pepper</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-15 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-2.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Strawberry</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-15 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-3.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Green Beans</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-15 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-4.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Purple Cabbage</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-15 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-5.jpg" alt="Colorlib Template">
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Tomatoe</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-15 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-5.jpg" alt="Colorlib Template">
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Tomatoe</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-15 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-6.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Brocolli</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-15 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-7.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Carrots</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-15 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-8.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Fruit Juice</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="heading-bar__action d-md-block d-none pb-3" align="center">
            <a href="#" title="Xem tất cả" class="btn1">
                Xem tất cả <i class="nav-icon fas fa-angle-right"></i>
            </a>
        </div>
    </div>
  </section>

    <section class="ftco-section bgpt">
        <div class="container bw">
            <div class="title_module_main heading-bar d-flex justify-content-between align-items-center mb-3">
                <h4 class="heading-bar__title">
                    <a class='link bbhv' href="#" title="Latest news">Bán Chạy Nhất | Trái cây nhập</a>
                </h4>
            </div>
            <div class="row">
                <div class="row p-3">
                    <div class="col-30 ftco-animate">
                        <a href="#">
                            <img width="100%" height="100%" src="../userdashboard/images/traicaynhapkhau.jpg" alt="traicaynhapkhau.jpg">
                        </a>
                    </div>
                    <div class="col-15 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-2.jpg" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Strawberry</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>$120.00</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-15 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-3.jpg" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Green Beans</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>$120.00</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-15 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-4.jpg" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Purple Cabbage</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>$120.00</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-15 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-5.jpg" alt="Colorlib Template">
                                <span class="status">30%</span>
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Tomatoe</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-15 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-5.jpg" alt="Colorlib Template">
                                <span class="status">30%</span>
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Tomatoe</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-15 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-6.jpg" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Brocolli</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>$120.00</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-15 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-7.jpg" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Carrots</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>$120.00</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-15 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-8.jpg" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Fruit Juice</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>$120.00</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
            <div class="heading-bar__action d-md-block d-none pb-3" align="center">
                <a href="#" title="Xem tất cả" class="btn1">
                    Xem tất cả <i class="nav-icon fas fa-angle-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="ftco-section bgpt">
        <div class="container bw">
            <div class="title_module_main heading-bar d-flex justify-content-between align-items-center mb-3">
                <h4 class="heading-bar__title">
                    <a class='link bbhv' href="#" title="Latest news">Bán Chạy Nhất | Trái cây Việt</a>
                </h4>
            </div>
            <div class="row">
                <div class="col-15 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-5.jpg" alt="Colorlib Template">
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Tomatoe</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-15 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-5.jpg" alt="Colorlib Template">
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Tomatoe</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-15 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-6.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Brocolli</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-15 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-7.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Carrots</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-15 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="userdashboard/images/product-8.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Fruit Juice</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="heading-bar__action d-md-block d-none pb-3" align="center">
                <a href="#" title="Xem tất cả" class="btn1">
                    Xem tất cả <i class="nav-icon fas fa-angle-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="section awe-section-10">	
        <section class="section_blog section bgpt">
            <div class="container card border-0 py-3 bw">
                <div class="title_module_main heading-bar d-flex justify-content-between align-items-center">
                    <h2 class="heading-bar__title ">
                        <a class='link' href="{{ route('blog.blogIndex') }}" title="Latest news">Tin tức mới nhất</a>
                    </h2>
                    <div class="heading-bar__action d-md-block d-none">
                        <a href="{{ route('blog.blogIndex') }}" title="View all" class="link more">
                            Xem tất cả <i class="nav-icon fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="row mt-3 ">
                    <div class="col-12 col-md-6 col-lg-5 section_blog_left ">
                        <div class="blogwp clearfix card border-0 ">
                            <a  class="image-blog card-img-top text-center" href="{{ route('blog.slug', $nposts->slug->nameSlug)}}" title="{{$nposts->title}}">
                                <img class="lazyload img-fluid" src="{{$nposts->imagePath}}"  alt="{{$nposts->imageName}}">
                            </a>
                            <div class="content_blog clearfix card-body px-0">
                                <h3>
                                    <a class='link' href="{{ route('blog.slug', $nposts->slug->nameSlug)}}" title="{{$nposts->title}}">{{$nposts->title}}</a>
                                </h3>
                                <div class="media">
                                    <div class="media-body">
                                        <div class='mt-0'>{{$nposts->posterName}}</div>
                                        <small class='text-muted font-weight-light'>
                                            {{date('l, F d, Y',strtotime($nposts['created_at']))}}
                                        </small>  
                                    </div>
                                </div>
                                <p class="justify">
                                    {!! \Illuminate\Support\Str::limit($nposts->content, 10, '...') !!} <a href='{{ route('blog.slug', $nposts->slug->nameSlug)}}' class='button_custome_35 link'>Đọc tiếp</a>
                                </p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-12 col-md-6 col-lg-7 position-relative">
                        <div class="section_blog_right scroll">
                            @foreach ($posts as $item)
                                <div class="blogwp clearfix media">
                                    <a  class="image-blog text-center mr-3" href="{{ route('blog.slug', $item->slug->nameSlug)}}" title="{{$item->title}}">
                                        <img class="lazyload img-fluid" src="{{$item->imagePath}}" alt="{{$item->imageName}}">
                                    </a>
                                    <div class="content_blog clearfix media-body ">
                                        <h3 class='mt-0'>
                                            <a class='link' href="{{ route('blog.slug', $item->slug->nameSlug)}}" title="{{$item->title}}">{{$item->title}}</a>
                                        </h3>
                                        <div class="media">
                                            <div class="media-body d-flex flex--wrap align-items-center">
                                                <div class='mt-0 mr-3'>{{$item->posterName}}</div>
                                                <small class='text-muted font-weight-light'>
                                                    {{date('l, F d, Y',strtotime($item['created_at']))}}  
                                                </small>  
                                            </div>
                                        </div>
                                        <p class="justify lead d-none d-md-block ">
                                            {!! \Illuminate\Support\Str::limit($item->content, 10, '...') !!} <a href='{{ route('blog.slug', $item->slug->nameSlug)}}' class='button_custome_35 link'>Đọc tiếp</a>
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>   
                    </div>
                </div>
            </div>
        </section>
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