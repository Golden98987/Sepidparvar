
@extends('layouts.organiq.mastermain')
@section('content')



<!-- START SECTION BLOG -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="single_post">
                    <div class="blog_img">
                        <div class="carousel_slide1 owl-carousel owl-theme" data-autoplay="true" data-autoheight="true" data-loop="true" data-nav="true" data-dots="false" data-autoplay-timeout="3000">
                            @foreach($post->photoes()->get() as $photo)
                            <a href="#">
                                <img src="/<?=$photo->path; ?>" alt="blog_img4">
                            </a>
                            @endforeach
                  
                        </div>
                    </div>
                    <div class="single_post_content">
                        <div class="blog_text">
                            <h2 class="blog_title">{{$post->title}}</h2>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="far fa-user"></i>توسط <span class="text_default">مدیر</span></a></li>
                                <li><a href="#"><i class="far fa-comments"></i>{{count($post->Comments()->get())}} نظر</a></li>
                            </ul>
                            @if($post->content_one)
                            <p>{{$post->content_one}}</p>
                            @endif
                            @if($post->content_blockqotoe)
                            <blockquote>
                                <p>{{$post->content_blockqotoe}}</p>
                            </blockquote>
                            @endif
                            @if($post->content_two)
                            <p>{{$post->content_two}}</p>
                            @endif
                            <div class="border-top border-bottom blog_post_footer">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-md-8 mb-3 mb-md-0">
                                    <div class="tags">
                                        @foreach($post->tags()->get() as $tag)
                                        <a href="/tag/{{$tag->id}}/posts">{{$tag->name}} </a>
                                        @endforeach
                                    </div>
                                    </div>
                                    <div class="col-md-4 text-md-right">
                                        <div class="share">
                                            <ul class="list_none social_icons">
                                                <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                                <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                                <li><a href="#" class="sc_gplus"><i class="ion-social-googleplus"></i></a></li>
                                                <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                                                <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post_navigation">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <i class="ion-ios-arrow-thin-left mr-2"></i>
                                        <div>
                                            <span>پست قبلی</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="#">
                                    <div class="d-flex align-items-center flex-row-reverse text-right">
                                        <i class="ion-ios-arrow-thin-right ml-2"></i>
                                        <div>
                                            <span>پست بعدی</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="author_block">
                        <div class="author_img">
                            <img src="assets/images/user1.jpg" alt="کاربر 1">
                        </div>
                        <div class="author_meta">
                            <div class="author_intro">
                                <a href="#">مبارک والتر</a>
                            </div>
                            <div class="author_desc">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                            </div>
                        </div>
                    </div>
                    <div class="related_post">
                        <div class="posts-title">
                            <h5>پست های مرتبط</h5>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="carousel_slide3 owl-carousel owl-theme" data-dots="false" data-margin="30">
                                    <div class="item">
                                        <div class="blog_post">
                                            <div class="blog_img">
                                                <a href="#">
                                                    <img src="assets/images/blog_small_img2.jpg" alt="blog_small_img2">
                                                </a>
                                            </div>
                                            <div class="blog_content">
                                                <h6 class="blog_title"><a href="#">توده های مختلف به نشستن ویتنام</a></h6>
                                                <ul class="list_none blog_meta">
                                                    <li><a href="#"><i class="far fa-calendar"></i>15 فوریه 25 تیر 1398</a></li>
                                                    <li><a href="#"><i class="far fa-comments"></i>3</a></li>
                                                </ul>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                                <a href="#" class="blog_link"><i class="ion-ios-arrow-right"></i> بیشتر بخوانید  </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="blog_post">
                                            <div class="blog_img">
                                                <a href="#">
                                                    <img src="assets/images/blog_small_img3.jpg" alt="blog_small_img3">
                                                </a>
                                            </div>
                                            <div class="blog_content">
                                                <h6 class="blog_title"><a href="#">توده های مختلف به نشستن ویتنام</a></h6>
                                                <ul class="list_none blog_meta">
                                                    <li><a href="#"><i class="far fa-calendar"></i>25 تیر 1398</a></li>
                                                    <li><a href="#"><i class="far fa-comments"></i>3</a></li>
                                                </ul>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                                <a href="#" class="blog_link"><i class="ion-ios-arrow-right"></i> بیشتر بخوانید  </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="blog_post">
                                            <div class="blog_img">
                                                <a href="#">
                                                    <img src="assets/images/blog_small_img4.jpg" alt="blog_small_img4">
                                                </a>
                                            </div>
                                            <div class="blog_content">
                                                <h6 class="blog_title"><a href="#">توده های مختلف به نشستن ویتنام</a></h6>
                                                <ul class="list_none blog_meta">
                                                    <li><a href="#"><i class="far fa-calendar"></i>25 تیر 1398</a></li>
                                                    <li><a href="#"><i class="far fa-comments"></i>3</a></li>
                                                </ul>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                                <a href="#" class="blog_link"><i class="ion-ios-arrow-right"></i> بیشتر بخوانید  </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-area">
                        <div class="posts-title">
                            <h5>(03) نظرات</h5>
                        </div>
                        <ul class="list_none comment_list">
                            <li class="comment_info">
                                <div class="d-flex">
                                    <div class="user_img">
                                        <img class="radius_all_5" src="assets/images/client_img1.jpg" alt="client_img1">
                                    </div>

                                    <div class="comment_content">
                                        <div class="d-flex">
                                            <div class="meta_data">
                                                <h6><a href="#">مبارک والتر</a></h6>
                                                <div class="comment-time">5 تیر 1398 ، 6:05 ظهر</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="comment-reply btn btn-default rounded-0 btn-sm">پاسخ</a>
                                            </div>
                                        </div>
                                        <p>ما با خشم و عذاب صالحانه و بیزاری مردانی را که در اثر جذابیت های لحظه لحظه ای مورد آزار و تحقیر قرار می گیرند ، محکوم می کنیم ، آنقدر کور از آرزو هستیم که نمی تواند درد و درد و رنجی را پیش بینی کند.</p>
                                    </div>
                                </div>
                                <ul class="children_comment">
                                    <li class="comment_info">
                                        <div class="d-flex">
                                            <div class="user_img">
                                                <img class="radius_all_5" src="assets/images/client_img3.jpg" alt="client_img3">
                                            </div>
                                            <div class="comment_content">
                                                <div class="d-flex">
                                                    <div class="meta_data">
                                                        <h6><a href="#">کالوین ویلیام</a></h6>
                                                        <div class="comment-time">5 تیر 1398 ، 6:05 ظهر</div>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <a href="#" class="comment-reply btn btn-default rounded-0 btn-sm">پاسخ</a>
                                                    </div>
                                                </div>
                                                <p>ما با خشم و عذاب صالحانه و بیزاری مردانی را که در اثر جذابیت های لحظه لحظه ای مورد آزار و تحقیر قرار می گیرند ، محکوم می کنیم ، آنقدر کور از آرزو هستیم که نمی تواند درد و درد و رنجی را پیش بینی کند.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="comment_info">
                                <div class="d-flex">
                                    <div class="user_img">
                                        <img class="radius_all_5" src="assets/images/client_img2.jpg" alt="client_img2">
                                    </div>
                                    <div class="comment_content">
                                        <div class="d-flex">
                                            <div class="meta_data">
                                                <h6><a href="#">جان مارک</a></h6>
                                                <div class="comment-time">5 تیر 1398 ، 6:05 ظهر</div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="#" class="comment-reply btn btn-default rounded-0 btn-sm">پاسخ</a>
                                            </div>
                                        </div>
                                        <p>ما با خشم و عذاب صالحانه و بیزاری مردانی را که در اثر جذابیت های لحظه لحظه ای مورد آزار و تحقیر قرار می گیرند ، محکوم می کنیم ، آنقدر کور از آرزو هستیم که نمی تواند درد و درد و رنجی را پیش بینی کند.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="posts-title">
                            <h5>نظر خود را بنویسید</h5>
                        </div>
                        <form class="field_form form_style2" name="enq" method="post">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <input name="name" class="form-control" placeholder="نام کاربری" required="required" type="text">
                                </div>
                                <div class="form-group col-md-4">
                                    <input name="email" class="form-control" placeholder="ایمیل" required="required" type="email">
                                </div>
                                <div class="form-group col-md-4">
                                    <input name="website" class="form-control" placeholder="وبسایت" required="required" type="text">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea rows="3" name="message" class="form-control" placeholder="متن پیام" required="required"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button value="Submit" name="submit" class="btn btn-default" title="پیام خود را ارسال کنید" type="submit">ارسال</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-5 mt-lg-0">
                <div class="sidebar">
                    <div class="widget">
                        <div class="search_widget">
                            <form>
                                <input required="" placeholder="جستجو..." type="text">
                                <button type="submit" class="btn-submit" name="submit" value="Submit">
                                    <span class="ti-search"></span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="widget">
                        <h5 class="widget_title">درمورد من</h5>
                        <div class="about_widget">
                            <a href="#"><img src="assets/images/about_author.jpg" alt="About_author"></a>
                            <h5 class="about_author">کالوین ویلیام</h5>
                            <span class="author_email">info@yourmail.com</span>
                            <p> در تحقیقات هویج توسعه مقطع کارشناسی است. در حال حاضر شناسه اندوه ELIT dapibus تعداد بارداری DUI.</p>
                        </div>
                    </div>
                    <div class="widget">
                        <h5 class="widget_title">دسته بندی ها</h5>
                        @if($Temp['category'])
                            @foreach ($Temp['category'] as $category)
                            <?php $i=0;?>
                            @foreach($Temp['Product'] as $product)
                                @if(($product->category_id)==($category->id))
                                    <?php $i++;?>
                                @endif
                            @endforeach
                                <ul class="list_none widget_categories border_bottom_dash">
                                    <li><a href="{{ asset('/').'category/'.$category->name.'/'.$category->id }}"><span class="categories_name"> {{$category->persian_name}} </span><span class="categories_num">({{$i}})</span></a></li>
                                </ul>
                            @endforeach
                            @endif
                    </div>
                    <div class="widget">
                        <h5 class="widget_title">پستهای اخیر</h5>
                        <ul class="recent_post border_bottom_dash list_none">
                        @foreach($recentposts as $post)    
                        <li>
                                <div class="post_content">
                                    <div class="post_img">
                                        <a href="{{ asset('/').'weblog/'.$post->title.'/'.$post->id }}"><img src="/<?=$post->photoes()->first()->path; ?>" alt="letest_post1"></a>
                                    </div>
                                    <div class="post_info">
                                        <h6><a href="#">{{$post->getShortContent(40)}}</a></h6>
                                        <p class="small m-0">{{$post->created_at}}</p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        @endforeach
                    </div>
                    <div class="widget">
                        <h5 class="widget_title">برچسب ها</h5>
                        <div class="tags">
                            @foreach($post->tags()->get() as $tag)
                            <a href="#">{{$tag->name}} </a>
                            @endforeach
                        </div>
                    </div>
                    <!-- <div class="widget">
                        <h5 class="widget_title">غذاهای اینستگرام</h5>
                        <ul class="list_none instafeed">
                            <li><a href="#"><img src="assets/images/insta_img1.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img2.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img3.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img4.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img5.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img6.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img7.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img8.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget_title">بیا دنبالم</h5>
                        <ul class="list_none social_icons radius_social">
                            <li><a href="#" class="sc_facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="sc_twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="sc_google"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#" class="sc_instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" class="sc_pinterest"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->


@endsection