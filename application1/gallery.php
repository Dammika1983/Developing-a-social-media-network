<div style="min-height: 350px;width: 100px;background-color: lavenderblush;">
<?php
$DB = new database();
$sql = "select *from gallery where image = 1 && $id = $friendclass[id]";
$images = $DB->read($sql);
if (is_array($images))
{
    
}
?>
</div>


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

