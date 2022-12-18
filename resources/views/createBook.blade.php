@extends('templade')
@section('title', 'create book')
@section('body')
    <div class="m-5">
        <form action="/store-book" method="POST">
            @csrf
            <h1 class="text-center">crete book</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Judul">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Publish</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="Publish">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Penulis">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Stock</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="Stock">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
