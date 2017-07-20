@extends('templates.default')

@section('content')
<div class="row">
    <div class="col-lg-5">
        @include('user.partials.userblock')<hr>
    </div>
    <div class="col-lg-4 col-lg-offset-3">
        @if(auth()->user()->hasFriendRequestPending($user))
            <p>waiting for {{ $user->getNameOrUsername() }} to accept your request.</p>
        @elseif(auth()->user()->hasFriendRequestRecieved($user))
            <a href="" class="btn btn-primary">Accept friend request</a>
        @elseif(auth()->user()->isFriendsWith($user))
            <p>You and {{ $user->getNameOrUsername() }} are friends</p>
        @else
            <a href="" class="btn btn-primary">Add as friends</a>
        @endif

        <h4>{{ $user->getFirstNameOrUsername() }}'s Friends.</h4>
        @if(!$user->friends()->count())
            <p>{{ $user->getFirstNameOrUsername() }} has no friends.</p>
        @else
            @foreach($user->friends() as $user)
                @include('user.partials.userblock')
            @endforeach
        @endif
    </div>
</div>
@stop
