@extends('layouts.profumes-layouts.create-update')

@section('title')
    Create profume
@endsection

@section('form-action')
    {{ route('admin.profumes.store') }}
@endsection

@section('form-method')
    @method('POST')
@endsection

@section('submit-button')
    Add profume
@endsection
