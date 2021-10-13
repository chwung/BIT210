//To set each of the healthcare administrator centre name at the heading of the StaffViewVaccine.html
window.addEventListener('load', () =>{

    var centreName = localStorage.getItem("centreName");

    document.getElementById('centreName').innerHTML = centreName;
})