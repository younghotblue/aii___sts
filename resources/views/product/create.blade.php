@extends('layouts.app')
 
@section('title')
商品登録
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">商品登録</div>
                <div class="card-body">
                  <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" class="form-width">

                    @csrf

                    <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">タイトル</label>
                      <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name ?? old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="price" class="col-md-4 col-form-label text-md-right">価格</label>
                      <div class="col-md-6">
                        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price ?? old('price') }}" required autocomplete="price" autofocus>

                        @error('price')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="description" class="col-md-4 col-form-label text-md-right">説明文</label>
                      <div class="col-md-6">
                        <textarea name="description" required class="form-control" rows="5" @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>{{ $product->description ?? old('description') }}</textarea>

                        @error('description')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="image" class="col-md-4 col-form-label text-md-right">画像</label>
                      <div class="col-md-6">
                        <input id="image" type="file" name="image" accept="image/jpeg, image/png" @error('image') is-invalid @enderror" name="image" value="{{ $product->image ?? old('image') }}" required autocomplete="image" autofocus>

                        @error('image')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            登録する
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
