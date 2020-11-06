@extends('clients.layout')

@section('title', 'Редактирование данных клиента')

@section('content')
    <nav aria-label="breadcrumb" class="mt-3">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Главная</a></li>
        <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Клиенты</a></li>
        <li class="breadcrumb-item"> Редактирование</li>
        <li class="breadcrumb-item active" aria-current="page"> {{ $client->first_name }} {{ $client->last_name }}</li>
      </ol>
    </nav>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Возникла ошибка:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clients.update',$client->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="form-group">
                    <strong>Имя:</strong>
                    <input type="text" name="first_name" value="{{ $client->first_name }}" class="form-control" placeholder="Имя">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="form-group">
                    <strong>Фамилия:</strong>
                    <input type="text" name="last_name" value="{{ $client->last_name }}" class="form-control" placeholder="Фамилия">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="form-group">
                    <strong>Аватар</strong>
                    <input type="text" name="avatar" value="{{ $client->avatar }}" class="form-control" placeholder="Аватар">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="form-group">
                    <strong>Ежемесячный платеж</strong>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">₽</span>
                      </div>
                      <input type="number" min="0" name="monthly_fee" class="form-control" placeholder="Ежемесячный платеж" value="{{ $client->monthly_fee }}">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="form-group">
                    <strong>Описание</strong>
                    <input type="text" name="description" value="{{ $client->description }}" class="form-control" placeholder="Описание">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success"><i class="fas fa-user-edit text-white fa-sm"></i> Сохранить </button>
            </div>
        </div>

    </form>
@endsection
