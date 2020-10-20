$(window).on('load', function() {
		$.getJSON("https://raw.githubusercontent.com/Chityanj/downloads/master/maintaners.json?token=AE4MYLAQAWPPMRBGSBFUXYS7SV7HQ", function(data) {
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
          $("#xiaomi").append(`
			
                      <a href="#/download/${data[i].codename}/">
                            <section>
				<img src="https://wiki.lineageos.org/images/devices/${data[i].codename}.png" onerror="this.onerror=null;this.src='images/${data[i].codename}.png';" />
                                <div class="blog_container">
                                    <div class="section_title">${data[i].name}</div>
                        <div class="about_section">${data[i].maintainer}</div>
                    </div>
                </section>
            </a>
            `);
            }
        }
        for (var i = 0; i < data.length; i++) {
            if (data[i].brand == len){
              $("#lenovo").append(`
                <a href="#/download/${data[i].codename}/">
                    <section>
			<img src="https://wiki.lineageos.org/images/devices/${data[i].codename}.png" onerror="this.onerror=null;this.src='images/${data[i].codename}.png';" />
                        <div class="blog_container">
                            <div class="section_title">${data[i].name}</div>
                            <div class="about_section">
                                ${data[i].maintainer}
                            </div>
                        </div>
                    </section>
                </a>
                
                `);
                }
            }
            for (var i = 0; i < data.length; i++) {
                if (data[i].brand == goo){
                  $("#google").append(`
                    <a href="#/download/${data[i].codename}/">
                        <section>
			<img src="https://wiki.lineageos.org/images/devices/${data[i].codename}.png" onerror="this.onerror=null;this.src='images/${data[i].codename}.png';" />
                            <div class="blog_container">
                                <div class="section_title">${data[i].name}</div>
                                <div class="about_section">
                                    ${data[i].maintainer}
                                </div>
                            </div>
                        </section>
                    </a>
                    
                    `);
                    }
                }
			
		for (var i = 0; i < data.length; i++) {
                if (data[i].brand == leeco){
                  $("#leeco").append(`
                    <a href="#/download/${data[i].codename}/">
                        <section>
			<img src="https://wiki.lineageos.org/images/devices/${data[i].codename}.png" onerror="this.onerror=null;this.src='images/${data[i].codename}.png';" />
                            <div class="blog_container">
                                <div class="section_title">${data[i].name}</div>
                                <div class="about_section">
                                    ${data[i].maintainer}
                                </div>
                            </div>
                        </section>
                    </a>
                    
                    `);
                    }
                }	
                for (var i = 0; i < data.length; i++) {
                        if (data[i].brand == one){
                          $("#oneplus").append(`
                            <a href="#/download/${data[i].codename}/">
                            <section>
				<img src="https://wiki.lineageos.org/images/devices/${data[i].codename}.png" onerror="this.onerror=null;this.src='images/${data[i].codename}.png';" />
                                <div class="blog_container">
                                    <div class="section_title">${data[i].name}</div>
                        <div class="about_section">${data[i].maintainer}</div>
                    </div>
                </section>
            </a>
                            `);
                            }
                        }
                    for (var i = 0; i < data.length; i++) {
                        if (data[i].brand == real){
                          $("#realme").append(`
                            <a href="#/download/${data[i].codename}/">
                                <section>
				<img src="https://wiki.lineageos.org/images/devices/${data[i].codename}.png" onerror="this.onerror=null;this.src='images/${data[i].codename}.png';" />
                                    <div class="blog_container">
                                        <div class="section_title">${data[i].name}</div>
                                        <div class="about_section">
                                            ${data[i].maintainer}
                                        </div>
                                    </div>
                                </section>
                            </a>
                            
                            `);
                            }
                        }
                        for (var i = 0; i < data.length; i++) {
                            if (data[i].brand == moto){
                              $("#motorola").append(`
                                <a href="#/download/${data[i].codename}/">
                                    <section>
					<img src="https://wiki.lineageos.org/images/devices/${data[i].codename}.png" onerror="this.onerror=null;this.src='images/${data[i].codename}.png';" />
                                        <div class="blog_container">
                                            <div class="section_title">${data[i].name}</div>
                                            <div class="about_section">
                                                ${data[i].maintainer}
                                            </div>
                                        </div>
                                    </section>
                                </a>
                                
                                `);
                                }
                            }
                            for (var i = 0; i < data.length; i++) {
                                if (data[i].brand == umi){
                                  $("#umid").append(`
                                    <a href="#/download/${data[i].codename}/">
                                        <section>
						<img src="https://wiki.lineageos.org/images/devices/${data[i].codename}.png" onerror="this.onerror=null;this.src='images/${data[i].codename}.png';" />
                                            <div class="blog_container">
                                                <div class="section_title">${data[i].name}</div>
                                                <div class="about_section">
                                                    ${data[i].maintainer}
                                                </div>
                                            </div>
                                        </section>
                                    </a>
                                    
                                    `);
                                    }
                                }    
      }).fail(function() {
        return (document.getElementById("device_section").style.display = "none");
      });
});
