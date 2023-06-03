<?php include "site_meta.php" ?>

<style>
    #wrapper {
        max-width: 100%;
        width: 100%;
    }

    #wrapper {
        /* width: 90%; */
        max-width: 100%;
        margin: 0 auto;
        border-top: 4px solid #ffae00;
    }
</style>


<div id="wrapper">
    <!-- Header section -->
    <header class="header bg-none" id="page-header">
        <div class="container-fluid d-flex align-items-center">
            <a href="<?= $Base_Url ?>">
                <img class="navbar-brand" src="https://upload.wikimedia.org/wikipedia/commons/3/3c/LOGO_ITI.png" alt="Site Logo" width="fit-contents" height="78px">
            </a>
            <h3 class="text-center" id="text-header"><?= $Site_Purpose ?></h3>

        </div>
    </header>


</div>


<style>
    .bg-nav {
        background-color: #3a454b;
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgb(255, 255, 255);
    }
</style>


<style type="text/css">
    .dropdown,
    .dropend,
    .dropstart,
    .dropup {
        position: relative;
    }

    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {
        .dropdown-menu li {
            position: relative;
        }

        .nav-item .submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -7px;
        }

        .nav-item .submenu-left {
            right: 100%;
            left: auto;
        }

        .dropdown-menu>li:hover {
            background-color: #f1f1f1
        }

        .dropdown-menu>li:hover>.submenu {
            display: block;
        }
    }

    /* ============ desktop view .end// ============ */

    /* ============ small devices ============ */
    @media (max-width: 991px) {
        .dropdown-menu .dropdown-menu {
            margin-left: 0.7rem;
            margin-right: 0.7rem;
            margin-bottom: .5rem;
        }
    }

    /* ============ small devices .end// ============ */
</style>

<!-- Implement the Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-nav sticky-top" id="page-navbar">

    <div class="container-fluid">
        <a class="navbar-brand" href="<?= $Base_Url ?>"><?= $Site_Name ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">


            <ul class="navbar-nav">
                <li class="nav-item active"> <a class="nav-link" href="<?= $Base_Url ?>">Home </a> </li>
                <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#aboutModal"> About </a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="#"> Data Manage </a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Treeview menu </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
                        <li><a class="dropdown-item" href="#"> Dropdown item 2 » </a>
                            <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href="#">Submenu item 1</a></li>
                                <li><a class="dropdown-item" href="#">Submenu item 2</a></li>
                                <li><a class="dropdown-item" href="#">Submenu item 3 » </a>
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                                        <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
                                <li><a class="dropdown-item" href="#">Submenu item 5</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
                        <li><a class="dropdown-item" href="#"> Dropdown item 4 </a>
                        </li>
                    </ul>
                </li> -->

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"> More items </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
                        <li><a class="dropdown-item" href="#"> Dropdown item 2 » </a>
                            <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href="#">Submenu item 1</a></li>
                                <li><a class="dropdown-item" href="#">Submenu item 2</a></li>
                                <li><a class="dropdown-item" href="#">Submenu item 3</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#"> Dropdown item 3 » </a>
                            <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href="#">Another submenu 1</a></li>
                                <li><a class="dropdown-item" href="#">Another submenu 2</a></li>
                                <li><a class="dropdown-item" href="#">Another submenu 3</a></li>
                                <li><a class="dropdown-item" href="#">Another submenu 4</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#"> Dropdown item 4 »</a>
                            <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href="#">Another submenu 1</a></li>
                                <li><a class="dropdown-item" href="#">Another submenu 2</a></li>
                                <li><a class="dropdown-item" href="#">Another submenu 3</a></li>
                                <li><a class="dropdown-item" href="#">Another submenu 4</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#"> Dropdown item 5 </a></li>
                        <li><a class="dropdown-item" href="#"> Dropdown item 6 </a></li>
                    </ul>
                </li> -->
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="https://github.com/HenryKim2022/"><i class="fab fa-github-square mr-2"></i> GitHub</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Dropdown right </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a class="dropdown-item" href="#"> Dropdown item 1</a></li>
                        <li><a class="dropdown-item" href="#"> Dropdown item 2 </a></li>
                        <li><a class="dropdown-item" href="#"> Dropdown item 3 » </a>
                            <ul class="submenu submenu-left dropdown-menu">
                                <li><a class="dropdown-item" href="">Submenu item 1</a></li>
                                <li><a class="dropdown-item" href="">Submenu item 2</a></li>
                                <li><a class="dropdown-item" href="">Submenu item 3</a></li>
                                <li><a class="dropdown-item" href="">Submenu item 4</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#"> Dropdown item 4 </a></li>
                    </ul>
                </li> -->
            </ul>

        </div> <!-- navbar-collapse.// -->
    </div> <!-- container-fluid.// -->


</nav>