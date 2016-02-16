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
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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
<script src="wp-content/themes/grupocemaco/js/jquery.functions.js"></script>
<script src="wp-content/themes/grupocemaco/js/jquery.validationEngine-es.js"></script>
<script src="wp-content/themes/grupocemaco/js/jquery.noty.js"></script>
<script src="wp-content/themes/grupocemaco/js/micv.js"></script>


<div class="maincontent">
  <?php get_header();	?>
</div></div>

<!-- --------- main content ------------- -->
<div class="headmicv"><h1>Mi curriculum</h1></div>
<div class="greycontent">
  <!-- ----- progress bar ------ -->
  <div class="progress-outer"><div class="progress-bar">
      <canvas id="inactiveProgress" class="progress-inactive" height="275px" width="275px"></canvas>
      <canvas id="activeProgress" class="progress-active"  height="275px" width="275px"></canvas>
      <p>0%</p>
  </div></div>

<!-- ----- Tabs bolsa ------ -->
<div class="tabsbolsa">
    <!-- ----- Tabs links ------ -->
    <ul id="wheel-tab" data-tabs="tabs">
       <li class="tabsb activetab tabsb1"><a class="siguienteyanterior tabSobreti">¡Cuéntanos sobre ti!</a></li>
       <li class="tabsb tabsb2"><a class="siguienteyanterior tabEstudios">¿Qué has estudiado?</a></li>
       <li class="tabsb tabsb3"><a class="siguienteyanterior tabTrabajos">¿Dónde has trabajado?</a></li>
       <li class="tabsb tabsb4"><a class="siguienteyanterior tabTrabajar">¡A Trabajar!</a></li>
       <li class="tabsb tabsb5"><a class="siguienteyanterior tabUltimo">Lo último</a></li>
    </ul>

    <form action="?page_id=55" method="post" id="formBolsa">
      <div class="tab-content cemaco">
          <div class="tab-pane active" id="tab-1">
                <!-- Página 1 -->
                <?php require_once('wp-content/themes/grupocemaco/form/page1.phtml') ?>
              <div class="siguiente-anterior">
                <input type="submit" name="guardar" value="Guardar">
                <a class="siguienteyanterior tabEstudios siguiente">Siguiente</a>
                <!--<a data-toggle="tab" href="#tab-2"></a>-->
              </div>
          </div>

          <div class="tab-pane" id="tab-2">
                <!-- Página 2 -->
                <?php require_once('wp-content/themes/grupocemaco/form/page2.phtml') ?>
              <div class="siguiente-anterior">
                   <a class="siguienteyanterior tabSobreti">Anterior</a>
                   <a class="siguienteyanterior tabTrabajos siguiente">Siguiente</a>
              </div>
          </div>

          <div class="tab-pane" id="tab-3">
            <!-- Página 3 -->
            <?php require_once('wp-content/themes/grupocemaco/form/page3.phtml') ?>
            <div class="siguiente-anterior">
                 <a class="siguienteyanterior tabEstudios">Anterior</a>
                 <a class="siguienteyanterior tabTrabajar siguiente">Siguiente</a>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
              <h2>Tab 4</h2>
              <p>Start your engines…</p>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. dolore magna aliquam erat.</p>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
              <div class="siguiente-anterior">
                   <a class="siguienteyanterior tabTrabajos">Anterior</a>
                   <a class="siguienteyanterior tabUltimo siguiente">Siguiente</a>
              </div>
          </div>
          <div class="tab-pane" id="tab-5">
              <h2>Tab 5</h2>
              <p>Start your engines…</p>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. dolore magna aliquam erat.</p>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
              <div class="siguiente-anterior">
                   <a class="siguienteyanterior tabTrabajar">Anterior</a>
              </div>
          </div>
      </div>
    </form>
  </div>
</div></div>





