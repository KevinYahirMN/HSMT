
var canvasElement = document.getElementById("cookieChart");
var config = {
    type: "bar",
    data:{
        labels: ["Kevin","Yisus","Roger","Kevin","Yisus","Roger","Kevin","Yisus","Roger"], 
    datasets: [{
        label: "Longitud de pilin", 
        data: [150, 10, 15,50, 10, 15,50, 100, 15]}],
    },
}
var cookieChart = new Chart(canvasElement,config);