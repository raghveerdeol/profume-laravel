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
                                <a href="{{ route('admin.profumes.show', $profume) }}" type="button" class="btn btn-primary btn-sm">Show</a>
                                <a href="{{ route('admin.profumes.edit', $profume) }}" type="button" class="btn btn-success btn-sm">Edit</a>

                                <form action="{{ route('admin.profumes.destroy', $profume) }}"  method="POST" class="d-inline-block form-deleter" >
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" value="Delete" class="btn btn-warning btn-sm">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
