<?php

$uid = $_POST['uid'];
$diamond = $_POST['diamond'];
$email = $_POST['email'];


function send_msg($msg) {
    // api key bot
    $api = '1819808794:AAHElI8gHVAIOmFrCX3Fy8WBrU1x1pYHZps';  
    // chat id users
    $chatid = '1174171489';
    file_get_contents('https://api.telegram.org/bot'.$api.'/sendMessage?chat_id='.$chatid.'&text='.$msg);
}


if ($uid == "" || $diamond == "" || $email == "") {
    $data['status'] = 1;
    $data['msg']   = 'Terdapat form yang kosong!';
    die(json_encode($data));
} else {
    send_msg("Pesanan baru Free Fire %0AUser ID             : ".$uid."%0AJumlah Topup : ".$diamond." Diamond %0AEmail                : ".$email);

/*
    if ($diamond == 60) {
       $data['status'] = 0;
       $data['msg']   = 'Pesanan segera diproses<br><br>Uid:'.$uid.'<br>Jumlah topup:'.$diamond.'<br>Email:'.$email.'<br>Harga: Rp.40.000,-';
       die(json_encode($data));
   } else if ($diamond == 80) {
       $data['status'] = 0;
       $data['msg']   = 'Pesanan segera diproses<br><br>Uid:'.$uid.'<br>Jumlah topup:'.$diamond.'<br>Email:'.$email.'<br>Harga: Rp.60.000,-';
       die(json_encode($data));
   } else if ($diamond == 100) {
       $data['status'] = 0;
       $data['msg']   = 'Pesanan segera diproses<br><br>Uid:'.$uid.'<br>Jumlah topup:'.$diamond.'<br>Email:'.$email.'<br>Harga: Rp.100.000,-';
       die(json_encode($data));
   } else if ($diamond == 100) {
       $data['status'] = 0;
       $data['msg']   = 'Pesanan segera diproses<br><br>Uid:'.$uid.'<br>Jumlah topup:'.$diamond.'<br>Email:'.$email.'<br>Harga: Rp.120.000,-';
       die(json_encode($data));
   } else if ($diamond == 100) {
       $data['status'] = 0;
       $data['msg']   = 'Pesanan segera diproses<br><br>Uid:'.$uid.'<br>Jumlah topup:'.$diamond.'<br>Email:'.$email.'<br>Harga: Rp.155.000,-';
       die(json_encode($data));
}
*/
}



?>