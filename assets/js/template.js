var divLoading = '<div class="loading">&nbsp;</div>';
var tab_counter = 1;
var $tabs = $( "#conteudo").tabs();

function addTab(sUrl, sTitulo, post) {					
	$tabs.tabs( "option" , 'url' , sUrl );
	$tabs.tabs( "option" , 'data' , post );
	$tabs.tabs( "add", "#tabs-" + tab_counter, sTitulo);
	tab_counter++;
}
	
function loadTab(sUrl, id, post) {								
	var conteudo = '';
	$.ajax({
		type: 'POST',
		url: sUrl,
		data: post,			
		async: false,
		success: function(retorno){
			conteudo = retorno;				
		}
	});			
	console.log($('#' + id));
	$('#' + id).html( "<p>" + conteudo + "</p>" );
}

$(function() {				
	$tabs = $( "#conteudo").tabs({
		tabTemplate: "<li><a href='#{href}'>#{label}</a> <span class='ui-icon ui-icon-close'>Remove Tab</span></li>",		
		cookie: { expires: 1 },
		add: function( event, ui ) {
			var conteudo = '';
			$( ui.panel ).html(divLoading);		
			$.ajax({
				type: 'POST',
				url: $tabs.tabs( "option" , 'url'),
				data: $tabs.tabs( "option" , 'data'),			
				async: false,
				success: function(retorno){
					conteudo = retorno;				
				}
			});			
			$( ui.panel ).html( "<p>" + conteudo + "</p>" );		
			$tabs.tabs('select', '#' + ui.panel.id);
		}		
	});
		
	$('a').live('click', function (e){				
		e.preventDefault();					
		if($(this).next().is('div')){
			$(this).next('div').slideToggle(500);
			this.blur();
			return false;
		} else {
			var chave = null;		
			$(':checkbox').each(function(e){
				if(this.checked){
					chave = {chave:this.id};
				}						 
			});
			addTab(this.href, this.innerHTML, chave);			
		}				
	});
	
	$('form').live('submit', function (e){
		console.log('asd');
		e.preventDefault();		
		var values = {};
		$.each($('form').serializeArray(), function(i, field) {
			values[field.name] = field.value;
		});							
		loadTab(this.action, this.parentNode.id, values);		
	});	
	
	$(':submit').live('click', function(e){
		console.log('submit click');
		$('form').submit();
	});
	
	$( "span.ui-icon-close" ).live( "click", function() {
		var index = $( "li", $tabs ).index( $( this ).parent() );
		$tabs.tabs( "remove", index );
	});	
});