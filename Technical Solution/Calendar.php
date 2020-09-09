<?php

class Calendar {
  private $month;
  private $year;
  private $days_of_week;
  private $num_days;
  private $date_info;
  private $day_of_week;
}
public function __construct($month, $year, $days_of_week = array('Sun','Mon','Tues','Wed','Thurs🔨','Fri','Sat')){
$this->month = $month;
$this->year = $year;
$this->days_of_week = $days_of_week;
$this->num_days = cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year);
$this->date_info = getdate(strtotime('first day of', mktime(0,0,0, $this->month,1,$this->year)));
$this->day_of_week = this->date_info['wday'];
}
