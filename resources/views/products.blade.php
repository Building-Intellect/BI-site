@extends('layouts.app')

@section('content')
<div class="container">
    <div id="lightbox">
        <div id="lightbox_content">
            <iframe id="embeddedPDF" src="" frameborder="0"></iframe>
            <!--<embed id="embeddedPDF" src="" width="100%" height="100%" type='application/pdf'>-->
        </div>
        <button class="btn btn-primary"id="exit">Click outside the document to exit.</button>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header title">Products</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    At Building Intellect we configure buildings with products from a number of excellent vendors.
                    <br />
                    <br />
                    <div class="col-md-12 padding-0">
                      <div class="img-crop"><img src="/img/reliable-controls.jpg" class="img-caption img-fluid rounded" alt=""></div>
                      <div class="carousel-caption">
                        <h2 class="brand-white-black pull-right">Reliable Controls</h2>
                      </div>
                    </div>
                    <div id="accordion">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <strong>Controllers</strong>
                            </button>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                          <div class="row">
                              <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MPV-R_En_Imp.pdf')"><div class="h180"><h6>MACH-ProView<sup>™</sup> with Router</h6><img src="/img/products_MPV-R.png" style="max-width:140px;padding-top:11px"></div></div>
                              <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MPV_En_Imp.pdf')"><div class="h180"><h6>MACH-ProView<sup>™</sup></h6><img src="/img/products_MPV.png" style="max-width:140px;padding-top:11px"></div></div>
                              <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MPV-L-R_En_Imp.pdf')"><div class="h180"><h6>MACH-ProView<sup>™</sup> LCD with Router</h6><img src="/img/products_MPV-L-R.png" style="max-width:140px;padding-top:10px"></div></div>
                              <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MPV-L_En_Imp.pdf')"><div class="h180"><h6>MACH-ProView<sup>™</sup> LCD</h6><img src="/img/products_MPV-L.png" style="max-width:140px;padding-top:10px"></div></div>
                          </div>
                          <div class="row">
                              <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MCP_En_Imp.pdf')"><div class="h180"><h6>MACH-CheckPoint<sup>™</sup></h6><img src="/img/products_MCP.png" style="max-width:140px;padding-top:25px"></div></div>
                              <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MPWS_En_Imp.pdf')"><div class="h180"><h6>MACH-ProWebSys<sup>™</sup></h6><img src="/img/products_MPWS.png" style="max-height:140px"></div></div>
                              <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MPWC_En_Imp.pdf')"><div class="h180"><h6>MACH-ProWebCom<sup>™</sup></h6><img src="/img/products_MPWC.png" style="max-height:140px"></div></div>
                              <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MPS_En_Imp.pdf')"><div class="h180"><h6>MACH-ProSys<sup>™</sup></h6><img src="/img/products_MPS.png" style="max-height:140px"></div></div>
                          </div>
                          <div class="row">
                              <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MPC_En_Imp.pdf')"><div class="h180"><h6>MACH-ProCom<sup>™</sup></h6><img src="/img/products_MPC.png" style="max-height:140px"></div></div>
                              <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MP1_En_Imp.pdf')"><div class="h180"><h6>MACH-Pro1<sup>™</sup></h6><img src="/img/products_MP1.png" style="max-height:140px"></div></div>
                              <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MP2_En_Imp.pdf')"><div class="h180"><h6>MACH-Pro2<sup>™</sup></h6><img src="/img/products_MP2.png" style="max-height:140px"></div></div>
                              <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MPA_En_Imp.pdf')"><div class="h180"><h6>MACH-ProAir<sup>™</sup></h6><img src="/img/products_MPA.png" style="max-height:140px"></div></div>
                          </div>
                          <div class="row">
                              <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MPZ_En_Imp.pdf')"><div class="h180"><h6>MACH-ProZone<sup>™</sup></h6><img src="/img/products_MPZ.png" style="max-width:140px;padding-top:29px"></div></div>
                              <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_SSC_En_Imp.pdf')"><div class="h180"><h6>SMART-Space<sup>™</sup> Controller</h6><img src="/img/products_SSC.png" style="max-height:140px"></div></div>
                              <div class="col-sm-3"></div>
                              <div class="col-sm-3"></div>
                          </div>
                        </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <strong>Interfaces</strong>
                            </button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                          <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_SS3-EPD_En_Imp.pdf')"><div class="h180"><h6>SMART-Sensor<sup>™</sup> EPD</h6><img src="/img/products_SS3-E.png" style="max-height:140px"></div></div>
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_SSL_En_Imp.pdf')"><div class="h180"><h6>SMART-Sensor<sup>™</sup> LCD</h6><img src="/img/products_SSL.png" style="max-height:140px"></div></div>
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_SS3_En_Imp.pdf')"><div class="h180"><h6>SMART-Sensor<sup>™</sup></h6><img src="/img/products_SS3.png" style="max-height:140px"></div></div>
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_SS-DUCT_En_Imp.pdf')"><div class="h180"><h6>SMART-Sensor<sup>™</sup> Duct</h6><img src="/img/products_SSDUCT.png" style="max-height:140px"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_TSPi5_En_Imp.pdf')"><div class="h180"><h6>Touch Screen Panel-i5</h6><img src="/img/products_TSP-i5.png" style="max-width:140px;padding-top:16px"></div></div>
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_TSPceleron_En_Imp.pdf')"><div class="h180"><h6>Touch Screen Panel - Celeron</h6><img src="/img/products_TSP-Celeron.png" style="max-width:140px;padding-top:16px"></div></div>
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('XP2_rgb.pdf')"><div class="h180"><h6>X-Port<sup>™</sup> 2 Converter</h6><img src="/img/products_XP.png" style="max-width:140px;padding-top:23px"></div></div>
                                <div class="col-sm-3"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <strong>Input/Output Devices</strong>
                            </button>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_LIM_En_Imp.pdf')"><div class="h180"><h6>Lighting Interface Module</h6><img src="/img/products_LIM.png" style="max-height:140px"></div></div>
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_FS_En_Imp.pdf')"><div class="h180"><h6>Flow Sensor</h6><img src="/img/products_FS.png" style="max-height:140px"></div></div>
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('TR_rgb.pdf')"><div class="h180"><h6>TRIAC Module</h6><img src="/img/products_TRCFP.png" style="max-height:140px"></div></div>
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MR.pdf')"><div class="h180"><h6>Mechanical Relays</h6><img src="/img/products_Relays.png" style="max-width:140px;padding-top:6px"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('ACI_RCC_RHResistive.pdf')"><div class="h180"><h6>Relative Humidity (RH) Sensors</h6><img src="/img/products_RHR.png" style="max-width:140px;padding-top:8px"></div></div>
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('ACI_RCC_GP.pdf')"><div class="h180"><h6>Gage Pressure</h6><img src="/img/products_GP.png" style="max-width:140px;padding-top:33px"></div></div>
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('ACI_RCC_DBL.pdf')"><div class="h180"><h6>Differential Pressure Switch</h6><img src="/img/products_DBL.png" style="max-width:140px;padding-top:5px"></div></div>
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('ACI_RCC_CO-NO2.pdf')"><div class="h180"><h6>Carbon Monoxide CO &amp; Nitrogren Dioxide NO2 Sensors</h6><img src="/img/products_CO-NO2.png" style="max-height:140px"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('ACI_RCC_CO2Duct.pdf')"><div class="h180"><h6>Carbon Dioxide CO2 Duct Sensor</h6><img src="/img/products_CO2Duct.png" style="max-height:140px"></div></div>
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('ACI_RCC_Thermistor.pdf')"><div class="h180"><h6>General Mounting Thermistors</h6><img src="/img/products_Thermistors.png" style="max-height:140px"></div></div>
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('RIBXKTV_SERIES.pdf')"><div class="h180"><h6>Current Transducer</h6><img src="/img/products_transducer.png" style="max-height:140px"></div></div>
                                <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('BACnet_transmitter.pdf')"><div class="h180"><h6>BACnet<sup>®</sup> Transmitters</h6><img src="/img/products_transmitters.png" style="max-width:140px;padding-top:18px"></div></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingFour">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              <strong>Accessories</strong>
                            </button>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MPPIOU_En_Imp.pdf')"><div class="h180"><h6>MACH-ProPoint<sup>™</sup> Input/Output Universal</h6><img src="/img/products_MPPIOU.png" style="max-height:140px"></div></div>
                                  <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MPP_En_Imp.pdf')"><div class="h180"><h6>MACH-ProPoint<sup>™</sup> Input/Output</h6><img src="/img/products_MPP.png" style="max-height:140px"></div></div>
                                  <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MPP-I_En_Imp.pdf')"><div class="h180"><h6>MACH-ProPoint<sup>™</sup> Input</h6><img src="/img/products_MPPI.png" style="max-height:140px"></div></div>
                                  <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_MPP-O_En_Imp.pdf')"><div class="h180"><h6>MACH-ProPoint<sup>™</sup> Output</h6><img src="/img/products_MPPO.png" style="max-height:140px"></div></div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_ENC_En_Imp.pdf')"><div class="h180"><h6>Enclosures</h6><img src="/img/products_ENC.png" style="max-width:140px;padding-top:32px"></div></div>
                                  <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_OM_En_Imp.pdf')"><div class="h180"><h6>Universal Output Module</h6><img src="/img/products_UM.png" style="max-width:140px;padding-top:24px"></div></div>
                                  <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_OM_En_Imp.pdf')"><div class="h180"><h6>Relay Output Module</h6><img src="/img/products_RM.png" style="max-width:140px;padding-top:25px"></div></div>
                                  <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_OM_En_Imp.pdf')"><div class="h180"><h6>TRIAC Output Module</h6><img src="/img/products_TM.png" style="max-width:140px;padding-top:28px"></div></div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_SS3-Extender-Plate_En_Imp.pdf')"><div class="h180"><h6>SS3 Backplate Extender</h6><img src="/img/products_SS3-EP.png" style="max-width:140px;padding-top:4px"></div></div>
                                  <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_SSX_En_Imp.pdf')"><div class="h180"><h6>SMART-Net<sup>™</sup> eXpansion Board</h6><img src="/img/products_SSX.png" style="max-width:140px;padding-top:18px"></div></div>
                                  <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('PSVDC_rgb.pdf')"><div class="h180"><h6>Power Supply VDC</h6><img src="/img/products_PSVDC.png" style="max-width:140px;padding-top:13px"></div></div>
                                  <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_PS-WDC_En_Imp.pdf')"><div class="h180"><h6>Power Supply WDC</h6><img src="/img/products_PSWDC.png" style="max-height:140px"></div></div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_NAEOL_En_Imp.pdf')"><div class="h180"><h6>End of Line Terminator</h6><img src="/img/products_EOL.png" style="max-height:140px"></div></div>
                                  <div class="col-sm-3 padding-15 acenter bi-product" onclick="displayPDF('Catalog_Transformer_En_Imp.pdf')"><div class="h180"><h6>24 VAC Transformer</h6><img src="/img/products_TRANS.png" style="max-width:140px;padding-top:2px"></div></div>
                                  <div class="col-sm-3"></div>
                                  <div class="col-sm-3"></div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
