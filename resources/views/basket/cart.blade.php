@extends('layouts.organiq.mastermain')
@section('content')

<!-- START SECTION SHOP DETAIL -->

<section>
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">صفحه اصلی</a></li>
                    <li class="breadcrumb-item active" aria-current="page">سبد خرید</li>
                </ol>
            </nav>
            <div class="col-12">
                <div class="table-responsive shop_cart_table">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">محصول</th>
                            <th class="product-price">قیممت</th>
                            <th class="product-quantity">تعداد</th>
                            <th class="product-subtotal">جمع کل</th>
                            <th class="product-remove">حذف</th>
                        </tr>
                        </thead>
                        <tbody id="tbodycontent">
                        @foreach($Temp['basket'] as $item)
                        <tr>
                        <td class="product-thumbnail"><a href="#"><img src="/<?=$item->Product()->first()->photoes()->first()->path?>" alt="product1"></a></td>
                            <td class="product-name" data-title="Product"><a href="#">{{$item->Product()->get()->first()->name}}</a></td>
                            <td class="product-price" data-title="Price">{{$item->Product()->first()->price}} تومان</td>
                            <td class="product-quantity" data-title="Quantity"><div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="{{$item->num}}" title="Qty" class="qty" size="4">
                                <input type="button" value="+" class="plus">
                            </div></td>
                            <?php $price=$item->Product()->get()->first()->price;
                            $num=$item->num;
                            // $total=$price*$num;
                            ?>
                            
                            <td class="product-subtotal" data-title="Total"> </td>
                            <td class="product-remove" data-title="Remove"><a class="delete_basket" data-id="{{$item->Product()->first()->id}}"><i class="ti-close"></i></a></td>
                        </tr>
                        @endforeach
                        
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="6" class="px-0">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                                        <div class="coupon field_form input-group">
                                            <input type="text" value="" class="form-control" placeholder="کد تخفیف ...">
                                            <div class="input-group-append">
                                                <button class="btn btn-default btn-sm" type="submit">کد تخفیف</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 text-left text-md-right">
                                        <button class="btn btn-dark btn-sm" type="submit">ویرایش سبد</button>
                                        <a href="#" class="btn btn-default btn-sm">ادامه فرایند خرید</a>
                                    </div>
                                </div>
                            </td>
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
            <div class="col-md-6">
                <div class="heading_s2">
                    <h5>محل تولد</h5>
                </div>
                <form class="field_form shipping_calculator">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="custom_select">
                                <select>
                                    <option value="">گزینه ای را انتخاب کنید ...</option>
                                    <option value="AX">جزایر الند</option>
                                    <option value="AF">افغانستان</option>
                                    <option value="AL">آلبانی</option>
                                    <option value="DZ">الجزایر</option>
                                    <option value="AD">آندورا</option>
                                    <option value="AO">آنگولا</option>
                                    <option value="AI">آنگولا</option>
                                    <option value="AQ">قطب جنوب</option>
                                    <option value="AG">آنتیگوا و باربودا</option>
                                    <option value="AR">آرژانتین</option>
                                    <option value="AM">ارمنستان</option>
                                    <option value="AW">آروبا</option>
                                    <option value="AU">استرالیا</option>
                                    <option value="AT">اتریش</option>
                                    <option value="AZ">آذربایجان</option>
                                    <option value="BS">باهاما</option>
                                    <option value="BH">بحرین</option>
                                    <option value="BD">بنگلادش</option>
                                    <option value="BB">باربادوس</option>
                                    <option value="BY">بلاروس</option>
                                    <option value="PW">بلوا</option>
                                    <option value="BE">بلژیک</option>
                                    <option value="BZ">بلیز</option>
                                    <option value="BJ">بنین</option>
                                    <option value="BM">برمودا</option>
                                    <option value="BT">بوتان</option>
                                    <option value="BO">بولیوی</option>
                                    <option value="BQ">بونیر ، سنت یوستاتیوس و صبا</option>
                                    <option value="BA">بوسنی و هرزگوین</option>
                                    <option value="BW">بوتسوانا</option>
                                    <option value="BV">جزیره بوت</option>
                                    <option value="BR">برزیل</option>
                                    <option value="IO">قلمرو اقیانوس هند انگلیس</option>
                                    <option value="VG">جزایر ویرجین انگلیس</option>
                                    <option value="BN">برونئی</option>
                                    <option value="BG">بلغارستان</option>
                                    <option value="BF">بورکینافاسو</option>
                                    <option value="BI">بوروندی</option>
                                    <option value="KH">کامبوج</option>
                                    <option value="CM">کامرون</option>
                                    <option value="CA">کانادا</option>
                                    <option value="CV">کیپ ورد</option>
                                    <option value="KY">جزایر کیمن</option>
                                    <option value="CF">جمهوری آفریقای مرکزی</option>
                                    <option value="TD">چاد</option>
                                    <option value="CL">شیلی</option>
                                    <option value="CN">چین</option>
                                    <option value="CX">جزیره کریسمس</option>
                                    <option value="CC">جزایر کوکو (Keeling)</option>
                                    <option value="CO">کلمبیا</option>
                                    <option value="KM">کومور</option>
                                    <option value="CG">کنگو (برزاویل)</option>
                                    <option value="CD">کنگو (کینشاسا)</option>
                                    <option value="CK">جزایر کوک</option>
                                    <option value="CR">کاستاریکا</option>
                                    <option value="HR">کرواسی</option>
                                    <option value="CU">کوبا</option>
                                    <option value="CW">کوروشائو</option>
                                    <option value="CY">قبرس</option>
                                    <option value="CZ">جمهوری چک</option>
                                    <option value="DK">دانمارک</option>
                                    <option value="DJ">جیبوتی</option>
                                    <option value="DM">دومینیکا</option>
                                    <option value="DO">جمهوری دومینیکن</option>
                                    <option value="EC">اکوادور</option>
                                    <option value="EG">مصر</option>
                                    <option value="SV">السالوادور</option>
                                    <option value="GQ">گینه استوایی</option>
                                    <option value="ER">اریتره</option>
                                    <option value="EE">استونی</option>
                                    <option value="ET">اتیوپی</option>
                                    <option value="FK">جزایر فالکلند</option>
                                    <option value="FO">جزایر فارو</option>
                                    <option value="FJ">فیجی</option>
                                    <option value="FI">فنلاند</option>
                                    <option value="FR">فرانسه</option>
                                    <option value="GF">گویان فرانسه</option>
                                    <option value="PF">پلی&zwnj;نزی فرانسه</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="CI">Ivory Coast</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Laos</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao S.A.R., China</option>
                                    <option value="MK">Macedonia</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia</option>
                                    <option value="MD">Moldova</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="KP">North Korea</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PS">Palestinian Territory</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="QA">Qatar</option>
                                    <option value="IE">Republic of Ireland</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">رومانی</option>
                                    <option value="RU">روسیه</option>
                                    <option value="RW">رواندا</option>
                                    <option value="ST">سائو Tomé و Príncipe</option>
                                    <option value="BL">سنت بارتلی</option>
                                    <option value="SH">سنت هلنا</option>
                                    <option value="KN">سنت کیتس و نوویس</option>
                                    <option value="LC">سنت لوسیا</option>
                                    <option value="SX">سنت مارتین (قسمت هلندی)</option>
                                    <option value="MF">سنت مارتین (قسمت فرانسوی)</option>
                                    <option value="PM">سنت پیر و میکلون</option>
                                    <option value="VC">سنت وینسنت و گرنادینها</option>
                                    <option value="SM">سان مارینو</option>
                                    <option value="SA">عربستان سعودی</option>
                                    <option value="SN">سنگال</option>
                                    <option value="RS">صربستان</option>
                                    <option value="SC">سیشل</option>
                                    <option value="SL">سیرا لئون</option>
                                    <option value="SG">سنگاپور</option>
                                    <option value="SK">اسلواکی</option>
                                    <option value="SI">اسلوونی</option>
                                    <option value="SB">جزایر سلیمان</option>
                                    <option value="SO">سومالی</option>
                                    <option value="ZA">آفریقای جنوبی</option>
                                    <option value="GS">جزایر جورجیا جنوبی / جزایر ساندویچ</option>
                                    <option value="KR">کره جنوبی</option>
                                    <option value="SS">سودان جنوبی</option>
                                    <option value="ES">اسپانیا</option>
                                    <option value="LK">سری لانکا</option>
                                    <option value="SD">سودان</option>
                                    <option value="SR">سورینام</option>
                                    <option value="SJ">سوالبارد و جان مین</option>
                                    <option value="SZ">سوازیلند</option>
                                    <option value="SE">سوئد</option>
                                    <option value="CH">سوئیس</option>
                                    <option value="SY">سوریه</option>
                                    <option value="TW">تایوان</option>
                                    <option value="TJ">تاجیکستان</option>
                                    <option value="TZ">تانزانیا</option>
                                    <option value="TH">تایلند</option>
                                    <option value="TL">تیمور-لست</option>
                                    <option value="TG">رفتن</option>
                                    <option value="TK">توکلو</option>
                                    <option value="TO">تونگا</option>
                                    <option value="TT">ترینیداد و توباگو</option>
                                    <option value="TN">تونس</option>
                                    <option value="TR">بوقلمون</option>
                                    <option value="TM">ترکمنستان</option>
                                    <option value="TC">جزایر تورکس و کایکوس</option>
                                    <option value="TV">تووالو</option>
                                    <option value="UG">اوگاندا</option>
                                    <option value="UA">اوکراین</option>
                                    <option value="AE">امارات متحده عربی</option>
                                    <option value="GB">انگلستان (انگلستان)</option>
                                    <option value="US">ایالات متحده (ایالات متحده)</option>
                                    <option value="UY">اروگوئه</option>
                                    <option value="UZ">ازبکستان</option>
                                    <option value="VU">واناتو</option>
                                    <option value="VA">واتیکان</option>
                                    <option value="VE">ونزوئلا</option>
                                    <option value="VN">ویتنام</option>
                                    <option value="WF">والیس و فوتونا</option>
                                    <option value="EH">صحرای غربی</option>
                                    <option value="WS">ساموآ غربی</option>
                                    <option value="YE">یمن</option>
                                    <option value="ZM">زامبیا</option>
                                    <option value="ZW">زیمبابوه</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input required="required" placeholder="کشور / شهر" class="form-control" name="name" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input required="required" placeholder="کد پستی" class="form-control" name="name" type="text">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <button class="btn btn-outline-black" type="submit">ویرایش</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="heading_s2">
                    <h5>فاکتور خرید</h5>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <tbody><tr>
                            <td class="cart_total_label">کل سبد خرید</td>
                            <td class="cart_total_amount">1500 تومان</td>
                        </tr>
                        <tr>
                            <td class="cart_total_label">حمل و نقل </td>
                            <td class="cart_total_amount">رایگان</td>
                        </tr>
                        <tr>
                            <td class="cart_total_label">جمع کل</td>
                            <td class="cart_total_amount"><strong>25000 تومان</strong></td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION SHOP DETAIL -->
