$(document).ready(function(){

  $('a[href="/rrhh/micv/comenzar"]').click(function(e){
    e.preventDefault();
    $.ajax({
        url  : $(this).attr('href'),
        type : 'post',
        data : {},
        dataType : 'json',
        success: function(json){
          if(json){
            $.noty({layout:'topLeft', theme:'noty_theme_twitter', text:json.responseText, type:json.response, timeout:(json.response=='error'?8000:6000)});
            if(json.redirect)
            setTimeout("window.location.href = '"+json.redirect+"'", 1000);
          }
        }
      });
  });

  $(".select2").select2();

	$(".cctld").change(function() {
		if ( $(this).val() != 2 ){
      $(this).parents("fieldset").find(".depto, .muni").attr("disabled", "disabled").prop('selectedIndex',0).removeClass('required-send').hide();
      $(this).parents("fieldset").find('label.error').hide();
		} else
      $(this).parents("fieldset").find(".depto, .muni").removeAttr("disabled").addClass('required-send').show();

    if($(this).attr('id') == 'country_passport')
    {
      if($(this).val() != 2)
        $('#tipoDocumento').prop('value','PASAPORTE');
      //else
        //$('#tipoDocumento').prop('value','DPI');
    }
	});

  $("[name='Oferentes[idPaisNacimiento]']").click(function() {
      $("[name='Oferentes[idPaisNacionalidad]']").select2("val", $(this).val());
  });

  $('.pais-nacimiento').change(function(){
		if($(this).val()!=2){
      $(this).parent().parent().find('.depto, .muni').hide();
      $('.fset-direccion').find('.required').addClass('hidden');
      $('#direccion-actual').removeClass('required-send');
		} else {
      $(this).parent().parent().find('.depto, .muni').show();
			$('.fset-direccion').find('.required').removeClass('hidden');
			$('#direccion-actual').addClass('required-send');
		}
	});

  jQuery.fn.loadMunicipios = function(options) {
      var defaults = {};
      var opts = $.extend(defaults, options);

      return this.each(function(){
          codigo_depto = $(this).find("option:selected").val();

          var selectMunicipio = $("select[name='" + $(this).data("transfer") + "']");
          selectMunicipio.empty();

          selectMunicipio.append($('<option />').val('').html('-- Municipio --'));
          $('.Municipios .Depto_'+codigo_depto).each(function(i,v){
              var h = $(v);
              var new_option = $('<option />').val(h.attr('codigo')).html(h.html());
              selectMunicipio.append(new_option);
          });
      });

  };

  $('.depto').change(function(){
    $(this).loadMunicipios();
  });

  jQuery.fn.loadCarreras = function(options) {
    var defaults = {};
    var opts = $.extend(defaults, options);

    return this.each(function(){
        var codigo_tipo = $(this).find("option:selected").val();
        var selectCarreras = $(this).closest('.fCarreras').find('.oedCarrera');

        selectCarreras.empty();

        var p = $(this).closest('.oferente-estudios').find('.hasDatepicker').trigger('change');

        selectCarreras.append($('<option />').val('').html('-- Carrera --'));

        $('.Carreras .Tipo_'+codigo_tipo).each(function(i,v){
            var h = $(v);
            var new_option = $('<option />').val(h.attr('codigo')).html(h.html());
            selectCarreras.append(new_option);
        });
    });
  };

  $('.oedTipoCarrera').change(function(){
      $(this).loadCarreras();
  });

  $("body").on("click", ".label em", function() {
      $(this).next().focus();
  });

  $("[name='OferenteAdicionales[oaTipoResidencia]']").change(function(){
      $('.monto_residencia').hide().find('input').attr('disabled','disabled');
  });

  $("#tab2 input[type='radio']").each(function() {
    $(this).change(function(){
        if ( $(this).hasClass("other") )
            $(this).closest('.radiosBlock').find("blockquote,.block").find(".specify").removeAttr("disabled").focus();
        else
            $(this).closest(".radiosBlock").find(".specify").attr("disabled", "disabled");

        if ( $(this).hasClass('radio-alquilada') ){
            if($('.radio-alquilada').is(':checked'))
                $('.alquilada').show().find('input').removeAttr('disabled');
            else
                $('.alquilada').hide().find('input').attr('disabled','disabled');
        }
    });
  });

  $("#tab2 input.specify").change(function() {
    v = $.trim( $(this).val() );

    if ( ( v == "" ) && $(this).data("empty") )
        v = $(this).data("empty");

    else if ( ( v != "" ) && $(this).data("value") )
        v = $(this).data("value") + v;

    $(this).parents("label").find(".other").val( v );
  });

  $(".truefalse").change(function() {
    status = $(this).val();

    $.each(  $(this).data("inputs").split(","), function(i, v) {
        if ( status == 0 )
            $("[name='" + v +  "']").attr("readOnly", "readOnly").val("");
        else {
            $("[name='" + v +  "']").removeAttr("readOnly");
            if ( i == 0 ) $("[name='" + v +  "']").focus();
        }
    });
  });

  $(".mt").change(function() { $(".cm").val( parseFloat( $(this).val() ) * 100 ) });
  $(".cm").change(function() { $(".mt").val( parseInt( $(this).val() ) / 100 ) });

  $(".yesno").change(function() {
      if ( $(this).val() == 0 || $(this).val() == 'N' )
          $("[name='" + $(this).data("what") +  "']").attr("disabled", "disabled").val("");
      else
          $("[name='" + $(this).data("what") +  "']").removeAttr("disabled").focus();
  });

  $("#tab5 .emo").change(function() {
      if ( $.trim( $(this).val() ) != "" )
          $( $(this).parents(".row-fluid")[0] ).find("input").addClass("required-send");
      else
          $( $(this).parents(".row-fluid")[0] ).find("input").removeClass("required-send");
  });

  $(".switch").change(function() {
      if ( $.trim( $(this).val() ) == "" )
          $("[name='" + $(this).data("switch") +  "']").val("N");
      else
          $("[name='" + $(this).data("switch") +  "']").val("S");
  });


    window.saveForm = function(options, callback) {
        var defaults = {};
        var opts = $.extend(defaults, options);
        var f = $('#formMiCV');

        $(this).spinner({text:'Guardando...'});

         $.ajax({
            url  : f.attr('action'),
            type : 'post',
            data : f.serialize(),
            dataType : 'json',
            success: function(json){
                var response;

                if(json){
                    if(json.percentage) $('#percentage_bar').css({width:json.percentage+'%'});
                    if(json.pending.length>0){
                        $('#cv_observaciones').empty();
                        $.each(json.pending, function(index, p){
                            $('#cv_observaciones').append('<li>'+p+'</li>');
                        });
                    }

                    if(json.response == 'success'){
                        if(json.percentage==100)
                            $.noty({layout:'topLeft', theme:'noty_theme_twitter', text:json.responseText, type:json.response, timeout:5000});

                        if(json.redirect)
                            setTimeout("window.location.href = '"+json.redirect+"'", 1500);

                        response = {
                            'status': true,
                            'error_message': '',
                            'error_count': 0
                        };

                    } else if (json.response == 'error') {
                        var err_count = 0;
                        var error_messages = [];

                        $.noty({layout:'topLeft', theme:'noty_theme_twitter', text:json.responseText, type:json.response, timeout:5000});

                        // Count errors
                        $(json.validation_errors).each(function(i) {
                            json.validation_errors[i]['errors_count'] > 0 && error_messages.push(json.validation_errors[i]['error_message']);
                            $(json.validation_errors[i]['data']).each(function() { err_count += 1; });
                        });

                        response = {
                            'status': false,
                            'error_messages': error_messages,
                            'error_count': err_count
                        };
                    }
                }

                // Call callback only if defined
                typeof(callback) === "function" && callback(response);
            }
        });
    };

  jQuery.fn.saveForm = window.saveForm;

  //saving the form every minute
  setInterval(function(){ window.saveForm(); }, 60000);

  // Active form validation
	if($('.cemaco form').length>0){
		$(".cemaco form").validate({
			showErrors: function(errorMap, errorList){
				$("#cv_observaciones").html("Por favor corrige los "
				  + this.numberOfInvalids()
				  + " campos obligatorios que contiene el formulario.");
				this.defaultShowErrors();
			}
		});
	}

  // Advance to tab (and validate before that)
  //, .cemaco .nav-tabs a
  $(".cemaco .btn-next, .cemaco .btn-prev").click(function(e) {
      e.preventDefault();
      var that = this;

      activetab = parseInt( $(".nav-tabs .active a").attr("href").replace("#tab", "") );
      tab = parseInt( $(this).attr("href").replace("#tab", "") );

      if ( tab > activetab ) {
          if (activetab==5) $(".cemaco-list").scrollTop(0);

          $(".cemaco form").find(".required-send").attr("required","true");
          $(".cemaco form").removeData("validator");

          $(".cemaco form").validate({
              //debug: true,
              focusInvalid: false,
              focusCleanup: false,
              showErrors: function(errorMap, errorList){
                  $("#cv_observaciones").html("La hoja contiene " + this.numberOfInvalids() + " errores, por favor corregirlos.");
                  this.defaultShowErrors();
              }
          });

          // Client validation
          if ( !$(".cemaco form").valid() ) {
              document.body.scrollTop = document.documentElement.scrollTop = 0;
              $('#cv_observaciones').show().effect( "pulsate", {times:3}, 1000 );

              return false;
          } else {
              $("#sheet").val(activetab);

              // If client validations pass, check backend validations
              $(".cemaco form").saveForm(null, function(response) {
                  if (response["status"]) {
                      document.body.scrollTop = document.documentElement.scrollTop = 0;
                      $("#cv_observaciones").hide();

                      // Move forward only if status is successful
                      $(".nav-tabs li.active").removeClass("active");
                      $(".nav-tabs li a[href='" + $(that).attr("href") + "']").parent().addClass("active");
                      $(".tab-pane.active").removeClass("active");
                      $( $(that).attr("href") ).addClass("active");
                  } else {
                      document.body.scrollTop = document.documentElement.scrollTop = 0;

                      // Override validate plugin error messages
                      var message = "<b>Se econtraron " + response["error_count"] + " errores de data invalida, por favor corregirlos:</b><br>";

                      $(response["error_messages"]).each(function(i, elem) {
                          message += "<b>" + (i+1) + "</b>. " + elem + "<br>";
                      })

                      $("#cv_observaciones").html(message);
                      $("#cv_observaciones").show().effect( "pulsate", {times:3}, 1000 );
                  }
              });
          }

          if (tab==5) {
              if($('.areas-interes input:checked').length>0)
                  $('.areas-interes').find('.vai').hide();
              else
                  $('.areas-interes').find('.vai').show();

              if($('.puestos input:checked').length>0)
                  $('.puestos').find('.vap').hide();
              else
                  $('.puestos').find('.vap').show();

              $('.areas-interes input[type="checkbox"]').bind('click', function(c){
                  if($('.areas-interes input:checked').length>0)
                      $('.areas-interes').find('.vai').hide();
                  else
                      $('.areas-interes').find('.vai').show();
              });

              $('.puestos input[type="checkbox"]').bind('click', function(c){
                  if($('.puestos input:checked').length>0)
                      $('.puestos').find('.vap').hide();
                  else
                      $('.puestos').find('.vap').show();
              });
          }
          $('.cemaco form').find('.required-send').removeAttr('required');
      } else  {
          $(".nav-tabs li.active").removeClass("active");
          $(".nav-tabs li a[href='" + $(this).attr("href") + "']").parent().addClass("active");

          $(".tab-pane.active").removeClass("active");
          $( $(this).attr("href") ).addClass("active");
      }
      return false;
  });

  // masks
  $.mask.definitions['a']='[A-Za-z\Ñ\ñ]';
  $('#maskCedulaOrden').mask('a-9').val($('#maskAltura').attr('value'));
  $('#maskAltura').mask('9.99').val($('#maskAltura').attr('value'));

  $('#tipoDocumento').change(function(){
		var s = $(this);
    if(s.val()=='PASAPORTE')
    {
      $('#country_passport').select2('val','0');
      $('[name*=DepartamentoExtendido], [name*=MunicipioExtendido]').hide();
    }
    else
    {
      $('#country_passport').select2('val','2');
      $('[name*=DepartamentoExtendido], [name*=MunicipioExtendido]').show();
    }
    $('.cctld').trigger('change');

		if(s.val()=='CEDULA')
			$('#maskCedulaOrden').show();
		else
			$('#maskCedulaOrden').hide();
	});

//  $('.cemaco form .currency').maskMoney({thousands:',', decimal:'.'});

  $('#medioOportunidad').change(function(){
    if ($(this).val() == 'feria' || $(this).val() == 'otros')
      $('#medioOportunidadTexto').show();
    else
      $('#medioOportunidadTexto').hide();
  });

  $('.guardar').click(function(e){
      e.preventDefault();

      //$('.cemaco form').find('.required-send').attr('required','true');
      $("form").removeData('validator');

      $(".cemaco form").validate({
          //debug: true,
          ignore: "",
          focusCleanup: false,
          showErrors: function(errorMap, errorList){
              $("#cv_observaciones").html("El formulario contiene " + this.numberOfInvalids() + " errores, por favor regrese y complete los campos marcados en rojo para corregirlos.");
              this.defaultShowErrors();

              if(this.numberOfInvalids()>0&&errorList.length>0){
                  var e = errorList[0]['element'];

                  if($(e)){
                      var tabpane = $(e).closest('.tab-pane');
                      var iid = tabpane.attr('id');
                      var _href = '#'+iid;

                      $(".nav-tabs li.active").removeClass("active");
                      $(".nav-tabs li a[href='" + _href + "']").parent().addClass("active");
                      $(".tab-pane.active").removeClass("active");
                      $( _href ).addClass("active");
                  }
              }
              $('.cemaco form').find('.required-send').removeAttr('required');
          }
      });

      if ( !$("form").valid() ) {
          document.body.scrollTop = document.documentElement.scrollTop = 0;
          $('#cv_observaciones').show().effect( "pulsate", {times:3}, 1000 );

          return false;
      } else {
          document.body.scrollTop = document.documentElement.scrollTop = 0;
          $('#cv_observaciones').hide();

          $('#sheet').val(6);

          // Que valida esto?
          if($("form").saveForm()){}

          var m = $('#dd-modal2 .window').modal();
          m.find('.modal-footer').empty();
          m.find('.modal-title').html('Confirmaci&oacute;n');
          m.find('.modal-body').show();
          // m.find('.modal-insert-text').html('&iquest;Deseas adjuntar alg&uacute;n documento?');

          var footer = m.find('.modal-footer');
          var ok_button = $('<a/>').attr('data-dismiss','modal').attr('aria-hidden','true').addClass('btn btn-success ok-button').css('width','15%').html('S&iacute;');
          var cancel_button = $('<a/>').attr('aria-hidden','true').addClass('btn btn-info cancel-button').css('width','15%').html('No');

          footer.append(ok_button);
          footer.append(cancel_button);

          // m.find('.ok-button').show().off('click').click(function(c) {
          //     document.location.href = URL_REL+'/documentos/index/status/attachments/';
          // });

          footer.fadeOut();
          footer.empty();
          m.find('.modal-body').hide();

          var save_button = $('<a/>').attr('data-dismiss','modal').attr('aria-hidden','true').addClass('btn btn-info save-button').css('width','30%').html('Guardar y Enviar');
          footer.append(save_button);
          footer.fadeIn();

          save_button.click(function(c) {
              $('#sheet').val(7);
              $("form").saveForm();
              $('#sheet').val(6)
          });

          m.find('.cancel-button').show().off('click').click(function(c) {
              footer.fadeOut();
              footer.empty();
              m.find('.modal-body').hide();

              var save_button = $('<a/>').attr('data-dismiss','modal').attr('aria-hidden','true').addClass('btn btn-info save-button').css('width','30%').html('Guardar y Enviar');
              footer.append(save_button);
              footer.fadeIn();

              save_button.click(function(c) {
                  $('#sheet').val(7);
                  $("form").saveForm();
                  $('#sheet').val(6)
              });

          });
          return true;
      }
  });

  $('#addLicense').click(function(e){
      var maxv = 5;
      e.preventDefault();
      if($('.row-licencia').length<maxv){
          var section = $('#fLicencia').clone();
          section.find('.IDO_CODTLI').prop('selectedIndex',0);
          section.find('.IDO_NUMERO_LICENCIA').val('');

          var rand  = Math.floor((Math.random()*100)+1)+Math.round(new Date().getTime()/1000);

          section.attr('id', 'f'+rand);

          var delete_license = $('<a />').attr('href','javascript:void(0)').attr('tabindex','-1').addClass('delete_license').html('<i class="icon-trash"></i>').click(function(e){
              e.preventDefault();
              $(this).parents('.row-licencia').remove();
          });

          section.find('input, textarea, select').each(function(){
              var name = $(this).attr('name');
              var nname = name.replace(/0/gi, rand);
              $(this).attr('name', nname);
              $(this).val('');
          });

          section.find('.span2').append(delete_license);

          $('.row-licencia:last').after(section);
      } else
          alert('No puedes agregar más de '+maxv+' licencias');
  });

  $('.delete_license').each(function(){
      $(this).click(function(){
          $(this).closest('.row-licencia').remove();
      });
  });

  $('#tab3 .check-qepd').each(function(){
      test();
      $(this).change(test);

      function test(){
          var c = $(this);
          if(c.is(':checked')){
              c.closest('.referencia-familiar').find('.label-required').hide();
              c.closest('.referencia-familiar').find('.require').removeClass('required-send');
              c.closest('.referencia-familiar').find('.toggle_0').attr('disabled','disabled').val('');
          } else {
              c.closest('.referencia-familiar').find('.label-required').show();
              c.closest('.referencia-familiar').find('.require').addClass('required-send');
              c.closest('.referencia-familiar').find('.toggle_0').removeAttr('disabled');
          }
      }
  });

  $('#addReferenciaFamiliar').click(function(e){
      var maxv = 6;
      if($('.referencia-familiar').length<maxv){
          e.preventDefault();

          var section = $('.referencia-familiar:first').clone();
          section.find('.GFO_CODPRT').prop('selectedIndex',0);
          section.find('.GFO_SEXO').prop('selectedIndex',0);
          section.find('input').each(function(){ $(this).val(''); });

          var rand  = Math.floor((Math.random()*100)+1)+Math.round(new Date().getTime()/1000);

          section.attr('id', 'rf'+rand);

          var delete_referencia_familiar = $('<a />').attr('href','javascript:void(0)').attr('tabindex','-1').attr('data-toggle','popover').attr('data-placement','right').attr('title','Click aquí para eliminar esta referencia familiar').addClass(' btn btn-danger btn-mini delete_referencia_familiar').html('<i class="icon-trash icon-white"></i>&nbsp;').tooltip().click(function(e){
              e.preventDefault();
              $(this).parents('.referencia-familiar').remove();
          });

          section.find('input, textarea, select').each(function(){
              var name = $(this).attr('name');
              var nname = name.replace(/0/gi, rand);
              $(this).attr('name', nname);
              $(this).val('');
          });

          section.prepend(delete_referencia_familiar);
          section.find('.dateITA').removeAttr('id').removeClass('hasDatepicker').datepicker({
              dateFormat:"dd-mm-yy",
              changeMonth:true,
              changeYear:true,
              yearRange: "-80:+0"
          });

          section.find('');

          section.find('.check-qepd').change(function(){
              var c = $(this);
              if(c.is(':checked')){
                  c.closest('.referencia-familiar').find('.label-required').hide();
                  c.closest('.referencia-familiar').find('.require').removeClass('required-send');
                  c.closest('.referencia-familiar').find('.toggle_0').attr('disabled','disabled').val('');
              } else {
                  c.closest('.referencia-familiar').find('.label-required').show();
                  c.closest('.referencia-familiar').find('.require').addClass('required-send');
                  c.closest('.referencia-familiar').find('.toggle_0').removeAttr('disabled');
              }
          });

          $('.referencia-familiar:last').after(section);
          delete_referencia_familiar.tooltip('show');

      } else
          alert('No puedes agregar más de '+maxv+' referencias');

  });

  $('.delete_referencia_familiar').each(function(){
		$(this).tooltip().click(function(){
      if (confirm('¿Estas seguro que deseas eliminar esta opción?'))
        $(this).closest('.referencia-familiar').remove();
		});
	});

  $('#addOtroIdioma').click(function(e){
      var maxv = 5;

      if($('.idiomas').length<maxv){
          e.preventDefault();

          var section = $('.idiomas:first').clone();
          var rand  = Math.floor((Math.random()*100)+1)+Math.round(new Date().getTime()/1000);
          section.attr('id', 'oi'+rand);

          var delete_idioma = $('<a />').attr('href','javascript:void(0)').attr('data-toggle','popover').attr('tabindex','-1').attr('data-placement','right').attr('title','Click aquí para eliminar este idioma').addClass('pull-right btn btn-danger btn-mini delete_idioma').html('<i class="icon-trash icon-white"></i>&nbsp;').tooltip().click(function(e){
              e.preventDefault();
              $(this).closest('.idiomas').remove();
          });

          section.find('input, textarea, select').each(function(){
              var name = $(this).attr('name');
              var nname = name.replace(/0/gi, rand);

              $(this).attr('name', nname);

              if($(this).attr('type')!='radio')
                  $(this).val('');
          });

          section.find('.append').append(delete_idioma);

          $('.idiomas:last').after(section);
          delete_idioma.tooltip('hover');
      } else
          alert('No puedes agregar más de '+maxv+' idiomas');
  });

  $('.delete_idioma').each(function(){
      $(this).tooltip().click(function(){
          $(this).closest('fieldset').remove();
      });
  });

  $('#addEstudio').click(function(e){
      var maxv = 5;

      if($('.oferente-estudios').length<maxv){
          e.preventDefault();

          var section = $('.oferente-estudios:first').clone();
          section.find('input').each(function(){ $(this).val(''); });
          section.find('.oedTipoCarrera').prop('selectedIndex',0);
          section.find('.oedCarrera').prop('selectedIndex',0);
          section.find('.oedPais').prop('selectedIndex',0);

          var rand  = Math.floor((Math.random()*100)+1)+Math.round(new Date().getTime()/1000);
          section.attr('id', 'oc'+rand);

          var delete_button = $('<a />').attr('href','javascript:void(0)').attr('data-toggle','popover').attr('tabindex','-1').attr('data-placement','right').attr('title','Click aquí para eliminar este estudio').addClass('pull-right btn-mini btn btn-danger delete_estudio').html('<i class="icon-trash icon-white"></i>&nbsp;').tooltip().click(function(e){
              e.preventDefault();
              $(this).closest('fieldset').remove();
          });

          section.find('input, textarea, select').each(function(){
              var name = $(this).attr('name');
              var nname = name.replace(/0/gi, rand);
              $(this).attr('name', nname);
              $(this).val('');
          });

          section.find('legend').append(delete_button);
          section.find('.dateITA').removeAttr('id').removeClass('hasDatepicker').datepicker({
              dateFormat:"dd-mm-yy",
              changeMonth:true,
              changeYear:true,
              yearRange: "-80:+5"
          });

          section.find('.dateMin').datepicker();
          section.find('.oedTipoCarrera').change(function(){
              $(this).loadCarreras();
          });

          $('.oferente-estudios:last').after(section);
          delete_button.tooltip('show');
      } else
          alert('No puedes agregar más de '+maxv+' estudios');
  });

  $('.estudioFechaFinal').click(function(){
    var dateContainer = $(this).parent().next();
    if ($(this).prop('checked'))
      dateContainer.hide();
    else
      dateContainer.show();
  });


  $('#addCursoAdicional').click(function(e){
      var maxv = 3;

      if($('.cursos-adicionales').length<maxv){
          e.preventDefault();

          var section = $('.cursos-adicionales:first').clone();
          section.find('input').each(function(){ $(this).val(''); });
          section.find('.ioTipoCurso').prop('selectedIndex',0);

          var rand  = Math.floor((Math.random()*100)+1)+Math.round(new Date().getTime()/1000);
          section.attr('id', 'oc'+rand);

          var delete_button = $('<a />').attr('href','javascript:void(0)').attr('data-toggle','popover').attr('tabindex','-1').attr('data-placement','right').attr('title','Click aquí para eliminar este curso').addClass('pull-right btn-mini delete_curso btn btn-danger').html('<i class="icon-trash icon-white"></i>&nbsp;').tooltip().click(function(e){
              e.preventDefault();
              $(this).closest('fieldset').remove();
          });

          section.find('input, textarea, select').each(function(){
              var name = $(this).attr('name');
              var nname = name.replace(/0/gi, rand);
              $(this).attr('name', nname);
              $(this).val('');
          });

          section.find('.legend-curso').prepend(delete_button);
          section.find('.dateITA').removeAttr('id').removeClass('hasDatepicker').datepicker({
              dateFormat:"dd-mm-yy",
              changeMonth:true,
              changeYear:true,
              yearRange: "-80:+5"
          });

          section.find('.dateMin').datepicker();

          $('.cursos-adicionales:last').after(section);
          delete_button.tooltip('show');
      } else
          alert('No puedes agregar más de '+maxv+' cursos');
  });

  $('.delete_curso').each(function(){
      $(this).tooltip().click(function(){
          $(this).closest('.cursos-adicionales').remove();
      });
  });

  $('#addCursoMaquinaria').click(function(e){
		var maxv = 3;
		if($('.cursos-maquinaria').length<maxv)
    {
      e.preventDefault();
      var section = $('.cursos-maquinaria:first').clone();
      section.find('input').each(function(){ $(this).val(''); });
      section.find('select').prop('selectedIndex',0);
      var rand  = Math.floor((Math.random()*100)+1)+Math.round(new Date().getTime()/1000);
      section.attr('id', 'om'+rand);


      section.find('input, select').each(function(){
        var name = $(this).attr('name');
        var nname = name.replace(/0/gi, rand);
        $(this).attr('name', nname);
        $(this).val('');
      });

      var delete_button = $('<a />').attr('href','javascript:void(0)').attr('data-toggle','popover').attr('tabindex','-1').attr('data-placement','right').attr('title','Click aquí para eliminar este curso').addClass('pull-right btn-mini delete_curso_maquinaria btn btn-danger').html('<i class="icon-trash icon-white"></i>&nbsp;').tooltip().click(function(e){
        e.preventDefault();
        if (confirm('¿Estas seguro que deseas eliminar esta opción?'))
          $(this).closest('fieldset').remove();
      });
      section.find('.legend-curso').prepend(delete_button);

      $('.cursos-maquinaria:last').after(section);
      delete_button.tooltip('show');
		} else {
			alert('No puedes agregar más de '+maxv+' cursos');
		}
	});

	$('.delete_curso_maquinaria').each(function(){
		$(this).tooltip().click(function(){
      if (confirm('¿Estas seguro que deseas eliminar esta opción?'))
        $(this).closest('.cursos-maquinaria').remove();
		});
	});

  $('#addTrabajo').click(function(e){
      var maxv = 10;

      if($('.trabajos-adicionales').length<maxv){
          e.preventDefault();

          var section = $('.trabajos-adicionales:first').clone();
          section.find('input').each(function(){ $(this).val(''); });
          section.find('.OferenteTrabajaActualmente').remove();

          var rand  = Math.floor((Math.random()*100)+1)+Math.round(new Date().getTime()/1000);
          section.attr('id', 'ta'+rand);

          var delete_button = $('<a />').attr('href','javascript:void(0)').attr('data-toggle','popover').attr('tabindex','-1').attr('data-placement','right').attr('title','Click aquí para eliminar este curso').addClass('pull-right btn btn-danger btn-mini delete_trabajo').html('<i class="icon-trash icon-white"></i>&nbsp;').tooltip().click(function(e){
              e.preventDefault();
              $(this).closest('fieldset').remove();
          });

          section.find('input, textarea, select').each(function(){
              var name = $(this).attr('name');
              $(this).removeAttr('disabled');
              var nname = name.replace(/0/gi, rand);
              $(this).attr('name', nname);
              $(this).val('');
              if($(this).is(':checked')) $(this).removeAttr('checked');
          });

          section.find('legend.legend-trabajo').prepend(delete_button);
          section.find('.dateITA').removeAttr('id').removeClass('hasDatepicker').datepicker({
              dateFormat:"dd-mm-yy",
              changeMonth:true,
              changeYear:true,
              yearRange: "-80:+0",
          });
          section.find('.dateMin').datepicker();

          $('.trabajos-adicionales:last').after(section);
          delete_button.tooltip('show');
      } else {
          alert('No puedes agregar más de '+maxv+' trabajos');
      }
  });

  $('.dateMin').datepicker();

	$('.delete_trabajo').each(function(){
		$(this).tooltip().click(function(){
			if (confirm('¿Estas seguro que deseas eliminar esta opción?'))
        $(this).closest('.trabajos-adicionales').remove();
		});
	});

  $('#addReferenciaNoFamiliar').click(function(e){
      var maxv = 5;

      if($('.referencias-no-familiares').length<maxv){
          e.preventDefault();

          var section = $('.referencias-no-familiares:first').clone();
          section.find('input').each(function(){ $(this).val(''); });

          var rand  = Math.floor((Math.random()*100)+1)+Math.round(new Date().getTime()/1000);
          section.attr('id', 'ta'+rand);

          var delete_button = $('<a />').attr('href','javascript:void(0)').attr('data-toggle','popover').attr('tabindex','-1').attr('data-placement','right').attr('title','Click aquí para eliminar esta referencia').addClass('btn btn-danger btn-mini delete_referencia_no_familiar').html('<i class="icon-trash icon-white"></i> Eliminar').tooltip().click(function(e){
              e.preventDefault();
              $(this).closest('fieldset').remove();
          });

          section.find('input, textarea, select').each(function(){
              var name = $(this).attr('name');
              var nname = name.replace(/0/i, rand);
              $(this).attr('name', nname);
              $(this).val('');
          });

          section.find('.append-referencia').prepend(delete_button);

          delete_button.tooltip('show');
          $('.referencias-no-familiares:last').after(section);
      } else
          alert('No puedes agregar más de '+maxv+' referencias no familiares');
  });

	$('.delete_referencia_no_familiar').each(function(){
		$(this).tooltip().click(function(){
			$(this).closest('fieldset').remove();
		});
	});

  $('.MarcaPreferidaCemaco').change(function(){
      var s1 = $('.MarcaPreferidaCemaco').get(0);
      var s2 = $('.MarcaPreferidaCemaco').get(1);
      var s3 = $('.MarcaPreferidaCemaco').get(2);

      $(s2).children('option').removeAttr('disabled');
      $(s3).children('option').removeAttr('disabled');

      // Ambiguo, especificar "{}" para saber la intencion de esto.
      if($(s1).val()!=''){
        $(s2).find('option[value='+$(s1).val()+']').attr('disabled','disabled').removeAttr('selected');
        $(s3).find('option[value='+$(s1).val()+']').attr('disabled','disabled').removeAttr('selected');
      }

      if($(s2).val()!='')
        $(s3).find('option[value='+$(s2).val()+']').attr('disabled','disabled').removeAttr('selected');
  });

	$('.ListaUbicacionPreferidaCemaco').change(function(){
		var s1 = $('.ListaUbicacionPreferidaCemaco').get(0);
		var s2 = $('.ListaUbicacionPreferidaCemaco').get(1);
		var s3 = $('.ListaUbicacionPreferidaCemaco').get(2);

		$(s2).children('option').removeAttr('disabled');
		$(s3).children('option').removeAttr('disabled');

		if($(s1).val()!='') {
      $(s2).find('option[value='+$(s1).val()+']').attr('disabled','disabled').removeAttr('selected');
      $(s3).find('option[value='+$(s1).val()+']').attr('disabled','disabled').removeAttr('selected');
    }
		if($(s2).val()!='')
      $(s3).find('option[value='+$(s2).val()+']').attr('disabled','disabled').removeAttr('selected');
	});

  function onoff(o) {
      if ( ( $.trim( $(o).val() ) == "" ) || ( $(o).val() == 0 ) || ( $(o).val() == 'N' ) ){
          $(o).parents("fieldset").find("input:not(.onoff), textarea:not(.onoff)").attr("disabled", "disabled").val('').html('');
          $(o).parents("fieldset").find("select:not(.onoff)").attr("disabled", "disabled").prop('selectedIndex',0);
          $(o).parents("fieldset").find('label.error').hide();
      } else
          $(o).parents("fieldset").find("input, textarea, select").removeAttr("disabled");
  }

  $(document).on("blur"  , ".onoff", function() { onoff(this); })
      .on("change", ".onoff", function() { onoff(this); })
      .on("load",".onoff", function(){ onoff(this); });

  jQuery.fn.areasInteres = function(options) {
      var defaults = { max_areas_interes : 100 };
      var o = $.extend(defaults, options);

      return this.each(function(){
          $(this).click(function(c){
              if($('.areas-interes').find(':checked').length<=o.max_areas_interes){
                  return true;
              } else {
                  $(this).removeAttr('checked');
                  alert('No puedes seleccionar más de '+o.max_areas_interes+' áreas de interés');
                  return false;
              }
          });
      });
  };

  $('input.area-interes').click(function(){
    if($(this).val()>100)
    {
      if ($('input.area-interes:checked').filter(function() { return $(this).attr("value") > 100; }).length)
        $('.cemaco-choose-stores').show();
      else
        $('.cemaco-choose-stores').hide();
    }
  });

  if ($('input.area-interes:checked').filter(function() { return $(this).attr("value") > 100; }).length)
    $('.cemaco-choose-stores').show();
  else
    $('.cemaco-choose-stores').hide();

  // Set default year to current year for "Fecha en que podrías empezar a trabajar"
  $(".max-date").datepicker({
      minDate: new Date((new Date).getFullYear(), 0, 1),
      maxDate: new Date((new Date).getFullYear(), 12, 31)
  });

  // Disable "¿Te encuentras disponible para laborar fines de semana y días festivos en cualquier jornada?" question,
  // if any "Puestos administrativos" are checked.
  $("html").on("change", ".admin", function() {
      var chk_boxes = $(".admin"),
          counter = 0;

      for (var i = 0; i < chk_boxes.length; i++)
          if (chk_boxes[i].checked)
              counter++;

      if (counter > 0)
          $(".extra-hours").attr("disabled","disabled");
      else
          $(".extra-hours").removeAttr("disabled");
  });

  $("html").on("change", "#piloto", function() {
      if (!this.checked)
          $("#tipo-licencia").hide()
      else
          $("#tipo-licencia").show()
  });

  $("html").on("change", "#referencia", function() {
      if (Number($(this).val()) === 12)
          $("#especificar").show();
      else
          $("#especificar").hide();
  });
});


$(document).on("change", ".cn", function() {
	if($(this).val() == '18'){
    $('select.oedCarrera').hide()
    $('input.oedCarrera').show();
  }
  else {
    $('select.oedCarrera').show()
    $('input.oedCarrera').hide();
  }

  if ( ( $.trim( $(this).val() ) == "" ) || ( $(this).val() == 0 ) || ( $(this).val() == 'N' ) ) {
    $('.trabajadoEnCemacoOpt').hide();
		$(this).parents("fieldset").find(".require").removeClass("required-send");
		$(this).parents("fieldset").find(".required").addClass("hidden");
	} else {
    $('.trabajadoEnCemacoOpt').show();
		$(this).parents("fieldset").find(".require").addClass("required-send").removeAttr('disabled');
		$(this).parents("fieldset").find(".required").removeClass("hidden");
	}
}).on("keyup", ".cn", function() { $(this).change() });
