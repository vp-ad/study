@extends('widget.container')
@section('title1') Новый рецепт @endsection
@section('title') Новый рецепт @endsection
@section('content1')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('dish.create')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="block">
            <input class="form-control form-control-lg" type="text" name="name" placeholder="Название рецепта"
                   class="form-control">
        </div>
        <div class="block">
            <h4>
                Количество порций
            </h4>
            <input class="form-control form-control-lg" type="number" name="count" placeholder="3" value="3" class="form-control">
        </div>
        <div class="block" id="group">
            <h4>
                Ингредиенты
            </h4>
            <div class="block__item block__horizontal ingredients">
                <select class="custom-select" name="ingredient_name[]">
                    @foreach($ingredients as $ingredient)
                        <option value="{{$ingredient->id}}">{{$ingredient->name}}</option>
                    @endforeach
                </select>
                <input class="form-control form-control-lg" type="number" name="ingredient_weight[]" placeholder="1" value="1">
                <span>Грамм</span>
                <button class="block__delete" onclick="return false;"> x</button>
            </div>
            <group-add v-for="field in fields" v-bind:is="field.type" :id="field.id" :key="field.id"
                       @remove="removeFormElement" :ingredients={{$ingredients}}>

            </group-add>
            <div class="block__item block__horizontal">
                <button v-on:click="addFormElement('group-add')" onclick="return false;">Добавить ингредиент</button>
            </div>
        </div>

        <div class="block">
            <h4>
                Краткое описание
            </h4>
            <textarea name="about" id="" rows="4" placeholder="Краткое описание блюда"></textarea>
        </div>

        <div class="block">
            <h4>
                Приготовление
            </h4>
            <textarea name="cooking" id="" rows="4"
                      placeholder="Напишите пошаговые инструкции по приготовлению блюда."></textarea>
        </div>

        <div class="block block__twice block__horizontal">
            <div class="block__item block__vertical" id="types">
                <h4>
                    Категория блюда
                </h4>
                <div class="category__item">
                    <select class="custom-select" name="category[]">
                        @foreach($allTypes as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                    <button onclick="return false;" class="block__delete">x</button>
                </div>
                <div v-for="field in fields" v-bind:is="field.type" :id="field.id" :key="field.id"
                     @remove="removeFormElement" class="category__item" :types1={{$allTypes}}>
                </div>
                <div class="block__item block__horizontal">
                    <button v-on:click="addFormElement('type-add')" onclick="return false;">Добавить тип</button>
                </div>
            </div>
            <div class="block__item block__vertical">
                <h4>
                    ВРЕМЯ ПРИГОТОВЛЕНИЯ
                </h4>
                <div class="block__item block__horizontal">
                    <select class="custom-select" name="hour">
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <span>ЧАСА(ОВ)</span>

                    <select class="custom-select" name="minute">
                        <option selected value="0">0</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                        <option value="55">55</option>
                    </select>
                    <span>МИНУТ</span>
                </div>
            </div>
        </div>

        <div class="block">
            <h4>ФОТОГРАФИИ</h4>
            <input type="file" name="img" id="file">
        </div>

        <div class="block">
            <button class="btn btn-success" type="submit">Опубликовать</button>
        </div>

    </form>
@endsection

