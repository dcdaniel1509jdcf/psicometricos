@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4 justify-content">
                @if ($estado != '0')
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-info"></i> EL Usuario ya no posee intentos disponibles</h5>
                    </div>

                @endif
                <strong>Instrucciones:</strong> <br>Lea detenidamente las afirmaciones, piense en una situación en concreto
                y escoja el número que mejor lo describa:<br><br>
                5 Siempre<br>
                4 Casi siempre<br>
                3 Rara vez<br>
                2 Casi nunca<br>
                1 Nunca
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Test de perfil habilidades') }}</div>

                    <div class="card-body">
                        <form action="{{ route('saveHabilidades') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @foreach ($habilidades as $dat)
                                <div class="form-group py-3">
                                    <label for="{{ $dat->id }}">{{ $dat->question }}</label>
                                    <select class="form-control" name="q{{ $dat->id }}" id="q{{ $dat->id }}">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            @endforeach
                            <div class="row justify-content-center">
                                <!-- {{ '$habilidades->links()' }} -->
                            </div>
                            <div class="row ">
                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    @if ($estado == '0')
                                        <input type="submit" value="Guardar" id="Enviar" class="btn btn-md btn-info">
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <a href="{{ url('/') }}" class="btn btn-md btn-danger">Cancelar</a>

                                </div>
                                <div class="col-md-3"></div>

                            </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        history.forward()
        window.history.forward();
    </script>
@endsection
