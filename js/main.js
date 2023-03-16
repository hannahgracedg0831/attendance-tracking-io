$(document).ready(() => {
  $(".sign-up").click(() => {
    $(".modal").addClass("active");
  });
  $(".close").click(() => {
    $(".modal").removeClass("active");
  });
});
