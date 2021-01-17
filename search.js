


window.onload = function () {

//set filter to task by default
document.getElementById('search').value='T '; filter();

};



var lines = document.getElementsByClassName("line");


function filter() {

var search = document.getElementById("search");


for(i=0;i<lines.length;i++) {

  if(lines.item(i).innerHTML.includes(search.value)) {
  
    //console.log(lines.item(i).innerHTML);
    //noop
    lines.item(i).style.display = "block"; 
  
  } else {
  
    //console.log(lines.item(i).innerHTML);
    //lines.item(i).remove();
    lines.item(i).style.display = "none";    

  
  }

}
}


