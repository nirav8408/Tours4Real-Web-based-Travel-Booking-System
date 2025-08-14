let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.n');
let inputbox = document.querySelector('.input-box-a');


menu.onclick = () => {
  menu.classList.toggle('bx-x');
  navbar.classList.toggle('open');
  inputbox.classList.toggle('open');
};

// image gallery 

$(document).ready(function () {
  var $list = $(".row1 .column ").hide(),

    $curr;

  $(".btn")
    .on("click", function () {
      var $this = $(this);
      $this.addClass("ac").siblings().removeClass("ac");
      $curr = $list.filter("." + this.id).hide();
      $curr.slice(0, 6).show(400);
      $list.not($curr).hide(300);
    })
    .filter(".ac")
    .click();

  $("#LoadMore").on("click", function () {
    $curr.filter(":hidden").slice(0,6).slideDown();
    scrollDown();
  });
  function scrollDown() {
    $('html, body').animate({
      scrollTop: $list.filter(":visible").last().offset().top
    }, 200);
    // if ($list.filter(":hidden").length == 0) {
    //   $("#LoadMore").fadeOut('slow');
    // }
    //   if($list >= $curr.length){
    //     loadmore.style.display = 'none';
    //  }

  }
});
// places to visit
let searchBox = document.querySelector('#search-box');
let images = document.querySelectorAll('.container .image-container .image');

searchBox.oninput = () => {
  images.forEach(hide => hide.style.display = 'none');
  let value = searchBox.value;
  images.forEach(filter => {
    let title = filter.getAttribute('data-title');
    if (value == title) {
      filter.style.display = 'block';
    }
    if (searchBox.value == '') {
      filter.style.display = 'block';
    }
  });
};
$(document).ready(function () {
  var $pl = $(".container .image-container .image").hide()
  $cur = $pl.hide();
  $cur.slice(0, 6).show(400);
  $(".Show").on("click", function () {
    $pl.filter(":hidden").slice(0, 6).slideDown();
    scrollDow();
    if ($pl.filter(":hidden").length == 0) {
      $(".Show").fadeOut('slow');
    }
  });
  function scrollDow() {
    $('html, body').animate({
      scrollTop: $pl.filter(":visible").last().offset().top
    }, 200);
  }
});