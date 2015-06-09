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

var colors = ['#f5989d','#7accc8','#ffcc00','#111111','#448cca','#ffffff','#598527'];

var ready = false;
var imgsToLoad = 2;
var loadedImgs = 0;

function imgLoadCounter(){
	loadedImgs++;
	if( loadedImgs == imgsToLoad ){
		redrawAll('rgb(255, 0, 0)');
	}
}

function redrawAll(color){
	if( !color ) return;
	
	ctxMain.clearRect(0, 0, canvasMain.width, canvasMain.height);
 	ctxMain.drawImage(imgMain, 0, 0);

 	ctxMask.clearRect(0, 0, canvasMask.width, canvasMask.height);
 	ctxMask.drawImage(imgMask, 0, 0);

 	var imageMainData = ctxMain.getImageData(0,0,canvasMain.width, canvasMain.height);
	var dataMain = imageMainData.data;

 	var imageMaskData = ctxMask.getImageData(0,0,canvasMask.width, canvasMask.height);
	var dataMask = imageMaskData.data;

	var colorRGB = colorToInts(color);
	console.log(colorRGB);
	
	var colR = colorRGB[0]/255;
	var colG = colorRGB[1]/255;
 	var colB = colorRGB[2]/255;

 	for (var pix = 0; pix < dataMain.length; pix += 4) {
	    if( dataMask[pix + 3] > 0 ){ 
		    dataMain[pix]   *= ( (dataMain[pix]/255)   * colR);
		    dataMain[pix+1] *= ( (dataMain[pix+1]/255) * colG);
			dataMain[pix+2] *= ( (dataMain[pix+2]/255) * colB);
		}
 	}
	ctxMain.putImageData(imageMainData, 0, 0);
	canvasMain.style.display = 'inherit';
}

 function colorChoose(){
	 console.log( $(this) );
	 // artChooseColorSampleDesc_
	 var sampleDescID = $(this).attr('id');
	 //console.log( sampleID );
	 
	 var sampleID = '#artChooseColorSample_' + sampleDescID.substr(25);
	 //console.log( sampleID );

	 var colorRGB = $(sampleID).css("background-color");
	 //console.log(cc);
	 
	 redrawAll(colorRGB);
}

function colorToInts(color) {
    if (color.substr(0, 1) === '#') {
        return color;
    }
    console.log(color);
    
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
});
</script>
