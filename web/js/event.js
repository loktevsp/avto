var sbrand = document.getElementById('sbrand');
var smodel = document.getElementById('smodel');
var inputMileage = document.getElementById('inputMileage');
var inputPrice = document.getElementById('inputPrice');
var inputPhone = document.getElementById('inputPhone');
var security = document.getElementById('security');
var exterior = document.getElementById('exterior');
var comfort = document.getElementById('comfort');
var multimedia = document.getElementById('multimedia');
var mpost = function(_value)
{
  var Text = $.ajax({type: "POST",
      url: "/php/getModels.php",
      data: {id:_value},
      async: false}).responseText;
      eval(Text);

var Element = document.getElementById('smodel');
while(Element.lastElementChild.innerHTML !== 'Выберите модель машины')
  Element.removeChild(Element.lastElementChild);

 var i = 0;
 while(_json[i] !== undefined)
{
    var Option = document.createElement("OPTION");
        Option.value = i+1;
        Option.text= eval(_json[i++]);
    Element.appendChild(Option);
 }
};

sbrand.onchange = function(){mpost(sbrand.selectedIndex);};
sbrand.onclick = function(_e){mpost(sbrand.selectedIndex);};
sbrand.children[0].selected = true;
//mpost(sbrand.selectedIndex);

var imgPrev1 = document.querySelector('#imgcar1');
var imgPrev2 = document.querySelector('#imgcar2');
var imgPrev3 = document.querySelector('#imgcar3');

var loadImg = function(_input, _imgPrev)
{
  if(_input.files[0])
  {
    var reader = new FileReader();
    reader.onload = function(e){
      _imgPrev.src = e.target.result;
    }
    reader.readAsDataURL(_input.files[0]);
  }
}

document.querySelector('#img1').onchange = function(){
  loadImg(this, imgPrev1);
};
document.querySelector('#img2').onchange = function(){
  loadImg(this, imgPrev2);
};
document.querySelector('#img3').onchange = function(){
  loadImg(this, imgPrev3);
};

var getstrchild = function(_elem)
{
  var str = [];
  var j = 0;
  for(i = 0; i < _elem.childElementCount; i++)
    if(_elem.children[i].children[0].checked)
        str[j++] = i;

      return str;
}

document.getElementById('savecar').onclick = function(){
  //document.getElementById('postimg').submit();


      alert($.ajax({type: "POST",
          url: "/php/file.php",
          data: {brand:sbrand.children[sbrand.selectedIndex].text,
                model:smodel.children[smodel.selectedIndex].text,
                mileage:inputMileage.value,
                price:inputPrice.value,
                phone:inputPhone.value,
                security: getstrchild(security),
                exterior: getstrchild(exterior),
                comfort: getstrchild(comfort),
                multimedia: getstrchild(multimedia),},
          async: false}).responseText);
}
