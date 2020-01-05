<?php
$userList=['peter','jack','mike'];//已注册用户列表
$user=isset($_POST['name'])?$_POST['name']:'';
in_array($user,$userList)?1:0;   //如果用户名不再列表中返回0，否则返回1；

