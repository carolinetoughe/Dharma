<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dharma</title>

    <!-- Custom fonts for this template-->
    <link href="dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="dashboard/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        /**
 * Eric Meyer's Reset CSS v2.0+ (https://meyerweb.com/eric/tools/css/reset/)
 * http://cssreset.com
 */


/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
	display: block;
}
/* body {
	line-height: 1.5;
} */
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-spacing: 2px;
}
.clearfix:before,
.clearfix:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

.clearfix:after {
    clear: both;
}
/**
 * For IE 6/7 only
 * Include this rule to trigger hasLayout and contain floats.
 */
.clearfix {
    *zoom: 1;
}
a, a:hover {
    text-decoration: none;
}
.img-responsive {
    max-width: 100%;
    height: auto;
}

body{
    font-family: Arial, Helvetica, sans-serif;
     -webkit-user-select: none;
     -moz-user-select: none;
     -ms-user-select: none;
     user-select: none;
}

.elegant-calencar {
    /* width: 25em; */
    height: 32em;
    border: 1px solid #c9c9c9;
    -webkit-box-shadow: 0 0 5px #c9c9c9;
    box-shadow: 0 0 5px #c9c9c9;
    text-align: center;
    margin: 4em auto;
    position: relative;
}

#header {
    font-family: 'HelveticaNeue-UltraLight', 'Helvetica Neue UltraLight', 'Helvetica Neue', Arial, Helvetica, sans-serif;
    height: 14em;
    background-color: #2a3246;
    margin-bottom: 1em;
}

.pre-button, .next-button {
    margin-top: 2em;
    font-size: 3em;
    -webkit-transition: -webkit-transform 0.5s;
    transition: transform 0.5s;
    cursor: pointer;
    width: 1em;
    height: 1em;
    line-height: 1em;
    color: #e66b6b;
    border-radius: 50%;
}

.pre-button:hover, .next-button:hover {
    -webkit-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg);
}

.pre-button:active,.next-button:active{
    -webkit-transform: scale(0.7);
    -ms-transform: scale(0.7);
    transform: scale(0.7);
}

.pre-button {
    float: left;
    margin-left: 0.5em;
}

.next-button {
    float: right;
    margin-right: 0.5em;
}

.head-info {
    float: left;
    width: 16em;
}

.head-day {
    margin-top: 30px;
    font-size: 8em;
    line-height: 1;
    color: #fff;
}

.head-month {
    margin-top: 20px;
    font-size: 2em;
    line-height: 1;
    color: #fff;
}

#calendar {
    width: 90%;
    margin: 0 auto;
}

#calendar tr {
    height: 2em;
    line-height: 2em;
}

thead tr {
    color: #e66b6b;
	font-weight: 700;
	text-transform: uppercase;
}

tbody tr {
    color: #252a25;
}

tbody td{
    width: 14%;
    border-radius: 50%;
    cursor: pointer;
    -webkit-transition:all 0.2s ease-in;
    transition:all 0.2s ease-in;
}

tbody td:hover, .selected {
    color: #fff;
    background-color: #2a3246;
    border: none;
}

tbody td:active {
    -webkit-transform: scale(0.7);
    -ms-transform: scale(0.7);
    transform: scale(0.7);
}

#today {
    background-color: #e66b6b;
    color: #fff;
    font-family: serif;
    border-radius: 50%;
}

#disabled {
    cursor: default;
    background: #fff;
}

#disabled:hover {
    background: #fff;
    color: #c9c9c9;
}

#reset {
    display: block;
    position: absolute;
    right: 0.5em;
    top: 0.5em;
    z-index: 999;
    color: #fff;
    font-family: serif;
    cursor: pointer;
    padding: 0 0.5em;
    height: 1.5em;
    border: 0.1em solid #fff;
    border-radius: 4px;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

#reset:hover {
    color: #e66b6b;
    border-color: #e66b6b;
}

#reset:active{
    -webkit-transform: scale(0.8);
    -ms-transform: scale(0.8);
    transform: scale(0.8);     
}

