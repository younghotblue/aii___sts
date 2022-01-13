@extends('layouts.app')
 
@section('title')
商品一覧
@endsection

@section('content')
  <!-- フラッシュメッセージ -->
  @if (session('flash_message'))
  <div class="flash_message bg-success text-center py-3 my-0">
    {{ session('flash_message') }}
  </div>
  @endif

  <div class="jumbotron top-img">
  </div>

  <div class="container">
    <div class="top__title text-center">
        All Products
    </div>
    <div class="row">
      @foreach ($products as $product)
      <a href="{{ route('product.show', $product->id) }}" class="col-lg-4 col-md-6">
        <div class="card">
          <img src="{{ asset('storage/image/'.$product->image) }}" class="card-img"/>
          <div class="card-body">
            <div class="card-title">
              <span>{{ $product->name }}</span>
              <span>¥{{ number_format($product->price) }}</span>
            </div>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
@endsection

