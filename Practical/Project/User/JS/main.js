// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function signupvalidation() {
  var name = document.getElementById('uname').value;
  var phone = document.getElementById('phone').value;
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var confirm_pasword = document.getElementById('confirm_pasword').value;

  var valid = true;

  if (name == "") {
    valid = false;
    document.getElementById('namechk').style.display = "block";
  }
  var phonechk = /\d[0-9]/;
  if (!phonechk.test(phone)) {
    valid = false;
    document.getElementById('phonechk').style.display = "block";
  }
  var emailchk = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
  if (!emailchk.test(email)) {
    valid = false;
    document.getElementById('emailechk').style.display = "block";
  }
  if (password != confirm_pasword) {
    valid = false;
    document.getElementById('chk').style.display = "block";
  }
  return valid;
}
function shopfilter() {
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
 var ul = document.getElementById("shoplist");
 var li = ul.getElementsByClassName("box");
  for (i = 0; i < li.length; i++) {
     var a = li[i].getElementsByTagName("h3")[0];
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
      } else {
          li[i].style.display = "none";
      }
  }
}

function foodfilter() {
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
 var ul = document.getElementById("foodlist");
 var li = ul.getElementsByClassName("menubox");
  for (i = 0; i < li.length; i++) {
     var a = li[i].getElementsByTagName("h3")[0];
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
      } else {
          li[i].style.display = "none";
      }
  }
}



var no_item = 1;
var total = 0;
var cartitemid = 0;

var store = [];

function myFunction(ridham, ab) //ridham is coming from ADD button.
{

  var foodname = "#b" + ridham;
  var price = "#c" + ridham;

  var noOfItem = store.length;
  

  for (i = 0; i <= noOfItem; i++) {

    if (qwe(store,foodname) == 1) {
      
      store[noOfItem++] = foodname;
  ab = no_item;
  var no1 = no_item++;
  document.getElementById("num_item").innerHTML = no1;

  var main = document.querySelector(".menulist");

  
  var cartid = "cart" + cartitemid;

  var menuboxcart = document.createElement("div");
  menuboxcart.setAttribute("class", "menuboxcart");
  menuboxcart.setAttribute("Id", cartid);

  main.appendChild(menuboxcart);

  var sqr = document.createElement("div");
  sqr.setAttribute("class", "sqr");

  var circle = document.createElement("div");
  circle.setAttribute("class", "circle");

  sqr.appendChild(circle);

  var h3 = document.createElement("h3");
  var txt = document.getElementById(foodname).innerHTML;
  h3.innerHTML = txt;

  var p = document.createElement("p");
  var newid = "pri" + ridham;
  p.setAttribute("id", newid);
  var itemprice = document.getElementById(price).innerHTML;
  p.innerHTML = '\u20B9' + itemprice;

  menuboxcart.appendChild(sqr);
  menuboxcart.appendChild(h3);
  menuboxcart.appendChild(p);

  var form = document.createElement("form");
  form.setAttribute("class", "btn");

  var minus = document.createElement("input");
  minus.setAttribute("type", "button");
  minus.setAttribute("value", "-");
  var minpri = "min" + ridham;
  minus.setAttribute("id", minpri);


  var minus1 = document.createElement("input");
  minus1.setAttribute("type", "text");
  minus1.setAttribute("value", "1");
  var nub = "nub" + ridham;
  minus1.setAttribute("id", nub);
  minus1.setAttribute("maxlength", "2");
  minus1.setAttribute("readonly", "true");

  var minus2 = document.createElement("input");
  minus2.setAttribute("type", "button");
  minus2.setAttribute("value", "+");
  var addpri = "add" + ridham;
  minus2.setAttribute("id", addpri);

  form.appendChild(minus);
  form.appendChild(minus1);
  form.appendChild(minus2);

  menuboxcart.appendChild(form);

  /*********end of div */

  /********add or minus button in cart food item */
  var item = parseInt(itemprice);
  total += item;
  var lo = document.getElementById("total").innerHTML = total;

  document.getElementById(addpri).addEventListener("click", function () {
    var add = document.getElementById(nub).value;

    if (add == 10) {
      alert("You Can order only 10 pizza per item");
    } else {
      add++;
      document.getElementById(nub).value = add;
      total += item;
      document.getElementById("total").innerHTML = total;
    }
  });
  document.getElementById(minpri).addEventListener("click", function () {
    var minus = document.getElementById(nub).value;
    if (minus == 1) {
      document.getElementById(cartid).remove(".menuboxcart");
     // total = total - item;
      // for(l=0;l<=store.length;l++){
      //   if(store[l]==foodname){
      //     store[l];
      //   }
      // }
    } else {
      minus--;
      document.getElementById(nub).value = minus;
      total = total - item;
     
      document.getElementById("total").innerHTML = total;
    }
  });
    cartitemid++;
    } 
  }
  

  function qwe(as,no) {
    for(j=0;j<as.length;j++){
      if(as[j]==no)
      {
        return 0;
      }
    }
    return 1;
  }
}