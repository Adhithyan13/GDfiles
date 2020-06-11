<?php
$dirname="Resume/";
$image=glob($dirname."*.pdf*");?>
<center><?php
foreach($image as $image){
  echo '<img height="100" src="'.$image.'"/><br>';
  $name=basename($image);
  ?>
<p style="font-size:25px "> <?php
  echo '<a='.$name.'>'.$name.'<br>';?> </p> <?php
  echo '<a target="_blank" href="Resume/'.$name.'"view>View<br>';
  echo '<a href="Resume/'.$name.'"download>Download<br>';?>
</center><?php

}
?>