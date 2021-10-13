window.addEventListener('load', () =>{

    var vaccineID = localStorage.getItem("vaccineID");
    var center = localStorage.getItem("center");
    var date = localStorage.getItem("appointmentDate")

    if(vaccineID != ""){
        document.getElementById("status").innerHTML = "pending"
    }

    document.getElementById("vaccineID").innerHTML = vaccineID;
    document.getElementById("date").innerHTML = date;
    document.getElementById("center").innerHTML = center;
})