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

<div class="wrapper cemaco">
<div class="main-form tabbable">

  <!-- <form action="?page_id=55" method="post">
    <label>Nombre:</label>
    <input type="text" name="name_user" value="">

    <label>Password:</label>
    <input type="text" name="password" value="">

    <input type="submit" value="Enviar">

  </form> -->
  <div class="tab-pane active" id="tab1">
  <div class="row-fluid">
    <div class="span12">

      <form action="?page_id=55" method="post">
        <h2>¡Cuéntanos sobre ti!</h2>
        <div class="section">
          <fieldset>
            <div class="row-fluid">
              <div class="span2">
                <label> <i class="required">* </i>Primer Nombre</label>
                <input class="span12 required-send" maxlength="20" minlength="2" required="required" name="oPrimerNombre" type="text" value="" />
              </div>
              <div class="span2">
                <label>Segundo Nombre</label>
                <input class="span12" maxlength="20" minlength="2" name="oSegundoNombre" value="" type="text" />
              </div>
              <div class="span2">
                <label> <i class="required">* </i>Primer Apellido</label>
                <input class="span12 required-send" maxlength="20" minlength="2" required="required" name="oPrimerApellido" value="" type="text" />
              </div>
              <div class="span2">
                <label>Segundo Apellido</label>
                <input class="span12" maxlength="20" minlength="2" name="oSegundoApellido" value="" type="text" />
              </div>
              <div class="span3">
                <label>Apellido de Casada</label>
                <input class="span12" maxlength="20" minlegth="2" name="oApellidoCasada" value="" type="text" />
              </div>
            </div>
          </fieldset>
        </div>
        <div class="section">
          <fieldset>
            <label>Lugar de Nacimiento</label>
            <div class="row-fluid">
              <div class="span4">
                <select class="span12 cctld pais-nacimiento select2" name="Oferentes[idPaisNacimiento]">
                  <option value="0">-- País --</option>
                </select>
              </div>
              <div class="span4">
                <select class="span12 depto required-send" name="Oferentes[idDepartamentoNacimiento]" data-transfer="Oferentes[idMunicipioNacimiento]">
                  <option value="">-- Departamento --</option>
                </select>
              </div>
              <div class="span4">
                <select class="muni required-send span12" name="Oferentes[idMunicipioNacimiento]">
                  <option value="">-- Municipio --</option>
                </select>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <label><span>Nacionalidad</span> </label>
            <div class="row-fluid">
              <div class="span12">
                <select class="span4 pais-nacimiento select2" name="Oferentes[idPaisNacionalidad]" readonly="readonly">
                  <option value="" selected="selected">-- Nacionalidad --</option>
                </select>
              </div>
            </div>
          </fieldset>
        </div>

      </form>

    </div>
  </div>
  </div>

</div></div>

<?php get_footer(); ?>
