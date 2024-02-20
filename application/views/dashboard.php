<?php
$total_reviews = 0;
$total_reviews = $review_counts->good_count + $review_counts->poor_count + $review_counts->excellent_count;

?>
<div class="row small-spacing">
    <div class="col-sm-6 col-lg-3 col-xs-12">
        <div class="box-content">
            <h4 class="box-title text-orange">Users</h4>
            <!-- /.box-title -->
            <div class="dropdown js__drop_down">
                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                <!-- <ul class="sub-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else there</a></li>
                    <li class="split"></li>
                    <li><a href="#">Separated link</a></li>
                </ul> -->
                <!-- /.sub-menu -->
            </div>
            <!-- /.dropdown js__dropdown -->
            <div class="content widget-stat">
                <div id="traffic-sparkline-chart-3" class="left-content"></div>
                <!-- /#traffic-sparkline-chart-3 -->
                <div class="right-content">
                    <h2 class="counter text-danger"><?= isset($review_counts->poor_count) ?>9</h2>
                    <!-- /.counter -->
                    <p class="text text-danger">Total Users</p>
                    <!-- /.text -->
                </div>
                <!-- .right-content -->
            </div>
            <!-- /.content widget-stat -->
        </div>
        <!-- /.box-content -->
    </div>
    <!-- /.col-sm-6 col-lg-3 col-xs-12 -->
    <div class="col-sm-6 col-lg-3 col-xs-12">
        <div class="box-content">
            <h4 class="box-title text-info">Workouts</h4>
            <!-- /.box-title -->
            <div class="dropdown js__drop_down">
                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                <!-- <ul class="sub-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else there</a></li>
                    <li class="split"></li>
                    <li><a href="#">Separated link</a></li>
                </ul> -->
                <!-- /.sub-menu -->
            </div>
            <!-- /.dropdown js__dropdown -->
            <div class="content widget-stat">
                <div id="traffic-sparkline-chart-1" class="left-content margin-top-15"></div>
                <!-- /#traffic-sparkline-chart-1 -->
                <div class="right-content">
                    <h2 class="counter text-info"><?= $review_counts->excellent_count ?>11</h2>
                    <!-- /.counter -->
                    <p class="text text-info">Total Workouts</p>
                    <!-- /.text -->
                </div>
                <!-- .right-content -->
            </div>
            <!-- /.content widget-stat -->
        </div>
        <!-- /.box-content -->
    </div>
    <!-- /.col-sm-6 col-lg-3 col-xs-12 -->

    <div class="col-sm-6 col-lg-3 col-xs-12">
        <div class="box-content">
            <h4 class="box-title text-success">Exercies</h4>
            <!-- /.box-title -->
            <div class="dropdown js__drop_down">
                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                <!-- <ul class="sub-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else there</a></li>
                    <li class="split"></li>
                    <li><a href="#">Separated link</a></li>
                </ul> -->
                <!-- /.sub-menu -->
            </div>
            <!-- /.dropdown js__dropdown -->
            <div class="content widget-stat">
                <div id="traffic-sparkline-chart-2" class="left-content margin-top-10"></div>
                <!-- /#traffic-sparkline-chart-2 -->
                <div class="right-content">
                    <h2 class="counter text-success"><?= $review_counts->good_count ?>5</h2>
                    <!-- /.counter -->
                    <p class="text text-success">Total Exercies</p>
                    <!-- /.text -->
                </div>
                <!-- .right-content -->
            </div>
            <!-- /.content widget-stat -->
        </div>
        <!-- /.box-content -->
    </div>
    <!-- /.col-lg-4 col-xs-12 -->

    <div class="col-sm-6 col-lg-3 col-xs-12">
        <div class="box-content">
            <h4 class="box-title text-orange">Users</h4>
            <!-- /.box-title -->
            <div class="dropdown js__drop_down">
                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                <!-- <ul class="sub-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else there</a></li>
                    <li class="split"></li>
                    <li><a href="#">Separated link</a></li>
                </ul> -->
                <!-- /.sub-menu -->
            </div>
            <!-- /.dropdown js__dropdown -->
            <div class="content widget-stat">
                <div id="traffic-sparkline-chart-3-custom" class="left-content"></div>
                <!-- /#traffic-sparkline-chart-3 -->
                <div class="right-content">
                    <h2 class="counter text-orange"><?= $total_reviews ?> <i class="fa fa-angle-double-up"></i></h2>
                    <!-- /.counter -->
                    <p class="text text-orange">Total Users</p>
                    <!-- /.text -->
                </div>
                <!-- .right-content -->
            </div>
            <!-- /.content widget-stat -->
        </div>
        <!-- /.box-content -->
    </div>
    <!-- /.col-sm-6 col-lg-3 col-xs-12 -->
</div>