@extends('layouts.organiq.mastermain')
@section('content')

<!-- START SECTION SHOP DETAIL -->
<section>
    <div class="container">
        <div class="row">              
            <div class="col-md-12">
            <div class="heading_s2">
                    <h5>آدرس گیرنده</h5>
                </div>
               @if(count($Addresses)>0)
                <table class="table">
                <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">استان</th>
                            <th class="product-price">شهر</th>
                            <th class="product-quantity">آدرس پستی</th>
                            <th class="product-subtotal">کد پستی</th>
                            <th class="product-remove">شماره تلفن</th>
                            <th class="product-price">شماره موبایل</th>
                            <th class="product-quantity">تحویل‌گیرنده</th>
                            <th class="product-subtotal">انتخاب این آدرس</th>
                            
                    
                    <tbody >
                        @foreach($Addresses as $address)
                        <tr>
                           <td></td><td>{{$address->state}}</td><td>{{$address->city}}</td><td>{{$address->postaddress}}</td><td>{{$address->postal_code}}</td><td>{{$address->telephone}}</td><td>{{$address->mobile}}</td><td>{{$address->transferee_name}}</td><td> <a href="#" id="{{$address->id}}"  class="btn btn-default btn-sm" >انتخاب</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-md-12 toggle_info">
                    <span>برای وارد کردن آدرس جدید  <a href="#loginform" data-toggle="collapse" class="collapsed" aria-expanded="false">اینجا کلیک کنید.</a></span>
                </div>
                <div class="panel-collapse collapse mb-3" id="loginform">
                    <div class="panel-body">

                        <form id="AddressForm"  class="field_form shipping_calculator" method="POST">
                                {{csrf_field()}}
                                {{method_field('post')}}
                            <div class="form-row">
                                <div class="form-group custom_select col-md-6">
                                <select  name="state" id="SelectState" >
                                        <option value="0">لطفا استان را انتخاب نمایید</option>
                                        <option value="1">تهران</option>
                                        <option value="2">گیلان</option>
                                        <option value="3">آذربایجان شرقی</option>
                                        <option value="4">خوزستان</option>
                                        <option value="5">فارس</option>
                                        <option value="6">اصفهان</option>
                                        <option value="7">خراسان رضوی</option>
                                        <option value="8">قزوین</option>
                                        <option value="9">سمنان</option>
                                        <option value="10">قم</option>
                                        <option value="11">مرکزی</option>
                                        <option value="12">زنجان</option>
                                        <option value="13">مازندران</option>
                                        <option value="14">گلستان</option>
                                        <option value="15">اردبیل</option>
                                        <option value="16">آذربایجان غربی</option>
                                        <option value="17">همدان</option>
                                        <option value="18">کردستان</option>
                                        <option value="19">کرمانشاه</option>
                                        <option value="20">لرستان</option>
                                        <option value="21">بوشهر</option>
                                        <option value="22">کرمان</option>
                                        <option value="23">هرمزگان</option>
                                        <option value="24">چهارمحال و بختیاری</option>
                                        <option value="25">یزد</option>
                                        <option value="26">سیستان و بلوچستان</option>
                                        <option value="27">ایلام</option>
                                        <option value="28">کهگلویه و بویراحمد</option>
                                        <option value="29">خراسان شمالی</option>
                                        <option value="30">خراسان جنوبی</option>
                                        <option value="31">البرز</option>
                                    </select>
                                </div>
                                <div class="form-group custom_select col-md-6">
                                <select name="city" id="city">
                                        <option value="0">لطفا استان را انتخاب نمایید</option>
                                    </select>                        </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input id="postaddress" required="required" placeholder="آدرس پستی" class="form-control" name="postaddress" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="postal_code" required="required" placeholder="کد پستی" class="form-control" name="postal_code" type="text">
                                </div>
                                
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-4">
                                    <input id="transferee_name" required="required" placeholder="تحویل‌گیرنده" class="form-control" name="transferee_name" type="text">
                                </div>
                                <div class="form-group col-md-4">
                                    <input id="telephone" required="required" placeholder="شماره تماس" class="form-control" name="telephone" type="text">
                                </div>
                                <div class="form-group col-md-4">
                                    <input id="mobile" required="required" placeholder="شماره همراه" class="form-control" name="mobile" type="text">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input id="factor_id" hidden name="factor_id" value="{{$factor_id}}">
                                    <button id="AddressSubmit" class="btn btn-dark btn-sm" type="submit">ثبت آدرس </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script>

            </script>
           
        </div>
        @else
       
        <div class="row">
            <div class="col-md-12">
                <div class="heading_s2">
                    <h5>آدرس ارسال </h5>
                </div>

                <form id="AddressForm" method="POST" class="field_form shipping_calculator">
                    {{csrf_field()}}
                    {{method_field('post')}}
                 
                 <div class="form-row">
                     <div class="form-group custom_select col-md-6">
                     <select  name="state" id="SelectState" >
                             <option value="0">لطفا استان را انتخاب نمایید</option>
                             <option value="1">تهران</option>
                             <option value="2">گیلان</option>
                             <option value="3">آذربایجان شرقی</option>
                             <option value="4">خوزستان</option>
                             <option value="5">فارس</option>
                             <option value="6">اصفهان</option>
                             <option value="7">خراسان رضوی</option>
                             <option value="8">قزوین</option>
                             <option value="9">سمنان</option>
                             <option value="10">قم</option>
                             <option value="11">مرکزی</option>
                             <option value="12">زنجان</option>
                             <option value="13">مازندران</option>
                             <option value="14">گلستان</option>
                             <option value="15">اردبیل</option>
                             <option value="16">آذربایجان غربی</option>
                             <option value="17">همدان</option>
                             <option value="18">کردستان</option>
                             <option value="19">کرمانشاه</option>
                             <option value="20">لرستان</option>
                             <option value="21">بوشهر</option>
                             <option value="22">کرمان</option>
                             <option value="23">هرمزگان</option>
                             <option value="24">چهارمحال و بختیاری</option>
                             <option value="25">یزد</option>
                             <option value="26">سیستان و بلوچستان</option>
                             <option value="27">ایلام</option>
                             <option value="28">کهگلویه و بویراحمد</option>
                             <option value="29">خراسان شمالی</option>
                             <option value="30">خراسان جنوبی</option>
                             <option value="31">البرز</option>
                         </select>
                     </div>
                     <div class="form-group custom_select col-md-6">
                     <select name="city" id="city">
                             <option value="0">لطفا استان را انتخاب نمایید</option>
                         </select>                        </div>
                 </div>
                 <div class="form-row">
                     <div class="form-group col-md-6">
                         <input id="postaddress" required="required" placeholder="آدرس پستی" class="form-control" name="postaddress" type="text">
                     </div>
                     <div class="form-group col-md-6">
                         <input id="postal_code" required="required" placeholder="کد پستی" class="form-control" name="postal_code" type="text">
                     </div>
                     
                 </div>
                 <div class="form-row">
                 <div class="form-group col-md-4">
                         <input id="transferee_name" required="required" placeholder="تحویل‌گیرنده" class="form-control" name="transferee_name" type="text">
                     </div>
                     <div class="form-group col-md-4">
                         <input id="telephone" required="required" placeholder="شماره تماس" class="form-control" name="telephone" type="text">
                     </div>
                     <div class="form-group col-md-4">
                         <input id="mobile" required="required" placeholder="شماره همراه" class="form-control" name="mobile" type="text">
                     </div>
                 </div>
                 
                 <div class="form-row">
                     <div class="form-group col-md-12">
                         <input id="factor_id" hidden name="factor_id" value="{{$factor_id}}">
                         <button id="AddressSubmit" class="btn btn-dark btn-sm" type="submit">ثبت آدرس </button>
                     </div>
                 </div>
             </form>

            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="small_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="heading_s2">
                    <h5>سفارشات شما</h5>
                </div>
                <div class="table-responsive order_table">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>محصول</th>
                            <th>جمع</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $total=0;?>
                            @foreach($factor_items as $item)
                        <tr>
                            <td> {{$item->Product()->get()->first()->name}} <span class="product-qty"> {{$item->num}}x  {{$item->Product()->get()->first()->price}} </span>  </td>
                            <td>{{$item->num* $item->Product()->get()->first()->price}} تومان</td>
                        </tr>
                        <?php $total+=$item->num* $item->Product()->get()->first()->price; ?>
                            @endforeach
                        </tbody>
                        <tfoot>

                        <tr>
                            <th>جمع</th>
                            <td class="product-subtotal">{{$total}} تومان</td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="small_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="payment_method">
                    <!-- <div class="custome-radio">
                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" value="option3" checked="">
                        <label class="form-check-label" for="exampleRadios3">انتقال مستقیم بانکی</label>
                        <p data-method="option3" class="payment-text">بسیاری از متن های قسمت های Lorem Ipsum وجود دارد ، اما اکثر آنها به طریقی دچار تغییراتی شده اند ، با طنز تزریق شده یا کلمات تصادفی که حتی چندان باورپذیر به نظر نمی رسند. </p>
                    </div> -->
                    <div class="custome-radio" >
                        <input hidden id="factor_id" value="{{$factor_id}}">
                        <input  checked class="form-check-input" type="radio" name="payment_option" id="exampleRadios4" value="option4">
                        <label  class="form-check-label" for="exampleRadios4">زرین پال</label>
                        <p data-method="option4" class="payment-text"></p>
                    </div>
                    <!-- <div class="custome-radio">
                        <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5" value="option5">
                        <label class="form-check-label" for="exampleRadios5">پی پال</label>
                        <p data-method="option5" class="payment-text">پرداخت از طریق پی پال؛ اگر حساب PayPal ندارید می توانید با کارت اعتباری خود پرداخت کنید.</p>
                    </div> -->
                </div>
                <a id="factorpay" class="btn btn-default"> پرداخت </a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION SHOP DETAIL -->
<script>
$(document).on("click","#factorpay",function(){

        var id="<?php echo $factor_id; ?>";
        // alert(id);
        $.ajax({
        url: '/payment/buy',
        method: 'POST',
        dataType: 'json',
        data: {
            id:id,
        },
        success:function(data)
        {
            console.log(data);
                      
        },

        
    });
});
</script>
@include('layouts.organiq.partials.newslatter')

@endsection