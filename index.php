<?php
<<<<<<< HEAD
	include_once('include/head.php');
?>

<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl1eZ_cCxoh4jm8J6oLzEZOUyTsQSS-7Y&callback=initMap">
</script>

<script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
		var myLatLng = { lat: -34.6994319, lng: -58.5061351 };

		var map = new google.maps.Map(document.getElementById('map'), {
			center: myLatLng,
			scrollwheel: true,
			zoom: 17,
			zoomControl: true
		});

		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title: 'Clínica Los Cedros de Tapiales S.A.'
		});
      }
</script>

<body>

	<?php
		include_once('include/header.php');
		include_once('include/tooltip.php');
	?>

	<main class="home">
		<section class="section-primary" id="section-primary">
			<div class="background-shadow"></div>
			<video loop muted autoplay id="video-background">
				<source src="video/losCedros.webm" type='video/webm; codecs="vp8, vorbis"' />
				<source src="video/losCedros.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
				<source src="video/losCedros.ogv" type='video/ogg; codecs="theora, vorbis"' />
			</video>
			<article class="title-information">
				<h1>
					<strong>Clínica Los Cedros</strong>
					<br/>
					de Tapiales S.A.
				</h1>
				<p><i>Clínica Los Cedros</i> constituye una institución sólida desde el año 1983 en la que se destaca por la excelencia que otorga en sus prestaciones médicas y que sigue manteniendo la filosofía de brindar atención al mejor nivel.
				</p>
				<p>La confianza lograda nos permitió ir creciendo junto con las familias de nuestros pacientes.</p>

				<button id="button-video-open" title="Video a pantalla completa">Video</button>
			</article>
			<div id="video-container" class="video-container">
				<button id="button-video-close" onClick="closeVideo()" title="Cerrar video"></button>
				<video controls>
					<source src="video/losCedros.webm" type='video/webm; codecs="vp8, vorbis"' />
					<source src="video/losCedros.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
					<source src="video/losCedros.ogv" type='video/ogg; codecs="theora, vorbis"' />
				</video>
			</div>
		</section>

		<article class="article-sections-item">

			<figure>
				<img src="img/thumbs-instalaciones.jpg" alt="Instalaciones y Equipamiento"/>
				<figcaption>
					<h3>Instalaciones y Equipamiento</h3>
					<p>Brindamos infraestructura e instalaciones para que profesionales atiendan sus pacientes en un ambiente confortable y adecuado.</p>
					<a href="institucional.php" title="Ver más">+</a>
				</figcaption>
			</figure>

			<figure>
				<img src="img/thumbs-laboratorio.jpg" alt="Especialidades"/>
				<figcaption>
					<h3>Especialidades</h3>
					<p>Contamos con un abanico de especialidades detalladas según sus días, horarios y profesionales médicos.</p>
					<a href="especialidades.php" title="Ver más">+</a>
				</figcaption>
			</figure>

			<figure>
				<img src="img/thumbs-cobertura-medica.jpg" alt="Coberturas Médicas"/>
				<figcaption>
					<h3>Coberturas Médicas</h3>
					<p>Nuestra administración establece el nexo con las Coberturas Médicas y Obras Sociales a fin de brindar para sus afiliados el acceso a una atención médica calificada según sus necesidades.</p>
					<a href="coberturas-medicas.php" title="Ver más">+</a>
				</figcaption>
			</figure>

			<figure>
				<img src="img/thumbs-medicina-preventiva.jpg" alt="Medicina Preventiva"/>
				<figcaption>
					<h3>Servicios Prestados</h3>
					<p>Contamos con el asesoramiento preventivo por parte de profesionales capacitados para dar la mejor atención a sus pacientes.</p>
					<a href="servicios.php" title="Ver más">+</a>
				</figcaption>
			</figure>
		</article>

		<a name="online-turn"></a>
		<article id="turn" class="article-online-turn">
			<div>
				<h1>Solicitud de turnos Online</h1>
				<span>| Click <a href="#">aquí</a> para continuar</span>
			</div>
		</article>

		<section class="section-secondary" id="section-secondary">
			<div class="background-shadow"></div>
			<img id="imagen-background" src="img/recepcion.jpg" alt="Recepción"/>
		</section>

		<article class="article-information-for-user" id="contact">
			<div class="telephone-line" id="informationBox">
				<a name="address"></a>
				<span>
					<h3>Ubicación</h3>
					<p>Domingo Millan 20, Villa Madero - Cp.: 1688</p>
				</span>
				<span>
					<h3>Horarios</h3>
					<p>
						<span>Para turnos:</span>
						Lunes a Viernes de 8 a 20hs.
					</p>
					<p>
						<span>Urgencias médicas:</span>
						7 días a la semana, las 24hs.
					</p>
				</span>
				<span>
					<a name="contact"></a>
					<h3>Líneas rotativas</h3>
					<p>
						(011) 4622-8188 / (011) 4622-8199
						<br/>
						(011) 4622-8203 / (011) 4622-8209
					</p>
				</span>
			</div>
			<span>Click <a href="https://goo.gl/maps/yPByzy2b1YR2">aquí</a> para ver en Google Maps.</span>
			<div class="location-google-map location" id="map"></div>
		</article>

		<a name="schedule"></a>
		<article class="article-visit-schedule" id="visit">
			<h1>Horarios de visita</h1>
			<h2>Internación General y Obstetricia: <span>10 a 20 h.</span></h2>
			<h2>Terapia Intensiva y Unidad Coronaria: <span>12 a 13 h. y de 19 a 20 h.</span></h2>
		</article>
	</main>
<?php
	include_once('include/footer.php');
