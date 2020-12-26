<div class="row parent-hmi">
  <style>
    @font-face {
      font-family: "Digital-7";
      src: url("vendor/digital-7/digital-7-webfont.woff") format("woff");
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

    .parent-hmi {
      margin: 0;
      padding: 0;
      text-align: center;
    }

    .hmi {
      position: relative;
      display: inline-block;
      /* background-image: url("../assets/images/hmi/waterpump.png?123"); */
      background-repeat: no-repeat;
      background-color: #dddddd;
      width: 1800px;
      min-height: 950px;
      height: 950px;
      border: 1px solid grey;
    }

    .pm {
      position: absolute;
      z-index: 99999;
      width: 27px;
      height: 35px;
      outline: 5px solid #4F7AC7;
      text-align: center;
      vertical-align: middle;
      font-size: 26px;
      letter-spacing: -1px;
      transform: rotateX(26deg) rotateY(18deg) rotateZ(0deg);
    }

    .pm:hover {
      cursor: pointer;
    }

    .alarm {
      position: absolute;
      z-index: 99999;
      width: 40px;
      height: 50px;
      text-align: center;
      vertical-align: middle;
      font-size: 42px;
      letter-spacing: -1px;
      background-color: #3dbf04;
      border-radius: 35px;
    }

    .alarm-box {
      position: absolute;
      z-index: 99999;
      width: 300px;
      height: 70px;
      font-weight: bold;
      font-size: 32px;
      border-radius: 5px;
      border: 5px solid #2f5597;
      padding: 10px 0px 10px 0px;
      background-color: #4F7AC7;
      color: #fff;
    }

    /* .pm {
      position: absolute;
      z-index: 99999;
      width: 27px;
      height: 27px;
      outline: 5px solid #4F7AC7;
      text-align: center;
      vertical-align: middle;
      font-size: 42px;
      letter-spacing: -1px;
      transform: rotateX(26deg) rotateY(18deg) rotateZ(0deg);
    } */

    .textbox {
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      position: absolute;
      z-index: 99999;
      min-width: 50px;
      max-width: 350px;
      width: 125px;
      min-height: 50px;
      max-height: 350px;
      outline: 2px solid #4F7AC7;
      text-align: center;
      vertical-align: middle;
      font-size: 34px;
      letter-spacing: -1px;
      text-align: center;
      transform: rotateX(26deg) rotateY(18deg) rotateZ(0deg);
    }

    .textbox p,
    sup {
      display: inline-block;
    }

    .image-symbol {
      position: absolute;
      z-index: 1;
    }

    .focused {
      outline: 1px dashed #030afa;
      opacity: 0.5;
      /* z-index: 99999 !important; */
    }

    .pm_detail {
      position: absolute;
      font-weight: bold;
      vertical-align: top;
      width: 255px;
      height: 285px;
      background-color: #fff;
      border: 4px solid #b3b3b3;
      border-radius: 10px;
      z-index: 999;
    }

    .pm_detail .parameter {
      -webkit-box-shadow: inset 0px 0px 0px 2px #000;
      -moz-box-shadow: inset 0px 0px 0px 2px #000;
      box-shadow: inset 0px 0px 0px 2px #000;
      border-radius: 7px;
    }

    .pm_detail .title-parameter {
      margin-left: 5%;
      margin-right: 5%;
      margin-bottom: 5%;
      margin-top: 2px;
      border-bottom: 2px solid black;
      padding: 3px 0 3px 0;
      font-size: 24px;
    }

    .pm_detail .content-parameter {
      margin-right: 4px;
      font-size: 18px;
      line-height: 10px;
      font-weight: bold;
      padding-right: 10px;
    }

    .pm_detail .nilai {
      display: inline-block;
      line-height: 0.7em;
      margin-bottom: 0px;
    }

    .pm_detail .nilai input {
      height: 15px;
      vertical-align: top;
      text-align: right;
      line-height: 0.7em;
      margin-bottom: 0px;
    }

    .pm_detail .satuan {
      display: inline-block;
      text-align: left;
      line-height: 0.7em;
      margin-bottom: 0px;
    }

    #main {
      width: 90%;
    }

    <?= join('', $position) ?>
  </style>
  <div class="col-xs-12 col-md-12 parent-hmi">
    <div class="hmi">
      <?php foreach ($images as $s) { ?>
        <img class="image-symbol" src="<?= $hmi . $s->grup . '/' . $s->color . '/' . $s->src . "?" . rand(1, 1000) ?>" id="<?= $s->element ?>" data-id="<?= $s->id ?>" data-color="<?= $s->color ?>" />
      <?php } ?>
      <div class="pm" id="pp1" data-target="pp1_detail">
      </div>
      <div class="pm" id="comp5" data-target="comp5_detail">5
      </div>
      <div class="pm" id="comp6" data-target="comp6_detail">6
      </div>
      <div class="pm" id="comp7" data-target="comp7_detail">7
      </div>
      <div class="pm" id="comp8" data-target="comp8_detail">8
      </div>
      <div class="pm" id="pp2" data-target="pp2_detail">
      </div>
      <div class="pm" id="comp1" data-target="comp1_detail">1
      </div>
      <div class="pm" id="comp2" data-target="comp2_detail">2
      </div>
      <div class="pm" id="comp3" data-target="comp3_detail">3
      </div>
      <div class="pm" id="comp4" data-target="comp4_detail">4
      </div>
      <div class="pm" id="ct" data-target="ct_detail">
      </div>
      <div class="pm" id="sdp" data-target="sdp_detail">
      </div>
      <div class="pm" id="cap1" data-target="cap1_detail">
      </div>
      <div class="pm" id="cap2" data-target="cap2_detail">
      </div>
      <div class="alarm" id="pp1_alarm">
      </div>
      <div class="alarm" id="pp2_alarm">
      </div>
      <div class="alarm" id="sdp_alarm">
      </div>
      <div class="alarm" id="cap1_alarm">
      </div>
      <div class="alarm" id="cap2_alarm">
      </div>
      <div class="alarm-box" id="evacuate">
        EVACUATE
      </div>
      <div class="alarm-box" id="gas_disc">
        GAS DISCHARGE
      </div>
      <div class="textbox" id="pp1_temp">
        <p class="nilai">0</p>
        <sup class="sup">o</sup>
        <p class="satuan">C</p>
      </div>
      <div class="textbox" id="pp2_temp">
        <p class="nilai">0</p>
        <p class="satuan"></p>
        <sup class="sup">o</sup>
      </div>
      <div class="textbox" id="sdp_temp">
        <p class="nilai">0</p>
        <p class="satuan"></p>
        <sup class="sup">o</sup>
      </div>
      <div class="textbox" id="cap1_temp">
        <p class="nilai">0</p>
        <p class="satuan"></p>
        <sup class="sup">o</sup>
      </div>
      <div class="textbox" id="cap2_temp">
        <p class="nilai">0</p>
        <p class="satuan"></p>
        <sup class="sup">o</sup>
      </div>
      <div class="pm_detail" id="pp1_detail" style="display: none;">
        <div class="body-parameter">
          <div class="text-center title-parameter" id="pp1_title" data-id="1">
            INCOMING PP1
          </div>
          <div class="content-parameter text-right main">
            <div class="nilai">
              <p id="pp1_aavg">40</p>
              <p id="pp1_vrn">20200.00</p>
              <p id="pp1_vsn">1.00</p>
              <p id="pp1_vtn">708.55</p>
              <p id="pp1_pf">808.00</p>
              <p id="pp1_kw">0</p>
              <p id="pp1_kva">0</p>
              <p id="pp1_thdi">0</p>
              <p id="pp1_thdv">0</p>
              <p id="pp1_kwh">0</p>
            </div>
            <div class="satuan">
              <p>A<sub>agv</sub></p>
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
      </div>
      <div class="pm_detail" id="comp5_detail" style="display: none;">
        <div class="body-parameter">
          <div class="text-center title-parameter" id="comp5_title" data-id="1">
            PP1 Compressor 5
          </div>
          <div class="content-parameter text-right main">
            <div class="nilai">
              <p id="comp5_aavg">40</p>
              <p id="comp5_vrn">20200.00</p>
              <p id="comp5_vsn">1.00</p>
              <p id="comp5_vtn">708.55</p>
              <p id="comp5_pf">808.00</p>
              <p id="comp5_kw">0</p>
              <p id="comp5_kva">0</p>
              <p id="comp5_thdi">0</p>
              <p id="comp5_thdv">0</p>
              <p id="comp5_kwh">0</p>
            </div>
            <div class="satuan">
              <p>A<sub>agv</sub></p>
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
      </div>
      <div class="pm_detail" id="comp6_detail" style="display: none;">
        <div class="body-parameter">
          <div class="text-center title-parameter" id="comp6_title" data-id="1">
            PP1 Compressor 6
          </div>
          <div class="content-parameter text-right main">
            <div class="nilai">
              <p id="comp6_aavg">40</p>
              <p id="comp6_vrn">20200.00</p>
              <p id="comp6_vsn">1.00</p>
              <p id="comp6_vtn">708.55</p>
              <p id="comp6_pf">808.00</p>
              <p id="comp6_kw">0</p>
              <p id="comp6_kva">0</p>
              <p id="comp6_thdi">0</p>
              <p id="comp6_thdv">0</p>
              <p id="comp6_kwh">0</p>
            </div>
            <div class="satuan">
              <p>A<sub>agv</sub></p>
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
      </div>
      <div class="pm_detail" id="comp7_detail" style="display: none;">
        <div class="body-parameter">
          <div class="text-center title-parameter" id="comp7_title" data-id="1">
            PP1 Compressor 7
          </div>
          <div class="content-parameter text-right main">
            <div class="nilai">
              <p id="comp7_aavg">40</p>
              <p id="comp7_vrn">20200.00</p>
              <p id="comp7_vsn">1.00</p>
              <p id="comp7_vtn">708.55</p>
              <p id="comp7_pf">808.00</p>
              <p id="comp7_kw">0</p>
              <p id="comp7_kva">0</p>
              <p id="comp7_thdi">0</p>
              <p id="comp7_thdv">0</p>
              <p id="comp7_kwh">0</p>
            </div>
            <div class="satuan">
              <p>A<sub>agv</sub></p>
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
      </div>
      <div class="pm_detail" id="comp8_detail" style="display: none;">
        <div class="body-parameter">
          <div class="text-center title-parameter" id="comp8_title" data-id="1">
            PP1 Compressor 8
          </div>
          <div class="content-parameter text-right main">
            <div class="nilai">
              <p id="comp8_aavg">40</p>
              <p id="comp8_vrn">20200.00</p>
              <p id="comp8_vsn">1.00</p>
              <p id="comp8_vtn">708.55</p>
              <p id="comp8_pf">808.00</p>
              <p id="comp8_kw">0</p>
              <p id="comp8_kva">0</p>
              <p id="comp8_thdi">0</p>
              <p id="comp8_thdv">0</p>
              <p id="comp8_kwh">0</p>
            </div>
            <div class="satuan">
              <p>A<sub>agv</sub></p>
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
      </div>
      <div class="pm_detail" id="pp2_detail" style="display: none;">
        <div class="body-parameter">
          <div class="text-center title-parameter" id="pp2_title" data-id="1">
            INCOMING PP2
          </div>
          <div class="content-parameter text-right main">
            <div class="nilai">
              <p id="pp2_aavg">40</p>
              <p id="pp2_vrn">20200.00</p>
              <p id="pp2_vsn">1.00</p>
              <p id="pp2_vtn">708.55</p>
              <p id="pp2_pf">808.00</p>
              <p id="pp2_kw">0</p>
              <p id="pp2_kva">0</p>
              <p id="pp2_thdi">0</p>
              <p id="pp2_thdv">0</p>
              <p id="pp2_kwh">0</p>
            </div>
            <div class="satuan">
              <p>A<sub>agv</sub></p>
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
      </div>
      <div class="pm_detail" id="comp1_detail" style="display: none;">
        <div class="body-parameter">
          <div class="text-center title-parameter" id="comp1_title" data-id="1">
            PP2 Compressor 1
          </div>
          <div class="content-parameter text-right main">
            <div class="nilai">
              <p id="comp1_aavg">40</p>
              <p id="comp1_vrn">20200.00</p>
              <p id="comp1_vsn">1.00</p>
              <p id="comp1_vtn">708.55</p>
              <p id="comp1_pf">808.00</p>
              <p id="comp1_kw">0</p>
              <p id="comp1_kva">0</p>
              <p id="comp1_thdi">0</p>
              <p id="comp1_thdv">0</p>
              <p id="comp1_kwh">0</p>
            </div>
            <div class="satuan">
              <p>A<sub>agv</sub></p>
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
      </div>
      <div class="pm_detail" id="comp2_detail" style="display: none;">
        <div class="body-parameter">
          <div class="text-center title-parameter" id="comp2_title" data-id="1">
            PP2 Compressor 2
          </div>
          <div class="content-parameter text-right main">
            <div class="nilai">
              <p id="comp2_aavg">40</p>
              <p id="comp2_vrn">20200.00</p>
              <p id="comp2_vsn">1.00</p>
              <p id="comp2_vtn">708.55</p>
              <p id="comp2_pf">808.00</p>
              <p id="comp2_kw">0</p>
              <p id="comp2_kva">0</p>
              <p id="comp2_thdi">0</p>
              <p id="comp2_thdv">0</p>
              <p id="comp2_kwh">0</p>
            </div>
            <div class="satuan">
              <p>A<sub>agv</sub></p>
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
      </div>
      <div class="pm_detail" id="comp3_detail" style="display: none;">
        <div class="body-parameter">
          <div class="text-center title-parameter" id="comp3_title" data-id="1">
            PP2 Compressor 3
          </div>
          <div class="content-parameter text-right main">
            <div class="nilai">
              <p id="comp3_aavg">40</p>
              <p id="comp3_vrn">20200.00</p>
              <p id="comp3_vsn">1.00</p>
              <p id="comp3_vtn">708.55</p>
              <p id="comp3_pf">808.00</p>
              <p id="comp3_kw">0</p>
              <p id="comp3_kva">0</p>
              <p id="comp3_thdi">0</p>
              <p id="comp3_thdv">0</p>
              <p id="comp3_kwh">0</p>
            </div>
            <div class="satuan">
              <p>A<sub>agv</sub></p>
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
      </div>
      <div class="pm_detail" id="comp4_detail" style="display: none;">
        <div class="body-parameter">
          <div class="text-center title-parameter" id="comp4_title" data-id="1">
            PP2 Compressor 4
          </div>
          <div class="content-parameter text-right main">
            <div class="nilai">
              <p id="comp4_aavg">40</p>
              <p id="comp4_vrn">20200.00</p>
              <p id="comp4_vsn">1.00</p>
              <p id="comp4_vtn">708.55</p>
              <p id="comp4_pf">808.00</p>
              <p id="comp4_kw">0</p>
              <p id="comp4_kva">0</p>
              <p id="comp4_thdi">0</p>
              <p id="comp4_thdv">0</p>
              <p id="comp4_kwh">0</p>
            </div>
            <div class="satuan">
              <p>A<sub>agv</sub></p>
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
      </div>
      <div class="pm_detail" id="ct_detail" style="display: none;">
        <div class="body-parameter">
          <div class="text-center title-parameter" id="ct_title" data-id="1">
            Cooling Tower
          </div>
          <div class="content-parameter text-right main">
            <div class="nilai">
              <p id="ct_aavg">40</p>
              <p id="ct_vrn">20200.00</p>
              <p id="ct_vsn">1.00</p>
              <p id="ct_vtn">708.55</p>
              <p id="ct_pf">808.00</p>
              <p id="ct_kw">0</p>
              <p id="ct_kva">0</p>
              <p id="ct_thdi">0</p>
              <p id="ct_thdv">0</p>
              <p id="ct_kwh">0</p>
            </div>
            <div class="satuan">
              <p>A<sub>agv</sub></p>
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
      </div>
      <div class="pm_detail" id="sdp_detail" style="display: none;">
        <div class="body-parameter">
          <div class="text-center title-parameter" id="sdp_title" data-id="1">
            PROD. SDP
          </div>
          <div class="content-parameter text-right main">
            <div class="nilai">
              <p id="sdp-aavg">40</p>
              <p id="sdp-vrn">20200.00</p>
              <p id="sdp-vsn">1.00</p>
              <p id="sdp-vtn">708.55</p>
              <p id="sdp-pf">808.00</p>
              <p id="sdp-kw">0</p>
              <p id="sdp-kva">0</p>
              <p id="sdp-thdi">0</p>
              <p id="sdp-thdv">0</p>
              <p id="sdp-kwh">0</p>
            </div>
            <div class="satuan">
              <p>A<sub>agv</sub></p>
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
      </div>
      <div class="pm_detail" id="cap1_detail" style="display: none;">
        <div class="body-parameter">
          <div class="text-center title-parameter" id="cap1_title" data-id="1">
            Capasitor Bank 1
          </div>
          <div class="content-parameter text-right main">
            <div class="nilai">
              <p id="cap1-aavg">40</p>
              <p id="cap1-vrn">20200.00</p>
              <p id="cap1-vsn">1.00</p>
              <p id="cap1-vtn">708.55</p>
              <p id="cap1-pf">808.00</p>
              <p id="cap1-kw">0</p>
              <p id="cap1-kva">0</p>
              <p id="cap1-thdi">0</p>
              <p id="cap1-thdv">0</p>
              <p id="cap1-kwh">0</p>
            </div>
            <div class="satuan">
              <p>A<sub>agv</sub></p>
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
      </div>
      <div class="pm_detail" id="cap2_detail" style="display: none;">
        <div class="body-parameter">
          <div class="text-center title-parameter" id="cap2_title" data-id="1">
            Capasitor Bank 2
          </div>
          <div class="content-parameter text-right main">
            <div class="nilai">
              <p id="cap2-aavg">40</p>
              <p id="cap2-vrn">20200.00</p>
              <p id="cap2-vsn">1.00</p>
              <p id="cap2-vtn">708.55</p>
              <p id="cap2-pf">808.00</p>
              <p id="cap2-kw">0</p>
              <p id="cap2-kva">0</p>
              <p id="cap2-thdi">0</p>
              <p id="cap2-thdv">0</p>
              <p id="cap2-kwh">0</p>
            </div>
            <div class="satuan">
              <p>A<sub>agv</sub></p>
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
      </div>
    </div>
  </div>

