<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ url('') }}/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ url('') }}/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/css/main.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #28251f">

    <div class="limiter">
        <div class="container-login100" data-aos="fade-up">
            <div class="wrap-login100 p-t-50 p-b-90">

                <span class="login100-form-title p-b-51" style="color: #28251f">
                    Login Admin
                </span>

                @if (session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                @endif

                <form action="{{ route('login.process') }}" method="POST">
                    @csrf
                    <div class="wrap-input100 validate-input m-b-16"
                        style="width: 80%; margin: auto; margin-bottom: 10px;">
                        <input type="text" class="input100 @error('username') is-invalid @enderror" name="username"
                            value="{{ old('username') }}" style="color: #28251f" placeholder="Username">
                        <span class="focus-input100"></span>
                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="wrap-input100 validate-input m-b-16" style="width: 80%; margin: auto;">
                        <input type="password" class="input100 @error('password') is-invalid @enderror" name="password"
                            value="{{ old('password') }}" style="color: #28251f" placeholder="Password">
                        <span class="focus-input100"></span>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="flex-sb-m w-full p-t-3 p-b-24">

                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button type="submit" class="login100-form-btn"
                            style="width: 80%; margin: auto; background-color: #28251f">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{ url('') }}/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('') }}/assets/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('') }}/assets/vendor/bootstrap/js/popper.js"></script>
    <script src="{{ url('') }}/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('') }}/assets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('') }}/assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="{{ url('') }}/assets/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('') }}/assets/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('') }}/assets/js2/main.js"></script>

</body>

</html>
