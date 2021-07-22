<?php 
    $page = "rankBoost";
    include "./partials/header.php";
    $users = ["faintghost", "Yoboivales", "EXILEtv", "eeunhaa", "TimmyTran"];
    $stars = [5, 5, 4, 3, 4];
    $currentRank = [["platinum2.png", "Platinum II"], ["platinum3.png", "Platinum III"], 
        ["gold1.png", "Gold I"], ["silver3.png", "Silver III"], ["bronze2.png", "Bronze II"]];
    $desiredRank = [["diamond1.png", "Diamond I"], ["diamond1.png", "Diamond I"], 
    ["diamond2.png", "Diamond II"], ["platinum3.png", "Platinum III"], ["gold3.png", "Gold III"]];
    $reviews = ["Fizzas was very professional and completed the challenge in the given time. Really appreciate him communicating enough with me so I dont get anxious haha. Great service, loved it! Will be back soon enough for more.", 
        "Really quick and communicated well", "Worked directly with me to give a quick and safe boost. Highly recommend!", 
        "Very good player and nice guy 11/10 would smash again", "Nice and really good!"];
?>
<link rel="stylesheet" href="css/combobox.css">
<div class="container" style="font-size:14px; color: #FFF; margin-top: 100px;">
    <?php for($i=0; $i<count($users); $i++) {?>
        <div class="" style="width:75%; margin:0 auto; height: 150px; border-radius: 15px; background-color: #1e2023; box-shadow: 0px 5px 10px 0px rgba(0, 0, 1, 0.63);">    
            <div class="row pt-4 ml-2 mr-2">
                <div class="col-2">
                    <span style="font-size:16px; color: #fff;"><strong><?= $users[$i] ?></strong> <i class="fas fa-badge-check" style="color:#db1761;"></i></span>
                </div>
                <div class="col-3">
                    <?php for($j=0; $j<$stars[$i]; $j++) {?>
                        <i class="fas fa-star" style="color:#ffd700;"></i>
                    <?php }?>
                </div>
                <div class="col-2"></div>
                <div class="col-5" style="text-align:right;">
                    <img src="images/<?= $currentRank[$i][0]?>" alt="" height="30px" width="30px" class="mr-2">
                    <span class="mr-4"><?= $currentRank[$i][1]?></span>
                    <span class="mr-4" style="color:#db1761"><i class="fal fa-chevron-right"></i><i class="fal fa-chevron-right"></i><i class="fal fa-chevron-right"></i></span>
                    <img src="images/<?= $desiredRank[$i][0]?>" alt="" height="30px" width="30px" class="mr-2">
                    <span><?= $desiredRank[$i][1]?></span>
                </div>
            </div>
            <br/>
            <div class="row ml-2 mr-2">
                <div class="col">
                    <p><?= $reviews[$i] ?></p>
                </div>
            </div>
        </div>
        <br/>
    <?php }?>
</div>
<script src="js/combobox.js"></script>