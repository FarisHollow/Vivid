function validateForm (){
    let name = document.getElementById("lname").value;
    let pass = document.getElementById("lpass").value;

    // let g = document.getElementById("m").value;
    // let h = document.getElementById("fe").value;
    // let i = document.getElementById("o").value;
    
    if(name =="" || pass =="" ){

      document.getElementById("show").innerHTML = "PLEASE FILL UP ALL THE INFORMATION" ;
      return false;
    }else{
        document.getElementById("show").innerHTML = "SUCCESSFULLY LOGGED IN, WAIT A MOMENT" ;
      return true;
    }

}

function ajax(){
  let name = document.getElementById('lname').value;
  let pass = document.getElementById("lpass").value;
  let xhttp = new XMLHttpRequest();
      //xhttp.open('GET', 'userCheck.php?username='+username, true);
      xhttp.open('POST', 'userCheck.php', true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send('lname='+name);
      xhttp.send('lpass='+pass);

      //document.getElementById('head').innerHTML = xhttp.responseText;
      xhttp.onreadystatechange = function (){

          if(this.readyState == 4 && this.status == 200){
              //alert(this.responseText);
              document.getElementById('head').innerHTML = this.responseText;
          }
      } 
}