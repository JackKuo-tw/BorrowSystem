@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-hover">
                <tr>
                    <th>名稱</th>
                    <th>圖片</th>
                </tr>
            @foreach($items as $item)


                <tr>
                    <td>{{ $item->cname }}</td>
                    <td>
                        <img width="10%" alt="" src='data:image/jpeg;base64,{{ $item->photo }}'/>
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
@endsection
