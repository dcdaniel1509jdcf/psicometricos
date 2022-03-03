<body class="page_origin_">
    <!-- START MAIN -->
    <main id="main" dir="ltr" class="section-platform_admin ">
    <noscript>Su navegador no tiene activado JavaScript.
Chamilo se sirve de JavaScript para proporcionar un interfaz más dinámico. Es probable que muchas prestaciones sigan funcionando pero otras no lo harán, especialmente las relacionadas con la usabilidad. Le recomendamos que cambie la configuración de su navegador y recargue esta página.</noscript>


                            <!-- START HEADER -->
                <header id="cm-header">
                    <div id="navigation" class="notification-panel">


</div>
    <!-- Topbar -->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-3">
                        <div class="logo">
                <a href="http://localhost/chamilo/index.php"  ><img title="My campus" class="img-responsive" id="header-logo" src="http://localhost/chamilo/web/css/themes/chamilo/images/header-logo.png" alt="My Organisation"  /></a>
            </div>
        </div>
        <div class="col-xs-12 col-md-9">
            <div class="row">
                <div class="col-sm-4">
                                    </div>
                <div class="col-sm-3">
                                    </div>
                <div class="col-sm-5">
                    <ol class="header-ol">
                                                <li>
                            <div class="section-notifications">
                                                                    <ul id="notifications" class="nav nav-pills pull-right">
                                    </ul>
                                                            </div>
                        </li>
                        <li>

                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fixed navbar -->
    <script>
        $(function () {
            $.get('http://localhost/chamilo/main/inc/ajax/message.ajax.php?a=get_count_message', function(data) {
                var countNotifications = (data.ms_friends + data.ms_groups + data.ms_inbox);
                if (countNotifications === 0 || isNaN(countNotifications)) {
                    $("#count_message_li").addClass('hidden');
                } else {
                    $("#count_message_li").removeClass('hidden');
                    $("#count_message").append(countNotifications);
                }
            });
        });
    </script>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="pull-right  navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

                        <a class="navbar-brand" href="http://localhost/chamilo/"> <em class="fa fa-home"></em> </a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

                                            <li class="homepage ">
                            <a href="http://localhost/chamilo/index.php"  title="Página principal">
                                Página principal
                            </a>
                        </li>

                                            <li class="my-course ">
                            <a href="http://localhost/chamilo/user_portal.php?nosession=true"  title="Mis cursos">
                                Mis cursos
                            </a>
                        </li>

                                            <li class="agenda ">
                            <a href="http://localhost/chamilo/main/calendar/agenda_js.php?type=personal"  title="Mi agenda">
                                Mi agenda
                            </a>
                        </li>

                                            <li class="my-space ">
                            <a href="http://localhost/chamilo/main/mySpace/"  title="Informes">
                                Informes
                            </a>
                        </li>

                                            <li class="social-network ">
                            <a href="http://localhost/chamilo/main/social/home.php"  title="Red social">
                                Red social
                            </a>
                        </li>

                                            <li class="dashboard ">
                            <a href="http://localhost/chamilo/main/dashboard/index.php"  title="Panel de control">
                                Panel de control
                            </a>
                        </li>

                                            <li class="admin active">
                            <a href="http://localhost/chamilo/main/admin/"  title="Administración">
                                Administración
                            </a>
                        </li>
                                                </ul>
                            <ul class="nav navbar-nav navbar-right">
                                                                                            <li id="count_message_li" class="pull-left " style="float: left !important;" aria-expanded="true">
                                <a href="http://localhost/chamilo/main/messages/inbox.php">
                                    <span id="count_message" class="badge badge-warning"></span>
                                </a>
                            </li>
                            <li class="dropdown avatar-user" style="float:right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false">
                                    <img class="img-circle" src="http://localhost/chamilo/main/img/icons/32/unknown.png" alt="Test, Daniel"/>
                                    <span class="username-movil">Test, Daniel</span>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="user-header">
                                        <div class="text-center">
                                            <a href="http://localhost/chamilo/main/social/home.php">
                                                <img class="img-circle" src="http://localhost/chamilo/main/img/icons/64/unknown.png" alt="Test, Daniel"/>
                                                <p class="name">Test, Daniel</p>
                                            </a>
                                            <p><em class="fa fa-envelope-o" aria-hidden="true"></em> postmaster@localhost.localdomain</p>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                                                            <li class="user-body">
                                            <a title="Bandeja de entrada" href="http://localhost/chamilo/main/messages/inbox.php">
                                                <em class="fa fa-envelope" aria-hidden="true"></em> Bandeja de entrada
                                            </a>
                                        </li>


                                                                            <li class="user-body">
                                            <a title="Mis certificados" href="http://localhost/chamilo/main/gradebook/my_certificates.php">
                                                <em class="fa fa-graduation-cap"
                                                    aria-hidden="true"></em> Mis certificados
                                            </a>
                                        </li>

                                    <li class="user-body">
                                        <a id="logout_button" title="Salir" href="http://localhost/chamilo/index.php?logout=logout&uid=1">
                                            <em class="fa fa-sign-out"></em> Salir
                                        </a>
                                    </li>
                                </ul>
                            </li>

                                    </ul>
                    </div><!--/.nav-collapse -->
    </div>
