<?php 
    $page = "rankBoost";
    include "./partials/header.php";
?>
<link rel="stylesheet" href="css/combobox.css">
<link rel="stylesheet" href="css/switch.css">
<link rel="stylesheet" href="css/rankboost.css">
<div class="container rankboost-container">
    <div class="row">
        <div class="col-8">
            <!-- <div class="dot"></div>
            <div class="vertical-line"></div>
            <div class="dot2"></div> -->
            <h4>SELECT YOUR <span class="highlight">CURRENT RANK</span></h4>
            <div class="current-desired">
                <div class="row pt-4">
                    <div class="col-4 img-container" id="rank-img-container">
                        <img src="images/iron1.png" alt="">
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col new-select-div pr-0">
                                <label for="current-tier">Current Tier</label>
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
                                <label for="current-division">Current Division</label>
                                <select class="custom-select" id="current-division" name="current-division">
                                    <option value="one">I</option>
                                    <option value="two">II</option>
                                    <option value="three">III</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col new-select-div pr-0">
                                <label for="current-rr">Current RR</label>
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
            <?php include "specials.php"; ?>
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
            <h4>SELECT YOUR <span class="highlight">DESIRED RANK</span></h4>
            <div class="current-desired">
                <div class="row pt-4">
                    <div class="col-4 img-container" id="desired-rank-img-container">
                        <img src="images/iron1.png" alt="">
                    </div>
                    <div class="col">
                        <div class="row align-items-center desired-select">
                            <div class="col new-select-div pr-0">
                                <label for="desired-tier">Desired Tier</label>
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
                                <label for="desired-division">Desired Division</label>
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
            <?php include "place-order.php"; ?>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <?php include "server-select.php"; ?>
    <br/>
    <br/>
    <?php include "agents.php";?>
</div>

<?php 
if($loggedin){
    include "checkout-modal.php";
} 
?>

<script src="js/modal.js"></script>
<script src="js/combobox.js"></script>
<script src="js/rankboost.js"></script>
