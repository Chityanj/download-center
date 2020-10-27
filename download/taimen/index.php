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
      <link rel="icon" href="../../images/favicons/favicon.ico">
     <script data-ad-client="ca-pub-5878875805175242" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta property="og:image" content="../../images/favicons/favicon.ico" />
      <meta name="keywords" content="le max2,mido,tissot,dipper,zippo,revengeos,revengeos downloads,revengeos for xiaomi,xiaomi,custom rom,xda revengeos,xda,download revngeos,ros,android,aosp">
      <meta name="description" content="Download RevengeOS for <?php echo getTitle(__DIR__); ?>.">
      <script async defer data-website-id="ff9af394-4cf6-4674-9fc8-8241e42a00ac" src="https://analytics.revengeos.com/umami.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://unpkg.com/dayjs@1.8.21/dayjs.min.js"></script>
      <script>dayjs().format()</script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
      <!-- Google Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
      <!-- Bootstrap core CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../../css/devices.css" title="vue">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <script async defer data-website-id="a6c896cc-6841-4236-8483-be34321ecc91" src="https://analytics.revengeos.com/umami.js"></script>
       <script src="../../js/downpg.min.js"></script>
    </head>
   <body>
        <div style="height:170px;width:auto;text-align:center">
        <div>
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Auto center top -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5878875805175242"
     data-ad-slot="4203026862"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            </div>
      <div id="wrapper">
      <div class="container-fluid">
         <div class="main-card">
            <header id="page-header" class="text-center">
               <a href="/" class="btn btn blue-gradient nav-btn fas fa-angle-left left-0" role="button"></a>
               <h2 id="title" class="metropolis-medium"></h2>
            </header>
            <div class="container">
               <div class="row device-section">
                  <div id="downimg" class="col-md spec-device-img">
                  </div>
                  <div class="col-md">
                     <div class="row">
                        <div class="col spec-col">
                           <i class="icon far fa-calendar-alt"></i>
                           <div class="spec-text">
                              <div class="metropolis-semibold spec-type">Date</div>
                              <div id="date-value" class="spec-value"></div>
                           </div>
                        </div>
                        <div class="col spec-col">
                           <i class="icon fas fa-info-circle"></i>
                           <div class="spec-text">
                              <div class="metropolis-semibold spec-type">Version</div>
                              <div id="ver-value" class="spec-value"></div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col spec-col">
                           <i class="icon fas fa-download"></i>
                           <div class="spec-text">
                              <div class="metropolis-semibold spec-type">Size</div>
                              <div id="size-value" class="spec-value"></div>
                           </div>
                        </div>
                        <div class="col spec-col">
                           <i class="fas fa-donate icon"></i>
                           <div class="spec-text">
                              <div class="metropolis-semibold spec-type">Donate</div>
                              <div id="battery-value" class="spec-value"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
             <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

            <div id="buttons" class="text-center">
               <button type="button" class="btn btn purple-gradient" data-toggle="modal" data-target="#modalGM">Changelog</button>
            </div>
         </div>

      </div>
        
          
          
   </body>
</html>
