// validator.js


function chkname(event) {



  var myName = event.currentTarget;


  var pos = myName.value.search(/^[A-Za-z]+$/);

  if (pos != 0) {
    alert("The name you entered (" + myName.value + 
          ") is not in the correct form. \n" +
          "Only alphabets and character spaces are allowed.");
    myName.focus();
    myName.select();
	return false;
  } 
}

function chkemail(event) {
	

  var myEmail = event.currentTarget;
 
  var pos = myEmail.value.search(/^[A-Za-z0-9\.\-]+\@[A-Za-z0-9]*\.*[A-Za-z0-9]*\.*[A-Za-z0-9]+\.[A-Za-z0-9]{2,3}$/);
  var ext = myEmail.value.search(/\.{2,}/);
 
  if (pos != 0 || ext != -1) {
    alert("The email you entered (" + myEmail.value +
          ") is not in the correct form. \n");
    myEmail.focus();
    myEmail.select();
	return false;
  } 
}
function chkInquiry(event) {
	
  var myInquiry = event.currentTarget;
  var valInquiry = myInquiry.value.trim();
  
  if (valInquiry == "") {
    alert("The field cannot be left blank");
    myInquiry.focus();
    myInquiry.select();
	return false;
  } 

}