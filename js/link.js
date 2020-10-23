$(window).on('load', function() {
var device = document.title;
     $.getJSON( "https://raw.githubusercontent.com/RevengeOS-Devices/official_devices/r10.0/" + device + "/device.json", function(emp) {
             
       var day = dayjs.unix(emp.datetime)

    var formatted = dayjs(day).format('DD/MM/YYYY')
       
       var inMB = (emp.size/1048576).toFixed(1) + 'MB' 
            $("#intro").append(`
                <h6>Version: ${emp.version}</h6><br>                      
               `);
      
              $("#intro").append( "<h6>Date: " + formatted + "</h6><br>");
              $("#intro").append( "<h6>Size: " + inMB + "</h6>");
       
              $("#buttons").append(`<a href="${emp.url}"><button type="button" class="btn btn blue-gradient">Download</button></a>`);
       
       }); 
});
