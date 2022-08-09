function populateanime(){
    var input = document.getElementById("newanime").value;
    var sort = input.split(':');
  
    document.getElementById("Anime").innerHTML = sort[0];
    document.getElementById("Episode").innerHTML = sort[1];
    document.getElementById("Episode Name").innerHTML = sort[2];
  }