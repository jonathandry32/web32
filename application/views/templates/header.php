<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title><?php echo $title; ?></title>
        <meta content="" name="<?php echo $description; ?>">
        <meta content="" name="<?php echo $keywords; ?>">

        <!-- Favicons -->
        <link href="../assets/img/chibi2.png" rel="icon">
        <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="../assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="logo d-flex align-items-center">
                    <img src="../assets/img/chibi2.png" alt="">
                    <span class="d-none d-lg-block">
                        <h4 style="margin-left: 10px; padding-top: 10px;"><?php echo $title; ?></h4>
                    </span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->

            <div class="search-bar">
                <form class="search-form d-flex align-items-center" method="POST" action=<?php echo base_url("welcome/search"); ?>>
                    <input type="text" name="mot_cle" placeholder="Search" title="Enter search keyword">
                    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                    <span style="margin-left:10%">
                        <select name="cat">
                            <option value="all">Tous</option>
                            <?php for ($i=0; $i < count($list_cat); $i+=2) { ?> 
                                <option value="<?php echo $list_cat[$i];?>"><?php echo $list_cat[$i+1];?></option>
                            <?php } ?>
                        </select>
                    </span>
                </form>
            </div>

           <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li><!-- End Search Icon-->



                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            <img src="../assets/img/lunette.jpg" alt="Profil"
                                class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">
                                <?php ?>
                            </span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>
                                    <?php if($this->session->has_userdata('connected')){ echo $this->session->connected; } ?>
                                </h6>
                                <span>Admin</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="../login/logout">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Deconnexion</span>
                                </a>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->

                </ul>
            </nav><!-- End Icons Navigation -->

        </header><!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link collapsed" href=<?php echo base_url("welcome/accueil"); ?>>
                        <i class="bi bi-house"></i>
                        <span>Accueil</span>
                    </a>
                </li><!-- End Dashboard Nav -->
                <li class="nav-item">
                    <a class="nav-link collapsed"  href=<?php echo base_url("proposition/accueil"); ?>>
                        <i class="bi bi-calculator"></i><span>Demande</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed"  href=<?php echo base_url("objet/add"); ?>>
                        <i class="bi bi-nut-fill"></i><span>Add Object</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed"  href=<?php echo base_url("objet/all"); ?>>
                        <i class="bi bi-question-circle"></i><span>Edit/Delete mes objects</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed"  href=<?php echo base_url("Stat/historic"); ?>>
                        <i class="bi bi-tools"></i><span>Historic</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed"  href=<?php echo base_url("objet/my_all"); ?>>
                        <i class="bi bi-tools"></i><span>Estimation</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed"  href=<?php echo base_url("welcome/multiple"); ?>>
                        <i class="bi bi-tools"></i><span> Multiple </span>
                    </a>
                </li>
                <!-- End Components Nav -->
                
                <li class="nav-heading">Admin</li>
                
                <?php if($this->session->has_userdata('admin')){ ?>
                   <h3 style="color:red"> <?php echo $this->session->admin; ?> </h3>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link collapsed"  href=<?php echo base_url("categorie/index"); ?>>
                            <i class="bi bi-piggy-bank"></i><span>Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed"  href=<?php echo base_url("stat/accueil"); ?>>
                            <i class="bi bi-people"></i><span>Statistiques</span>
                        </a>
                    </li>
                <?php } ?>
            </ul>

        </aside><!-- End Sidebar-->
