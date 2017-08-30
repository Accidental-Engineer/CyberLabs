function slideshow(){
    var str = 'url("http://localhost/mvc_init/assets/otherImg/';
    var i = 2;
    setInterval(function(){
      var nstr = str + i.toString() + '.jpg")';
      $(".slideshow").css("background-image", nstr);
      i += 1;
    }, 30000);
}
