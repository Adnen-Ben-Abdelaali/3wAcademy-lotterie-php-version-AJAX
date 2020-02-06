'use strict';

function getRandom(event) {

  event.preventDefault();

  $.get("index.php", {
    nbValues: $('#nbValues').val()
  }, function(response) {
    $("em").html(response);
  });
}