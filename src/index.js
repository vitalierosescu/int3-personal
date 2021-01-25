require("./style.css");
import colorPicker from "./js/color-picker/colorPicker";
AOS.init();

{
  const init = () => {
    // const $todosList = document.querySelector(`#todosList`);
    // if ($todosList) {
    //   loadTodos();
    // }

    // const $insertTodoForm = document.querySelector(`#insertTodoForm`);
    // if ($insertTodoForm) {
    //   $insertTodoForm.addEventListener(`submit`, handleSubmitInsertTodoForm);
    // }

    colorPicker();

    // lottie - start

    //////////////////////////

    //FIRST animation : https://assets.lottiefiles.com/datafiles/3gpFPHJI4WlLe62/data.json

    const $lottieContainer = document.getElementById("lottie-three");
    if ($lottieContainer) {
      var animData = {
        container: $lottieContainer, // the dom element that will contain the animation
        renderer: "svg",
        loop: false,
        autoplay: true,
        path:
          "https://assets.lottiefiles.com/datafiles/7HMs29Q0NhBUKCp/data.json", // the path to the animation json
        name: "animScroll",
      };
    }

    const animScroll = lottie.loadAnimation(animData);
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
        duration: 10000,
      })
        .setTween(tl)
        .setPin("#lottie-three")
        .addTo(controller);
    });
  };

  const loadTodos = async () => {
    const response = await fetch("index.php", {
      // OF: url = window.location.href.split(`?`)[0];
      headers: new Headers({
        Accept: "application/json",
      }),
    });
    const todos = await response.json();
    handleLoadTodos(todos);
  };

  const handleLoadTodos = (data) => {
    const $todosList = document.querySelector(`#todosList`);
    $todosList.innerHTML = data
      .map((todo) => createTodoListItem(todo))
      .join(``);
  };
  // lottie - end

  const createTodoListItem = (todo) => {
    return `<li>${todo.text}</li>`;
  };

  // deze functie zal het formulier afhandelen: merk op dat dit een async functie is
  const handleSubmitInsertTodoForm = (e) => {
    const $form = e.currentTarget;
    e.preventDefault();
    postTodo($form);
  };

  const postTodo = async ($form) => {
    // versturen naar de juiste route op de server en aangeven dat we een JSON response verwachten
    // de parameter body bevat de data (de todo text)
    const response = await fetch($form.getAttribute("action"), {
      method: "POST",
      headers: new Headers({
        Accept: "application/json",
      }),
      body: new FormData($form),
    });
    // antwoord van PHP. Kan een error bevatten of een lijst van todos
    const returned = await response.json();
    handleLoadSubmit(returned);
  };

  const handleLoadSubmit = (data) => {
    const $errorText = document.querySelector(`.error--text`);
    $errorText.textContent = "";
    if (data.result === "ok") {
      const $inputText = document.querySelector(`#inputText`);
      $inputText.value = "";
      // Todos opnieuw fetchen zodat de nieuwste ook getoond wordt
      loadTodos();
    } else {
      if (data.errors.text) {
        $errorText.textContent = data.errors.text;
      }
    }
  };

  init();
}
