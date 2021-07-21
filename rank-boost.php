<?php 
    $page = "rankBoost";
    include "./partials/header.php";
?>
<link rel="stylesheet" href="css/combobox.css">
<link rel="stylesheet" href="css/switch.css">
<link rel="stylesheet" href="css/modal.css">
<link rel="stylesheet" href="css/rankboost.css">
<div class="container" style="font-size:14px; color: #FFF; margin-top: 100px;">
    <div class="row">
        <div class="col-8">
            <!-- <div class="dot"></div>
            <div class="vertical-line"></div>
            <div class="dot2"></div> -->
            <h4 style="text-align:center">SELECT YOUR <span style="color: #db1761">CURRENT RANK</span></h4>
            <div style="width: 100%; height: 200px; border-radius: 15px; background-color: #1e2023; box-shadow: 0px 5px 10px 0px rgba(0, 0, 1, 0.63);">
                <div class="row pt-4">
                    <div class="col-4" style="height: 150px;" id="rank-img-container">
                        <img src="images/iron1.png" alt="" style="object-fit:contain; width:100%; height:100%;">
                    </div>
                    <div class="col">
                        <div class="row" style="display:flex; width:100%;">
                            <div class="col new-select-div pr-0">
                                <label for="current-tier" style="color:#fff">Current Tier</label>
                                <select class="custom-select" id="current-tier" name="current-tier">
                                    <option value="iron">Iron</option>
                                    <option value="bronze">Bronze</option>
                                    <option value="silver">Silver</option>
                                    <option value="gold">Gold</option>
                                    <option value="platinum">Platinum</option>
                                    <option value="diamond">Diamond</option>
                                </select>
                            </div>
                            <div class="col new-select-div pr-0">
                                <label for="current-division" style="color:#fff">Current Division</label>
                                <select class="custom-select" id="current-division" name="current-division">
                                    <option value="one">I</option>
                                    <option value="two">II</option>
                                    <option value="three">III</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col new-select-div pr-0">
                                <label for="current-rr" style="color:#fff">Current RR</label>
                                <select class="custom-select" id="current-rr" name="current-rr">
                                    <option value="first">0-25</option>
                                    <option value="second">26-50</option>
                                    <option value="third">51-75</option>
                                    <option value="fourth">76-100</option>
                                </select>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <h4 style="text-align:center; color: #db1761;">SPECIALS</h4>
            <div style="width: 100%; height: 180px; border-radius: 15px; background-color: #1e2023; box-shadow: 0px 5px 10px 0px rgba(0, 0, 1, 0.63);">
                <div class="row justify-content-between pt-4 pl-4">
                    <div class="col-8">
                        <h6 style="color: #fff">Play With Booster <span class="pl-1 pr-1 ml-1 special-percentages">+40%</span></h6>
                    </div>
                    <div class="col-4">
                    <i class="fal fa-gamepad-alt special-icons" style="position:absolute; left:23px; top:7px; color:#fff; z-index: 100; display:none"></i>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round booster-slider"></span>
                    </label>
                    </div>
                </div>
                <div class="row justify-content-between pl-4">
                    <div class="col-8">
                        <h6 style="color: #fff">Priority Order <span class="pl-1 pr-1 ml-1 special-percentages">+20%</span></h6>
                    </div>
                    <div class="col-4">
                    <i class="fal fa-rocket-launch special-icons" style="position:absolute; left:25px; top:7px; color:#fff; z-index: 100; display:none"></i>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round priority-slider"></span>
                    </label>
                    </div>
                </div>
                <div class="row justify-content-between pl-4">
                    <div class="col-8">
                        <h6 style="color: #fff">With Streaming <span class="pl-1 pr-1 ml-1 special-percentages">+15%</span></h6>
                    </div>
                    <div class="col-4">
                    <i class="fab fa-twitch special-icons" style="position:absolute; left:25px; top:7px; color:#fff; z-index: 100; display:none"></i>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round stream-slider"></span>
                    </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="row">
        <div class="col-8">
            <!-- <div class="dot"></div>
            <div class="vertical-line"></div>
            <div class="dot2"></div> -->
            <h4 style="text-align:center">SELECT YOUR <span style="color: #db1761">DESIRED RANK</span></h4>
            <div style="width: 100%; height: 200px; border-radius: 15px; background-color: #1e2023; box-shadow: 0px 5px 10px 0px rgba(0, 0, 1, 0.63);">
                <div class="row pt-4">
                    <div class="col-4" style="height: 150px;" id="desired-rank-img-container">
                        <img src="images/iron1.png" alt="" style="object-fit:contain; width:100%; height:100%;">
                    </div>
                    <div class="col">
                        <div class="row" style="display:flex; align-items:center;width:100%; height: 100%;">
                            <div class="col new-select-div pr-0">
                                <label for="desired-tier" style="color:#fff">Desired Tier</label>
                                <select class="custom-select" id="desired-tier" name="desired-tier">
                                    <option value="iron">Iron</option>
                                    <option value="bronze">Bronze</option>
                                    <option value="silver">Silver</option>
                                    <option value="gold">Gold</option>
                                    <option value="platinum">Platinum</option>
                                    <option value="diamond">Diamond</option>
                                </select>
                            </div>
                            <div class="col new-select-div pr-0">
                                <label for="desired-division" style="color:#fff">Desired Division</label>
                                <select class="custom-select" id="desired-division" name="desired-division">
                                    <option value="one">I</option>
                                    <option value="two">II</option>
                                    <option value="three">III</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <h4 style="text-align:center">PLACE YOUR <span style="color: #db1761">ORDER</span></h4>
            <div style="width: 100%; height: 180px; border-radius: 15px; background-color: #1e2023; box-shadow: 0px 5px 10px 0px rgba(0, 0, 1, 0.63);">
                <div class="row pt-4 pl-4">
                    <div class="col">
                        <span style="color:#fff">Coupon:</span>
                    </div>
                </div>
                <div class="row pl-4 pb-3 pr-4">
                    <div class="col">
                        <input type="text" name="coupon" id="coupon" style="background-color:#141417; width:100%; color:#fff"/>
                    </div>
                </div>
                <div class="row justify-content-between pl-4 pr-4">
                    <div class="col-2" style="color:#fff"><p>TOTAL:</p></div>
                    <div class="col-2"><p style="color: #db1761" id="total-price">$0</p></div>
                </div>
                <div class="row pl-4 pr-4">
                    <div class="col">
                        <button class="btn btn-block checkout-btn" style="background: rgb(249,22,77);background: linear-gradient(90deg, rgba(249,22,77,1) 0%, rgba(175,22,130,1) 100%); font-style:italic; color:#fff;">CHECKOUT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="row">
        <div class="col-8">
            <h4 style="text-align:center">SELECT YOUR <span style="color: #db1761;">SERVER</span></h4>
            <div style="width: 100%; height: 130px; border-radius: 15px; background-color: #1e2023; box-shadow: 0px 5px 10px 0px rgba(0, 0, 1, 0.63);">
                <div class="row justify-content-around pt-2" style="display:flex; align-items:center; width:100%; height: 100%;">
                    <div class="col-2">
                        <label for="server" style="color:#fff">SERVER:</label>
                    </div>
                    <div class="col-4 new-select-div pr-0">
                        <select class="custom-select" id="server" name="server">
                            <option value="na">North America</option>
                            <option value="eu">Europe</option>
                            <option value="oc">Oceania</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <?php $agentImages = ["jett.png", "raze.png", "breach.png", "omen.png", "brimstone.png", "phoenix.png", "sage.png", "sova.png", "viper.png", "cypher.png", "reyna.png", "killjoy.png", "skye.png", "yoru.png", "astra.png"]; 
        $agentNames = ["Jett", "Raze", "Breach", "Omen", "Brimstone", "Phoenix", "Sage", "Sova", "Viper", "Cypher", "Reyna", "Killjoy", "Skye", "Yoru", "Astra"]; ?>
    <div class="row">
        <div class="col-8">
            <h4 style="text-align:center">SELECT YOUR <span style="color: #db1761">AGENT</span> (OPTIONAL)</h4>
            <div style="width: 100%; height: 650px; border-radius: 15px; background-color: #1e2023; box-shadow: 0px 5px 10px 0px rgba(0, 0, 1, 0.63);">
                <div class="container">
                    <div class="row pt-4 pl-4" style="color:#fff">
                        <?php for($i =0; $i<count($agentImages); $i++){?>
                        <div class="col-3 p-0 mb-2">
                            <div class="agent-container pt-2" style="height:150px; width: 150px; border-radius: 4px;">
                                <div class="agent-img-container" style="background-color:#db1761;height:100px; width:100px; margin:0 auto; border-radius: 12px;">
                                    <img src="images/<?= $agentImages[$i]?>" alt="" style="object-fit:contain; width:100%; height: 100%;  border-radius: 12px;">
                                </div>
                                <h6 class="pt-2 agent-name" style="text-align:center"><span class="agent-check" style="display:none;"><i class="fal fa-check-circle" style="background-color: #db1761; border-radius:100%;"></i></span>  <?= $agentNames[$i]?></h6>
                            </div>
                        </div>
                        <?php }?>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>


<div id="myModal" class="modal">
    <div class="modal-content">
        <div class="row">
            <div class="col">
                <span class="close" style="color:#fff">&times;</span>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <!-- <h5 style="color: #fff">Welcome to <strong>Valorant Boosting</strong></h5> -->
            </div>
        </div>
        <!-- <div class="box-model pt-1"> -->
            <?php include "login.php" ?>
        <!-- </div> -->
    </div>
</div>

<script src="js/combobox.js"></script>
<script src="js/rankboost.js"></script>
<script src="js/modal.js"></script>
