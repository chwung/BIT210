//To set vaccine name at the heading of the StaffViewBatch.html when user click on a specific vaccine name.
window.addEventListener('load', () =>{

    var pfizer = localStorage.getItem("pfizer");
    var sinovac = localStorage.getItem("sinovac");
    var astrazeneca = localStorage.getItem("astrazeneca");

    document.getElementById('vaccineName').innerHTML = pfizer;
    document.getElementById('vaccineName').innerHTML = sinovac;
    document.getElementById('vaccineName').innerHTML = astrazeneca;
    
    
})