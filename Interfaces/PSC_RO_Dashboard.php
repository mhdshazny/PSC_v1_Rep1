<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="utf-8">
    <!--    Resources -->
    <link href="../Plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="../Plugins/chart.js/Chart.bundle.js"> </script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        body { padding-top:20px; }
        .panel-body .btn:not(.btn-block) { width:120px;margin-bottom:10px; }
    </style>

</head>
<body>

<!--<div class="container">-->
<!--    <main role="main" class="pb-3 bg-dark">-->
<!---->
<!--    </main>-->
<!---->
<!--</div>-->

<div class="row">
    <?php
    include("../Common/TopNavBarRO.php");
    ?>
    <div class="container-fluid" style=" min-height:230px; width: 100%">
        <br>
        <p class="text-info font-weight-bold" style="font-size: 250%"> Hello Manager !</p>
    </div>
    <hr style="font-weight: bold; color: black">
    <div class="container-fluid" style="min-height: 550px; width:1700px">
        <div class="row">
            <div class="col bg-light">
                <canvas id="myChart"  style="max-width: 500px;"></canvas>
            </div>
            <div class="col bg-light">
                <canvas id="myChart2"  style="max-width: 500px;"></canvas>
            </div>
            <div class="col bg-light">
                <canvas id="myChart3"  style="max-width: 500px;"></canvas>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <!--                <div class="panel-heading">-->
                        <!--                    <h3 class="panel-title">-->
                        <!--                        <span class="glyphicon glyphicon-bookmark"></span> Quick Shortcuts</h3>-->
                        <!--                </div>-->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6 col-md-6">
                                    <a href="#" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Apps</a>
                                    <a href="#" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>Bookmarks</a>
                                    <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-signal"></span> <br/>Reports</a>
                                    <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-comment"></span> <br/>Comments</a>
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <a href="#" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Users</a>
                                    <a href="#" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Notes</a>
                                    <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-picture"></span> <br/>Photos</a>
                                    <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-tag"></span> <br/>Tags</a>
                                </div>
                            </div>
                            <a href="http://www.jquery2dotnet.com/" class="btn btn-success btn-lg btn-block" role="button"><span class="glyphicon glyphicon-globe"></span> Website</a>
                        </div>
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                    <?php
                    include("../Common/Footer.php");
                    ?>



                <script src="chartData.js"> </script>
                <!--<script src="chartData2.js"> </script>-->
</body>
</html>