#header > div.next-button {
    margin-top: 82px;
}

    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="    background-color: #4e73df;
                background-image: linear-gradient(180deg,#FF1493 10%,#FF1493 100%);
                background-size: cover;
            }" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dharma</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau De Bord</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('patientliste') }}">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Patients</span>
                </a>
               
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            @can('user-list',user::class)
            <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('personnelliste') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Personnels</span>
                </a>
            </li>
            @endcan
            @can('rdv-list',rendezvous::class)
            <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('rendezvousliste') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    
                    <span>Rendez-Vous</span>
                </a>
            </li>
            @endcan
            @can('enfant-list',enfant::class)
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('enfantliste') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Enfants</span>
                </a>
            </li>
            @endcan
            @can('horaire-list',horaire::class)
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('horaireliste') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Horaires</span>
                </a>
            </li>
            @endcan
            @can('chambre-list',chambre::class)
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('chambreliste') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Chambres</span>
                </a>
            </li>
            @endcan
            @can('soin-list',soin::class)
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('soinliste') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Soins</span>
                </a>
            </li>
            @endcan
            @can('medicament-list',medicament::class)
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('medicamentliste') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Médicaments</span>
                </a>
            </li>
            @endcan
            @can('consultation-list',consultation::class)
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('consultationliste') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Consultations</span>
                </a>
            </li>
            @endcan
            @can('hospitalisation-list',hospitalisation::class)
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('hospitalisationliste') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Hospitalisations</span>
                </a>
            </li>
            @endcan
            @can('accouchement-list',accouchement::class)
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('accouchementliste') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Accouchements</span>
                </a>
            </li>
            @endcan
            @can('analyse-list',analyse::class)
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('analyseliste') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Analyses</span>
                </a>
            </li>
            @endcan
            @can('role-list',role::class)
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('roleliste') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Roles</span>
                </a>
            </li>
            @endcan
            @can('ordonnance-list',ordonnance::class)
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('ordonnanceliste') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Ordonnances</span>
                </a>
            </li>
            @endcan
            @can('fichesoin-list',fichesoin::class)
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('fichesoinliste') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>FicheS Soins</span>
                </a>
            </li>
            @endcan
            @can('ficheanalyse-list',ficheanalyse::class)
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('ficheanalyseliste') }}">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Fiche Analyse</span>
                </a>
            </li>
            @endcan
            
        


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Rechercher"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{URL::asset(Auth::user()->image)}}">
                                    
                            </a>
                            
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('profil') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Afficher Profil
                                </a>
                                <a class="dropdown-item" href="{{ route('profiledit') }}">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Modifier Profil
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/deconnexion" data-toggle="modal" data-target="#logoutModal">
                                <!-- <a href="/deconnexion" class="button">Déconnexion</a> -->
                                    Déconnexion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tableau de Bord</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        @can('user-list',User::class)
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Patients</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ DB::table('model_has_roles')->where('role_id','2')->count() }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endcan
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Personnel</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ DB::table('model_has_roles')->whereNotIn('role_id',[2])->count() }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Rendez-Vous</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{
                            DB::table('rendezvous')->count()}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        @can('role-list',Role::class)
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Roles
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ DB::table('roles')->count() }}</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endcan

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                        <div class="elegant-calencar">
       <p id="reset">Date Du Jour</p>
        <div id="header" class="clearfix">
           <div class="pre-button"><</div>
            <div class="head-info" style="margin-left:200px;">
                <div class="head-day"></div>
                <div class="head-month"></div>
            </div>
            <div class="next-button">></div>
        </div>
        <table id="calendar">
            <thead>
                <tr>
                    <th>Dim</th>
                    <th>Lun</th>
                    <th>Mar</th>
                    <th>Mer</th>
                    <th>Jeu</th>
                    <th>Ven</th>
                    <th>Sam</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5" style="margin-top:64px;">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Maternité Dharma</h6>
                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{ asset ('dashboard/img/woman.jpg')}}" class="m-auto" width=200 alt="">
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Soignants du Jour</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    
                                <div class="card mb-2 py-3 border-left-primary">
                                        <div class="card-body">
                                            <span> Dr ETOUGHE - Sage Femme</span> <br>
                                            <span> Dr HOUNTONDJI - Gynecologue</span> <br>
                                            <span>Dr NANG - Sage Femme</span>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Chambres</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        
                                            <a class="dropdown-item" href="#">Ajouter</a>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <div class="card mb-2 py-3 border-left-primary">
                                        <div class="card-body">
                                            <span> Libreville - Occupée</span> <br>
                                            <span> Dakar - Libre</span> <br>
                                            <span> Sydney - Libre</span>
                                        </div>
                                    </div> 
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Roles</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        
                                            <a class="dropdown-item" href="#">Ajouter</a>
                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <div class="card mb-2 py-3 border-left-primary">
                                        <div class="card-body">
                                        <ul>
                                            @foreach ($roles as $key => $role)
                                                <li>
                                                {{ $role->name }}
                                                </li>
                                            @endforeach
                                        </ul>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4" style="width:100%;">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Liste Des Patients</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    
                                    <div class="row"><div class="col-sm-12 mt-4"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 194px;">Nom</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 296px;">prenom</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 141px;">age</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 66px;">numero de telephone</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 133px;">date de creation</th></tr>
                                    </thead>
                                    <tfoot>
                                        <tr><th rowspan="1" colspan="1">Nom</th><th rowspan="1" colspan="1">Prénom</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Numéro</th><th rowspan="1" colspan="1">Date de Création</th></tr>
                                    </tfoot>
                                    @foreach ($patient3 as $key => $user)
                                    <tbody>          
                                    <tr class="odd">
                                    <td>{{ $user->nom }}</td>
                                    <td>{{ $user->prenom }}</td>
                                    <td>{{ $user->age }}</td>
                                    <td>{{ $user->numero }}</td>
                                    <td>{{ $user->created_at }}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        
                    </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                <div class="copyright">
          &copy; Copyright <strong><span>Dharma</span></strong>. Tous droits reservés.
        </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href={{ route('deconnexion') }}>Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="dashboard/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="dashboard/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="dashboard/js/demo/chart-area-demo.js"></script>
    <script src="dashboard/js/demo/chart-pie-demo.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
    var today = new Date(),
        year = today.getFullYear(),
        month = today.getMonth(),
        monthTag =["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre"],
        day = today.getDate(),
        days = document.getElementsByTagName('td'),
        selectedDay,
        setDate,
        daysLen = days.length;
