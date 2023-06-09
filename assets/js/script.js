/**
 * @Script js for (Template/Project Name)
 *
 * @project     - Project Name
 * @author      -
 * @created_by  -
 * @created_at  -
 * @modified_by -
 */

/**
 * ========================================================
 * this function execute when DOM element ready
 * ===========================================================
 */

(function ($) {
  $(window).on("load", function () {
    // set striped background
    $(function () {
      if ($(".is-striped").length) {
        let container = $(".is-striped > .container").outerWidth();
        let stripedWizard = $(".is-striped .striped-wizard").outerWidth();
        let stripedWidth =
          ($(window).outerWidth() - container) / 2 +
          (container - stripedWizard);
        $(".is-striped").css("--striped-width", `${stripedWidth}px`);
      }
    });
  });

  // bitCoinCarouselInitial
  if ($(".banner-carousel").length) {
    $(".banner-carousel").owlCarousel({
      items: 1,
      loop: true,
      margin: 0,
      animateOut: "fadeOut",
      nav: $(window).width() > 1300 ? true : false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      navText: [
        "<span class='ni ni-chevron-left'></span>",
        "<span class='ni ni-chevron-right'></span>",
      ],
    });
  }

  // featured-news-widget-slider
  if ($(".featured-news-widget-slider").length) {
    $(".featured-news-widget-slider").owlCarousel({
      items: 1,
      loop: true,
      margin: 0,
      animateOut: "fadeOut",
      dots: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
    });
  }

  // for select#select-country
  $(function () {
    if ($("#select-country").length) {
      function custom_template(obj) {
        var data = $(obj.element).data();
        var text = $(obj.element).text();
        if (data && data["img_src"]) {
          img_src = data["img_src"];
          template = $(
            "<span class='img-option'><img src=\"" +
              img_src +
              '" style="width:20px;height:12px;" /> ' +
              text +
              "</span>"
          );
          return template;
        }
      }
      $("#select-country").select2({
        minimumResultsForSearch: -1,
        templateSelection: custom_template,
        templateResult: custom_template,
      });
    }
  });
})(jQuery);
