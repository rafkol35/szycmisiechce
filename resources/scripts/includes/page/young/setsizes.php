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

var imgsMain = new Array();
var canvasMain;
var ctxMain;

var imgsMasks = new Array();
var canvasesMasks = new Array();
var ctxsMasks = new Array();

var colRs = new Array();
var colGs = new Array();
var colBs = new Array();

var color;

var ready = false;
var masksToLoad = [5,4];
var loadedMasks = 0;

var lastMousePosX = 0;
var lastMousePosY = 0;

var choosedColorSample = 0;

var frontOrBack = -1;

function chooseFront(){
	if( frontOrBack == 0 ) return;
	frontOrBack = 0;
	redrawAll(frontOrBack);
}
function chooseBack(){
	if( frontOrBack == 1 ) return;
	frontOrBack = 1;
	redrawAll(frontOrBack);
}

function imgMaskLoadCounter(){
	loadedMasks++;
	if( loadedMasks == (masksToLoad[0]+masksToLoad[1]+1) ){
		chooseFront();
	}
}

function redrawAll(whichSide){
	//rysuje bazowy obrazek
	
	//alert('redrawAll');
	
	ctxMain.clearRect(0, 0, canvasMain.width, canvasMain.height);
	//if( whichSide === 0 )
	ctxMain.drawImage(imgsMain[whichSide], 0, 0);
	
	// rysuje pasy
	var imageMainData = ctxMain.getImageData(0,0,canvasMain.width, canvasMain.height);
	  var dataMain = imageMainData.data;

	  for( var i = 0 ; i < masksToLoad[whichSide] ; ++i ){

		  //alert('redrawAll s ' + i);
		  
		  var imgmask = imgsMasks[whichSide][i];
		  var canvasmask = canvasesMasks[whichSide][i];
		  var ctxmask = ctxsMasks[whichSide][i]; 
		  
		  ctxmask.drawImage(imgmask, 0, 0);

		  var imageMaskData = ctxmask.getImageData(0,0,canvasmask.width, canvasmask.height);
		  var dataMask = imageMaskData.data;
	
		  var colR = colRs[whichSide][i]/255;
		  var colG = colGs[whichSide][i]/255;
		  var colB = colBs[whichSide][i]/255;

		  for (var pix = 0; pix < dataMain.length; pix += 4) {
		      if( dataMask[pix + 3] > 0 )
		      { 
			      dataMain[pix]   *= ( (dataMain[pix]/255)   * colR);
			      dataMain[pix+1] *= ( (dataMain[pix+1]/255) * colG);
			      dataMain[pix+2] *= ( (dataMain[pix+2]/255) * colB);
		      }
		  }
		  ctxMain.putImageData(imageMainData, 0, 0);
		  canvasMain.style.display = 'inherit';

		  //alert('redrawAll f ' + i);
	  }
}

function myRand(min,max){
	return Math.floor((Math.random() * max) + min);
}

function colorToInts(color) {
    if (color.substr(0, 1) === '#') {
        return color;
    }
    
    var digits = /(.*?)rgb\((\d+), (\d+), (\d+)\)/.exec(color);

    var red = parseInt(digits[2]);
    var green = parseInt(digits[3]);
    var blue = parseInt(digits[4]);

    return [red,green,blue];
};


$(document).ready(function() {
    menuready();

    //alert( 'ready s' );
    
    canvasMain = document.getElementById('canvasMain');
	ctxMain = canvasMain.getContext('2d');
	
    colRs.push([255,128,0,128,255]); //new Array();
    colGs.push([128,0,255,128,0]);//new Array();
    colBs.push([0,128,255,128,0]);//new Array();

    colRs.push([60,120,180,240]); //new Array();
    colGs.push([60,120,180,240]);//new Array();
    colBs.push([60,120,180,240]);//new Array();
    
	for( var s = 0 ; s < 2 ; ++s ){

		imgsMain.push( new Image() );
		imgsMain[s].src = '<?php echo base_url('/resources/images/content/young/choosetype'); ?>' + '/type04_'+s+'_org.png';
	    imgsMain[s].onload = imgMaskLoadCounter;

	    imgsMain[s].style.display = 'none';

	    canvasesMasks.push( new Array() );
		ctxsMasks.push( new Array() );
		imgsMasks.push( new Array() );
		
	 for( var i = 0 ; i < masksToLoad[s] ; ++i ){
		 //alert('a');
		  	imgsMasks[s].push( new Image() );
		  	//alert('a2');	  
		  	imgsMasks[s][i].src = '<?php echo base_url('resources/images/content/young/choosetype'); ?>'+'/type04_'+s+'_pas'+(i+1)+'.png';

		  	
		  	canvasesMasks[s].push( document.getElementById('canvasMask'+s+'_'+(i+1)) );
		  	ctxsMasks[s].push( canvasesMasks[s][i].getContext('2d') );

		  	//alert('a3');
		  	
		  	imgsMasks[s][i].onload = imgMaskLoadCounter;

		  	//alert('b');
		  	
		  	imgsMasks[s][i].style.display = 'none';
			canvasesMasks[s][i].style.display = 'none';

			//alert('c');
		  }
	}
	
	color = document.getElementById('color');

	//alert( 'ready f' );
	
	$('#chooseFront').on('click',chooseFront);
	$('#chooseBack').on('click',chooseBack);
});
</script>
