<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*torex
torex
torex_db
K7a1R8y4
 * 
 * */
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<?php
print_r(PDO::getAvailableDrivers());
$db = new PDO('mysql:host=localhost;dbname=torex_db', 'torex', 'K7a1R8y4');
$stmt = $db->query("SELECT * FROM products");
while ($row = $stmt->fetch())
{
  echo '<pre>';
  print_r($row);
}
?>