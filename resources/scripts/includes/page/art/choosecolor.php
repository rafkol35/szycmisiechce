<script type="text/javascript">
function menuready() {
	$('.footeritem').animate({opacity: 1.0}, 0);
	
	$('.footeritem').mouseover(function() {
    	$(this).stop();
        $(this).animate({opacity: 0.75}, 100);
    });
    $('.footeritem').mouseout(function() {
    	$(this).stop();
        $(this).animate({opacity: 1.0}, 350);
    });
}

// var imgsMain = new Array();
// var canvasMain;
// var ctxMain;

// var imgsMasks = new Array();
// var canvasesMasks = new Array();
// var ctxsMasks = new Array();

// var colRs = new Array();
// var colGs = new Array();
// var colBs = new Array();

// var color;

// var ready = false;
// var masksToLoad = [5,4];
// var loadedMasks = 0;

// var lastMousePosX = 0;
// var lastMousePosY = 0;

// var choosedColorSample = 0;

// var frontOrBack = -1;

// function chooseFront(){
// 	if( frontOrBack == 0 ) return;
// 	frontOrBack = 0;
// 	redrawAll(frontOrBack);
// }
// function chooseBack(){
// 	if( frontOrBack == 1 ) return;
// 	frontOrBack = 1;
// 	redrawAll(frontOrBack);
// }

// function imgMaskLoadCounter(){
// 	loadedMasks++;
// 	if( loadedMasks == (masksToLoad[0]+masksToLoad[1]+1) ){
// 		chooseFront();
// 	}
// }

// function redrawAll(whichSide){
// 	//rysuje bazowy obrazek
	
// 	//alert('redrawAll');
	
// 	ctxMain.clearRect(0, 0, canvasMain.width, canvasMain.height);
// 	//if( whichSide === 0 )
// 	ctxMain.drawImage(imgsMain[whichSide], 0, 0);
	
// 	// rysuje pasy
// 	var imageMainData = ctxMain.getImageData(0,0,canvasMain.width, canvasMain.height);
// 	  var dataMain = imageMainData.data;

// 	  for( var i = 0 ; i < masksToLoad[whichSide] ; ++i ){

// 		  //alert('redrawAll s ' + i);
		  
// 		  var imgmask = imgsMasks[whichSide][i];
// 		  var canvasmask = canvasesMasks[whichSide][i];
// 		  var ctxmask = ctxsMasks[whichSide][i]; 
		  
// 		  ctxmask.drawImage(imgmask, 0, 0);

// 		  var imageMaskData = ctxmask.getImageData(0,0,canvasmask.width, canvasmask.height);
// 		  var dataMask = imageMaskData.data;
	
// 		  var colR = colRs[whichSide][i]/255;
// 		  var colG = colGs[whichSide][i]/255;
// 		  var colB = colBs[whichSide][i]/255;

// 		  for (var pix = 0; pix < dataMain.length; pix += 4) {
// 		      if( dataMask[pix + 3] > 0 )
// 		      { 
// 			      dataMain[pix]   *= ( (dataMain[pix]/255)   * colR);
// 			      dataMain[pix+1] *= ( (dataMain[pix+1]/255) * colG);
// 			      dataMain[pix+2] *= ( (dataMain[pix+2]/255) * colB);
// 		      }
// 		  }
// 		  ctxMain.putImageData(imageMainData, 0, 0);
// 		  canvasMain.style.display = 'inherit';

// 		  //alert('redrawAll f ' + i);
// 	  }
// }

// function onMouseMove(event){
// 	var msg = "";
// 	var parentOffset = $(this).parent().offset(); 
// 	lastMousePosX = Math.floor( event.pageX - parentOffset.left );
// 	lastMousePosY = Math.floor( event.pageY - parentOffset.top );
// 	msg += "    " + lastMousePosX + ", " + lastMousePosY;
	  
// 	$( "#color" ).text( msg );
// }

// function myRand(min,max){
// 	return Math.floor((Math.random() * max) + min);
// }

// function onMouseDown(){
// 	if( choosedColorSample == 0 ) return;

// 	for( var i = 0 ; i < masksToLoad[frontOrBack] ; ++i ){

// 		var pixel = ctxsMasks[frontOrBack][i].getImageData(lastMousePosX,lastMousePosY,1,1);
// 		var data = pixel.data;
		
// 		if( data[3] > 2 ){
						
// 			var cc = $(choosedColorSample).css("background-color");
// 			var ccc = colorToInts( cc ); 

// 			colRs[frontOrBack][i] = ccc[0];
// 			colGs[frontOrBack][i] = ccc[1];
// 			colBs[frontOrBack][i] = ccc[2];
			
// 			redrawAll(frontOrBack);

// 			return;
// 		} 
// 	}
// }

