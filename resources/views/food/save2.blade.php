{{-- layouts/food.blade.phpを読み込む --}}
@extends('layouts.food')

@section('title', '食材保存画面')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-8 mx-auto">
               <h2>食材保存画面</h2>
               <p>購入した食材を入力してください</p>
               {{-- 疑問１ actionや@ifはこれで正しいのか？--}}
               <form action="{{ action('FoodController@create') }}" method="post" enctype="multipart/form-date">
                  @if (count($errors) > 0)
                    <ul>
                       @foreach($errors->all() as $e)
                           <li>{{ $e }}</li>
                       @endforeach
                    </ul>
                  @endif
                  {{-- 表示部分 --}}
                  <form class="form-line">
                     <label for="name">食品</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                  </form>
                     
                  {{-- 疑問2 ラジオボタンにした時、valueはold('limit_date')にするのか？違うのであればどう書けばよいか？forもわからない --}}
                  <form class="form-line">
                    <label class="my-1 mr-2" for="inlineFormCustomSelect">賞味期限or購入日</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>選択</option>
                        <option value="{{ old('limit_date') }}">賞味期限：</option>
                        <option value="{{ old('purchase_date') }}">購入日：</option>
                  </form>
                        
  </select>
  <div class="custom-control custom-checkbox my-1 mr-sm-2">
    <input type="checkbox" class="custom-control-input" id="customControlInline">
    <label class="custom-control-label" for="customControlInline">好みを記憶する</label>
  </div>
  <button type="submit" class="btn btn-primary my-1">送信</button>
                  
                  
                  
       　　 </div>
      　</div>
  　</div>
@endsection