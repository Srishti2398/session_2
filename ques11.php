<?php
$date1= new DateTime('2012-11-04 05:40:00',new DateTimeZone('GMT'));
$date1->setTimezone(new DateTimeZone('IST'));
echo $date1->format('Y-m-d H:i:s');
echo"<br>";$date2= new DateTime('2012-11-05 09:06:00',new DateTimeZone('IST'));
echo $date2->format('Y-m-d H:i:s'); 
echo"<br>"; $difference =date_diff($date2,$date1);
echo "difference between time is:".$difference->format('%Y-%m-%d %H:%i:%s');
?>
