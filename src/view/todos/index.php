<ol id="todosList">
  <!-- met JS ingeladen -->
</ol>
<?php
if (!empty($insertTodoResult)) {
?>
  <p>De todo werd toegevoegd!</p>
<?php
} else {
  if (!empty($errors)) {
    echo '<div class="error">Gelieve de verplichte velden in te vullen</div>';
  }
?>
<form id="insertTodoForm" method="post" action="index.php">
  <input type="hidden" name="action" value="insertTodo" />
  <div>
    <label for="inputText">text:</label>
    <input type="text" id="inputText" name="text" value="<?php
    if (!empty($_POST['text'])) {
      echo $_POST['text'];
    }
    ?>" />
    <span class="error error--text"><?php if (!empty($errors['text'])) echo $errors['text'];?></span>
  </div>
  <div>
    <button type="submit">Add Todo</button>
  </div>
</form>
<?php
}
?>

<header class="container">
  <h1 class="h1">Heely Crocs: Tutorial</h1>
  <p class="subheading">The Shoes of the Future</p>
  <p class="text-left">
    Crocs op wieltjes. Iedereen zijn droom toch? Met deze tutorial leren we je hoe je heleren naar een volgend niveau brengt.
  </p>
  <img class="maker-bol" src="./assets/img/maker-bol.svg" alt="">
</header>

<section class="tools container">
  <p class="first_of_all text-center">First of all.</p>
  <h2 class="h2 text-center">Materialen & Gereedschap</h2>
  <ul class="tools-list">
    <li class="tools-item">
      <img src="./assets/img/maker-bol.svg" height="100px" alt="">
      <p class="body-text">1 paar crocs (duhhh)</p>
    </li>
    <li class="tools-item">
      <img src="./assets/img/maker-bol.svg" height="100px" alt="">
      <p class="body-text">2x wieltjes</p>
    </li>
    <li class="tools-item">
      <img src="./assets/img/maker-bol.svg" height="100px" alt="">
      <p class="body-text">verf</p>
    </li>
    <li class="tools-item">
      <img src="./assets/img/maker-bol.svg" height="100px" alt="">
      <p class="body-text">verf</p>
    </li>
    <li class="tools-item">
      <img src="./assets/img/maker-bol.svg" height="100px" alt="">
      <p class="body-text">verf</p>
    </li>
    <li class="tools-item">
      <img src="./assets/img/maker-bol.svg" height="100px" alt="">
      <p class="body-text">verf</p>
    </li>
    <li class="tools-item">
      <img src="./assets/img/maker-bol.svg" height="100px" alt="">
      <p class="body-text">verf</p>
    </li>
    <li class="tools-item">
      <img src="./assets/img/maker-bol.svg" height="100px" alt="">
      <p class="body-text">verf</p>
    </li>
  </ul>
</section>

<!--  ›››››› tutorial section ›››››› -->
<section class="tuts">
  <!-- step 1 - start -->
  <article class="tut1 grid">
    <div class="container full-width">
      <h3 class="h3 text-center">Croc Wash</h3>
        <p class="body-text text-center">
        Begin met je crocs proper te maken. Eens dat het Heeler Crocs zijn wil je natuurlijk dat ze blinken voor de buitenwereld!
        </p>
        <div class="container">
  <div class="tooltip">
    <span class="tooltiptext" id="tooltiptext">50cm</span>
  <input type="range" min="0" max="100" value="50" class="slider" id="myRange" onchange="rangeValFunc(this.value);">
  </div>
