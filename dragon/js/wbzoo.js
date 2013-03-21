/**
* Wikibyte by Michael McCouman jr.
* ---------------------------------
* @file zoomer.js 
* @copy Copyright(c) 2012 August   
*
* Tutorial presents DieWikiMaster
*
*       WikiByte.org(c)2012
*/

/*
//JQ Klasse:
$.fn.<funktionsname>
$.animate()
$.stop()

//JS Klassen (Class):
$.extend()
$(this)
$.find()
$.removeClass()
$.addClass()
-------------------------
{console / console.log}
{undefined}
*/

(	//Start Funktion:
	function($) {
		//Vergrößerungsvariable:
		$.fn.Bildzoom = function ( zoomvars ) {
			//Variablen:
			var zoom = $.extend ( {
					Gross:450,
					Klein:500,
					Validieren:false
				}, zoomvars
			);
			
			//aus Variablen:
			var dauer = $.extend ( zoom, zoomvars );
						
			//Wenn Fehler ist gebe aus mit:		
			function e ( nozoom ) {
				
				//Validation Variablen:
				if ( typeof console != "undefined" && 
					 typeof console.Validieren != "undefined") { 
					//Vergebe Error:
					console.log ( nozoom ) 
						
				 //ist nicht OK? DANN gebe aus:			
				 } else { 
					alert( nozoom ) 
				}
			}

			//Definiere (E) mit +D aus Zoom&Zoomvars:
			if ( dauer.Gross == undefined ||
				 dauer.Klein == undefined ) { 
					//Translation der Ausgabe alert (nozoom)
					e ( 'Gross: '+ dauer.Gross );
					e ( 'Klein: '+ dauer.Klein );
				 
					return 
					  false
			} 
			
			//Untersuche auf Fehlende Variable:
			if	( dauer.Validieren == undefined ) {
				//Fehler Zuweiung:
				 e ( 'Gross: ' + dauer.Gross );
				 e ( 'Klein: ' + dauer.Klein );
	
				return 
				  false
			}
			
			//Prüfe auf Variable:
			if ( typeof dauer.Gross != "undefined" ||
				 typeof dauer.Klein != "undefined" ) { 
				
				//Ist Bug ok? DANN gebe Fehler aus:
				if ( dauer.Validieren == true ){
					e ( 'Gross:' + dauer.Gross );
					e ( 'Klein:' + dauer.Klein );		
				}
			
				//IST == Maushover
				$(this).hover ( 
					
					//Vergebe CSS Z-Index:
					function(){
						$(this).css( {
								'z-index':'10'
							}
						);
						
						//IST == Hover DANN -> JQ+animate
						$(this).find('img').addClass("hover").stop().animate ( {	
								marginTop:'-15px',
								marginLeft:'-15px',
								top:'5%',
								left:'5%',
								//width:'500px',
								width:'500px!important',
								//width:'!important',
								height:'340px'
								
							}, 
							//Entspricht => Dauer von Groß:
							dauer.Gross 
						);

					}, 
					
					//An sonsten CSS ZIndex:
					function() { 
						$(this).css( { 
							'z-index':'0' 
							} 
						);
						
						//mit Hover no JQ-animate:
						$(this).find('img').removeClass("hover").stop().animate ( {
								marginTop:'0',
								marginLeft:'0',
								top:'0',
								left:'0',
								width:'400px',
								height:'297px'   
							},
								//Entspricht => Dauer von Klein:
								dauer.Klein
						);
						
					}
				)
			}	
		}
	}
) 
//Ende
(jQuery);