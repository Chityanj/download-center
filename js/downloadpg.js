$(window).on('load', function() {
		$.getJSON("https://raw.githubusercontent.com/Chityanj/downloads/master/maintaners.json?token=AE4MYLAQAWPPMRBGSBFUXYS7SV7HQ", function(downpg) {
        downpg = downpg || [];
        if (downpg.length == 0) {
          return (document.getElementById("device_section").style.display =
            "none");
        }
	    var title = document.title;
        for (var i = 0; i < downpg.length; i++) {
        if (downpg[i].codename == title){
          $("#downimg").append(`
	  <img src="https://wiki.lineageos.org/images/devices/${downpg[i].codename}.png" onerror="this.onerror=null;this.src='../../images/${downpg[i].codename}.webp';" />
                                
            `);
		$("#devicehead").append(`
                <h1>${downpg[i].name}</h1>
                
                `);
		$("#buttondowpg").append(`
                <a href="${downpg[i].xda_thread}" target="_blank" rel="noopener">GitHub</a>
                
                `);
            }
        }
      }).fail(function() {
        return (document.getElementById("device_section").style.display = "none");
      });
});
