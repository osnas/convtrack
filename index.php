<?php

   $buildedlink = "https://example.com/osmand/?lat={$_GET["lat"]}&lon={$_GET["lon"]}&amp;timestamp={$_GET["timestamp"]}&altitude={$_GET["alt"]}&speed={$_GET["speed"]}&bearing={$_GET["acc"]}&username=USERNAME&key=THEPASSWORD" ; 

// echo $buildedlink ; exit() ; 

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $buildedlink);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 Firefox/76.0");

  $content = curl_exec($curl);
  echo $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
  curl_close($curl);

?>
