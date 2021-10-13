const select = document.querySelector('select');

select.addEventListener('change', selectChoice);

function selectChoice(){
    const choice = select.value;
    
    if(choice === 'pfizer'){
        document.getElementById("manufacturerName").innerHTML = "Pfizer Inc.";
    }else if(choice === 'sinovac'){
        document.getElementById("manufacturerName").innerHTML = "Sinovac Biotech Ltd";
    }else if(choice === 'astrazeneca'){
        document.getElementById("manufacturerName").innerHTML = "AstraZeneca plc";
    }
}