</nav>
            <div class="nav-tools">

        </div>
                    </header>


            <!-- START CONTENT -->
            <section id="cm-content">
                <div class="container">
                                            <!-- TOOLS SHOW COURSE -->
                        <div id="cm-tools" class="nav-tools">

                        </div>
                        <!-- END TOOLS SHOW COURSE -->




    <div class="row">
        <div class="col-xs-12 col-md-12">




                                                <section id="main_content">

<script>
    $(document).ready(function () {

        setTimeout(function(){
            $.ajax({
                url: 'http://localhost/chamilo/main/inc/ajax/admin.ajax.php?a=version',
                success: function (version) {
                    $(".admin-block-version").html(version);
                }
            });
        }, 3000);

                    (function (CKEDITOR) {
                CKEDITOR.replace('extra_content');

                var extraContentEditor = CKEDITOR.instances.extra_content;

                $('button.admin-edit-block').on('click', function (e) {
                    e.preventDefault();

                    var $self = $(this);

                    var extraContent = $.ajax('http://localhost/chamilo/main/inc/ajax/admin.ajax.php', {
                        type: 'post',
                        data: {
                            a: 'get_extra_content',
                            block: $self.data('id')
                        }
                    });

                    $.when(extraContent).done(function (content) {
                        extraContentEditor.setData(content);
                        $('#extra-block').val($self.data('id'));
                        $('#modal-extra-title').text($self.data('label'));

                        $('#modal-extra').modal('show');
                    });
                });
            })(window.CKEDITOR);

                            $
                    .ajax('http://localhost/chamilo/main/inc/ajax/admin.ajax.php?a=get_latest_news')
                    .then(function (response) {
                        if (!response.length) {
                            return;
                        }

                        $('#chamilo-news').show(150);
                        $('#chamilo-news-content').html(response);
                    });
                        });
</script>

