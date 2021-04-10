var controller = new ScrollMagic.Controller();

var scene1 = new ScrollMagic.Scene({
  triggerElement: ".first",
})
  .setClassToggle(".first", "fadeIn")
  .addTo(controller);

var scene2 = new ScrollMagic.Scene({
  triggerElement: ".second",
})
  .setClassToggle(".second", "fadeIn")
  .addTo(controller);

var scene3 = new ScrollMagic.Scene({
  triggerElement: ".third",
})
  .setClassToggle(".third", "fadeIn")
  .addTo(controller);
