document.onreadystatechange = () => {
  if (document.readyState === "complete") {
    let faqCards = document.getElementsByClassName("faq-card");

    /** 
     * Activate expandable panel of FAQ cards
     */
    for (let faqCard of faqCards) {
      faqCard.addEventListener("click", function () {
        this.classList.toggle("faq-opened");
        let panelOpened = this.classList.contains("faq-opened");
        
        /**
         * Get indications of opened or closed panel
         */
        let faqAnswer = this.querySelector(".faq-answer");
        this.style.gap = panelOpened ? '15px' : '0px'
        faqAnswer.style.maxHeight = panelOpened ? faqAnswer.scrollHeight + "px" : "0px";
      });
    }
  }
};
