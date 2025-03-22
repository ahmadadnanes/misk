<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "/../components/_head.php" ?>
<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap px-4">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Misk</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Integrations
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card bg-light mb-3">
                                <div class="card-header">
                                    Total News
                                    <span class="float-right" data-feather="credit-card"></span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?php echo $news_count ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card bg-light mb-3">
                                <div class="card-header">
                                    Total Media
                                    <span class="float-right" data-feather="file"></span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        <?php echo $media_count ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card bg-success text-white mb-3">
                                <div class="card-header">
                                    Total Admissions
                                    <span class="float-right" data-feather="users">
                                    </span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        <?php echo $admission_count ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

</body>

</html>