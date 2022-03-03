@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-9 col-md-push-3">
        <div class="page-content">




                                                                        </div>
    </div>
    <div class="col-md-3 col-md-pull-9">
        <div class="sidebar">

                        <div id="login-block" class="panel panel-default">
        <div class="panel-body">
        <div class="btn-group">
          </div>

          <form method="POST" action="{{ route('login') }}" >
            @csrf

    <fieldset>

                    <div class="input-group">
                        <div class="input-group-addon">


            <em class="fa fa-user fa-fw"></em>
            </div>

                        <input id="username" autofocus="autofocus" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Nombre de usuario" autofocus>

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <br>
                    <div class="input-group">
                        <div class="input-group-addon">
            <em class="fa fa-lock fa-fw"></em>
            </div>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Contraseña" >

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn-block btn btn-primary">
                        {{ __('Ingresar') }}
                    </button>

            <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10"></div>
</div>
    </fieldset>

    </form><div>

    </div>



                    </div>
    </div>






        </div>
    </div>
</div>



</div>
@endsection
