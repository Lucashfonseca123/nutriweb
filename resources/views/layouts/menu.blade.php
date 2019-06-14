<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
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
                     <span class="user-name">Fernanda
                        Fonseca
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
                        <input type="text" class="form-control search-menu" placeholder="Buscar alimentos...">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <span style="cursor: pointer" onclick="window.open('/alimentos', '', 'width=600,height=300')">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </span>
                        </div>
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
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar" title="Analise a situação do paciente">
                        <a href="/relatorio">
                            <i class="fa fa-globe"></i>
                            <span>Paciente</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->
        <div class="sidebar-footer">
            <a href="#">
                <i class="fa fa-bell"></i>
            </a>
            <a href="#">
                <i class="fa fa-envelope"></i>
            </a>
            <a href="#">
                <i class="fa fa-cog"></i>
            </a>
            <a href="#">
                <i class="fa fa-power-off"></i>
            </a>
        </div>
    </nav>
    <!-- sidebar-wrapper  -->
    <!-- Fim Menu -->
    @yield('content')
</div>
<script src="js/script.js"></script>
<script src="js/cadastro.js"></script>

</body>
</html>
