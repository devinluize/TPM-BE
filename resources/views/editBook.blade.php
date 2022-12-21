@extends('templade')

@section('title', 'edit book')
@section('body')
    <form action="/update-book/{{ $book->id }}" method="POST">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Title"
                value="{{ $book->Judul }}">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="exampleInputPassword1"name="Penulis"
                value="{{ $book->Penulis }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Stock</label>
            <input type="number" class="form-control" id="exampleInputPassword1"name="Stock" value="{{ $book->Stock }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Publish</label>
            <input type="date" class="form-control" id="exampleInputPassword1"name="Publish"
                value="{{ $book->Publish }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
