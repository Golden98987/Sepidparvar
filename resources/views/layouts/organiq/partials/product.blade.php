@section('product')
<section class="pb_70">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-8 col-sm-10 text-center">
              <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                  <h2>بهترین فروشنده</h2>
              </div>
              <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
          </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-12">
              <div class="product_content">
                  <ul class="nav nav-tabs justify-content-center animation" data-animation="fadeInUp"
                      data-animation-delay="0.04s" role="tablist">
                      @foreach ($Temp['category'] as $category)
                        <li class="nav-item">
                            <a class="nav-link active" id="{{$category->id}}" data-toggle="tab" href="{{$category->id}}" role="tab"
                            aria-controls="tab-1" aria-selected="true"><span class="pr_icon1"></span> {{$category->persian_name}}</a>
                        </li>  
                      @endforeach
                      <li class="nav-item">
                          <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab"
                             aria-controls="tab-1" aria-selected="true"><span class="pr_icon1"></span>کلیه محصولات</a>
                      </li>
                      <!-- <li class="nav-item">
                          <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab"
                             aria-controls="tab-2" aria-selected="false"><span class="pr_icon2"></span>سبزیجات</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" id="tab3" data-toggle="tab" href="#tab-3" role="tab"
                             aria-controls="tab-3" aria-selected="false"><span class="pr_icon3"></span>میوه ها</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" id="tab4" data-toggle="tab" href="#tab-4" role="tab"
                             aria-controls="tab-4" aria-selected="false"><span class="pr_icon4"></span>آب میوه</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" id="tab5" data-toggle="tab" href="#tab-5" role="tab"
                             aria-controls="tab-5" aria-selected="false"><span class="pr_icon5"></span>چای</a>
                      </li>  -->
                  </ul>
                  <div class="small_divider clearfix"></div>
                  <div class="tab-content">
                      <!-- <div class="tab-pane fade show active" id="{{$category->id}}" role="tabpanel" aria-labelledby="{{$category->id}}">
                          <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.05s"> -->
                          @foreach ($BestSoldProduct as $product)
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                
                                
                                <!-- @if ($category->id == $product->category_id) -->
                                  <div class="product">
                                    
                                      <span class="pr_flash bg_green">فروش</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('/').$product->Photoes()->first()->path}}" alt="product_img1"></a>    
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">{{ $product->name }} </a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">{{ $product->price }} </span>
                                      </div>
                                                              
                                  </div>
                                  <!-- @endif -->
                                     
                                
                              </div>
                              @endforeach 
                              <!-- <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_orange">-10٪</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img2.jpg')}}"
                                                           alt="product_img2"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">انگورهای تازه آلی</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">40.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img3.jpg')}}"
                                                           alt="product_img3"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                  <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">خیار ارگانیک تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:60%"></div>
                                          </div>
                                          <span class="price">52.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_green">فروش</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img4.jpg')}}"
                                                           alt="product_img4"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">پرتقال ارگانیک تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:100%"></div>
                                          </div>
                                          <span class="price">39.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img5.jpg')}}"
                                                           alt="product_img5"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                  <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">100٪ آبهای ارگانیک</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:100%"></div>
                                          </div>
                                          <span class="price">33.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img6.jpg')}}"
                                                           alt="product_img6"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">موز ارگانیک تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:60%"></div>
                                          </div>
                                          <span class="price">42.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_red">داغ</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img7.jpg')}}"
                                                           alt="product_img7"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                              <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">گوجه فرنگی آلی تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">  54.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_orange">-25٪</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img8.jpg')}}"
                                                           alt="product_img8"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">هویج تازه ارگانیک</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">32.00 تومان</span>
                                      </div>
                                  </div>
                              </div> -->
                          </div>
                      </div>
                      <!-- <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                          <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_orange">-10٪</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img2.jpg')}}"
                                                           alt="product_img2"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">انگورهای تازه آلی</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">40.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img3.jpg')}}"
                                                           alt="product_img3"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">خیار ارگانیک تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:60%"></div>
                                          </div>
                                          <span class="price">52.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img5.jpg')}}"
                                                           alt="product_img5"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                  <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">100٪ آبهای ارگانیک</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:100%"></div>
                                          </div>
                                          <span class="price">33.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img6.jpg')}}"
                                                           alt="product_img6"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                  <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">موز ارگانیک تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:60%"></div>
                                          </div>
                                          <span class="price">تومان 42.00 </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_red">داغ</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img7.jpg')}}"
                                                           alt="product_img7"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">گوجه فرنگی آلی تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">540 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_orange">-25٪</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img8.jpg')}}"
                                                           alt="product_img8"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">هویج تازه ارگانیک</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">32.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3">
                          <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_green">فروش</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img1.jpg')}}"
                                                           alt="product_img1"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">توت فرنگی ارگانیک تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">35.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_orange">-10٪</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img2.jpg')}}"
                                                           alt="product_img2"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">انگورهای تازه آلی</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">40.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_green">فروش</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img4.jpg')}}"
                                                           alt="product_img4"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                        <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">پرتقال ارگانیک تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:100%"></div>
                                          </div>
                                          <span class="price">39.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img5.jpg')}}"
                                                           alt="product_img5"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">100٪ آبهای ارگانیک</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:100%"></div>
                                          </div>
                                          <span class="price">33.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_red">داغ</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img7.jpg')}}"
                                                           alt="product_img7"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">گوجه فرنگی آلی تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">540 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_orange">-25٪</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img8.jpg')}}"
                                                           alt="product_img8"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                        <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">هویج تازه ارگانیک</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">32.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab4">
                          <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_green">فروش</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img4.jpg')}}"
                                                           alt="product_img4"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                        <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">پرتقال ارگانیک تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:100%"></div>
                                          </div>
                                          <span class="price">39.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img5.jpg')}}"
                                                           alt="product_img5"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">100٪ آبهای ارگانیک</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:100%"></div>
                                          </div>
                                          <span class="price">33.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img6.jpg')}}"
                                                           alt="product_img6"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                  <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">موز ارگانیک تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:60%"></div>
                                          </div>
                                          <span class="price">42.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_red">داغ</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img7.jpg')}}"
                                                           alt="product_img7"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                              <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">گوجه فرنگی آلی تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">540 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_orange">-25٪</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img8.jpg')}}"
                                                           alt="product_img8"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                  <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">هویج تازه ارگانیک</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">32.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="tab5">
                          <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_red">داغ</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img7.jpg')}}"
                                                           alt="product_img7"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">گوجه فرنگی آلی تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">540 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img3.jpg')}}"
                                                           alt="product_img3"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                              <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">خیار ارگانیک تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:60%"></div>
                                          </div>
                                          <span class="price">52.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_green">فروش</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img4.jpg')}}"
                                                           alt="product_img4"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">پرتقال ارگانیک تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:100%"></div>
                                          </div>
                                          <span class="price">39.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_orange">-10٪</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img2.jpg')}}"
                                                           alt="product_img2"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">انگورهای تازه آلی</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">40.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img5.jpg')}}"
                                                           alt="product_img5"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">100٪ آبهای ارگانیک</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:100%"></div>
                                          </div>
                                          <span class="price">33.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_orange">-25٪</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img8.jpg')}}"
                                                           alt="product_img8"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">هویج تازه ارگانیک</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">32.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img6.jpg')}}"
                                                           alt="product_img6"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">موز ارگانیک تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:60%"></div>
                                          </div>
                                          <span class="price">42.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                  <div class="product">
                                      <span class="pr_flash bg_green">فروش</span>
                                      <div class="product_img">
                                          <a href="#"><img src="{{asset('assets/images/product_img1.jpg')}}"
                                                           alt="product_img1"></a>
                                          <div class="product_action_box">
                                              <ul class="list_none pr_action_btn">
                                                  <li><a href="#"><i class="ti-heart"></i></a></li>
                                                  <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                  <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="product_info">
                                          <h6><a href="#">توت فرنگی ارگانیک تازه</a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">35.00 تومان</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div> -->
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="overlap_shape">
      <div class="ol_shape8">
          <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
              <img data-parallax="{&quot;y&quot;: -30, &quot;smoothness&quot;: 20}" src="{{asset('assets/images/shape25.png')}}"
                   alt="شکل 25">
          </div>
      </div>
      <div class="ol_shape9">
          <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
              <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="{{asset('assets/images/shape26.png')}}"
                   alt="شکل26">
          </div>
      </div>
      <div class="ol_shape10">
          <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
              <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="{{asset('assets/images/shape27.png')}}"
                   alt="شکل 27">
          </div>
      </div>
      <div class="ol_shape11">
          <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s">
              <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="{{asset('assets/images/shape28.png')}}"
                   alt="شکل28">
          </div>
      </div>
      <div class="ol_shape12">
          <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s">
              <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="{{asset('assets/images/shape29.png')}}"
                   alt="شکل 29">
          </div>
      </div>
      <div class="ol_shape13">
          <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s">
              <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="{{asset('assets/images/shape30.png')}}"
                   alt="شکل 30">
          </div>
      </div>
      <div class="ol_shape14">
          <div class="bounceimg" data-animation="fadeInRight" data-animation-delay="0.5s">
              <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="{{asset('assets/images/shape31.png')}}"
                   alt="شکل 31">
          </div>
      </div>
  </div>
</section>
@endsection

