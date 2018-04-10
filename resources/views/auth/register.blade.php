@extends('layouts.side')

@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><img style="max-width: 250px; margin-right: 10px;" alt="Site Image" src="{{\App\GlobalParameter::where('id', 1)->first()->tenant_large_logo}}"></a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register</p>

            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    <input id="username" type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}" required autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input id="first_name" type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input id="last_name" type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" required autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> <a href="#">I agree to terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
                    Facebook</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
                    Google+</a>
            </div>

            <a href="/login" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery 3 -->


@endsection

