@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="POST" action="@yield('form-action')" class="form-selector" enctype="multipart/form-data">
                    @yield('form-method')
                    @csrf

                    <input type="text" name="user_id" value="{{ $auth->id }}" hidden>

                    <label for="name">Name</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="name" value="{{ old('name', $profume->name) }}">

                    @error('name')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror


                    <label for="price">Price</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="price" value="{{ old('price',  $profume->price) }}">

                    @error('price')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="quantity" value="{{ old('quantity',  $profume->quantity) }}">

                    @error('quantity')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="brand">Brand</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="brand" value="{{ old('brand', $profume->brand )}}">

                    @error('brand')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="sponsored" id="sponsored1" value="1" {{ (old('sponsored') === 1 || $profume->sponsored === 1) ? 'checked' : '' }} >
                        <label class="form-check-label" for="sponsored1">
                            Sponsored
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="sponsored" id="sponsored2" value="0" {{ (old('sponsored') === 0 || $profume->sponsored === 0 || !$profume->sponsored) ? 'checked' : '' }} >
                        <label class="form-check-label" for="sponsored2">
                            Not Sponsored
                        </label>
                    </div>

                    <label for="image">Image</label>
                    <input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="image" value="{{ old('image', $profume->image) }}">

                    @error('image')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="description">{{ old('description', $profume->description ) }}</textarea>

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
