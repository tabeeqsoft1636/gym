
<div class="row small-spacing">
    <div class="col-xs-12">
        <div class="box-content">
            <h4 class="box-title">Exercies List</h4>
            <div class="row">

                <div class="col-md-4">

                    <div class="input-group margin-bottom-20">
                        <div class="bootstrap-timepicker">
                            <!-- <input id="timepicker" type="text" class="form-control"> -->
                            <input type='text' readonly id='search_fromdate' class="datepicker form-control" placeholder='From date'>
                        </div>
                        <span class="input-group-addon bg-primary text-white"><i class="fa fa-calendar"></i></span>
                    </div>

                    <!-- <input type='text' readonly id='search_fromdate' class="datepicker form-control" placeholder='From date'> -->
                </div>
                <div class="col-md-4">
                    <div class="input-group margin-bottom-20">
                        <div class="bootstrap-timepicker">
                            <input type='text' readonly id='search_todate' class="datepicker form-control" placeholder='To date'>
                        </div>
                        <span class="input-group-addon bg-primary text-white"><i class="fa fa-calendar"></i></span>
                    </div>

                </div>
                <div class="col-md-4">
                    <input type='button' id="btn_search" class="btn btn-rounded waves-effect waves-light" value="Search">

                </div>
            </div>

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
            <table id="example" class="table table-striped table-bordered display dataTable" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Cell No</th>
                        <th>Room No</th>
                        <th>Comments</th>
                        <th>Quality</th>
                        <th>Timeliness</th>
                        <th>Comfort</th>
                        <th>Ambience</th>
                        <th>Review Date</th>
                    </tr>
                </thead>


            </table>
        </div>
        <!-- /.box-content -->
    </div>
</div>