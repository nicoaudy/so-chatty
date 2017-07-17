@extends('templates.default')

@section('content')
    <h3>You search for  "{{ request()->input('query') }}"</h3>

    @if(count($users))
        <div class="row">
            <div class="col-md-12">
                @foreach($users as $user)
                    @include('user.partials.userblock')
                @endforeach
            </div>
        </div>
    @else
        <p>No result found, sorry</p>
    @endif
@stop
