
//Constructor for patient
class patient{
    constructor([name,password, email, id]){
        this.name = name;
        this.password = password;
        this.email = email;
        this.id = id;
    }

    getName(){
        return this.name;
    }

    getPassword(){
        return this.password;
    }
}

//Reset button for register pages
function reset(){
    document.getElementById("form").reset;
}

//login in to the system with fixed username and password for staff and patient
function login(){
    var patientUsername = [
        'John', 'Steve', 'Alex'
    ];
    var patientPassword = [
        'Johnpassword', 'Stevepassword', 'Alexpassword'
    ];

    var staffUsername = [
        'Staff1', 'Staff2', 'Staff3'
    ];
    var staffPassword = [
        'password1', 'password2', 'password3'
    ];

    var centreName = [
        'Kuala Lumpur Convention Centre','Setia City Centre','Axiata Arena Bukit Jalil Centre'
    ];

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;


    localStorage.setItem("username", username);
    localStorage.setItem("password", password);
    
    if (username == patientUsername[0] && password == patientPassword[0]) {
        alert('Welcome ' + username);
        window.location.href = "PatientProfile.html";
    } else if (username == patientUsername[1] && password == patientPassword[1]) {
        alert('Welcome ' + username);
        window.location.href = "PatientProfile.html";
    }
    else if (username == patientUsername[2] && password == patientPassword[2]) {
        alert('Welcome ' + username);
        window.location.href = "PatientProfile.html";
      
    }else if(username == staffUsername[0] && password == staffPassword[0]){
        alert('Welcome ' + username);
        var centre = centreName[0];
        localStorage.setItem("centreName", centre);
        window.location.href = "StaffProfile.html";
    }else if(username == staffUsername[1] && password == staffPassword[1]){
        alert('Welcome ' + username);
        var centre = centreName[1];
        localStorage.setItem("centreName", centre);
        window.location.href = "StaffProfile.html";
    }else if(username == staffUsername[2] && password == staffPassword[2]){
        alert('Welcome ' + username);
        var centre = centreName[2];
        localStorage.setItem("centreName", centre);
        window.location.href = "StaffProfile.html";
    }else{
        alert("Username or password is invalid");
        reset();
    }

        

}

//Edit user username in the their profile
function changeUsername(){
    var newName = document.getElementById("newUsername").value;

    var name = document.getElementById("name");

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

//constructor for stuff
class staff{
    constructor([centreName, address, name, fullName, password, email, staffID]){
        this.centreName = centreName;
        this.address = address;
        this.name = name;
        this.fullName = fullName;
        this.password = password;
        this.email = email;
        this.staffID = staffID;
    }
}

//For Staff register page to check validation for the staff input
function validateStaff(){
    let centreName = document.forms["staffForm"]["centreName"].value;
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

function selectCenter(center){
    localStorage.setItem("center", center)
}

function selectVaccine(vaccine){
    localStorage.setItem("vaccine", vaccine);
}

//When add batch the list on the right will change to the input by the user and the table in StaffViewBatch.html 
//will also show the input of the user
function addBatch(){
    var vaccineName = document.getElementById("vaccineName").value;
    var batchNumber = document.getElementById("batchNumber").value;
    var expiryDate = document.getElementById("expiryDate").value;
    var quantity = document.getElementById("quantity").value;

    /*var li = document.createElement("li");
    var span = document.createElement("span");

    li.appendChild(batchNumber);
    span.appendChild(quantity);
    li.appendChild(span);

    var list = document.getElementById("listBatch");
    list.appendChild(li);*/

    localStorage.setItem("batchNumber", batchNumber);
    localStorage.setItem("available", quantity);
    localStorage.setItem("expiryDate", expiryDate);

    if (vaccineName == "") {
        alert("Vaccine name must be filled out");
        return false;
    }else if (batchNumber == "") {
        alert("Batch number must be filled out");
        return false;
    }else if (expiryDate == "") {
        alert("Expiry date must be filled out");
        return false;
    }else if (quantity == "") {
        alert("Quantity must be filled out");
        return false;
    }

    document.getElementById("batch1").innerHTML = batchNumber;
    //document.getElementById("quantity1").innerHTML = quantity;
}

//when the user click on a vaccine at StaffViewVaccine.html, the name of the vaccine will show at the heading of StaffViewBatch.html
function vaccineName(){
    var pfizer = document.getElementById("pfizer").value;
    var sinovac = document.getElementById("sinovac").value;
    var astrazeneca = document.getElementById("astrazeneca").value;

    localStorage.setItem("vaccineName", pfizer);
    localStorage.setItem("vaccineName", sinovac);
    localStorage.setItem("vaccineName", astrazeneca);

}

//to approve the patient request of the vaccine
function approve(){

    document.getElementById("pending").innerHTML = "Confirmed";

}

//to reject the patient request of the vaccine
function reject(){
    document.getElementById("pending").innerHTML = "Rejected";
}

//to set any remarks for the patient request of the vaccine
function setRemarks(){
    var remark = document.getElementById("remarks").value

    document.getElementById("comment").innerHTML = remark;
}

function setminmaxDate(){
    var today = new Date().toISOString().split('T')[0];
    document.getElementById("appointmentDate").setAttribute("min", today);


    var expired = document.getElementById("expiryDate").textContent;
    document.getElementById("appointmentDate").setAttribute("max", expired);
}

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

function generateID(){
    var vaccineID;
    vaccineID = Math.floor((Math.random() * 10000000) + 1);

    localStorage.setItem("vaccineID", vaccineID);

}



