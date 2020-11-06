@extends('clients.layout')

@section('title', 'Просмотр данных клиента')

@section('content')
    <nav aria-label="breadcrumb" class="mt-3">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Главная</a></li>
        <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Клиенты</a></li>
        <li class="breadcrumb-item active" aria-current="page"> {{ $client->first_name }} {{ $client->last_name }}</li>
      </ol>
    </nav>
    <div class="row">
        <div class="col-lg-6 col-md-8 col-xs-12 col-sm-12">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">{{ $client->monthly_fee }} RUB</strong>
                  <h3 class="mb-2">{{ $client->first_name }} {{ $client->last_name }}</h3>
                  <div class="mb-3 text-muted">{{ $client->created_at->format('d.m.Y, H:i') }}</div>
                  <p class="card-text mb-auto">{{ $client->description }}</p>
                </div>
                <div class="col-auto">
                    <div class="avatar avatar-large" style="background-image: url({{ $client->avatar}})">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
@endsection
