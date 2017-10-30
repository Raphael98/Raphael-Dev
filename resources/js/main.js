
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

$(document).ready(function(){
  $("#sidebar a, #itens a").click(function(event){
    event.preventDefault();
    var target = $(this.hash);
    $("body, html").animate({
      "scrollTop": target.offset().top - 70
    });
  });
  $("#collapse, #sidebar a").click(function(){
    openMenu();
  });
});