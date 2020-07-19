function fchat()
{
    var tchat= document.getElementById("tchat").value;
    if(tchat==0 || tchat=='0')
    {
        document.getElementById("fchat").style.display = "block";
        document.getElementById("tchat").value=1;
    }else{
        document.getElementById("fchat").style.display = "none";
        document.getElementById("tchat").value=0;
    }
}
