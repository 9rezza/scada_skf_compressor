<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= $url ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= $url ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= $url ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= $url ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= $url ?>assets/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?= $url ?>vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css" />
  <!-- jquery-ui -->
  <link rel="stylesheet" href="<?= $url ?>assets/bower_components/jquery/external/jquery-ui/jquery-ui.min.css">


  <!-- jQuery 3 -->
  <script src="<?= $url ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jquery-ui -->
  <script src="<?= $url ?>assets/bower_components/jquery/external/jquery-ui/jquery-ui.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= $url ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <link href="<?= $url ?>vendor/bootstrap-toggle/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="<?= $url ?>vendor/bootstrap-toggle/bootstrap-toggle.min.js"></script>
  <script src="<?= $url ?>vendor/bootstrap-notify/bootstrap-notify.min.js"></script>

  <style type="text/css">
    .no-padd-side {
      padding-left: 0;
      padding-right: 0;
    }

    .mg-bottom-20 {
      margin-bottom: 20px;
    }

    .wrapper {
      width: 1920px;
      min-height: 1080px;
      height: 1080px;
      position: relative
    }

    .content {
      min-height: 1080px;
      height: 1080px;
    }

    .box {
      min-height: 1050px;
      height: 1050px;
      margin-bottom: 0;
    }

    .main-footer {
      position: absolute;
      bottom: 0px;
      width: 100%;
    }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?= $url ?>vendor/fontawesome/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<body class="hold-transition skin-black sidebar-collapse">
  <div class="wrapper">

    <style>
      .menu-center {
        margin-bottom: 5px;
        font-size: 18px;
        color: #fff;
        background-color: #2e95b4;
        /* background-color: #1c34df; */
        border: 1px solid #1d7791;
      }

      .dropdown {
        position: relative;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #e2efff;
        min-width: 170px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        left: -120px;
        font-size: 16px;
        padding: 10px;
        border-radius: 15px;
      }

      .menu-dropdown {
        display: block;
        overflow: hidden;
      }

      .menu-dropdown button.disabled,
      button.disabled :hover {
        opacity: 0.1;
      }

      .menu-dropdown .checkbox .toggle-off {
        background: #e6e6e6 !important;
      }

      .menu-dropdown .checkbox .toggle-on {
        padding-left: 0 !important;
      }

      .menu-dropdown .checkbox .toggle-handle {
        background: #f4f4f4 !important;
        height: 20px;
      }

      .menu-dropdown .checkbox {
        margin: 0 0 0 0 !important;
        /* height: 20px; */
      }

      /* .menu-dropdown .checkbox .toggle, .toggle-on, .toggle-off, .toggle-group{
        padding: 0 0 0 0 !important;
        height: 20px;
      } */
    </style>
    <div class="content-wrapper bg-white">

      <!-- Main content -->
      <section class="content">

        <div class="row">
          <div class="col-xs-12">
            <div class="box box-solid box-grey">
              <div class="box-header" style="padding-bottom: 0;">

                <div class="col-xs-2">
                  <i class="fa fa-calendar-o hidden"></i>
                  <h3 class="box-title hidden">DEMO</h3>
                  <i class="fa fa-circle text-success circleEdit hidden" style="display:none">(Edit mode)</i>
                </div>
                <div class="col-xs-8 text-center" style="padding-top: 0px; color: #b3b3b3">
                  <a class="btn btn-info btn-sm menu-center" href="<?= $url ?>">Single Line Diagram</a>
                  <a class="btn btn-info btn-sm menu-center" href="<?= $url ?>scada">SCADA PP1, PP2, PROD. SDP </a>
                  <a class="btn btn-info btn-sm menu-center" href="<?= $url ?>export_data">Export Data</a>
                </div>
                <div class="col-xs-2 hidden">
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-primary btn-sm" id="btn-dropdown"><i class="fa fa-bars"></i>
                      Menu
                    </button>
                    <div id="myDropdown" class="dropdown-content">
                      <div class="menu-dropdown">
                        <div class="pull-left">
                          <b>Random</b>
                        </div>
                        <div class="pull-right">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" id="toggle-random" data-toggle="toggle" data-size="mini" checked>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="menu-dropdown">
                        <div class="pull-left">
                          <b>Toggle View</b>
                        </div>
                        <div class="pull-right">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" id="toggle-view" data-toggle="toggle" data-size="mini">
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="menu-dropdown">
                        <div class="pull-left">
                          <b>View Mode</b>
                        </div>
                        <div class="pull-right">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" id="view-mode" data-toggle="toggle" data-size="mini">
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <script>
                  $("#btn-dropdown").click(function() {
                    $('#myDropdown').toggle();
                  });
                </script>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <!-- Content Wrapper. Contains page content -->
                <?= $_content ?>

                <!-- /.row -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer" hidden>
      <div class="pull-right hidden-xs">
        Theme by <a href="https://adminlte.io">Almsaeed Studio</a>.</strong>
      </div>
      <img src="<?= $url ?>assets/images/logo_nama.png" height="30" hidden />
      <strong>&copy; 2019.</strong>
    </footer>

  </div>
  <!-- ./wrapper -->

  <!-- SlimScroll -->
  <script src="<?= $url ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?= $url ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= $url ?>assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= $url ?>assets/dist/js/demo.js"></script>
  <!-- BlockUI -->
  <script src="<?= $url ?>vendor/blockui/jquery.blockUI.js"></script>
  <!-- jQuery Highchart
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>

<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script> -->


  <script src="<?= $url ?>vendor/canvas-js/canvasjs.min.js"></script>
  <script src="<?= $url ?>vendor/moment-js/moment.js"></script>
  <script src="<?= $url ?>vendor/moment-js/locale/id.js"></script>
  <script src="<?= $url ?>vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>

</body>

</html>