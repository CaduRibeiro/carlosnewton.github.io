
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

$.fn.FormExecuteAjax = function (obj) {

  // var divScroll = $(obj).data("div-scroll");
  // var header_top = $("header").height();

  // $.fn.loadingAtivar();
  // $("input[type=submit]").addClass('disabled');
  // if (typeof (divScroll) != 'undefined' && divScroll != '') $.fn.scrollExecutar(0, divScroll, "top", header_top);
  // else $.fn.scrollExecutar(0);

  var formID = $(obj).attr("id");
  var fields = $(obj).serialize();
  var action = $(obj).attr("action");

  console.log(formID);
  console.log(fields);
  console.log(action);

  var jqxhr = $.post(
    action,
    fields,
    function (data) {

      console.log(data);
      // $.fn.loadingDesativar();
      $("input[type=submit]").removeClass('disabled');

      if (data.et == 1) {
        // $.fn.toastAbrir(data.emsg, "err", data.ecmp);
        $(obj).find(".alert").removeClass("alert");
        $('#' + data.ecmp).parent().addClass('alert');

      } else if (typeof (data.url) == "undefined" && data.et == 0) {
        // $.fn.toastAbrir(data.emsg, "ok", data.ecmp, 5000);
        $(obj).find(".alert").removeClass("alert");

        /* Hide and reset the form */
        $('#' + formID)[0].reset();
        grecaptcha.reset();

      } else if (typeof (data.url) != "undefined" && data.et == 0 && data.url != "") {
        // $.fn.toastAbrir(data.emsg, "ok", data.ecmp);
        grecaptcha.reset();
        // $.fn.urlRedirecionar(data.url);

      } else {
        // $.fn.toastAbrir("Failure to process the requisition - COD: PHP ERROR", "err");

      }
    }
  )
    .fail(
      function () {

        console.log("fail");
        // $.fn.loadingDesativar();
        $("input[type=submit]").removeClass('disabled');
        // $.fn.toastAbrir("Failure to process the requisition - COD: AJAX ERROR", "err");
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

    $.fn.scrollExecutar(0, " #" + data, "top", header);
  });



  $(this).on("click", ".actFormExecuteAjax", function (event) {
    event.preventDefault();

    let form = $("#contactForm");

    console.log("HERE");

    $.fn.FormExecuteAjax(form);
  });
});

$(window).on("load", function () {
  /**
     * Scroll to top of the page
     */
  $.fn.scrollExecutar();
});
