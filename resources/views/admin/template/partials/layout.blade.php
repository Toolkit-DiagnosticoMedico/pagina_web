<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    {!!Html::style('plugins/bootstrap/css/bootstrap.min.css')!!}
    {!!Html::style('plugins/bootstrap/css/metisMenu.min.css')!!}
    {!!Html::style('plugins/bootstrap/css/sb-admin-2.css')!!}
    {!!Html::style('plugins/bootstrap/css/font-awesome.min.css')!!}

<link href='{{ asset('plugins/fullcalendar/fullcalendar.css') }}' rel='stylesheet' />
<link href='{{ asset('plugins/fullcalendar/fullcalendar.print.css') }}' rel='stylesheet' media='print' />

{!!Html::style('plugins/bootstrap/css/bootstrap-datetimepicker.min.css')!!}
    

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 @if(Auth::user()->id_tipo == 1)
                <a class="navbar-brand" href="{{route('admin.users.index')}}">Toolkit Administrador</a>

                 @elseif(Auth::user()->id_tipo == 2)
                 <a class="navbar-brand" href="">Toolkit Doctor</a>

                 @elseif(Auth::user()->id_tipo == 3)
                 <a class="navbar-brand" href="">Toolkit Paciente</a>
                 @endif

            </div>
            
            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> {{Auth::user()->id}} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{route('admin.auth.logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    @if(Auth::user()->id_tipo == 1)
                                    <a href="{{route('admin.users.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar Usuario</a>
                                    @elseif(Auth::user()->id_tipo == 2)
                                    <a href="{{route('admin.doctores.edit', Auth::user()->id)}}"><i class='fa fa-plus fa-fw'></i>Editar Datos</a>
                                    @elseif(Auth::user()->id_tipo == 3)
                                    <a href="{{route('admin.pacientes.edit',Auth::user()->id)}}"><i class='fa fa-plus fa-fw'></i>Editar Datos</a>
                                </li>
                                    @endif


                                    @if(Auth::user()->id_tipo == 1)
                                <li>
                                    <a href="{{route('admin.users.index')}}"><i class='fa fa-list-ol fa-fw'></i>Ver Usuarios</a>
                                </li>
                                @endif
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-file"></i> Diagnosticos Clinicos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-plus fa-fw'></i>Ver</a>
                                </li>
                                
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-child fa-fw"></i>Citas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                             @if(Auth::user()->id_tipo == 2)
                                <li>
                                    <a href="{{route('admin.citas.index')}}"><i class='fa fa-plus fa-fw'></i>Ver Citas</a>
                                </li>
                            @endif

                            @if(Auth::user()->id_tipo == 3)
                                <li>
                                    <a href="{{route('admin.citas.create')}}"><i class='fa fa-plus fa-fw'></i>Crear Cita</a>
                                </li>
                            @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
     </nav>
        <div id="page-wrapper">
            @yield('content')
        </div>
    </div>
    {!!Html::script('plugins/bootstrap/js/jquery.js')!!}
    {!!Html::script('plugins/bootstrap/js/jquery.min.js')!!}
    {!!Html::script('plugins/bootstrap/js/bootstrap.min.js')!!}
    {!!Html::script('plugins/bootstrap/js/metisMenu.min.js')!!}
    {!!Html::script('plugins/bootstrap/js/sb-admin-2.js')!!}

    {!!Html::script('plugins/bootstrap/js/bootstrap-year-calendar.min.js')!!}
    {!!Html::script('plugins/bootstrap/js/bootstrap-year-calendar.js')!!}

<script src='{{ asset('plugins/fullcalendar/moment.min.js') }}'></script>
<script src='{{ asset('plugins/fullcalendar/fullcalendar.min.js') }}'></script>

<script type="text/javascript" src="plugins/bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="plugins/bootstrap/locales/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>

</body>
</html>