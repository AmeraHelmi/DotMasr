<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">
    
    <title>DotMasr</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="css/fileinput.min.css">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="css/style.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="brand clearfix">
        <a href="index.html" class="logo">
        <!-- <img src="img/logo.png" width="90px" class="img-responsive" alt=""> -->
        دوت مصر</a>
        <span class="menu-btn"><i class="fa fa-bars"></i></span>
        <ul class="ts-profile-nav">
            <li><a href="#">مساعدة</a></li>
            <li><a href="#">اعدادات</a></li>
            <li class="ts-account">
                <a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> الحساب <i class="fa fa-angle-down hidden-side"></i></a>
                <ul>
                    <li><a href="#">حسابى</a></li>
                    <li><a href="#">تعديل الحساب</a></li>
                    <li><a href="#">الخروج</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="ts-main-content">
        <nav class="ts-sidebar">
            <ul class="ts-sidebar-menu">
                <!-- <li class="ts-label">بحث</li> -->
                <li>
                    <input type="text" class="ts-sidebar-search" placeholder="ابحث هنا ...">
                </li>
                <li class="ts-label">الرئيسية</li>
                <li class="open"><a href="index.html"><i class="fa fa-dashboard"></i> لوحة تحكم</a></li>

                <li><a href="#"><i class="fa fa-desktop"></i> المستخدمين</a>
                    <ul>
                        <li><a href="panels.html">اضافة جديد</a></li>
                        <li><a href="buttons.html">عرض كل المستخدمين</a></li>
                        
                    </ul>
                </li>

                <li><a href="#"><i class="fa fa-desktop"></i> المحافظات</a>
                    <ul>
                        <li><a href="panels.html">اضافة جديد</a></li>
                        <li><a href="buttons.html">عرض كل المحافظات</a></li>
                        
                    </ul>
                </li>
                
                <li><a href="#"><i class="fa fa-desktop"></i> الاخبار</a>
                    <ul>
                        <li><a href="panels.html">اضافة جديد</a></li>
                        <li><a href="panels.html">عرض كل فئات الاخبار</a></li>
    
                        
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-desktop"></i> المنشورات</a>
                    <ul>
                        <li><a href="panels.html">اضافة جديد</a></li>
                        <li><a href="panels.html">عرض كل المنشورات</a></li>
    
                        
                    </ul>
                </li>
                
                <li><a href="#"><i class="fa fa-desktop"></i> الاعلانات</a>
                    <ul>
                        <li><a href="panels.html">اضافة جديد</a></li>
                        <li><a href="panels.html">عرض كل فئات الاعلانات</a></li>
    
                        
                    </ul>
                </li>
                
                <!-- Account from above -->
        
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">الرئيسية</h2>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-primary text-light">
                                                <div class="stat-panel text-center">
                                                    <div class="stat-panel-number h1 ">24</div>
                                                    <div class="stat-panel-title text-uppercase">مستخدم جديد </div>
                                                </div>
                                            </div>
                                            <a href="#" class="block-anchor panel-footer">كل التفاصيل<i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-success text-light">
                                                <div class="stat-panel text-center">
                                                    <div class="stat-panel-number h1 ">8</div>
                                                    <div class="stat-panel-title text-uppercase">اخبار جديدة</div>
                                                </div>
                                            </div>
                                            <a href="#" class="block-anchor panel-footer text-center">عرض الكل &nbsp; <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-info text-light">
                                                <div class="stat-panel text-center">
                                                    <div class="stat-panel-number h1 ">58</div>
                                                    <div class="stat-panel-title text-uppercase">منشورات جديدة</div>
                                                </div>
                                            </div>
                                            <a href="#" class="block-anchor panel-footer text-center">عرض الكل &nbsp; <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-warning text-light">
                                                <div class="stat-panel text-center">
                                                    <div class="stat-panel-number h1 ">18</div>
                                                    <div class="stat-panel-title text-uppercase">تعليقات جديدة</div>
                                                </div>
                                            </div>
                                            <a href="#" class="block-anchor panel-footer text-center">عرض الكل &nbsp; <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                    <!--        <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Sales Report</div>
                                    <div class="panel-body">
                                        <div class="chart">
                                            <canvas id="dashReport" height="310" width="600"></canvas>
                                        </div>
                                        <div id="legendDiv"></div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">اخر الاخبار</div>
                                    <div class="panel-body">
                                        <div class="alert alert-dismissible alert-success">
                                            <button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button>
                                            <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                                        </div>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Loading Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>
    
    <script>
        
    window.onload = function(){
    
        // Line chart from swirlData for dashReport
        var ctx = document.getElementById("dashReport").getContext("2d");
        window.myLine = new Chart(ctx).Line(swirlData, {
            responsive: true,
            scaleShowVerticalLines: false,
            scaleBeginAtZero : true,
            multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
        }); 
        
        // Pie Chart from doughutData
        var doctx = document.getElementById("chart-area3").getContext("2d");
        window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

        // Dougnut Chart from doughnutData
        var doctx = document.getElementById("chart-area4").getContext("2d");
        window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

    }
    </script>

</body>

</html>