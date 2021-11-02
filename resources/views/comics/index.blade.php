@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Comics list:</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">title</th>
                            <th scope="col">description</th>
                            {{-- <th scope="col">Image</th> --}}
                            <th scope="col">Price</th>
                            <th scope="col">Series</th>
                            <th scope="col">Sale_date</th>
                            <th scope="col">Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comicons as $comics)
                            <tr>
                                <th scope="row">{{$comics['id']}}</th>
                                <td>{{$comics['title']}}</td>
                                <td>{!!$comics['description']!!}</td>
                                {{-- <td>{{$comics['thumb']}}</td> --}}
                                <td>{{$comics['price']}}</td>
                                <td>{{$comics['series']}}</td>
                                <td>{{$comics['sale_date']}}</td>
                                <td>{{$comics['type']}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection