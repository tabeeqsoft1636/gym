<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Main Styles -->
    <link rel="stylesheet" href="<?= asset_url() ?>admin/styles/style.min.css">

    <!-- Material Design Icon -->
    <link rel="stylesheet" href="<?= asset_url() ?>admin/fonts/material-design/css/materialdesignicons.css">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="<?= asset_url() ?>admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="<?= asset_url() ?>admin/plugin/waves/waves.min.css">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?= asset_url() ?>admin/plugin/sweet-alert/sweetalert.css">

    <!-- Percent Circle -->
    <link rel="stylesheet" href="<?= asset_url() ?>admin/plugin/percircle/css/percircle.css">

    <!-- Chartist Chart -->
    <link rel="stylesheet" href="<?= asset_url() ?>admin/plugin/chart/chartist/chartist.min.css">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="<?= asset_url() ?>admin/plugin/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?= asset_url() ?>admin/plugin/fullcalendar/fullcalendar.print.css" media='print'>

    <!-- Dark Themes -->
    <link rel="stylesheet" href="<?= asset_url() ?>admin/styles/style-dark.min.css">

    <!-- Data Tables -->
    <link rel="stylesheet" href="<?= asset_url() ?>admin/plugin/datatables/media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?= asset_url() ?>admin/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css">

    <!-- Datepicker -->
	<link rel="stylesheet" href="<?= asset_url() ?>admin/plugin/datepicker/css/bootstrap-datepicker.min.css">

    
</head>

<body>
    <?php $this->load->view('includes/left_menu'); ?>
    <?php $this->load->view('includes/header'); ?>
    <div id="wrapper">
        <div class="main-content">
            <?= $content ?>
            <?php $this->load->view('includes/footer'); ?>
        </div>
    </div>

    <script>
        var base_url = '<?= base_url(); ?>';
    </script>
    <script src="<?= asset_url() ?>admin/scripts/jquery.min.js"></script>
    <script src="<?= asset_url() ?>admin/scripts/modernizr.min.js"></script>
    <script src="<?= asset_url() ?>admin/plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= asset_url() ?>admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= asset_url() ?>admin/plugin/nprogress/nprogress.js"></script>
    <script src="<?= asset_url() ?>admin/plugin/sweet-alert/sweetalert.min.js"></script>
    <script src="<?= asset_url() ?>admin/plugin/waves/waves.min.js"></script>
    <!-- Full Screen Plugin -->
    <script src="<?= asset_url() ?>admin/plugin/fullscreen/jquery.fullscreen-min.js"></script>

    <!-- Google Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- chart.js Chart -->
    <script src="<?= asset_url() ?>admin/plugin/chart/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= asset_url() ?>admin/scripts/chart.chartjs.init.min.js"></script>

    <!-- FullCalendar -->
    <script src="<?= asset_url() ?>admin/plugin/moment/moment.js"></script>
    <script src="<?= asset_url() ?>admin/plugin/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?= asset_url() ?>admin/scripts/fullcalendar.init.js"></script>

    <!-- Sparkline Chart -->
    <script src="<?= asset_url() ?>admin/plugin/chart/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= asset_url() ?>admin/scripts/chart.sparkline.init.min.js"></script>
    <!-- Validator -->
	<script src="<?= asset_url() ?>admin/plugin/validator/validator.min.js"></script>
    <script src="<?= asset_url() ?>admin/scripts/main.min.js"></script>
    <!-- Data Tables -->
    
    <script>
        $(document).ready(function() {

            // Date Range Picker initialization
            $('#dateRangePicker').daterangepicker();

            // Filter Button Click Event
            $('#filterButton').on('click', function() {
                // Get selected date range
                var selectedDateRange = $('#dateRangePicker').val();

                // Perform custom AJAX request with the selected date range
                $.ajax({
                    url: "<?= base_url() ?>search",
                    type: "POST",
                    dataType: "json",
                    data: {
                        dateRange: selectedDateRange
                    }, // Include date range in the request
                    success: function(response) {
                        // Assuming your server response has a 'data' property containing the array of records
                        dataTable.clear().rows.add(response.data).draw();
                    },
                    error: function(error) {
                        console.error("Error fetching data:", error);
                    }
                });
            });
        });
    </script>
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- jQuery UI JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- Datepicker -->
	<script src="<?= asset_url() ?>admin/plugin/datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Data Tables -->
    <script src="<?= asset_url() ?>admin/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?= asset_url() ?>admin/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= asset_url() ?>admin/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= asset_url() ?>admin/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js"></script>
    
    <script>
        // DataTable initialization
        $(document).ready(function() {
            // Datapicker 
            $(".datepicker").datepicker({
                "dateFormat": "yy-mm-dd",
                changeYear: true
            });
            var dataTable = $('#example').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                'searching': true,
                'pageLength': 10,
                'ajax': {
                    'url': '<?= base_url() ?>search',
                    'type': 'POST', // Ensure it's a POST request
                    'data': function(data) {
                        // Read values
                        var from_date = $('#search_fromdate').val();
                        var to_date = $('#search_todate').val();

                        // Append to data
                        data.searchByFromdate = from_date;
                        data.searchByTodate = to_date;
                        data.start = data.start || 0; // Include start parameter
                        data.length = data.length || 10; // Include length parameter
                    }
                },
                'columns': [{
                        data: 'customer_name'
                    },
                    {
                        data: 'contact_no'
                    },
                    {
                        data: 'roomId'
                    },
                    {
                        data: 'comments'
                    },
                    {
                        data: 'quality',
                        render: function(data, type, row) {
                            var cssClass = (data && data == 'poor') ? 'text-danger' : 'text-success';
                            return '<span class="' + cssClass + '">' + (data || '') + '</span>';
                        }
                    },
                    {
                        data: 'timeliness',
                        render: function(data, type, row) {
                            var cssClass = (data && data == 'poor') ? 'text-danger' : 'text-success';
                            return '<span class="' + cssClass + '">' + (data || '') + '</span>';
                        }
                    },
                    {
                        data: 'comfort',
                        render: function(data, type, row) {
                            var cssClass = (data && data == 'poor') ? 'text-danger' : 'text-success';
                            return '<span class="' + cssClass + '">' + (data || '') + '</span>';
                        }
                    },
                    {
                        data: 'ambience',
                        render: function(data, type, row) {
                            var cssClass = (data && data == 'poor') ? 'text-danger' : 'text-success';
                            return '<span class="' + cssClass + '">' + (data || '') + '</span>';
                        }
                    },
                    {
                        data: 'checkout_date',
                        // render: function(data, type, row) {
                        //     if (!data) return ''; // Handle null or undefined date
                        //     var timestamp = new Date(data * 1000); // Assuming 'checkout_date' is a UNIX timestamp
                        //     var formattedDate = ('0' + timestamp.getDate()).slice(-2) + '-' + ('0' + (timestamp.getMonth() + 1)).slice(-2) + '-' + timestamp.getFullYear();
                        //     return formattedDate;
                        // }
                    },
                ]
            });

            // Search button
            $('#btn_search').click(function() {
                dataTable.draw();
            });
        });
    </script>
</body>

</html>