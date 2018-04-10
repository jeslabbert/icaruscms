<!-- login.blade.php -->
@extends('layouts.side')
@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><img style="max-width: 250px; margin-right: 10px;" alt="Department Image" src="{{\App\GlobalParameter::where('id', 1)->first()->tenant_large_logo}}"></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start</p>

            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    <input id="username" type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}" required autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                    Facebook</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                    Google+</a>
            </div>
            <!-- /.social-auth-links -->

            <a href="{{ route('password.request') }}">Forgot Password</a><br>
            <a href="/register" class="text-center">Register a new membership</a>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
@endsection