@extends('layouts.master-side')

@section('content')
<h2>Setup is complete!</h2>
    <p>{{$value}}</p>
    <a href="http://{{$weburl}}.taskmule.com">{{$weburl}}.taskmule.com</a>

@endsection
