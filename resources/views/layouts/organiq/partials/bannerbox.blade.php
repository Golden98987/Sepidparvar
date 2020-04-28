@section('bannerbox')
<section>
  <div class="container">
      <div class="row">

          @if(is_array($MostPopularProduct)||is_object($MostPopularProduct))
            @foreach($MostPopularProduct as $p) 

            <div class="col-md-4 animation" data-animation="bounceInUp" data-animation-delay="0.2s">
              <div class="banner_box box_shadow4 radius_all_10">

              
              
                  <div class="banner_text">
                    <h3>{{ $p->name }} </h3>
                    <p>{{ $p->getShortDescription() }}</p>
                    <em><a href="#"><u>خریدکن</u></a></em>
                  </div>
                  <div class="banner_img">
                      <img src="<?=$p->photoes()->first()->path?>" alt="banner_img1"> 
                  </div> 
                                                             
              </div>
            </div>
            @endforeach 
          @endif

          
         

      </div>
  </div>
</section>
@endsection

