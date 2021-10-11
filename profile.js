window.addEventListener('load', () =>{

    var name = localStorage.getItem("username");
    var password = localStorage.getItem("password");

    document.getElementById('name').innerHTML = name;
    document.getElementById('password').innerHTML = password;
})