<h2> Новое объявление </h2>
<form style='margin-top: 40px; margin-left:300px;'>
  <label for="selectBrand">Марка:</label>
  <div class="form-group">
    <div class="select-group" style='width:600px;'>
        <select class="select-brand" style='width:100%; height:30px;'>
          <!-- Выпадающее меню -->
          <option style='margin-left:5px;'>Выберите марку машины</option>
          <option style='margin-left:5px;' value="LADA">Lada</option>
        </select>
    </div>
  </div>
  <label for="selectModel">Модель:</label>
  <div class="form-group">
    <div class="select-group" style='width:600px;'>
        <select class="select-brand" style='width:100%; height:30px;'>
          <!-- Выпадающее меню -->
          <option style='margin-left:5px;'>Выберите модель машины</option>
          <option style='margin-left:5px;' value="2107">2107</option>
        </select>
    </div>
  </div>
  <label for="inputMileage">Пробег:</label>
  <div class="form-group">
    <input class="form-control" style='width:600px;' id="inputMileage" placeholder="Введите пробег">
  </div>
  <label for="selectModel">Дополнительное оборудование (опции):</label>
  <div class="form-group">
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle">
          Безопасность
          <!-- <span class="caret"></span> -->
        </button>
        <!-- Выпадающее меню -->
        <ul class="dropdown-menu" style='width:100%;'>
          <!-- Пункты меню  <li class="divider"></li> -->
          <li>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="abs">
              <label name="abs" class="form-check-label" for="abs">ABS</label>
            </div>
          </li>
          <li>
            <div class="form-group form-check" style='width:100%;'>
              <input type="checkbox" class="form-check-input" id="ebd">
              <label name="ebd" class="form-check-label" for="ebd">EBD</label>
            </div>
          </li>
        </ul>
    </div>
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">
          Экстерьер
          <!-- <span class="caret"></span> -->
        </button>
        <!-- Выпадающее меню -->
        <ul class="dropdown-menu" style='width:100%;'>
          <!-- Пункты меню  <li class="divider"></li> -->
          <li>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="abs">
              <label name="abs" class="form-check-label" for="abs">ABS</label>
            </div>
          </li>
          <li>
            <div class="form-group form-check" style='width:100%;'>
              <input type="checkbox" class="form-check-input" id="ebd">
              <label name="ebd" class="form-check-label" for="ebd">EBD</label>
            </div>
          </li>
        </ul>
    </div>
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle">
          Комфорт
          <!-- <span class="caret"></span> -->
        </button>
        <!-- Выпадающее меню -->
        <ul class="dropdown-menu" style='width:100%;'>
          <!-- Пункты меню  <li class="divider"></li> -->
          <li>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="abs">
              <label name="abs" class="form-check-label" for="abs">ABS</label>
            </div>
          </li>
          <li>
            <div class="form-group form-check" style='width:100%;'>
              <input type="checkbox" class="form-check-input" id="ebd">
              <label name="ebd" class="form-check-label" for="ebd">EBD</label>
            </div>
          </li>
        </ul>
    </div>
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
          Мультимедия
          <!-- <span class="caret"></span> -->
        </button>
        <!-- Выпадающее меню -->
        <ul class="dropdown-menu" style='width:100%;'>
          <!-- Пункты меню  <li class="divider"></li> -->
          <li>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="abs">
              <label name="abs" class="form-check-label" for="abs">ABS</label>
            </div>
          </li>
          <li>
            <div class="form-group form-check" style='width:100%;'>
              <input type="checkbox" class="form-check-input" id="ebd">
              <label name="ebd" class="form-check-label" for="ebd">EBD</label>
            </div>
          </li>
        </ul>
    </div>
  </div>
  <label for="inputMileage">Цена:</label>
  <div class="form-group">
    <input class="form-control" style='width:600px;' id="inputPrice" placeholder="Введите цену">
  </div>
  <label for="inputMileage">Телефон:</label>
  <div class="form-group">
    <input class="form-control" style='width:600px;' id="inputPhone" placeholder="Введите телефон">
  </div>
  <div class="form-group" style='margin-top:40px;'>
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">
          Подать объявление
          <!-- <span class="caret"></span> -->
        </button>
    </div>
  </div>
</form>
