<?php
header('content-type:text/html;charset=UTF-8');
//B.封装简单的计算器
/**
 * 传入两个参数和一个操作符，返回计算的结果
 * 默认是加法操作
 */
$NUM1=$_GET['num1'];
$NUM2=$_GET['num2'];
$OP=$_GET['op'];
function calculate($N1,$N2,$O='+'){
  if(is_numeric($N1) && is_numeric($N2)){
    switch($O){
      case "+":
      $res=$N1+$N2;
      break;
      case "-":
      $res=$N1-$N2;
      break;
      case "*":
      $res=$N1*$N2;
      break;
      case "/":
      if($N2==0){
       die('除数不能为0');
     }else{
        $res=$N1/$N2;
        break;
      }
      case "%":
      if($N2==0){
       die('除数不能为0');
    }else{
      $res=$N1%$N2;
      break;
    }
    }
    echo $N1.$O.$N2.'=';
    echo '<h1>'.$res.'</h1>';
  }else{
    echo '请输入正常数字，谢谢！';
  }
}
calculate($NUM1,$NUM2,$OP);
