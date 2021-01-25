/* eslint-disable arrow-parens */
/* eslint-disable quotes */
export default function () {
  const strapButtons = document.querySelectorAll(".colors-radio");

  const colorThroat = () => {
    const throat = document.querySelector(".c-croc-throat");
    const upperSole = document.querySelector(".c-croc-uppersole");
    const sole = document.querySelector(".c-croc-sole");
    const holes = document.querySelectorAll(".c-croc-holes");

    const throatYellow = document.querySelector("#yellow-01");
    const throatRed = document.querySelector("#red-01");
    const throatPurple = document.querySelector("#purple-01");
    const throatGreen = document.querySelector("#green-01");
    const throatOrange = document.querySelector("#orange-01");
    const throatBlue = document.querySelector("#blue-01");

    if (throatYellow.checked) {
      sole.style.fill = "#FEF2C7";
      upperSole.style.fill = "#FDE68A";
      throat.style.fill = "#FCD44C";
      holes.forEach((hole) => {
        hole.style.fill = "#FBBF24";
      });
    } else if (throatRed.checked) {
      sole.style.fill = "#FEE2E2";
      upperSole.style.fill = "#FECACA";
      throat.style.fill = "#FCA5A5";
      holes.forEach((hole) => {
        hole.style.fill = "#F87171";
      });
    } else if (throatPurple.checked) {
      sole.style.fill = "#EDE9FE";
      upperSole.style.fill = "#DDD6FE";
      throat.style.fill = "#C4B5FD";
      holes.forEach((hole) => {
        hole.style.fill = "#A78BFA";
      });
    } else if (throatGreen.checked) {
      sole.style.fill = "#D1FAE5";
      upperSole.style.fill = "#A7F3D0";
      throat.style.fill = "#6EE7B7";
      holes.forEach((hole) => {
        hole.style.fill = "#34D399";
      });
    } else if (throatOrange.checked) {
      sole.style.fill = "#FCD34D";
      upperSole.style.fill = "#FBBF24";
      throat.style.fill = "#F59E0B";
      holes.forEach((hole) => {
        hole.style.fill = "#D97706";
      });
    } else if (throatBlue.checked) {
      sole.style.fill = "#DBEAFE";
      upperSole.style.fill = "#BFDBFE";
      throat.style.fill = "#93C5FD";
      holes.forEach((hole) => {
        hole.style.fill = "#60A5FA";
      });
    } else {
      sole.style.fill = "transparent";
      upperSole.style.fill = "transparent";
      throat.style.fill = "transparent";
      holes.forEach((hole) => {
        hole.style.fill = "transparent";
      });
    }
  };

  const colorGore = () => {
    const gore = document.querySelector(".c-croc-gore");

    const goreYellow = document.querySelector("#yellow-02");
    const goreRed = document.querySelector("#red-02");
    const gorePurple = document.querySelector("#purple-02");
    const goreGreen = document.querySelector("#green-02");
    const goreOrange = document.querySelector("#orange-02");
    const goreBlue = document.querySelector("#blue-02");

    if (goreYellow.checked) {
      gore.style.fill = "#FCD44C";
    } else if (goreRed.checked) {
      gore.style.fill = "#FCA5A5";
    } else if (gorePurple.checked) {
      gore.style.fill = "#C4B5FD";
    } else if (goreGreen.checked) {
      gore.style.fill = "#6EE7B7";
    } else if (goreOrange.checked) {
      gore.style.fill = "#F59E0B";
    } else if (goreBlue.checked) {
      gore.style.fill = "#93C5FD";
    } else {
      gore.style.fill = "transparent";
    }
  };

  const colorStrap = () => {
    const strap = document.querySelector(".c-croc-strap");

    const strapYellow = document.querySelector("#yellow-03");
    const strapRed = document.querySelector("#red-03");
    const strapPurple = document.querySelector("#purple-03");
    const strapGreen = document.querySelector("#green-03");
    const strapOrange = document.querySelector("#orange-03");
    const strapBlue = document.querySelector("#blue-03");

    if (strapYellow.checked) {
      strap.style.fill = "#FCD44C";
    } else if (strapRed.checked) {
      strap.style.fill = "#FCA5A5";
    } else if (strapPurple.checked) {
      strap.style.fill = "#C4B5FD";
    } else if (strapGreen.checked) {
      strap.style.fill = "#6EE7B7";
    } else if (strapOrange.checked) {
      strap.style.fill = "#F59E0B";
    } else if (strapBlue.checked) {
      strap.style.fill = "#93C5FD";
    } else {
      strap.style.fill = "transparent";
    }
  };

  colorThroat();
  colorGore();
  colorStrap();

  strapButtons.forEach((strapButton) => {
    strapButton.addEventListener("click", colorThroat);
    strapButton.addEventListener("click", colorGore);
    strapButton.addEventListener("click", colorStrap);
  });

  // display matching buttons for part of croc

  const throatButton = document.querySelector(".cp-number-01");
  const goreButton = document.querySelector(".cp-number-02");
  const strapButton = document.querySelector(".cp-number-03");

  const throatSection = document.querySelector(".cp-colors-01");
  const goreSection = document.querySelector(".cp-colors-02");
  const strapSection = document.querySelector(".cp-colors-03");

  const cpTitle = document.querySelector(".cp-title");

  throatButton.addEventListener("click", function () {
    throatButton.classList.add("active");
    goreButton.classList.remove("active");
    strapButton.classList.remove("active");

    throatSection.classList.remove("hidden");
    goreSection.classList.add("hidden");
    strapSection.classList.add("hidden");

    if (throatButton.classList.contains("active")) {
      cpTitle.textContent = "Kies een kleur voor de basis.";
    }
  });

  goreButton.addEventListener("click", function () {
    throatButton.classList.remove("active");
    goreButton.classList.add("active");
    strapButton.classList.remove("active");

    throatSection.classList.add("hidden");
    goreSection.classList.remove("hidden");
    strapSection.classList.add("hidden");

    if (goreButton.classList.contains("active")) {
      cpTitle.textContent = "Kies een kleur voor rond je voet.";
    }
  });

  strapButton.addEventListener("click", function () {
    throatButton.classList.remove("active");
    goreButton.classList.remove("active");
    strapButton.classList.add("active");

    throatSection.classList.add("hidden");
    goreSection.classList.add("hidden");
    strapSection.classList.remove("hidden");

    if (strapButton.classList.contains("active")) {
      cpTitle.textContent = "Als laatste, kleur je het bandje!";
    }
  });

  const nextButton01 = document.querySelector(".cp-btn-01");
  const nextButton02 = document.querySelector(".cp-btn-02");
  const resetButton03 = document.querySelector(".cp-btn-03");

  nextButton01.addEventListener("click", function () {
    throatButton.classList.remove("active");
    goreButton.classList.add("active");
    strapButton.classList.remove("active");

    throatSection.classList.add("hidden");
    goreSection.classList.remove("hidden");
    strapSection.classList.add("hidden");

    cpTitle.textContent = "Kies een kleur voor rond je voet.";
  });

  nextButton02.addEventListener("click", function () {
    throatButton.classList.remove("active");
    goreButton.classList.remove("active");
    strapButton.classList.add("active");

    throatSection.classList.add("hidden");
    goreSection.classList.add("hidden");
    strapSection.classList.remove("hidden");

    cpTitle.textContent = "Als laatste, kleur je het bandje!";
  });

  resetButton03.addEventListener("click", function () {
    throatButton.classList.add("active");
    goreButton.classList.remove("active");
    strapButton.classList.remove("active");

    throatSection.classList.remove("hidden");
    goreSection.classList.add("hidden");
    strapSection.classList.add("hidden");

    cpTitle.textContent = "Kies een kleur voor de basis.";
  });
}
