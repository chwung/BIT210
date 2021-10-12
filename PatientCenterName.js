window.addEventListener('load', () =>{

    var vaccine = localStorage.getItem("vaccine");
    var center = localStorage.getItem("center");

    var name = vaccine + " - " + center;



    document.getElementById('vaccineCenterName').innerHTML = name;
})