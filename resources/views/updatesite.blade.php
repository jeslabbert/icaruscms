@extends('layouts.master-side')

@section('content')
<div class="container">

    <div class="row">
        <h1 class="text-center">Update Site</h1>
        <form class="form-horizontal" method="POST" action="/updatesite">
        {{ csrf_field() }}
            <div class="form-group{{ $errors->has('site_id') ? ' has-error' : '' }}">
                <label for="site_id" class="col-md-4 control-label">Subdomain Name</label>
                <div class="col-md-6">
                    <input id="site_id" type="text" class="form-control" name="site_id" value="{{$site->id}}" required autofocus>
                    @if ($errors->has('site_id'))
                        <span class="help-block">
                    <strong>{{ $errors->first('site_id') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('domainname') ? ' has-error' : '' }}">
                <label for="domainname" class="col-md-4 control-label">Domain Name</label>
                <div class="col-md-6">
                    <input id="domainname" type="text" class="form-control" name="domainname" value="{{$hostname->fqdn}}" required autofocus>
                    @if ($errors->has('domainname'))
                        <span class="help-block">
                    <strong>{{ $errors->first('domainname') }}</strong>
                </span>
                    @endif
                </div>
            </div>
            <div class="text-center">
            <button class="btn btn-danger">Edit</button>
            </div>
        </form>
    </div>

</div>

@endsection
