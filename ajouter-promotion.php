<?PHP
include "promotionC.php";
$promotion=new promotionC();
$listepromotion=$promotion->afficherpromotion();
?>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DataTables | Gentelella</title>

        <!-- Bootstrap -->
        <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- Datatables -->

        <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>CarePoint </span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="images/ahmedpdp.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2>Maatouk Aziz</h2>
                            </div>
                        </div>
                      
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="index.html">Dashboard</a></li>
                                            <li><a href="index2.html">Dashboard2</a></li>
                                            <li><a href="index3.html">Dashboard3</a></li>
                                        </ul>
                                    </li>
                                   
                                    <li><a><i class="fa fa-table"></i> Gestion Des Promotions <span class="fa fa-chevron-down"></span></a>
                                         <ul class="nav child_menu">
                                            
                                            <li><a href="afficher-promotion.php">Afficher Promotions</a></li>
                                            <li><a href="ajouter-promotion.php">Ajouter Promotions</a></li>
                                            <li><a href="supprimer-formulaire.php">Supprimer Promotions</a></li>
                                            <li><a href="modifier-formulaire.php">Modifier Promotions</a></li>
                                        </ul>
                                   </li>

                                    <li><a><i class="fa fa-table"></i> Gestion Des categories <span class="fa fa-chevron-down"></span></a>
                                         <ul class="nav child_menu">
                                            
                                            <li><a href="afficher-categorie.php">Afficher categorie</a></li>
                                            <li><a href="ajouter-categorie.php">Ajouter categorie</a></li>
                                            <li><a href="supprimer-categorie.php">Supprimer categorie</a></li>
                                            <li><a href="modifier-categorie.php">Modifier categorie</a></li>
                                        </ul>
                                   </li>

                                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="tables.html">Tables</a></li>
                                            <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                                        </ul>
                                    </li>
                                   
                                </ul>
                            </div>
                            <div class="menu_section">
                                <h3>Live On</h3>
                                <ul class="nav side-menu">
                                    
                                        <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                                </ul>
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <nav class="nav navbar-nav">
                            <ul class=" navbar-right">
                                <li class="nav-item dropdown open" style="padding-left: 15px;">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/ahmedpdp.jpg" alt="">Maatouk Aziz
                                    </a>
                                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="javascript:;"> Profile</a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">Help</a>
                                        <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </div>
                                </li>

                                <li role="presentation" class="nav-item dropdown open">
                                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">6</span>
                                    </a>
                                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                                        <li class="nav-item">
                                            <a class="dropdown-item">
                                                
                                                <span>
                            </span>
                                                <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                           this costumer has made an order hurry up .... 
                          </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item">
                                            
                                                <span>
                            
                                                <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                            welcome again aziz!!!!
                          </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item">
                                                
                                                <span>
                            
                                                <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                            your sales are rising like thunder
                          </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item">
                                                
                                                <span>
                            
                                                <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                            you should check these promotions..........
                          </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <div class="text-center">
                                                <a class="dropdown-item">
                                                    <strong>See All Alerts</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->








                <!-- /page content -->

                <script type="text/javascript">
        function test() {

            if (document.myform.nom.value.length == 0) {


                alert("veuillez remplir le champ");

            }

            if (document.myform.idproduit.value.length == 0) {


                alert("veuillez remplir le champ");

            }

        }
    </script>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>PROMOTIONS</h3>
              </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ajouter une promotion <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

<div class="x_content">
                    <br />
                    <form method="post" name="myform" action=ajoutpromotion.php>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="referance">referance <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="referance" required="required" class="form-control " >
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label  class="col-form-label col-md-3 col-sm-3 label-align"for="id_produit">id_produit <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input  class="form-control" type="text"  name="id_produit"  required="required">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="dateDebut">dateDebut <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="date"  name="dateDebut" required="required" class="form-control">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label  class="col-form-label col-md-3 col-sm-3 label-align"for="dateFin">dateFin</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input class="form-control" type="date" name="dateFin">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label  class="col-form-label col-md-3 col-sm-3 label-align"for="pourcentage">pourcentage</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input class="form-control" type="text" name="pourcentage">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label  class="col-form-label col-md-3 col-sm-3 label-align"for="categoriepromotion">categoriepromotion</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input class="form-control" type="text" name="categoriepromotion">
                        </div>
                      </div>
                     

                      


                       
                      
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          
                          <a href="afficher-promotion.php"class="btn btn-primary">Annuler</a> 
                          <button type="submit" class="btn btn-success"onclick="test()" >ajouter</button>
					                   
                        </div>
                      </div>

                    </form>
                  </form>
                  </div>



   
                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FastClick -->
        <script src="../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../vendors/nprogress/nprogress.js"></script>
        <!-- iCheck -->
        <script src="../vendors/iCheck/icheck.min.js"></script>
        <!-- Datatables -->
        <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <script src="../vendors/jszip/dist/jszip.min.js"></script>
        <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>

    </body>
    </html>