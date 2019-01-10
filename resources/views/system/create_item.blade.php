@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-md-12">
                    <h1>新增物品</h1>
                </div>
                <div class="col-md-12 mt-4">
                    <form method="POST" action="{{ route('system.store.item') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>中文名稱</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input name="cname" type="text" class="form-control" value="{{ old('cname') }}" placeholder="必填" required>
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

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="category">類別</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="cid" class="form-control">
                                    @foreach($categories as $category)
                                        <option value={{ $category->id }}>{{ $category->cname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>描述</label>
                            </div>
                            <div class="form-group col-md-6">
                                <textarea name="description" rows="10" cols="100" type="text" class="form-control" placeholder="選填"></textarea>

                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>上傳圖片</label>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="photo" type="file" class="custom-file-input"
                                           accept=".png, .jgp, .jpeg">
                                    <label class="custom-file-label">限制 jpg, png 檔案</label>

                                </div>
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
