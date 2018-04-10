@extends('layouts.master-side')

@section('content')
<div class="container">

    <div class="row">
        <h1 class="text-center">Register New Site</h1>
        <form class="form-horizontal" method="POST" action="/newsite">
        {{ csrf_field() }}
            <div class="form-group{{ $errors->has('subname') ? ' has-error' : '' }}">
                <label for="subname" class="col-md-4 control-label">Subdomain name</label>
                <div class="col-md-6">
                    <input id="subname" type="text" class="form-control" name="subname" value="{{ old('subname') }}" required autofocus>
                    @if ($errors->has('subname'))
                        <span class="help-block">
                    <strong>{{ $errors->first('subname') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('sitename') ? ' has-error' : '' }}">
                <label for="sitename" class="col-md-4 control-label">Site name</label>
                <div class="col-md-6">
                    <input id="sitename" type="text" class="form-control" name="sitename" value="{{ old('sitename') }}" required autofocus>
                    @if ($errors->has('sitename'))
                        <span class="help-block">
                    <strong>{{ $errors->first('sitename') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('largelogo') ? ' has-error' : '' }}">
                <label for="largelogo" class="col-md-4 control-label">Large Logo (URL)</label>
                <div class="col-md-6">
                    <input id="largelogo" type="text" class="form-control" name="largelogo" value="{{ old('largelogo') }}" required autofocus>
                    @if ($errors->has('largelogo'))
                        <span class="help-block">
                    <strong>{{ $errors->first('largelogo') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('smalllogo') ? ' has-error' : '' }}">
                <label for="smalllogo" class="col-md-4 control-label">Small Logo (URL)</label>
                <div class="col-md-6">
                    <input id="smalllogo" type="text" class="form-control" name="smalllogo" value="{{ old('smalllogo') }}" required autofocus>
                    @if ($errors->has('smalllogo'))
                        <span class="help-block">
                    <strong>{{ $errors->first('smalllogo') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('webclip') ? ' has-error' : '' }}">
                <label for="webclip" class="col-md-4 control-label">Webclip (URL)</label>
                <div class="col-md-6">
                    <input id="webclip" type="text" class="form-control" name="webclip" value="{{ old('webclip') }}" required autofocus>
                    @if ($errors->has('webclip'))
                        <span class="help-block">
                    <strong>{{ $errors->first('webclip') }}</strong>
                </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('favicon') ? ' has-error' : '' }}">
                <label for="favicon" class="col-md-4 control-label">Favicon (URL)</label>
                <div class="col-md-6">
                    <input id="favicon" type="text" class="form-control" name="favicon" value="{{ old('favicon') }}" required autofocus>
                    @if ($errors->has('favicon'))
                        <span class="help-block">
                    <strong>{{ $errors->first('favicon') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <hr>
            <h2>Site Colours</h2>
            <div class="form-group{{ $errors->has('topbar_bgcolor') ? ' has-error' : '' }}">
                <label for="topbar_bgcolor" class="col-md-4 control-label">Topbar Background Color</label>
                <div class="col-md-6">
                    <input id="topbarbg" type="text" class="form-control" name="topbar_bgcolor" value="{{ old('topbar_bgcolor') }}" autofocus>
                    @if ($errors->has('topbar_bgcolor'))
                        <span class="help-block">
                    <strong>{{ $errors->first('topbar_bgcolor') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('topbar_fontcolor') ? ' has-error' : '' }}">
                <label for="topbar_fontcolor" class="col-md-4 control-label">Topbar Font Color</label>
                <div class="col-md-6">
                    <input id="topbarfont" type="text" class="form-control" name="topbar_fontcolor" value="{{ old('topbar_fontcolor') }}" autofocus>
                    @if ($errors->has('topbar_fontcolor'))
                        <span class="help-block">
                    <strong>{{ $errors->first('topbar_fontcolor') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <hr>
            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="first_name" class="col-md-4 control-label">First name</label>
                <div class="col-md-6">
                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                <label for="last_name" class="col-md-4 control-label">Last name</label>
                <div class="col-md-6">
                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
                    @if ($errors->has('last_name'))
                        <span class="help-block">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="username" class="col-md-4 control-label">Username</label>
                <div class="col-md-6">
                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                    @if ($errors->has('username'))
                        <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Email</label>
                <div class="col-md-6">
                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>
                <div class="col-md-6">
                    <input id="password" type="text" class="form-control" name="password" value="{{ old('password') }}" required autofocus>
                    @if ($errors->has('password'))
                        <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="text-center">
            <button class="btn btn-danger">Add</button>
            </div>
        </form>
    </div>

</div>

@endsection
