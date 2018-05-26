"use strict";

$(document).ready(function () {
  getActiveSection();
  getOpenCloseMenu();
  getFixedMenu();
  getOpenVideo();
  getCloseVideo();
  getCloseModalVideoContainer();
  getHeightMap();
  getModalEspecialidades();
  getSlider();
  getBarraTooltip();
  getRedireccionamientoTooltip();
});

function getActiveSection() {
  var URLactual = window.location.pathname;
  switch (URLactual) {
    case '/losCedrosTapiales/institucional':
      $("#instalaciones").addClass("active");
      $("#servicios").remove("active");
      $("#coberturas").remove("active");
      $("#especialidades").remove("active");
      break;
    case '/losCedrosTapiales/servicios':
      $("#instalaciones").remove("active");
      $("#servicios").addClass("active");
      $("#coberturas").remove("active");
      $("#especialidades").remove("active");
      break;
    case '/losCedrosTapiales/coberturamedica':
      $("#instalaciones").remove("active");
      $("#servicios").remove("active");
      $("#coberturas").addClass("active");
      $("#especialidades").remove("active");
      break;
    case '/losCedrosTapiales/especialidades':
      $("#instalaciones").remove("active");
      $("#servicios").remove("active");
      $("#coberturas").remove("active");
      $("#especialidades").addClass("active");
    default:
      $("#instalaciones").remove("active");
      $("#servicios").remove("active");
      $("#coberturas").remove("active");
      $("#especialidades").remove("active");
      break;
  }
}

function getOpenCloseMenu() {
  var contador = 1;
  $('.toggle').click(function () {
    if (contador == 1) {
      $('#element').animate({ right: '0em' });
      $('.menu-element').css("height", "333px");
      contador = 0;
    } else {
      contador = 1;
      $('#element').animate({ right: '-100%' });
      $('.menu-element').css("height", "auto");
    }
  });
}

function getFixedMenu() {
  $(window).resize(function () {
    var ventana = $(window).width();
    var right = $('#element').css('right');
    var pat = 'px';

    right = right.replace(pat, '');
    right = parseInt(right);

    if (ventana > 1024 && right < -1024) {
      $('#element').css('right', '2em');
    }
  });
}

function getOpenVideo() {
  $('#button-video-open').click(function () {
    $("#video-container").addClass("video-open");
  });
}

function getCloseVideo() {
  $('#button-video-close').click(function () {
    $("#video-container").removeClass("video-open");

    var v = document.getElementsByTagName("video")[1];
    v.pause();
    v.load();
  });
}

function getCloseModalVideoContainer() {
  $('#video-container').click(function () {
    $("#video-container").removeClass("video-open");

    var v = document.getElementsByTagName("video")[1];
    v.pause();
    v.load();
  });
}

function getHeightMap() {
  var h = $("#informationBox").outerHeight() + "px";
  $("#google-map-container").css("height", h);
  $(window).resize(function () {
    var h = $("#informationBox").outerHeight() + "px";
    $("#google-map-container").css("height", h);
  });
}

function getModalEspecialidades() {
  $("#element-list").click(function (e) {
    elemento = e.target.id;
    elemento = "#modal" + elemento;
    $(elemento).addClass("show");
  });

  $('#button-close-information').click(function () {
    $(elemento).removeClass("show");
  });

  $(".modal").click(function () {
    $(elemento).removeClass("show");
  });
}

