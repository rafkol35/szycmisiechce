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

var imgmain = new Image();
var canvasmain;
var ctxmain;

var imgmasks = new Array();
var canvasmasks = new Array();
var ctxmasks = new Array();

var colRs = [255,128,0,128,255]; //new Array();
var colGs = [128,0,255,128,0];//new Array();
var colBs = [0,128,255,128,0];//new Array();

var color;

var ready = false;
var masksToLoad = 5;
var loadedMasks = 0;

var lastMousePosX = 0;
var lastMousePosY = 0;

function pick(event) {
	var x = event.layerX;
	var y = event.layerY;
	
	var pixel = ctxmain.getImageData(x, y, 1, 1);
	  
	var data = pixel.data;
	var rgba = 'rgba(' + data[0] + ',' + data[1] + ',' + data[2] + ',' + data[3] + ')';
	color.textContent = " " + x + " " + y + " " + rgba;	  
}

function imgMaskLoadCounter(){
	loadedMasks++;
	if( loadedMasks == (masksToLoad+1) ){
		redrawAll();
	}
}

function redrawAll(){
	//rysuje bazowy obrazek
	ctxmain.clearRect(0, 0, canvasmain.width, canvasmain.height);
	
	ctxmain.drawImage(imgmain, 0, 0);
	
	// rysuje pasy
	var imageMainData = ctxmain.getImageData(0,0,canvasmain.width, canvasmain.height);
	  var dataMain = imageMainData.data;

	  for( var i = 0 ; i < masksToLoad ; ++i ){
		  var imgmask = imgmasks[i];
		  var canvasmask = canvasmasks[i];
		  var ctxmask = ctxmasks[i]; 
		  
		  ctxmask.drawImage(imgmask, 0, 0);
		  
		  var imageMaskData = ctxmask.getImageData(0,0,canvasmask.width, canvasmask.height);
		  var dataMask = imageMaskData.data;
	
		  var colR = colRs[i]/255;
		  var colG = colGs[i]/255;
		  var colB = colBs[i]/255;
		  
		  for (var pix = 0; pix < dataMain.length; pix += 4) {
		      if( dataMask[pix + 3] > 0 )
		      { 
			      dataMain[pix]   *= ( (dataMain[pix]/255)   * colR);
			      dataMain[pix+1] *= ( (dataMain[pix+1]/255) * colG);
			      dataMain[pix+2] *= ( (dataMain[pix+2]/255) * colB);
		      }
		  }
		  ctxmain.putImageData(imageMainData, 0, 0);
		  canvasmain.style.display = 'inherit';
	  }
}

function onMouseMove(event){
	var msg = "";
	//msg += event.clientX + ", " + event.clientY;
	//msg += " " + event.pageX + ", " + event.pageY;

	var parentOffset = $(this).parent().offset(); 
	lastMousePosX = Math.floor( event.pageX - parentOffset.left );
	lastMousePosY = Math.floor( event.pageY - parentOffset.top );
	msg += "    " + lastMousePosX + ", " + lastMousePosY;
	  
	$( "#color" ).text( msg );
}

function myRand(min,max){
	return Math.floor((Math.random() * max) + min);
}

function onMouseDown(){
	for( var i = 0 ; i < masksToLoad ; ++i ){

		var pixel = ctxmasks[i].getImageData(lastMousePosX,lastMousePosY,1,1);
		var data = pixel.data;
		
		if( data[3] > 2 ){
			colRs[i] = myRand(0, 255);
			colGs[i] = myRand(0, 255);
			colBs[i] = myRand(0, 255);
			redrawAll();
		} 
	}
}

$(document).ready(function() {
    menuready();

    imgmain.src = '<?php echo base_url('resources/images/content/young/choosetype/type04_org.png'); ?>';
    canvasmain = document.getElementById('canvasmain');
	ctxmain = canvasmain.getContext('2d');
	imgmain.onload = imgMaskLoadCounter;

	imgmain.style.display = 'none';
	canvasmain.style.display = 'none';

	 for( var i = 0 ; i < masksToLoad ; ++i ){
		  	imgmasks.push( new Image() );	  
		  	imgmasks[i].src = '<?php echo base_url('resources/images/content/young/choosetype'); ?>'+'/type04_pas'+(i+1)+'.png';
		  	canvasmasks.push( document.getElementById('canvasmask'+(i+1)) );
		  	ctxmasks.push( canvasmasks[i].getContext('2d') );
		  	imgmasks[i].onload = imgMaskLoadCounter;

		  	imgmasks[i].style.display = 'none';
			canvasmasks[i].style.display = 'none';
		  }
	
	color = document.getElementById('color');
	//canvasmain.addEventListener('mousemove', pick);
	
	$( "#canvasmain" ).on('mousemove',onMouseMove);
	$( "#canvasmain" ).on('mousedown',onMouseDown);
});
</script>
