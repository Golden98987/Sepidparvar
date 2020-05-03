
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
            $(document).on("click",".addcart",function(){
                var id = $(this).attr('data-id');
                    alert(id);
                   $.ajax({
                    url: '/add-to-cart',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        id:id
                       
                    },
                    success:function(data)
                    {
                       
                        if(data.url)
                        {
                            window.location=data.url;
                        }
                        else
                        {
                            var basketStr = "";
                            var baskettable="";
                            var basketstrfooter="";
                            var $total=0;
                            for (i = 0; i < data['basket'].length; i++)
                            {
                                
                                basketStr+=
                                "<li>"
                                +"<a  data-id="+data['basket'][i]['product'].id+" class="+'"delete_basket item_remove "'+"><i class="+'"ion-close"'+"></i></a>"
                                +"<a href="+'"#"'+"><img class="+'"item-img"'+" src="+'"/'+ data['path'][i]+'"'+ "alt="+'"cart_thumb1"'+">"+data['basket'][i]['product'].name+ "</a>"
                                +"<p><span class="+'"float-right"'+" class="+'"item-num"'+">"+data['basket'][i].num +"x </span> <span class="+'"float-right"'+">"+data['basket'][i]['product'].price+" </span></p>"
                            +"</li>";
                                baskettable+="  <tr>"+
                                "<td class="+'"product-thumbnail"'+"><a ><img src="+'"'+"/"+ data['path'][i] +'"'+" alt="+'"product1"'+"></a></td>"
                                    +"<td class="+'"product-name"'+" data-title="+'"Product"'+"><a href="+'"#"'+">"+data['basket'][i]['product'].name+"</a></td>"
                                    +"<td class="+'"product-price"'+" data-title="+'"Price"'+">"+data['basket'][i]['product'].price+" تومان</td>"
                                    +"<td class="+'"product-quantity"'+" data-title="+'"Quantity"'+"><div class="+'"quantity"'+">"
                                        +"<input type="+'"button"'+" value="+'"-"'+" class="+'"minus"'+">"
                                        +"<input type="+'"text"'+" name="+'"quantity"'+" value="+data['basket'][i].num+" title="+'"Qty"'+" class="+'"qty"'+" size="+'"4"'+">"
                                        +"<input type="+'"button"'+" value="+'"+"'+" class="+'"plus"'+">"
                                    +"</div></td>"
                                    
                                    
                                    +"<td class="+'"product-subtotal"'+" data-title="+'"Total"'+"> </td>"
                                    +"<td class="+'"product-remove"'+" data-title="+'"Remove"'+"><a class="+'"delete_basket"'+" data-id="+'"'+ data['basket'][i]['product'].id+'"'+"><i class="+'"ti-close"'+"></i></a></td>"
                                +"</tr>";

                                $total+= data['basket'][i].num * data['basket'][i]['product'].price;

                            }
                            basketstrfooter+="<p class="+'"cart_total"'+">جمع کل : <span class="+'"cart_amount"'+"> <span class="+'"price_symbole"'+">"+$total +"تومان</span></span>"
                                +"</p>"
                                +"<p class="+'"cart_buttons"'+"><a href="+'"/cart"' +"class="+'"btn btn-default btn-radius view-cart"'+">مشاهده سبد خرید</a>"
                                    +"<a href="+'"/checkout"'+" class="+'"btn btn-dark btn-radius checkout"'+">پرداخت</a>"
                               +" </p>";
                            $("#cart_list").html(basketStr);
                            $("#tbodycontent").html(baskettable);
                            $("#cart_footer").html(basketstrfooter);
                            alert('محصول با موفقیت به سبد خرید اضافه شد');
                        }
                        
                    },

                   
            });
        });



            $(document).on("click",".delete_basket",function(){
                var id = $(this).attr('data-id');
                
                alert(id);
                $.ajax({
                    url: '/cart/delete-from-basket',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        id:id,
                       
                    },
                    success:function(data)
                    {
                        
                        console.log(data);
                        var basketStr = "";
                        var baskettable="";
                        var basketstrfooter="";
                        var $total=0;
                            for (i = 0; i < data['basket'].length; i++)
                            {

                                basketStr +="<li>"+"<a data-id="+data['basket'][i]['product'].id+" class="+'"delete_basket item_remove "'+"><i class="+'"ion-close "'+"></i></a>";
                                basketStr +="<a href="+'"#"'+"><img src="+'"'+"/"+ data['path'][i] +'"'+" class="+'"item-img"' +" alt="+'"cart_thumb1"'+">"+data['basket'][i]['product'].name+"</a>";
                                basketStr +="<p><span"+" class="+'"float-right"'+" class="+'"item-num"'+">"+data['basket'][i].num+"x </span>";
                                basketStr +="<span class="+'"float-right"'+">"+data['basket'][i]['product'].price +"</span></p> </li>";
                                
                                baskettable+="  <tr>"+
                                                "<td class="+'"product-thumbnail"'+"><a "+"><img src="+'"'+"/"+ data['path'][i] +'"'+" alt="+'"product1"'+"></a></td>"
                                                    +"<td class="+'"product-name"'+" data-title="+'"Product"'+"><a href="+'"#"'+">"+data['basket'][i]['product'].name+"</a></td>"
                                                    +"<td class="+'"product-price"'+" data-title="+'"Price"'+">"+data['basket'][i]['product'].price+" تومان</td>"
                                                    +"<td class="+'"product-quantity"'+" data-title="+'"Quantity"'+"><div class="+'"quantity"'+">"
                                                        +"<input type="+'"button"'+" value="+'"-"'+" class="+'"minus"'+">"
                                                        +"<input type="+'"text"'+" name="+'"quantity"'+" value="+data['basket'][i].num+" title="+'"Qty"'+" class="+'"qty"'+" size="+'"4"'+">"
                                                        +"<input type="+'"button"'+" value="+'"+"'+" class="+'"plus"'+">"
                                                    +"</div></td>"                                               
                                                    +"<td class="+'"product-subtotal"'+" data-title="+'"Total"'+"> </td>"
                                                    +"<td class="+'"product-remove"'+" data-title="+'"Remove"'+"><a class="+'"delete_basket"'+" data-id="+'"'+ data['basket'][i]['product'].id+'"'+"><i class="+'"ti-close"'+"></i></a></td>"
                                                +"</tr>";

                                                $total+= data['basket'][i].num * data['basket'][i]['product'].price;
                            }
                            basketstrfooter+="<p class="+'"cart_total"'+">جمع کل : <span class="+'"cart_amount"'+"> <span class="+'"price_symbole"'+">"+$total +"تومان</span></span>"
                                +"</p>"
                                +"<p class="+'"cart_buttons"'+"><a href="+'"/cart"'+ +"class="+ '"btn btn-default btn-radius view-cart"'+">مشاهده سبد خرید</a>"
                                    +"<a href="+"'checkout'"+" class="+'"btn btn-dark btn-radius checkout"'+">پرداخت</a>"
                               +" </p>";
                            $("#cart_list").html(basketStr);
                            $("#tbodycontent").html(baskettable);
                            $("#cart_footer").html(basketstrfooter);
                            alert('محصول با موفقیت از سبد خرید حذف شد');

                    }
                    
            });
        });


        $(".ratetoproduct").on("click",function(){
            var id = $(this).attr('data-id');
            // alert(id);

            $.ajax({
                url: '/category/rate-to-product',
                method: 'POST',
                dataType: 'json',
                data: {
                    id:id,
                    _token: "{{ csrf_token() }}",
                    },
                success:function(data)
                {
                    alert('امتیاز شما با موفقیت ثبت شد.');
                },
                error: function (XMLHttpRequest,textStatus, errorthrown){
                    // console.log('AJAX error:' + errorthrown);
                }
        });
    });


    ///the first page sortin best sold products based on category
    $(document).on("click",".sortbycategory",function(){
        var id = $(this).attr('data-id');
            $.ajax({
            url: '/sort-by-category',
            method: 'Post',
            dataType: 'json',
            data: {id:id},
            success:function(data)
            {
                console.log(data['result'].length);
                    
                    var str="";
                    for (i = 0; i < data['result'].length; i++)
                    {
                        str+="<div class="+'"col-xl-3 col-lg-4 col-sm-6"'+" >"
                        +"<div class="+'"product"'+">"
                            +"<span class="+'"pr_flash bg_green"'+">فروش</span>"
                            +"<div class="+'"product_img"'+">"
                                +"<a href="+'"#"'+"><img src="+data['path'][i]+" alt="+'"product_img1"'+"></a> "   
                                +"<div class="+'"product_action_box"'+">"
                                    +"<ul class="+'"list_none pr_action_btn"'+">"
                                        +"<li><a href="+'"#"'+"><i class="+'"ti-heart"'+"></i></a></li>"
                                        +"<li><a href="+'"#"'+"><i class="+'"ti-shopping-cart"'+"></i></a></li>"
                                        +"<li>"
                                            +"<a class="+'"btn btn-primary"'+" data-toggle="+'"modal"' +"data-target="+'".bd-example-modal-lg"'+"><i class="+'"ti-eye"'+"></i></a></li>"
                                    +"</ul>"
                                +"</div>"
                            +"</div>"
                            +"<div class="+'"product_info"'+">"
                                +"<h6><a href="+'"#"'+">"+data['result'][i].name+" </a></h6>"
                                +"<div class="+'"rating"'+">"
                                    +"<div class="+'"product_rate"'+" style="+'"width:80%"'+"></div>"
                                +"</div>"
                                +"<span class="+'"price"'+">"+data['result'][i].price+" </span>"
                            +"</div>"
                                                    
                        +"</div>"                               
                    +"</div>";
                             
                                                       
                        
                    }
                    console.log(str);
                    $("#sortedinfo").html(str);
                    // alert('محصول با موفقیت به سبد خرید اضافه شد');
                
                
            }
            
    });
});

//
$(document).on("click",'.star_rating',function(){
                
        var score = $(this).attr('data-id'); 
        var id=$(this).attr('data-value');
        // alert(score);
        $.ajax({
        url: '/product/star_rating',
        method: 'Post',
        dataType: 'json',
        data: {
            id:id,
            score:score
        },
        success:function(data)
        {
            if(data.url)
            {
                window.location=data.url;
            }
            else
                alert("امتیاز شما ثبت شد. متشکریم.")
                
        }
        
    });

});