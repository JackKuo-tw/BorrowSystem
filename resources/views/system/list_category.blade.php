@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>類別</h1>
            <div class="col-md-12">
                <p>總共有：{{ count($result) }} 組</p>
            </div>
            <div class="col-md-10">
                <a href="{{ route('system.create.category') }}">
                    <button class="btn btn-dark float-right">新增類別</button>
                </a>
            </div>
            <div class="col-md-12">

                <table class="table table-hover">
                    <tr>
                        <th>名稱</th>
                        <th>建立日期</th>
                    </tr>
                    @foreach($result as $item)
                    <tr>
                        <td>{{ $item->cname }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                        @if ($item->items->count() > 0)
                            <button class="btn"
                                    data-toggle="popover"
                                    title="尚有物品為該種類，無法刪除"
                                    data-content="{{ $item->all_items_name() }}">刪除</button>
                        @else

                            <a href="{{ route('system.delete.category', ["id" => $item->id]) }}">
                                <button class="btn btn-danger">刪除</button>
                            </a>

                        @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        });
    </script>
@endsection
