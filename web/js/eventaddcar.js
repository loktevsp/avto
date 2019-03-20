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
        str[j++] = i + 1;

      return str;
}
var UploadImg = function(_nameid)
{
    var file_data = $('#'+_nameid).prop('files')[0];
    if(file_data !== undefined)
    {
      var form_data = new FormData();
      form_data.append('file', file_data);
      //alert(form_data);
      return $.ajax({
                  url: '/php/file-handler.php',
                  dataType: 'text',
                  cache: false,
                  contentType: false,
                  processData: false,
                  data: form_data,
                  type: 'post',
                  async: false}).responseText;
    }
    else return "{\"url\":\"\"}"
}
document.getElementById('savecar').onclick = function(){
  if(sbrand.children[sbrand.selectedIndex].text == "Выберите марку машины")
  {
    alert("Поле Марка не заполнено!");
    return;
  }
  if(smodel.children[smodel.selectedIndex].text == "Выберите модель машины")
  {
    alert("Поле Модель не заполнено!");
    return;
  }
  if(inputMileage.value == 0)
  {
    alert("Поле Пробег не заполнено!");
    return;
  }
  if(inputPrice.value == 0)
  {
    alert("Поле Цена не заполнено!");
    return;
  }
  if(inputPhone.value == 0)
  {
    alert("Поле Телефон не заполнено!");
    return;
  }

  jsonImg1 = UploadImg('img1');
  jsonImg2 = UploadImg('img2');
  jsonImg3 = UploadImg('img3');

  $.ajax({type: "POST",
          url: "/php/file.php",
          data: {brand:sbrand.children[sbrand.selectedIndex].text,
                model:smodel.children[smodel.selectedIndex].text,
                mileage:inputMileage.value,
                price:inputPrice.value,
                phone:inputPhone.value,
                security: getstrchild(security),
                exterior: getstrchild(exterior),
                comfort: getstrchild(comfort),
                multimedia: getstrchild(multimedia),
                urlImg1: JSON.parse(jsonImg1).url,
                urlImg1_720x540: JSON.parse(jsonImg1).url_720x540,
                urlImg1_146x106: JSON.parse(jsonImg1).url_146x106,
                urlImg2: JSON.parse(jsonImg2).url,
                urlImg2_720x540: JSON.parse(jsonImg2).url_720x540,
                urlImg2_146x106: JSON.parse(jsonImg2).url_146x106,
                urlImg3: JSON.parse(jsonImg3).url,
                urlImg3_720x540: JSON.parse(jsonImg3).url_720x540,
                urlImg3_146x106: JSON.parse(jsonImg3).url_146x106,},
          async: false});
          document.location.href = "/";
}
