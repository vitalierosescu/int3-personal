require("./style.css");
import colorPicker from "./js/color-picker/colorPicker";
AOS.init();

const lottieSlider = document.querySelector(".slider");

{
  const init = () => {
    colorPicker();

    var animData = {
        container: document.getElementById("lottie-three"),
        path: "./assets/lottie/assamblage.json",
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
        offset: 400,
        duration: 5000,
      })
        .setTween(tl)
        .setPin("#lottie-three")
        .addTo(controller);
    });

    //  ---
    // autopsie animation
    //  ---

    // var autopsie = bodymovin.loadAnimation({
    //   container: document.getElementById("autopsie-lottie"),
    //   path: "./assets/lottie/ilikeurcutg.json",
    //   renderer: "svg",
    //   loop: false,
    //   autoplay: true,
    //   name: "autopsie",
    // });

    // autopsie.play();

    var autopsieData = {
        container: document.getElementById("autopsie-lottie"),
        path: "./assets/lottie/ilikeurcutg.json",
        renderer: "svg",
        loop: false,
        autoplay: false,
        name: "autopsieScroll",
      },
      autopsieScroll,
      tl;

    var autopsieScroll = bodymovin.loadAnimation(autopsieData);

    autopsieScroll.addEventListener("DOMLoaded", function () {
      tl = new TimelineMax({ repeat: 0 });
      tl.to({ frame: 0 }, 1, {
        frame: autopsieScroll.totalFrames - 1,
        onUpdate: function () {
          autopsieScroll.goToAndStop(Math.round(this.target.frame), true);
        },
        Ease: Linear.easeNone,
      });

      var controller = new ScrollMagic.Controller();

      var scene = new ScrollMagic.Scene({
        triggerElement: ".autopsie-lottie-section",
        offset: 400,
        duration: 5000,
      })
        .setTween(tl)
        .setPin(".autopsie-lottie-section")
        .addTo(controller);
    });

    //  ---
    // header animation
    //  ---

    var globe = bodymovin.loadAnimation({
      container: document.getElementById("lottie1"),
      path: "./assets/lottie/globe.json",
      renderer: "svg",
      loop: false,
      autoplay: true,
      name: "Globe",
    });

    globe.play();

    //  ---
    // croc wash animation
    //  ---

    var wash = bodymovin.loadAnimation({
      container: document.getElementById("lottie"),
      path: "./assets/lottie/wash.json",
      renderer: "svg",
      loop: false,
      autoplay: false,
      name: "Wash",
    });

    const setCleaning = () => {
      let lottieSliderValue = lottieSlider.value;
      const instructionHand = document.querySelector(".tut1-hand");
      const instructionText = document.querySelector(".tut1-instruction-text");
      if (lottieSliderValue == 50) {
        wash.play();
        instructionHand.classList.add("hidden");
        setTimeout(function () {
          instructionText.textContent = "Sleep de wash volledig naar rechts.";
          wash.pause();
        }, 1900);
      }

      if (lottieSliderValue == 100 || lottieSliderValue >= 97) {
        // wash.playSegments([0, 30], false);
        wash.play();
      }
    };

    const setSucces = () => {
      const succes = document.querySelector(".tut1-succes");
      const instruction = document.querySelector(".tut1-instruction");
      succes.classList.remove("hidden");
      instruction.classList.add("hidden");
    };

    wash.addEventListener("complete", setSucces, false);
    lottieSlider.addEventListener("input", setCleaning, false);
  };

  init();
}
