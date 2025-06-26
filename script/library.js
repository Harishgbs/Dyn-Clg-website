function display(id)
{
    last();
   document.getElementById(id).style.display="block";
}

function last(){
    var i=0;
while(1){
    i++
    var n =document.getElementById("m"+i);
    if(n)
    {
        document.getElementById("m"+i).style.display="none";
    }
    else{
        break;
    }
   }}