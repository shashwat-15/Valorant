document.querySelector(".checkout-btn").addEventListener('click', () => {
    if(document.getElementById("selected-current-rank") !== null && document.getElementById("selected-wins") !== null && document.getElementById("selected-server") !== null &&
    document.getElementById("selected-agent") !== null && document.getElementById("total") !== null){
        const currentTier = document.getElementById("current-tier-solo");
        const currentDivision = document.getElementById("current-division-solo");
        const rangeSlider = document.getElementById("myRange");
        const server = document.getElementById("server");
        const totalPrice = document.getElementById("total-price");
        document.getElementById("selected-current-rank").innerText = currentTier.options[currentTier.selectedIndex].text + " " + currentDivision.options[currentDivision.selectedIndex].text;
        document.getElementById("selected-wins").innerText = rangeSlider.value;
        document.getElementById("selected-server").innerText = server.options[server.selectedIndex].text;
        document.getElementById("selected-agent").innerHTML = "";
        for(let i=0; i<selectedAgents.length; i++){
            document.getElementById("selected-agent").innerHTML += selectedAgents[i];
            if(i < selectedAgents.length - 1){
                document.getElementById("selected-agent").innerHTML += ", ";
            }
        }
        document.getElementById("total").innerText = totalPrice.innerText;
    }
    else{
        document.querySelector(".login-btn").click();
    }
});