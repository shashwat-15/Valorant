document.querySelector(".checkout-btn").addEventListener('click', () => {
    if(document.getElementById("current-div") !== null && document.getElementById("desired-div") !== null && document.getElementById("selected-server") !== null && 
    document.getElementById("selected-agent") !== null && document.getElementById("total") !== null){
        const currentTier = document.getElementById("current-tier");
        const currentDivision = document.getElementById("current-division");
        const desiredTier = document.getElementById("desired-tier");
        const desiredDivision = document.getElementById("desired-division");
        const server = document.getElementById("server");
        const totalPrice = document.getElementById("total-price");
        document.getElementById("current-div").innerText = currentTier.options[currentTier.selectedIndex].text + " " + currentDivision.options[currentDivision.selectedIndex].text;
        document.getElementById("desired-div").innerText = desiredTier.options[desiredTier.selectedIndex].text + " " + desiredDivision.options[desiredDivision.selectedIndex].text;
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






