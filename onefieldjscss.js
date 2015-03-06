function timestamp(vari) {

var name = vari
var tofive = 1000 * 60 * 5;
var date = new Date();
var rounded = new Date(Math.round(date.getTime() / tofive) * tofive).getMinutes();
var hours = date.getHours();

if(rounded < 10) {
        document.getElementById(name).value = hours + ":0" + rounded;
    }
else {
        document.getElementById(name).value = hours + ":" + rounded;
    }
}

function partsinform() {
	document.getElementById("partsin").style.display = "block";
	document.getElementById("job").style.display = "none";
}

function partsoutform() {
	document.getElementById("partsout").style.display = "block";
	document.getElementById("job").style.display = "none";
}

function showhidefield(varii,id)
  {
    if (document.getElementById(id).checked!=true)
    {
      document.getElementById(varii).style.display = "none";
    }
    else
    {
      document.getElementById(varii).style.display = "block";
    }
  }
function returnscreen(screen){

document.getElementById("job").style.display = "block";
document.getElementById(screen).style.display = "none";
}
