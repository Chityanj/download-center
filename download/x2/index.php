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
      	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/dayjs@1.8.21/dayjs.min.js"></script>
	<script>dayjs().format()</script>
      	<script src="../../js/downloadpg.js"></script>

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

   </head>
<body>
        <div id="wrapper">
        <div class="container-fluid">
            <div class="main-card">
                <header id="page-header" class="text-center">
                    <a href="/" class="btn blue-gradient nav-btn fas fa-angle-left left-0" role="button"></a>
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
                                        <div id="ver-value" class="spec-value">-</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col spec-col">
                                    <i class="icon fas fa-download"></i>
                                    <div class="spec-text">
                                        <div class="metropolis-semibold spec-type">Size</div>
                                        <div id="size-value" class="spec-value">-</div>
                                    </div>
                                </div>
                                <div class="col spec-col">
                                   <i class="fas fa-donate icon"></i>
                                    <div class="spec-text">
                                        <div class="metropolis-semibold spec-type">Donate</div>
                                        <div id="battery-value" class="spec-value">-</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                   
            </div>
              <div id="buttons" class="text-center">

  
  <button type="button" class="btn purple-gradient" data-toggle="modal" data-target="#modalGM">Changelog</button>

</div>
        </div>

        


</div>
</body>
</html>        
