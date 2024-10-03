@extends('layouts.categories-layouts.create-edit')

@section('title')
    Edit {{ $category->name }}
@endsection

@section('form-action')
    {{ route('admin.categories.update', $category) }}
@endsection

@section('form-method')
    @method('PUT')
@endsection

@section('submit-button')
    Edit {{ $category->name }}
@endsection
