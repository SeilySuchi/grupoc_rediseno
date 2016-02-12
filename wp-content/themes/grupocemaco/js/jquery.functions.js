$(document).ready(function(){

	jQuery.fn.spinner = function(options)
	{
		var defaults = {};
		var opts = $.extend(defaults, options);

	  return this.each(function()
		{
	  		$(document).ajaxStart(function() {
				var me = (opts.text?opts.text:'Cargando...');
	  			$('body').append($('<span/>').addClass('spinner').attr('id','loader').html(me));
	  		}).ajaxStop(function() {
	  			//setTimeout(,800);
				$('#loader').remove();
	  		});

		});
	};

	jQuery.fn.alerts = function(options)
	{
		var defaults = {
			alerts: {error: 'alert-error', success: 'alert-success', info: 'alert-info'},
			icons: {error: 'icon-remove-sign', success: 'icon-ok-sign', info: 'icon-exclamation-sign'},
			type:'info'
		}
		var opts = $.extend(defaults,options);

		return this.each(function()
		{
			var d = $('<div></div>').addClass('alert alert-block fade in').addClass(opts.alerts[opts.type])
			var btn = $('<button></button>').attr('type','button').attr('data-dismiss','alert').addClass('close').html('×');
			var ico = $('<i></i>').addClass(opts.icons[opts.type]);
			var text = $('<b>'+opts.title+':</b> <span>'+opts.text+'</span>');
			d.append(btn).append(ico,text).alert();

			$(this).append(d);

		});
	};


	$('#multipleOperations').submit(function(e){
		e.preventDefault();

		$(this).spinner();

		var checkboxes = $('.checkboxes-container input.check-one:checked');

		var f = $(this);
		var s = f.find('.multiple :selected');
		var type   = '';
		var action = '';

		var text = '';
		var iArray = [];
		checkboxes.each(function(){
			iArray.push($(this).val());
			text += $(this).attr('message');
		});

		if(s.val() != 'none'){

			switch(s.val()){
				case 'export':
				case 'ineligible':
					action = 'multiupdate';
				case 'delete':
					action = 'multidelete';
				break;
			}

			var b = $(this);

			var icons = ['icon-remove-sign','icon-ok-sign','icon-exclamation-sign','icon-warning-sign'];
			var alerts = ['alert-error','alert-success','alert-info'];

			var text_loading = (b.attr('text-loading')!=null?b.attr('text-loading'):'Cargando...');
			$(this).spinner({text:text_loading});

			var m = $('#dd-modal .window').modal();
			m.find('.modal-title').html((b.attr('confirmation-title')?b.attr('confirmation-title'):'Confirmaci&oacute;n'));
			m.find('.modal-insert-text').html(b.attr('confirmation-text')+text);
			//m.find('.modal-icon').addClass(icons[3])

			m.find('.ok-button').show().off('click').click(function(c) {
			//m.on('hidden', function () {
				//c.preventDefault();
				$.ajax({
					url: f.attr('action')+action,
					dataType: "json",
					data: { operation: s.val(), items: iArray, fEstado: s.attr('set'), vars:document.location.search },
					success: function(json){
						if(json.response)
							$.noty({layout:'topCenter', theme:'noty_theme_twitter', text:json.responseText, type:json.response, timeout:(json.response=='error'||json.response=='warning'?false:3000)});

						if(json.redirect){
							setTimeout(function(){document.location.href = json.redirect;},3000);
						}
					}
				});


			});

		}

	});

	/*$(".selectAccount").select2({
		placeholder: "Seleccionar cliente"
	});*/

	$('._call').click(function(c){
		c.preventDefault();

		var b=$(this);

		var text_loading = (b.attr('text-loading')!=null?b.attr('text-loading'):'Cargando...');
		$(this).spinner({text:text_loading});

		$.ajax({
			url  : b.attr('href'),
			type : 'post',
			data : {},
			dataType : 'json',
			success: function(json){
				if(json.response)
					$.noty({layout:'topCenter', theme:'noty_theme_twitter', text:json.responseText, type:json.response, timeout:(json.response=='error'||json.response=='warning'?8000:1500)});

				if(json.redirect){
					setTimeout(function(){document.location.href = json.redirect;},1500);
				}
			}
		});

	});

	$('._call-delete').click(function(c){
		c.preventDefault();

		var b=$(this);

		var icons = ['icon-remove-sign','icon-ok-sign','icon-exclamation-sign','icon-warning-sign'];
		var alerts = ['alert-error','alert-success','alert-info'];

		var text_loading = (b.attr('text-loading')!=null?b.attr('text-loading'):'Cargando...');
		$(this).spinner({text:text_loading});

		var m = $('#dd-modal .window').modal();
		m.find('.modal-title').html((b.attr('confirmation-title')?b.attr('confirmation-title'):'Confirmaci&oacute;n'));
		m.find('.modal-insert-text').html(b.attr('confirmation-text'));
		m.find('.modal-icon').addClass(icons[3])

		m.find('.ok-button').show().off('click').click(function(c) {
			c.preventDefault();
			$.ajax({
				url  : b.attr('url'),
				type : 'post',
				data : b.attr('params'),
				dataType : 'json',
				success: function(json){
					if(json){

						/*$('.app-notifications').alerts({
							type:json.response,
							title:(json.responseTitle?json.responseTitle:'Respuesta'),
							text:json.responseText
						});*/

						$.noty({layout:'center', theme:'noty_theme_twitter', text:json.responseText, type:json.response, timeout:(json.response=='error'?8000:3000)});


						if(json.redirect!=null){
							setTimeout(function(){document.location.href = json.redirect;},3000);
						}
					} else {

					}
				}
			});


		});

	});

	$('._form-submit').submit(function(s){
		s.preventDefault();

		var icons = ['icon-remove-sign','icon-ok-sign','icon-exclamation-sign'];
		var alerts = ['alert-error','alert-success','alert-info'];

		$(this).spinner({text:'Enviando...'});

		if($(this).validationEngine('validate')){

			var f = $(this);

			$.ajax({
				url  : f.attr('action'),
				type : 'post',
				data : f.serialize(),
				dataType : 'json',
				success: function(json){
					if(json){
						$.noty({layout:'center', theme:'noty_theme_twitter', text:json.responseText, type:json.response, timeout:(json.response=='error'||json.response=='warning'?8000:3000)});
						if(json.redirect!=null){
							setTimeout(function(){document.location.href = json.redirect;},3000);
						}
					} else {
					}
				}
			});

		}
	});

	$('#printLink').click(function(a){
	  window.open(this, 'Cemaco :: Imprimir', 'width=890,height=600,scrollbars=yes');
	  return false;
	});

	/* Plots */

	jQuery.fn.showTooltip = function(options)
	{
		var defaults = {};
		var opts = $.extend(defaults, options);

	  	$('<div id="tooltip">' + options.contents + '</div>').css( {
			position: 'absolute',
			display: 'none',
			top: options.y - 30,
			left: options.x - 50,
			color: "#fff",
			padding: '2px 5px',
			'border-radius': '6px',
			'background-color': '#000',
			opacity: 0.80
		}).appendTo("body").fadeIn(200);
	};

	// jQuery.fn.dateMin = function(options)
	// {
	// 	return this.each(function(){
	// 		var datemax = $(this).parents('.dateRanges').find('.dateMax');
	// 		datemax.datepicker('option','minDate',$(this).val());
	//
	// 		$(this).bind('change', function(){
	// 			datemax.datepicker('option','minDate',$(this).val());
	// 		});
	// 	});
	// };
	//
	$.datepicker.setDefaults( $.datepicker.regional[ "es" ] );
	$("input.date,input.dateITA").datepicker({
		dateFormat:"dd/mm/yy",
		changeMonth:true,
		changeYear:true,
		yearRange: "-80:+5",
	});

	$("input.dateBD").datepicker('option','yearRange',"-80:+0");

	$('.tooltips').tooltip('show');


});
