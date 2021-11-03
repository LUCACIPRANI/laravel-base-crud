@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.update', $comics['id'])}}" method="post">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input value="{{ $comics['title']}}" type="text" name="title" class="form-control" id="title" placeholder="Enter a name of Comic">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Enter a description"> {{$comics['description']}}
                        </textarea>
                        {{-- <input value="{{ $comics['description']}}" type="text" name="description" class="form-control" id="description" placeholder="Enter a description"> --}}
                    </div>
                    <div class="form-group">
                        <label for="thumb">Image</label>
                        <input value="{{ $comics['thumb']}}" type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter an image">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input value="{{ $comics['price']}}" type="text" name="price" class="form-control" id="price" placeholder="Enter a Price">
                    </div>
                    <div class="form-group">
                        <label for="series">Series</label>
                        <input value="{{ $comics['series']}}" type="text" name="series" class="form-control" id="series" placeholder="Enter a Series">
                    </div>
                    <div class="form-group">
                        <label for="sale_date">Sale Date</label>
                        <input value="{{ $comics['sale_date']}}" type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter a Sale Date">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        {{-- <input value="{{ $comics['type']}}" type="text" name="type" class="form-control" id="type" placeholder="Enter a type"> --}}
                        <select class="form-control" name="type" id="type">
                            <option value="">-- Select -- </option>
                            <option value="comic_book" {{$comics['type'] == 'comic_book' ? 'selected' : NULL}}>Comic Book</option>
                            <option value="graphic_novel {{$comics['type'] == 'graphic_novel' ? 'selected' : NULL}}">Graphic Novel</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection