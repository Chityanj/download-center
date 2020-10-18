$(window).on('load', function() {
   $.getJSON("https://raw.githubusercontent.com/Chityanj/downloads/master/maintaners.json?token=AE4MYLEUI4KY3Y5TN3QJENC7RNB6Y", function(data) {
     data = data || [];
     if (data.length == 0) {
       return (document.getElementById("device_section").style.display =
         "none");
     }
     var xia = 'Xiaomi';
     var len = 'Lenovo';
    var one = 'OnePlus';
    var goo = 'Google';
    var real = 'Realme';
    var moto = 'Motorola';
    var leeco = 'LeEco';		
    var umi = 'UMIDIGI';

     for (var i = 0; i < data.length; i++) {
     if (data[i].brand == xia){
       $("#xiaomislider").append(`
      
                   <li><a href="#/${data[i].codename}/">${data[i].name}</a></li>
         `);
         }
     }
     for (var i = 0; i < data.length; i++) {
         if (data[i].brand == len){
           $("#lenovoslider").append(`
             <li><a href="#/${data[i].codename}/">${data[i].name}</a></li>
             
             `);
             }
         }
         for (var i = 0; i < data.length; i++) {
             if (data[i].brand == goo){
               $("#googleslider").append(`
                 <li><a href="#/${data[i].codename}/">${data[i].name}</a></li>
                 
                 `);
                 }
             }

   for (var i = 0; i < data.length; i++) {
             if (data[i].brand == leeco){
               $("#leecoslider").append(`
                <li><a href="#/${data[i].codename}/">${data[i].name}</a></li>
                 
                 `);
                 }
             }	
             for (var i = 0; i < data.length; i++) {
                     if (data[i].brand == one){
                       $("#oneplusslider").append(`
                        <li><a href="#/${data[i].codename}/">${data[i].name}</a></li>
                         `);
                         }
                     }
                 for (var i = 0; i < data.length; i++) {
                     if (data[i].brand == real){
                       $("#realmeslider").append(`
                        <li><a href="#/${data[i].codename}/">${data[i].name}</a></li>
                         `);
                         }
                     }
                     for (var i = 0; i < data.length; i++) {
                         if (data[i].brand == moto){
                           $("#motorolaslider").append(`
                             <li><a href="#/${data[i].codename}/">${data[i].name}</a></li>
                             `);
                             }
                         }
                         for (var i = 0; i < data.length; i++) {
                             if (data[i].brand == umi){
                               $("#umidslider").append(`
                                <li><a href="#/${data[i].codename}/">${data[i].name}</a></li>
                                 
                                 `);
                                 }
                             }    
   }).fail(function() {
     return (document.getElementById("device_section").style.display = "none");
   });
});
