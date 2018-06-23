$(document).ready(() => {
  getOverlay();
  getActiveSection();
  getToggleAccordion();
  getOpenCloseMenu();
  getCloseModalVideoContainer();
  getModalEspecialidades();
  getActiveSlider();
  getBarraTooltip();
  getRedireccionamientoTooltip();
});

/* NOTE: key/value to set an overlay and call it
  [id_button_open_overlay] = [id_overlay]
*/
const OVERLAY_KEY = {
  'patient_responsabilities_button': 'patient_responsabilities',
  'especialidad_y_profesionales_button': 'especialidad_y_profesionales',
  'institutional_video_button': 'institutional_video'
};

function getActiveSection () {
  let url = window.location.pathname;
  let menu = $('.global-menu-content');

  menu.each(function () {
    let item = $(this);
    $(this).removeClass('active');

    if (item.attr('id') === url.substr(1)) {
      item.addClass('active');
    }
  });

  if (url.substr(1) !== '') {
    menu.find('#' + url.substr(1)).parent().addClass('active');
  }
}

function getOpenCloseMenu () {
  let menu = $('.global-menu-container');
  $('#hamburguer-open-menu').click(() => {
    menu.addClass('active-global-menu');
    menu.find('.global-menu-content-component').animate({
      right: '0em'
    });
  });

  $('#hamburguer-close-menu').click(() => {
    menu.removeClass('active-global-menu');
    menu.find('.global-menu-content-component').animate({
      right: '-100%'
    }).removeClass('active-global-menu');
  });
}

function getToggleAccordion () {
  let accordion = $(".accordion-container");

  getAccordionToElement(accordion);
  accordion.click(function () {
    if ($(window).width() < 769) {
      $(this).toggleClass("accordion-container-active");
    }

    $(this).resize(() => {
      if ($(window).width() < 769) {
        $(this).toggleClass("accordion-container-active");
      }
    });
  });
}

function getOverlay () {
  $('.open-overlay').click(function () {
    let button = $(this);
    let foundedOverlayButton = Object.keys(OVERLAY_KEY).find(function (b) {
      if (b === button.attr('id')) {
        return b;
      }
    });

    let overlay = "#" + (OVERLAY_KEY[foundedOverlayButton]);
    let activeClass = "general-overlay-active";

    $(overlay).addClass(activeClass);
    $("body").addClass('no-scrolling');

    $('.general-close-overlay-button').click(function () {
      $(overlay).removeClass(activeClass);
      $("body").removeClass('no-scrolling');
    });

    $('.general-overlay-container').click(function (e) {
      if ($(e.target).hasClass('general-overlay-container')) {
        $(this).removeClass(activeClass);
        $("body").removeClass('no-scrolling');
      }
    });
  });
}

function getCloseModalVideoContainer () {
  let videoModal = $('.institutional-video-container');
  videoModal.find('.general-close-overlay-button').click(() => {
    let v = document.getElementsByTagName("video")[1];
    v.pause();
    v.load();
  });
}

function getAccordionToElement (accordion) {
  let accordionContainerClass = 'accordion-container';
  let accordionContentClass = 'accordion-title-container';
  let accordionContent = accordion.find('.' + accordionContentClass);

  if ($(window).width() > 769) {
    accordion.removeClass(accordionContainerClass).addClass('element-container');
    accordionContent.removeClass(accordionContentClass).addClass('title-container');
  } else {
    accordion.addClass(accordionContainerClass).removeClass('element-container');
    accordionContent.addClass(accordionContentClass).removeClass('title-container');
  }

  $(window).resize(function () {
    if ($(window).width() > 769) {
      accordion.removeClass(accordionContainerClass).addClass('element-container');
      accordionContent.removeClass(accordionContentClass).addClass('title-container');
    } else {
      accordion.addClass(accordionContainerClass).removeClass('element-container');
      accordionContent.addClass(accordionContentClass).removeClass('title-container');
    };
  });
}

function getModalEspecialidades () {
  let button = $('.especialidades-open-overlay');
  let activeClass = "general-overlay-active";

  button.click(function () {
    let component = $(this).parent().find(".general-overlay-container");
    component.addClass(activeClass);
    $("body").addClass('no-scrolling');

    component.click(function (e) {
      if ($(e.target).hasClass('general-overlay-container')) {
        component.removeClass(activeClass);
        $("body").removeClass('no-scrolling');
      }
    });

    component.find(".general-close-overlay-button").click(function () {
      component.removeClass(activeClass);
      $("body").removeClass('no-scrolling');
    });
  });
}

