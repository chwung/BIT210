window.addEventListener('load', () =>{

    var centreName = localStorage.getItem("centreName");

    document.getElementById('centreName').innerHTML = centreName;
})