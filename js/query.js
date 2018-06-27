'use strict';

$(document).ready(function () {
  getOverlay();
  getActiveSection();
  getToggleAccordion();
  getOpenCloseMenu();
  getCloseModalVideoContainer();
  getModalEspecialidades();
  getActiveSlider();
  getBarraTooltip();
  getRedireccionamientoTooltip();
  getStickyHeader();
  getHightlitedSection();
  getScrollToTopButton();
});

/* NOTE: key/value to set an overlay and call it
  [id_button_open_overlay] = [id_overlay]
*/
var OVERLAY_KEY = {
  'patient_responsabilities_button': 'patient_responsabilities',
  'especialidad_y_profesionales_button': 'especialidad_y_profesionales',
  'institutional_video_button': 'institutional_video'
};

function getStickyHeader() {
  var fakeHeader = $('.fake-header');
  var header = $('.global-header-container');
  var body = $(window);

  var fakeHeaderHeight = function fakeHeaderHeight() {
    fakeHeader.css({
      height: header.innerHeight()
    });
  };

  fakeHeaderHeight();
  body.resize(fakeHeaderHeight);

  body.scroll(function () {
    if (body.scrollTop() > header.innerHeight()) {
      header.addClass('sticky-header');
    } else {
      header.removeClass('sticky-header');
    }
  });
}

function getActiveSection() {
  var url = window.location.pathname;
  var menu = $('.global-menu-content');
  var urlLenght = url.split('/').length;

  menu.each(function () {
    var item = $(this);
    $(this).removeClass('active');

    if (item.attr('id') === url.substr(1)) {
      item.addClass('active');
    }
  });

  if (url.split('/')[urlLenght - 1] !== '') {
    menu.find('#' + url.split('/')[urlLenght - 1]).parent().addClass('active');
  }
}

function getOpenCloseMenu() {
  var menu = $('.global-menu-container');
  $('#hamburguer-open-menu').click(function () {
    menu.addClass('active-global-menu');
    menu.find('.global-menu-content-component').animate({
      right: '0em'
    });
  });

  $('#hamburguer-close-menu').click(function () {
    menu.removeClass('active-global-menu');
    menu.find('.global-menu-content-component').animate({
      right: '-100%'
    }).removeClass('active-global-menu');
  });
}

function getToggleAccordion() {
  var accordion = $(".accordion-container");
  var body = $(window);

  getAccordionToElement(accordion);
  accordion.click(function () {
    var _this = this;

    if (body.width() < 769) {
      $(this).toggleClass("accordion-container-active");
    }

    body.resize(function () {
      if (body.width() < 769) {
        $(_this).toggleClass("accordion-container-active");
      }
    });
  });
}

function getOverlay() {
  var body = $("body");
  $('.open-overlay').click(function () {
    var button = $(this);
    var foundedOverlayButton = Object.keys(OVERLAY_KEY).find(function (b) {
      if (b === button.attr('id')) {
        return b;
      }
    });

    var overlay = "#" + OVERLAY_KEY[foundedOverlayButton];
    var activeClass = "general-overlay-active";

    $(overlay).addClass(activeClass);
    body.addClass('no-scrolling');

    $('.general-close-overlay-button').click(function () {
      $(overlay).removeClass(activeClass);
      body.removeClass('no-scrolling');
    });

    $('.general-overlay-container').click(function (e) {
      if ($(e.target).hasClass('general-overlay-container')) {
        $(this).removeClass(activeClass);
        body.removeClass('no-scrolling');
      }
    });
  });
}

function getCloseModalVideoContainer() {
  var videoModal = $('.institutional-video-container');
  videoModal.find('.general-close-overlay-button').click(function () {
    var v = document.getElementsByTagName("video")[1];
    v.pause();
    v.load();
  });
}

function getAccordionToElement(accordion) {
  var accordionContainerClass = 'accordion-container';
  var accordionContentClass = 'accordion-title-container';
  var accordionContent = accordion.find('.' + accordionContentClass);
  var body = $(window);

  if (body.width() > 769) {
    accordion.removeClass(accordionContainerClass).addClass('element-container');
    accordionContent.removeClass(accordionContentClass).addClass('title-container');
  } else {
    accordion.addClass(accordionContainerClass).removeClass('element-container');
    accordionContent.addClass(accordionContentClass).removeClass('title-container');
  }

  body.resize(function () {
    if (body.width() > 769) {
      accordion.removeClass(accordionContainerClass).addClass('element-container');
      accordionContent.removeClass(accordionContentClass).addClass('title-container');
    } else {
      accordion.addClass(accordionContainerClass).removeClass('element-container');
      accordionContent.addClass(accordionContentClass).removeClass('title-container');
    };
  });
}

function getModalEspecialidades() {
  var button = $('.especialidades-open-overlay');
  var activeClass = "general-overlay-active";
  var body = $("body");

  button.click(function () {
    var component = $(this).parent().find(".general-overlay-container");
    component.addClass(activeClass);
    body.addClass('no-scrolling');

    component.click(function (e) {
      if ($(e.target).hasClass('general-overlay-container')) {
        component.removeClass(activeClass);
        body.removeClass('no-scrolling');
      }
    });

    component.find(".general-close-overlay-button").click(function () {
      component.removeClass(activeClass);
      body.removeClass('no-scrolling');
    });
  });
}

