function display(i,count)
{ 
   exec();
   document.getElementById(i).style.display="block";
   for(var i=0;i<count;i++)
   {
    if(document.getElementById("dep"+i))
    {
       document.getElementById("cur"+i).style.display="none";
       document.getElementById("fac"+i).style.display="none";
       document.getElementById("pdf"+i).style.display="none";
    }
    else{
      break;
    }
   }
}
function exec()
{
   i=0;
 while(1){
   if(document.getElementById("body"+i)!=null)
   {   
      document.getElementById("body"+i).style.display="none";
   }
   else{
      break;
   }
   i++;
 }
}
function div(a,b,c){
   document.getElementById(a).style.display="block";
   let ar=[];
      if(b==0)
      {
       ar=["cur"+c,"fac"+c,"pdf"+c];
   }
      else if(b==1)
      {
       ar=["dep"+c,"fac"+c,"pdf"+c];
   }
      else if(b==2)
      {
       ar=["dep"+c,"cur"+c,"pdf"+c];
   }
      else if(b==3)
      {
       ar=["dep"+c,"cur"+c,"fac"+c];
   }
   for(var i=0;i<3;i++)
   { var v=ar[i];
   document.getElementById(v).style.display="none";
   }
}

 