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
    html,
    body {
      height: 0px !important;
    }

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
  <div class="wrapper" style="overflow-y: hidden">

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
                  <a class="btn btn-info btn-sm menu-center" href="<?= $url ?>" id="menu-1">Single Line Diagram</a>
                  <a class="btn btn-info btn-sm menu-center" href="<?= $url ?>scada" id="menu-2">SCADA PP1, PP2, PROD. SDP </a>
                  <a class="btn btn-info btn-sm menu-center" href="<?= $url ?>export_data" id="menu-3">Export Data</a>
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

  <audio id="buzzer" hidden>
    <source src="<?= base_url() ?>assets/sounds/buzzer.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>

  <script src="<?= $url ?>vendor/canvas-js/canvasjs.min.js"></script>
  <script src="<?= $url ?>vendor/moment-js/moment.js"></script>
  <script src="<?= $url ?>vendor/moment-js/locale/id.js"></script>
  <script src="<?= $url ?>vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>

</body>
<script>
  Audio.prototype.play = (function(play) {
    return function() {
      var audio = this,
        args = arguments,
        promise = play.apply(audio, args);
      if (promise !== undefined) {
        promise.catch(_ => {
          // Autoplay was prevented. This is optional, but add a button to start playing.
          var el = document.createElement("button");
          el.innerHTML = "Play";
          el.addEventListener("click", function() {
            play.apply(audio, args);
          });
          this.parentNode.insertBefore(el, this.nextSibling)
        });
      }
    };
  })(Audio.prototype.play);

  var oldWidth = $(window).width()
  $(document).ready(function() {
    $(document).trigger('click')
    if ($(window).width() < 1920) {
      scale = ($(window).width()) / 1920
      $('.wrapper').css('transform', 'scale(' + scale + ')')
      $('.wrapper').css('transform-origin', '0% 0%')
    }
    $(window).resize(function() {
      newWidth = $(window).width()
      if (newWidth < 1900) {
        scale = ($(window).width()) / 1920
        $('.wrapper').css('transform', 'scale(' + scale + ')')
        $('.wrapper').css('transform-origin', '0% 0%')
      } else {
        $('.wrapper').css('transform', 'scale(1)')
        $('.wrapper').css('transform-origin', '0% 0%')
      }
    })
  })

  temp = {}
  temp["pp1"] = false
  temp["pp2"] = false
  temp["sdp"] = false
  temp["cap1"] = false
  temp["cap2"] = false
  wstemp_alarm()

  function wstemp_alarm() {
    _wstemp_alarm = new WebSocket("ws://<?= NODERED ?>/ws/temp_alarm")
    _wstemp_alarm.onerror = function(error) {
      console.log('Error detected: ' + error)
    }
    _wstemp_alarm.onopen = function() {
      console.log('_wstemp_alarm connect')
    }
    _wstemp_alarm.onclose = function() {
      console.log('_wstemp_alarm disconnect')
      wstemp_alarm()
    }
    _wstemp_alarm.onmessage = function(event) {
      var indicatorParam = []
      var payload = $.parseJSON(event.data)[0]
      modul = Object.keys(payload)[0]
      temp[modul] = payload[modul] == 1
      // console.log(temp['cap1'])
    }
  }

  pp1_alarm = false
  pp2_alarm = false
  sdp_alarm = false
  cap1_alarm = false
  cap2_alarm = false
  evacuate = false
  gas_disc = false
  fire_alarm = false
  wsfire_alarm()

  function wsfire_alarm() {
    _wsfire_alarm = new WebSocket("ws://<?= NODERED ?>/ws/fire_alarm")
    _wsfire_alarm.onerror = function(error) {
      console.log('Error detected: ' + error)
    }
    _wsfire_alarm.onopen = function() {
      console.log('_wsfire_alarm connect')
    }
    _wsfire_alarm.onclose = function() {
      console.log('_wsfire_alarm disconnect')
      wsfire_alarm()
    }
    _wsfire_alarm.onmessage = function(event) {
      var indicatorParam = []
      var payload = $.parseJSON(event.data)
      // console.log(payload)
      fire_alarm = (payload.pp1 == true) && (payload.pp2 == true) && (payload.sdp == true) && (payload.cap1 == true) && (payload.cap2 == true) && (payload.evacuate == true) && (payload.gas_disc == true)
    }
  }

  var audio = document.getElementById("buzzer");
  audio.loop = true
  // play()


  setInterval(() => {
    if(fire_alarm || temp["pp1"] || temp["pp2"] || temp["sdp"] || temp["cap1"] || temp["cap2"]){
      audio.play();
      $('#menu-2').addClass('bg-red')
    } else {
      audio.pause();
      $('#menu-2').removeClass('bg-red')
    }
  }, 300);

  var menu1 = true
  var menu2 = true
  var menu3 = true

  function menu_alarm(id) {
    $('#menu-' + id).addClass('bg-red')
  }


  // var oldHeight = $(window).height()
  // $(document).ready(function() {
  //   if ($(window).height() < 1080) {
  //     scale = ($(window).height()) / 1080
  //     $('.wrapper').css('transform', 'scale(' + scale + ')')
  //     $('.wrapper').css('transform-origin', '0% 0%')
  //   }
  //   $(window).resize(function() {
  //     newHeight = $(window).height()
  //     if (newHeight < 1080) {
  //       scale = ($(window).height()) / 1080
  //       $('.wrapper').css('transform', 'scale(' + scale + ')')
  //       $('.wrapper').css('transform-origin', '0% 0%')
  //     } else {
  //       $('.wrapper').css('transform', 'scale(1)')
  //       $('.wrapper').css('transform-origin', '0% 0%')
  //     }
  //   })
  // })
</script>

</html>