function getActiveSlider() {
  var sliders = $('.instalaciones-content');
  var buttons = $('.item-content');
  var sliderActiveClass = 'slider-active';
  var buttonActiveClass = 'item-active';
  var body = $(window);

  var getContainerHeigth = function getContainerHeigth() {
    sliders.find('.menu-instalaciones').css({
      'min-height': sliders.find('.' + sliderActiveClass).height() + 'px'
    });
  };

  var getContainerWidth = function getContainerWidth() {
    var contentImage = $('.' + sliderActiveClass).find('.content-imagen');
    var quantityImage = contentImage.children().length * 100;
    contentImage.css({
      width: quantityImage + '%'
    }).children().css({
      width: 100 / contentImage.children().length + '%'
    });
  };

  getContainerHeigth();
  getContainerWidth();

  body.resize(function () {
    getContainerHeigth();
    getContainerWidth();
  });

  buttons.click(function () {
    var clicked = $(this);
    var currentSlider = sliders.find($('#slider-' + $(this).parent().attr('id')));
    buttons.each(function () {
      if (!clicked.parent().hasClass(buttonActiveClass)) {
        $(this).parent().removeClass(buttonActiveClass);
      }
    });

    sliders.find('.container-slider').each(function () {
      if (!currentSlider.hasClass(sliderActiveClass)) {
        $(this).removeClass(sliderActiveClass);
      }
    });

    clicked.parent().toggleClass(buttonActiveClass);
    currentSlider.toggleClass(sliderActiveClass);

    getContainerWidth();
    getContainerHeigth();
    getCarrousel();
  });
  getCarrousel();
}

function getCarrousel() {
  var currentSlider = $('.slider-active');
  var nextButton = currentSlider.find('.button-next');
  var prevButton = currentSlider.find('.button-prev');

  var imageContainer = currentSlider.find('.content-imagen');
  var imageList = imageContainer.children();
  var imageWidth = 100 / imageList.length;
  var thumbs = currentSlider.find('.container-image-secondary').children();
  var imageContainerPosition = 0;

  var activeThumb = function activeThumb() {
    thumbs.each(function (index) {
      if (imageContainerPosition / 100 === index) {
        thumbs.each(function () {
          $(this).removeClass('active');
        });
        $(this).addClass('active');
      }
    });
  };

  var disabledButton = function disabledButton() {
    if (imageContainerPosition <= 0) {
      prevButton.addClass('disabled');
      nextButton.removeClass('disabled');
    } else if (imageContainerPosition >= (imageList.length - 1) * 100) {
      nextButton.addClass('disabled');
      prevButton.removeClass('disabled');
    } else {
      nextButton.removeClass('disabled');
      prevButton.removeClass('disabled');
    }
  };

  nextButton.click(function () {
    if (imageContainerPosition < (imageList.length - 1) * 100) {
      imageContainerPosition += imageList.length * imageWidth;

      imageContainer.animate({
        right: imageContainerPosition + '%'
      });

      activeThumb();
    }

    disabledButton();
  });

  prevButton.click(function () {
    if (0 < imageContainerPosition) {
      imageContainerPosition -= imageList.length * imageWidth;

      imageContainer.animate({
        right: imageContainerPosition + '%'
      });

      activeThumb();
    }

    disabledButton();
  });

  activeThumb();
  thumbs.each(function (index) {
    var clicked = $(this);

    clicked.click(function () {
      thumbs.each(function () {
        $(this).removeClass('active');
      });

      $(this).addClass('active');
      imageContainerPosition = 100 * index;
      imageContainer.animate({
        right: 100 * index + '%'
      });

      disabledButton();
    });
  });
}

function getBarraTooltip() {
  var tooltipBox = $(".tooltip-box");
  var body = $(window);

  var scrollTooltip = function scrollTooltip() {
    if (body.scrollTop() > 200) {
      tooltipBox.fadeOut("slow");
    } else if (body.scrollTop() < 200) {
      tooltipBox.fadeIn("slow");
    }
  };

  body.scroll(function () {
    if (body.width() >= 769) {
      scrollTooltip();
    } else {
      tooltipBox.css({
        display: "none"
      });
    }

    //Para hacer responsive el Tooltip.
    body.resize(function () {
      if (body.width() >= 769) {
        scrollTooltip();
      } else {
        tooltipBox.css({
          display: "none"
        });
      }
    });
  });
}

function getRedireccionamientoTooltip() {
  var tooltipBox = $('.tooltip-box');
  tooltipBox.find('.tooltip').click(function () {
    window.location = window.location.origin + '/' + $(this).attr('href');
    getHightlitedSection();
  });
}

function getHightlitedSection() {
  var headerHeight = $('.fake-header').innerHeight();
  $(this).resize(function () {
    headerHeight = $('.fake-header').innerHeight();
  });

  var element = window.location.hash;
  if (element !== '') {
    var scrollTo = void 0;
    setTimeout(function () {
      scrollTo = $(element).offset().top - (headerHeight * 2 - 20); // to fix some margin
      $('html, body').animate({ scrollTop: scrollTo }, 'slow');
      return false;
      // $("html").scrollTop(scrollTo);
    }, 10);

    $(element).addClass('scroll-from-tooltip');
    setTimeout(function () {
      $(element).removeClass('scroll-from-tooltip');
    }, 2000);
  }
}

function getScrollToTopButton() {
  var button = $('.scroll-to-top');
  var body = $(window);

  body.scroll(function () {
    if (body.scrollTop() > body.height()) {
      button.fadeIn("slow");
    } else {
      button.fadeOut("slow");
    }
  });

  button.click(function () {
    $('html, body').animate({ scrollTop: 0 }, 'slow');
    return false;
  });
}
//# sourceMappingURL=query.js.map
