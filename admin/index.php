<!doctype html>
<html>

<head>
    <meta name="ac:base" content="/dashboard">
    <base href="/dashboard/admin/">
    <script src="../dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/bootstrap-icons.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer=""></script>
    <script src="../dmxAppConnect/dmxBootstrap5Offcanvas/dmxBootstrap5Offcanvas.js" defer=""></script>
</head>

<body is="dmx-app" id="index">
    <div class="offcanvas offcanvas-start" id="offcanvas1" is="dmx-bs5-offcanvas" tabindex="-1">
        <div class="offcanvas-header">
            <button type="button" class="btn-close btn-close-white text-reset text-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <a href="index.php" class="nav-link" internal>Dashboard</a>
                    </li>
                    <li class="my-2">
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase">Sales</div>
                    </li>
                    <li>
                        <a href="#" class="nav-link" internal>Customers</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link pt-0" internal>Orders</a>
                    </li>
                    <li class="my-2">
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase">Products</div>
                    </li>
                    <li>
                        <a href="#" class="nav-link" internal>Categories</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link pt-0" internal>Products</a>
                    </li>
                    <li class="my-2">
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase">Organisation</div>
                    </li>
                    <li>
                        <a href="#" class="nav-link" internal>Organisation</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <header class="fixed-top bg-primary">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg justify-content-end bg-transparent navbar-dark">
                        <button id="btn1" class="btn me-2 pt-0 pb-0 ps-0 pe-0 navbar-toggler" dmx-on:click="offcanvas1.show()">
                            <i class="bi-text-left fs-3"></i>
                        </button>
                        <a class="navbar-brand me-auto" href="#">Wappler Dashboard</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar1_collapse" aria-controls="navbar1_collapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbar1_collapse">
                            <div class="navbar-nav">
                                <a class="nav-item nav-link" href="#">Log Out</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2>Main Content</h2>
                </div>
            </div>
        </div>
    </main>
    <script src="../bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>