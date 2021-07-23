<link rel="stylesheet" href="css/combobox2.css">
<link rel="stylesheet" href="css/modal.css">
<link rel="stylesheet" href="css/navbar.css">
<div class="fixed-top horizontal-rectangle" id="nav">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="img-container pr-5" style="width:200px; height:200px; margin-top:-25px;">
                    <img src="images/logo2.png" alt="logo">
                </div>   
            </div>
            <div class="col-10">  
                <div class="row vertical-align">
                    <div class="col-2 new-select-div pr-0">
                        <select class="custom-select" id="domain" name="domain">
                            <option value="valorant">Valorant</option>
                            <option value="lol">League of Legends</option>
                            <option value="fortnite">Fortnite</option>
                        </select>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-2 offset-1">
                        <a href="reviews.php">
                        <i class="fal fa-star"></i>
                        REVIEWS
                        </a>
                    </div>
                    <div class="col-2 login-btn" style="cursor:pointer">
                        <i class="fal fa-user"></i>
                        LOGIN
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="myModal2" class="modal">
    <div class="modal-content">
        <div class="row">
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

<script src="js/navbar.js"></script>
