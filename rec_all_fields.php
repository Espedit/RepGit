<?php

foreach($_REQUEST as $key => $value){


  if(is_array($value)){


foreach($value => $item){


echo $key,"=> ",$item,"<br>";

}



}else{


echo $key,"=>",$value,"br>";

}

}










 ?>
