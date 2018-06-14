<?php
header('content-type:text/html;charet=UTF-8');
//D.封装获取验证码
/**
 * 默认产生4位的数字验证码，可以改变验证码的长度
 * type1 数字
 * type2 字母
 * type3 数字+字母
 */
 $c=$_GET['check'];
 $p=$_GET['P'];

function check($ch,$po){

  $arr1=range(0,9);
  $arr2=range('a','z');
  $arr3=range('A','Z');
  $newarr=array_merge($arr1,$arr2,$arr3);
  $newarr1=array_merge($arr2,$arr3);
  $number1=count($newarr)-1;
  $number2=count($arr1)-1;
  $number3=count($newarr1)-1;

  switch($po){

    case 'A':
    if($ch<=4 || $ch==null){
      for($k=1;$k<=4;$k++){
        $key2=mt_rand(0,$number2);
        echo $arr1[$key2];
      }
    }else{
      for($k=1;$k<=$ch;$k++){
        $key2=mt_rand(0,$number2);
        echo $arr1[$key2];
      }
    }
    break;

    case 'B':
    if($ch<=4 || $ch==null){
      for($k=1;$k<=4;$k++){
        $key3=mt_rand(0,$number3);
        echo $newarr1[$key3];
      }
    }else{
      for($k=1;$k<=$ch;$k++){
        $key3=mt_rand(0,$number3);
        echo $newarr1[$key3];
      }
    }
    break;

    case 'C':
    if($ch<=4 || $ch==null){
      for($k=1;$k<=4;$k++){
        $key1=mt_rand(0,$number1);
        echo $newarr[$key1];
      }
    }else{
      for($k=1;$k<=$ch;$k++){
        $key1=mt_rand(0,$number1);
        echo $newarr[$key1];
    }
  }
    break;
  }
}
check($c,$p);
