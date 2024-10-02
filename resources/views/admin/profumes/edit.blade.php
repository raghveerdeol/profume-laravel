@extends('layouts.profumes-layouts.create-update')

@section('title')
    Update {{ $profume->name }}
@endsection

@section('form-action')
    {{ route('admin.profumes.update', compact('profume')) }}
@endsection

@section('form-method')
    @method('POST')
@endsection

@section('submit-button')
    Update {{ $profume->name }}
@endsection
