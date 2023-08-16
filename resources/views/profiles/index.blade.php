@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/logo.svg" alt="logo" class="rounded-circle" style="height: 120px; width: 120px">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> post</div>
                <div class="pe-5"><strong>103K</strong> follower</div>
                <div class="pe-5"><strong>200</strong> flowing</div>
            </div>
            <div class="pt-4" style="font-weight: bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div>
                <a href="#" style="text-decoration: none">{{$user->profile->url}}</a>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="/img/img1.png" alt="img" class="w-100 h-75">
        </div>
        <div class="col-4">
            <img src="/img/img2.png" alt="img" class="w-100 h-75">
        </div>
        <div class="col-4">
            <img src="/img/img3.png" alt="img" class="w-100 h-75">
        </div>

    </div>
</div>
@endsection
