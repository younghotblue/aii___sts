@extends('layouts.app')

@section('title')
{{ $product->name }}
@endsection

@section('content')
    <div class="container">
        <div class="product">
            <img src="{{ asset('storage/image/'.$product->image) }}" class="product-img"/>
            <div class="product__content-header text-center">
                <div class="product__name">
                    {{ $product->name }}
                </div>
                <div class="product__price">
                    ¥{{ number_format($product->price) }}
                </div>
            </div>
            {{ $product->description }}
            <form method="POST" action="{{ route('line_item.create') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}"/>
                @cannot('isAdmin') 
                <div class="product__quantity">
                    <input type="number" name="quantity" min="1" value="1" require/>
                </div>
                <div class="product__btn-add-cart">
                    <button type="submit" class="btn btn-outline-primary">カートに追加する</button>
                </div>
                @endcan
            </form>
            @can('isAdmin')
            <div class="btn-display">
                <a class="card-link" href="{{ route("product.edit", ['product' => $product]) }}">
                  <i class="fas fa-pencil-alt fa-2x"></i>
                </a>         
                
                <form method="POST" action="{{ route('product.destroy', ['product' => $product]) }}">
                  @csrf
                  @method('DELETE')
                  <button name="delete" type="submit" class="fas fa-trash-alt btns fa-2x" onclick="return confirm('削除してもよろしいですか？')"></button>
                </form>
            </div>
            @endcan
        </div>
    </div>
@endsection
