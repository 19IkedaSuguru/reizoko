{{-- layouts/food.blade.phpを読み込む --}}
@extends('layouts.food')

@section('title', '登録済みの食材一覧画面')

@section('content')
   <div class="container">
       <div class="row">
            <h2>食材一覧画面</h2>
       </div>
       <div class="row">
          <div class="col-md-2">
             <a href="{{ action('FoodController@add') }}" role="button" class="btn btn-primary">新規購入</a>
          </div>
          <div class="col-md-8">
             <form action="{{ action('FoodController@exist') }}" method="get">
                <div class ="form-group row">
                   <label class="col-md-2">保有食材</label>
                   <div class="col-md-8">
                      <input type="text" class="form-control" name="cond_name" value="{{ $cond_name }}">
                   </div>
                   <div class="col-md-2">
                      {{ csrf_field() }}
                      <input type="submit" class="btn btn-primary" value="検索">
                   </div>
                </div>
             </form>
           </div>
       </div>
       <div class="row">
          <div class="list-news col-md-20 mx-auto">
             <div class="row">
                <table class="tabel tabel-dark">
                   <thead>
                      <tr>
                         <th width="10%">ID</th>
                         <th width="20%">食材名</th>
                         <th width="20%">賞味期限</th>
                         <th width="20%">購入日</th>
                         <th width="20%">メモ</th>
                      </tr>
                   </thead>
                   <tbody>
                       @foreach($posts as $food)
                         <tr>
                             <th>{{ $food->id }}</th>
                             <td>{{ \Str::limit($food->name, 15) }}</td>
                             <td>{{ \Str::limit($food->limit_date, 10) }}</td>
                             <td>{{ \Str::limit($food->purchase_date, 10) }}</td>
                             <td>{{ \Str::limit($food->body, 40 ) }}</td>
                             <td>
                                 <div>
                                     <a href="{{ action('FoodController@edit', ['id' => $food->id]) }}">編集</a>
                                 </div>
                                 <div>
                                     <a href="{{ action('FoodController@delete', ['id' => $food->id]) }}">削除</a>
                                 </div>
                             </td>
                         </tr>
                       @endforeach
                   </tbody>
                </table>
             </div>
          </div>
       </div>
  </div>
@endsection