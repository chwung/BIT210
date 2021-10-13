window.addEventListener('load', () =>{

    var vaccineName = localStorage.getItem("vaccineTitle");
    var batchNo = localStorage.getItem("batchTitle");
    var expiryDate = localStorage.getItem("expiryDate");

    var title = vaccineName + " - " + batchNo;



    document.getElementById('vaccineAndBatchNo').innerHTML = title;

    document.getElementById('batch').innerHTML = batchNo;
    document.getElementById('date').innerHTML = expiryDate;
    document.getElementById('vaccine').innerHTML = vaccineName;

    document.getElementById('administeredbatch').innerHTML = batchNo;
    document.getElementById('administereddate').innerHTML = expiryDate;
    document.getElementById('administeredvaccine').innerHTML = vaccineName;
})