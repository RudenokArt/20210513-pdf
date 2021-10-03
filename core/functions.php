<?php 


// ========== FUNCTIONS ==========

function roomArr(){
  global $room_arr;
  $str=json_encode($room_arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
  return $str;
}

function getMembers(){
  global $data;
  $str='';
  $nameArr=[];
  $dateArr=[];
  $i=1;
  foreach ($data as $key => $value) {
    $name=explode('_', $key);
    if ($name[0]=='member' and $name[1]=='fio') {
      array_push($nameArr, $value);
      $i++;
    }
  }
  foreach ($data as $key => $value) {
    $date=explode('_', $key);
    if ($date[0]=='member' and $date[1]=='birstday') {
      array_push($dateArr, $value);
      $i++;
    }
  }
  for ($i=0; $i < sizeof($nameArr); $i++) { 
    $str=$str.'<p>1.2.'.($i+1).'. ФИО: '.$nameArr[$i].
    ' Дата рождения: '.$dateArr[$i].'</p>';
  }
  return $str;
}

function getPackage(){
  global $data;
  $package=explode('||', $data['selectedDates']);
  return $package;
}

function contractFormGet(){
  global $data;
  global $selectedDatesArr;
  global $room_arr;
  $arr=explode('||', $data['selectedDates']);
  $flag=false;
  foreach ($room_arr as $key => $value) {
    if($selectedDatesArr[$value]['date_from']==$arr[0] and
      $selectedDatesArr[$value]['date_to']==$arr[1] and
      $selectedDatesArr[$value]['place']==$arr[2])
    {
      $flag=true;
    }
  }
  return $flag;
}



?>