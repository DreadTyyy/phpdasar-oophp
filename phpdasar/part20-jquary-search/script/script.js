$(document).ready(() => {
  // memberikan event
  $("#keyword").on("keyup", () => {
    keyword = $("#keyword").val();
    // cara 1 dengan load()
    // $("#container").load(`ajax/films.php?keyword=${keyword}`);

    // cara 2 dengan $.get()
    $.get(`ajax/films.php?keyword=${keyword}`, (data) => {
      $("#container").html(data);
    });
  });
});
