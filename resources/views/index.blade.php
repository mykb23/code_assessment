@extends('layout.app')

@section('content')
<main role="main">
    <div class="jumbotron jumbotron-fluid">
        <div class="col-sm-8 mx-auto">
            <h1> <i class="fa fa-book" aria-hidden="true"></i> Books Api</h1>
            <h4 class="">This is a Book api, created with <strong>Laravel <i class="fab fa-laravel text-danger"></i></strong>, <em>PostgreSQL</em> <i class="fas fa-database"></i>.</h4>
        </div>
    </div>
</main>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 offset-md-1">
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
                        </tr>
                    @endforeach
                </tbody>
            </table>

        <div class="float-right">
            {{$data->links()}}
        </div>
        </div>
    </div>
</div>
@endsection
