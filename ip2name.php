#!/usr/bin/php
<?php
// Пример работы с классом SxGeo v2.2
header('Content-type: text/plain; charset=utf8');

// Подключаем SxGeo.php класс
$path1 = "/var/www/html/utils/log_data/";
#echo ($path1);
include ("$path1/SxGeo.php");
// Создаем объект
// Первый параметр - имя файла с базой (используется оригинальная бинарная база SxGeo.dat)
// Второй параметр - режим работы: 
//     SXGEO_FILE   (работа с файлом базы, режим по умолчанию); 
//     SXGEO_BATCH (пакетная обработка, увеличивает скорость при обработке множества IP за раз)
//     SXGEO_MEMORY (кэширование БД в памяти, еще увеличивает скорость пакетной обработки, но требует больше памяти)
$SxGeo = new SxGeo("$path1/SxGeoCity.dat");
//$SxGeo = new SxGeo('SxGeoCity.dat', SXGEO_BATCH | SXGEO_MEMORY); // Самый производительный режим, если нужно обработать много IP за раз

##echo $_SERVER['REMOTE_ADDR'];
//$ip = '193.160.225.13';
$ip=$argv[1];
//var_export($argv[1]);
$a=$SxGeo->getCity($ip);
//var_export($a);
$a1=$a['city'];
if ($a1['name_en']=='') $a1['name_en']='city';
if (strpos($a1['name_en'],' ')) $a1['name_en']=str_replace(' ','-',$a1['name_en']);

#echo $a1['name_en'];
$a2=$a['country'];
echo $a2['iso'];

echo "_";
#echo $a2['iso']."\n";
echo $a1['name_en']."\n";

#var_export($SxGeo->about());          // Информация о базе данных
