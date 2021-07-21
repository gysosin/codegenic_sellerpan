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
                <a class="text-center" href="index.html">
                  <h4>Enter email to reset password</h4>
                </a>
                <form class="mt-5 mb-3 login-input">
                  <div class="form-group">
                    <input type="Email" class="form-control" placeholder="Email" required>
                  </div>
                  <button class="btn login-form__btn submit w-100">Reset</button>
                </form>
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
  @include('includes.includes')
</body>

</html>