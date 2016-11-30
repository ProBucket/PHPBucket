<?php

----------------------------------
# Differcence bitween two dates
----------------------------------
$date1 = new DateTime("2010-07-06");
$date2 = new DateTime("2010-07-09");
$diff = $date2->diff($date1)->format("%a");


----------------------------------
# Difference bitween two days
----------------------------------
$date1 = "2007-03-24";
$date2 = "2009-06-26";

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf("%d years, %d months, %d days\n", $years, $months, $days);


----------------------------------
# Date formate change 
----------------------------------
$oldDate = '2010-03-20'
$arr = explode('-', $oldDate);
$newDate = $arr[2].'-'.$arr[1].'-'.$arr[0];


----------------------------------
# Date formate change 
----------------------------------
$originalDate = "2010-03-21";
$newDate = date("d-m-Y", strtotime($originalDate));



