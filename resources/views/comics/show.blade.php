@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul>
                    @foreach ($comicons as $comics)
                    <li class="my-4">Details: {{$comics['title']}}</li>
                    <li>{{$comics['description']}}</li>
                    <li>{{$comics['thumb']}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection