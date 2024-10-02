@extends('layouts.app');

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="@yield('form-action')" class="form-selector">
                    @yield('form-method')
                    @csrf

                    <label for="name">Name</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="name">

                    <label for="price">Price</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="price">

                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="quantity">

                    <label for="brand">Brand</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="brand">


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
                    <input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="image">

                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="description"></textarea>
                </form>
            </div>
        </div>
    </div>

@endsection
