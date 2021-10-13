//To set batchID and other info in the table of StaffViewBatch.html
window.addEventListener('load', () =>{

    var batchNumber = localStorage.getItem("batchNumber");
    var available = localStorage.getItem("available");
    var expiryDate = localStorage.getItem("expiryDate");

    document.getElementById('batchNumber').innerHTML = batchNumber;
    document.getElementById('available').innerHTML = available;
    document.getElementById('expiryDate').innerHTML = expiryDate;
    
})