<?php
$dirname="portfolio/";
$image=glob($dirname."*.*");

foreach($image as $image){?>
<center><?php
 // echo '<img height="100" src="'.$image.'"/><br>';
  $name=basename($image);
  $image=basename($dirname,".pdf");
  ?>
<p style="font-size:40px "> <?php
  echo '<a filename='.$name.'>'.$name.'<br>';?> </p> <?php
  echo '<a target="_blank" href="portfolio/'.$name.'"view>View<br>';
  echo '<a href="portfolio/'.$name.'"download>Download<br><br><br>';?>
</center><?php
}
?>