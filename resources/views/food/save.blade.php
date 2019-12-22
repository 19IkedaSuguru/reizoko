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
                  <div class="form-group row">
                        <label class="col-md-2">食材名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-md-2">賞味期限</label>
                        <div class="col-md-10">
                          <input type="text" class="form-control" name="limit_date" value="{{ old('limit_date') }}">
                        </div>
                  </div>
                   <div class="form-group row">
                        <label class="col-md-2">購入日</label>
                        <div class="col-md-10">
                          <input type="text" class="form-control" name="purchase_date" value="{{ old('purchase_date') }}">
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-md-2">メモ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="3">{{ old('body') }}</textarea>
                        </div>
                  </div>
                  {{ csrf_field() }}
                  <input type="submit" class="bin btn-primary" value="更新">
               </form>
       　　 </div>
      　</div>
  　</div>
@endsection