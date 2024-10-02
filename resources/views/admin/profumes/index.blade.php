@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">is sponsored?</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profumes as $profume)
                        <tr>
                            <td>{{ $profume->name }}</td>
                            <td>{{ $profume->brand }}</td>
                            <td>{{ $profume->quantity }}</td>
                            <td>{{ $profume->price }}£</td>
                            <td>
                                @if ($profume->sponsored === 1)
                                    Sponsored
                                @else
                                    Not sponsored
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.profumes.show', compact('profume')) }}" type="button" class="btn btn-primary">Show</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
