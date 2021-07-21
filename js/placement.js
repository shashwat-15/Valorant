let specialIcons = document.querySelectorAll(".special-icons");
let sliders = document.querySelectorAll(".slider");
for(let i = 0; i< sliders.length; i++){
    sliders[i].addEventListener('click', () => {
        if(specialIcons[i].style.display === "none"){
            specialIcons[i].style.display = "block";
        }
        else{
            specialIcons[i].style.display = "none";
        }
    });
}
const agentCheckIcons = document.querySelectorAll(".agent-check");
const agentContainers = document.querySelectorAll(".agent-container");
const agentNames = document.querySelectorAll(".agent-name");
const selectedAgents = [];
for(let i =0; i< agentContainers.length; i++){
    agentContainers[i].addEventListener('click', function() {
        this.classList.toggle("agent-container-active");
        if(this.querySelector(".agent-check").style.display === "none"){
            this.querySelector(".agent-check").style.display = "inline";
            selectedAgents.push(this.querySelector(".agent-name").innerText.trim());
        }
        else{
            this.querySelector(".agent-check").style.display = "none";
            selectedAgents.splice(selectedAgents.indexOf(this.querySelector(".agent-name").innerText.trim()), 1);
        }
    });
} 
document.querySelector(".checkout-btn").addEventListener('click', () => {
    const lastRank = document.getElementById("rank");
    const rangeSlider = document.getElementById("myRange");
    const server = document.getElementById("server");
    const totalPrice = document.getElementById("total-price");
    if(document.getElementById("selected-last-rank") !== null){
        document.getElementById("selected-last-rank").innerText = lastRank.options[lastRank.selectedIndex].text;
    }
    if(document.getElementById("selected-matches") !== null){
        document.getElementById("selected-matches").innerText = rangeSlider.value;
    }
    if(document.getElementById("selected-server") !== null){
        document.getElementById("selected-server").innerText = server.options[server.selectedIndex].text;
    }
    if(document.getElementById("selected-agent") !== null){
        document.getElementById("selected-agent").innerHTML = "";
        for(let i=0; i<selectedAgents.length; i++){
            document.getElementById("selected-agent").innerHTML += selectedAgents[i];
            if(i < selectedAgents.length - 1){
                document.getElementById("selected-agent").innerHTML += ", ";
            }

        }
    }
    if(document.getElementById("total") !== null){
        document.getElementById("total").innerText = totalPrice.innerText;
    }
});