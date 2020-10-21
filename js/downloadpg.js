$(window).on('load', function() {
		$.getJSON("https://raw.githubusercontent.com/Chityanj/downloads/master/maintaners.json?token=AE4MYLAQAWPPMRBGSBFUXYS7SV7HQ", function(downpg) {
        downpg = downpg || [];
        if (data.length == 0) {
          return (document.getElementById("device_section").style.display =
            "none");
        }
	    var title = document.getElementsByTagName("title")[0];
        for (var i = 0; i < data.length; i++) {
        if (data[i].codename == title){
          $("#downimg").append(`
				<img src="https://wiki.lineageos.org/images/devices/${data[i].codename}.png" onerror="this.onerror=null;this.src='../../images/${data[i].codename}.webp';" />
                                
            `);
            }
        }
        for (var i = 0; i < data.length; i++) {
            if (data[i].codename == title){
              $("#devicehead").append(`
                <h1>data[i].name</h1>
                
                `);
                }
            }
            for (var i = 0; i < data.length; i++) {
            if (data[i].codename == title){
              $("#buttondowpg").append(`
                <a href="data[i].xda_thread" target="_blank" rel="noopener">GitHub</a>
                
                `);
                }
            }
      }).fail(function() {
        return (document.getElementById("device_section").style.display = "none");
      });
});
