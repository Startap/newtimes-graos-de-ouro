document.onreadystatechange = () => {
  if (document.readyState === "complete") {
    setupFaqAnimations();
    setupScrollToTop();
  }
};

function setupFaqAnimations() {
  let faqCards = document.getElementsByClassName("faq-card");

  /**
   * Activate expandable panel of FAQ cards
   */
  for (let faqCard of faqCards) {
    faqCard.addEventListener("click", function () {
      this.classList.toggle("faq-opened");
      let panelOpened = this.classList.contains("faq-opened");
      let faqAnswer = this.querySelector(".faq-answer");

      /**
       * Get indications of opened or closed panel
       */
      this.style.gap = panelOpened ? '15px' : '0px';
      faqAnswer.style.maxHeight = panelOpened ? faqAnswer.scrollHeight + "px" : "0px";
    });
  }
}

function setupScrollToTop() {
  document
    .querySelector("#scroll-to-top-button")
    .addEventListener('click', () => {
      let scrollPosition = document.querySelector("#video-container").offsetTop;
      window.scrollTo({ top: scrollPosition - 100, behavior: 'smooth' })
    })
}
