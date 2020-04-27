$(document).ready(function(){
        
    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
        $(".addcart").click(function(){
            var id = $(this).attr('data-id');
            // alert(id);

            $.ajax({
                url: '/add-to-cart',
                method: 'POST',
                dataType: 'json',
                data: {id:id},
                success:function(data)
                {
                    alert('محصول با موفقیت به سبد خرید اضافه شد');
                }
                // error: function (XMLHttpRequest,textStatus, errorthrown){
                //     console.log('AJAX error:' + errorthrown);
                // }
        });
    });
});


