var varientID = "1";

function getVariantID(){
    time = document.getElementsByName("time");
    title = "Aquaman";
    if(time == "1930" && title =="Aquaman"){
      varientID ="1";}
    else if(time =="2230" && title =="Aquaman") {
        varientID ="2";}
      else if(time =="2230" && title =="Venom") {
          varientID ="3";}
    else {
      varientID = "4";
    }
  }
