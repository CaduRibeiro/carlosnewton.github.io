
$.fn.scrollExecutar = function (pos, seletor, align, compl) {
  if (seletor) {
    var _obj = $(seletor);
    var position = _obj.offset();
    var height = _obj.height();

    if (align == "top") pos = parseFloat(position.top);
    else if (align == "bottom")
      pos = parseFloat(position.top) + parseFloat(height);
    else pos = parseFloat(position.top);
  }

  if (isNaN(pos)) pos = 0;
  if (compl) pos -= compl;

  $("html, body").on(
    "scroll mousedown wheel DOMMouseScroll mousewheel touchmove",
    function () {
      $("html, body").stop();
    }
  );
  $("html, body").animate({ scrollTop: pos }, 1000, function () {
    $("html, body").off(
      "scroll mousedown wheel DOMMouseScroll mousewheel touchmove"
    );
  });
};

$.fn.loadingAtivar = function () {
  let button = $("#submit");
  button.addClass("disabled");
  button.html("Enviando...");
}

$.fn.loadingDesativar = function () {
  let button = $("#submit");
  button.removeClass("disabled");
  button.html("Enviar");
}


$.fn.FormExecuteAjax = function (obj) {

  $.fn.loadingAtivar();

  var formID = $(obj).attr("id");
  var fields = $(obj).serialize();
  var action = $(obj).attr("action");

  var jqxhr = $.post(
    action,
    fields,
    function (data) {

      $.fn.loadingDesativar();

      if (data.et == 1) {
        $.toast({
          heading: 'Erro',
          text: data.emsg,
          showHideTransition: 'fade',
          position: 'top-center',
          icon: 'error'
        });

      } else {
        $.toast({
          heading: 'Sucesso',
          text: data.emsg,
          showHideTransition: 'fade',
          position: 'top-center',
          icon: 'success'
        });

        /* Hide and reset the form */
        $('#' + formID)[0].reset();

      }
    }
  )
    .fail(
      function () {
        $.fn.loadingDesativar();
        $.toast({
          heading: 'Erro',
          text: "Failure to process the requisition - COD: AJAX ERROR",
          showHideTransition: 'fade',
          position: 'top-center',
          icon: 'error'
        });
      }
    );
}


$(document).ready(function () {

  new WOW().init();

  // Slide
  $("#bannerSlide").slick({
    lazyLoad: 'ondemand',
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    infinite: true,
    dots: true,
    arrows: false,
    fade: true,
  });

  $("#ourSpaceSlide").slick({
    lazyLoad: 'ondemand',
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    infinite: false,
    dots: false,
    arrows: true,
    fade: true,
  });

  /**  
   * Menu navigation
  */
  $("nav a").on("click", function (e) {
    e.preventDefault();

    let data = $(this).attr("data-anchor");
    let header = $("header").height();

    $("nav").toggleClass("open");
    $("#icon-01").toggleClass("active");

    $.fn.scrollExecutar(0, " #" + data, "top", header);
  });

  // Ajax call 
  $(this).on("click", ".actFormExecuteAjax", function (event) {
    event.preventDefault();

    let form = $("#contactForm");

    $.fn.FormExecuteAjax(form);
  });

  $("#icon-01").on('click', function (event) {
    event.preventDefault();
    $(this).toggleClass('active');
    $("nav").toggleClass("open");
  });
});

$(window).on("load", function () {
  /**
     * Scroll to top of the page
     */
  $.fn.scrollExecutar();
});
