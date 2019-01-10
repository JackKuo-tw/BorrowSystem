@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <h1>物品</h1>
            <div class="col-md-12">
                <p>總共有：{{ count($result) }} 組</p>
            </div>
            <div class="col-md-10">
                    <a href="{{ route('system.create.item') }}">
                        <button class="btn btn-dark float-right">新增物品</button>
                    </a>
            </div>
            <div class="col-md-12">

                <table class="table table-hover">
                    <tr>
                        <th>名稱</th>
                        <th>圖片</th>
                        <th>描述</th>
                    </tr>
                    @foreach($result as $item)
                        <tr>
                            <td>{{ $item->cname }}</td>
                            <td>
                                <img width="10%" alt="" src='data:image/jpeg;base64,{{ $item->photo }}'/>
                            </td>

                            @if ($type=='item')
                                <td>{{ $item->description }}</td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
@endsection
