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
      <span class="error error--text"><?php if (!empty($errors['text'])) echo $errors['text']; ?></span>
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
  <!-- <img class="maker-bol" src="./assets/img/maker-bol.svg" alt=""> -->
  <div class="table">

  </div>
</header>

<section class="tools container">
  <!-- <p class="first_of_all text-center">First of all.</p> -->
  <h2 class="h2 text-center tools-title">Materialen & Gereedschap</h2>
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

  <div class="tut-number tut-number3 shadow"> 03</div>

  <!-- 3 - start -->
  <article class="tut3 container">
    <h3 class="h3">Put the wheels in the heels</h3>
    <p class="body-text">Voor de wieltjes zijn er 2 opties. Je neemt wieljtes uit je oud skateboard of je laat het model 3D printen.</p>
    <ul class="tut3_steps">
      <li class="tut3_step">
        <div class="tut3_step-img_container">
          <img class="tut3_step-img skateboard" src="./assets/img/skateboard.png" width="200px" height="" alt="">
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

  <!-- step 4 - start -->
  <div class="tut4">
    <div class="container">
      <div class="tut4-heading">
        <div class="tut-number tut-number4 shadow">
          04
        </div>
        <div class="tut4-header">
          <h3 class="h3 tut-title">Go ahead Picasso. <br>The canvas is yours.</h3>
          <p class="tut-intro">Haal al het verf maar uit je kast, want je Crocs verdienen een nieuw kleurtje. Selecteer een kleur voor elk onderdeel van de crocs om zo te zien welke kleuren combo’s jij leuk vindt!</p>
        </div>
      </div>

      <div class="color-picker">
        <div class="cp-content">
          <div class="cp-functionality">
            <!-- div for title & chose number -->
            <div class="cp-title-numbers">
              <p class="cp-title text-center">Kies een kleur voor de basis.</p>
              <!-- choose step -->
              <div class="cp-numbers">
                <button class="cp-number active cp-number-01">01</button>
                <button class="cp-number cp-number-02">02</button>
                <button class="cp-number cp-number-03">03</button>
              </div>
            </div>

            <!-- colors basis -->
            <div class="cp-colors-01">
              <div class="cp-colors">
                <div class="cp-color">
                  <input type="radio" name="colors-01" id="yellow-01" class="colors-radio">
                  <label for="yellow-01" class="colors-label" style="background-color: #F4D76E;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>geel</p>
                </div>
                <div class="cp-color">
                  <input type="radio" name="colors-01" id="red-01" class="colors-radio">
                  <label for="red-01" class="colors-label" style="background-color: #C6372F;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>rood</p>
                </div>
                <div class="cp-color">
                  <input type="radio" name="colors-01" id="purple-01" class="colors-radio" checked>
                  <label for="purple-01" class="colors-label" style="background-color: #9C23E7;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>paars</p>
                </div>
                <div class="cp-color">
                  <input type="radio" name="colors-01" id="green-01" class="colors-radio">
                  <label for="green-01" class="colors-label" style="background-color: #17B978;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>groen</p>
                </div>
                <div class="cp-color">
                  <input type="radio" name="colors-01" id="orange-01" class="colors-radio">
                  <label for="orange-01" class="colors-label" style="background-color: #E57838;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>oranje</p>
                </div>
                <div class="cp-color">
                  <input type="radio" name="colors-01" id="blue-01" class="colors-radio">
                  <label for="blue-01" class="colors-label" style="background-color: #3D5AF1;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>blauw</p>
                </div>
              </div>
              <div class="btn cp-btn-01">Volgende</div>
            </div>

            <!-- colors around foot -->
            <div class="cp-colors-02 hidden">
              <div class="cp-colors">
                <div class="cp-color">
                  <input type="radio" name="colors-02" id="yellow-02" class="colors-radio" checked>
                  <label for="yellow-02" class="colors-label" style="background-color: #F4D76E;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>geel</p>
                </div>
                <div class="cp-color">
                  <input type="radio" name="colors-02" id="red-02" class="colors-radio">
                  <label for="red-02" class="colors-label" style="background-color: #C6372F;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>rood</p>
                </div>
                <div class="cp-color">
                  <input type="radio" name="colors-02" id="purple-02" class="colors-radio">
                  <label for="purple-02" class="colors-label" style="background-color: #9C23E7;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>rood</p>
                </div>
                <div class="cp-color">
                  <input type="radio" name="colors-02" id="green-02" class="colors-radio">
                  <label for="green-02" class="colors-label" style="background-color: #17B978;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>rood</p>
                </div>
                <div class="cp-color">
                  <input type="radio" name="colors-02" id="orange-02" class="colors-radio">
                  <label for="orange-02" class="colors-label" style="background-color: #E57838;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>rood</p>
                </div>
                <div class="cp-color">
                  <input type="radio" name="colors-02" id="blue-02" class="colors-radio">
                  <label for="blue-02" class="colors-label" style="background-color: #3D5AF1;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>rood</p>
                </div>
              </div>
              <div class="btn cp-btn-02">Volgende</div>
            </div>

            <!-- colors for band -->
            <div class="cp-colors-03 hidden">
              <div class="cp-colors">
                <div class="cp-color">
                  <input type="radio" name="colors-03" id="yellow-03" class="colors-radio">
                  <label for="yellow-03" class="colors-label" style="background-color: #F4D76E;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>geel</p>
                </div>
                <div class="cp-color">
                  <input type="radio" name="colors-03" id="red-03" class="colors-radio" checked>
                  <label for="red-03" class="colors-label" style="background-color: #C6372F;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>rood</p>
                </div>
                <div class="cp-color">
                  <input type="radio" name="colors-03" id="purple-03" class="colors-radio">
                  <label for="purple-03" class="colors-label" style="background-color: #9C23E7;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>rood</p>
                </div>
                <div class="cp-color">
                  <input type="radio" name="colors-03" id="green-03" class="colors-radio">
                  <label for="green-03" class="colors-label" style="background-color: #17B978;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>rood</p>
                </div>
                <div class="cp-color">
                  <input type="radio" name="colors-03" id="orange-03" class="colors-radio">
                  <label for="orange-03" class="colors-label" style="background-color: #E57838;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>rood</p>
                </div>
                <div class="cp-color">
                  <input type="radio" name="colors-03" id="blue-03" class="colors-radio">
                  <label for="blue-03" class="colors-label" style="background-color: #3D5AF1;">
                    <div class="color-radio-state">
                      <div class="crs-active"></div>
                    </div>
                  </label>
                  <p>rood</p>
                </div>
              </div>
              <div class="btn cp-btn-03">Maak nog één!</div>
            </div>
          </div>

          <!-- croc svg -->
          <div class="cp-canvas">
            <img class="cp-croc-bg" src="./assets/img/color-picker-bg.svg" alt="">
            <svg class="cp-croc" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 220.65 97.67">
              <defs>
                <clipPath id="clip-path" transform="translate(11.35 8.73)">
                  <path class="cls-1" d="M68.6,16.54C60.36,23.6,50.84,30.29,43.86,32.43,33.88,35.5,6.25,24.76,2,41.65S6.63,70,28.5,77.34s154.28-3.07,154.28-3.07c8.18-.6,11.51-14,10.63-23.7l-55.33,3.31L73,15.81a4.38,4.38,0,0,0-4.38.73Z" />
                </clipPath>

              </defs>

              <g id="Layer_2" data-name="Layer 2">
                <g id="header">
                  <path class="c-croc-throat" d="M68.6,16.54C60.36,23.6,50.84,30.29,43.86,32.43,33.88,35.5,6.25,24.76,2,41.65S6.63,70,28.5,77.34s154.28-3.07,154.28-3.07c8.18-.6,11.51-14,10.63-23.7l-55.33,3.31L73,15.81a4.38,4.38,0,0,0-4.38.73Z" transform="translate(11.35 8.73)" />
                  <g class="cls-3">
                    <circle class="c-croc-holes c-croc-part" cx="69.97" cy="66.17" r="7.64" />
                    <circle class="c-croc-holes c-croc-part" cx="90.23" cy="51" r="4.39" />
                    <circle class="c-croc-holes c-croc-part" cx="77.64" cy="39.45" r="4.39" />
                    <circle class="c-croc-holes c-croc-part" cx="44.68" cy="64.32" r="7.64" />
                    <circle class="c-croc-holes c-croc-part" cx="23.05" cy="57.16" r="7.64" />
                    <path class="c-croc-uppersole  c-croc-part" d="M-9.38,34.28S11.79,55.94,39.11,55.94s148.65,0,158.75-6.89-3,30.89-3,30.89L-1,81-8.64,52Z" transform="translate(11.35 8.73)" />
                    <path class="c-croc-sole c-croc-part" d="M-7.41,49.05S15.48,71.94,49.45,71.94,198.1,68.49,198.1,68.49l-5.91,14.77L29.26,87.94,5.39,73.41Z" transform="translate(11.35 8.73)" />
                    <circle class="c-croc-holes c-croc-part" cx="58.42" cy="53.8" r="2.79" />
                    <circle class="c-croc-holes c-croc-part" cx="52.12" cy="43.79" r="2.79" />
                    <circle class="c-croc-holes c-croc-part" cx="42.35" cy="48.84" r="2.79" />
                    <circle class="c-croc-holes c-croc-part" cx="31.24" cy="43.22" r="2.79" />
                  </g>
                  <path class="c-croc c-croc-part" d="M68.6,16.54C60.36,23.6,50.84,30.29,43.86,32.43,33.88,35.5,6.25,24.76,2,41.65S6.63,70,28.5,77.34s154.28-3.07,154.28-3.07c8.18-.6,11.51-14,10.63-23.7l-55.33,3.31L73,15.81a4.38,4.38,0,0,0-4.38.73Z" transform="translate(11.35 8.73)" />
                  <path class="c-croc-strap c-croc-part" d="M147.67-4h3.24a3.59,3.59,0,0,1,3.59,3.59V45.22a0,0,0,0,1,0,0H144.08a0,0,0,0,1,0,0V-.42A3.59,3.59,0,0,1,147.67-4Z" transform="translate(69.64 -90.8) rotate(45)" />
                  <path class="c-croc-part c-croc-gore" d="M78.51,7.11c5.75-6.53,51,34.06,65.62,36.41s30.7,3.11,41.45-2.26c0,0,3.88-2.51,6.22,3.28s1.34,6,1.34,6S148.52,57.27,135,53,70.3,14.88,70.3,14.88Z" transform="translate(11.35 8.73)" />
                  <circle cx="143.37" cy="46.94" r="8.67" />
                  <circle class="c-croc-pin" cx="143.37" cy="46.94" r="6.63" />
                </g>
              </g>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- step 5 - start -->
  <div class="tut5-wobble_top full-width"></div>
  <article class="tut5 grid">
    <div class="container full-width">
      <h3 class="h3 text-center">It's coming togheter.</h3>
      <p class="text-center">
        Haal al het verf maar uit je kast, want je Crocs verdienen <span class="body-text-bold">een nieuw kleurtje</span>. Selecteer een kleur voor elk onderdeel van de crocs om zo al een beeld te krijgen.
      </p>
    </div>
    <!-- <img class="tut5-" src="./assets/img/smiley.png" alt=""> -->
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
  <div id="lottie-coin">
    <div>
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
