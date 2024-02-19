(() => {
  function bodyUpdateDarkMode(darkMode) {
    if (darkMode) {
      document.body.classList.add("body--dark");
    } else {
      document.body.classList.remove("body--dark");
    }
  }

  const mediaQueryList = window.matchMedia("(prefers-color-scheme: dark)");
  document.addEventListener("DOMContentLoaded", () => {
    bodyUpdateDarkMode(mediaQueryList.matches);
  }, {once: true})
  mediaQueryList.addEventListener("change", (e) => {
    bodyUpdateDarkMode(mediaQueryList.matches);
  });

})();
