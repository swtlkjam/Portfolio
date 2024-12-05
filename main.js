$(document).ready(function () {
  $(".header").height($(window).height());
  $("#toggleButtonMouse").click(function () {
    $("#mouse").fadeToggle();
    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $("#mouse").offset().top,
      },
      750
    );
  });
  $("#toggleButtonKeyboard").click(function () {
    $("#keyboard").fadeToggle();
    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $("#keyboard").offset().top,
      },
      750
    );
  });
  $("#toggleButtonMonitor").click(function () {
    $("#monitor").fadeToggle();
    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $("#monitor").offset().top,
      },
      750
    );
  });
  $("#fadeButtonMouse").click(function () {
    $("#fadeButtonMouse").hide();
    $("#mouseInfo").fadeIn("slow");
  });
  $("#fadeButtonKeyb").click(function () {
    $("#fadeButtonKeyb").hide();
    $("#keybInfo").fadeIn("slow");
  });
  $("#fadeButtonMonit").click(function () {
    $("#fadeButtonMonit").hide();
    $("#monitInfo").fadeIn("slow");
  });
});
