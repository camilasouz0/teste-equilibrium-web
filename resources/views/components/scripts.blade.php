<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
var maskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    options = {onKeyPress: function(val, e, field, options) {
    field.mask(maskBehavior.apply({}, arguments), options);
    }
};

$('.telefone').mask(maskBehavior, options);

$("#cpf").mask("999.999.999-99");

$('.add').click(function() {
    var div = $(".divclone")
                    .first()
                    .clone();
                    $(".divclone").last().after(div);
                    $('.telefone').mask(maskBehavior, options);
});

$('.remove').click(function() {
    if($(".divclone").length > 1)
    {
        console.log('apertei');
        $(".divclone").last().remove();
    }
});
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if (Session::has('success'))
    <script>
        swal({
            title: "{{ Session::get('success') }}",
            icon: "success",
            confirmButtonText: 'OK'
        });
    </script>
@endif

@if (Session::has('errors'))
    <script>
        let myhtml = document.createElement("div");
        let message = ''
        @foreach ($errors->all() as $error)
            message = message + '{{ $error }}' +"</br>"
        @endforeach
        myhtml.innerHTML = message;
        swal({
            content: myhtml,
            title: 'Oops...',
            icon: "error",
        })
    </script>
@endif