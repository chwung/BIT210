window.addEventListener('load', () =>{

    var name = localStorage.getItem("username");
    var password = localStorage.getItem("password");
    var centreName = localStorage.getItem("centreName");

    document.getElementById('name').innerHTML = name;
    document.getElementById('password').innerHTML = password;
    document.getElementById('centreName').innerHTML = centreName;
})