</div>

<script>
  $(document).ready(function() {
    // ws
    wspm()

    function wspm() {
      _wspm = new WebSocket("ws://localhost:1880/ws/pm")
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

    wstemp()

    function wstemp() {
      _wstemp = new WebSocket("ws://localhost:1880/ws/temp")
      _wstemp.onerror = function(error) {
        console.log('Error detected: ' + error)
      }
      _wstemp.onopen = function() {
        console.log('_wstemp connect')
      }
      _wstemp.onclose = function() {
        console.log('_wstemp disconnect')
        wstemp()
      }
      _wstemp.onmessage = function(event) {
        var indicatorParam = []
        var payload = $.parseJSON(event.data)
        // console.log(payload)
        $('#pp1_temp > .nilai').html(payload.pp1)
        $('#pp2_temp > .nilai').html(payload.pp2)
        $('#sdp_temp > .nilai').html(payload.sdp)
        $('#cap1_temp > .nilai').html(payload.cap1)
        $('#cap2_temp > .nilai').html(payload.cap2)
      }
    }

    temp = {}
    temp["pp1"] = false
    temp["pp2"] = false
    temp["sdp"] = false
    temp["cap1"] = false
    temp["cap2"] = false
    wstemp_alarm()

    function wstemp_alarm() {
      _wstemp_alarm = new WebSocket("ws://localhost:1880/ws/temp_alarm")
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
    wsfire_alarm()

    function wsfire_alarm() {
      _wsfire_alarm = new WebSocket("ws://localhost:1880/ws/fire_alarm")
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
        pp1_alarm = payload.pp1 == true
        pp2_alarm = payload.pp2 == true
        sdp_alarm = payload.sdp == true
        cap1_alarm = payload.cap1 == true
        cap2_alarm = payload.cap2 == true
        evacuate = payload.evacuate == true
        gas_disc = payload.gas_disc == true
      }
    }

    //
    setInterval(() => {
      if (pp1_alarm) {
        $('#pp1_alarm').css('background-color', '#fc1e18');
        setTimeout(() => {
          $('#pp1_alarm').css('background-color', '#b3b3b3');
        }, 500);
      } else {
        $('#pp1_alarm').css('background-color', '#3dbf04');
      }
      if (pp2_alarm) {
        $('#pp2_alarm').css('background-color', '#fc1e18');
        setTimeout(() => {
          $('#pp2_alarm').css('background-color', '#b3b3b3');
        }, 500);
      } else {
        $('#pp2_alarm').css('background-color', '#3dbf04');
      }
      if (sdp_alarm) {
        $('#sdp_alarm').css('background-color', '#fc1e18');
        setTimeout(() => {
          $('#sdp_alarm').css('background-color', '#a3a3a3');
        }, 500);
      } else {
        $('#sdp_alarm').css('background-color', '#3dbf04');
      }
      if (cap1_alarm) {
        $('#cap1_alarm').css('background-color', '#fc1e18');
        setTimeout(() => {
          $('#cap1_alarm').css('background-color', '#b3b3b3');
        }, 500);
      } else {
        $('#cap1_alarm').css('background-color', '#3dbf04');
      }
      if (cap2_alarm) {
        $('#cap2_alarm').css('background-color', '#fc1e18');
        setTimeout(() => {
          $('#cap2_alarm').css('background-color', '#b3b3b3');
        }, 500);
      } else {
        $('#cap2_alarm').css('background-color', '#3dbf04');
      }
      if (temp['pp1']) {
        $('#pp1_temp').css('background-color', '#fc1e18');
        setTimeout(() => {
          $('#pp1_temp').css('background-color', '#b3b3b3');
        }, 500);
      } else {
        $('#pp1_temp').css('background-color', 'transparent');
      }
      if (temp['pp2']) {
        $('#pp2_temp').css('background-color', '#fc1e18');
        setTimeout(() => {
          $('#pp2_temp').css('background-color', '#b3b3b3');
        }, 500);
      } else {
        $('#pp2_temp').css('background-color', 'transparent');
      }
      if (temp['sdp']) {
        $('#sdp_temp').css('background-color', '#fc1e18');
        setTimeout(() => {
          $('#sdp_temp').css('background-color', '#a3a3a3');
        }, 500);
      } else {
        $('#sdp_temp').css('background-color', 'transparent');
      }
      if (temp['cap1']) {
        $('#cap1_temp').css('background-color', '#fc1e18');
        setTimeout(() => {
          $('#cap1_temp').css('background-color', '#b3b3b3');
        }, 500);
      } else {
        $('#cap1_temp').css('background-color', 'transparent');
      }
      if (temp['cap2']) {
        $('#cap2_temp').css('background-color', '#fc1e18');
        setTimeout(() => {
          $('#cap2_temp').css('background-color', '#b3b3b3');
        }, 500);
      } else {
        $('#cap2_temp').css('background-color', 'transparent');
      }
      if (evacuate) {
        $('#evacuate').css('background-color', '#fc1e18');
        setTimeout(() => {
          $('#evacuate').css('background-color', '#b3b3b3');
        }, 500);
      } else {
        $('#evacuate').css('background-color', '#4F7AC7');
      }
      if (gas_disc) {
        $('#gas_disc').css('background-color', '#fc1e18');
        setTimeout(() => {
          $('#gas_disc').css('background-color', '#b3b3b3');
        }, 500);
      } else {
        $('#gas_disc').css('background-color', '#4F7AC7');
      }
    }, 1000);


    // event user
    $('.hmi').click(function(e) {
      $('.pm_detail').fadeOut()
    })
    $('.pm').click(function(e) {
      e.preventDefault()
      e.stopPropagation()
      target = $(this).data('target')
      status = $('#' + target).is(':visible')
      if (status) {
        $('.pm_detail').fadeOut()
        $('#' + target).fadeIn()
      } else {
        $('.pm_detail').fadeOut()
      }
      setTimeout(() => {}, 200);
    })
    $('.pm_detail').click(function(e) {
      e.preventDefault()
      e.stopPropagation()
    })

  })

  var editMode = false;
  if (editMode) {
    $('.image-symbol').draggable();
    $('.textbox').draggable();
    $('.circleEdit').toggle();
    $('.content-wrapper').css("margin-left", "200px");
    $('.content-wrapper').css("margin-right", "200px");
    $('.side-left').show();
    $('.side-right').show();
  }
  $(document).keydown(function(e) {
    if (e.ctrlKey && e.keyCode == 120) {
      e.preventDefault();
      if (editMode) {
        editMode = false;
        $('.circleEdit').toggle();
        $('.content-wrapper').css("margin-left", "0px");
        $('.content-wrapper').css("margin-right", "0px");
        $('.side-left').hide('fast');
        $('.side-right').hide('fast');
        $('.image-symbol').removeClass('focused');
        removeFocus();
        // alert(editMode);
      } else {
        editMode = true;
        $('.circleEdit').toggle();
        $('.content-wrapper').css("margin-left", "200px");
        $('.content-wrapper').css("margin-right", "200px");
        $('.side-left').show(400);
        $('.side-right').show(400);
      }
      $('.image-symbol').draggable({
        disabled: !editMode
      });
      $('.textbox').draggable({
        disabled: !editMode
      });
    } else if (e.keyCode == 27) {
      e.preventDefault();
      if (editMode) {
        $('.image-symbol').removeClass('focused');
        removeFocus();
      }
    } else if (e.keyCode == 37 || e.keyCode == 38 || e.keyCode == 39 || e.keyCode == 40) {
      e.preventDefault();
      if (editMode) {
        find = $('.hmi').find('.focused');
        if (find.length) {
          var rect = find[0].getBoundingClientRect();
          var recta = $('.hmi')[0].getBoundingClientRect();
          var x = Math.floor(rect.left - (recta.left + 1));
          var y = Math.floor(rect.top - (recta.top + 1));
          switch (e.keyCode) {
            case 37:
              x = x - 1;
              find.css({
                left: x,
                top: y
              });
              break;
            case 38:
              y = y - 1;
              find.css({
                left: x,
                top: y
              });
              break;
            case 39:
              x = x + 1;
              find.css({
                left: x,
                top: y
              });
              break;
            case 40:
              y = y + 1;
              find.css({
                left: x,
                top: y
              });
              break;
          }
          $.ajax({
            type: "POST",
            url: "<?= $url ?>hmi_update_postition",
            data: {
              id: find.data('id'),
              x: x,
              y: y
            },
            dataType: "JSON",
            success: function(response) {
              // console.log(response);
            }
          });
        }
      }
    } else if (e.keyCode == 46) {
      e.preventDefault();
      if (editMode) {
        find = $('.hmi').find('.focused');
        if (find.length) {
          $.ajax({
            type: "POST",
            url: "<?= $url ?>hmi_delete",
            data: {
              id: find.data('id')
            },
            dataType: "JSON",
            success: function(response) {
              // console.log(response);
              find.remove();
              removeFocus();
            }
          });
        }
      }
    } else if (e.keyCode == 33 || e.keyCode == 34) {
      e.preventDefault();
      if (editMode) {
        find = $('.hmi').find('.focused');
        if (find.length) {
          e.preventDefault();
          var z = parseInt(find.css('z-index'));
          var element = find.attr('id');
          switch (e.keyCode) {
            case 33:
              z = z + 1;
              break;
            case 34:
              z = z - 1;
              break;
          }
          $.ajax({
            type: "POST",
            url: "<?= $url ?>update_hmi_z_index",
            data: {
              element: element,
              z: z
            },
            dataType: "JSON",
            success: function(response) {
              // console.log(response);
              find.css('z-index', z);
              $('#item-z').val(z);
            }
          });
        }
      }
    }
    console.log(e.keyCode);
  });
  // alert(editMode);
  $('.hmi')
    .on('mousedown', '.image-symbol', function(e) {
      if (editMode) {
        $('.image-symbol').removeClass('focused');
        $(this).addClass('focused');
        setFocus($(this));
      }
    });
  $('.hmi')
    .on('mouseup', '.image-symbol', function(e) {
      if (editMode) {
        e.preventDefault();
        var rect = e.target.getBoundingClientRect();
        var recta = $('.hmi')[0].getBoundingClientRect();
        var x = Math.floor(rect.left - (recta.left + 1));
        var y = Math.floor(rect.top - (recta.top + 1));
        // console.log(Math.floor(rect.left - (recta.left+1)), Math.floor(rect.top - (recta.top+1)));
        $.ajax({
          type: "POST",
          url: "<?= $url ?>hmi_update_postition",
          data: {
            id: $(this).data('id'),
            x: x,
            y: y
          },
          dataType: "JSON",
          success: function(response) {
            console.log(response);
          }
        });
      }
    });


  $('.hmi')
    .on('mouseup', '.textbox', function(e) {
      if (editMode) {
        e.preventDefault();
        var rect = e.target.getBoundingClientRect();
        var recta = $('.hmi')[0].getBoundingClientRect();
        var x = Math.floor(rect.left - (recta.left + 1));
        var y = Math.floor(rect.top - (recta.top + 1));
        console.log($(this).attr('id'));
        // console.log(Math.floor(rect.left - (recta.left+1)), Math.floor(rect.top - (recta.top+1)));
        $.ajax({
          type: "POST",
          url: "<?= $url ?>textbox_update_postition",
          data: {
            element: $(this).attr('id'),
            x: x,
            y: y
          },
          dataType: "JSON",
          success: function(response) {
            console.log(response);
          }
        });
      }
    });

  // $('.hmi').on('mouseup', '.image-symbol', function (e) {
  //   alert('aha');
  // });

  function setFocus(elem) {
    $('#item-name').val(elem.attr('id'));
    $('#item-z').val(elem.css('z-index'));
  }

  function removeFocus() {
    $('#item-name').val('');
    $('#item-z').val('');
  }

  $('#form-item').submit(function(e) {
    e.preventDefault();
    var element = $('#item-name').val();
    var z = $('#item-z').val();
    $.ajax({
      type: "POST",
      url: $(this).attr('action'),
      data: {
        element: element,
        z: z
      },
      dataType: "JSON",
      success: function(response) {
        // console.log(response);
        $('#' + element).css('z-index', z);
      }
    });
  });





  $('.symbol').draggable({
    disabled: false,
    revert: true
  });
  $('.hmi').droppable({
    accept: '.symbol',
    drop: function(event, ui) {
      event.revert = true;
      src = ui.draggable.data("src");
      grup = ui.draggable.data("grup");
      color = ui.draggable.data("color");
      // console.log('success');
      console.log(src, grup, color);
      $.ajax({
        type: "POST",
        url: "<?= $url ?>insert_image_symbol",
        data: {
          src: src,
          color: color,
          grup: grup
        },
        dataType: "JSON",
        success: function(response) {
          s = response;
          src = '<?= $hmi ?>' + s.grup + '/' + s.color + '/' + s.src;
          id = s.element;
          // content = '<img class="image-symbol" src="'+src+'" id="'+s.element+'" data-id="'+s.id+'"/>';
          content = $('<img>', {
            id: s.element,
            src: src
          });
          content.css('z-index', 1);
          content.data('id', s.id);
          content.addClass('image-symbol');
          console.log(response);
          $('.hmi').prepend(content);
          $('.image-symbol').draggable();
          // $('.image-symbol').mousedown(function (e) {
          //   $('.image-symbol').removeClass('focused');
          //   $(this).addClass('focused');
          // });
        }
      });
    }
  });


  $('#Motor_0, #Rotating_Valve_0, #Rotating_Valve_1').click(function(e) {
    e.preventDefault();
    if (!editMode) {
      src = $(this).attr('src');
      color = $(this).data('color');
      if (color == 'green') {
        $(this).prop('src', src.replace('green', 'red'));
        $(this).data('color', 'red');
      } else if (color == 'red') {
        $(this).prop('src', src.replace('red', 'green'));
        $(this).data('color', 'green');
      }
      if ($('#Rotating_Valve_0').data('color') == 'green' || $('#Rotating_Valve_1').data('color') == 'green') {
        $('#Motor_1').prop('src', $('#Motor_1').attr('src').replace('yellow', 'blue'));
      } else {
        $('#Motor_1').prop('src', $('#Motor_1').attr('src').replace('blue', 'yellow'));
      }
    }
  });

  // $('#box_0 .nilai').html(50);
  setInterval(() => {
    waterflow();
  }, 1000);

  function waterflow() {
    motor = $('#Motor_0').data('color');
    keran1 = $('#Rotating_Valve_0').data('color');
    keran2 = $('#Rotating_Valve_1').data('color');
    var _tankiBesar = $('#box_0 .nilai');
    var _tankiKecil1 = $('#box_1 .nilai');
    var _tankiKecil2 = $('#box_2 .nilai');
    if (motor == "green") {
      tankiBesar = _tankiBesar.html(parseFloat(_tankiBesar.html()) + 0.5);
      $('#Arrow_0, #Arrow_1, #Arrow_2, #Arrow_3').show();
    } else {
      tankiBesar = _tankiBesar.html(parseFloat(_tankiBesar.html()));
      $('#Arrow_0, #Arrow_1, #Arrow_2, #Arrow_3').hide();
    }
    if (tankiBesar.html() >= 0.6) {
      $('#Arrow_4, #Arrow_5, #Arrow_6, #Arrow_7').show();
      if (keran1 == "green") {
        tankiKecil1 = _tankiKecil1.html((parseFloat(_tankiKecil1.html()) + 0.3).toFixed(2));
        _tankiBesar.html((parseFloat(_tankiBesar.html()) - 0.3).toFixed(2));
        $('#Arrow_9').show();
      }
      if (keran2 == "green") {
        tankiKecil2 = _tankiKecil2.html((parseFloat(_tankiKecil2.html()) + 0.3).toFixed(2));
        _tankiBesar.html((parseFloat(_tankiBesar.html()) - 0.3).toFixed(2));
        $('#Arrow_8').show();
      }
      if (!(keran1 == "green" || keran2 == "green")) {
        $('#Arrow_8, #Arrow_9').hide();
        $('#Arrow_4, #Arrow_5, #Arrow_6, #Arrow_7').hide();
      } else if (!(keran1 == "green")) {
        $('#Arrow_9').hide();
      } else if (!(keran2 == "green")) {
        $('#Arrow_8').hide();
      }
    } else {
      lowflow = (tankiBesar.html()) / 2;
      $('#Arrow_4, #Arrow_5, #Arrow_6, #Arrow_7').show();
      // console.log(lowflow);
      if (keran1 == "green" && keran2 == "green") {
        tankiKecil1 = _tankiKecil1.html((parseFloat(_tankiKecil1.html()) + lowflow).toFixed(2));
        tankiKecil2 = _tankiKecil2.html((parseFloat(_tankiKecil2.html()) + lowflow).toFixed(2));
        _tankiBesar.html(0);
        $('#Arrow_8, #Arrow_9').show();
      } else if (keran1 == "green") {
        $('#Arrow_8').hide();
        $('#Arrow_9').show();
        if (tankiBesar.html() >= 0.3) {
          tankiKecil1 = _tankiKecil1.html((parseFloat(_tankiKecil1.html()) + 0.3).toFixed(2));
          _tankiBesar.html((parseFloat(_tankiBesar.html()) - 0.3).toFixed(2));
        } else {
          tankiKecil1 = _tankiKecil1.html((parseFloat(_tankiKecil1.html()) + lowflow * 2).toFixed(2));
          _tankiBesar.html(0);
        }
      } else if (keran2 == "green") {
        $('#Arrow_8').show();
        $('#Arrow_9').hide();
        if (tankiBesar.html() >= 0.3) {
          tankiKecil2 = _tankiKecil2.html((parseFloat(_tankiKecil2.html()) + 0.3).toFixed(2));
          _tankiBesar.html((parseFloat(_tankiBesar.html()) - 0.3).toFixed(2));
        } else {
          tankiKecil2 = _tankiKecil2.html((parseFloat(_tankiKecil2.html()) + lowflow * 2).toFixed(2));
          _tankiBesar.html(0);
        }
      } else {
        $('#Arrow_4, #Arrow_5, #Arrow_6, #Arrow_7, #Arrow_8, #Arrow_9').hide();
      }
    }
    // $('#box_0 .nilai').html(tankiBesar+100);
    // console.log(tankiBesar.html());
  }
</script>