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

      .table-main {
        border: none;
        width: 100%;
      }

      .table-main .vertical-line {
        width: 2.5%;
      }

      .table-main .table-child {
        width: 17.5%;
      }

      .table-main .sdp-vertical-line {
        width: 2.5%;
      }

      .table-main .sdp-table-child {
        width: 8%;
      }

      .table-main .vertical-line-pp2 {
        width: 2.5%;
      }

      .table-main .table-child-pp2 {
        width: 14%;
      }

      .table-main .sdp-vertical-line-pp2 {
        width: 2.5%;
      }

      .table-main .sdp-table-child-pp2 {
        width: 8%;
      }

      .direction td {
        height: 5px;
      }

      .parent-parameter h1 {
        font-family: Arial, sans-serif;
        font-weight: normal;
        font-style: normal;
        font-size: 40px;
      }

      .parent-parameter td:first-child {
        height: 125px;
      }

      .parent-parameter td {
        font-weight: bold;
        position: relative;
        /* width: 100%; */
      }

      .parent-parameter canvas.core-vertical {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0px;
        left: 0px;
      }

      .parent-parameter .core-parameter {
        -webkit-box-shadow: inset 0px 0px 0px 2px #000;
        -moz-box-shadow: inset 0px 0px 0px 2px #000;
        box-shadow: inset 0px 0px 0px 2px #000;

        margin-left: 25%;
        margin-right: 25%;
        height: 100%;
        position: relative;
        border-radius: 7px;
        /* width:50%; */

        overflow: hidden;
        text-align: right;
      }

      .parent-parameter .core-parameter .title-core {
        margin-left: 5%;
        margin-right: 5%;
        margin-bottom: 5%;
        margin-top: 2px;
        padding: 3px 0 3px 0;
        border-bottom: 2px solid black;
        font-size: 17px;
      }

      .parent-parameter .core-parameter .content-core {
        margin-right: 4px;
        font-size: 17px;
        line-height: 12px;
        font-weight: bold;
      }

      .parent-parameter .core-parameter .content-core .nilai {
        margin-right: 5px;
        display: inline-block;
      }

      .parent-parameter .core-parameter .content-core .satuan {
        display: inline-block;
        text-align: left;
      }

      .parent-parameter .core-parameter canvas {
        position: absolute;
        width: 97.5%;
        height: 15px;
        left: 0px;
        bottom: 2px;
        margin-left: 2px;
        margin-right: 2px;
        overflow: hidden;
        border: 1px solid black;
        background-color: #e8e8e8;
        border-radius: 5px;
      }

      .parent-parameter-second td {
        position: relative;
      }

      .parent-parameter-second td {
        height: 30px;
      }

      .parent-parameter-second canvas {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0px;
        left: 0px;
      }

      .parent-parameter-third td {
        position: relative;
      }

      .parent-parameter-third td {
        height: 20px;
      }

      .parent-parameter-third canvas {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0px;
        left: 0px;
      }

      .parent-parameter-third .circuit-image {
        position: relative;
        width: 100%;
        text-align: center;
      }

      .parent-parameter-third img {
        position: relative;
        width: 120px;
        margin-top: -5px;
      }

      .sdp-parent-parameter h1 {
        font-family: Arial, sans-serif;
        font-weight: normal;
        font-style: normal;
        font-size: 40px;
      }

      .sdp-parent-parameter td:first-child {
        height: 10px;
        font-weight: bold;
        position: relative;
        /* width: 100%; */
      }

      .sdp-parent-parameter td {
        position: relative;
      }

      .sdp-parent-parameter canvas.core-vertical {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0px;
        left: 0px;
      }

      .sdp-parent-parameter .sdp-core-parameter {
        -webkit-box-shadow: inset 0px 0px 0px 2px #000;
        -moz-box-shadow: inset 0px 0px 0px 2px #000;
        box-shadow: inset 0px 0px 0px 2px #000;

        height: 100%;
        position: relative;
        border-radius: 7px;
        /* width:50%; */

        overflow: hidden;
        text-align: right;
      }

      .sdp-parent-parameter .sdp-core-parameter .title-core {
        margin-left: 5%;
        margin-right: 5%;
        margin-bottom: 5%;
        margin-top: 2px;
        padding: 3px 0 3px 0;
        border-bottom: 2px solid black;
        font-size: 17px;
      }

      .sdp-parent-parameter .sdp-core-parameter .content-core {
        margin-right: 4px;
        font-size: 17px;
        line-height: 9.5px;
        font-weight: bold;
      }

      .sdp-parent-parameter .sdp-core-parameter .content-core .nilai {
        margin-right: 5px;
        display: inline-block;
      }

      .sdp-parent-parameter .sdp-core-parameter .content-core .satuan {
        display: inline-block;
        text-align: left;
      }

      .sdp-parent-parameter .sdp-core-parameter canvas {
        position: absolute;
        width: 97.5%;
        height: 15px;
        left: 0px;
        bottom: 2px;
        margin-left: 2px;
        margin-right: 2px;
        overflow: hidden;
        border: 1px solid black;
        background-color: #e8e8e8;
        border-radius: 5px;
      }

      .sdp-parent-parameter-second {
        height: 50px;
      }

      .sdp-parent-parameter-second td {
        position: relative;
      }

      .sdp-parent-parameter-second td canvas.core-vertical {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0px;
        left: 0px;
      }

      .circuit {
        height: 40px;
      }

      .circuit td {
        position: relative;
      }

      .circuit canvas {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0px;
        left: 0px;
      }

      .circuit-half {
        height: 10px;
      }

      .circuit-half td {
        position: relative;
      }

      .circuit-half canvas {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0px;
        left: 0px;
      }

      .child-parameter td {
        position: relative;
      }

      .child-parameter canvas.to-bank-capasitor {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0px;
        left: 0px;
      }

      .circuit-trafo td {
        height: 100px;
        text-align: center;
      }

      .circuit-trafo img {
        height: 100%;
      }

      .child-parameter td {
        position: relative;
        height: 85px;
        /* padding-bottom: 15px; */
        font-weight: bold;
        vertical-align: top;
      }

      .child-parameter .parameter {
        -webkit-box-shadow: inset 0px 0px 0px 2px #000;
        -moz-box-shadow: inset 0px 0px 0px 2px #000;
        box-shadow: inset 0px 0px 0px 2px #000;
        border-radius: 7px;
      }

      .child-parameter .title-parameter {
        margin-left: 5%;
        margin-right: 5%;
        margin-bottom: 5%;
        margin-top: 2px;
        border-bottom: 2px solid black;
        padding: 3px 0 3px 0;
        font-size: 16px;
      }

      .child-parameter .content-parameter {
        margin-right: 4px;
        font-size: 17px;
        line-height: 10px;
        font-weight: bold;
      }

      .child-parameter .nilai {
        margin-right: 5px;
        display: inline-block;
        width: 63%;
        line-height: 0.6em;
      }

      .child-parameter .nilai input {
        width: 90%;
        height: 15px;
        margin-bottom: 5px;
        vertical-align: top;
        text-align: right;
        line-height: 0.6em;
      }

      .child-parameter .satuan {
        display: inline-block;
        text-align: left;
        width: 25%;
        line-height: 0.6em;
      }

      .body-parameter canvas {
        position: absolute;
        width: 97.5%;
        height: 15px;
        left: 0px;
        bottom: 2px;
        margin-left: 2px;
        margin-right: 2px;
        overflow: hidden;
        border: 1px solid black;
        background-color: #e8e8e8;
        border-radius: 5px;
      }

      /* .content-parameter{
                    vertical-align: middle;                    
                  } */
      .persentase {
        border: 2px solid red;
        border-radius: 50%;
        width: 60%;
        margin-left: 20%;
        height: 80px;
        background-color: red;
        color: #FFF;
        /* font-size: 30px; */
      }

      .persentase p {
        font-size: 30px;
        vertical-align: middle;
        margin-top: 30px;
        /* white-space: 0px; */
      }

      .table-main {
        /* border: 4px solid #b3b3b3; */
      }

      .table-main td {
        outline: 1px solid black;
        outline: none;
      }

      .area {
        outline: 4px solid #b3b3b3;
        padding: 5px 5px 10px 5px;
      }
    </style>

    <div class="col-sm-7" style="padding: 5px; width: 55%; float: left">
      <div class="area">
        <table class="table-main">
          <thead>
            <tr class="direction">
              <td class="vertical-line-pp2"></td>
              <td class="table-child-pp2"></td>
              <td class="vertical-line-pp2"></td>
              <td class="table-child-pp2"></td>
              <td class="vertical-line-pp2"></td>
              <td class="table-child-pp2"></td>
              <td class="vertical-line-pp2"></td>
              <td class="table-child-pp2"></td>
              <td class="vertical-line-pp2"></td>
              <td class="table-child-pp2"></td>
              <td class="vertical-line-pp2"></td>
              <td class="table-child-pp2"></td>
            </tr>
          </thead>
          <tbody>
            <tr class="circuit-half">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><canvas id="pp2_incoming-vertical" data-value="true"></canvas></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="circuit">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><canvas id="pp2_vertical-core" data-value="true"></canvas></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="parent-parameter">
              <td></td>
              <td rowspan="3">
                <h1>COMP. PP2</h1>
              </td>
              <td class="text-center" rowspan="2"></td>
              <td colspan="3" rowspan="3">
                <div class="core-parameter">
                  <div class="text-center title-core">
                    Incoming PP2
                  </div>
                  <div class="text-right content-core">
                    <div class="nilai">
                      <p id="pp2_aavg">##.#</p>
                      <p id="pp2_vrn">###.#</p>
                      <p id="pp2_vsn">###.#</p>
                      <p id="pp2_vtn">###.#</p>
                      <p id="pp2_pf">#.##</p>
                      <p id="pp2_kw">####</p>
                      <p id="pp2_kva">####</p>
                      <p id="pp2_thdi">#.##</p>
                      <p id="pp2_thdv">#.##</p>
                      <p id="pp2_kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="parent-parameter-second">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><canvas id="pp2_circuit-to-bank-capasitor-2" class="pp2_to-cap"></canvas></td>
              <td><canvas id="pp2_circuit-to-bank-capasitor-3" class="pp2_to-cap"></canvas></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="parent-parameter-third">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><canvas id="pp2_circuit-to-bank-capasitor-1" class="pp2_to-cap"></canvas></td>
              <td rowspan="3">
                <div class="circuit-image"><img src="<?= $url ?>assets/images/cap_bank.png"></div>
              </td>
              <td></td>
            </tr>
            <tr class="circuit">
              <?php for ($i = 1; $i <= 7; $i++) { ?>
                <?php if ($i == 7) { ?>
                  <td><canvas id="pp2_parameter-<?= $i ?>"></canvas></td>
                <?php } else { ?>
                  <td><canvas id="pp2_line-<?= $i ?>"></canvas></td>
                  <td><canvas id="pp2_parameter-<?= $i ?>"></canvas></td>
                <?php } ?>
              <?php } ?>
            </tr>
            <tr class="circuit">
              <?php for ($i = 1; $i <= 7; $i++) { ?>
                <?php if ($i == 6) { ?>
                  <td><canvas id="pp2_gap-socket-<?= $i ?>" class="socket" data-value="true" data-id="<?= $i ?>"></canvas></td>
                  <td><canvas id="pp2_socket-<?= $i ?>" class="socket" data-value="true" data-id="<?= $i ?>"></canvas></td>
                <?php } else if ($i == 7) { ?>
                  <td></td>
                <?php } else { ?>
                  <td></td>
                  <td><canvas id="pp2_socket-<?= $i ?>" class="socket" data-value="true" data-id="<?= $i ?>"></canvas></td>
                <?php } ?>
              <?php } ?>
            </tr>
            <tr class="child-parameter">

              <td rowspan="3"></td>
              <td rowspan="3" class="parameter">
                <div class="body-parameter">
                  <div class="text-center title-parameter" id="comp2_title" data-id="2">
                    Compressor 2
                  </div>
                  <div class="content-parameter text-right main">
                    <div class="nilai">
                      <p id="comp2_aavg">##.#</p>
                      <p id="comp2_vrn">###.#</p>
                      <p id="comp2_vsn">###.#</p>
                      <p id="comp2_vtn">###.#</p>
                      <p id="comp2_pf">#.##</p>
                      <p id="comp2_kw">####</p>
                      <p id="comp2_kva">####</p>
                      <p id="comp2_thdi">#.##</p>
                      <p id="comp2_thdv">#.##</p>
                      <p id="comp2_kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>


              <td rowspan="3"></td>
              <td rowspan="3" class="parameter">
                <div class="body-parameter">
                  <div class="text-center title-parameter" id="comp3_title" data-id="3">
                    Compressor 3
                  </div>
                  <div class="content-parameter text-right main">
                    <div class="nilai">
                      <p id="comp3_aavg">##.#</p>
                      <p id="comp3_vrn">###.#</p>
                      <p id="comp3_vsn">###.#</p>
                      <p id="comp3_vtn">###.#</p>
                      <p id="comp3_pf">#.##</p>
                      <p id="comp3_kw">####</p>
                      <p id="comp3_kva">####</p>
                      <p id="comp3_thdi">#.##</p>
                      <p id="comp3_thdv">#.##</p>
                      <p id="comp3_kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>


              <td rowspan="3"></td>
              <td rowspan="3" class="parameter">
                <div class="body-parameter">
                  <div class="text-center title-parameter" id="comp4_title" data-id="4">
                    Compressor 4
                  </div>
                  <div class="content-parameter text-right main">
                    <div class="nilai">
                      <p id="comp4_aavg">##.#</p>
                      <p id="comp4_vrn">###.#</p>
                      <p id="comp4_vsn">###.#</p>
                      <p id="comp4_vtn">###.#</p>
                      <p id="comp4_pf">#.##</p>
                      <p id="comp4_kw">####</p>
                      <p id="comp4_kva">####</p>
                      <p id="comp4_thdi">#.##</p>
                      <p id="comp4_thdv">#.##</p>
                      <p id="comp4_kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>

              
              <td rowspan="3"></td>
              <td rowspan="3" class="parameter">
                <div class="body-parameter">
                  <div class="text-center title-parameter" id="comp6_title" data-id="2">
                    Compressor 6
                  </div>
                  <div class="content-parameter text-right main">
                    <div class="nilai">
                      <p id="comp6_aavg">##.#</p>
                      <p id="comp6_vrn">###.#</p>
                      <p id="comp6_vsn">###.#</p>
                      <p id="comp6_vtn">###.#</p>
                      <p id="comp6_pf">#.##</p>
                      <p id="comp6_kw">####</p>
                      <p id="comp6_kva">####</p>
                      <p id="comp6_thdi">#.##</p>
                      <p id="comp6_thdv">#.##</p>
                      <p id="comp6_kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>


              <td rowspan="3"></td>
              <td rowspan="3" class="parameter">
                <div class="body-parameter">
                  <div class="text-center title-parameter" id="ct_title" data-id="4">
                    Cooling Tower
                  </div>
                  <div class="content-parameter text-right main">
                    <div class="nilai">
                      <p id="ct_aavg">##.#</p>
                      <p id="ct_vrn">###.#</p>
                      <p id="ct_vsn">###.#</p>
                      <p id="ct_vtn">###.#</p>
                      <p id="ct_pf">#.##</p>
                      <p id="ct_kw">####</p>
                      <p id="ct_kva">####</p>
                      <p id="ct_thdi">#.##</p>
                      <p id="ct_thdv">#.##</p>
                      <p id="ct_kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>


              <td rowspan="3"></td>
              <td rowspan="3" class="parameter">
                <div class="body-parameter">
                  <div class="text-center title-parameter" id="cap1_title" data-id="4">
                    Cap. Bank 1
                  </div>
                  <div class="content-parameter text-right main">
                    <div class="nilai">
                      <p id="cap1_aavg">##.#</p>
                      <p id="cap1_vrn">###.#</p>
                      <p id="cap1_vsn">###.#</p>
                      <p id="cap1_vtn">###.#</p>
                      <p id="cap1_pf">#.##</p>
                      <p id="cap1_kw">####</p>
                      <p id="cap1_kva">####</p>
                      <p id="cap1_thdi">#.##</p>
                      <p id="cap1_thdv">#.##</p>
                      <p id="cap1_kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>

              <td style="height: 70px;"></td>
              <!-- <td><canvas id="pp2_circuit-to-bank-capasitor-vertical-1" class="to-bank-capasitor" data-value="true" data-id="1"></td>
              <td><canvas id="pp2_circuit-to-bank-capasitor-vertical-2" class="to-bank-capasitor" data-value="true" data-id="2"></td> -->
              <td></td>
              <td></td>
            </tr>
            <tr class="circuit">
              <td style="height: 70px;"></td>
              <!-- <td><canvas id="pp2_circuit-to-bank-capasitor-corner-left" class="to-bank-capasitor" data-value="true" data-id="1"></canvas></td>
              <td><canvas id="pp2_circuit-to-bank-capasitor-corner-right" class="to-bank-capasitor" data-value="true" data-id="1"></canvas></td> -->
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td style="height: 70px;"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="col-sm-5" style="padding: 5px 5px 5px 5px; width: 45%; float: left">
      <div class="area">
        <table class="table-main">
          <thead>
            <tr class="direction">
              <td class="vertical-line"></td>
              <td class="table-child"></td>
              <td class="vertical-line"></td>
              <td class="table-child"></td>
              <td class="vertical-line"></td>
              <td class="table-child"></td>
              <td class="vertical-line"></td>
              <td class="table-child"></td>
              <td class="vertical-line"></td>
              <td class="table-child"></td>
            </tr>
          </thead>
          <tbody>
            <tr class="circuit-half">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><canvas id="pp1-incoming-vertical" data-value="true"></canvas></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="circuit">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><canvas id="pp1-vertical-core" data-value="true"></canvas></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="parent-parameter">
              <td></td>
              <td>
                <h1>COMP. PP1</h1>
              </td>
              <td class="text-center" rowspan="3"></td>
              <td colspan="3" rowspan="3">
                <div class="core-parameter">
                  <div class="text-center title-core">
                    Incoming PP1
                  </div>
                  <div class="text-right content-core">
                    <div class="nilai">
                      <p id="pp1_aavg">##.#</p>
                      <p id="pp1_vrn">###.#</p>
                      <p id="pp1_vsn">###.#</p>
                      <p id="pp1_vtn">###.#</p>
                      <p id="pp1_pf">#.##</p>
                      <p id="pp1_kw">####</p>
                      <p id="pp1_kva">####</p>
                      <p id="pp1_thdi">#.##</p>
                      <p id="pp1_thdv">#.##</p>
                      <p id="pp1_kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="parent-parameter-second">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><canvas id="pp1-circuit-to-bank-capasitor-2"></canvas></td>
              <td><canvas id="pp1-circuit-to-bank-capasitor-3"></canvas></td>
            </tr>
            <tr class="parent-parameter-third">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><canvas id="pp1-circuit-to-bank-capasitor-1"></canvas></td>
              <td rowspan="3">
                <div class="circuit-image"><img src="<?= $url ?>assets/images/cap_bank.png"></div>
              </td>
            </tr>
            <tr class="circuit">
              <?php for ($i = 1; $i <= 5; $i++) { ?>
                <td><canvas id="pp1-line-<?= $i ?>"></canvas></td>
                <td><canvas id="pp1-parameter-<?= $i ?>"></canvas></td>
              <?php } ?>
            </tr>
            <tr class="circuit">
              <?php for ($i = 1; $i <= 5; $i++) { ?>
                <td></td>
                <td><canvas id="pp1-socket-<?= $i ?>" class="socket" data-value="true" data-id="<?= $i ?>"></canvas></td>
              <?php } ?>
            </tr>
            <tr class="child-parameter">


              <td rowspan="3"></td>
              <td rowspan="3" class="parameter">
                <div class="body-parameter">
                  <div class="text-center title-parameter" id="comp1_title" data-id="1">
                    Compressor 1
                  </div>
                  <div class="content-parameter text-right main">
                    <div class="nilai">
                      <p id="comp1_aavg">##.#</p>
                      <p id="comp1_vrn">###.#</p>
                      <p id="comp1_vsn">###.#</p>
                      <p id="comp1_vtn">###.#</p>
                      <p id="comp1_pf">#.##</p>
                      <p id="comp1_kw">####</p>
                      <p id="comp1_kva">####</p>
                      <p id="comp1_thdi">#.##</p>
                      <p id="comp1_thdv">#.##</p>
                      <p id="comp1_kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>


              <td rowspan="3"></td>
              <td rowspan="3" class="parameter">
                <div class="body-parameter">
                  <div class="text-center title-parameter" id="comp5_title" data-id="1">
                    Compressor 5
                  </div>
                  <div class="content-parameter text-right main">
                    <div class="nilai">
                      <p id="comp5_aavg">##.#</p>
                      <p id="comp5_vrn">###.#</p>
                      <p id="comp5_vsn">###.#</p>
                      <p id="comp5_vtn">###.#</p>
                      <p id="comp5_pf">#.##</p>
                      <p id="comp5_kw">####</p>
                      <p id="comp5_kva">####</p>
                      <p id="comp5_thdi">#.##</p>
                      <p id="comp5_thdv">#.##</p>
                      <p id="comp5_kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>


              <td rowspan="3"></td>
              <td rowspan="3" class="parameter">
                <div class="body-parameter">
                  <div class="text-center title-parameter" id="comp7_title" data-id="3">
                    Compressor 7
                  </div>
                  <div class="content-parameter text-right main">
                    <div class="nilai">
                      <p id="comp7_aavg">##.#</p>
                      <p id="comp7_vrn">###.#</p>
                      <p id="comp7_vsn">###.#</p>
                      <p id="comp7_vtn">###.#</p>
                      <p id="comp7_pf">#.##</p>
                      <p id="comp7_kw">####</p>
                      <p id="comp7_kva">####</p>
                      <p id="comp7_thdi">#.##</p>
                      <p id="comp7_thdv">#.##</p>
                      <p id="comp7_kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>


              <td rowspan="3"></td>
              <td rowspan="3" class="parameter">
                <div class="body-parameter">
                  <div class="text-center title-parameter" id="comp8_title" data-id="4">
                    Compressor 8
                  </div>
                  <div class="content-parameter text-right main">
                    <div class="nilai">
                      <p id="comp8_aavg">##.#</p>
                      <p id="comp8_vrn">###.#</p>
                      <p id="comp8_vsn">###.#</p>
                      <p id="comp8_vtn">###.#</p>
                      <p id="comp8_pf">#.##</p>
                      <p id="comp8_kw">####</p>
                      <p id="comp8_kva">####</p>
                      <p id="comp8_thdi">#.##</p>
                      <p id="comp8_thdv">#.##</p>
                      <p id="comp8_kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>


              <td rowspan="3"></td>
              <td rowspan="3" class="parameter">
                <div class="body-parameter">
                  <div class="text-center title-parameter" id="cap2-title" data-id="4">
                    Cap. Bank 2
                  </div>
                  <div class="content-parameter text-right main">
                    <div class="nilai">
                      <p id="cap2_aavg">##.#</p>
                      <p id="cap2_vrn">###.#</p>
                      <p id="cap2_vsn">###.#</p>
                      <p id="cap2_vtn">###.#</p>
                      <p id="cap2_pf">#.##</p>
                      <p id="cap2_kw">####</p>
                      <p id="cap2_kva">####</p>
                      <p id="cap2_thdi">#.##</p>
                      <p id="cap2_thdv">#.##</p>
                      <p id="cap2_kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>

              <td></td>
            </tr>
            <tr class="circuit">
              <td style="height: 70px;"></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td style="height: 70px;"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="col-sm-12" style="padding: 5px">
      <div class="area">
        <table class="table-main">
          <thead>
            <tr class="direction">
              <td class="sdp-vertical-line"></td>
              <td class="sdp-table-child"></td>
              <td class="sdp-vertical-line"></td>
              <td class="sdp-table-child"></td>
              <td class="sdp-vertical-line"></td>
              <td class="sdp-table-child"></td>
              <td class="sdp-vertical-line"></td>
              <td class="sdp-table-child"></td>
              <td class="sdp-vertical-line"></td>
              <td class="sdp-table-child"></td>
              <td class="sdp-vertical-line"></td>
              <td class="sdp-table-child"></td>
              <td class="sdp-vertical-line"></td>
              <td class="sdp-table-child"></td>
              <td class="sdp-vertical-line"></td>
              <td class="sdp-vertical-line"></td>
              <td class="sdp-vertical-line"></td>
              <td class="sdp-vertical-line"></td>
              <td class="sdp-table-child"></td>
            </tr>
          </thead>
          <tbody>
            <tr class="circuit-half">
              <td></td>
              <td></td>
              <td colspan="2"><canvas id="sdp-incoming-vertical" data-value="true"></canvas></td>
              <td><canvas id="sdp-core-corner-left-1 hidden" data-value="true"></canvas></td>
              <td colspan="3"><canvas id="sdp-core-horizon-1 hidden" data-value="true"></canvas></td>
              <td><canvas id="sdp-core-corner-right-1 hidden" data-value="true"></canvas></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="circuit">
              <td></td>
              <td></td>
              <td colspan="2"><canvas id="sdp-vertical-core" data-value="true"></canvas></td>
              <td><canvas id="sdp-core-vertical-3 hidden" data-value="true"></canvas></td>
              <td><canvas id="sdp-core-corner-left-2 hidden" data-value="true"></canvas></td>
              <td><canvas id="sdp-core-horizon-8 hidden"></canvas></td>
              <td><canvas id="sdp-core-tjunc-1 hidden"></canvas></td>
              <td><canvas id="sdp-core-tjunc hidden" data-value="true"></canvas></td>
              <td><canvas id="sdp-core-tjunc-2 hidden"></canvas></td>
              <td><canvas id="sdp-core-horizon-9 hidden"></canvas></td>
              <td><canvas id="sdp-core-corner-right-2 hidden" data-value="true"></canvas></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="sdp-parent-parameter">
              <td></td>
              <td rowspan="2">
                <h1>COMP. SDP</h1>
              </td>
              <td colspan="2" rowspan="2">
                <div class="sdp-core-parameter">
                  <div class="text-center title-core">
                    COMP. SDP
                  </div>
                  <div class="text-right content-core">
                    <div class="nilai">
                      <p id="sdp_aavg">##.#</p>
                      <p id="sdp_vrn">###.#</p>
                      <p id="sdp_vsn">###.#</p>
                      <p id="sdp_vtn">###.#</p>
                      <p id="sdp_pf">#.##</p>
                      <p id="sdp_kw">####</p>
                      <p id="sdp_kva">####</p>
                      <p id="sdp_thdi">#.##</p>
                      <p id="sdp_thdv">#.##</p>
                      <p id="sdp_kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>
              <td rowspan="2"><canvas class="core-vertical hidden" id="sdp-core-vertical-1"></canvas></td>
              <?php for ($i = 1; $i <= 4; $i++) { ?>
                <td><canvas class="core-vertical hidden" id="sdp-socket-<?= $i ?>" class="socket" data-value="true" data-id="<?= $i ?>"></canvas></td>
                <td></td>
              <?php } ?>
            </tr>
            <tr class="child-parameter hidden">
              <td rowspan="3"></td>
              <td rowspan="2" class="parameter">
                <div class="body-parameter">
                  <div class="text-center title-parameter" id="sdp-comp1-title" data-id="1">
                    Compressor 1
                  </div>
                  <div class="content-parameter text-right main">
                    <div class="nilai">
                      <p id="sdp-comp1-aavg">##.#</p>
                      <p id="sdp-comp1-vrn">###.#</p>
                      <p id="sdp-comp1-vsn">###.#</p>
                      <p id="sdp-comp1-vtn">###.#</p>
                      <p id="sdp-comp1-pf">#.##</p>
                      <p id="sdp-comp1-kw">####</p>
                      <p id="sdp-comp1-kva">####</p>
                      <p id="sdp-comp1-thdi">#.##</p>
                      <p id="sdp-comp1-thdv">#.##</p>
                      <p id="sdp-comp1-kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>
              <td rowspan="3"></td>
              <td rowspan="2" class="parameter">
                <div class="body-parameter">
                  <div class="text-center title-parameter" id="sdp-comp2-title" data-id="2">
                    Compressor 2
                  </div>
                  <div class="content-parameter text-right main">
                    <div class="nilai">
                      <p id="sdp-comp2-aavg">##.#</p>
                      <p id="sdp-comp2-vrn">###.#</p>
                      <p id="sdp-comp2-vsn">###.#</p>
                      <p id="sdp-comp2-vtn">###.#</p>
                      <p id="sdp-comp2-pf">#.##</p>
                      <p id="sdp-comp2-kw">####</p>
                      <p id="sdp-comp2-kva">####</p>
                      <p id="sdp-comp2-thdi">#.##</p>
                      <p id="sdp-comp2-thdv">#.##</p>
                      <p id="sdp-comp2-kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>
              <td rowspan="3"></td>
              <td rowspan="2" class="parameter">
                <div class="body-parameter">
                  <div class="text-center title-parameter" id="sdp-comp3-title" data-id="3">
                    Compressor 3
                  </div>
                  <div class="content-parameter text-right main">
                    <div class="nilai">
                      <p id="sdp-comp3-aavg">##.#</p>
                      <p id="sdp-comp3-vrn">###.#</p>
                      <p id="sdp-comp3-vsn">###.#</p>
                      <p id="sdp-comp3-vtn">###.#</p>
                      <p id="sdp-comp3-pf">#.##</p>
                      <p id="sdp-comp3-kw">####</p>
                      <p id="sdp-comp3-kva">####</p>
                      <p id="sdp-comp3-thdi">#.##</p>
                      <p id="sdp-comp3-thdv">#.##</p>
                      <p id="sdp-comp3-kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>


              <td rowspan="3"></td>
              <td rowspan="2" class="parameter">
                <div class="body-parameter">
                  <div class="text-center title-parameter" id="sdp-comp4-title" data-id="4">
                    Compressor 4
                  </div>
                  <div class="content-parameter text-right main">
                    <div class="nilai">
                      <p id="sdp-comp4-aavg">##.#</p>
                      <p id="sdp-comp4-vrn">###.#</p>
                      <p id="sdp-comp4-vsn">###.#</p>
                      <p id="sdp-comp4-vtn">###.#</p>
                      <p id="sdp-comp4-pf">#.##</p>
                      <p id="sdp-comp4-kw">####</p>
                      <p id="sdp-comp4-kva">####</p>
                      <p id="sdp-comp4-thdi">#.##</p>
                      <p id="sdp-comp4-thdv">#.##</p>
                      <p id="sdp-comp4-kwh">####</p>
                    </div>
                    <div class="satuan">
                      <p>A<sub>avg</sub></p>
                      <p>V<sub>R-N</sub></p>
                      <p>V<sub>S-N</sub></p>
                      <p>V<sub>T-N</sub></p>
                      <p>pf</p>
                      <p>kW</p>
                      <p>kVA</p>
                      <p>THD<sub>i</sub></p>
                      <p>THD<sub>v</sub></p>
                      <p>kWH</p>
                    </div>
                  </div>
                </div>
              </td>


              <td style="height: 70px;"></td>
              <td><canvas id="sdp-circuit-to-bank-capasitor-vertical-1" class="to-bank-capasitor" data-value="true" data-id="1"></td>
              <td><canvas id="sdp-circuit-to-bank-capasitor-vertical-2" class="to-bank-capasitor" data-value="true" data-id="2"></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="parent-parameter-second hidden">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="circuit hidden">
              <?php for ($i = 1; $i <= 7; $i++) { ?>
                <?php if ($i == 2) { ?>
                  <td><canvas id="sdp-core-bottom-corner-left"></canvas></td>
                <?php } else if ($i == 3) { ?>
                  <td><canvas id="sdp-core-bottom-corner-right"></canvas></td>
                  <td></td>
                <?php } else if ($i == 6) { ?>
                  <td></td>
                <?php } else { ?>
                  <td></td>
                  <td></td>
                <?php } ?>
              <?php } ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>

