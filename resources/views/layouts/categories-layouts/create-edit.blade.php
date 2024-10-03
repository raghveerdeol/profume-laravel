@extends('layouts.app')

@section('title')
    Add Category
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form method="POST" action="@yield('form-action')" class="form-selector" enctype="multipart/form-data">
                @yield('form-method')
                @csrf

                <label for="name">Name</label>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="name" value="{{ old('name', $category->name) }}">

                @error('name')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror

                <label for="description">Description</label>
                <textarea type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="description">{{ old('description', $category->description ) }}</textarea>

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
