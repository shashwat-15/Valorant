<?php 
    $page = "soloDuo";
    include "./partials/header.php";
?>
<link rel="stylesheet" href="css/combobox.css">
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/switch.css">
<link rel="stylesheet" href="css/soloduo.css">
<div class="container soloduo-container">
    <div class="row">
        <div class="col-8">
            <!-- <div class="dot"></div>
            <div class="vertical-line"></div>
            <div class="dot2"></div> -->
            <h4>SELECT YOUR <span class="highlight">CURRENT RANK</span></h4>
            <div class="current-wins">
                <div class="container">
                    <div class="row">
                        <div class="col-4 img-container" id="current-rank-img-container">
                            <img src="images/iron1.png" alt="">
                        </div>
                        <div class="col-4 new-select-div pr-0">
                            <label for="current-tier-solo">Current Tier</label>
                            <select class="custom-select" id="current-tier-solo" name="current-tier-solo">
                                <option value="iron">Iron</option>
                                <option value="bronze">Bronze</option>
                                <option value="silver">Silver</option>
                                <option value="gold">Gold</option>
                                <option value="platinum">Platinum</option>
                                <option value="diamond">Diamond</option>
                            </select>
                        </div>
                        <div class="col-4 new-select-div pr-0">
                            <label for="current-division-solo">Current Division</label>
                            <select class="custom-select" id="current-division-solo" name="current-division-solo">
                                <option value="one">I</option>
                                <option value="two">II</option>
                                <option value="three">III</option>
                            </select>
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
    <div class="row">
        <div class="col-8">
            <!-- <div class="dot"></div>
            <div class="vertical-line"></div>
            <div class="dot2"></div> -->
            <h4>SELECT YOUR <span class="highlight">NUMBER OF WINS</span></h4>
            <div class="current-wins">
                <div class="container ml-5 mr-5 mt-2" >
                <div class="row">
                    <div class="col-12">
                        <div class="slidecontainer">
                            <input type="range" min="1" max="10" value="1" class="range-slider" id="myRange">
                            <datalist id="tickmarks" class="pt-2">
                                <option value="1" label="1"></option>
                                <option value="2" label="2"></option>
                                <option value="3" label="3"></option>
                                <option value="4" label="4"></option>
                                <option value="5" label="5"></option>
                                <option value="6" label="6"></option>
                                <option value="7" label="7"></option>
                                <option value="8" label="8"></option>
                                <option value="9" label="9"></option>
                                <option value="10" label="10"></option>
                            </datalist>
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
<script src="js/slider.js"></script>
<script src="js/soloduo.js"></script>