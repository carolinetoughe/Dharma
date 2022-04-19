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
    <link href="{{ asset('dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('dashboard/css/sb-admin-2.min.css" rel="stylesheet') }}">
    <style>
        /**
 * Eric Meyer's Reset CSS v2.0+ (https://meyerweb.com/eric/tools/css/reset/)
 * http://cssreset.com
 */
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
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" style="    background-color: #4e73df;
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
                                src="{{URL::asset('storage/'.Auth::user()->image)}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Afficher Profil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Modifier Profil
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Déconnexion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <div class="card ml-4" style="width: 70rem;">
                            <div class="card-body">
                            <form method="post" action="{{ route('adressedit', $user->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                {{ method_field('post') }}
                                        <div class="row">
                                                <div class="col-lg-3" style=" border-right:1px solid black; margin-right:20px;">
                                                    <div class="text-center">
                                                        <img src="{{URL::asset('storage/'.Auth::user()->image)}}" height="140" style="border-radius: 55px!important;" class="rounded-pill" alt="...">
                                                    </div>
                                                    <div class="text-center mt-4">
                                                    <!-- <a href="#" class="btn btn-primary">Choisir</a> -->
                                                    <input type="file" name="image" class="form-control" id="">
                                                    </div>
                                                </div>
                                                    <!-- <div class="d-flex" style="height: 200px;"> -->
                                                <div class="vr"></div>
                                                    <!-- </div> -->
                                                <div class="col-lg-6">
                                                <h2>Modifier Votre Adresse</h2>
                                                    <div class="mb-4"  style="margin-left:430px;">
                                                        <a href="{{ route('profil') }}" class="btn btn-primary"style="background-color: #FF1493;">Retour</a>
    
                                                    </div>
                                                    @foreach ($adresses as $adresse)
                                                    <div class="mb-4">
                                                        <label class="list-group-item py-3" for="listGroupCheckableRadios1">
                                                        Quartier
                                                        <input type="text" class="form-control" id="" name="quartier" value="{{ $user->adresse->quartier }}">
                                                        </label>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="list-group-item py-3" for="listGroupCheckableRadios1">
                                                        Ville
                                                        <input type="text" class="form-control" id="" name="ville" value="{{ Auth::user()->adresse->ville }}">
                                                        </label>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="list-group-item py-3" for="listGroupCheckableRadios1">
                                                        Pays
                                                        <input type="text" class="form-control" id="" name="pays" value="{{ Auth::user()->adresse->pays }}">
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                   
                                                    <div class="form-group text-center">
                                                        <input type="submit" name="edit" class="btn btn-primary input-lg" value="Modifier" />
                                                    </div>  
                                            
                                        </div>
                                </form> 
                                <!-- <div class="col-lg-3">4</div> -->
                            </div>
                    </div>
                </div>
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('dashboard/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('dashboard/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('dashboard/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('dashboard/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('dashboard/js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>