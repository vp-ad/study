@foreach($dishes as $dish)
    <a href="{{$dish->path()}}" class="preview">
        <h4 class="preview__name">
            {{ $dish->name }}
        </h4>
        <div class="preview__body">
            <img class="preview__image" src="/{{$dish->image}}" alt="image.png">
            <div class="preview__description">
                {{ $dish->about }}
                <div>
                    Ингредиенты :
                    @foreach($dish->ingredients as $ingredient)
                        <li>
                            {{$ingredient->name}} - {{$ingredient->pivot->weight}} грамм
                        </li>
                    @endforeach
                </div>
                <div class="preview__time">
                    Время приготовления: {{$dish->time}}
                </div>
            </div>
            <div class="preview__tags">
                @foreach($dish->types as $type)
                    <span>
                    {{$type->name}}
                </span>
                @endforeach
            </div>
        </div>
    </a>
@endforeach
