@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="mt-2 h-100 w-100 rounded-circle">
       </div>

       <div class="col-9 p-5">
        <div class="d-flex justify-content-between align-items-baseline">

            <div class="d-flex align-items-center pb-4">
                <h1>{{$user->username}}</h1>
                <follow-button ></follow-button>
               
            </div>
                
        


            @can('update',$user->profile)
             <a href="/p/create" class="btn btn-primary"> Add new Post</a>
            @endcan
        </div>

           @can('update',$user->profile)
            <a href="/profile/{{ $user->id}}/edit"> Edit Profile</a>
           @endcan
            <div class="d-flex"> 
                <div class="pr-5"><strong> {{ $user->posts->count() }} </strong> posts</div>
                <div class="pr-5"><strong> 5M</strong> followers</div>
                <div class="pr-5"><strong> 500</strong> following</div>
            </div> 
            
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div> <a href="#">{{ $user->profile->url }}</a></div>
       </div>
    </div>

    <div class="row" >


    @foreach($user->posts as $post)
        <div class="col-4 pb-3">
        <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" alt="" srcset="" class="w-100"> 
        </a>
        </div>
    @endforeach
        
    </div>

</div>
@endsection
