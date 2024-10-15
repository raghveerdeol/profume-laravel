@extends('layouts.app')

@section('custom_scss')
@vite('resources/sass/categoryForm.scss')
@endsection

@section('title')
    Add Category
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form method="POST" action="@yield('form-action')" class="form-selector" enctype="multipart/form-data" id="form_error">
                @yield('form-method')
                @csrf

                <label for="name">Name</label>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="name" id="name" value="{{ old('name', $category->name) }}">

                <div id="nameError"></div>
                @error('name')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror

                <label for="description">Description</label>
                <textarea type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="description" id="description">{{ old('description', $category->description ) }}</textarea>

                <div id="descriptionError"></div>
                @error('description')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror

                <button class="btn btn-primary mt-2 text-center" type="submit">@yield('submit-button')</button>
            </form>
        </div>
    </div>
</div>


@endsection

@section('custom_script')
    @vite('resources/js/validations/categoryFormValidation.js')
@endsection
