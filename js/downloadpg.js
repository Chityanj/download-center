$(window).on('load', function() {
	        var device = document.title;
	const full_name = document.title;
	
	document.title = "RevengeOS | " + full_name;
	
		$.getJSON("https://raw.githubusercontent.com/Chityanj/downloads/master/maintaners.json?token=AE4MYLB47XWE23QIHZKFDJC7UALG4", function(downpg) {
        downpg = downpg || [];
        if (downpg.length == 0) {
          return (document.getElementById("device_section").style.display =
            "none");
        }
	   
        for (var i = 0; i < downpg.length; i++) {
        if (downpg[i].codename == device){
          $("#downimg").append(`
	  <img src="https://wiki.lineageos.org/images/devices/${downpg[i].codename}.png" onerror="this.onerror=null;this.src='../../images/${downpg[i].codename}.webp';" />
                                
            `);
		$("#title").append(`
                ${downpg[i].name}
                
                `);
		$("#buttons").append(`
                <a href="${downpg[i].xda_thread}"><button type="button" class="btn peach-gradient">XDA</button></a>
                
                `);
            }
        }
      }).fail(function() {
        return (document.getElementById("device_section").style.display = "none");
      });


     $.getJSON( "https://raw.githubusercontent.com/RevengeOS-Devices/official_devices/r10.0/" + device + "/device.json", function(emp) {
             
       var day = dayjs.unix(emp.datetime)

    var formatted = dayjs(day).format('DD/MM/YYYY')
       
       var inMB = (emp.size/1048576).toFixed(1) + 'MB' 
            $("#ver-value").append(`
                ${emp.version}                      
               `);
      
              $("#date-value").append(formatted);
              $("#size-value").append(inMB);
       
              $("#buttons").append(`<a href="${emp.url}"><button type="button" class="btn blue-gradient umami--click--download-" + device + "">Download</button></a>`);
       
       }); 
});
