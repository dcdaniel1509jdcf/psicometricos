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
                <strong>Instrucciones:</strong> <br>Lea detenidamente las afirmaciones,
                piense en una situación en concreto y escoja el número que mejor lo describa:<br><br>
                5 Siempre<br>
                4 Casi siempre<br>
                3 Rara vez<br>
                2 Casi nunca<br>
                1 Nunca<br>
            </div>
            <br>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>{{ __('Test de perfil de emprendedor') }}</strong></div>
                    <br>
                    <div class="card-body">
                        <form action="{{ route('saveEmprendedor') }}" method="post" enctype="multipart/form-data">

                            @csrf
                            @foreach ($emprendedor as $dat)
                                <div class="form-group  py-3">
                                    <label for="{{ $dat->id }}">{{ $dat->question }}</label>
                                    <select class="form-control" name="q{{ $dat->id }}"
                                        id="question{{ $dat->id }}">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            @endforeach
                            <div class="row justify-content-center">
                                <!-- {{ '$emprendedor->links()' }} -->
                            </div>
                            <label class="py-3"> </label>
                            <div class="row py-3">


                                <div class="col-xs-6 ">
                                    @if ($estado == '0')
                                        <input type="submit" value="Guardar" id="Enviar" class="btn btn-md btn-info">
                                    @endif
                                </div>
                                <div class="col-xs-6">
                                    <a href="{{ url('/') }}" class="btn btn-md btn-danger">Cancelar</a>

                                </div>


                            </div>
                            <label class="py-3"> </label>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.history.forward();
        history.forward()
    </script>
@endsection
