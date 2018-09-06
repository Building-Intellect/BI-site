@extends('layouts.app')

@section('content')
<div class="container">
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
                      <div class="img-crop"><img src="https://www.reliablecontrols.com/assets/img/products/Building-Controls-Products-Overview.jpg" class="img-caption img-fluid rounded" alt=""></div>
                      <div class="carousel-caption">
                        <h1 class="brand-white-black pull-right">Reliable Controls</h1>
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
                              <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-ProView<sup>™</sup> with Router</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MPV-R/MPV-R.png" style="max-width:140px;padding-top:11px"></a></div></div>
                              <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-ProView<sup>™</sup></small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MPV/MPV.png" style="max-width:140px;padding-top:11px"></a></div></div>
                              <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-ProView<sup>™</sup> LCD with Router</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MPV-L-R/MPV-L-R.png" style="max-width:140px;padding-top:10px"></a></div></div>
                              <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-ProView<sup>™</sup> LCD</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MPV-L/MPV-L.png" style="max-width:140px;padding-top:10px"></a></div></div>
                          </div>
                          <div class="row">
                              <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-CheckPoint<sup>™</sup></small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MCP/MCP.png" style="max-width:140px;padding-top:25px"></a></div></div>
                              <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-ProWebSys<sup>™</sup></small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MPWS/MPWS.png" style="max-height:140px"></a></div></div>
                              <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-ProWebCom<sup>™</sup></small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MPWC/MPWC.png" style="max-height:140px"></a></div></div>
                              <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-ProSys<sup>™</sup></small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MPS/MPS.png" style="max-height:140px"></a></div></div>
                          </div>
                          <div class="row">
                              <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-ProCom<sup>™</sup></small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MPC/MPC.png" style="max-height:140px"></a></div></div>
                              <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-Pro1<sup>™</sup></small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MP1/MP1.png" style="max-height:140px"></a></div></div>
                              <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-Pro2<sup>™</sup></small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MP2/MP2.png" style="max-height:140px"></a></div></div>
                              <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-ProAir<sup>™</sup></small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MPA/MPA.png" style="max-height:140px"></a></div></div>
                          </div>
                          <div class="row">
                              <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-ProZone<sup>™</sup></small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MPZ/MPZ.png" style="max-width:140px;padding-top:29px"></a></div></div>
                              <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>SMART-Space<sup>™</sup> Controller</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/SSC/SSC.png" style="max-height:140px"></a></div></div>
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
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>SMART-Sensor<sup>™</sup> EPD</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/SS3-E/SS3-E.png" style="max-height:140px"></a></div></div>
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>SMART-Sensor<sup>™</sup> LCD</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/SSL/SSL.png" style="max-height:140px"></a></div></div>
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>SMART-Sensor<sup>™</sup></small></h6><img src="https://www.reliablecontrols.com/assets/img/products/SS3/SS3.png" style="max-height:140px"></a></div></div>
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>SMART-Sensor<sup>™</sup> Duct</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/SSDUCT/SSDUCT.png" style="max-height:140px"></a></div></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>Touch Screen Panel-i5</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/TSP-i5/TSP-i5.png" style="max-width:140px;padding-top:16px"></a></div></div>
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>Touch Screen Panel - Celeron</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/TSP-Celeron/TSP-Celeron.png" style="max-width:140px;padding-top:16px"></a></div></div>
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>X-Port<sup>™</sup> 2 Converter</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/XP/XP.png" style="max-width:140px;padding-top:23px"></a></div></div>
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
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>Lighting Interface Module</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/LIM/LIM.png" style="max-height:140px"></a></div></div>
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>Flow Sensor</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/FS/FS.png" style="max-height:140px"></a></div></div>
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>TRIAC Module</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/TRCFP/TRCFP.png" style="max-height:140px"></a></div></div>
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>Mechanical Relays</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/Relays/Relays.png" style="max-width:140px;padding-top:6px"></a></div></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>Relative Humidity (RH) Sensors</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/RHR/RHR.png" style="max-width:140px;padding-top:8px"></a></div></div>
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>Gage Pressure</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/GP/GP.png" style="max-width:140px;padding-top:33px"></a></div></div>
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>Differential Pressure Switch</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/DBL/DBL.png" style="max-width:140px;padding-top:5px"></a></div></div>
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>Carbon Monoxide CO &amp; Nitrogren Dioxide NO2 Sensors</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/CO-NO2/CO-NO2.png" style="max-height:140px"></a></div></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>Carbon Dioxide CO2 Duct Sensor</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/CO2Duct/CO2Duct.png" style="max-height:140px"></a></div></div>
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>General Mounting Thermistors</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/Thermistors/Thermistors.png" style="max-height:140px"></a></div></div>
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>Current Transducer</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/transducer/transducer.png" style="max-height:140px"></a></div></div>
                                <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>BACnet<sup>®</sup> Transmitters</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/transmitters/transmitters.png" style="max-width:140px;padding-top:18px"></a></div></div>
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
                                  <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-ProPoint<sup>™</sup> Input/Output Universal</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MPPIOU/MPPIOU.png" style="max-height:140px"></a></div></div>
                                  <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-ProPoint<sup>™</sup> Input/Output</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MPP/MPP.png" style="max-height:140px"></a></div></div>
                                  <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-ProPoint<sup>™</sup> Input</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MPPI/MPPI.png" style="max-height:140px"></a></div></div>
                                  <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>MACH-ProPoint<sup>™</sup> Output</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/MPPO/MPPO.png" style="max-height:140px"></a></div></div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>Enclosures</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/ENC/ENC.png" style="max-width:140px;padding-top:32px"></a></div></div>
                                  <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>Universal Output Module</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/UM/UM.png" style="max-width:140px;padding-top:24px"></a></div></div>
                                  <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>Relay Output Module</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/RM/RM.png" style="max-width:140px;padding-top:25px"></a></div></div>
                                  <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>TRIAC Output Module</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/TM/TM.png" style="max-width:140px;padding-top:28px"></a></div></div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>SS3 Backplate Extender</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/SS3-EP/SS3-EP.png" style="max-width:140px;padding-top:4px"></a></div></div>
                                  <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>SMART-Net<sup>™</sup> eXpansion Board</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/SSX/SSX.png" style="max-width:140px;padding-top:18px"></a></div></div>
                                  <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>Power Supply VDC</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/PSVDC/PSVDC.png" style="max-width:140px;padding-top:13px"></a></div></div>
                                  <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>Power Supply WDC</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/PSWDC/PSWDC.png" style="max-height:140px"></a></div></div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>End of Line Terminator</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/EOL/EOL.png" style="max-height:140px"></a></div></div>
                                  <div class="col-sm-3 padding-15 acenter"><div class="h180"><a href=""><h6><small>24 VAC Transformer</small></h6><img src="https://www.reliablecontrols.com/assets/img/products/TRANS/TRANS.png" style="max-width:140px;padding-top:2px"></a></div></div>
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
