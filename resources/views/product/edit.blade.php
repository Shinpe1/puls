@extends('layouts.app')

@section('content')
<div class="container small">
<h1>商品編集</h1>
<form action="{{ route('products.update', ['id'=>$product->products_id]) }}" method="POST">

@csrf

<table class="table table-striped">
<thead>
    <tr>
    <th>ID</th>
    <th>商品画像</th>
    <th>商品名</th>
    <th>価格</th>
    <th>在庫数</th>
    <th>メーカー名</th>
    <th>コメント</th>
    </tr>
</thead>

<tbody>
    <tr>
    <td>{{ $product->products_id }}</td>
    <td><img src="{{ asset('storage/images/'. $product->img_path)}}" class="img-fluid" width = "300px"></td>
    <td>{{ $product->product_name }}</td>
    <td>{{ $product->price }}</td>
    <td>{{ $product->stock }}</td>
    <td>{{ $product->company->company_name }}</td>
    <td>{{ $product->comment }}</td>
    </tr>
</tbody>
</table>

    <fieldset>

    <div class="form-group">
    <div>
        @if ($errors->has('product_name'))
        <h5 style="color:red">{{ $errors->first('product_name') }}</h5>
    @endif
        <label for="product_name">{{ __('商品名') }}</label>
        <input type="text" class="form-name" name="product_name" id="product_name">
    </div>

    <div class="form-group">
    <div>
        @if ($errors->has('price'))
        <h5 style="color:red">{{ $errors->first('price') }}</h5>
    @endif
        <label for="price">{{ __('価格') }}</label>
        <input type="text" class="form-name" name="price" id="price">
    </div>

    <div class="form-group">
    <div>
        @if ($errors->has('stock'))
        <h5 style="color:red">{{ $errors->first('stock') }}</h5>
    @endif
        <label for="stock">{{ __('在庫数') }}</label>
        <input type="text" class="form-name" name="stock" id="stock">
    </div>

    <div class="form-group">
    <div>
        @if ($errors->has('company_id'))
        <h5 style="color:red">{{ $errors->first('company_id') }}</h5>
    @endif
    <label for="company_id">{{ __('メーカー名') }}</label>
    <select type="text" class="form-select" id="company_id" name="company_id">
    <option disabled style='display:none;' @if (empty($product->company_id)) selected @endif>選択してください</option>
    @foreach($companies as $company)
            <option value="{{ $company->company_id }}" @if (isset($product->company_id) && ($product->company_id === $company->company_id)) selected @endif>{{ $company->company_name }}</option>
        @endforeach
    </select> 
        
    <div class="form-group">
        <label for="comment">{{ __('コメント') }}</label>
        <input type="text" class="form-name" name="comment" id="comment">
    </div>

    <div>
            <label for="img_path">{{ __('商品画像') }}</label>
            <input type="file" class="form-" name="img_path" id="img_path">
        <div class="d-flex justify-content-between pt-3">
</dit>

    

        <a href="{{ route('products.show',['id'=>$product->products_id]) }}" class="btn btn-outline-secondary" role="button">
            <i class="fa fa-reply mr-1" aria-hidden="true"></i>{{ __('◀️ 戻る') }}
        </a>

        <button type="submit" class="btn btn-success" onclick= "return confirm('更新しますか？');">
            {{ __('更新') }}
        </button>
    </div>
    </fieldset>
</form>
</div>
@endsection