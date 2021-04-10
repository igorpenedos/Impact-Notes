TweenLite.defaultEase = Linear.easeNone;
var controller = new ScrollMagic.Controller();
var timeline1 = new TimelineMax();
timeline1.from("section.slide.turqoise", 1, {xPercent: 100});    
timeline1.from("section.slide.red", 1, {xPercent: -100});
timeline1.from("section.slide.brown", 1, {yPercent: 100});
timeline1.from("section.slide.green",1,{yPercent:-100});
timeline1.from("section.slide.purple",1,{xPercent: 100});

new ScrollMagic.Scene({
  triggerElement: "#outerContainer",
  triggerHook: "onLeave",
  duration: "300%"
}).setPin("#outerContainer").setTween(timeline1).addTo(controller);