<!doctype html>
<html lang="en">


<!-- Mirrored from picmaticweb.com/html/form-demo/formify/index--7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jun 2022 04:03:14 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <title>Formify</title>
</head>

<body>
    <div class="body_wrapper frm-vh-md-100">
        <div class="formify_body" data-bg-img="assets/img/background-bg-two.jpg">
            <div class="overlay_bg" data-bg-color="rgba(0, 0, 0, 0.35)"></div>
            <div class="f_content">
                <div class="container">
                    <div class="row">
                        <div class="formify_box formify_box_register">
                            <div class="formify_header text-center">
                                <a href="#" class="mb-3 formify_logo"><img src="assets/img/logo-two.png" alt=""></a>
                                <h4 class="form_title">Register or Sign in</h4>
                            </div>
                            <a href="#" class="btn btn-social btn-google-red">
                                <i class="fab fa-google icon"></i>
                                Sign up with Google
                            </a>
                           <!-- <a href="#" class="btn btn-social btn-twitter">
                                <i class="fab fa-twitter icon"></i>
                                Sign up with Twitter
                            </a> -->
                            <div class="divider_border text-center">
                                <span class="or-text">OR</span>
                            </div>
                            <form action="{{route('reg')}}" method="post" class="signup_form border-radius-0">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="input_title" for="inputName">First Name</label>
                                            <input type="text" class="form-control" name="f_name" id="inputName" placeholder="Enter First Name"
                                            >
                                            @error('f_name')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="input_title" for="inputName">Last Name</label>
                                            <input type="text" class="form-control" name="l_name" id="inputName" placeholder="Enter Last Name"
                                            >
                                            @error('l_name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="input_title" for="inputEmail">Email</label>
                                    <input type="text" name="email"  class="form-control" id="inputEmail" placeholder="Email address"
                                    >
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="input_title" for="inputPassword">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="*******"
                                    >
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn text-capitalize thm_btn">Sign up</button>
                                </div>
                                <p class="form_footer_text text-center">Already have an account? <a href="/Log_In">Sign In
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from picmaticweb.com/html/form-demo/formify/index--7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jun 2022 04:03:14 GMT -->
</html>