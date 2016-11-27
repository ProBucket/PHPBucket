<?php

# Differcence bitween two dates
$date1 = new DateTime("2010-07-06");
$date2 = new DateTime("2010-07-09");
$diff = $date2->diff($date1)->format("%a");

# Date formate change 
$oldDate = '2010-03-20'
$arr = explode('-', $oldDate);
$newDate = $arr[2].'-'.$arr[1].'-'.$arr[0];

# Date formate change 
$originalDate = "2010-03-21";
$newDate = date("d-m-Y", strtotime($originalDate));
