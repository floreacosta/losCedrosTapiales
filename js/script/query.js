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
  getStickyHeader();
  getHightlitedSection();
  getScrollToTopButton();
});

/* NOTE: key/value to set an overlay and call it
  [id_button_open_overlay] = [id_overlay]
*/
const OVERLAY_KEY = {
  'patient_responsabilities_button': 'patient_responsabilities',
  'especialidad_y_profesionales_button': 'especialidad_y_profesionales',
  'institutional_video_button': 'institutional_video'
};

function getStickyHeader () {
  let fakeHeader = $('.fake-header');
  let header = $('.global-header-container');
  let body = $(window);

  let fakeHeaderHeight = function () {
    fakeHeader.css({
      height: header.innerHeight()
    });
  };

  fakeHeaderHeight();
  body.resize(fakeHeaderHeight);

  body.scroll(() => {
    if (body.scrollTop() > header.innerHeight()) {
      header.addClass('sticky-header');
    } else {
      header.removeClass('sticky-header');
    }
  });
}

function getActiveSection () {
  let url = window.location.pathname;
  let menu = $('.global-menu-content');
  let urlLenght = url.split('/').length;

  menu.each(function () {
    let item = $(this);
    $(this).removeClass('active');

    if (item.attr('id') === url.substr(1)) {
      item.addClass('active');
    }
  });

  if (url.split('/')[urlLenght - 1] !== '') {
    menu.find('#' + url.split('/')[urlLenght - 1]).parent().addClass('active');
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
  let body = $(window);

  getAccordionToElement(accordion);
  accordion.click(function () {
    if (body.width() < 769) {
      $(this).toggleClass("accordion-container-active");
    }

    body.resize(() => {
      if (body.width() < 769) {
        $(this).toggleClass("accordion-container-active");
      }
    });
  });
}

function getOverlay () {
  let body = $("body");
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
  let body = $(window);

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

function getModalEspecialidades () {
  let button = $('.especialidades-open-overlay');
  let activeClass = "general-overlay-active";
  let body = $("body");

  button.click(function () {
    let component = $(this).parent().find(".general-overlay-container");
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

function getActiveSlider () {
  let sliders = $('.instalaciones-content');
  let buttons = $('.item-content');
  let sliderActiveClass = 'slider-active';
  let buttonActiveClass = 'item-active';
  let body = $(window);

  let getContainerHeigth = function () {
    sliders.find('.menu-instalaciones').css({
      'min-height': sliders.find('.' + sliderActiveClass).height() + 'px'
    });
  };

  let getContainerWidth = function () {
    let contentImage = $('.' + sliderActiveClass).find('.content-imagen');
    let quantityImage = contentImage.children().length * 100;
    contentImage.css({
      width: quantityImage + '%'
    }).children().css({
      width: (100 / contentImage.children().length) + '%'
    });
  };

  getContainerHeigth();
  getContainerWidth();

  body.resize(() => {
    getContainerHeigth();
    getContainerWidth();
  });

  buttons.click(function () {
    let clicked = $(this);
    let currentSlider = sliders.find($('#slider-' + $(this).parent().attr('id')));
    buttons.each(function () {
      if (!(clicked.parent().hasClass(buttonActiveClass))) {
        $(this).parent().removeClass(buttonActiveClass);
      }
    });

    sliders.find('.container-slider').each(function () {
      if (!(currentSlider.hasClass(sliderActiveClass))) {
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

function getCarrousel () {
  let currentSlider = $('.slider-active');
  let nextButton = currentSlider.find('.button-next');
  let prevButton = currentSlider.find('.button-prev');

  let imageContainer = currentSlider.find('.content-imagen');
  let imageList = imageContainer.children();
  let imageWidth = 100 / imageList.length;
  let thumbs = currentSlider.find('.container-image-secondary').children();
  let imageContainerPosition = 0;

  let activeThumb = function () {
    thumbs.each(function (index) {
      if ((imageContainerPosition / 100) === index) {
        thumbs.each(function () {
          $(this).removeClass('active');
        });
        $(this).addClass('active');
      }
    });
  };

  let disabledButton = function () {
    if (imageContainerPosition <= 0) {
      prevButton.addClass('disabled');
      nextButton.removeClass('disabled');
    } else if (imageContainerPosition >= ((imageList.length - 1) * 100)) {
      nextButton.addClass('disabled');
      prevButton.removeClass('disabled');
    } else {
      nextButton.removeClass('disabled');
      prevButton.removeClass('disabled');
    }
  };

  nextButton.click(function () {
    if (imageContainerPosition < ((imageList.length - 1) * 100)) {
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
    let clicked = $(this);

    clicked.click(function () {
      thumbs.each(function () {
        $(this).removeClass('active');
      });

      $(this).addClass('active');
      imageContainerPosition = 100 * index;
      imageContainer.animate({
        right: (100 * index) + '%'
      });

      disabledButton();
    });
  });
}

function getBarraTooltip () {
  let tooltipBox = $(".tooltip-box");
  let body = $(window);

  let scrollTooltip = function () {
    if (body.scrollTop() > 200) {
      tooltipBox.fadeOut("slow");
    } else if (body.scrollTop() < 200) {
      tooltipBox.fadeIn("slow");
    }
  };

  body.scroll(() => {
    if (body.width() >= 769) {
      scrollTooltip();
    } else {
      tooltipBox.css({
        display: "none"
      });
    }

    //Para hacer responsive el Tooltip.
    body.resize(() => {
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

function getRedireccionamientoTooltip () {
  let tooltipBox = $('.tooltip-box');
  tooltipBox.find('.tooltip').click(function () {
    window.location = window.location.origin + '/' + $(this).attr('href');
    getHightlitedSection();
  });
}

function getHightlitedSection () {
  let headerHeight = $('.fake-header').innerHeight();
  $(this).resize(() => {
    headerHeight = $('.fake-header').innerHeight();
  });

  let element = window.location.hash;
  if (element !== '') {
    let scrollTo;
    setTimeout(function () {
      scrollTo = $(element).offset().top - ((headerHeight * 2) - 20); // to fix some margin
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

function getScrollToTopButton () {
  let button = $('.scroll-to-top');
  let body = $(window);

  body.scroll(() => {
    if (body.scrollTop() > body.height()) {
      button.fadeIn("slow");
    } else {
      button.fadeOut("slow");
    }
  });

  button.click(() => {
    $('html, body').animate({ scrollTop: 0 }, 'slow');
    return false;
  });
}
