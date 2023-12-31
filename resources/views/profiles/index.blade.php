@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" alt="logo" class="rounded-circle" style="height: 100px; width: 100px">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pe-5"><strong>{{ $user->posts->count() }}</strong> post</div>
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
        @foreach($user->posts as $post)
            <div class="col-4 mb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{ $post->image }}" alt="img" class="w-100 h-75">
                </a>

            </div>
        @endforeach
    </div>
</div>
@endsection
