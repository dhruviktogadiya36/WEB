// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
function signupvalidation(){
        var name = document.getElementById('uname').value;
        var phone = document.getElementById('phone').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var confirm_pasword = document.getElementById('confirm_pasword').value;

        var valid = true;

        if(name == ""){
          valid= false;
          document.getElementById('namechk').style.display = "block";
        }
        var phonechk =/\d[0-9]/;
        if(!phonechk.test(phone)){
            valid = false;
            document.getElementById('phonechk').style.display = "block";
        }
        var emailchk = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
        if(!emailchk.test(email)){
          valid = false;
          document.getElementById('emailechk').style.display = "block";
      }
        if(password!=confirm_pasword){
            valid = false;
            document.getElementById('chk').style.display = "block";
        }
return valid;
}