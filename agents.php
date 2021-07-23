<link rel="stylesheet" href="css/agents.css">
<?php $agentImages = ["jett.png", "raze.png", "breach.png", "omen.png", "brimstone.png", "phoenix.png", "sage.png", "sova.png", "viper.png", "cypher.png", "reyna.png", "killjoy.png", "skye.png", "yoru.png", "astra.png"]; 
        $agentNames = ["Jett", "Raze", "Breach", "Omen", "Brimstone", "Phoenix", "Sage", "Sova", "Viper", "Cypher", "Reyna", "Killjoy", "Skye", "Yoru", "Astra"]; ?>
<div class="row">
    <div class="col-8">
        <h4>SELECT YOUR <span class="highlight">AGENT</span> (OPTIONAL)</h4>
        <div class="agents">
            <div class="container">
                <div class="row pt-4 pl-4">
                    <?php for($i =0; $i<count($agentImages); $i++){?>
                    <div class="col-3 p-0 mb-2">
                        <div class="agent-container pt-2">
                            <div class="agent-img-container">
                                <img src="images/<?= $agentImages[$i]?>" alt="">
                            </div>
                            <h6 class="pt-2 agent-name"><span class="agent-check" style="display:none; color: #db1761;"><i class="fas fa-check-circle"></i></span>  <?= $agentNames[$i]?></h6>
                        </div>
                    </div>
                    <?php }?>
                </div> 
            </div>
        </div>
    </div>
</div>
<script src="js/agents.js"></script>