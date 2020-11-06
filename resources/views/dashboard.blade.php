
@include('includes.header')

@auth
<div class="alert alert-info" role="alert">
  Вы авторизовались в системе с помощью учетной записи GitHub: <strong>{{Auth::user()->name}}</strong> <a href="{{ route('logout') }}" class="float-right btn btn-sm py-0 btn-danger">Выйти <i class="fas fa-sign-out-alt fa-sm text-white"></i></a>
</div>
@endauth
    <div class="container">
      <div class="card-deck mb-5 mt-5 text-center">
        <div class="card mb-6 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Последние 10 платежей</h4>
          </div>
          <div class="card-body">
            <canvas id="sample-chart" class="my-3" width="300" height="180"></canvas>
          </div>
        </div>
        <div class="card mb-6 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Распределение платежей по клиентам</h4>
          </div>
          <div class="card-body">
            <canvas id="sample-chart-2" class="my-3" width="300" height="180"></canvas>
          </div>
        </div>
      </div>
    </div>


@include('includes.footer')
