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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<div class="maincontent">
<?php get_header();	?>
</div></div>





<div id="page">
  <div class="progress-bar">
	    <canvas id="inactiveProgress" class="progress-inactive" height="275px" width="275px"></canvas>
    <canvas id="activeProgress" class="progress-active"  height="275px" width="275px"></canvas>
    <p>0%</p>
  </div>
  <div id="progressControllerContainer">
    <input type="range" id="progressController" min="0" max="100" value="15" />
  </div
</div>





 <ul id="wheel-tab" data-tabs="tabs">
     <li class="active"><a href="#tab-1" data-toggle="tab"></a></li>
     <li><a href="#tab-2" data-toggle="tab"></a></li>
     <li><a href="#tab-3" data-toggle="tab"></a></li>
     <li><a href="#tab-4" data-toggle="tab"></a></li>
</ul>
<div class="row">
    <div class="row">
        <ul class="nav nav-tabs nav-justified tab-bar">
            <li><a href="#" id="wheel-left">PREVIOUS</a></li>
            <li><a href="#" id="wheel-right">NEXT</a></li>
        </ul>
    </div>
</div>

<div class="tab-content">
    <div class="tab-pane active" id="tab-1">
        <h2>Friday // AFTERNOON</h2>
        <p>Start your engines…</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. dolore magna aliquam erat.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
    </div>
    <div class="tab-pane" id="tab-2">
        <h2>Friday // Evening</h2>
        <p>Start your engines…</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. dolore magna aliquam erat.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
    </div>
    <div class="tab-pane" id="tab-3">
        <h2>Saturday // AFTERNOON</h2>
        <p>Start your engines…</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. dolore magna aliquam erat.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
    </div>
    <div class="tab-pane" id="tab-4">
        <h2>Saturday // Evening</h2>
        <p>Start your engines…</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. dolore magna aliquam erat.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
    </div>
</div>




<div class="wrapper cemaco">
<div class="main-form tabbable">












  <!-- Página 1 -->
  <?php require_once('wp-content/themes/grupocemaco/form/page1.phtml') ?>

</div></div>


<script type="text/javascript">

/************* Progress circle *************/

$(document).ready(function(){
			var $pc = $('#progressController');
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

				var percentage = $pc.val() / 100;
				drawProgress(aProgress, percentage, $pCaption);


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
