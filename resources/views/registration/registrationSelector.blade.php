
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
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
                                
                                    <h4><center>Please select one option</center></h4><br>
        
                                    <button onclick="window.location.href='/register-gstin'" class="btn login-form__btn submit w-100">If you have <b>GSTIN click here</b></button><br><br>
                                    <button onclick="window.location.href='/register-no-gstin'" class="btn login-form__btn submit w-100"style ="color :White; background-color:#e64e4e" >If you do not have <b>GSTIN</b> click here</button>
                                
                                    <p class="mt-5 login-form__footer">Have account <a href='/' class="text-primary">Login now </a> now</p>
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





