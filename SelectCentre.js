const select = document.getElementById('select');

select.addEventListener('change', choice);

function choice(){
    const choice = select.value;
    
    if(choice === ''){
        document.getElementById("centre").value = "Centre 1";
        document.getElementById("address").innerHTML = " ";
    }else if(choice === 'centre1'){
        document.getElementById("centre").value = "Centre 1";
        document.getElementById("address").innerHTML = "Centre 1, Lot 01, Bandar Utama 030000";
    }else if(choice === 'centre2'){
        document.getElementById("centre").value = "Centre 2";
        document.getElementById("address").innerHTML = "Centre 2, Lot 02, Bandar Kedua 030000";
    }
}