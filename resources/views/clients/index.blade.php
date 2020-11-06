@extends('clients.layout')

@section('title', 'Список клиентов')

@section('content')


    @if (Request::get('q'))
        <nav aria-label="breadcrumb" class="mt-3">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Клиенты</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Поиск по запросу &nbsp;<strong> {{ Request::get('q') }}</strong></li>
          </ol>
        </nav>
    @else
        <div class="row">
            <div class="col-lg-12 my-3">
                <div class="float-right">
                    <a class="btn btn-success" href="{{ route('clients.create') }}" title="Add new client"> Добавить <i class="fas fa-plus-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    @endif


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if (empty($clients))
        @if (Request::get('q'))
            <p>Поиск по данному запросу не дал результатов.</p>
        @else
            <p>Данные о клиентах отсутствуют.</p>
        @endif
    @else
        <table class="table table-bordered table-responsive clients-table">
            <thead class="thead-light">
                <tr>
                    <th class="d-none d-sm-table-cell">ID</th>
                    <th class="d-none d-sm-table-cell">Аватар</th>
                    <th>Полное имя</th>
                    <th>Описание</th>
                    <th>Платеж</th>
                    <th class="d-none d-sm-table-cell">Дата добавления</th>
                    <th width="160">Действия</th>
                </tr>
            </thead>
            @foreach ($clients as $client)
                <tr>
                    <td class="d-none d-sm-table-cell">{{ $client->id }}</td>
                    <td class="d-none d-sm-table-cell"><div class="avatar" style="background-image: url({{ $client->avatar}})">&nbsp;</div></td>
                    <td>{{ $client->first_name }} {{ $client->last_name }}</td>
                    <td>{{ $client->description }}</td>
                    <td>{{ $client->monthly_fee }} ₽</td>
                    <td class="d-none d-sm-table-cell">{{ $client->created_at->format('d.m.Y, H:i') }} </td>
                    <td align="center">
                        <form class="pt-3" action="{{ route('clients.destroy',$client->id) }}" method="POST">

                            <a href="{{ route('clients.show',$client->id) }}" data-toggle="tooltip" data-placement="top" title="Просмотр" class="btn btn-primary"><i class="fas fa-eye text-white fa-sm"></i>
                            </a>
                            <a href="{{ route('clients.edit',$client->id) }}" data-toggle="tooltip" data-placement="top" title="Редактирование" class="btn btn-warning"><i class="fas fa-edit text-black fa-sm"></i>
                            </a>


                            @csrf
                            @method('DELETE')

                            <button type="submit" data-toggle="tooltip" data-placement="top" title="Удалить" class="btn btn-danger">
                                <i class="fas fa-trash fa-sm text-white"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

    {!! $clients->links("pagination::bootstrap-4") !!}

@endsection
