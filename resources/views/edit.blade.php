@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4 py-3">
                <a href="{{ route('books.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-circle-o-left"></i> Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1 py-3">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-book"></i> Edit information</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('books.update', $book->id) }}" method="post">
                            {{method_field('PUT')}}
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="#name">Name</label>
                                        <input class="form-control" type="text" value="{{ $book->name }}" id="name" name="name"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="#isbn">Isbn</label>
                                        <input class="form-control" type="text" value="{{ $book->isbn }}" id="isbn" name="isbn"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="#auth">Authors</label>
                                        <input class="form-control" type="text" value="{{ $book->authors }}" id="auth" name="authors"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="#page">Pages</label>
                                        <input class="form-control" type="text" value="{{ $book->numberOfPages }}" id="page" name="number_of_pages"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="#publisher">Publisher</label>
                                        <input class="form-control" type="text" value="{{ $book->publisher }}" id="publisher" name="publisher"/>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="#country">Country</label>
                                        <input class="form-control" type="text" value="{{ $book->country }}" id="country" name="country"/>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="#release_date">Released Date</label>
                                        <input class="form-control" type="text" value="{{ $book->released }}" id="release_date" name="release_date"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button class="btn btn-primary">Submit</button>
                                    <a href="{{ route('books.index') }}" class="btn btn-light ">Cancel</a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
