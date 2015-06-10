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

var imgMain = new Image();
var canvasMain;
var ctxMain;

var imgMask = new Image();
var canvasMask;
var ctxMask;

var imgPattern = new Image();
var canvasPattern;
var ctxPattern;

var colors = ['#f5989d','#7accc8','#ffcc00','#111111','#448cca','#ffffff','#598527'];
var patterns = ['desen_1.png','desen_2.png','desen_3.png','desen_4.png',
				'desen_1.png','desen_2.png','desen_3.png','desen_4.png',
				'desen_1.png','desen_2.png','desen_3.png','desen_4.png'];

var choosenColor = 'rgb(89, 133, 39)';
var choosenPattern = '';

var ready = false;
var imgsToLoad = 2;
var loadedImgs = 0;

function imgLoadCounter(){
	loadedImgs++;
	if( loadedImgs == imgsToLoad ){
		redrawAll(choosenColor,false);
	}
}

function redrawAll(color,withPattern){
	if( !color ) return;
	
	ctxMain.clearRect(0, 0, canvasMain.width, canvasMain.height);
 	ctxMain.drawImage(imgMain, 0, 0);

 	ctxMask.clearRect(0, 0, canvasMask.width, canvasMask.height);
 	ctxMask.drawImage(imgMask, 0, 0);

 	if( withPattern ){
 	 	//console.log('jest pattern');
 		ctxPattern.clearRect(0, 0, canvasPattern.width, canvasPattern.height);
 	 	ctxPattern.drawImage(imgPattern, 0, 0);
 	}else{
 	 	//console.log('nie ma patternu');
 	}
 	
 	var imageMainData = ctxMain.getImageData(0,0,canvasMain.width, canvasMain.height);
	var dataMain = imageMainData.data;

 	var imageMaskData = ctxMask.getImageData(0,0,canvasMask.width, canvasMask.height);
	var dataMask = imageMaskData.data;

	var imagePatternData;
	var dataPattern;
	if( withPattern ){
		imagePatternData = ctxPattern.getImageData(0,0,canvasPattern.width, canvasPattern.height);
		dataPattern = imagePatternData.data;
	}
	
	var colorRGB = colorToInts(color);
	//console.log(colorRGB);
	
	var colR = colorRGB[0]/255;
	var colG = colorRGB[1]/255;
 	var colB = colorRGB[2]/255;

 	if( withPattern ){
 		for (var pix = 0; pix < dataMain.length; pix += 4) {
 			if( dataMask[pix + 3] > 0 ){
			    if( dataPattern[pix + 3] > 0 ){ 
				    dataMain[pix]   *= ( (dataMain[pix+0]/255) * (dataPattern[pix + 0]/255) );
				    dataMain[pix+1] *= ( (dataMain[pix+1]/255) * (dataPattern[pix + 1]/255) );
					dataMain[pix+2] *= ( (dataMain[pix+2]/255) * (dataPattern[pix + 2]/255) );
				} else {
					dataMain[pix]   *= ( (dataMain[pix]/255)   * colR);
				    dataMain[pix+1] *= ( (dataMain[pix+1]/255) * colG);
					dataMain[pix+2] *= ( (dataMain[pix+2]/255) * colB);
				}
 			}
	 	}
 	}else{
	 	for (var pix = 0; pix < dataMain.length; pix += 4) {
		    if( dataMask[pix + 3] > 0 ){ 
			    dataMain[pix]   *= ( (dataMain[pix]/255)   * colR);
			    dataMain[pix+1] *= ( (dataMain[pix+1]/255) * colG);
				dataMain[pix+2] *= ( (dataMain[pix+2]/255) * colB);
			}
	 	}
 	}
	ctxMain.putImageData(imageMainData, 0, 0);
	canvasMain.style.display = 'inherit';
}

 function colorChoose(){
	 //console.log( $(this) );
	 // artChooseColorSampleDesc_
	 var sampleDescID = $(this).attr('id');
	 //console.log( sampleID );
	 
	 var sampleID = '#artChooseColorSample_' + sampleDescID.substr(25);
	 //console.log( sampleID );

	 var colorRGB = $(sampleID).css("background-color");
	 //console.log(cc);
	 
	 redrawAll(colorRGB);
}

function patternChoose(){
	//artChoosePatternMiniView
	var patternID = $(this).attr('id');
	patternID = patternID.substr(8);
	//console.log( patternID );
	//console.log( patterns[patternID] );

	imgPattern.src = '<?php echo base_url('/resources/images/content/art/choosepattern/'); ?>' + '/' + patterns[patternID];
	imgPattern.onload = patternReady;

	choosenPattern = patterns[patternID];
	//console.log( patterns[patternID] );
}

function patternReady(){
	//console.log( patternReady );
	redrawAll(choosenColor,true)
}

function colorToInts(color) {
    if (color.substr(0, 1) === '#') {
        return color;
    }
    //console.log(color);
    
    var digits = /(.*?)rgb\((\d+), (\d+), (\d+)\)/.exec(color);

    var red = parseInt(digits[2]);
    var green = parseInt(digits[3]);
    var blue = parseInt(digits[4]);

    return [red,green,blue];
};

function colorSampleOnMouseEnter(){
	var sampleID = $(this).attr('id');
	colorSampleBig(sampleID,true);
}

function colorSampleOnMouseLeave(){
	var sampleID = $(this).attr('id');
	colorSampleBig(sampleID,false);
}

function colorSampleBig(sampleID,show){
	var bigSampleID = '#artChooseColorSampleBig_' + sampleID.substr(21);
	if( show ) $(bigSampleID).show();
	else $(bigSampleID).hide();
}

$(document).ready(function() {
    menuready();
    
    $( ".artChooseColorSample" ).on('mouseenter',colorSampleOnMouseEnter);
 	$( ".artChooseColorSample" ).on('mouseleave',colorSampleOnMouseLeave);
 	$('.artChooseColorSampleDesc').on('click',colorChoose);
    $('.artChooseColorSampleBig').hide();
    $('.artChoosePatternMiniView').on('click',patternChoose);
    
    canvasMain = document.getElementById('canvasMain');
 	ctxMain = canvasMain.getContext('2d');
	    
	imgMain.src = '<?php echo base_url('/resources/images/content/art/choosecolor/base.png'); ?>';
	imgMain.onload = imgLoadCounter;
	imgMain.style.display = 'none';

	canvasMask = document.getElementById('canvasMask');
	canvasMask.style.display = 'none';
	ctxMask = canvasMask.getContext('2d');
	
	imgMask.src = '<?php echo base_url('/resources/images/content/art/choosecolor/base_mask.png'); ?>';
	imgMask.onload = imgLoadCounter;
	imgMask.style.display = 'none';

	canvasPattern = document.getElementById('canvasPattern');
	canvasPattern.style.display = 'none';
	ctxPattern = canvasPattern.getContext('2d');
	
	//imgPattern.src = '<?php echo base_url('/resources/images/content/art/choosecolor/base_mask.png'); ?>';
	//imgPattern.onload = imgLoadCounter;
	imgPattern.style.display = 'none';
});
</script>
