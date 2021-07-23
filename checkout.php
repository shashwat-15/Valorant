
<div class="container checkout">
    <div class="row">
        <div class="col-4" style="text-align:center;">
            <h5 style="color: #db1761">Review Your Order</h5>
            <?php if($page === "rankBoost") {
                $title = "Rank Boost";?>
            <p>Desired</p>
            <p><strong><span id="current-div"></span> to <span id="desired-div"></span></strong></p>
            <?php } else if($page === "placement") {
                $title = "Placement";?>
            <p>Last Rank</p>
            <p style="margin-top:-10px;"><strong><span id="selected-last-rank"></span></strong></p>
            <p>Number of Matches</p>
            <p style="margin-top:-10px;"><strong><span id="selected-matches"></span></strong></p>
            <?php } else if($page === "soloDuo") {
                $title = "Solo Duo"; ?>
            <p>Current Rank</p>
            <p style="margin-top:-10px;"><strong><span id="selected-current-rank"></span></strong></p>
            <p>Number of Wins</p>
            <p style="margin-top:-10px;"><strong><span id="selected-wins"></span></strong></p>  
            <?php }?> 
            <p>Your Server</p>
            <p style="margin-top:-10px;"><strong id="selected-server"></strong></p>
            <p>Selected Agent(s)</p>
            <p style="margin-top:-10px;"><strong id="selected-agent"></strong></p>
            <p>Total Price</p>
            <p style="color: #db1761; margin-top:-10px;" id="total"><strong></strong></p>
            <div class="vl"></div>
        </div>
        
        <div class="col-8" style="font-size:13px;">
            <h5 style="color: #db1761; text-align:center;"><?= $title ?></h5>
            <form action="" method="post">
                <div class="form-group row">
                    <div class="col-4">
                        <label for="account">Valorant account</label>
                        <input type="text" class="form-control" id="account" name="account">
                    </div>
                    <div class="col-4">
                        <label for="password">Valorant password</label>
                        <input type="text" class="form-control" id="password" name="password">
                    </div>
                    <div class="col-4">
                        <label for="summoner">Summoner</label>
                        <input type="text" class="form-control" id="summoner" name="summoner">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <p>Notes for Booster</p>
                        <textarea id="booster-notes" name="booster-notes" cols="50"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
