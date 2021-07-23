<?php 
    $page = "placement";
    include "./partials/header.php";
?>
<link rel="stylesheet" href="css/combobox.css">
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/switch.css">
<link rel="stylesheet" href="css/placement.css">
<div class="container placement-container">
    <div class="row">
        <div class="col-8">
            <!-- <div class="dot"></div>
            <div class="vertical-line"></div>
            <div class="dot2"></div> -->
            <h4>SELECT YOUR <span class="highlight">LAST RANK</span></h4>
            <div class="last-matches">
                <div class="container">
                    <div class="row">
                        <div class="col-4 img-container" id="last-rank-img-container">
                            <img src="images/iron1.png" alt="">
                        </div>
                        <div class="col-4 new-select-div pr-0">
                            <label for="rank">Rank</label>
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
            <h4>SELECT YOUR <span class="highlight">NUMBER OF MATCHES</span></h4>
            <div class="last-matches">
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
<script src="js/combobox.js"></script>
<script src="js/slider.js"></script>
<script src="js/modal.js"></script>
<script src="js/placement.js"></script>