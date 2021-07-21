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

                               
                                    <center><h4>Upload Documents</h4></center><br><br>
                                


                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="filename">
                                    <label class="custom-file-label" for="customFile">Upload cancelled cheque here!</label>
                                </div>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="filename">
                                    <label class="custom-file-label" for="customFile">Upload Your Passport size photo here!</label>
                                </div>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="filename">
                                    <label class="custom-file-label" for="customFile">Upload Your Signature here!</label>
                                </div>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="filename">
                                    <label class="custom-file-label" for="customFile">Upload Comapny Pan card here!</label>
                                </div>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="filename">
                                    <label class="custom-file-label" for="customFile">Upload GST documents here!</label>
                                </div>
                                <form class="mt-5 mb-5 login-input" action='/register-upload-gst' method="get">

                                    <button type="submit" class="btn login-form__btn submit w-100">Complete Registration</button>
                                </form>
                                <p class="mt-5 login-form__footer">Have an account ? <a href="page-login.html" class="text-primary">Login </a> now</p>
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