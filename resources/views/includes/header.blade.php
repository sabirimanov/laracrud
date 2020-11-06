<html>
<head>
    <title>Laravel CRUD/CRM task - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    @if (request()->is('/'))
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" />
    @endif
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="/">CRM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="/">Главная</a>
                </li>
                <li class="nav-item {{ request()->is('clients*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('clients.index') }}">Клиенты</a>
                </li>
                <li class="nav-item {{ request()->is('cabinet*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('auth/github') }}">Войти через GitHub</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-md-0" action="{{ route('clients.index') }}">
                <input class="form-control" type="text" name="q" placeholder="Поиск по клиентам">
            </form>
        </div>
    </nav>
