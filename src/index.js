require("./style.css");
import colorPicker from "./js/color-picker/colorPicker";
AOS.init();

const lottieSlider = document.querySelector(".slider");
// console.log(lottieSlider);
// lottieSlider.onChange = function () {
//   console.log(lottieSlider);
// };

// const checkSliderValue = () => {
//   console.log(lottieSlider.value);
// };

// lottieSlider.onchange = () => {
//   checkSliderValue();
// };

{
  const init = () => {
    colorPicker();
    // const $lottieContainer = document.getElementById("lottie-three");
    // if ($lottieContainer) {
    //   var animData = {
    //     container: $lottieContainer, // the dom element that will contain the animation
    //     renderer: "svg",
    //     loop: false,
    //     autoplay: true,
    //     path:
    //       "https://assets.lottiefiles.com/datafiles/7HMs29Q0NhBUKCp/data.json", // the path to the animation json
    //     name: "animScroll",
    //   };
    // }

    // const animScroll = lottie.loadAnimation(animData);
    // animScroll.addEventListener("DOMLoaded", function () {
    //   tl = new TimelineMax({ repeat: 0 });
    //   tl.to({ frame: 0 }, 1, {
    //     frame: animScroll.totalFrames - 1,
    //     onUpdate: function () {
    //       animScroll.goToAndStop(Math.round(this.target.frame), true);
    //     },
    //     Ease: Linear.easeNone,
    //   });

    //   var controller = new ScrollMagic.Controller();

    //   var scene = new ScrollMagic.Scene({
    //     triggerElement: ".env-three",
    //     offset: 300,
    //     duration: 10000,
    //   })
    //     .setTween(tl)
    //     .setPin("#lottie-three")
    //     .addTo(controller);
    // });

    //////////////////////////

    //FIRST animation : https://assets.lottiefiles.com/datafiles/3gpFPHJI4WlLe62/data.json

    var animData = {
        container: document.getElementById("lottie-three"),
        path:
          "https://assets.lottiefiles.com/datafiles/7HMs29Q0NhBUKCp/data.json",
        renderer: "svg",
        loop: false,
        autoplay: false,
        name: "animScroll",
      },
      animScroll,
      tl;

    var animScroll = bodymovin.loadAnimation(animData);

    animScroll.addEventListener("DOMLoaded", function () {
      tl = new TimelineMax({ repeat: 0 });
      tl.to({ frame: 0 }, 1, {
        frame: animScroll.totalFrames - 1,
        onUpdate: function () {
          animScroll.goToAndStop(Math.round(this.target.frame), true);
        },
        Ease: Linear.easeNone,
      });

      var controller = new ScrollMagic.Controller();

      var scene = new ScrollMagic.Scene({
        triggerElement: ".env-three",
        offset: 300,
        duration: 3000,
      })
        .setTween(tl)
        .setPin("#lottie-three")
        .addTo(controller);
    });

    // animation used: https://www.lottiefiles.com/29-motorcycle

    // croc wash animation

    var animation = bodymovin.loadAnimation({
      container: document.getElementById("lottie"),
      path:
        "https://assets.lottiefiles.com/datafiles/jW5K6vtuzJFJSxd/data.json",
      renderer: "svg",
      loop: false,
      autoplay: false,
      name: "Bike",
    });

    const setCleaning = () => {
      let lottieSliderValue = lottieSlider.value;
      const instructionHand = document.querySelector(".tut1-hand");
      const instructionText = document.querySelector(".tut1-instruction-text");
      if (lottieSliderValue == 50) {
        animation.play();
        instructionHand.classList.add("hidden");
        setTimeout(function () {
          instructionText.textContent = "Sleep de wash volledig naar rechts.";
          animation.pause();
        }, 2000);
      }

      if (lottieSliderValue == 100) {
        // animation.playSegments([0, 30], false);
        animation.play();
      }
    };

    const setSucces = () => {
      const succes = document.querySelector(".tut1-succes");
      const instruction = document.querySelector(".tut1-instruction");
      succes.classList.remove("hidden");
      instruction.classList.add("hidden");
    };

    animation.addEventListener("complete", setSucces, false);
    lottieSlider.addEventListener("input", setCleaning, false);
  };

  init();
}
