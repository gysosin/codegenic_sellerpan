@include('includes.headerdash')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="card card-widget">
                    <div class="card-body gradient-3">
                        <div class="media">
                            <span class="card-widget__icon"><i class="icon-home"></i></span>
                            <div class="media-body">
                                <h2 class="card-widget__title">520</h2>
                                <h5 class="card-widget__subtitle">products reviews</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card card-widget">
                    <div class="card-body gradient-4">
                        <div class="media">
                            <span class="card-widget__icon"><i class="icon-tag"></i></span>
                            <div class="media-body">
                                <h2 class="card-widget__title">720</h2>
                                <h5 class="card-widget__subtitle">customer complaints</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card card-widget">
                    <div class="card-body gradient-4">
                        <div class="media">
                            <span class="card-widget__icon"><i class="icon-emotsmile"></i></span>
                            <div class="media-body">
                                <h2 class="card-widget__title">1002</h2>
                                <h5 class="card-widget__subtitle">ressolved complaints</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card card-widget">
                    <div class="card-body gradient-9">
                        <div class="media">
                            <span class="card-widget__icon"><i class="icon-ghost"></i></span>
                            <div class="media-body">
                                <h2 class="card-widget__title">420</h2>
                                <h5 class="card-widget__subtitle">critical</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <span class="display-5"><i class="icon-earphones gradient-3-text"></i></span>
                            <h2 class="mt-3">5K Songs</h2>
                            <p>Customers have reviews the product!</p><a href="javascript:void()" class="btn gradient-3 btn-lg border-0 btn-rounded px-5">Check here
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <span class="display-5"><i class="icon-diamond gradient-4-text"></i></span>
                            <h2 class="mt-3">765 Point</h2>
                            <p>!</p>
                            <a href="javascript:void()" class="btn gradient-4 btn-lg border-0 btn-rounded px-5">Review now
                        </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <span class="display-5"><i class="icon-user gradient-4-text"></i></span>
                            <h2 class="mt-3">5210 Users</h2>
                            <p>Currently active</p><a href="javascript:void()" class="btn gradient-4 btn-lg border-0 btn-rounded px-5">Add
                                more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <span class="display-5"><i class="icon-grid gradient-9-text"></i></span>
                            <h2 class="mt-3">2 Grid Servers</h2>
                            <p>Currently inactive</p><a href="javascript:void()" class="btn gradient-9 btn-lg border-0 btn-rounded px-5">Fix
                                now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


</div>






<script>
    window.localStorage.clear();
    $(document).ready(function() {

        $('#list-items').html(localStorage.getItem('listItems'));

        $('.add-items').submit(function(event) {
            event.preventDefault();

            var item = $('#todo-list-item').val();
            if (item) {
                $('#list-items').append("<li><div class='round d-inline-block'><input type='checkbox' id='checkbox' /><label for='checkbox'></label></div><label for='checkbox'>" + item + "</label><a class='remove'><i class='fa fa-trash'></i></a></li>");




                // <div class='round'><input type='checkbox' id='checkbox' /><label for='checkbox'></label></div><label for='checkbox'>

                // dfdfdf</label>





                localStorage.setItem('listItems', $('#list-items').html());

                $('#todo-list-item').val("");
            }

        });

        $(document).on('change', '.checkbox', function() {
            if ($(this).attr('checked')) {
                $(this).removeAttr('checked');
            } else {
                $(this).attr('checked', 'checked');
            }

            $(this).parent().toggleClass('completed');

            localStorage.setItem('listItems', $('#list-items').html());
        });

        $(document).on('click', '.remove', function() {
            $(this).parent().remove();

            localStorage.setItem('listItems', $('#list-items').html());
        });

    });
</script>
@include('includes.footerdash')