function getActiveSlider () {
  let sliders = $('.instalaciones-content');
  let buttons = $('.item-content');
  let sliderActiveClass = 'slider-active';
  let buttonActiveClass = 'item-active';

  let getHeightContainer = function () {
    sliders.find('.menu-instalaciones').css({
      'min-height': sliders.find('.' + sliderActiveClass).height() + 'px'
    });
  };

  getHeightContainer();

  $(this).resize(() => {
    getHeightContainer();
  });

  let getContainerWidth = function () {
    let contentImage = $('.' + sliderActiveClass).find('.content-imagen');
    let quantityImage = contentImage.children().length * 100;
    contentImage.css({
      width: quantityImage + '%'
    }).children().css({
      width: (100 / contentImage.children().length) + '%'
    });
  };

  getContainerWidth();

  $(this).resize(() => {
    getContainerWidth();
  });

  buttons.click(function () {
    let currentSlider = sliders.find($('#slider-' + $(this).parent().attr('id')));
    buttons.each(function () {
      $(this).parent().removeClass(buttonActiveClass);
    });

    sliders.find('.container-slider').each(function () {
      $(this).removeClass(sliderActiveClass);
    });

    $(this).parent().addClass(buttonActiveClass);
    currentSlider.addClass(sliderActiveClass);
    getContainerWidth();
    getCarrousel();
    getHeightContainer();
  });
  getCarrousel();
}

function getCarrousel () {
  let currentSlider = $('.slider-active');
  let nextButton = currentSlider.find('.button-next');
  let prevButton = currentSlider.find('.button-prev');

  let imageContainer = currentSlider.find('.content-imagen');
  let imageList = imageContainer.children();
  let imageWidth = 100 / imageList.length;
  let imageContainerPosition = 0;

  getActiveImageOnCarrousel(currentSlider, imageContainer, 0);
  nextButton.click(function () {
    if (imageContainerPosition < ((imageList.length - 1) * 100)) {
      imageContainerPosition += imageList.length * imageWidth;

      imageContainer.animate({
        right: imageContainerPosition + '%'
      });

      getActiveImageOnCarrousel(currentSlider, imageContainer, (imageContainerPosition / 100));
    }

    prevButton.removeClass('disabled');
    if (imageContainerPosition === ((imageList.length - 1) * 100)) {
      $(this).addClass('disabled');
    }
  });

  prevButton.click(function () {
    if (0 < imageContainerPosition) {
      imageContainerPosition -= imageList.length * imageWidth;

      imageContainer.animate({
        right: imageContainerPosition + '%'
      });

      getActiveImageOnCarrousel(currentSlider, imageContainer, (imageContainerPosition / 100));
    }

    nextButton.removeClass('disabled');
    if (0 === imageContainerPosition) {
      $(this).addClass('disabled');
    }
  });
}

function getActiveImageOnCarrousel (sliderActive, generalImageContainer, imageIndex) {
  let images = sliderActive.find('.container-image-secondary').children();

  images.each(function (index) {
    let clicked = $(this);

    if (imageIndex === index) {
      images.each(function () {
        $(this).removeClass('active');
      });
      $(this).addClass('active');
    }

    clicked.click(function () {
      images.each(function () {
        $(this).removeClass('active');
      });

      $(this).addClass('active');
      generalImageContainer.animate({
        right: (100 * index) + '%'
      });
    });
  });
}

function getBarraTooltip () {
    let scrollTooltip = function () {
      if ($(this).scrollTop() > 200) {
        $(".tooltip-box").fadeOut("slow");
      } else if ($(this).scrollTop() < 200) {
        $(".tooltip-box").fadeIn("slow");
      }
    };

  $(window).scroll(() => {
    if ($(window).width() >= 769) {
      scrollTooltip();
    } else {
      $(".tooltip-box").css("display", "none");
    }

    //Para hacer responsive el Tooltip.
    $(window).resize(() => {
      if ($(window).width() >= 769) {
        scrollTooltip();
      } else {
        $(".tooltip-box").css("display", "none");
      }
    });
  });
}

function getRedireccionamientoTooltip () {
  let tooltip = $('.tooltip-box');
  tooltip.find('.tooltip').click(function () {
    window.location = window.location.origin + '/' + $(this).attr('href');
  });
}
