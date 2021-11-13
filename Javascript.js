

//Reset button for register pages
function reset(){
    document.getElementById("form").reset;
}


//Edit user username in the their profile
function changeUsername(){
    var newName = document.getElementById("newUsername").value;


    document.getElementById("name").innerHTML = newName;
}

//For Patient register page to check validation for the patient input
function validatePatient(){
    let name = document.forms["patientForm"]["name"].value;
    let password = document.forms["patientForm"]["password"].value;
    let email = document.forms["patientForm"]["email"].value;
    let id = document.forms["patientForm"]["id"].value;

    if (name == "") {
        alert("Name must be filled out");
        return false;
    }
    else if (password == "") {
        alert("Password must be filled out");
        return false;
    }
    else if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    else if (id == "") {
        alert("IC/Passport must be filled out");
        return false;
    }
    else{
        patientSubmit();
        window.location.href = "Login.html";
    }
}

//The patient input in the patient register will be saved in an array.
function patientSubmit(){
    var name = document.getElementById("name").value;
    var password = document.getElementById("password").value;
    var email = document.getElementById("email").value;
    var id = document.getElementById("id").value;
    
    var newPatient = new patient([name, password, email, id]);

    patientArray.push(newPatient);
    console.log(patientArray);

}

//For Staff register page to check validation for the staff input
function validateStaff(){
    let centreName = document.forms["staffForm"]["centre"].value;
    let address = document.forms["staffForm"]["address"].value;
    let name = document.forms["staffForm"]["name"].value;
    let fullName = document.forms["staffForm"]["fullName"].value;
    let password = document.forms["staffForm"]["password"].value;
    let email = document.forms["staffForm"]["email"].value;
    let staffID = document.forms["staffForm"]["staffID"].value;

    if (centreName == "") {
        alert("centreName must be filled out");
        return false;
    }
    else if (address == "") {
        alert("Address must be filled out");
        return false;
    }
    else if (name == "") {
        alert("Username must be filled out");
        return false;
    }
    else if (fullName == "") {
        alert("FullName must be filled out");
        return false;
    }
    else if (password == "") {
        alert("Password must be filled out");
        return false;
    }
    else if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    else if (staffID == "") {
        alert("staffID must be filled out");
        return false;
    }
    else{
        staffSubmit();
        window.location.href = "Login.html";
    }
}

//The Staff input in the staff register will be saved in an array.
function staffSubmit(){
    var centreName = document.getElementById("centreName");
    var address = document.getElementById("address");
    var name = document.getElementById("name");
    var fullName = document.getElementById("fullName");
    var password = document.getElementById("password");
    var email = document.getElementById("email");
    var staffID = document.getElementById("staffID");

    var newStaff = new staff([centreName, address,name,fullName, password, email, staffID]);

    
    staffArray.push(newStaff);
    console.log(staffArray);
}

//to show centre name in the next page when click a specifu centre name
function selectCenter(center){
    localStorage.setItem("center", center)
}
//to show vaccine name in the next page when click a specific vaccine name
function selectVaccine(vaccine){
    localStorage.setItem("vaccine", vaccine);
}


//When add batch the list on the right will change to the input by the user and the table in StaffViewBatch.html 
//will also show the input of the user
function addBatch(){
    var vaccine = document.getElementById("manufacturerName").textContent;
    var batchNumber = document.getElementById("batchNumber").value;
    var expiryDate = document.getElementById("expiryDate").value;
    var quantity = document.getElementById("quantity").value;

    localStorage.setItem("batchNumber", batchNumber);
    localStorage.setItem("available", quantity);
    localStorage.setItem("expiryDate", expiryDate);
    
    if (batchNumber == "") {
        alert("Batch number must be filled out");
        return false;
    }else if (expiryDate == "") {
        alert("Expiry date must be filled out");
        return false;
    }else if (quantity == "") {
        alert("Quantity must be filled out");
        return false;
    }


    document.getElementById("batch1").innerHTML = batchNumber + " - " + vaccine + '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp' + quantity;
    
}

//when the user click on a vaccine at StaffViewVaccine.html, the name of the vaccine will show at the heading of StaffViewBatch.html
function vaccineName(vaccine){
    localStorage.setItem("vaccine", vaccine);
}

//when the user click on a batch at StaffViewVaccine.html, the name of the vaccine and batch number
//will show at the heading of StaffViewVacBat.html
function vaccineNameAndBatchNumber(){
    var vaccineName = document.getElementById("vaccineName").textContent;
    var batchNo = document.getElementById("batchNumber").textContent;
    var expiryDate = document.getElementById("expiryDate").textContent;

    localStorage.setItem("vaccineTitle", vaccineName);
    localStorage.setItem("batchTitle", batchNo);
    localStorage.setItem("expiryDate", expiryDate);
}

//to approve the patient request of the vaccine
function approve(){

    document.getElementById("pending").innerHTML = "Confirmed";

}

//to reject the patient request of the vaccine
function reject(){
    document.getElementById("pending").innerHTML = "Rejected";
}

//to administered after confirmed of the patient pending
function administered(){

    document.getElementById("administered").innerHTML = "Administered";

}

//to set any remarks for the patient request of the vaccine
function setRemarks(){
    var remark = document.getElementById("remarks").value

    document.getElementById("comment").innerHTML = remark;
}

//Set Date in the modal for vaccineBatches.html
function setminmaxDate(){
    var today = new Date().toISOString().split('T')[0];
    document.getElementById("appointmentDate").setAttribute("min", today);


    var expired = document.getElementById("expiryDate").textContent;
    document.getElementById("appointmentDate").setAttribute("max", expired);
}

//Set Date in the modal for StaffAddBatch.html
function setExpiryDate(){
    var today = new Date().toISOString().split('T')[0];
    document.getElementById("expiryDate").setAttribute("min", today);


    var expired = document.getElementById("expiryDate").textContent;
    document.getElementById("expiryDate").setAttribute("max", expired);
}

//Date validation in  vaccineBatches.html
function selectDate(){
    var amount = document.getElementById("amount").textContent;
    var date = document.getElementById("appointmentDate").value;

    if(date != ""){
    amount -= 1;
    document.getElementById("amount").textContent = amount;
    localStorage.setItem("appointmentDate", date);
    vaccineId = generateID()
    }
    else{
        alert("Select a date")
    }
}

//generate a random ID in the status.html
function generateID(){
    var vaccineID;
    vaccineID = Math.floor((Math.random() * 10000000) + 1);

    localStorage.setItem("vaccineID", vaccineID);

}



