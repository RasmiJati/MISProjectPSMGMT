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
  </nav>



  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="index.php">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            
            <a class="nav-link collapsed" href="Purchase.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
              aria-expanded="false" aria-controls="collapsePages">
              <div class="sb-nav-link-icon"><i class="fas fa-truck-loading"></i></div>  
              Purchase
            </a>

            <a class="nav-link collapsed" href="Sales.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
            aria-expanded="false" aria-controls="collapsePages">
            <div class="sb-nav-link-icon"><i class="fas fa-shopping-bag"></i></div>  
            Sales
          </a>
          <a class="nav-link collapsed" href="Company.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
          aria-expanded="false" aria-controls="collapsePages">
          <div class="sb-nav-link-icon"><i class="fas fa-warehouse"></i></div>  
         Company
        </a>
        <a class="nav-link collapsed" href="Customer.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
          aria-expanded="false" aria-controls="collapsePages">
        <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>  
        Customer
        </a>
        <a class="nav-link collapsed" href="Profit.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
      aria-expanded="false" aria-controls="collapsePages">
          <div class="sb-nav-link-icon"><i class="fas fa-chart-line"></i></div>  
      Profit
        </a>
    
        </div>
       
      </nav>
    </div>


    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h1 class="mt-4">Sales Report</h1>
          <ol class="breadcrumb mb-4">
            
          </ol>
        




           <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Pie chart
                            </div>
                            <div class="card-body"><div id="piechart" style="width: 500px; height: 400px;"></div></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
              <div class="card mb-4">

                <!-- card header bar -->
                <div class="card-header">
                  <i class="fas fa-chart-bar me-1"></i>
                       Bar Chart 
                </div>             
                <!-- card body bar -->
                <div class="card-body">
                  <div id="myBarChart" style="width: 600px; height: 400px;"></div>  
                
                </div>

              </div>

            </div>

                </div> 
          <div class="card mb-4">
            <div class="card-header">
              <i class="fas fa-table me-1"></i>
              Sales Data
            </div>
            <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                  <tr>
                      <th scope = "col" > Product Id</th>
                    <th scope="col">Name of Product</th>
                    <th scope="col">Number of Sales</th>
                    <th scope="col">Sales Amount</th>
                </tr>

                </thead>
                
                <tbody>
                  <tr align = "center">
                    <td>1</td>
                    <td>Chair</td>
                    <td>90</td>
                    <td>90000</td>   
                    <!-- 500     1000-->
                  </tr>
                  <tr align = "center">
                    <td>2</td>
                    <td>Bed</td>
                    <td>25</td>
                    <td>300000</td>   
                    <!-- 10000   12000 -->
                  </tr>
                  <tr align = "center">
                    <td>3</td>
                    <td>Cup Board</td>
                    <td>40</td>
                    <td>320000</td>   
                    <!-- 5000    8000 -->
                  </tr>
                  <tr align = "center">
                    <td>4</td>
                    <td>Table</td>
                    <td>35</td>
                    <td>52500</td>   
                    <!-- 1000 1500-->
                  </tr>
                  <tr align = "center">
                    <td>5</td>
                    <td>Desk</td>
                    <td>20</td>
                    <td>20000</td>   
                    <!-- 500 1000 -->
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
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
  </main>
  </div>
  </div>


  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Name', 'Quantity'],
          ['Chair',     90],
          ['Cupboard', 40],
          ['Bed',      25],
          ['Table',  35],
          ['Desk',    20]
        ]);

        var options = {
          title: 'Percentage of Sales'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>








<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Name', 'Quantity'],
          ['Chair',     90],
          ['Cupboard', 40],
          ['Bed',      25],
          ['Table',  35],
          ['Desk',    20]
        ]);

        var options = {
          chart: {
            title: 'Stores Performance',
            subtitle: 'Total Sales',
          },
          
        };

        var chart = new google.charts.Bar(document.getElementById('myBarChart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

  



  <!-- Option 1: Bootstrap Bundle with Popper -->

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>