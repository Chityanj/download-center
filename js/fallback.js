 // https://stackoverflow.com/a/18407205
    $('img[data-failover]').on("error", function () {
        var failover = $(this).data('failover');
        if (this.src !== failover) {
            this.src = failover;
        }
        
    });
