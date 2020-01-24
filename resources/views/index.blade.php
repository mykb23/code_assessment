@extends('layout.app')

@section('content')
{{-- <main role="main">
    <div class="jumbotron jumbotron-fluid">
        <div class="col-sm-8 mx-auto">
            <h1><i class="fas fa-users"></i> DCC App</h1>
            <h4 class="text-center">DCC App is a User Data Collection CRUD App, created with <strong>Laravel <i class="fab fa-laravel text-danger"></i></strong>, <em>MySQL</em> <i class="fas fa-database"></i>, where users can save their information, add more information, edit, and also delete the data.</h4>
            <form action="{{ '/' }}" method="get" role="search">
                @csrf
                @method('GET')
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search user">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit">
                            <span class=" fa fa-search"></span>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</main> --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-12">

            <h3></h3>
            <p>
                <i class="fas fa-book"></i> <a href="{{route('books.create')}}">Create Book</a>
            </p>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>ISBN</th>
                    <th>Authors</th>
                    <th>Page</th>
                    <th>Publisher</th>
                    <th>Country</th>
                    <th>Released Date</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data ?? '' as $d)
                        <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->isbn }}</td>
                            <td>{{ $d->authors }}</td>
                            <td>{{ $d->numberOfPages }}</td>
                            <td>{{ $d->publisher }}</td>
                            <td>{{ $d->country }}</td>
                            <td>{{ $d->released }}</td>
                            <td>
                                <a href="{{ route('books.edit', $d->id) }}" class="d-inline "><i class="fas fa-pen text-primary"></i></a>
                                <form action="{{ route('delete', $d->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-sm" type="submit"><i class="fas fa-trash text-danger"></i></button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        <div class="float-right">
            {{$data->links()}}
        </div>
</div>
@endsection
