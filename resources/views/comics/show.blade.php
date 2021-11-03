@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="card m-4" style="width: 18rem;">
                    <img class="card-img-top" src="{{$comics['thumb']}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">{{$comics['title']}}</p>
                        <p class="card-text">{{$comics['description']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

