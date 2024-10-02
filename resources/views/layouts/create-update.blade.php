@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="POST" action="@yield('form-action')" class="form-selector">
                    @yield('form-method')
                    @csrf

                    <label for="name">Name</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="name" value="{{ old('name') }}">

                    @error('name')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror


                    <label for="price">Price</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="price" value="{{ old('price') }}">

                    @error('price')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="quantity" value="{{ old('quantity') }}">

                    @error('quantity')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="brand">Brand</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="brand" value="{{ old('brand') }}">

                    @error('brand')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sponsored" id="sponsored1" value="1">
                        <label class="form-check-label" for="sponsored1">
                            Sponsored
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sponsored" id="sponsored2" value="0" checked>
                        <label class="form-check-label" for="sponsored2">
                            Not Sponsored
                        </label>
                    </div>

                    <label for="image">Image</label>
                    <input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="image" value="{{ old('image') }}">

                    @error('image')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="description">{{ old('description') }}</textarea>

                    @error('description')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror

                    <button class="btn btn-primary" type="submit">@yield('submit-button')</button>
                </form>
            </div>
        </div>
    </div>

@endsection
