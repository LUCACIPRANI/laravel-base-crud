@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- @if ($errors->any())
                    <div class="alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{error }}</li>
                        </ul>
                    </div>
                @endif --}}
                <form action="{{ route('comics.store')}}" method="post">
                    @csrf
                    @method('POST')
                    
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter a name of Comic">
                    </div>

                    @error('title')
                    <div class="alert-alert-danger">{{$message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Enter a description" value="$comics['description']">
                        </textarea>
                        {{-- <input type="text" name="description" class="form-control" id="description" placeholder="Enter a description"> --}}
                    </div>
                    <div class="form-group">
                        <label for="thumb">Image</label>
                        <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter an image">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter a Price">
                    </div>
                    <div class="form-group">
                        <label for="series">Series</label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="Enter a Series">
                    </div>
                    <div class="form-group">
                        <label for="sale_date">Sale Date</label>
                        <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter a Sale Date">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" name="type" id="type">
                            <option value="">-- Select -- </option>
                            <option value="comic_book">Comic Book</option>
                            <option value="graphic_novel">Graphic Novel</option>
                        </select>
                        {{-- <input type="text" name="type" class="form-control" id="type" placeholder="Enter a type"> --}}
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection