<?php 
    $page = "placement";
    include "./partials/header.php";
?>
<link rel="stylesheet" href="css/combobox.css">
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/switch.css">
<link rel="stylesheet" href="css/modal.css">
<link rel="stylesheet" href="css/placement.css">
<div class="container" style="font-size:14px; color: #FFF; margin-top: 100px;">
    <div class="row">
        <div class="col-8">
            <!-- <div class="dot"></div>
            <div class="vertical-line"></div>
            <div class="dot2"></div> -->
            <h4 style="text-align:center">SELECT YOUR <span style="color: #db1761">LAST RANK</span></h4>
            <div style="width: 100%; height: 150px; border-radius: 15px; background-color: #1e2023; box-shadow: 0px 5px 10px 0px rgba(0, 0, 1, 0.63);">
                <div class="row pt-4">
                    <div class="col-4" style="height: 100px;" id="last-rank-img-container">
                        <img src="images/iron1.png" alt="" style="object-fit:contain; width:100%; height:100%;">
                    </div>
                    <div class="col-4 new-select-div pr-0 align-self-center">
                        <label for="rank" style="color:#fff">Rank</label>
                        <select class="custom-select" id="rank" name="rank">
                            <option value="iron">Iron</option>
                            <option value="bronze">Bronze</option>
                            <option value="silver">Silver</option>
                            <option value="gold">Gold</option>
                            <option value="platinum">Platinum</option>
                            <option value="diamond">Diamond</option>
                            <option value="immortal">Immortal</option>
                            <option value="radiant">Radiant</option>
                        </select>
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
    <div class="row">
        <div class="col-8">
            <!-- <div class="dot" style="bottom: 30px;"></div>
            <div class="vertical-line" style="bottom: -10px;"></div>
            <div class="dot2" style="bottom: 0px;"></div> -->
            <h4 style="text-align:center">SELECT YOUR <span style="color: #db1761">NUMBER OF MATCHES</span></h4>
            <div style="width: 100%; height: 100px; border-radius: 15px; background-color: #1e2023; box-shadow: 0px 5px 10px 0px rgba(0, 0, 1, 0.63); display: flex; align-items:center;">
                <div class="container ml-5 mr-5 mt-2" >
                <div class="row">
                    <div class="col-12">
                        <div class="slidecontainer">
                            <input type="range" min="1" max="5" value="1" class="range-slider" id="myRange">
                            <datalist id="tickmarks" class="pt-2">
                                <option value="1" label="1"></option>
                                <option value="2" label="2"></option>
                                <option value="3" label="3"></option>
                                <option value="4" label="4"></option>
                                <option value="5" label="5"></option>
                            </datalist>
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
                        <input type="text" name="coupon" id="coupon" style="background-color:#141417; width:100%;"/>
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
    <div class="row">
        <div class="col-8">
            <h4 style="text-align:center">SELECT YOUR <span style="color: #db1761">SERVER</span></h4>
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
            <?php include "checkout.php" ?>
            <br/>
            <?php include "paypal.php" ?>
        <!-- </div> -->
    </div>
</div>
<script src="js/combobox.js"></script>
<script src="js/slider.js"></script>
<script src="js/modal.js"></script>
<script src="js/placement.js"></script>