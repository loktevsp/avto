<?php

//foreach ($_FILES as $key => $value) {
// Перезапишем переменные для удобства
$filePath  = $_FILES['file']['tmp_name'];
$errorCode = $_FILES['file']['error'];


// Проверим на ошибки
if ($errorCode !== UPLOAD_ERR_OK || !is_uploaded_file($filePath)) {

    // Массив с названиями ошибок
    $errorMessages = [
        UPLOAD_ERR_INI_SIZE   => 'Размер файла превысил значение upload_max_filesize в конфигурации PHP.',
        UPLOAD_ERR_FORM_SIZE  => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE в HTML-форме.',
        UPLOAD_ERR_PARTIAL    => 'Загружаемый файл был получен только частично.',
        UPLOAD_ERR_NO_FILE    => 'Файл не был загружен.',
        UPLOAD_ERR_NO_TMP_DIR => 'Отсутствует временная папка.',
        UPLOAD_ERR_CANT_WRITE => 'Не удалось записать файл на диск.',
        UPLOAD_ERR_EXTENSION  => 'PHP-расширение остановило загрузку файла.',
    ];

    // Зададим неизвестную ошибку
    $unknownMessage = 'При загрузке файла произошла неизвестная ошибка.';

    // Если в массиве нет кода ошибки, скажем, что ошибка неизвестна
    $outputMessage = isset($errorMessages[$errorCode]) ? $errorMessages[$errorCode] : $unknownMessage;

    // Выведем название ошибки
    print($outputMessage);
}
    // Создадим ресурс FileInfo
    $fi = finfo_open(FILEINFO_MIME_TYPE);

    // Получим MIME-тип
    $mime = (string) finfo_file($fi, $filePath);

    // Проверим ключевое слово image (image/jpeg, image/png и т. д.)
    if (strpos($mime, 'image') === false) die('Можно загружать только изображения.');

    // Результат функции запишем в переменную
    $image = getimagesize($filePath);

    // Зададим ограничения для картинок
    $limitBytes  = 1024 * 1024 * 5;
    $limitWidth  = 1280;
    $limitHeight = 768;

    // Проверим нужные параметры
    if (filesize($filePath) > $limitBytes) print('Размер изображения не должен превышать 5 Мбайт.');
    if ($image[1] > $limitHeight)          print('Высота изображения не должна превышать 768 точек.');
    if ($image[0] > $limitWidth)           print('Ширина изображения не должна превышать 1280 точек.');

    // Сгенерируем новое имя файла на основе MD5-хеша
    $name = md5_file($filePath);

    // Сгенерируем расширение файла на основе типа картинки
    $extension = image_type_to_extension($image[2]);

    // Сократим .jpeg до .jpg
    $format = str_replace('jpeg', 'jpg', $extension);

    // Переместим картинку с новым именем и расширением в папку /pics
    if (!move_uploaded_file($filePath, __DIR__ . '\\pics\\' . $name . $format)) {
        print('При записи изображения на диск произошла ошибка.');
    }
  //}

  $size=GetImageSize ( __DIR__ . '\\pics\\' . $name . $format);
  $pathImg =  __DIR__ . '\\pics\\' . $name . $format;
  $namefile = $name . $format;
function resizeImege($w, $h, $wd, $hd, $path, $name)
{
  $koew=$w/$wd;
  $koeh=$h/$hd;
  $new_w=ceil($w/$koeh);
  $new_h=ceil($h/$koew);
  $src=ImageCreateFromJPEG ($path);
  $dst=ImageCreateTrueColor ($wd, $hd);
  $white = imagecolorallocate($dst, 255, 255, 255);
  imagefill($dst, 0, 0, $white);

    //Данная функция копирует прямоугольную часть изображения в другое изображение, плавно интерполируя пикселные значения таким образом, что, в частности, уменьшение размера изображения сохранит его чёткость и яркость.
  if($w > $wd)
    ImageCopyResampled ($dst, $src, 0, ($hd-$new_h)/2, 0, 0, $wd, $new_h, $w, $h);
  else if($h > $hd)
   ImageCopyResampled ($dst, $src, ($wd-$new_w)/2, 0, 0, 0, $new_w, $hd, $w, $h);
  else
   ImageCopyResampled ($dst, $src, ($wd-$new_w)/2, ($hd-$new_h)/2, 0, 0, $new_w, $new_h, $w, $h);

  //Сохраняем полученное изображение в формате JPG
  $p = $wd."x".$hd.$name;
  ImageJPEG ($dst, __DIR__.'\\pics\\'.$p, 100);
  imagedestroy($src);
  return $p;
}

print(
  "{
    \"url\":\"".$name.$format."\",
    \"url_720x540\":\"".resizeImege($size[0],$size[1],720,540,$pathImg,$namefile)."\",
    \"url_146x106\":\"".resizeImege($size[0],$size[1],146,106,$pathImg,$namefile)."\"
  }"
);
//exit('<meta http-equiv="refresh" content="0; url=/site/index" />');
?>
