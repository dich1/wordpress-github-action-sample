const defaultNum = 3;
const elements = document.querySelectorAll(".js-seeMore .m-card_article");
const btn = document.querySelector(".js-seeMore .a-btn");

function init() {
  const itemsArray = Array.from(elements);
  const hideItem = itemsArray.slice(3);
  if(btn == null) {
    return;
  }

  //もし初期で人気記事が3件以下の場合
  else if (elements.length < 3) {
    btn.classList.add("is-hidden");
  }
  hideItem.forEach((element) => {
    element.classList.add("is-hidden");
  });
  btn.addEventListener("click",(e) => {
    const hiddenItems = document.querySelectorAll('.js-seeMore .m-card_article.is-hidden');
    if(hiddenItems.length > 0) {
      hiddenItems[0].classList.remove('is-hidden');
      hiddenItems[0].classList.add('is-active');
    }
    if(hiddenItems.length > 1) {
      hiddenItems[1].classList.remove('is-hidden');
      hiddenItems[1].classList.add('is-active');
    }
    if(hiddenItems.length > 2) {
      hiddenItems[2].classList.remove('is-hidden');
      hiddenItems[2].classList.add('is-active');
    }
    if(hiddenItems.length > 3) return;
    e.currentTarget.classList.add('is-hidden');
    return false;
  });
}
export default { init }
