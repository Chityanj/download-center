/**
   * Cover Page
   * @returns {String} Cover page
   */
  function cover() {
    var SL = ', 100%, 85%';
    var bgc =
      'linear-gradient(to left bottom, ' +
      "hsl(" + (Math.floor(Math.random() * 255) + SL) + ") 0%," +
      "hsl(" + (Math.floor(Math.random() * 255) + SL) + ") 100%)";

    return (
      "style=\"background: " + bgc""
    );
  }