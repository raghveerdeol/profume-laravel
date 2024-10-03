@extends('layouts.categories-layouts.create-edit')

@section('title')
    Add Category
@endsection

@section('form-action')
    {{ route('admin.categories.store') }}
@endsection

@section('form-method')
    @method('POST')
@endsection

@section('submit-button')
    Add category
@endsection
