<?php
echo '<h3 style="color:red">Title : '.$mtitle.'</h3>';
echo '<h3 style="color:red">ID : '.$mid.'</h3>';
echo '<h3 style="color:red">SliderController - form</h3>';
$linkList = route($controllerName);

?>

<a href="<?php echo $linkList; ?>">Back</a>
