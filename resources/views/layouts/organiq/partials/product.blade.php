@section('product')
<section class="pb_70">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-8 col-sm-10 text-center">
              <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                  <h2>بهترین فروشها</h2>
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
                      <li class="nav-item">
                          <a class="nav-link active sortbycategory " data-id="" data-toggle="tab" href="#tab-1" role="tab"
                             aria-controls="tab-1" aria-selected="true"><span class="pr_icon1"></span>کلیه محصولات</a>
                      </li>

                      @foreach ($Temp['category'] as $category)
                        <li class="nav-item">
                            <a class="nav-link active sortbycategory" data-id="{{$category->id}}" data-toggle="tab" href="{{$category->id}}" role="tab"
                            aria-controls="tab-1" aria-selected="true"><span class="pr_icon1"></span> {{$category->persian_name}}</a>
                        </li>  
                      @endforeach
                      
                  </ul>
                  <div class="small_divider clearfix"></div>
                  <div class="tab-content">
                      <div class="tab-pane fade show active" id="" role="tabpanel" aria-labelledby="">
                          <div id="soredinfo" class="row animation"  data-animation="fadeInUp" data-animation-delay="0.05s">
                           @foreach($BestSoldProduct as $product)
                              <div class="col-xl-3 col-lg-4 col-sm-6" >
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
                                      <div class="product_info ">
                                          <h6><a href="#">{{ $product->name }} </a></h6>
                                          <div class="rating">
                                              <div class="product_rate" style="width:80%"></div>
                                          </div>
                                          <span class="price">{{ $product->price }} </span>
                                      </div>
                                                              
                                  </div>                                 
                                </div>
                            @endforeach 
                           </div>
                      </div>
                      
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
<script type="text/javascript">

    $(document).ready(function(){
        
        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });
            $(".sortbycategory").click(function(){
                var id = $(this).attr('data-id');
                alert(id);

                $.ajax({
                    url: '/sort-by-category',
                    method: 'Post',
                    dataType: 'json',
                    data: {id:id},
                    success:function(data)
                    {
                        

                            var sortinfo = "";
                            
                            for (i = 0; i < data['result'].length; i++)
                            {
                                
                                sortinfo +=" <div class="+'"product"'+">"
                                      +"<span class="+'"pr_flash bg_green"'+">فروش</span>"
                                      +"<div class="+'"product_img"'+">"
                                          +"<a href="+'"#"'+"><img src="+data['path'][i] +" alt="+'"product_img1"'+"></a>"   
                                          +"<div class="+'"product_action_box"'+">"
                                              +"<ul class="+'"list_none pr_action_btn"'+">"
                                                  +"<li><a href="+'"#"'+"><i class="+'"ti-heart"'+"></i></a></li>"
                                                  +"<li><a href="+'"#"'+"><i class="+'"ti-shopping-cart"'+"></i></a></li>"
                                                  +"<li><a class="+'"btn btn-primary"' +"data-toggle="+'"modal"' +"data-target="+'".bd-example-modal-lg"'+">"
                                                  +"<i class="+'"ti-eye"'+"></i></a></li>"
                                              +"</ul>"
                                          +"</div>"
                                      +"</div>"
                                      +"<div class="+'"product_info "'+">"
                                          +"<h6><a href="+'"#"'+">"+ data['result'][i].name +"</a></h6>"
                                            +"<div class="+'"rating"'+">"
                                              +"<div class="+'"product_rate"' +"style="+'"width:80%"'+"></div>"
                                          "</div>"
                                          +"<span class="+'"price"'+">"+ data['result'][i].price+" </span>"
                                      +"</div>"
                                      +"</div>"                       
                                  +"</div>" ;                               
                                
                            }
                            // var elem = document.getElementById('soredinfo');
                            //     elem.parentNode.removeChild(elem);
                            $("#soredinfo").html(sortinfo);
                            // alert('محصول با موفقیت به سبد خرید اضافه شد');
                        
                        
                    }
                    
            });
        });
    });
</script>

@endsection

