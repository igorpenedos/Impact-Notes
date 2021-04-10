$(function () { // wait for document ready
  
  var controller = new ScrollMagic.Controller();

  var horizontalSlide = new TimelineMax()
  // animate panels
  .to("#js-slideContainer", 1,   {x: "-10%"})	
  .to("#js-slideContainer", 1,   {x: "-20%"})
  .to("#js-slideContainer", 1,   {x: "-30%"})
  .to("#js-slideContainer", 1,   {x: "-41%"})


  // create scene to pin and link animation
  new ScrollMagic.Scene({
    triggerElement: "#js-wrapper",
    triggerHook: "onLeave",
    duration: "300%"
  })
    .setPin("#js-wrapper")
    .setTween(horizontalSlide)
    .addTo(controller);
  
  
  
});