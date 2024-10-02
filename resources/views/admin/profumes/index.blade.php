@extends('layouts.app');

@section('content')

    <ul>
        @foreach ($profumes as $profume)
        <li>
            {{$profume->name}}
        </li>
        @endforeach
    </ul>
@endsection
