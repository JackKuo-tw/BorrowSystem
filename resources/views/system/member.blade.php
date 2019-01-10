@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
                <h1>已聽講習成員</h1>
            <div class="col-md-12">
                <p>總共有：{{ count($people) }} 人</p>
            </div>
            <div class="col-md-10">
                    <a href="{{ route('system.create.member') }}">
                        <button class="btn btn-dark float-right">新增成員</button>
                    </a>
            </div>
            <div class="col-md-12">

                <table class="table table-hover">
                    <tr>
                        <th>學號</th>
                        <th>記錄時間</th>
                        <th>刪除</th>
                    </tr>
                    @foreach($people as $item)
                        <tr>
                            <td>{{ $item->sid }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="{{ route('system.delete.member', ["id" => $item->id]) }}">
                                    <button class="btn btn-danger">刪除</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
@endsection
