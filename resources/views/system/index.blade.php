@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <p>目前有類別：{{ $c_total }}、物品：{{ $i_total }}、成員：{{ $m_total }}</p>
            </div>
            <div class="col-md-3">
                <a href="{{ route('system.category') }}">
                    <button class="btn">管理類別</button>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('system.item') }}">
                    <button class="btn">管理物品</button>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('system.member') }}">
                    <button class="btn">管理成員</button>
                </a>
            </div>

        </div>
    </div>
@endsection
