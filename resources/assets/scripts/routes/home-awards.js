const { observe } = require("appear-event");

export default {
  init() {
    let elIndividual = $(".js-awards-individual").get(0);
    let elTools = $(".js-awards-tools").get(0);

    let $buttonIndividual = $(".js-awards-button-individual");
    let $buttonTools = $(".js-awards-button-tools");

    $buttonIndividual.on("click", function() {
      $("html,body").animate(
        {
          scrollTop: $("#individual-awards").offset().top - 100,
        },
        "slow"
      );
    });

    $(".js-awards-button-dropdown").on("click", function() {
      $(".js-awards-button-dropdown-target")
        .toggleClass("hidden")
        .toggleClass("lg:block");
    });

    $buttonTools.on("click", function() {
      $("html,body").animate(
        {
          scrollTop: $("#tools-awards").offset().top - 100,
        },
        "slow"
      );
    });

    observe(elIndividual);
    elIndividual.addEventListener("appear", () => {
      $buttonIndividual.addClass("active");
      $buttonTools.removeClass("active");
    });
    elIndividual.addEventListener("disappear", () => {
      $buttonIndividual.removeClass("active");
    });

    observe(elTools);
    elTools.addEventListener("appear", () => {
      $buttonTools.addClass("active");
      $buttonIndividual.removeClass("active");
    });
    elTools.addEventListener("disappear", () => {
      $buttonTools.removeClass("active");
    });
  },
};
