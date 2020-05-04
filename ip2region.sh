#!/bin/bash
filenam0='2ban1.txt';
filenam3='2ban_.txt';
filenam4='/var/www/cab.udp.izmail.uptel.net/html/log_data/txt/4.txt';
echo ""> $filenam3;
#cat hungary_log | grep hungary | grep 200 |awk ' {print $1,$3,$4,$7} ' > /var/www/cab.udp.izmail.uptel.net/html/log_data/txt/1.txt;
#cat $filenam0 | grep hungary | grep 200 |awk ' {print $1,$3,$4,$7} ' > $filenam;
#cat $filenam0 | grep master | grep 200 |awk ' {print $1,$3,$4,$7} ' > $filenam;
#sed 'y/ /,/' $filenam > $filenam2;
#sed '/favicon./d' $filenam2 > $filenam3;
FILE=$filenam0;
while read LINE; do
#for "$LINE" in ${arr_cfg[*]};do
#IFS=',' read -ra ar1 <<< "$LINE"
ar1=($(echo $LINE| tr "," "\n"));
##for i in "${ar1[@]}"
##do
#echo `./\ip2name.php ${ar1[0]}`;

#echo $ar1[3];

###echo `./\ip2name.php ${ar1[0]}`' '$LINE >> $filenam3
echo `./\ip2name.php ${ar1[1]}`' '$LINE >> $filenam3

##done
#done
#echo "Это строка: $LINE"
done < $FILE
