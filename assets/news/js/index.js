const links = document.querySelectorAll("a");

// links.forEach((link) => {
//   link.addEventListener("click", (e) => {
//     e.preventDefault();

//     links.forEach((link) => {
//       if (link.classList.value === "active") {
//         link.className = "";
//       }
//     });

//     link.classList.add("active");
//   });
// });

const bars = document.querySelector(".icon-bars"),
  menu = document.querySelector("ul"),
  header = document.querySelector("header");

bars.addEventListener("click", () => {
  bars.classList.toggle("active");
  menu.classList.toggle("active");

  if (header.classList.value !== "active") {
    setTimeout(() => {
      document.querySelector("style").innerHTML = `
    ::-webkit-scrollbar {
      display: none;
    }
    body {
      overflow: hidden;
    }`;
      header.classList.add("active");
    }, 500);
  } else {
    setTimeout(() => {
      document.querySelector("style").innerHTML = ``;
      header.classList.remove("active");
    }, 200);
  }
});

// const scrollUp = document.querySelector(".scroll-up");

// scrollUp.addEventListener("click", () => {
//   window.scroll(0, 0);
// });

window.addEventListener("scroll", (e) => {
  if (window.scrollY >= 120) {
    scrollUp.classList.add("visible");
  } else {
    scrollUp.classList.remove("visible");
  }
});
