var patientArray = [];

class patient{
    constructor(name,password, email, id){
        this.name = name;
        this.password = password;
        this.email = email;
        this.id = id;
    }
}

var submit = document.getElementById("btn");
submit.onclick = patientSubmit();

function patientSubmit(){
    var name = document.getElementById("name");
    var password = document.getElementById("password");
    var email = document.getElementById("email");
    var id = document.getElementById("id");

    var newPatient = new patient(name, password, email, id);

    patientArray.push(newPatient);
    console.log("HI")
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