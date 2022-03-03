@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (Auth::user()->status == 1)
                    <div class="panel-group" id="sn-sidebar" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default" id="social-network-menu">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                    <a class="" role="button" data-toggle="collapse" data-parent="#sn-sidebar"
                                        href="#sn-sidebar-collapse" aria-expanded="true"
                                        aria-controls="sn-sidebar-collapse">Psicométricos</a>
                                </h4>
                            </div>
                            <div id="sn-sidebar-collapse" class="panel-collapse collapse in " role="tabpanel">
                                <div class="panel-body">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li>

                                            <a href="{{ route('testHabilidades') }}">
                                                <i class="fad fa-file-alt"></i> Test de Habilidades
                                            </a>
                                        </li>
                                        <li>

                                            <a href="{{ route('testEmprendedor') }}">
                                                <i class="fad fa-file-alt"></i> Test de Emprendedor
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                @endif

                <div>
                    <div>

                        <div class="panel-group" id="sn-sidebar" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default" id="social-network-menu">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse"
                                            data-parent="#sn-sidebar" href="#sn-sidebar-collapse" aria-expanded="true"
                                            aria-controls="sn-sidebar-collapse">Reportes</a>
                                    </h4>
                                </div>
                                <div id="sn-sidebar-collapse" class="panel-collapse collapse in " role="tabpanel">
                                    <div class="panel-body">
                                        <ul class="nav nav-pills nav-stacked">

                                            @if (Auth::user()->status == 5)
                                                <li>
                                                    <a href="/reporteEstudiante2/{{ Auth::user()->id }}">
                                                        <i class="fad fa-file-excel"></i> Mi reporte de Habilidades Blandas
                                                    </a>
                                                </li>
                                                <li>

                                                    <a href="/reporteEstudiante/{{ Auth::user()->id }}">
                                                        <i class="fad fa-file-excel"></i> Mi reporte de Perfil Emprendedor
                                                    </a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ route('vista.reportes2') }}">
                                                        <i class="fad fa-file-excel"></i> Reporte de Habilidades
                                                    </a>
                                                </li>
                                                <li>

                                                    <a href="{{ route('vista.reportes') }}">
                                                        <i class="fad fa-file-excel"></i> Reporte de Emprendedor
                                                    </a>
                                                </li>
                                            @endif


                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @if (Auth::user()->status == 1)
                            <div class="panel-group" id="sn-sidebar" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default" id="social-network-menu">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title">
                                            <a class="" role="button" data-toggle="collapse"
                                                data-parent="#sn-sidebar" href="#sn-sidebar-collapse" aria-expanded="true"
                                                aria-controls="sn-sidebar-collapse">Intentos</a>
                                        </h4>
                                    </div>
                                    <div id="sn-sidebar-collapse" class="panel-collapse collapse in " role="tabpanel">
                                        <div class="panel-body">
                                            <ul class="nav nav-pills nav-stacked">

                                                <li>
                                                    <a href="{{ route('vista.intentos') }}">
                                                        <i class="fad fa-file-excel"></i> Habilitar Intentos
                                                    </a>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endif


                    </div>
                </div>



            </div>
        @endsection
