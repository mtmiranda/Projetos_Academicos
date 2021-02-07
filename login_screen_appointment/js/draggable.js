$(document).ready(function () {
  $(".drag").draggable({
    drag: function (event, ui) {
      $(this).css({ background: "black" });
    },
    revert: true,
  });
  $(".drop").droppable({
    drop: function (event, ui) {
      $(this).droppable({ disabled: true });
      $(ui.draggable)
        .draggable({ revert: false, disabled: true })
        .css({ cursor: "default", background: "transparent", color: "black" });
      $(ui.draggable).position({
        at: "center",
        my: "center",
        of: this,
      });
    },
  });
});
