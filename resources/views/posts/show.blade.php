@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image}}" alt="image" class="w-100 h-75">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pe-3">
                        <img src="{{$post->user->profile->profileImage()}}" alt="image" class="rounded-circle w-100" style="max-width: 50px">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{$post->user->username}}</span>
                            </a>|
                            <a href="" class="ps-3">Follow</a>
                        </div>
                    </div>
                </div>
                <hr/>
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile{{$post->user->id}}">
                            <span class="text-dark">{{$post->user->username}}</span>

                        </a>
                    </span>
                    {{$post->cation}}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
