@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-4">Comics list:</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Series</th>
                            <th scope="col">Sale date</th>
                            <th scope="col">Type</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comicons as $comics)
                        <tr>
                            <th scope="row">{{$comics['id']}}</th>
                            <td>{{$comics['title']}}</td>
                            <td>{{$comics['price']}}</td>
                            <td>{{$comics['series']}}</td>
                            <td>{{$comics['sale_date']}}</td>
                            <td>{{$comics['type']}}</td>
                            <td>
                                <a href="{{route('comics.show', $comics['id'])}}" 
                                    class="btn btn-info">
                                    Details
                                </a>
                                <a href="{{route('comics.edit', $comics['id'])}}" 
                                    class="btn btn-warning">
                                    Edit
                                </a>
                                <form method="post" action="{{route('comics.destroy', $comics['id'])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Remove</button>
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