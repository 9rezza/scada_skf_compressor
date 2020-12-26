<div class="row">
  <style>
    /* .min-1080{
                  min-width: 1080px;
                  background-image: url("assets/images/blue-background-2.jpg");
                } */
  </style>
  <div class="col-xs-12 col-md-12 min-1080">

    <style>
      @font-face {
        font-family: "Digital-7";
        src: url("vendor/digital-7/digital-7-webfont.woff") format("woff");
      }

      .bg-white {
        /* background-color: #e8fdff; */
      }

      /* .main-header{
                    background-color: #e8fdff;
                    color: white;
                  } */
      .scrollable {
        overflow: scroll;
      }

      .box-grey {
        /* background-color: #c6d6ff; */
        min-width: 1080px;
        background-image: url("assets/images/blue-background-2.jpg");
        font-family: Consolas, Arial, sans-serif;
        font-weight: normal;
        font-style: normal;
        /* color: white; */
      }

      .box-header h1,
      h2,
      h3,
      h4,
      h5 {
        font-family: 'Digital-7', Arial, sans-serif;
        font-weight: normal;
        font-style: normal;
        /* color: white; */
      }

      .form-inline .form-control {
        display: inline-block !important;
        width: auto !important;
        vertical-align: middle !important;
      }
    </style>

    <div class="col-xs-12" style="padding: 5px">
      <div class="container-fluid">
        <h1>Export Data</h1>

        <form class="form-inline" action="<?= base_url() ?>export_data_download" method="post">
          <label for="modul">Data:</label>
          <select class="form-control" id="modul" name="modul">
            <option value="pp1">COMP. PP1</option>
            <option value="pp2">COMP. PP2</option>
            <option value="sdp">COMP. PROD SDP</option>
            <option value="comp1">COMPRESSOR 1</option>
            <option value="comp2">COMPRESSOR 2</option>
            <option value="comp3">COMPRESSOR 3</option>
            <option value="comp4">COMPRESSOR 4</option>
            <option value="comp5">COMPRESSOR 5</option>
            <option value="comp6">COMPRESSOR 6</option>
            <option value="comp7">COMPRESSOR 7</option>
            <option value="comp8">COMPRESSOR 8</option>
            <option value="ct">COOLING TOWER</option>
            <option value="cap1">CAPACITOR BANK 1</option>
            <option value="cap2">CAPACITOR BANK 2</option>
            <option value="temp">TEMPERATUR PANEL</option>
            <option value="alarm">ALARM EVENT</option>
          </select>
          <label for="from" style="padding-left: 40px">Tanggal:</label>
          <input type="text" class="form-control" id="from" name="from">
          <label for="to">s/d</label>
          <input type="text" class="form-control" id="to" name="to">

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

  </div>

</div>


<script src="<?= $url ?>vendor/moment-js/moment.js"></script>
<script src="<?= $url ?>vendor/moment-js/locale/id.js"></script>
<script src="<?= $url ?>vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script>
  $('#from').datetimepicker({
    locale: 'id',
    format: 'YYYY-MM-DD',
    maxDate: 'now',
  });
  $('#to').datetimepicker({
    locale: 'id',
    format: 'YYYY-MM-DD',
    maxDate: 'now',
  });
</script>