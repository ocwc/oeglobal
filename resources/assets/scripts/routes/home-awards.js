const { observe } = require("appear-event");

export default {
  init() {
    let elIndividual = $(".js-awards-individual").get(0);
    let elAssets = $(".js-awards-assets").get(0);
    let elPractices = $(".js-awards-practices").get(0);

    let $buttonIndividual = $(".js-awards-button-individual");
    let $buttonAssets = $(".js-awards-button-assets");
    let $buttonPractices = $(".js-awards-button-practices");

    $buttonIndividual.on("click", function() {
      $("html,body").animate(
        {
          scrollTop: $("#individual-awards").offset().top - 100,
        },
        "slow"
      );
    });

    $buttonAssets.on("click", function() {
      $("html,body").animate(
        {
          scrollTop: $("#assets-awards").offset().top - 100,
        },
        "slow"
      );
    });

    $buttonPractices.on("click", function() {
      $("html,body").animate(
        {
          scrollTop: $("#practices-awards").offset().top - 100,
        },
        "slow"
      );
    });

    $(".js-awards-button-dropdown").on("click", function() {
      $(".js-awards-button-dropdown-target")
        .toggleClass("hidden")
        .toggleClass("lg:block");
    });

    observe(elIndividual);
    elIndividual.addEventListener("appear", () => {
      $buttonIndividual.addClass("active");
      $buttonPractices.removeClass("active");
      $buttonAssets.removeClass("active");
    });
    elIndividual.addEventListener("disappear", () => {
      $buttonIndividual.removeClass("active");
    });

    observe(elAssets);
    elAssets.addEventListener("appear", () => {
      $buttonAssets.addClass("active");
      $buttonPractices.removeClass("active");
      $buttonIndividual.removeClass("active");
    });
    elAssets.addEventListener("disappear", () => {
      $buttonAssets.removeClass("active");
    });

    observe(elPractices);
    elPractices.addEventListener("appear", () => {
      $buttonPractices.addClass("active");
      $buttonAssets.removeClass("active");
      $buttonIndividual.removeClass("active");
    });
    elPractices.addEventListener("disappear", () => {
      $buttonPractices.removeClass("active");
    });
  },
};
