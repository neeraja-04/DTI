data={
    '0000':'Neeraja',
    '0001':'Surya Varma',
    '0002':'Vindhya',
    '0003':'Thanuja'
}

function showCallDiv() {
    document.getElementById("call").style.display = "block";
    let n1= document.getElementById("Vehicle").value;
    document.querySelector(".name").textContent = data[n1];
    
}
function hideCallDiv() {
    alert("CALLING");
    document.getElementById("call").style.display = "none";
    
}