// function activateColorChooseSample(colorSample){
// 	$(colorSample).animate({opacity: 0.5}, 350,
// 		function() {
// 			$(colorSample).animate({opacity: 1.0}, 350, function() { activateColorChooseSample(colorSample); } ); 
// 		} 
// 	);
// }

// function deactivateColorChooseSample(colorSample){
// 	if( colorSample == 0 ) return; 
// 	$(colorSample).stop();
// 	$(colorSample).animate( {opacity: 1.0}, 350);
// }

// function colorChoose(){
// 	if( choosedColorSample == this ) return;
// 	deactivateColorChooseSample(choosedColorSample);
// 	choosedColorSample = this; 
// 	activateColorChooseSample(choosedColorSample);
// }

// function colorToInts(color) {
//     if (color.substr(0, 1) === '#') {
//         return color;
//     }
    
//     var digits = /(.*?)rgb\((\d+), (\d+), (\d+)\)/.exec(color);

//     var red = parseInt(digits[2]);
//     var green = parseInt(digits[3]);
//     var blue = parseInt(digits[4]);

//     return [red,green,blue];
// };

function colorSampleOnMouseEnter(){
	var sampleID = $(this).attr('id');
	//console.log( sampleID );
	colorSampleBig(sampleID,true);
}

function colorSampleOnMouseLeave(){
	var sampleID = $(this).attr('id');
	//console.log( sampleID );
	colorSampleBig(sampleID,false);
}

function colorSampleBig(sampleID,show){
	//artChooseColorSample_
	var bigSampleID = '#artChooseColorSampleBig_' + sampleID.substr(21);
	console.log( bigSampleID );
	if( show )
		$(bigSampleID).show();
	else
		$(bigSampleID).hide();
}

$(document).ready(function() {
    menuready();
    //echo '<div id="artChooseColorSampleBig_'.$i.'" class="artChooseColorSampleBig"></div>';
	$('.artChooseColorSampleBig').hide();

    //alert('asdf');
    //console.log('asd');
    //alert( 'ready s' );
    
//     canvasMain = document.getElementById('canvasMain');
// 	ctxMain = canvasMain.getContext('2d');
	
//     colRs.push([255,128,0,128,255]); //new Array();
//     colGs.push([128,0,255,128,0]);//new Array();
//     colBs.push([0,128,255,128,0]);//new Array();

//     colRs.push([60,120,180,240]); //new Array();
//     colGs.push([60,120,180,240]);//new Array();
//     colBs.push([60,120,180,240]);//new Array();
    
// 	for( var s = 0 ; s < 2 ; ++s ){

// 		imgsMain.push( new Image() );
//		imgsMain[s].src = '<?php echo base_url('/resources/images/content/young/choosetype'); ?>' + '/type04_'+s+'_org.png';
// 	    imgsMain[s].onload = imgMaskLoadCounter;

// 	    imgsMain[s].style.display = 'none';

// 	    canvasesMasks.push( new Array() );
// 		ctxsMasks.push( new Array() );
// 		imgsMasks.push( new Array() );
		
// 	 for( var i = 0 ; i < masksToLoad[s] ; ++i ){
// 		 //alert('a');
// 		  	imgsMasks[s].push( new Image() );
// 		  	//alert('a2');	  
//		  	imgsMasks[s][i].src = '<?php echo base_url('resources/images/content/young/choosetype'); ?>'+'/type04_'+s+'_pas'+(i+1)+'.png';

		  	
// 		  	canvasesMasks[s].push( document.getElementById('canvasMask'+s+'_'+(i+1)) );
// 		  	ctxsMasks[s].push( canvasesMasks[s][i].getContext('2d') );

// 		  	//alert('a3');
		  	
// 		  	imgsMasks[s][i].onload = imgMaskLoadCounter;

// 		  	//alert('b');
		  	
// 		  	imgsMasks[s][i].style.display = 'none';
// 			canvasesMasks[s][i].style.display = 'none';

// 			//alert('c');
// 		  }
// 	}
	
// 	color = document.getElementById('color');

// 	//alert( 'ready f' );
	
// 	$( "#canvasMain" ).on('mousemove',onMouseMove);
// 	$( "#canvasMain" ).on('mousedown',onMouseDown);

// 	$('.youngChooseColorSample').on('mousedown',colorChoose);

// 	$('#chooseFront').on('click',chooseFront);
// 	$('#chooseBack').on('click',chooseBack);

//echo '<div id="artChooseColorSample_'.$i.'" class="artChooseColorSample" style="background-color: #'.$colors[$i].'">';
//echo '<div id="artChooseColorSampleBig_'.$i.'" class="artChooseColorSampleBig"></div>';
				
 	$( ".artChooseColorSample" ).on('mouseenter',colorSampleOnMouseEnter);
 	$( ".artChooseColorSample" ).on('mouseleave',colorSampleOnMouseLeave);

});
</script>