<section id="settings" class="row">
                            <div id="tabs-1" class="settings-block col-md-6">
                <div class="panel panel-default block-admin-users">
                    <div class="panel-heading">
                        <img src="http://localhost/chamilo/main/img/icons/32/members.png" alt="Usuarios" title="Usuarios"  /> Usuarios
                                                    <button type="button" class="btn btn-link btn-sm admin-edit-block pull-right"
                                    data-label="Usuarios" data-id="block-admin-users">
                                <img src="http://localhost/chamilo/main/img/icons/22/edit.png" width="22" height="22" alt="Editar"
                                     title="Editar"/>
                            </button>
                                            </div>
                    <div class="panel-body">
                        <div style="display: block;">

    <form method="get" class="form-inline" action="user_list.php">
        <div class="form-group">
            <input class="form-control" type="text" name="keyword" value=""
             aria-label="Buscar">
            <button class="btn btn-default" type="submit">
                <em class="fa fa-search"></em> Buscar
            </button>
        </div>
    </form>
                        </div>
                                                    <div class="block-items-admin">
                                <ul class="list-items-admin">
                                                                            <li>
                                            <a href="user_list.php">
                                                Lista de usuarios
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="user_add.php">
                                                Añadir usuarios
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="user_export.php">
                                                Exportar usuarios a un fichero XML/CSV
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="user_import.php">
                                                Importar usuarios desde un fichero XML/CSV
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="user_update_import.php">
                                                Editar usuarios por CSV
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="user_anonymize_import.php">
                                                Anonimizar usuarios por CSV
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="extra_fields.php?type=user">
                                                Gestionar los campos de usuario
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="usergroups.php">
                                                Clases
                                            </a>
                                        </li>
                                                                    </ul>
                            </div>


                                            </div>
                </div>
            </div>
                                <div id="tabs-2" class="settings-block col-md-6">
                <div class="panel panel-default block-admin-courses">
                    <div class="panel-heading">
                        <img src="http://localhost/chamilo/main/img/icons/32/course.png" alt="Cursos" title="Cursos"  /> Cursos
                                                    <button type="button" class="btn btn-link btn-sm admin-edit-block pull-right"
                                    data-label="Cursos" data-id="block-admin-courses">
                                <img src="http://localhost/chamilo/main/img/icons/22/edit.png" width="22" height="22" alt="Editar"
                                     title="Editar"/>
                            </button>
                                            </div>
                    <div class="panel-body">
                        <div style="display: block;">
                             <form method="get" class="form-inline" action="course_list.php">
            <div class="form-group">
                <input class="form-control" type="text" name="keyword" value=""
                 aria-label="Buscar">
                <button class="btn btn-default" type="submit">
                    <em class="fa fa-search"></em> Buscar
                </button>
            </div>
        </form>
                        </div>
                                                    <div class="block-items-admin">
                                <ul class="list-items-admin">
                                                                            <li>
                                            <a href="course_list.php">
                                                Lista de cursos
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="course_add.php">
                                                Crear un curso
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="course_export.php">
                                                Exportar cursos
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="course_import.php">
                                                Importar cursos desde un fichero
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="course_category.php">
                                                Categorías de cursos
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="subscribe_user2course.php">
                                                Inscribir usuarios en un curso
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="course_user_import.php">
                                                Importar usuarios a un curso desde un fichero
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="extra_fields.php?type=course">
                                                Gestor de campos de cursos
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="questions.php">
                                                Preguntas
                                            </a>
                                        </li>
                                                                    </ul>
                            </div>


                                            </div>
                </div>
            </div>
                                <div id="tabs-3" class="settings-block col-md-6">
                <div class="panel panel-default block-admin-platform">
                    <div class="panel-heading">
                        <img src="http://localhost/chamilo/main/img/icons/32/platform.png" alt="Plataforma" title="Plataforma"  /> Plataforma
                                                    <button type="button" class="btn btn-link btn-sm admin-edit-block pull-right"
                                    data-label="Plataforma" data-id="block-admin-platform">
                                <img src="http://localhost/chamilo/main/img/icons/22/edit.png" width="22" height="22" alt="Editar"
                                     title="Editar"/>
                            </button>
                                            </div>
                    <div class="panel-body">
                        <div style="display: block;">
                             <form method="get" action="settings.php" class="form-inline">
            <div class="form-group">
                <input class="form-control"
                type="text"
                name="search_field" value=""
                aria-label="Buscar" >
                <input type="hidden" value="search_setting" name="category">
                <button class="btn btn-default" type="submit">
                    <em class="fa fa-search"></em> Buscar
                </button>
                <a class="btn btn-default" href="psicometrico/app/params">
                    <em class="fa fa-user"></em>
                </a>
            </div>
        </form>
                        </div>
                                                    <div class="block-items-admin">
                                <ul class="list-items-admin">
                                                                            <li>
                                            <a href="settings.php">
                                                Parámetros de configuración de Chamilo
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="languages.php">
                                                Idiomas
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="settings.php?category=Plugins">
                                                Plugins
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="settings.php?category=Regions">
                                                Regiones
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="system_announcements.php">
                                                Anuncios de la plataforma
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="http://localhost/chamilo/main/calendar/agenda_js.php?type=admin">
                                                Agenda global
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="configure_homepage.php">
                                                Configuración de la página principal
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="configure_inscription.php">
                                                Configuración de la página de registro
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="statistics/index.php">
                                                Estadísticas
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="http://localhost/chamilo/main/mySpace/company_reports.php">
                                                Informes
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="http://localhost/chamilo/main/admin/teacher_time_report.php">
                                                Reporte de tiempo de profesores
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="extra_field_list.php">
                                                Campos extras
                                            </a>
                                        </li>
                                                                    </ul>
                            </div>


                                            </div>
                </div>
            </div>
                                <div id="tabs-4" class="settings-block col-md-6">
                <div class="panel panel-default block-admin-sessions">
                    <div class="panel-heading">
                        <img src="http://localhost/chamilo/main/img/icons/32/session.png" alt="Sesiones de formación" title="Sesiones de formación"  /> Sesiones de formación
                                                    <button type="button" class="btn btn-link btn-sm admin-edit-block pull-right"
                                    data-label="Sesiones de formación" data-id="block-admin-sessions">
                                <img src="http://localhost/chamilo/main/img/icons/22/edit.png" width="22" height="22" alt="Editar"
                                     title="Editar"/>
                            </button>
                                            </div>
                    <div class="panel-body">
                        <div style="display: block;">
                             <form method="GET" class="form-inline" action="http://localhost/chamilo/main/session/session_list.php">
                    <div class="form-group">
                        <input class="form-control"
                        type="text"
                        name="keyword"
                        value=""
                        aria-label="Buscar">
                        <button class="btn btn-default" type="submit">
                            <em class="fa fa-search"></em> Buscar
                        </button>
                    </div>
                </form>
                        </div>
                                                    <div class="block-items-admin">
                                <ul class="list-items-admin">
                                                                            <li>
                                            <a href="http://localhost/chamilo/main/session/session_list.php">
                                                Lista de sesiones de formación
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="http://localhost/chamilo/main/session/session_add.php">
                                                Crear una sesión
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="http://localhost/chamilo/main/session/session_category_list.php">
                                                Categorías de sesiones de formación
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="http://localhost/chamilo/main/session/session_import.php">
                                                Importar sesiones en formato XML/CSV
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="http://localhost/chamilo/main/session/session_import_drh.php">
                                                Importar lista de directores RRHH en las sesiones
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="http://localhost/chamilo/main/session/session_export.php">
                                                Exportar sesiones en formato XML/CSV
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="../coursecopy/copy_course_session.php">
                                                Copiar cursos de una sesión a otra
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="../coursecopy/move_users_from_course_to_session.php">
                                                Mover resultados de usuarios del curso base a una sesión
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="career_dashboard.php">
                                                Carreras y promociones
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="extra_fields.php?type=session">
                                                Gestionar los campos de sesión
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="resource_sequence.php">
                                                Secuencialización de recursos
                                            </a>
                                        </li>
                                                                    </ul>
                            </div>


                                            </div>
                </div>
            </div>
                                <div id="tabs-5" class="settings-block col-md-6">
                <div class="panel panel-default block-admin-settings">
                    <div class="panel-heading">
                        <img src="http://localhost/chamilo/main/img/icons/32/settings.png" alt="Sistema" title="Sistema"  /> Sistema
                                            </div>
                    <div class="panel-body">
                        <div style="display: block;">

                        </div>
                                                    <div class="block-items-admin">
                                <ul class="list-items-admin">
                                                                            <li>
                                            <a href="archive_cleanup.php">
                                                Limpieza de caché y archivos temporales
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="special_exports.php">
                                                Exportaciones especiales
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="system_status.php">
                                                Información del sistema
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="http://localhost/chamilo/main/ticket/tickets.php">
                                                Tickets
                                            </a>
                                        </li>
                                                                    </ul>
                            </div>


                                            </div>
                </div>
            </div>
                                <div id="tabs-6" class="settings-block col-md-6">
                <div class="panel panel-default block-admin-skills">
                    <div class="panel-heading">
                        <img src="http://localhost/chamilo/main/img/icons/32/skill-badges.png" alt="Competencias" title="Competencias"  /> Competencias
                                            </div>
                    <div class="panel-body">
                        <div style="display: block;">

                        </div>
                                                    <div class="block-items-admin">
                                <ul class="list-items-admin">
                                                                            <li>
                                            <a href="skills_wheel.php">
                                                Rueda de competencias
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="skills_import.php">
                                                Importar competencias
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="skill_list.php">
                                                Gestionar las competencias
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="skill.php">
                                                Administrar niveles de competencias
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="http://localhost/chamilo/main/social/skills_ranking.php">
                                                Rango de competencias
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="skills_gradebook.php">
                                                Competencias y evaluaciones
                                            </a>
                                        </li>
                                                                    </ul>
                            </div>


                                            </div>
                </div>
            </div>
                                <div id="tabs-7" class="settings-block col-md-6">
                <div class="panel panel-default block-admin-platform">
                    <div class="panel-heading">
                        <img src="http://localhost/chamilo/main/img/icons/32/platform.png" alt="Plataforma" title="Plataforma"  /> Protección de datos personales
                                            </div>
                    <div class="panel-body">
                        <div style="display: block;">

                        </div>
                                                    <div class="block-items-admin">
                                <ul class="list-items-admin">
                                                                            <li>
                                            <a href="http://localhost/chamilo/main/admin/user_list_consent.php">
                                                Lista de usuarios
                                            </a>
                                        </li>
                                                                    </ul>
                            </div>


                                            </div>
                </div>
            </div>
                                <div id="tabs-8" class="settings-block col-md-6">
                <div class="panel panel-default block-admin-chamilo">
                    <div class="panel-heading">
                        <img src="http://localhost/chamilo/main/img/icons/32/platform.png" alt="Chamilo.org" title="Chamilo.org"  /> Chamilo.org
                                            </div>
                    <div class="panel-body">
                        <div style="display: block;">

                        </div>
                                                    <div class="block-items-admin">
                                <ul class="list-items-admin">
                                                                            <li>
                                            <a href="https://chamilo.org/">
                                                Página principal de Chamilo
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="https://docs.chamilo.org/v/1.11.x-es/">
                                                Manuales del usuario
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="https://forum.chamilo.org/">
                                                Foro de Chamilo
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="../../documentation/installation_guide.html">
                                                Guía de instalación
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="../../documentation/changelog.html">
                                                Cambios en la última versión
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="../../documentation/credits.html">
                                                Lista de contribuidores
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="../../documentation/security.html">
                                                Guía de seguridad
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="../../documentation/optimization.html">
                                                Guía de optimización
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="https://chamilo.org/extensions">
                                                Servicios de Chamilo
                                            </a>
                                        </li>
                                                                            <li>
                                            <a href="https://chamilo.org/providers">
                                                Proveedores oficiales de Chamilo
                                            </a>
                                        </li>
                                                                    </ul>
                            </div>


                                            </div>
                </div>
            </div>
                                <div id="tabs-9" class="settings-block col-md-6">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <img src="http://localhost/chamilo/main/img/icons/32/platform.png" alt="Chamilo.org" title="Chamilo.org"  /> Comprobar versión
                                            </div>
                    <div class="panel-body">
                        <div style="display: block;">

                        </div>
                                                    <div class="block-items-admin">
                                <ul class="list-items-admin">
                                                                    </ul>
                            </div>

                                                    <div>
                                <div class="admin-block-version"></div>
                            </div>

                                            </div>
                </div>
            </div>
            </section>

    <section id="chamilo-news" style="display: none;">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div id="chamilo-news-content"></div>
        </div>
    </section>

    <div class="modal fade" id="modal-extra">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modal-extra-title">Blocks</h4>
                </div>
                <div class="modal-body">
                    <form id="block-extra-data" class="" action="#" method="post" name="block_extra_data">
        <fieldset>
            <div class="form-group"><textarea id="extra_content" class="form-control" name="extra_content"></textarea></div>
                <button class=" btn btn-primary "  name="submit_extra_content" type="submit" id="block_extra_data_submit_extra_content"><em class="fa fa-check"></em> Guardar</button>
        </fieldset>
        <input name="_qf__block_extra_data" type="hidden" value="" id="block_extra_data__qf__block_extra_data" />