<script type="text/javascript">
$('div.span8.checkbox-group :checkbox:checked').length > 0;
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
        //Sombra exterior
	iProgressCTX.beginPath();
	iProgressCTX.lineWidth = 15;
	iProgressCTX.strokeStyle = '#e1e1e1';
	iProgressCTX.arc(67.5,67.5,56,0,2*Math.PI);
	iProgressCTX.stroke();
	//Barra detras de progreso
	iProgressCTX.beginPath();
	iProgressCTX.lineWidth = 0;
	iProgressCTX.fillStyle = '#e6e6e6';
	iProgressCTX.arc(67.5,67.5,52,0,2*Math.PI);
	iProgressCTX.fill();
        //Circulo blanco
	iProgressCTX.beginPath();
	iProgressCTX.lineWidth = 0;
	iProgressCTX.fillStyle = '#fff';
	iProgressCTX.arc(67.5,67.5,41,0,2*Math.PI);
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
	barCTX.lineWidth = 12;
	barCTX.strokeStyle = '#2B4AAE';
	barCTX.arc(68.5,70.5,45,startingAngle, endingAngle);
	barCTX.stroke();
	$pCaption.text( (parseInt(percentage * 100, 10)) + '%');
    }
    /******* Default % ******/
    var percentage = 10 / 100;
    drawProgress(aProgress, percentage, $pCaption);
/************* Finn Progress circle *************/


    var $myForm = $('#formBolsa')
    $("a.tabSobreti").click(function(){
        if ($($myForm).valid()){
            var percentage10 = 10 / 100;
            drawProgress(aProgress, percentage10, $pCaption);
            $( ".tabsb" ).removeClass( "activetab" );
            $( ".tabsb1" ).addClass( "activetab" );
            $("#tab-1").show(); $('#tab-2').hide(); $('#tab-3').hide(); $('#tab-4').hide(); $('#tab-5').hide();
        }
    });


    $("a.tabEstudios").click(function(){
        //if ($($myForm).valid()){
            var percentage30 = 30 / 100;
            drawProgress(aProgress, percentage30, $pCaption);
            $( ".tabsb" ).removeClass( "activetab" );
            $( ".tabsb2" ).addClass( "activetab" );
            $("#tab-2").show(); $('#tab-1').hide(); $('#tab-3').hide(); $('#tab-4').hide(); $('#tab-5').hide();
        //}
    });
    $("a.tabTrabajos").click(function(){
        if ($($myForm).valid()){
            var percentage50 = 50 / 100;
            drawProgress(aProgress, percentage50, $pCaption);
            $( ".tabsb" ).removeClass( "activetab" );
            $( ".tabsb3" ).addClass( "activetab" );
            $("#tab-3").show(); $('#tab-1').hide(); $('#tab-2').hide(); $('#tab-4').hide(); $('#tab-5').hide();
        }
    });
    $("a.tabTrabajar").click(function(){
        //if ($($myForm).valid()){
            var percentage70 = 70 / 100;
            drawProgress(aProgress, percentage70, $pCaption);
            $( ".tabsb" ).removeClass( "activetab" );
            $( ".tabsb4" ).addClass( "activetab" );
            $("#tab-4").show(); $('#tab-1').hide(); $('#tab-2').hide(); $('#tab-3').hide(); $('#tab-5').hide();
        //}
    });
    $("a.tabUltimo").click(function(){
        if ($($myForm).valid()){
            var percentage90 = 90 / 100;
            drawProgress(aProgress, percentage90, $pCaption);
            $( ".tabsb" ).removeClass( "activetab" );
            $( ".tabsb5" ).addClass( "activetab" );
            $("#tab-5").show(); $('#tab-1').hide(); $('#tab-2').hide(); $('#tab-3').hide(); $('#tab-4').hide();
        }
    });
    $("a.prueba").click(function(){
        if ($($myForm).valid()){
            var percentage100 = 100 / 100;
            drawProgress(aProgress, percentage100, $pCaption);
            $( ".tabsb" ).removeClass( "activetab" );
        }
    });
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