function getSlider() {
  // Función slider
  var sliderFunction = function sliderFunction(slider) {
    /**
    /* Funcionalidad del listado de imágenes debajo del slider (accesos directos a cada imagen)
    **/

    //Declaro un array donde guardo el listado de imagenes para poder recorrerlo
    var listadoImagenes = [];
    $(slider + " .container-image-secondary a").each(function (index) {
      listadoImagenes.push(this);
    });

    //Contador de páginas o imagenes a las que se le dará NEXT
    var page = 1;

    //Capturo el ID de la imagen cliqueada para que se muestre
    //directamente en el slider sin cliquear los botones NEXT y PREV
    $(slider + " .container-image-secondary").click(function (e) {
      //Le quito el funcionamiento por defecto al link
      e.preventDefault();

      //Capturo el ID
      var a = e.target.id;

      //Recorro el array de imágenes
      for (var i = 0; i < listadoImagenes.length; i++) {
        //Si "a" (que contiene el ID de la imagen cliqueada) es IGUAL al id de la imagen del ARRAY
        if (a == listadoImagenes[i].id) {
          //Capturo la posición del contenedor
          //Ancho de la imagen * la posición del ARRAY * -1
          //(para hacerlo negativo, por ser necesario para los estilos)
          var posicion = $(slider + " .content-imagen li img").width() * i * -1;
          //Le doy el valor de "posicion" al estilo LEFT
          $(slider + " .content-imagen").css("left", posicion);
          //Le indico al contador general en qué página o imagen estoy ubicada
          //para darle la información a los botones NEXT y PREV
          page = i + 1;
        }
      }
    });

    //Se busca la cantidad de imagenes que tiene cada sección.
    var cantImagenes = $(slider + " .content-imagen li").size();
    //Se calcula el ancho en % de las imágenes según cuantas son:
    //Ejemplo: si son 3 imágenes, deberían tener un ancho de 33.33%. Si son 4 imágenes, deberían tener un ancho de 25%.
    var anchoLi = 100 / cantImagenes + "%";

    //Se le da el ancho calculado a cada LI (contenedor de cada imagen).
    $(slider + " .content-image-primary").css("width", anchoLi);

    //Se calcula el ancho total del contenedor que englobal a TODAS las imágenes en %.
    var anchoContenedor = cantImagenes * 100 + "%";
    //Se le asigna el valor calculado al contenedor GLOBAL
    $(slider + " .content-imagen").css("width", anchoContenedor);

    //Se inicializa la letiable del espacio a mover del contenedor GLOBAL de las imagenes en 0.
    var espacioAmover = 0;

    //Función del BOTÓN NEXT
    $(slider + " #button-next").click(function () {
      //Se calcula el ancho de imagen para el momento en que se toco NEXT
      var anchoImagen = $(slider + " .content-imagen li img").width() * -1;

      //Se calcula el tiempo que tomará la animación según la cantidad de imágenes de ese slider.
      if (cantImagenes > 5) {
        var _tiempoDesliz = cantImagenes * 100;
      } else {
        var _tiempoDesliz2 = cantImagenes * 300;
      }

      //Lógica de BOTÓN NEXT
      //Si la posición de la imagen actual es == a la cantidad total de imágenes
      if (page == cantImagenes) {
        //Vuelve a la primer imagen del slider (page = 1)
        page = 1;
        //Se reinicia la letiable espacioAmover por si es la segunda pasada de slider.
        espacioAmover = 0;
        //Se posiciona en 0px al contenedor GLOBAL que se mueve según la imagen que toca mostrar.
        $(slider + " .content-imagen").animate({ left: "0px" }, tiempoDesliz);
      } else {
        //Se carga la letiable "espacioAmover" con el ancho de la imagen * la posición de la imagen que se muestra
        espacioAmover = anchoImagen * page;

        //Se aumenta Page para la próxima pasada
        page++;
        //Se asigna el espacioAmover al ANIMATE
        $(slider + " .content-imagen").animate({ left: espacioAmover + "px" }, tiempoDesliz);
      }

      //Código para hacer responsive el slider en jquery
      $(window).resize(function () {
        var anchoImagen = $(slider + " .content-imagen li img").width() * -1;
        var espacioAmover = 0;
        espacioAmover = anchoImagen * (page - 1);
        $(slider + " .content-imagen").css("left", espacioAmover + "px");
      });
    });

    //Función BUTTON PREV
    $(slider + " #button-prev").click(function () {
      //Se calcula el ancho de imagen para el momento en que se toco NEXT
      var anchoImagen = $(slider + " .content-imagen li img").width() * -1;

      //Se calcula el tiempo que tomará la animación según la cantidad de imágenes de ese slider.
      if (cantImagenes > 5) {
        var _tiempoDesliz3 = cantImagenes * 100;
      } else {
        var _tiempoDesliz4 = cantImagenes * 300;
      }

      //Lógica de BUTTON PREV
      //Si la posición de la imagen a mostrar es menor o igual a la primer imagen
      //Es decir, si estás en la primer imagen y vas hacia atrás
      if (page <= 1) {
        //Page se iguala a la cantidad total de imagenes, para posicionarse en la última
        page = cantImagenes;
        //Se calcula el espacio que se tiene que mover para mostrar a la última imagen
        espacioAmover = anchoImagen * (cantImagenes - 1);
        //Se le da el espacio a mover al ANIMATE
        $(slider + " .content-imagen").animate({ left: espacioAmover + "px" }, tiempoDesliz);
      } else {
        //Si no se descuenta una posicion a Page
        page--;
        //Se pregunta si el espacio a mover es == al ancho de imagen * posición de la imagen
        if (espacioAmover == anchoImagen * page) {
          //El espacio a mover se iguala al anchoImagen * (la página que se quiere mostrar - 1) para ir una posición atrás.
          //Es decir, si estamos en -200px de posición, hay que ir a -100px.
          //Entonces espacioAmover = a 100px (ancho de imagen) * (2 (page) - 1); Porque la imagen 2 está en la posición -100px.
          espacioAmover = anchoImagen * (page - 1);
        } else {
          espacioAmover = anchoImagen * page;
        }
        //Se asigna el espacioAmover al ANIMATE
        $(slider + " .content-imagen").animate({ left: espacioAmover + "px" }, tiempoDesliz);
      }

      //Para hacer responsive al SLIDER.
      $(window).resize(function () {
        var anchoImagen = $(slider + " .content-imagen li img").width();
        var espacioAmover = 0;
        espacioAmover = anchoImagen * (page - 1);
        $(slider + " .content-imagen").css("left", espacioAmover + "px");
      });
    });
  }; //funcion slider ();

  //Primer slider, por defecto abierto
  sliderFunction("#slider-1");

  //Ubico el item del listado (menu de sliders) en el que hago click
  $(".menu-instalaciones2 li span").click(function (e) {
    var li = e.target.parentNode;
    //Recorro todo el menú y le remuevo la clase ".item-active" a todos
    $(".menu-instalaciones2 li").each(function () {
      $(".menu-instalaciones2 li").removeClass("item-active");
    });
    //Le agrego la clase ".item-active" al que se cliqueó
    $(li).addClass("item-active");

    //Preparo la letiable con el ID del slider que corresponde al item cliqueado
    slider = "#slider-" + li.id;
    //Remuevo de todos los slider la clase ".slider-active"
    $(".container-all-slider > div").each(function () {
      $(".container-all-slider > div").removeClass("slider-active");
    });

    //Le agrego la clase ".slider-active" al slider correspondiente al item cliqueado
    $(slider).addClass("slider-active");

    //Hago funcionar el slider con el ID correspondiente al slider en cuestión
    sliderFunction(slider);
  });
}

