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
    <div id="single-wrapper">
        <form action="<?= base_url('create-account') ?>" class="frm-single" method="POST">
            <div class="inside">
                <div class="title"><strong>GYM</strong></div>
                <!-- /.title -->
                <div class="frm-title">Register</div>
                <!-- /.frm-title -->
                <div class="frm-input"><input name="email" type="email" placeholder="Email" class="frm-inp"><i class="fa fa-envelope frm-ico"></i></div>
                <!-- /.frm-input -->
                <div class="frm-input"><input name="name" type="text" placeholder="Name" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
                <!-- /.frm-input -->
                <div class="frm-input"><input name="password" type="password" placeholder="Password" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
                <!-- /.frm-input -->
                <button type="submit" class="frm-submit">Register<i class="fa fa-arrow-circle-right"></i></button>

                <a href="<?= base_url('login') ?>" class="a-link"><i class="fa fa-sign-in"></i>Already have account? Login.</a>
                <div class="frm-footer">GYM © 2024.</div>
                <!-- /.footer -->
            </div>
            <!-- .inside -->
        </form>
        <!-- /.frm-single -->
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

</body>

</html>