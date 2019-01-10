@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

        @foreach($cate as $c)
            <div class="col-md-5">
                <a href="{{ route('borrow.list', ['cid' => $c->id]) }}">
                    <button class="btn">{{ $c->cname }}</button>
                </a>
            </div>
        @endforeach
        </div>
    </div>
@endsection
