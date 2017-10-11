function openMenu(){
  var sidebar = document.getElementById("sidebar"),
  margin = window.getComputedStyle(sidebar, null).marginLeft;
  margin = parseInt(margin.replace("px",""));
  if(margin < 0){
    sidebar.style.marginLeft = 0;
  }else{
    sidebar.style.marginLeft = "-60vw";
  }
}