?>
=======
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 */
	define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');

/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */
switch (ENVIRONMENT)
{
	case 'development':
		error_reporting(-1);
		ini_set('display_errors', 1);
	break;

	case 'testing':
	case 'production':
		ini_set('display_errors', 0);
		if (version_compare(PHP_VERSION, '5.3', '>='))
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
		}
		else
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
		}
	break;

	default:
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'The application environment is not set correctly.';
		exit(1); // EXIT_ERROR
}

/*
 *---------------------------------------------------------------
 * SYSTEM DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * This variable must contain the name of your "system" directory.
 * Set the path if it is not in the same directory as this file.
 */
	$system_path = 'system';

/*
 *---------------------------------------------------------------
 * APPLICATION DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want this front controller to use a different "application"
 * directory than the default one you can set its name here. The directory
 * can also be renamed or relocated anywhere on your server. If you do,
 * use an absolute (full) server path.
 * For more info please see the user guide:
 *
 * https://codeigniter.com/user_guide/general/managing_apps.html
 *
 * NO TRAILING SLASH!
 */
	$application_folder = 'application';

/*
 *---------------------------------------------------------------
 * VIEW DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want to move the view directory out of the application
 * directory, set the path to it here. The directory can be renamed
 * and relocated anywhere on your server. If blank, it will default
 * to the standard location inside your application directory.
 * If you do move this, use an absolute (full) server path.
 *
 * NO TRAILING SLASH!
 */
	$view_folder = '';


/*
 * --------------------------------------------------------------------
 * DEFAULT CONTROLLER
 * --------------------------------------------------------------------
 *
 * Normally you will set your default controller in the routes.php file.
 * You can, however, force a custom routing by hard-coding a
 * specific controller class/function here. For most applications, you
 * WILL NOT set your routing here, but it's an option for those
 * special instances where you might want to override the standard
 * routing in a specific front controller that shares a common CI installation.
 *
 * IMPORTANT: If you set the routing here, NO OTHER controller will be
 * callable. In essence, this preference limits your application to ONE
 * specific controller. Leave the function name blank if you need
 * to call functions dynamically via the URI.
 *
 * Un-comment the $routing array below to use this feature
 */
	// The directory name, relative to the "controllers" directory.  Leave blank
	// if your controller is not in a sub-directory within the "controllers" one
	// $routing['directory'] = '';

	// The controller class file name.  Example:  mycontroller
	// $routing['controller'] = '';

	// The controller function you wish to be called.
	// $routing['function']	= '';


/*
 * -------------------------------------------------------------------
 *  CUSTOM CONFIG VALUES
 * -------------------------------------------------------------------
 *
 * The $assign_to_config array below will be passed dynamically to the
 * config class when initialized. This allows you to set custom config
 * items or override any default config values found in the config.php file.
 * This can be handy as it permits you to share one application between
 * multiple front controller files, with each file containing different
 * config values.
 *
 * Un-comment the $assign_to_config array below to use this feature
 */
	// $assign_to_config['name_of_config_item'] = 'value of config item';



// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

/*
 * ---------------------------------------------------------------
 *  Resolve the system path for increased reliability
 * ---------------------------------------------------------------
 */

	// Set the current directory correctly for CLI requests
	if (defined('STDIN'))
	{
		chdir(dirname(__FILE__));
	}

	if (($_temp = realpath($system_path)) !== FALSE)
	{
		$system_path = $_temp.DIRECTORY_SEPARATOR;
	}
	else
	{
		// Ensure there's a trailing slash
		$system_path = strtr(
			rtrim($system_path, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		).DIRECTORY_SEPARATOR;
	}

	// Is the system path correct?
	if ( ! is_dir($system_path))
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your system folder path does not appear to be set correctly. Please open the following file and correct this: '.pathinfo(__FILE__, PATHINFO_BASENAME);
		exit(3); // EXIT_CONFIG
	}

/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 */
	// The name of THIS file
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

	// Path to the system directory
	define('BASEPATH', $system_path);

	// Path to the front controller (this file) directory
	define('FCPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

	// Name of the "system" directory
	define('SYSDIR', basename(BASEPATH));

	// The path to the "application" directory
	if (is_dir($application_folder))
	{
		if (($_temp = realpath($application_folder)) !== FALSE)
		{
			$application_folder = $_temp;
		}
		else
		{
			$application_folder = strtr(
				rtrim($application_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(BASEPATH.$application_folder.DIRECTORY_SEPARATOR))
	{
		$application_folder = BASEPATH.strtr(
			trim($application_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your application folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}

	define('APPPATH', $application_folder.DIRECTORY_SEPARATOR);

	// The path to the "views" directory
	if ( ! isset($view_folder[0]) && is_dir(APPPATH.'views'.DIRECTORY_SEPARATOR))
	{
		$view_folder = APPPATH.'views';
	}
	elseif (is_dir($view_folder))
	{
		if (($_temp = realpath($view_folder)) !== FALSE)
		{
			$view_folder = $_temp;
		}
		else
		{
			$view_folder = strtr(
				rtrim($view_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(APPPATH.$view_folder.DIRECTORY_SEPARATOR))
	{
		$view_folder = APPPATH.strtr(
			trim($view_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your view folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}

	define('VIEWPATH', $view_folder.DIRECTORY_SEPARATOR);

/*
 * --------------------------------------------------------------------
 * LOAD THE BOOTSTRAP FILE
 * --------------------------------------------------------------------
 *
 * And away we go...
 */
require_once BASEPATH.'core/CodeIgniter.php';
>>>>>>> 255f2866a1927b1ee46a78fc1658e6ff6558d354
