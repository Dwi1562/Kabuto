<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kabuto</title>
    <!-- Add Bootstrap CSS for styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: #34495e;
            color: #ecf0f1;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 10px;
        }

        .sidebar h2 {
            margin: 20px 0;
        }

        .sidebar a {
            color: #ecf0f1;
            padding: 15px 20px;
            text-align: left;
            width: 100%;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #2c3e50;
            text-decoration: none;
        }

        .main-content {
            margin-left: 250px;
            margin-top: 70px;
            width: 81%;
            flex-grow: 1;
            padding: 20px;
            background: #ecf0f1;
        }

        .navbar {
            margin-left: 224px;
            width: calc(100% - 220px);
        }

        .main-content .container {
            background: #ecf0f1;
            border-radius: 5px;
            padding: 20px;
        }

        .main-content h1 {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #2980b9;
            border: none;
        }

        .btn-warning,
        .btn-danger {
            color: #fff;
            border: none;
        }

        .footer {
            text-align: center;
            background: #6d5c5c;
            width: 84.7%;
            margin-left: 15.1%;
            
            bottom: 0px;
            position: absolute;
        }
    </style>
</head>

<body>
    <!-- Include Navbar -->
    @include('admin.layouts.navbar')

    <div class="sidebar">
        <h2>Kabuto</h2>
        <a href="/dashboard">
            <i class="fas fa-tachometer-alt"></i>
            Dashboard
        </a>

        <a href="/transaksi">
            <i class="fas fa-money-bill"></i>
            Transaksi
        </a>

        <a href="/categories">
            <i class="fas fa-list"></i>
            Categories
        </a>

        <a href="/products">
            <i class="fas fa-briefcase"></i>
            Products
        </a>
        <a href="/users">
            <i class="fas fa-users"></i>
            Users
        </a>
    </div>
    <div id="content-wrapper" class="d-flex flex-column" style="width: 100%">
        <div class="main-content">
            @yield('content')
            <div class="h3 mb-4 text-gray-800"></div>
        </div>

        <!-- Footer -->
        <footer class="sticky-footer bg-light footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Website Kasir</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>

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
                    <a class="btn btn-primary" href="login">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/js/sb-admin-2.min.js') }}"></script>
</body>

</html>
