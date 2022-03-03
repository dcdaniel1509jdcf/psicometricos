@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">


            <div class="col-md-10">

                @if (session('message'))



                    <div class="alert alert-success alert-dismissible">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                        <h6><i class="icon fas fa-info"></i> {{ session('message') }} !</h6>



                    </div>

                @endif

                <div class="card">
                    <div class="card-header h3">{{ __('Descarga de Reportes, Emprendedor') }}</div>

                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">

                                <label>Colegio</label>

                                <select name="colegios" class="form-control" id="colegios">

                                    <option value="">SELECCIONE</option>

                                    @foreach ($colegios as $col)

                                        <option value="{{ $col->id }}">
                                            {{ $col->name }}
                                        </option>

                                    @endforeach

                                </select>

                            </div>
                        </div>

                        <div class="col-md-3" id="divcursos">

                            <!-- select -->

                            <div class="form-group">

                                <label>Cursos</label>

                                <select name="cursos" class="form-control" id="cursos" required>

                                    <option value="">SELECCIONE</option>

                                </select>

                            </div>

                        </div>


                        <div class="col-md-3" id="divactivar">


                        </div>
                    </div>


                    <div class="card-body">



                        <div class="row">

                            <div id="upload_data">

                            </div>


                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#divactivar").hide()
            $("#divtipo").hide()
            $("#divcursos").hide()
            $("#estudiantes").hide()
            var base_url = window.location.origin;

            $('#dbtable').dataTable({

                order: [
                    [0, "desc"]
                ],

                "language": {

                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"

                },

                dom: 'Bfrtip',

                buttons: [

                    'copy', 'csv', 'excel', 'pdf', 'print'

                ]

            });




            $("#colegios").change(function() {

                if ($("#colegios").val() == "") {

                    emptySelect('cursos');

                } else {

                    $id = this.value;

                    $.get(base_url + "/cursos/", {
                        id: $id
                    }, function(data) {

                        // fillSelect('subestado', data);

                        console.log(data)

                        emptySelect('cursos');
                        var $select = $('#cursos');
                        $.each(data, function(id, name) {
                            $select.append('<option value=' + name.id + '>' + name.title +
                                '</option>');
                        });

                    });

                }
                $("#divcursos").show()

            });


            $("#cursos").change(function() {

                if ($("#cursos").val() == "") {

                    emptySelect('estudiantes');

                } else {

                    $id = this.value;
                    load_busqueda($("#colegios").val(), $("#cursos").val());
                    $.get(base_url + "/estudiantes/", {
                        idCol: $("#colegios").val(),
                        idCur: $("#cursos").val()
                    }, function(data) {

                        emptySelect('estudiantes');
                        var $select = $('#estudiantes');
                        $.each(data, function(id, name) {
                            $select.append('<option value=' + name.id + '>' + name
                                .lastname + ' ' + name.firstname +
                                '</option>');
                        });

                    });

                }
                $("#divactivar").show()
                $('#divactivar').html("<a class='btn btn-danger' href='/reporteTodos/todos/?idCol="+$("#colegios").val()+"&idCur="+$("#cursos").val()+"'>Descargar Curso </a>");

            });
            $("#tipo").change(function() {

                $("#divactivar").show()
            });
            $("#btnGuardar").click(function() {

                if ($("#colegios").val() == "" && $("#cursos").val() == "") {
                    alert("Colegio y Cursos Incorrecto")
                }
                if ($("#colegio").val() == "" && $("#cursos").val() != "") {
                    alert("Colegio Incorrecto")
                }

                if ($("#colegio").val() != "" && $("#cursos").val() == "") {
                    alert("Curso Incorrecto")
                }
                if ($("#colegios").val() != "" && $("#cursos").val() != "") {



                    $.get(base_url + "/reporteTodos/todos/", {
                        idCol: $("#colegios").val(),
                        idCur: $("#cursos").val(),


                    }, function(data) {

                        console.log(data)

                    });

                }
                load_busqueda($("#colegios").val(), $("#cursos").val());

            });

            function load_busqueda(idCol, idCur) {
                $.ajax({
                    url: base_url + "/reporteGeneral/",
                    data: {
                        idCol: idCol,
                        idCur: idCur
                    },
                    success: function(data) {
                        console.log(data)
                        $('#upload_data').html(data);

                    }
                })
            }

            function emptySelect(idSelect) {

                var select = document.getElementById(idSelect);

                var option = document.createElement('option');

                var NumberItems = select.length;



                while (NumberItems > 0) {

                    NumberItems--;

                    select.remove(NumberItems);

                }

                option.text = 'SELECCIONE';

                option.value = ''

                select.add(option, null);

            }
        });
    </script>


@endsection
