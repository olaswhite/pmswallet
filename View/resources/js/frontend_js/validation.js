
function onlyNumber() { 
   var number, text;       
     number=document.getElementById("num");
     text=document.getElementById("text");
    if(number.test(/^\d+$/) != null){
        text="it is valid";
    }
    else{

        text="it is not valid";
    }


 
} 