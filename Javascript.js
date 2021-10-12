
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
        'Kuala Lumpur Convention Centre','Setia City Convention Centre','Axiata Arena Bukit Jalil Centre'
    ];

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var centre = document.getElementById("centreName");

    localStorage.setItem("username", username);
    localStorage.setItem("password", password);
    localStorage.setItem("centreName", centre);

    for (var i = 0; i < patientUsername.length; i++) {
        if (username == patientUsername[i] && password == patientPassword[i]) {
          alert('Welcome ' + username);
          window.location.href = "PatientProfile.html";
          break;
        } else if(username == staffUsername[i] && password == staffPassword[i]){
            alert('Welcome ' + username);
            centre == centreName[i];
            window.location.href = "StaffProfile.html";
            break;
        }
        else{
            alert('Invalid username or password');
            reset();
        }
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

