<?php
//可以是这种形式绑定
$fn_map = array(
	1001 => 'A.php',
	1002 => 'testUp.php',
	1003 => 'sec/get_token.php'
);
/*--------------- 以上不需要new SqlOp --------------------*/

/*--------------- 以下上需要new SqlOp --------------------*/
//也可以这种形式绑定
$fn_map[2001]  = 'user/User_list_controller.php';


$fn_map[3001]  = 'game/Game_list_controller.php';

return $fn_map;
?>
	