<input id="extra-block" name="block" type="hidden" value="" />

        </form>
                </div>
            </div>
        </div>
    </div>

                    </section>
                                    </div>
    </div>


                    </div>
            </section>
            <!-- END CONTENT -->

                        <!-- START FOOTER -->
            <footer class="footer">
                <div class="container">
        <section class="sub-footer">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                                                            </div>
            <div class="col-xs-12 col-md-4">
                            </div>
            <div class="col-xs-12 col-md-4 text-right">
                                    <div class="administrator-name">
                        Responsable : <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#112;&#111;&#115;&#116;&#109;&#97;&#115;&#116;&#101;&#114;&#64;&#108;&#111;&#99;&#97;&#108;&#104;&#111;&#115;&#116;&#46;&#108;&#111;&#99;&#97;&#108;&#100;&#111;&#109;&#97;&#105;&#110;" class="clickable_email_link">Test, Daniel</a>
                    </div>
                                                    <div class="software-name">
                        <a href="http://localhost/chamilo/" target="_blank">
                            Creado con Chamilo
                        </a>&copy; 2021
                    </div>
                                            </div>
        </div>
            </section>
</div>

            </footer>
            <!-- END FOOTER -->

        </main>
    <!-- END MAIN -->

    <div class="modal fade" id="global-modal" tabindex="-1" role="dialog" aria-labelledby="global-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="global-modal-title">&nbsp;</h4>
            </div>
            <div class="modal-body" id="global-modal-body">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="expand-image-modal" tabindex="-1" role="dialog" aria-labelledby="expand-image-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="expand-image-modal-title">&nbsp;</h4>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="confirm-delete-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="confirm-delete-title">Eliminar</h4>
            </div>

            <div class="modal-body">
                <p class="debug-url"></p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <a id="delete_item" class="btn btn-danger btn-ok">Eliminar</a>
            </div>
        </div>
    </div>
</div>
</body>
