
function showUser(str) {
  
  document.getElementById("recordButton").click();

  if (str == "") {
    document.getElementById("res").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("res").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getsongs.php?q="+str,true);
    xmlhttp.send();
  }
}
function addEffect(str){
  // document.getElementById("recordButton").click();

  if (str == "") {
    document.getElementById("res").innerHTML += "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("res").innerHTML += this.responseText;
        license = str + "-license.txt";
       console.log(license);
      }
    };
    xmlhttp.open("GET","getclips.php?q="+str,true);
    xmlhttp.send();
  }
}