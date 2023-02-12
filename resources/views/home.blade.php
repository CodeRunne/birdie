@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between items-start">
        <div class="lg:w-32">
            @include('_sidebar-links')
        </div>
        <div class="lg:flex-1 lg:mx-6">
            @include('_publish-post-panel')

            <div class="border border-gray-100 rounded-lg my-4">
                @foreach($birdies as $birdie)
                    @include('_tweets')
                @endforeach
            </div>
        </div>
        <div class="lg:w-1/6 bg-red-50 rounded-lg px-4 py-2 h-auto">
            @include ('_friends-list')
        </div>
    </div>
@endsection
