function initEvent(vm) {
    // Bind toggle button
    btn('button.sidebar-toggle', vm.router);
    collapse('.sidebar', vm.router);
    // Bind sticky effect
    if (vm.config.coverpage) {
      !isMobile && on('scroll', sticky);
    } else {
      body.classList.add('sticky');
    }
  }