</div>





<script>
    // ws
    wspm()

    function wspm() {
      _wspm = new WebSocket("ws://<?=NODERED?>/ws/pm")
      _wspm.onerror = function(error) {
        console.log('Error detected: ' + error)
      }
      _wspm.onopen = function() {
        console.log('_wspm connect')
      }
      _wspm.onclose = function() {
        console.log('_wspm disconnect')
        wspm()
      }
      _wspm.onmessage = function(event) {
        var indicatorParam = []
        var payload = $.parseJSON(event.data)
        // console.log(payload)
        // console.log('#' + payload.modul + '_' + 'aavg')
        $('#' + payload.modul + '_' + 'aavg').html(payload.aavg)
        $('#' + payload.modul + '_' + 'vrn').html(payload.vrn)
        $('#' + payload.modul + '_' + 'vsn').html(payload.vsn)
        $('#' + payload.modul + '_' + 'vtn').html(payload.vtn)
        $('#' + payload.modul + '_' + 'pf').html(payload.pf)
        $('#' + payload.modul + '_' + 'kw').html(payload.kw)
        $('#' + payload.modul + '_' + 'kva').html(payload.kva)
        $('#' + payload.modul + '_' + 'thdi').html(payload.thdi)
        $('#' + payload.modul + '_' + 'thdv').html(payload.thdv)
        $('#' + payload.modul + '_' + 'kwh').html(payload.kwh)
      }
    }

    // circuit
  initPP1(1);
  initPP2(1);
  initPP3(1);

  function initPP1(sumber) {
    var verticalCore = $('#pp1-vertical-core');
    sumber = sumber != null ? sumber : verticalCore.data('value');
    vertical($('#pp1-incoming-vertical'), sumber);
    verticalSocket(verticalCore, pln = 1, sumber);
    for (let i = 1; i <= 5; i++) {
      line = $('#pp1-line-' + i);
      parameter = $('#pp1-parameter-' + i);
      if (i == 1) {
        leftCorner(parameter, sumber);
        socket = $('#pp1-socket-' + i);
        statusSocket = $('#pp1-socket-' + i).data('value');
        verticalSocket(socket, sumber, statusSocket);
      } else if (i == 3) {
        tUpDown(line, sumber);
        tjunction(parameter, sumber);
        socket = $('#pp1-socket-' + i);
        statusSocket = $('#pp1-socket-' + i).data('value');
        verticalSocket(socket, sumber, statusSocket);
      } else if (i == 5) {
        bottomRightCorner(line, sumber);
        // rightCorner(parameter, sumber);
        // socket = $('#pp1-socket-' + i);
        // statusSocket = $('#pp1-socket-' + i).data('value');
        // vertical(socket, statusSocket);
      } else {
        horizon(line, sumber);
        tjunction(parameter, sumber);
        socket = $('#pp1-socket-' + i);
        statusSocket = $('#pp1-socket-' + i).data('value');
        verticalSocket(socket, sumber, statusSocket);
      }
      // var trafoMDB = $('#trafo-' + i);
      // trafo(trafoMDB, sumber, statusSocket);
    }
    vertical($('#pp1-circuit-to-bank-capasitor-1'), 1, 1)
    leftCorner($('#pp1-circuit-to-bank-capasitor-2'), 1, 1)
    rightCorner($('#pp1-circuit-to-bank-capasitor-3'), 1, 1)
  }

  function initPP2(sumber) {
    var verticalCore = $('#pp2_vertical-core');
    sumber = sumber != null ? sumber : verticalCore.data('value');
    vertical($('#pp2_incoming-vertical'), sumber);
    verticalSocket(verticalCore, pln = sumber, 1);
    for (let i = 1; i <= 6; i++) {
      line = $('#pp2_line-' + i);
      parameter = $('#pp2_parameter-' + i);
      if (i == 1) {
        leftCorner(parameter, sumber);
        socket = $('#pp2_socket-' + i);
        statusSocket = $('#pp2_socket-' + i).data('value');
        verticalSocket(socket, sumber, statusSocket);
      } else if (i == 3) {
        tUpDown(line, sumber);
        tjunction(parameter, sumber);
        socket = $('#pp2_socket-' + i);
        statusSocket = $('#pp2_socket-' + i).data('value');
        verticalSocket(socket, sumber, statusSocket);
      } else if (i == 6) {
        bottomRightCorner(line, sumber);
      } else {
        horizon(line, sumber);
        tjunction(parameter, sumber);
        socket = $('#pp2_socket-' + i);
        statusSocket = $('#pp2_socket-' + i).data('value');
        verticalSocket(socket, sumber, statusSocket);
      }
      // var trafoMDB = $('#trafo-' + i);
      // trafo(trafoMDB, sumber, statusSocket);
    }
    vertical($('#pp2_circuit-to-bank-capasitor-1'), sumber, 1)
    leftCorner($('#pp2_circuit-to-bank-capasitor-2'), sumber, 1)
    rightCorner($('#pp2_circuit-to-bank-capasitor-3'), sumber, 1)
    // bottomRightCorner($('#pp2_circuit-to-bank-capasitor-corner-right'), sumber, 1)
    // verticalSocket($('#pp2_circuit-to-bank-capasitor-vertical-1'), sumber, 1)
    // vertical($('#pp2_circuit-to-bank-capasitor-vertical-2'), sumber)
  }

  function initPP3(sumber) {
    var verticalCore = $('#sdp-vertical-core');
    sumber = sumber != null ? sumber : verticalCore.data('value');
    vertical($('#sdp-incoming-vertical'), sumber);
    verticalSocket(verticalCore, pln = sumber, 1);

    for (let i = 1; i <= 4; i++) {
      socket = $('#sdp-socket-' + i);
      statusSocket = $('#sdp-socket-' + i).data('value');
      verticalSocket(socket, sumber, statusSocket);
      // var trafoMDB = $('#trafo-' + i);
      // trafo(trafoMDB, sumber, statusSocket);
    }
    // bottomLeftCorner($('#sdp-circuit-to-bank-capasitor-corner-left'), sumber, 1)
    // bottomRightCorner($('#sdp-circuit-to-bank-capasitor-corner-right'), sumber, 1)
    // verticalSocket($('#sdp-circuit-to-bank-capasitor-vertical-1'), sumber, 1)
    // bottomLeftCorner($('#sdp-core-bottom-corner-left'), sumber)
    // bottomRightCorner($('#sdp-core-bottom-corner-right'), sumber)
    // leftCorner($('#sdp-core-corner-left-1'), sumber)
    // rightCorner($('#sdp-core-corner-right-1'), sumber)
    // leftCorner($('#sdp-core-corner-left-2'), sumber)
    // rightCorner($('#sdp-core-corner-right-2'), sumber)
    // horizon($('#sdp-core-horizon-1'), sumber)
    // horizon($('#sdp-core-horizon-8'), sumber)
    // horizon($('#sdp-core-horizon-9'), sumber)
    // vertical($('#sdp-core-vertical-1'), sumber)
    // vertical($('#sdp-core-vertical-3'), sumber)
    // tUpDown($('#sdp-core-tjunc'), sumber);
    // tjunction($('#sdp-core-tjunc-1'), sumber);
    // tjunction($('#sdp-core-tjunc-2'), sumber);
  }



  // console.log($("#horizontal1").width());
  // $.notify("Hello World: I was added to the top.", {
  //   newest_on_top: true
  // });
  // $.notify({
  //   message: "Hello World: I was added to the top."+"<br/>"+"Hello World: I was added to the top.",
  // },{
  //   type: 'danger',
  //   newest_on_top: true,
  //   placement: {
  //     from: "top",
  //     align: "left"
  //   },
  //   delay: 0,    
  // });

  // $('.outgoing-ampere').dblclick(function(e) {
  //   $(this).hide();
  //   $('#outgoing-ampere-input-' + $(this).data('id')).show();
  //   $('#outgoing-ampere-input-' + $(this).data('id')).data("changed", true);
  //   $('#outgoing-ampere-input-' + $(this).data('id')).focus();
  // });
  // $('.outgoing-ampere-input').on('keypress', function(e) {
  //   if (e.which == 13) {
  //     $(this).hide();
  //     $('#outgoing-ampere-' + $(this).data('id')).show();
  //     $('#outgoing-ampere-' + $(this).data('id')).html($(this).val());
  //     setTimeout(() => {
  //       $('#outgoing-ampere-input-' + $(this).data('id')).data("changed", false);
  //     }, 3000);
  //     // if($(this).val() < 2){
  //     //   notify("The current on MV Outgoing "+$(this).data('id')+" is too Low")
  //     // } else if($(this).val() > 20){
  //     //   notify("The current on MV Outgoing "+$(this).data('id')+" is too High")
  //     // }
  //   }
  // });

  // $('.outgoing-volt').dblclick(function(e) {
  //   $(this).hide();
  //   $('#outgoing-volt-input-' + $(this).data('id')).show();
  //   $('#outgoing-volt-input-' + $(this).data('id')).data("changed", true);
  //   $('#outgoing-volt-input-' + $(this).data('id')).focus();
  // });
  // $('.outgoing-volt-input').on('keypress', function(e) {
  //   if (e.which == 13) {
  //     $(this).hide();
  //     $('#outgoing-volt-' + $(this).data('id')).show();
  //     $('#outgoing-volt-' + $(this).data('id')).html($(this).val());
  //     setTimeout(() => {
  //       $('#outgoing-volt-input-' + $(this).data('id')).data("changed", false);
  //     }, 3000);
  //     // if($(this).val() < 2){
  //     //   notify("The current on MV Outgoing "+$(this).data('id')+" is too Low")
  //     // } else if($(this).val() > 20){
  //     //   notify("The current on MV Outgoing "+$(this).data('id')+" is too High")
  //     // }
  //   }
  // });

  function notify(notification) {
    if (notification != "") {
      var notif = $.notify({
        message: notification,
      }, {
        type: 'danger',
        newest_on_top: true,
        placement: {
          from: "top",
          align: "left"
        },
        delay: 0,
      });
      return notif;
    }
  }



  // $('#pp1-vertical-core').click(function(e) {
  //   var incoming = $(this).data('value');
  //   if (incoming) {
  //     $(this).data('value', false);
  //     circuit();
  //   } else {
  //     $(this).data('value', true);
  //     circuit();
  //   }
  // });
  // $('.socket').click(function(e) {
  //   var id = $(this).data('id');
  //   var status = $(this).data('value');
  //   if (status) {
  //     $(this).data('value', false);
  //     var sumber = $('#vertical-core').data('value');
  //     verticalSocket($(this), sumber, false);
  //     var trafoMDB = $('#trafo-' + id);
  //     trafo(trafoMDB, sumber, false);
  //   } else {
  //     $(this).data('value', true);
  //     var sumber = $('#vertical-core').data('value');
  //     verticalSocket($(this), sumber, true);
  //     var trafoMDB = $('#trafo-' + id);
  //     trafo(trafoMDB, sumber, true);
  //   }
  //   // console.log($(this).data('value'));
  // });

  notifyMe = "";

  // function randomOutgoing() {
  //   var toggleRandom = $('#toggle-random').prop('checked');
  //   var incoming = $('#vertical-core').data('value');
  //   notification = "";
  //   // console.log(incoming);
  //   var incomingValue = {
  //     ampere: 0,
  //     volt: 0,
  //     pf: 0,
  //     kw: 0,
  //     kva: 0,
  //     kwh: 0,
  //     active: 0
  //   };
  //   if (toggleRandom) {
  //     for (let i = 1; i <= 8; i++) {
  //       var outgoing = {};
  //       var statusSocket = $('#socket-' + i).data('value');
  //       var inputAmpere = $('#outgoing-ampere-input-' + i);
  //       var inputVolt = $('#outgoing-volt-input-' + i);
  //       if (incoming && statusSocket) {
  //         if (!inputAmpere.data('changed')) {
  //           outgoing.ampere = ((Math.random() * 4 - 2) + parseFloat($('#outgoing-ampere-' + i).html())).toFixed(2);
  //           outgoing.ampere = outgoing.ampere > 20 ? 19.99 : outgoing.ampere;
  //           outgoing.ampere = outgoing.ampere < 2 ? 2.01 : outgoing.ampere;
  //           $('#outgoing-ampere-input-' + i).val(outgoing.ampere);
  //         } else {
  //           outgoing.ampere = (parseFloat($('#outgoing-ampere-' + i).html())).toFixed(2);
  //         }
  //         if (!inputVolt.data('changed')) {
  //           outgoing.volt = (20200 + Math.random() * 600).toFixed(2);
  //           $('#outgoing-volt-input-' + i).val(outgoing.volt);
  //           // console.log($($('#outgoing-volt-input-'+$(this).data('id')).data("changed")));
  //         } else {
  //           outgoing.volt = (parseFloat($('#outgoing-volt-' + i).html())).toFixed(2);
  //         }

  //         outgoing.pf = ((Math.random() * 0.1 - 0.05) + parseFloat($('#outgoing-pf-' + i).html())).toFixed(2);
  //         outgoing.pf = outgoing.pf > 1 ? 0.99 : outgoing.pf;
  //         outgoing.pf = outgoing.pf < 0.5 ? 0.51 : outgoing.pf;
  //         ///////////
  //         incomingValue.active++;
  //         //////////
  //       } else {
  //         var outgoing = {
  //           ampere: 0,
  //           volt: 0,
  //           pf: 0
  //         };
  //       }
  //       outgoing.kva = ((outgoing.ampere * outgoing.volt) / 1000).toFixed(2);
  //       outgoing.kwh = parseFloat($('#outgoing-kwh-' + i).html());
  //       outgoing.kwh = (outgoing.kwh + (outgoing.kva / 3600)).toFixed(2);
  //       outgoing.persentase = Math.floor(outgoing.kva / 7);
  //       // console.log(outgoing.persentase);
  //       $('#outgoing-ampere-' + i).html(outgoing.ampere);
  //       $('#outgoing-volt-' + i).html(outgoing.volt);
  //       $('#outgoing-pf-' + i).html(outgoing.pf);
  //       $('#outgoing-kva-' + i).html(outgoing.kva);
  //       $('#outgoing-kwh-' + i).html(outgoing.kwh);

  //       //notify
  //       if (outgoing.ampere > 18) {
  //         notification = notification + "Ampere on MV Outgoing " + i + " is too High<br/>";
  //         $('#outgoing-title-' + i).css("background-color", "red");
  //         $('#outgoing-title-' + i).css("color", "white");
  //       }
  //       if (outgoing.volt == 0) {
  //         notification = notification + "NFB MV Outgoing " + i + " is opened<br/>";
  //         $('#outgoing-title-' + i).css("background-color", "red");
  //         $('#outgoing-title-' + i).css("color", "white");
  //       } else if (outgoing.volt < 19500) {
  //         notification = notification + "Voltage on MV Outgoing " + i + " is too Low<br/>";
  //         $('#outgoing-title-' + i).css("background-color", "red");
  //         $('#outgoing-title-' + i).css("color", "white");
  //       } else if (outgoing.volt > 20800) {
  //         notification = notification + "Voltage on MV Outgoing " + i + " is too High<br/>";
  //         $('#outgoing-title-' + i).css("background-color", "red");
  //         $('#outgoing-title-' + i).css("color", "white");
  //       }
  //       if (outgoing.ampere < 19 && outgoing.volt > 19500 && outgoing.volt < 20800) {
  //         $('#outgoing-title-' + i).css("background-color", "transparent");
  //         $('#outgoing-title-' + i).css("color", "black");
  //       }
  //       //incoming
  //       incomingValue.ampere = incomingValue.ampere + parseFloat(outgoing.ampere);
  //       incomingValue.volt = incomingValue.volt + parseFloat(outgoing.volt);
  //       incomingValue.pf = incomingValue.pf + parseFloat(outgoing.pf);
  //       incomingValue.kva = incomingValue.kva + parseFloat(outgoing.kva);
  //       incomingValue.kwh = incomingValue.kwh + parseFloat(outgoing.kwh);

  //       $('#persentase-' + i).html(outgoing.persentase + '%');
  //       var barout = $('#bar-outgoing-' + i);
  //       bar(barout, outgoing.persentase / 100);

  //       if (incoming && statusSocket) {
  //         if (i < 4) {
  //           mdb = {
  //             volt: (380 + Math.random() * 20).toFixed(2),
  //             kva: (outgoing.kva * outgoing.pf).toFixed(2),
  //           };
  //         } else {
  //           mdb = {
  //             volt: (200 + Math.random() * 20).toFixed(2),
  //             kva: (outgoing.kva * outgoing.pf).toFixed(2),
  //           };
  //         }
  //       } else {
  //         mdb = {
  //           volt: 0,
  //           kva: (outgoing.kva * outgoing.pf).toFixed(2),
  //         };
  //       }
  //       mdb.kw = (mdb.kva - Math.random() * 10).toFixed(2);
  //       mdb.ampere = ((mdb.kva / mdb.volt) * 1000).toFixed(2);
  //       mdb.kw = mdb.kw < 0 ? 0 : mdb.kw;
  //       mdb.ampere = mdb.kw <= 0 ? 0 : mdb.ampere;
  //       mdb.kwh = parseFloat($('#mdb-kwh-' + i).html());
  //       mdb.kwh = (mdb.kwh + (mdb.kva / 3600)).toFixed(2);
  //       mdb.persentase = Math.floor(mdb.kva / 7);

  //       $('#mdb-ampere-' + i).html(mdb.ampere);
  //       $('#mdb-volt-' + i).html(mdb.volt);
  //       $('#mdb-kw-' + i).html(mdb.kw);
  //       $('#mdb-kva-' + i).html(mdb.kva);
  //       $('#mdb-kwh-' + i).html(mdb.kwh);

  //       var barmdb = $('#bar-mdb-' + i);
  //       bar(barmdb, mdb.persentase / 100);
  //     }

  //     // console.log(incomingValue);
  //     incomingValue.persentase = Math.floor(incomingValue.kva / 56);
  //     incomingValue.kw = incomingValue.kva - Math.random() * 200;

  //     $('#incoming-ampere').html((incomingValue.ampere).toFixed(2));
  //     $('#incoming-volt').html((incomingValue.volt / incomingValue.active).toFixed(2));
  //     $('#incoming-pf').html((incomingValue.pf / incomingValue.active).toFixed(2));
  //     $('#incoming-kw').html((incomingValue.kw < 300 ? incomingValue.kva : incomingValue.kw).toFixed(2));
  //     $('#incoming-kva').html((incomingValue.kva).toFixed(2));
  //     $('#incoming-kwh').html((incomingValue.kwh).toFixed(2));

  //     var barcore = $('#bar-core');
  //     bar(barcore, incomingValue.persentase / 100);

  //     //generate notify
  //     if (notification != "") {
  //       if (notifyMe != "") {
  //         notifyMe.update('message', notification);
  //       } else {
  //         notifyMe =
  //           $.notify({
  //             message: notification,
  //           }, {
  //             type: 'danger',
  //             newest_on_top: true,
  //             placement: {
  //               from: "top",
  //               align: "left"
  //             },
  //             delay: 0,
  //             onClosed: (function() {
  //               notifyMe = "";
  //             }),
  //           });
  //       }
  //       // console.log(notifyMe);
  //     } else {
  //       $.notifyClose();
  //       notifyMe = "";
  //     }
  //   }
  // }

  // setInterval(() => {
  //   randomOutgoing();
  // }, 1000);
  setInterval(() => {
    var toggleView = $('#toggle-view').prop('checked');
    var viewMode = $('#view-mode').prop('checked');
    if (toggleView) {
      $('.main').toggle();
      $('.secondary').toggle();
    } else {
      if (viewMode) {
        $('.main').hide();
        $('.secondary').show();
      } else {
        $('.main').show();
        $('.secondary').hide();
      }
      // console.log('toggle = '+viewMode);
      // console.log('mode = '+viewMode);
    }
  }, 1000);





















  function leftCorner(elem, sumber = 1) {
    var ctx = elem.get(0).getContext("2d");
    var param = {
      width: elem.width(),
      height: elem.height()
    };
    ctx.canvas.width = param.width;
    ctx.canvas.height = param.height;

    if (sumber == 1) {
      ctx.strokeStyle = "#F00";
    } else {
      ctx.strokeStyle = "#FFF";
    }
    ctx.lineWidth = 4;
    ctx.moveTo((param.width / 2) - 2, param.height / 2);
    ctx.lineTo(param.width, param.height / 2);
    ctx.moveTo(param.width / 2, param.height / 2);
    ctx.lineTo(param.width / 2, param.height);
    ctx.stroke();
  }

  function rightCorner(elem, sumber = 1) {
    var ctx = elem.get(0).getContext("2d");
    var param = {
      width: elem.width(),
      height: elem.height()
    };
    ctx.canvas.width = param.width;
    ctx.canvas.height = param.height;

    if (sumber == 1) {
      ctx.strokeStyle = "#F00";
    } else {
      ctx.strokeStyle = "#FFF";
    }
    ctx.lineWidth = 4;
    ctx.moveTo((param.width / 2) + 2, param.height / 2);
    ctx.lineTo(0, param.height / 2);
    ctx.moveTo(param.width / 2, param.height / 2);
    ctx.lineTo(param.width / 2, param.height);
    ctx.stroke();
  }

  function bottomLeftCorner(elem, sumber = 1) {
    var ctx = elem.get(0).getContext("2d");
    var param = {
      width: elem.width(),
      height: elem.height()
    };
    ctx.canvas.width = param.width;
    ctx.canvas.height = param.height;

    if (sumber == 1) {
      ctx.strokeStyle = "#F00";
    } else {
      ctx.strokeStyle = "#FFF";
    }
    ctx.lineWidth = 4;
    ctx.moveTo((param.width / 2) - 2, param.height / 2);
    ctx.lineTo(param.width, param.height / 2);
    ctx.moveTo(param.width / 2, 0);
    ctx.lineTo(param.width / 2, param.height / 2);
    ctx.stroke();
  }

  function bottomRightCorner(elem, sumber = 1) {
    var ctx = elem.get(0).getContext("2d");
    var param = {
      width: elem.width(),
      height: elem.height()
    };
    ctx.canvas.width = param.width;
    ctx.canvas.height = param.height;

    if (sumber == 1) {
      ctx.strokeStyle = "#F00";
    } else {
      ctx.strokeStyle = "#FFF";
    }
    ctx.lineWidth = 4;
    ctx.moveTo((param.width / 2) + 2, param.height / 2);
    ctx.lineTo(0, param.height / 2);
    ctx.moveTo(param.width / 2, 0);
    ctx.lineTo(param.width / 2, param.height / 2);
    ctx.stroke();
  }

  function horizon(elem, sumber = 1) {
    var ctx = elem.get(0).getContext("2d");
    var param = {
      width: elem.width(),
      height: elem.height()
    };
    ctx.canvas.width = param.width;
    ctx.canvas.height = param.height;

    if (sumber == 1) {
      ctx.strokeStyle = "#F00";
    } else {
      ctx.strokeStyle = "#FFF";
    }
    ctx.lineWidth = 4;
    ctx.moveTo(0, param.height / 2);
    ctx.lineTo(param.width, param.height / 2);
    ctx.stroke();
  }

  function tjunction(elem, sumber = 1) {
    var ctx = elem.get(0).getContext("2d");
    var param = {
      width: elem.width(),
      height: elem.height()
    };
    ctx.canvas.width = param.width;
    ctx.canvas.height = param.height;

    if (sumber == 1) {
      ctx.strokeStyle = "#F00";
    } else {
      ctx.strokeStyle = "#FFF";
    }
    ctx.lineWidth = 4;
    ctx.moveTo(0, param.height / 2);
    ctx.lineTo(param.width, param.height / 2);
    ctx.moveTo(param.width / 2, param.height / 2);
    ctx.lineTo(param.width / 2, param.height);
    ctx.stroke();
  }

  function tUpDown(elem, sumber = 1) {
    var ctx = elem.get(0).getContext("2d");
    var param = {
      width: elem.width(),
      height: elem.height()
    };
    ctx.canvas.width = param.width;
    ctx.canvas.height = param.height;

    if (sumber == 1) {
      ctx.strokeStyle = "#F00";
    } else {
      ctx.strokeStyle = "#FFF";
    }
    ctx.lineWidth = 4;
    ctx.moveTo(0, param.height / 2);
    ctx.lineTo(param.width, param.height / 2);
    ctx.moveTo(param.width / 2, 0);
    ctx.lineTo(param.width / 2, param.height / 2);
    ctx.stroke();
  }

  function plusjunction(elem) {
    var ctx = elem.get(0).getContext("2d");
    var param = {
      width: elem.width(),
      height: elem.height()
    };

    ctx.canvas.width = param.width;
    ctx.canvas.height = param.height;
    ctx.lineWidth = 4;
    ctx.moveTo(0, param.height / 2);
    ctx.lineTo(param.width, param.height / 2);
    ctx.moveTo(param.width / 2, 0);
    ctx.lineTo(param.width / 2, param.height);
    ctx.stroke();
  }

  function vertical(elem, sumber = 1) {
    var ctx = elem.get(0).getContext("2d");
    var param = {
      width: elem.width(),
      height: elem.height()
    };
    ctx.canvas.width = param.width;
    ctx.canvas.height = param.height;
    if (sumber == 1) {
      ctx.strokeStyle = "#F00";
    } else {
      ctx.strokeStyle = "#FFF";
    }
    ctx.lineWidth = 4;
    ctx.moveTo(param.width / 2, 0);
    ctx.lineTo(param.width / 2, param.height);
    ctx.stroke();
  }

  function verticalSocket(elem, sumber = 1, status = 1) {
    var ctx = elem.get(0).getContext("2d");
    var param = {
      width: elem.width(),
      height: elem.height()
    };

    ctx.canvas.width = param.width;
    ctx.canvas.height = param.height;
    ctx.lineWidth = 4;

    if (sumber == 1) {
      ctx.beginPath();
      ctx.strokeStyle = "#F00";
      ctx.moveTo(param.width / 2, 0);
      ctx.lineTo(param.width / 2, 10 + 2);
      ctx.moveTo(param.width / 2, 10);
      ctx.lineTo((param.width / 2) + 5, 10);
      ctx.stroke();
    } else {
      ctx.beginPath();
      ctx.strokeStyle = "#FFF";
      ctx.moveTo(param.width / 2, 0);
      ctx.lineTo(param.width / 2, 10 + 2);
      ctx.moveTo(param.width / 2, 10);
      ctx.lineTo((param.width / 2) + 5, 10);
      ctx.stroke();
    }

    if (sumber == 1 && status == 1) {
      ctx.beginPath();
      ctx.strokeStyle = "#F00";
      ctx.moveTo(param.width / 2, 10);
      ctx.lineTo((param.width / 2) + 10, 10);
      ctx.stroke();
    } else if (sumber == 0, status == 1) {
      ctx.beginPath();
      ctx.strokeStyle = "#FFF";
      ctx.moveTo(param.width / 2, 10);
      ctx.lineTo((param.width / 2) + 10, 10);
      ctx.stroke();
    }

    if (sumber == 1 && status == 1) {
      ctx.beginPath();
      ctx.strokeStyle = "#F00";
      ctx.moveTo((param.width / 2) + 9, 10);
      ctx.lineTo(param.width / 2, 30);
      ctx.moveTo(param.width / 2, 30 - 2);
      ctx.lineTo(param.width / 2, param.height);
    } else if (status == 1) {
      ctx.beginPath();
      ctx.strokeStyle = "#FFF";
      ctx.moveTo((param.width / 2) + 9, 10);
      ctx.lineTo(param.width / 2, 30);
      ctx.moveTo(param.width / 2, 30 - 2);
      ctx.lineTo(param.width / 2, param.height);
    } else if (status == 0) {
      ctx.beginPath();
      ctx.strokeStyle = "#FFF";
      ctx.moveTo((param.width / 2) + 9, 10);
      ctx.lineTo(param.width / 2, 30);
      ctx.moveTo(param.width / 2, 30 - 2);
      ctx.lineTo(param.width / 2, param.height);
    }
    // ctx.moveTo(param.width/2,0);
    // ctx.lineTo(param.width/2,param.height);
    ctx.stroke();
  }

  function bar(elem, val = 1) {
    var ctx = elem.get(0).getContext("2d");
    var param = {
      width: elem.width(),
      height: elem.height()
    };
    barmeter = val * param.width;
    ctx.canvas.width = param.width;
    ctx.canvas.height = param.height;

    var gradient = ctx.createLinearGradient(0, 100, ctx.canvas.width, 0);

    // console.log(val);
    if (val < 0.1) {
      gradient.addColorStop("0", "white");
      gradient.addColorStop("0.5", "green");
      gradient.addColorStop("1.0", "green");
    } else if (val < 0.3) {
      gradient.addColorStop("0", "green");
      gradient.addColorStop("0.5", "green");
      gradient.addColorStop("1.0", "red");
    } else if (val < 0.5) {
      gradient.addColorStop("0", "orange");
      gradient.addColorStop("0.8", "orange");
      gradient.addColorStop("1.0", "red");
    } else if (val < 0.8) {
      gradient.addColorStop("0", "red");
      gradient.addColorStop("0.5", "red");
      gradient.addColorStop("1.0", "red");
    } else if (val <= 1.0) {
      gradient.addColorStop("0", "black");
      gradient.addColorStop("0.5", "red");
      gradient.addColorStop("1.0", "black");
    }

    ctx.lineWidth = 20;
    ctx.strokeStyle = gradient;
    ctx.moveTo(0, param.height / 2);
    ctx.lineTo(barmeter, param.height / 2);
    ctx.stroke();
  }

  function trafo(elem, sumber, statusSocket) {
    if (sumber && statusSocket) {
      elem.prop('src', '<?= $url ?>assets/images/circuit/trafo-on.png?2312');
    } else {
      elem.prop('src', '<?= $url ?>assets/images/circuit/trafo-off.png?1231');
    }
  }


  // var c = document.getElementById("myCanvas");
  // var ctx = c.getContext("2d");
  // ctx.moveTo(0,0);
  // ctx.lineTo(200,100);
  // ctx.stroke();
</script>