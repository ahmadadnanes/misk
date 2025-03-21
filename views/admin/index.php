<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "/../components/_head.php" ?>
<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap px-4">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">MVC</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
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
                                    Total Addmissions
                                    <span class="float-right" data-feather="file"></span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card bg-success text-white mb-3">
                                <div class="card-header">
                                    Total Media
                                    <span class="float-right" data-feather="users"></span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Montly chart</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button class="btn btn-sm btn-outline-secondary">Share</button>
                            <button class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>

                        <div class="btn-group border-right-0">
                            <button class="btn btn-sm border-right-0">
                                <span data-feather="calendar"></span>
                            </button>
                        </div>
                        <div class="input-group date  border-left-0">
                            <input id="filterMonth" type="text" class="form-control monthPicker" placeholder="Date from" value="<?php echo $month; ?>">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>

                    </div>
                </div>

                <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

                <h2>Last 10 orders</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Customer</th>
                                <th>Country</th>
                                <th>Device</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>

            </main>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>



    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/dashboard.js"></script>

</body>

</html>