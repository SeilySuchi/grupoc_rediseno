<?php
/**
 * Template Name: Curriculum
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<link rel="stylesheet" href="wp-content/themes/grupocemaco/css/bootstrap.css">
<link rel="stylesheet" href="wp-content/themes/grupocemaco/css/bootstrap-responsive.css">
<link rel="stylesheet" href="wp-content/themes/grupocemaco/css/select2.css">
<link rel="stylesheet" href="wp-content/themes/grupocemaco/css/datepicker.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="wp-content/themes/grupocemaco/js/jquery-ui.custom.min.js"></script>
<script src="wp-content/themes/grupocemaco/js/jquery.ui.datepicker-es.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="wp-content/themes/grupocemaco/js/validate.js"></script>
<script src="wp-content/themes/grupocemaco/js/select2.min.js"></script>
<script src="wp-content/themes/grupocemaco/js/jquery.mask.js"></script>
<script src="wp-content/themes/grupocemaco/js/jquery.mask-money.js"></script>
<script src="wp-content/themes/grupocemaco/js/jquery.timer.js"></script>
<script src="wp-content/themes/grupocemaco/js/jquery.validationEngine.js"></script>
<script src="wp-content/themes/grupocemaco/js/jquery.validationEngine-es.js"></script>
<script src="wp-content/themes/grupocemaco/js/jquery.noty.js"></script>
<script src="wp-content/themes/grupocemaco/js/micv.js"></script>


<div class="maincontent">
  <?php get_header();	?>
</div></div>





<div id="page">
  <div class="progress-bar">
	    <canvas id="inactiveProgress" class="progress-inactive" height="275px" width="275px"></canvas>
    <canvas id="activeProgress" class="progress-active"  height="275px" width="275px"></canvas>
    <p>0%</p>
  </div>


<div class="espaciador" style="min-heigh:500px;"></div>


<div class="mainform" id="progressControllerContainer">
 <ul id="wheel-tab" data-tabs="tabs">
     <li class="active"><a href="#tab-1" data-toggle="tab" class="tabSobreti">¡Cuéntanos sobre ti!</a></li>
     <li><a href="#tab-2" data-toggle="tab" class="tabEstudios">¿Qué has estudiado?</a></li>
     <li><a href="#tab-3" data-toggle="tab" class="tabTrabajos">¿Dónde has trabajado?</a></li>
     <li><a href="#tab-4" data-toggle="tab" class="tabTrabajar">¡A Trabajar!</a></li>
     <li><a href="#tab-5" data-toggle="tab" class="tabUltimo">Lo último pero no menos importante...</a></li>
</ul>

    <div class="tab-content">
        <div class="tab-pane active" id="tab-1">
            <h2>Tab 1</h2>
            <p>Start your engines…</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. dolore magna aliquam erat.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
            <a href="#tab-2" data-toggle="tab" class="tabEstudios">Siguiente</a>
        </div>
        <div class="tab-pane" id="tab-2">
            <h2>Tab 2</h2>
            <p>Start your engines…</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. dolore magna aliquam erat.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                 <a href="#tab-1" data-toggle="tab" class="tabSobreti">Anterior</a>
                 <a href="#tab-3" data-toggle="tab" class="tabTrabajos">Siguiente</a>
        </div>
        <div class="tab-pane" id="tab-3">
            <h2>Tab 3</h2>
            <p>Start your engines…</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. dolore magna aliquam erat.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                 <a href="#tab-2" data-toggle="tab" class="tabEstudios">Anterior</a>
                 <a href="#tab-4" data-toggle="tab" class="tabTrabajar">Siguiente</a>
        </div>
        <div class="tab-pane" id="tab-4">
            <h2>Tab 4</h2>
            <p>Start your engines…</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. dolore magna aliquam erat.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                 <a href="#tab-3" data-toggle="tab" class="tabTrabajos">Anterior</a>
                 <a href="#tab-5" data-toggle="tab" class="tabUltimo">Siguiente</a>
        </div>
        <div class="tab-pane" id="tab-5">
            <h2>Tab 5</h2>
            <p>Start your engines…</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. dolore magna aliquam erat.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                 <a href="#tab-4" data-toggle="tab" class="tabTrabajar">Anterior</a>
        </div>
    </div>

</div>




<div class="wrapper cemaco">
<div class="main-form tabbable">

  <form action="?page_id=55" method="post">
  <!-- Página 1 -->
  <?php require_once('wp-content/themes/grupocemaco/form/page1.phtml') ?>

  <!-- Página 2 -->
  <?php require_once('wp-content/themes/grupocemaco/form/page2.phtml') ?>

  </form>

</div></div>


<script type="text/javascript">

/************* Progress circle *************/

