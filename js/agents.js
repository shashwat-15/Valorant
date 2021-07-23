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