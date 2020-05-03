@extends('layouts.organiq.mastermain')
@section('content')

<nav aria-label="خرده نان">
    <ol class="breadcrumb justify-content-right">
        <li class="breadcrumb-item"><a href="/">صفحه اصلی</a>
        <i class="fa fa-chevion-right"></i>
        </li>
        <li class="breadcrumb-item active" aria-current="page"> دسته بندی محصولات</li>
    </ol>
</nav>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row align-items-center justify-content-between pb-1 mb-4">
                    <div class="col-auto">
                        <div class="custom_select">
                            <select>
                                <option value="default">مرتب سازی پیش فرض</option>
                                <option value="popularity">مرتب سازی بر اساس محبوبیت</option>
                                <option value="date">مرتب سازی بر اساس جدید بودن</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-auto">
                        <span class="align-middle">نمایش 1-9 از 50 نتیجه</span>
                        <div class="list_grid_icon">
                            <a href="javascript:Void(0);" class="shorting_icon grid_view active"><i class="ion-grid"></i></a>
                            <a href="javascript:Void(0);" class="shorting_icon list_view"><i class="ion-navicon-round"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row shop_container grid_view">     
                    @foreach ($product_id as $product)

                        <div class="col-lg-4 col-sm-6">
                            <div class="product">
                                <span class="pr_flash bg_green">فروش</span>
                                <div class="product_img">
                                    <a href="#"><img src="/<?php  echo $product->photoes()->first()->path?>" alt="product_img1"></a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#"><i class="ti-heart"></i></a></li>
                                            <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                            <li><a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                    
                                <div  class="product_info">
                                <h6><a   href="#">{{ $product->name }}</a></h6>
                                    <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                    <span class="price">{{ $product->price }} </span>
                                    <div class="pr_desc">
                                    <p>{{ $product->description }}</p>
                                    </div>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a data-id="{{$product->id}}"  class="addcart" value="{{$product->id}}" ><i class="ti-shopping-cart"></i> افزودن به سبد خرید</a></li>
                                            <li><a data-id="{{$product->id}}" class="ratetoproduct" ><i class="ti-heart"></i></a></li>
                                            <li><a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>                
                            </div>
                        </div>
                    @endforeach

                    
                </div>
                <div class="row">
                    <div class="col-12 mt-3 mt-lg-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="ion-ios-arrow-thin-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="ion-ios-arrow-thin-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 order-lg-first mt-5 mt-lg-0">
                <div class="sidebar">
                    <div class="widget">
                        <h5 class="widget_title">دسته بندی ها</h5>

                            @foreach ($Temp['category'] as $category)
                                <ul class="list_none widget_categories border_bottom_dash">
                                    <li><a href="{{ asset('/').'category/'.$category->name.'/'.$category->id }}"><span class="categories_name"> {{$category->persian_name}} </span><span class="categories_num">{{$category->id}}</span></a></li>
                                </ul>
                            @endforeach
                        
                    </div>
                    <div class="widget">
                        <h5 class="widget_title">فیلتر</h5>
                        <div class="filter_price">
                            <div id="price_filter"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span>قیمت: <span id="flt_price"></span></span>
                                <input type="hidden" id="price_first">
                                <input type="hidden" id="price_second">
                                <button type="submit" class="btn btn-default btn-sm">فیلتر</button>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <h5 class="widget_title">موارد اخیر</h5>
                        <ul class="recent_post border_bottom_dash list_none">
                            <li>
                                <div class="post_img">
                                    <a href="#"><img src="{{asset('assets/images/shop_small1.jpg')}}" alt="shop_small1')}}"></a>
                                </div>
                                <div class="post_content">
                                    <h6><a href="#">میوه 100% ارگانیک</a></h6>
                                    <div class="rating"><div class="product_rate" style="width:100%"></div></div>
                                    <div class="product_price"><span class="price">800 تومان</span></div>
                                </div>
                            </li>
                            <li>
                                <div class="post_img">
                                    <a href="#"><img src="{{asset('assets/images/shop_small2.jpg')}}" alt="shop_small2"></a>
                                </div>
                                <div class="post_content">
                                    <h6><a href="#">میوه های تازه</a></h6>
                                    <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                    <div class="product_price"><span class="price">800 تومان</span></div>
                                </div>
                            </li>
                            <li>
                                <div class="post_img">
                                    <a href="#"><img src="{{asset('assets/images/shop_small3.jpg')}}" alt="shop_small3"></a>
                                </div>
                                <div class="post_content">
                                    <h6><a href="#">محصولات ارگانیک</a></h6>
                                    <div class="rating"><div class="product_rate" style="width:60%"></div></div>
                                    <div class="product_price"><span class="price">800 تومان</span></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget_title">برچسب ها</h5>
                        <div class="tags">
                            <a href="#">عمومی</a>
                            <a href="#">طراحی</a>
                            <a href="#">مارک</a>
                            <a href="#">برند</a>
                            <a href="#">مدرن</a>
                            <a href="#">وبلاگ</a>
                            <a href="#">نقل قول</a>
                            <a href="#">تبلیغات</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection