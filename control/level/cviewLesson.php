<?php
require_once("../../model/level/Rgroup.php");
$rgroup = new Rgroup();
$group_info = $rgroup->get_lesson_information();
$cnt = count($group_info['lesson_id']);
//echo $cnt;
?>