// options should like '2014-01-01'
    function Calendar(selector, options) {
        this.options = options;
        this.draw();
    }
    
    Calendar.prototype.draw  = function() {
        this.getCookie('selected_day');
        this.getOptions();
        this.drawDays();
        var that = this,
            reset = document.getElementById('reset'),
            pre = document.getElementsByClassName('pre-button'),
            next = document.getElementsByClassName('next-button');
            
            pre[0].addEventListener('click', function(){that.preMonth(); });
            next[0].addEventListener('click', function(){that.nextMonth(); });
            reset.addEventListener('click', function(){that.reset(); });
        while(daysLen--) {
            days[daysLen].addEventListener('click', function(){that.clickDay(this); });
        }
    };
    
    Calendar.prototype.drawHeader = function(e) {
        var headDay = document.getElementsByClassName('head-day'),
            headMonth = document.getElementsByClassName('head-month');

            e?headDay[0].innerHTML = e : headDay[0].innerHTML = day;
            headMonth[0].innerHTML = monthTag[month] +" - " + year;        
     };
    
    Calendar.prototype.drawDays = function() {
        var startDay = new Date(year, month, 1).getDay(),
//      下面表示这个月总共有几天
            nDays = new Date(year, month + 1, 0).getDate(),
    
            n = startDay;
//      清除原来的样式和日期
        for(var k = 0; k <42; k++) {
            days[k].innerHTML = '';
            days[k].id = '';
            days[k].className = '';
        }

        for(var i  = 1; i <= nDays ; i++) {
            days[n].innerHTML = i; 
            n++;
        }
        
        for(var j = 0; j < 42; j++) {
            if(days[j].innerHTML === ""){
                
                days[j].id = "disabled";
                
            }else if(j === day + startDay - 1){
                if((this.options && (month === setDate.getMonth()) && (year === setDate.getFullYear())) || (!this.options && (month === today.getMonth())&&(year===today.getFullYear()))){
                    this.drawHeader(day);
                    days[j].id = "today";
                }
            }
            if(selectedDay){
                if((j === selectedDay.getDate() + startDay - 1)&&(month === selectedDay.getMonth())&&(year === selectedDay.getFullYear())){
                days[j].className = "selected";
                this.drawHeader(selectedDay.getDate());
                }
            }
        }
    };
    
    Calendar.prototype.clickDay = function(o) {
        var selected = document.getElementsByClassName("selected"),
            len = selected.length;
        if(len !== 0){
            selected[0].className = "";
        }
        o.className = "selected";
        selectedDay = new Date(year, month, o.innerHTML);
        this.drawHeader(o.innerHTML);
        this.setCookie('selected_day', 1);
        
    };
    
    Calendar.prototype.preMonth = function() {
        if(month < 1){ 
            month = 11;
            year = year - 1; 
        }else{
            month = month - 1;
        }
        this.drawHeader(1);
        this.drawDays();
    };
    
    Calendar.prototype.nextMonth = function() {
        if(month >= 11){
            month = 0;
            year =  year + 1; 
        }else{
            month = month + 1;
        }
        this.drawHeader(1);
        this.drawDays();
    };
    
    Calendar.prototype.getOptions = function() {
        if(this.options){
            var sets = this.options.split('-');
                setDate = new Date(sets[0], sets[1]-1, sets[2]);
                day = setDate.getDate();
                year = setDate.getFullYear();
                month = setDate.getMonth();
        }
    };
    
     Calendar.prototype.reset = function() {
         month = today.getMonth();
         year = today.getFullYear();
         day = today.getDate();
         this.options = undefined;
         this.drawDays();
     };
    
    Calendar.prototype.setCookie = function(name, expiredays){
        if(expiredays) {
            var date = new Date();
            date.setTime(date.getTime() + (expiredays*24*60*60*1000));
            var expires = "; expires=" +date.toGMTString();
        }else{
            var expires = "";
        }
        document.cookie = name + "=" + selectedDay + expires + "; path=/";
    };
    
    Calendar.prototype.getCookie = function(name) {
        if(document.cookie.length){
            var arrCookie  = document.cookie.split(';'),
                nameEQ = name + "=";
            for(var i = 0, cLen = arrCookie.length; i < cLen; i++) {
                var c = arrCookie[i];
                while (c.charAt(0)==' ') {
                    c = c.substring(1,c.length);
                    
                }
                if (c.indexOf(nameEQ) === 0) {
                    selectedDay =  new Date(c.substring(nameEQ.length, c.length));
                }
            }
        }
    };
    var calendar = new Calendar();
    
        
}, false);
    </script>

</body>

</html>