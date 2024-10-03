@extends('layouts.app')

@section('title')
    Profume Categories
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', $category) }}" type="button" class="btn btn-success btn-sm">Edit</a>

                            <form action="{{ route('admin.categories.destroy', $category) }}"  method="POST" class="d-inline-block form-deleter" >
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

