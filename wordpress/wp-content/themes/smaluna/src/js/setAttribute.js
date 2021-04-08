const aElements = document.querySelectorAll("a");

function init() {
  aElements.forEach((element) => {
    if (element.hasAttribute("target") === false) {
      return;
    }
    if (element.getAttribute("target") !== "_blank") {
      return;
    }
    element.setAttribute("rel","noopener");
  });
}
export default { init }