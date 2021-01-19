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

<!-- lottie test -->

<div class="header">
  <h1 class="white">Animating with Lottie, ScrollMagic, and GSAP.</h1>
  <h3 class="white">A quick testing playground.</h3>
  <p class="white">This playground contains several methods to manipulate lottie animations.</p>
  <a target="_blank" href="https://www.lottiefiles.com/29-motorcycle">Bike Animation</a>
  <a target="_blank" href="https://www.lottiefiles.com/432-done-button">Check Animation</a>
  <a target="_blank" href="https://www.lottiefiles.com/82-rey-updated">Rey Animation</a>
</div>


<section class="lottie-env env-three">
  <div id="lottie-three"><div>
</section>



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
