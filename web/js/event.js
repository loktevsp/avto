var mpost = function(_value)
{
  var Text = $.ajax({type: "POST",
      url: "http://avto.ru/php/getModels.php",
      data: {id:_value},
      async: false}).responseText;
      eval(Text);
  var i = 0;
  while(_json[i++])
  {
    var Option = document.createElement("OPTION");
        Option.value = i+1;
        Option.innerHTML = _json[i];
    document.getElementById('smodel').appendChild(Option);
  }
};
var sbrand = document.getElementById('sbrand');
sbrand.onchange = function(){mpost(sbrand.selectedIndex);};
var smodel= document.getElementById('smodel');
smodel.onchange = function(){alert(smodel.selectedIndex);};
