{{-- layouts/food.blade.phpを読み込む --}}
@extends('layouts.food')

@section('title', '保存した食材の編集')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 mx-auto">
              <h2>保存した食材の編集</h2>
              <form action="{{ action('FoodController@update') }}" method="post" enctype="multipart/form_date">
                  @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                           <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                  @endif
                  <div class="form-group row">
                      <label class="col-md-2" for="name">食材名</label>
                      <div class="col-md-10">
                          <input type="text" class="form-control" name="name" value="{{ $food_form->name }}">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2" for="limit_date">賞味期限</label>
                    <div class="col-md-10">
                      <input type="text"  class="form-control" name="limit_date" value="{{ $food_form->limit_date }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2" for="purchase_date">購入日</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="purchase_date" value="{{ $food_form->purchase_date }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2" for="body">メモ</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="body" value="{{ $food_form->body }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-10">
                      <input type="hidden" name="id" value="{{ $food_form->id }}">
                      {{ csrf_field() }}
                      <input type="submit" class="btn btn-primary" value="更新">
                    </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
@endsection