<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <!-- MDB -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css">
    <!-- Custom styles -->
    <style>
        /* Navbar styles */
        .navbar-scroll {
            background-color: #FFC017;
        }
        
        .navbar-scroll .nav-link,
        .navbar-scroll .navbar-toggler-icon,
        .navbar-scroll .navbar-brand {
            color: #262626;
        }
        
        .navbar-scrolled {
            background-color: #fff;
        }
        
        .navbar-scrolled .nav-link,
        .navbar-scrolled .navbar-toggler-icon,
        .navbar-scroll .navbar-brand {
            color: #262626;
        }
        
        .navbar.navbar-scroll.navbar-scrolled {
            padding-top: auto;
            padding-bottom: auto;
        }
        
        .navbar-brand {
            font-size: unset;
            height: 3.5rem;
        }

        .nav-item .dropdown-toggle {
            display: flex;
            align-items: center;
            margin-right: -15rem;
        }

        .nav-item .dropdown-toggle img {
            margin-right: 0.5rem; /* Adjust this value to position the image horizontally */
        }

        .navbar-brand img {
            height: 40px; /* Adjust this value as needed */
        }

        .logo.perusahaan {
            position: absolute;
            top: -8px;
            left: 0;
            margin: 10px; /* Adjust this value for spacing */
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar-brand img {
                height: 30px; /* Adjust this value for mobile devices */
            }

            .logo.perusahaan {
                position: relative;
                top: 0;
                margin: 0;
                padding: 10px;
            }

            .navbar-toggler {
                order: -1; /* Move toggle button to the left */
            }

            .navbar-collapse {
                background-color: #FFC017; /* Background color for mobile menu */
                padding: 10px;
            }

            .dropdown-menu {
                position: static; /* Display dropdown menu as normal list on mobile */
                margin-top: 10px;
                background-color: transparent;
                border: none;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Brand -->
            <a class="logo perusahaan" href="#">
                <img src="{{ asset('images/logo.png') }}" width="15%" alt="Logo" />
            </a>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center custom-dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle" height="30" alt="User Avatar" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            
                                <!-- <form id="logout-form" action="/logout" method="POST"> -->
                                     <!-- Include this if you are using Laravel for CSRF protection -->
                                    <!-- <a class="dropdown-item" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </form> -->
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="/logout">
                                        <i class="fas fa-dollar-sign text-dark"></i>
                                        <span class="text-dark">Logout</span>
                                    </a>
                                </li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div id="sidebarMenu" class="collapse">
        <!-- Add your sidebar content here -->
    </div>
    <!-- Sidebar -->

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript">
        // Custom JavaScript can be added here
    </script>
</body>
</html>
