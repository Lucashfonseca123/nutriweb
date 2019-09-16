<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/maxcdn.css">
   <!-- <link rel="stylesheet" href="css/font.css"> -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</head>
<body>
<!-- Início Menu -->
<div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand">
                <a href="/relatorio">NUTRIWEB</a>
                <div id="close-sidebar">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="sidebar-header">
                <div class="user-pic">
                    <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                         alt="User picture" style="height: 80px; width: 60px">
                </div>
                <div class="user-info">
                     <span class="user-name">{{ Auth::user()->name }}
                     </span>
                     <span class="user-role">Administrador</span>
                     <span class="user-status">
                        <i class="fa fa-circle"></i>
                     <span>Online</span>
                     </span>
                </div>
            </div>
            <!-- sidebar-header  -->
            <div class="sidebar-search">
                <div>
                    <div class="input-group">
                        <button class="btn btn-success" type="button" style="cursor: pointer; margin: auto" onclick="window.open('/alimentos', '', 'width=600,height=300')">Buscar alimentos</button>
                    </div>
                </div>
            </div>
            <!-- sidebar-search  -->
            <div class="sidebar-menu">
                <ul>
                    <li class="header-menu">
                        <span>General</span>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>Atendimento</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li title="Adicione novos pacientes">
                                    <a href="cadastro">Novo paciente
                                    </a>
                                </li>
                                <li title="Selecione pacientes para a reconsulta">
                                    <a href="reconsulta">Reconsulta</a>
                                </li>
                                <li title="Analise a situação do paciente">
                                    <a href="relatorio">Relatório Paciente</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-globe"></i>
                            <span>Dietas</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li title="Adicione grupos nas refeições, crie seu cardápio">
                                    <a href="cardapio">Criar cardápios</a>
                                </li>
                                <li title="Selecione alimentos para criar grupos">
                                    <a href="grupos">Criar grupos</a>
                                </li>
                                <li title="Revise ou edite seus cardápios">
                                    <a href="editcardapio">Editar cardapio</a>
                                </li>
                                <li title="Adicionar alimentos">
                                    <a href="addalimentos">Adicionar alimentos</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown" title="Analise a situação do paciente">
                        <a href="#">
                            <i class="fa fa-globe"></i>
                            <span>Paciente</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li title="Adicione grupos nas refeições, crie seu cardápio">
                                    <a href="{{route('infopaciente')}}">Relatório</a>
                                </li>
                                {{--<li title="Adicione grupos nas refeições, crie seu cardápio">
                                    <a href="/editinfo">Editar informações</a>
                                </li>--}}
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->
        <div class="sidebar-footer">
            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </nav>
    <!-- sidebar-wrapper  -->
    <!-- Fim Menu -->
    @yield('content')
</div>
<script src="js/script.js"></script>
<script src="js/cadastro.js"></script>
<script src="js/pop_up.js"></script>

</body>
</html>
