document.querySelector(".checkout-btn").addEventListener('click', () => {
    if(document.getElementById("selected-last-rank") !== null && document.getElementById("selected-matches") !== null && document.getElementById("selected-server") !== null && 
    document.getElementById("selected-agent") !== null && document.getElementById("total") !== null) {
        const lastRank = document.getElementById("rank");
        const rangeSlider = document.getElementById("myRange");
        const server = document.getElementById("server");
        const totalPrice = document.getElementById("total-price");
        document.getElementById("selected-last-rank").innerText = lastRank.options[lastRank.selectedIndex].text;
        document.getElementById("selected-matches").innerText = rangeSlider.value;
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