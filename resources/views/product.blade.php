@extends('layouts.welcome')
@section('content')
<div class="row">
    <div class="col-sm-12"><h1>{{ $product->title }}</h1></div>
</div>
<div class="row">
    <div class="col-sm-4">
        <img src="{{ $product->image->original() }}" width="300" height="300" alt=""><br>
    </div>
    <div class="col-sm-8 text">
        <p>{{ $product->description }}</p>
        Цена: {{ $product->price }} бел.руб. <br><br>


        @if(!isset($contacts))
        <button type="button" class="btn btn-lg btn-primary" id="addProduct"
                @if($disabled)
                    disabled="disabled"
                @endif
        >Купить</button>
        @else
            Товар отсутствует на складе! <br>
            Продавец: {{ $contacts->full_name}} <br>
            Телефон: {{ $contacts->phone }} <br>
            Email: {{ $contacts->email }} <br>
        @endif
    </div>
</div>
@endsection