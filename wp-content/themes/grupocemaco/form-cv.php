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
<!--<script src="wp-content/themes/grupocemaco/js/jquery.validationEngine.js"></script>-->
<script src="wp-content/themes/grupocemaco/js/jquery.functions.js"></script>
<!--<script src="wp-content/themes/grupocemaco/js/jquery.validationEngine-es.js"></script>-->
<script src="wp-content/themes/grupocemaco/js/jquery.noty.js"></script>
<script src="wp-content/themes/grupocemaco/js/micv.js"></script>


<!-- ----------- popup contrato ------------- -->
<?php $usuario = get_current_user_id( );
        $usuarioAceptoContrato =  $wpdb->get_results( "SELECT Acepto FROM gc_usuarios_contrato WHERE UserId=$usuario" );
        if (count($usuarioAceptoContrato) == 1) { }else{ ?>
        <!-- ---------Popup box---------- -->
            <div id="light" class="white_content popupbox">
            <form action="?page_id=85" method="post" id="formContrato">
            <!-- ---------Contrato---------- -->
                <div id="contrato">
                    <h1>¡ Bienvenido a la Bolsa de Empleo !</h1>
                       <p>Para empezar, debes aceptar nuestros terminos y condiciones</p>
                        <div class="terms-container">
                            Yo, el infrascrito aceptante, declaro bien enterado de la pena de los delitos de perjurio y falso testimonio
                            que&nbsp;toda la información que proporcionaré para ingresar a la bolsa de trabajo de Grupo Cemaco es verídica.
                            Así mismo, autorizo que la información  que suministre sea recopilada y cotejada   con la información que posean
                            entidades públicas o privadas, así como  la generada por relaciones contractuales, crediticias o comerciales, o
                            la que haya sido reportada a centrales de riesgo o burós de crédito.
                            De tal cuenta todos  los datos que proporcionaré a Grupo CEMACO,  serán entregados de forma
                            legítima y de manera voluntaria. Por lo tanto declaro que, Grupo Cemaco y las entidades que formen parte de
                            su grupo empresarial, pueden utilizar mis datos personales a su total discreción, así como  recopilar y formar
                            un registro con ella. <br>
                            <br>
                            Al mismo tiempo, yo el infrascrito aceptante, declaro que conozco que Grupo CEMACO implementará controles
                            adecuados que permitan  la protección de la información cedida; sin embargo, manifiesto que Grupo CEMACO
                            quedará  exento de toda responsabilidad por cualquier daño que se le ocasione, como resultado de causas
                            constitutivas de caso fortuito o fuerza mayor, actos mal intencionados de terceros,  y cualquier otro acto,
                            evento o circunstancia imprevisible o que siendo previsible sea insuperable, que tenga como resultado
                            la fuga, robo o hurto de la información que he proporcionado.<br>
                            <br>
                            Por último, manifiesto que la ilegalidad, ineficacia, invalidez o nulidad de una o varias de las
                            estipulaciones del presente, declaradas por autoridad competente, no afectarán la validez,
                            eficacia o legalidad de las restantes estipulaciones.<br>
                            <br>
                        </div>
                        <label class="checkbox aceptoterminos-main">
                            <input type="checkbox" name="acepto-terminos[]" value="1" class="checkbox_contrato">
	                    Acepto los terminos y condiciones</label><br>
                      <a class="abienvenido botonazul blocked-button">Siguiente</a>
                </div>
            <!-- ---------Pagina Bienvenido---------- -->
                <div id="bienvenido">
                        <h1>¡Somos una gran familia y queremos que tú seas parte de ella!</h1>
                        <section>
                            Para que crezcas con nosotros nos interesa conocerte.</p>
                            En esta primera parte del proceso, es importante que tengas cerca de ti, tus documentos personales,
                            constancias de  estudio y laborales para rellenar el formulario.</p>
                            Para que te puedas organizar, toma en cuenta que la duración estimada para llenar la solicitud
                            es aproximadamente de unos 30 minutos. Si quieres comenzar la aplicación y volver en un momento
                            posterior para completarla, elige la opción guardar, que está en la parte inferior de la aplicación.</p>
                            Recuerda que siempre cuentas con la opción de volver a ingresar a la Bolsa de Empleo Cemaco, y continuar
                            completando el formulario.</p>
                        </section>
                        <input type="submit" value="Comenzar" class="botonverde" >
                </div>
            </form>
            </div>
            <div id="fade" class="black_overlay"></div>
<?php }; ?>




<div class="maincontent">
  <?php get_header();	?>
</div></div>

