<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/matrix-login.css')}}" />
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
<div id="loginbox">
    <form id="loginform" class="form-vertical" method="POST" action="{{ route('login') }}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="control-group normal_text"> <h3><img src="{{asset('img/logo.png')}}" alt="Logo" /></h3></div>
        <div>
            <h2>Please use the following credential for Admin demo purposes:</h2>
            <span><h3>Username: admin@admin.com</h3></span>
            <span><h3>Password: 123456789</h3></span>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"> </i></span>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <br><span class="invalid-feedback" style="color: white;">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Forget password?</a></span>
            <span class="pull-right"><button type="submit" class="btn btn-success">Login</button></span>
        </div>
    </form>
    <form id="recoverform" action="#" class="form-vertical">
        <p class="normal_text">Please enter your e-mail address and we will send you a reset password link.</p>

        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
            </div>
        </div>

        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
            <span class="pull-right"><a class="btn btn-info">Reset Password</a></span>
        </div>
    </form>
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/matrix.login.js')}}"></script>
</body>

</html>
