<?php
 require_once('api.php');
 $API = new RouterosAPI();

echo $ip = strip_tags($_POST['ip']);
echo $user = strip_tags($_POST['user']);
echo $password = strip_tags($_POST['password']);

if ($API->connect("$ip", "$user", "$password")) {
    $respones = [
        "status"=> true,
        "msg"=>"good"
    ];

    print_r(json_encode($respones));

} else {
   

    $respones = [
        "status"=> false,
        "msg"=>"no user name or password"
    ];
    print_r(json_encode($respones));
}



?>
