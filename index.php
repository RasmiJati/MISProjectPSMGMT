<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  
  
  <title>Purchase and Sales Mgmt System</title>



  <style>
    th{
      border: 2px solid #e6e6e6;
      text-align: center;
    }
    tr{
      border: 2px solid #e6e6e6;
    }
    td{
      border: 2px solid #e6e6e6;
    }
  </style>


</head>

<body class="sb-nav-fixed">

  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.php">Purchase and Sales</a>

    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
        class="fas fa-bars"></i></button>

    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
          aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
      </div>
    </form>




    <div class="navbar-nav">
     
    
      <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="login.html">Log out</a>
      </div>


    </div>


    <!-- Navbar-->
    <!-- <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#!">Settings</a></li>
          <li><a class="dropdown-item" href="#!">Activity Log</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="#!">Logout</a></li>
        </ul>
      </li>
    </ul> -->
  </nav>



  <div id="layoutSidenav">

    <div id="layoutSidenav_nav">

      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">


        <div class="sb-sidenav-menu">
          <div class="nav">

            <div class="sb-sidenav-menu-heading">Core</div>
            

            <!-- Index.php -->
            <a class="nav-link" href="index.php">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>

            <div class="sb-sidenav-menu-heading">Interface</div>
            
            <!-- Product.php -->
            <!-- <a class="nav-link collapsed" href="Product.php" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
              aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fab fa-product-hunt"></i></div>
              Product
               <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a> -->


            <!-- <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="layout-static.html">Static Navigation</a>
                <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
              </nav>
            </div> -->

            <!-- Purchase.php -->
            <a class="nav-link collapsed" href="Purchase.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
              aria-expanded="false" aria-controls="collapsePages">
              <div class="sb-nav-link-icon"><i class="fas fa-truck-loading"></i></div>  
              Purchase
            </a>

            <!-- Sales.php -->
            <a class="nav-link collapsed" href="Sales.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
              aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-shopping-bag"></i></div>  
                  Sales
            </a>

            
            <!-- Company.php -->
            <a class="nav-link collapsed" href="Company.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
              aria-expanded="false" aria-controls="collapsePages">
                  <div class="sb-nav-link-icon"><i class="fas fa-warehouse"></i></div>  
                    Company
            </a>


            <!-- Customer.php -->
            <a class="nav-link collapsed" href="Customer.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
              aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>  
              Customer
            </a>


            <!-- Profit.php -->
            <a class="nav-link collapsed" href="Profit.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-line"></i></div>  
                Profit
            </a>

            <div class="sb-sidenav-menu-heading"></div>
            <!-- <a class="nav-link" href="charts.html">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Charts
            </a>
            <a class="nav-link" href="tables.html">
              <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
              Tables
            </a> -->
          </div>
        </div>




        <div class="sb-sidenav-footer">
          <div class="small">Logged in as:</div>
         Admin
        </div>


      </nav>

    </div>


    <div id="layoutSidenav_content">

      <main>

        <div class="container-fluid px-4">

          <h1 class="mt-4">Dashboard</h1>

          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Welcome</li>
          </ol>
          

          <!-- Row 1 card box-->
          <div class="row">

            <!-- Profit.php -->
            <div class="col-xl-3 col-md-6">
              <div class="card bg-primary text-white mb-4">
                <div class="card-body">Profit</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="Profit.php">View Details</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>

            <!-- Customer.php -->
            <div class="col-xl-3 col-md-6">
              <div class="card bg-warning text-white mb-4">
                <div class="card-body">Customers</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="Customer.php">View Details</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>

            <!-- Sales.php -->
            <div class="col-xl-3 col-md-6">
              <div class="card bg-success text-white mb-4">
                <div class="card-body">Sales</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="Sales.php">View Details</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>

            <!-- Expenses.php -->
            <div class="col-xl-3 col-md-6">
              <div class="card bg-danger text-white mb-4">
                <div class="card-body">Purchase</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="Purchase.php">View Details</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>


          </div>



          <!-- Row 2 chart  -->
          <div class="row">
             
            <!-- Col 1 Area Chart -->
            <div class="col-xl-6">

              <div class="card mb-4">

                <!-- card header -->
                <div class="card-header">
                  <i class="fas fa-chart-area me-1"></i>
                      Area Chart 
                </div>
                
                <!-- card body -->
                <div class="card-body">
                  <div id="areachart" style="width: 500px; height: 400px;"></div>  
                  <!-- <canvas id="myAreaChart" width="100%" height="40"></canvas> -->
                </div>

              </div>
            </div>

            <!-- col 2 Bar chart -->
            <div class="col-xl-6">
              <div class="card mb-4">

                <!-- card header -->
                <div class="card-header">
                  <i class="fas fa-chart-bar me-1"></i>
                       Bar Chart 
                </div>
              
                <!-- card body -->
                <div class="card-body">
                  <div id="myBarChart" style="width: 500px; height: 400px;"></div>  
                  <!-- <canvas id="myBarChart" width="100%" height="40"></canvas>-->
                </div>

              </div>

            </div>

          </div> 



            <!-- Row 3 table -->
        

        </div>

      </main>

      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Rasmi Jati</div>
          </div>
        </div>
      </footer>

    </div>

  </div>
  


  
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Name', 'Purchase','Sales','profit'],
          ['Chair',     65000, 90000,45000],
          ['Cupboard', 400000, 320000,120000],
          ['Bed',      500000, 300000,50000],
          ['Table',  60000, 52500,17500],
          ['Desk',    50000, 20000,10000]
        ]);

        var options = {
          title: 'Performance',
          hAxis: {title: 'Name',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('areachart'));
        chart.draw(data, options);
      }
    </script>





<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Name', 'Purchase','Sales','profit'],
          ['Chair',     65000, 90000,45000],
          ['Cupboard', 400000, 320000,120000],
          ['Bed',      500000, 300000,50000],
          ['Table',  60000, 52500,17500],
          ['Desk',    50000, 20000,10000]
        ]);

        var options = {
          chart: {
            title: 'Performance'
          },
          
        };

        var chart = new google.charts.Bar(document.getElementById('myBarChart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>