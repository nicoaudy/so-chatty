@extends('templates.default')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <h3>Your friends</h3>
       @if(!$friends->count())
            <p>You have no friends.</p>
        @else
            @foreach($friends as $user)
                @include('user.partials.userblock')
            @endforeach
        @endif
    </div>
    <div class="col-lg-6">
        <h4>Friend requests</h4>

        @forelse($requests as $user)
            @include('user.partials.userblock')
        @empty
            <p>You have no friend requests.</p>
        @endforelse
    </div>
</div>
@stop