<a name="toptop"></a>
<div id="error-main-message">
    <img src="<?php echo site_url(); ?>/wp-content/themes/grupocemaco/images/exclamation.png"/>
    Por Favor ingresar la información requerida en los campos obligatorios</div>
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
       <li class="tabsb activetab tabsb1"><a href="#toptop" class="siguienteyanterior tabSobreti">¡Cuéntanos sobre ti!</a></li>
       <li class="tabsb tabsb2"><a href="#toptop" class="siguienteyanterior tabEstudios">¿Qué has estudiado?</a></li>
       <li class="tabsb tabsb3"><a href="#toptop" class="siguienteyanterior tabTrabajos">¿Dónde has trabajado?</a></li>
       <li class="tabsb tabsb4"><a href="#toptop" class="siguienteyanterior tabTrabajar">¡A Trabajar!</a></li>
       <li class="tabsb tabsb5"><a href="#toptop" class="siguienteyanterior tabUltimo">Lo último</a></li>
    </ul>

    <form action="?page_id=55" method="post" id="formBolsa">
      <div class="tab-content cemaco">
          <div class="tab-pane active" id="tab-1">
                <!-- Página 1 -->
                <?php require_once('wp-content/themes/grupocemaco/form/page1.phtml') ?>
              <div class="siguiente-anterior">
                <input type="submit" name="guardar" value="Guardar">
                <a href="#toptop" class="siguienteyanterior tabEstudios siguiente">Siguiente</a>
                <!--<a data-toggle="tab" href="#tab-2"></a>-->
              </div>
          </div>

          <div class="tab-pane" id="tab-2">
                <!-- Página 2 -->
                <?php require_once('wp-content/themes/grupocemaco/form/page2.phtml') ?>
              <div class="siguiente-anterior">
                   <a href="#toptop" class="siguienteyanterior tabSobreti">Anterior</a>
                   <a href="#toptop" class="siguienteyanterior tabTrabajos siguiente">Siguiente</a>
              </div>
          </div>

          <div class="tab-pane" id="tab-3">
            <!-- Página 3 -->
            <?php require_once('wp-content/themes/grupocemaco/form/page3.phtml') ?>
            <div class="siguiente-anterior">
                 <a href="#toptop" class="siguienteyanterior tabEstudios">Anterior</a>
                 <a href="#toptop" class="siguienteyanterior tabTrabajar siguiente">Siguiente</a>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
              <?php require_once('wp-content/themes/grupocemaco/form/page4.phtml') ?>
              <div class="siguiente-anterior">
                   <a href="#toptop" class="siguienteyanterior tabTrabajos">Anterior</a>
                   <a href="#toptop" class="siguienteyanterior tabUltimo siguiente">Siguiente</a>
              </div>
          </div>
          <div class="tab-pane" id="tab-5">
              <?php require_once('wp-content/themes/grupocemaco/form/page5.phtml') ?>
              <div class="siguiente-anterior">
                   <a href="#toptop" class="siguienteyanterior tabTrabajar">Anterior</a>
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
            $("#error-main-message").removeClass("mostrar");
        }
    });

    $("a.tabEstudios").click(function(){
        if ($($myForm).valid()){
            var percentage30 = 30 / 100;
            drawProgress(aProgress, percentage30, $pCaption);
            $( ".tabsb" ).removeClass( "activetab" );
            $( ".tabsb2" ).addClass( "activetab" );
            $("#tab-2").show(); $('#tab-1').hide(); $('#tab-3').hide(); $('#tab-4').hide(); $('#tab-5').hide();
            $("#error-main-message").removeClass("mostrar");
        }
    });
    $("a.tabTrabajos").click(function(){
        if ($($myForm).valid()){
            var percentage50 = 50 / 100;
            drawProgress(aProgress, percentage50, $pCaption);
            $( ".tabsb" ).removeClass( "activetab" );
            $( ".tabsb3" ).addClass( "activetab" );
            $("#tab-3").show(); $('#tab-1').hide(); $('#tab-2').hide(); $('#tab-4').hide(); $('#tab-5').hide();
            $("#error-main-message").removeClass("mostrar");
        }
    });
    $("a.tabTrabajar").click(function(){
        if ($($myForm).valid()){
            var percentage70 = 70 / 100;
            drawProgress(aProgress, percentage70, $pCaption);
            $( ".tabsb" ).removeClass( "activetab" );
            $( ".tabsb4" ).addClass( "activetab" );
            $("#tab-4").show(); $('#tab-1').hide(); $('#tab-2').hide(); $('#tab-3').hide(); $('#tab-5').hide();
            $("#error-main-message").removeClass("mostrar");
        }
    });
    $("a.tabUltimo").click(function(){
        if ($($myForm).valid()){
            var percentage90 = 90 / 100;
            drawProgress(aProgress, percentage90, $pCaption);
            $( ".tabsb" ).removeClass( "activetab" );
            $( ".tabsb5" ).addClass( "activetab" );
            $("#tab-5").show(); $('#tab-1').hide(); $('#tab-2').hide(); $('#tab-3').hide(); $('#tab-4').hide();
            $("#error-main-message").removeClass("mostrar");
        }
    });
    $("a.prueba").click(function(){
        if ($($myForm).valid()){
            var percentage100 = 100 / 100;
            drawProgress(aProgress, percentage100, $pCaption);
            $( ".tabsb" ).removeClass( "activetab" );
            $("#error-main-message").removeClass("mostrar");
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

/************* Color en validaciones *************/
$("#formBolsa").validate({
    errorClass: "clase-mensaje-error",
    validClass: "validacion-clase",
    highlight: function(element, errorClass) {
        $(element).addClass('errorhighlight');
        $("#error-main-message").addClass("mostrar");
    }
});

/************* Popup Contrato *************/

$('input.checkbox_contrato').val($(this).is(':checked'));

$('input.checkbox_contrato').change(function() {
    if($(this).is(":checked")) {
        $("a.abienvenido").click(function(){
            $("#contrato").hide();
            $("#bienvenido").show();
        });
        $("a.abienvenido").removeClass("blocked-button");
    }
    else{
        $("a.abienvenido").click(function(){
           $("#bienvenido").hide();
           $("#contrato").show();
        });
        $("a.abienvenido").addClass("blocked-button");
    }
    $('input.checkbox_contrato').val($(this).is(':checked'));
});



    </script>


<?php get_footer(); ?>
