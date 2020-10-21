<?php
function getTitle($t){
    $title = basename($t);
    $title = str_replace('_', ' ', $title);//replacing '_' by spaces
    return $title;
}
?>


<html lang="en">
   
   <head>
      <meta http-equiv="Pragma" content="no-cache">
      <meta http-equiv="Expires" content="-1">
      <meta charset="UTF-8">
	<title><?php echo getTitle(__DIR__); ?></title>
      <link rel="icon" href="_media/favicon.ico">
      <meta name="google-site-verification" content="6t0LoIeFksrjF4c9sqUEsVXiQNxLp2hgoqo0KryT-sE">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="keywords" content="revengeos,revengeos downloads,revengeos for xiaomi,xiaomi,custom rom,xda revengeos,xda,download revngeos,ros,android,aosp">
      <meta name="description" content="Download Portal for RevengeOS.">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
      <script src="../../js/downloadpg.js"></script>
	
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
      
      <link rel="stylesheet" href="../../css/styles.css" title="vue">
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      
   </head>
<body>
<section class="cover show">
   <div class="mask"></div>
   <div class="cover-main">
   <div id="devicehead"></div>
   <div class="container-flexible">
      <div class="row justify-content-center">
         <div class="col-md-5">
            <div id="downimg"></div>
         </div>
         <div class="col-md-5">Hello<br>hrllo</div>
      </div>
   </div>
   <p id="buttondowpg">
  </p>
 </div>
</section>
<script src="../../js/cover.js"></script>
      
      <script></script>
      <div class="progress" style="opacity: 0; width: 0%;"></div>
      
   </body>
</html>
