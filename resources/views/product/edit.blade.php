@extends('layouts.app')
 
@section('title')
商品編集
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">商品編集</div>
                <div class="card-body">
                  <form method="POST" action="{{ route('product.update', ['product' => $product]) }}"  class="form-width">

                    @method('PATCH')
                    @csrf

                    <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">タイトル</label>
                      <div class="col-md-6">
                        <input id="name" type="text" placeholder="商品名" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name ?? old('name') }}" required autocomplete="name" autofocus>

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
                        <input id="price" type="text" placeholder="価格" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price ?? old('price') }}" required autocomplete="price" autofocus>

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
                        <textarea name="description" required class="form-control" rows="5" placeholder="商品説明" @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>{{ $product->description ?? old('description') }}</textarea>

                        @error('description')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            更新する
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
