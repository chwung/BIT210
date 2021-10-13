//To set vaccine name at the heading of the StaffViewBatch.html when user click on a specific vaccine name.
window.addEventListener('load', () =>{

    var vaccine = localStorage.getItem("vaccine");

    document.getElementById('vaccineName').innerHTML = vaccine;
    
})