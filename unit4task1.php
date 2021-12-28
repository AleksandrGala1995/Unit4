<html> 
<head> 
    <title>Форма</title> 
    <meta charset="UTF-8"> 
</head> 
<body> 
 
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 
    Ваші імена: <input type="text" name="names"><br> 
    <input type="submit"> 
</form> 
<?php 
if (!empty($_POST['names'])) { 
    $names = $_POST['names']; 
  $array = explode(",", $names); 
 
  
  foreach ($array as $key => $value) {
      $array[$key]=trim($value);
      
  }
  
   sort($array, SORT_STRING);
  
   
   echo implode(", ",$array);
   
} 
?> 
 
</body> 
</html>