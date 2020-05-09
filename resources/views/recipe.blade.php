@extends('widget.container')
@section('title1'){{$dish->name}}@endsection
@section('title'){{$dish->name}}@endsection
@section('content1')

    <div class="recipe">
        <div class="recipe__head">
            <div class="recipe__head_author">
                {{--       Имя юсера--}}
                <span>Автор:</span>
                {{$dish->users()->first()->name}}
            </div>
            <div class="recipe__head_date">
                <span>Дата публикации:</span>
                {{$dish->created_at->format('d-F-Y')}}
            </div>
        </div>

        <div class="recipe__preview" data-name="{{$dish->name}}">
            <img src="/{{$dish->image}}" alt="image.png">
        </div>

        <div class="recipe__ingredients">
            <h4>
                Ингредиенты
            </h4>
            @foreach($dish->ingredients as $ingredient)
                <ul class="recipe__ingredients_list">
                    <li>
                        {{$ingredient->name}}
                    </li>
                    <li>
                        {{$ingredient->pivot->weight}} грамм
                    </li>
                </ul>
            @endforeach
            <div class="recipe__time">
                Время приготовления: {{$dish->time}}
            </div>
        </div>

        <div class="recipe__description">
            <h4>
                Инструкция по проготовлению
            </h4>
            <p>
                <?=
                htmlspecialchars_decode($dish->description)
                ?>

            </p>
        </div>
    </div>
@endsection
