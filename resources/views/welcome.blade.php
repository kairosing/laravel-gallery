@extends('layout')

@section('content')

    <div class="container">
        <h1 align="center">My Gallery</h1>
        <div class="row">
            <div class="col-md-3 gallery-item">
                <img src="/image.jpg" alt="" class="img-thumbnail">
            <a href="/show" class="btn btn-info my-button">Show</a>
                <a href="/edit" class="btn btn-warning my-button">Edit</a>
                <a href="#" class="btn btn-danger my-button">Delete</a>
            </div>

        </div>
    </div>
    @endsection
