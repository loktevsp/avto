var delcar = function(_id)
{
  $.ajax({type: "POST",
      url: "/php/delcar.php",
      data: {id:_id},
      async: false});

  document.location.href = "/";
}