function getBarraTooltip() {
  var scrollTooltip = function scrollTooltip() {
    if ($(this).scrollTop() > 200) {
      $(".tooltip-box").fadeOut("slow");
    } else if ($(this).scrollTop() < 200) {
      $(".tooltip-box").fadeIn("slow");
    }
  };

  $(window).scroll(function () {
    if ($(window).width() >= 600) {
      scrollTooltip();
    } else {
      $(".tooltip-box").css("display", "none");
    }

    //Para hacer responsive el Tooltip.
    $(window).resize(function () {
      if ($(window).width() >= 600) {
        scrollTooltip();
      } else {
        $(".tooltip-box").css("display", "none");
      }
    });
  });
}

function getRedireccionamientoTooltip() {
  var redirectTooltip = function redirectTooltip(pathLocation, pathPosition, positionMinus) {
    $(pathLocation).click(function (e) {
      e.preventDefault();
      var urlPath = window.location.origin;
      if (urlPath != "http://www.loscedrostapiales.com") {
        $(window).attr({
          'location': "http://www.loscedrostapiales.com/"
        });
      }

      var posicion = $(pathPosition).position().top - positionMinus;
      $("body, html").animate({ scrollTop: posicion + "px" }, 800);
    });
  },
      turnosTooltip = function turnosTooltip() {
    redirectTooltip("#turn-tooltip", ".article-online-turn", 200);
  },
      ubicacionTooltip = function ubicacionTooltip() {
    redirectTooltip("#address-tooltip", ".article-information-for-user", 200);
  },
      contactoTooltip = function contactoTooltip() {
    redirectTooltip("#contact-tooltip", ".article-information-for-user", 200);
  },
      horariosTooltip = function horariosTooltip() {
    redirectTooltip("#schedule-tooltip", ".article-visit-schedule", 100);
  };

  /* Redirección */
  turnosTooltip();
  ubicacionTooltip();
  contactoTooltip();
  horariosTooltip();
}
//# sourceMappingURL=query.js.map
//# sourceMappingURL=query.js.map
