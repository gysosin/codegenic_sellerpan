<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    @include('includes/includes')
</head>

<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->





    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">

                                
                                 <center><h4>Fill Details</h4></center>
                                

                                <form class="mt-5 mb-5 login-input" action='/register-upload-gst' method="get">
                                    <div class="form-group" id="leftbox">
                                        <input type="text" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="form-group" id="rightbox">
                                        <input type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group" id="leftbox">
                                        <input type="text" class="form-control" placeholder="Mobile Number" required>
                                    </div>
                                    <div class="form-group" id="rightbox">
                                        <input type="text" class="form-control" placeholder="GSTIN" required>
                                    </div>
                                    <div class="form-group" id="leftbox">
                                        <input type="text" class="form-control" placeholder="Firm Name" required>
                                    </div>
                                    <div class="form-group" id="rightbox">
                                        <input type="text" class="form-control" placeholder="Company Pan Card" required>
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Full Address"></textarea>
                                    </div>
                                    <div class="form-group" id="leftbox">
                                        <input type="text" class="form-control" placeholder="Business Type" required>
                                    </div>
                                    <div class="form-group" id="rightbox">
                                        <input type="text" class="form-control" placeholder="State" required>
                                    </div>
                                    <div class="form-group" id="rightbox">
                                        <input type="text" class="form-control" placeholder="Country" required>
                                    </div>
                                    <div class="form-group" id="leftbox">
                                        <input type="text" class="form-control" placeholder="Pincode" required>
                                    </div>

                                    <div class="form-group" id="leftbox">
                                        <input type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group" id="rightbox">
                                        <input type="password" class="form-control" placeholder="Retype Password" required>
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">Proceed to upload documents</button>
                                </form>
                                <p class="mt-5 login-form__footer">Have an account ? <a href='/' class="text-primary">Login </a> now</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->

    @include('includes/includes')
</body>

</html>