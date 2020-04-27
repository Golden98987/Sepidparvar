@section('RateAjax')

<script type="text/javascript">

    $(document).ready(function(){
        
        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });
            $(".ratetoproduct").click(function(){
                var id = $(this).attr('data-id');
                // alert(id);

                $.ajax({
                    url: '/category/rate-to-product',
                    method: 'POST',
                    dataType: 'json',
                    data: {id:id},
                    success:function(data)
                    {
                        alert('امتیاز شما با موفقیت ثبت شد.');
                    }
                    // error: function (XMLHttpRequest,textStatus, errorthrown){
                    //     console.log('AJAX error:' + errorthrown);
                    // }
            });
        });
    });
    </script>

@endsection