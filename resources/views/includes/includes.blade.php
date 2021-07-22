<link rel="icon" type="{{asset('/assets/image/png')}}" sizes="16x16" href="{{asset('/assets/images/favicon.png')}}">
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
<link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
<script src="{{asset('/assets/plugins/common/common.min.js')}}"></script>
<script src="{{asset('/assets/js/custom.min.js')}}"></script>
<script src="{{asset('/assets/js/settings.js')}}"></script>
<script src="{{asset('/assets/js/gleek.js')}}"></script>
<script src="{{asset('/assets/js/styleSwitcher.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
<script src="{{asset('/assets/plugins/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>
    <link href="{{asset('/assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">