<!-- <script type="text/javascript">

    $(document).ready(function(){
        
        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });
            $(".delete").click(function(){
                var id = $(this).attr('data-id');
                alert(id);

                $.ajax({
                    url: '/cart/delete-from-basket',
                    method: 'POST',
                    dataType: 'json',
                    data: {id:id},
                    success:function(data)
                    {
                        // alert('محصول با موفقیت از سبد خرید حذف شد');
                        console.log(data);
                        var basketStr = "";
                        var baskettable="";
                            for (i = 0; i < data['basket'].length; i++)
                            {
                                basketStr +="<li>"+"<a href="+"'#'"+" class="+'"item_remove"'+"><i class="+'"ion-close"'+"></i></a>";
                                basketStr +="<a href="+'"#"'+"><img src="+'"'+"/"+ data['path'][i] +'"'+" class="+'"item-img"' +" alt="+'"cart_thumb1"'+">"+data['basket'][i]['product'].name+"</a>";
                                basketStr +="<p><span"+" class="+'"float-right"'+" class="+'"item-num"'+">"+data['basket'][i].num+"x </span>";
                                basketStr +="<span class="+'"float-right"'+">"+data['basket'][i]['product'].price +"</span></p> </li>";
                                
                                baskettable+="  <tr>"+
                        "<td class="+'"product-thumbnail"'+"><a href="+'"#"'+"><img src="+'"'+"/"+ data['path'][i] +'"'+" alt="+'"product1"'+"></a></td>"
                            +"<td class="+'"product-name"'+" data-title="+'"Product"'+"><a href="+'"#"'+">"+data['basket'][i]['product'].name+"</a></td>"
                            +"<td class="+'"product-price"'+" data-title="+'"Price"'+">"+data['basket'][i]['product'].price+" تومان</td>"
                            +"<td class="+'"product-quantity"'+" data-title="+'"Quantity"'+"><div class="+'"quantity"'+">"
                                +"<input type="+'"button"'+" value="+'"-"'+" class="+'"minus"'+">"
                                +"<input type="+'"text"'+" name="+'"quantity"'+" value="+data['basket'][i].num+" title="+'"Qty"'+" class="+'"qty"'+" size="+'"4"'+">"
                                +"<input type="+'"button"'+" value="+'"+"'+" class="+'"plus"'+">"
                            +"</div></td>"
                            
                            
                            +"<td class="+'"product-subtotal"'+" data-title="+'"Total"'+"> </td>"
                            +"<td class="+'"product-remove"'+" data-title="+'"Remove"'+"><a class="+'"delete"'+" data-id="+'"'+ data['basket'][i]['product'].id+'"'+"><i class="+'"ti-close"'+"></i></a></td>"
                        +"</tr>";

                            }
                            $("#cart_list").html(basketStr);
                            $("#tbodycontent").html(baskettable);

                            tbodycontent
                    }
                    
            });
        });
    });
</script> -->
@include('layouts.organiq.partials.newslatter')

@endsection