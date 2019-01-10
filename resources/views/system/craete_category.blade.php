@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-md-12">
                    <h1>新增類別</h1>
                </div>
                <div class="col-md-12 mt-4">
                    <form method="POST" action="{{ route('system.store.category') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>中文名稱</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input name="cname" type="text" class="form-control" placeholder="必填">

                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>英文名稱</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input name="ename" type="text" class="form-control" placeholder="選填">

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary btn-lg float-right">新增</button>
                            </div>
                        </div>
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li> {{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
