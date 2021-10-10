var patientArray = [];
var staffArray = [];

class patient{
    constructor(name,password, email, id){
        this.name = name;
        this.password = password;
        this.email = email;
        this.id = id;
    }
}


function reset(){
    document.getElementById("form").reset;
}

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
        alert("email must be filled out");
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

function patientSubmit(){
    var name = document.getElementById("name");
    var password = document.getElementById("password");
    var email = document.getElementById("email");
    var id = document.getElementById("id");

    var newPatient = new patient(name, password, email, id);

    
    patientArray.push(newPatient);
    console.log(patientArray);
}

class staff{
    constructor(centreName, address, name, fullName, password, email, staffID){
        this.centreName = centreName;
        this.address = address;
        this.name = name;
        this.fullName = fullName;
        this.password = password;
        this.email = email;
        this.staffID = staffID;
    }
}

function staffSubmit(){
    var centreName = document.getElementById("centreName");
    var address = document.getElementById("address");
    var name = document.getElementById("name");
    var fullName = document.getElementById("fullName");
    var password = document.getElementById("password");
    var email = document.getElementById("email");
    var staffID = document.getElementById("staffID");

    var newStaff = new staff(centreName, address,name,fullName, password, email, staffID);

    
    staffArray.push(newStaff);
    console.log(staffArray);
    window.location.href = "Login.html";
}