</div>
    </div>
  </article>
  <!-- 1 - end -->

  <p class="body-text tut-number">03</p>

  <!-- 3 - start -->
  <article class="tut3 container">
    <h3 class="h3">Put the wheels in the heels</h3>
    <p class="body-text">Voor de wieltjes zijn er 2 opties. Je neemt wieljtes uit je oud skateboard of je laat het model 3D printen.</p>
    <ul class="tut3_steps">
      <li class="tut3_step">
        <div class="tut3_step-img_container">
          <img class="tut3_step-img" src="./assets/img/skateboard.png" width="200px" height="" alt="">
          <p class="tut3_step-number">1</p>
        </div>
        <p class="body-text text-center">Voor de wieltjes zijn er 2 opties. Je neemt wieljtes uit je oud skateboard of je laat het model 3D printen.</p>
        <div class="dotted-line"></div>
      </li>
      <li class="tut3_step">
        <div class="tut3_step-img_container">
          <img class="tut3_step-img" src="./assets/img/thread.png" width="200px" height="" alt="">
          <p class="tut3_step-number tut3_step-number_2">2</p>
        </div>
        <p class="body-text text-center">Voor de wieltjes zijn er 2 opties. Je neemt wieljtes uit je oud skateboard of je laat het model 3D printen.</p>
        <div class="dotted-line"></div>
      </li>
      <li class="tut3_step">
        <div class="tut3_step-img_container">
          <img class="tut3_step-img" src="./assets/img/plastic.png" width="200px" height="" alt="">
          <p class="tut3_step-number tut3_step-number_3">3</p>
        </div>
        <p class="body-text text-center">Voor de wieltjes zijn er 2 opties. Je neemt wieljtes uit je oud skateboard of je laat het model 3D printen.</p>
      </li>
    </ul>
  </article>
  <!-- 3 - end -->

  <!-- step 5 - start -->
  <div class="tut5-wobble_top full-width"></div>
    <article class="tut5 grid">
      <div class="container full-width">
        <h3 class="h3 text-center">It's coming togheter.</h3>
          <p class="body-text text-center">
            Haal al het verf maar uit je kast, want je Crocs verdienen <span class="body-text-bold">een nieuw kleurtje</span>. Selecteer een kleur voor elk onderdeel van de crocs om zo al een beeld te krijgen.
          </p>
      </div>
      <img class="tut5-" src="./assets/img/smiley.png" alt="">
      <!-- <section class="lottie-env env-three full-width">
        <div id="lottie-three"><div>
      </section> -->
    </article>
    <div class="tut5-wobble_bottom full-width"></div>
  <!-- step 5 - end -->
</section>


<!-- lottie test -->

<div class="header">
  <h1 class="white">Animating with Lottie, ScrollMagic, and GSAP.</h1>
  <h3 class="white">A quick testing playground.</h3>
  <p class="white">This playground contains several methods to manipulate lottie animations.</p>
  <a target="_blank" href="https://www.lottiefiles.com/29-motorcycle">Bike Animation</a>
  <a target="_blank" href="https://www.lottiefiles.com/432-done-button">Check Animation</a>
  <a target="_blank" href="https://www.lottiefiles.com/82-rey-updated">Rey Animation</a>
</div>


<!-- <section class="lottie-env env-three">
  <div id="lottie-three"><div>
</section> -->



<section class="lottie-env">
  <div id="lottie"></div>
  <div class="button-container">
    <button id="dark-btn" class="dark-mode">Toggle Dark Mode</button>
    <button id="light-btn" class="dark-mode">Toggle Light Mode</button>
    <button id="pause-btn">Pause</button>
    <button id="play-btn">Play</button>
  </div>
</section>

<section class="lottie-env env-two">
  <div class="display-buttons">
    <div id="lottie-two"></div>
    <div id="lottie-four"></div>
    <div id="lottie-five"></div>
    <div id="lottie-six"></div>
     <div id="lottie-seven"></div>

  </div>
</section>

<section class="lottie-env">
</section>


<section class="lottie-env env-last">
  <div id="lottie-coin"><div>
</section>

<!-- lottie - end -->



<script type="text/javascript">
{
  const init = () => {
    const confirmationLinks = Array.from(document.getElementsByClassName(`confirmation`));
    confirmationLinks.forEach($confirmationLink => {
      $confirmationLink.addEventListener(`click`, e => {
        if (!confirm('Are you sure?')) e.preventDefault();
      });
    });
  };
  init();
}
</script>
