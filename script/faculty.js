function displaymenuu()
{  
    document.getElementById("sidemenuu").classList.toggle("active1");
    
}
function display(a)
{  if(a==0){
    document.getElementById("ce").style.display="none";
    document.getElementById("cme").style.display="none";
    document.getElementById("ece").style.display="none";
    document.getElementById("me").style.display="none";
    document.getElementById("general").style.display="none";
    document.getElementById("office").style.display="block";
    document.getElementById("sidemenuu").classList.toggle("active"); 
    }
    if(a==1){
        document.getElementById("ce").style.display="block";
        document.getElementById("cme").style.display="none";
        document.getElementById("ece").style.display="none";
        document.getElementById("me").style.display="none";
        document.getElementById("general").style.display="none";
        document.getElementById("office").style.display="none";
        document.getElementById("sidemenuu").classList.toggle("active");
    }
    if(a==2){
        document.getElementById("ce").style.display="none";
        document.getElementById("cme").style.display="block";
        document.getElementById("ece").style.display="none";
        document.getElementById("me").style.display="none";
        document.getElementById("general").style.display="none";
        document.getElementById("office").style.display="none";
        document.getElementById("sidemenuu").classList.toggle("active");

    }
    if(a==3){
        document.getElementById("ce").style.display="none";
        document.getElementById("cme").style.display="none";
        document.getElementById("ece").style.display="block";
        document.getElementById("me").style.display="none";
        document.getElementById("general").style.display="none";
        document.getElementById("office").style.display="none";
        document.getElementById("sidemenuu").classList.toggle("active");

    }
    if(a==4){
        document.getElementById("ce").style.display="none";
        document.getElementById("cme").style.display="none";
        document.getElementById("ece").style.display="none";
        document.getElementById("me").style.display="block";
        document.getElementById("general").style.display="none";
        document.getElementById("office").style.display="none";
        document.getElementById("sidemenuu").classList.toggle("active");

    }
    if(a==5){
        document.getElementById("ce").style.display="none";
        document.getElementById("cme").style.display="none";
        document.getElementById("ece").style.display="none";
        document.getElementById("me").style.display="none";
        document.getElementById("general").style.display="block";
        document.getElementById("office").style.display="none";
        document.getElementById("sidemenuu").classList.toggle("active");

  }
}