$(document).ready(function(){
			var $pc = $('.progressController');
			var $pCaption = $('.progress-bar p');
			var iProgress = document.getElementById('inactiveProgress');
			var aProgress = document.getElementById('activeProgress');
			var iProgressCTX = iProgress.getContext('2d');


			drawInactive(iProgressCTX);

			$pc.on('change', function(){
				var percentage = $(this).val() / 100;
				console.log(percentage + '%');
				drawProgress(aProgress, percentage, $pCaption);
			});

			function drawInactive(iProgressCTX){
				iProgressCTX.lineCap = 'square';

				//outer ring
				iProgressCTX.beginPath();
				iProgressCTX.lineWidth = 15;
				iProgressCTX.strokeStyle = '#e1e1e1';
				iProgressCTX.arc(137.5,137.5,129,0,2*Math.PI);
				iProgressCTX.stroke();

				//progress bar
				iProgressCTX.beginPath();
				iProgressCTX.lineWidth = 0;
				iProgressCTX.fillStyle = '#e6e6e6';
				iProgressCTX.arc(137.5,137.5,121,0,2*Math.PI);
				iProgressCTX.fill();

				//progressbar caption
				iProgressCTX.beginPath();
				iProgressCTX.lineWidth = 0;
				iProgressCTX.fillStyle = '#fff';
				iProgressCTX.arc(137.5,137.5,100,0,2*Math.PI);
				iProgressCTX.fill();

			}
			function drawProgress(bar, percentage, $pCaption){
				var barCTX = bar.getContext("2d");
				var quarterTurn = Math.PI / 2;
				var endingAngle = ((2*percentage) * Math.PI) - quarterTurn;
				var startingAngle = 0 - quarterTurn;

				bar.width = bar.width;
				barCTX.lineCap = 'square';

				barCTX.beginPath();
				barCTX.lineWidth = 20;
				barCTX.strokeStyle = '#76e1e5';
				barCTX.arc(137.5,137.5,111,startingAngle, endingAngle);
				barCTX.stroke();

				$pCaption.text( (parseInt(percentage * 100, 10)) + '%');
			}

				var percentage = 10 / 100;
				drawProgress(aProgress, percentage, $pCaption);


                    $("a.tabSobreti").click(function(){
                       var percentage10 = 10 / 100;
                       drawProgress(aProgress, percentage10, $pCaption);
                    })
                    $("a.tabEstudios").click(function(){
                       var percentage30 = 30 / 100;
                       drawProgress(aProgress, percentage30, $pCaption);
                    })
                    $("a.tabTrabajos").click(function(){
                       var percentage50 = 50 / 100;
                       drawProgress(aProgress, percentage50, $pCaption);
                    })
                    $("a.tabTrabajar").click(function(){
                       var percentage70 = 70 / 100;
                       drawProgress(aProgress, percentage70, $pCaption);
                    })
                    $("a.tabUltimo").click(function(){
                       var percentage90 = 90 / 100;
                       drawProgress(aProgress, percentage90, $pCaption);
                    })
                    $("a.prueba").click(function(){
                       var percentage100 = 100 / 100;
                       drawProgress(aProgress, percentage100, $pCaption);
                    })
            });

/************* Tabs *************/


var $tabs = $('#wheel-tab li');
$('#wheel-left').on('click', function () {
    $tabs.filter('.active').prev('li').find('a[data-toggle="tab"]').tab('show');
});

$('#wheel-right').on('click', function () {
    $tabs.filter('.active').next('li').find('a[data-toggle="tab"]').tab('show');
});

    </script>


<?php get_footer(); ?>
