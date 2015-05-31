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

var imgmask = new Image();
var canvasmask;
var ctxmask;

var color;

function pick(event) {
	var x = event.layerX;
	var y = event.layerY;
	
	var pixel = ctxmain.getImageData(x, y, 1, 1);
	  
	var data = pixel.data;
	var rgba = 'rgba(' + data[0] + ',' + data[1] + ',' + data[2] + ',' + data[3] + ')';
	color.textContent = " " + x + " " + y + " " + rgba;	  
}
	
function imgMainReady() {
	
	  ctxmain.drawImage(imgmain, 0, 0);
	  imgmain.style.display = 'none';

	  //var imageData = ctxmain.getImageData(0,0,canvasmain.width, canvasmain.height);
	  //var data2 = imageData.data;
	  
	  //for (var i = 0; i < data2.length; i += 4) {
	      //data2[i]     = 0;     // red
	      //data2[i + 1] = data2[i + 1] * xyp; // green
	      //data2[i + 2] = data2[i + 2] * xyp; // blue
	      //data2[i + 3] = 64; // blue
	  //}
	  //ctxmain.putImageData(imageData, 0, 0);

	  imgmask.src = '<?php echo base_url('resources/images/page/logo.png'); ?>'; //'https://mdn.mozillademos.org/files/5397/rhino.jpg';
	  canvasmask = document.getElementById('canvasmask');
	  ctxmask = canvasmask.getContext('2d');
	  imgmask.onload = imgMaskReady;
	  //alert("qwer");
};


function imgMaskReady() {
	  ctxmask.drawImage(imgmask, 0, 0);
	  imgmask.style.display = 'none';
	  canvasmask.style.display = 'none';
	  
	  var imageMainData = ctxmain.getImageData(0,0,canvasmain.width, canvasmain.height);
	  var dataMain = imageMainData.data;

	  var imageMaskData = ctxmask.getImageData(0,0,canvasmask.width, canvasmask.height);
	  var dataMask = imageMaskData.data;
	  
	  for (var i = 0; i < dataMain.length; i += 4) {
	      //dataMain[i + 3] = dataMask[i + 3]; // alpha
	      if( dataMask[i + 3] > 0 )
	      { 
	    	  dataMain[i+3] = 0;

		      //dataMain[i]   *= (dataMask[i] / 512);
		      //dataMain[i+1] *= (dataMask[i+1] / 512);
		      //dataMain[i+2] *= (dataMask[i+2] / 512);
	      }
	  }
	  ctxmain.putImageData(imageMainData, 0, 0);

	  
};

$(document).ready(function() {
    menuready();

    imgmain.src = '<?php echo base_url('resources/images/content/young/choosetype/type04.png'); ?>'; //'https://mdn.mozillademos.org/files/5397/rhino.jpg';
    canvasmain = document.getElementById('canvasmain');
	ctxmain = canvasmain.getContext('2d');
	imgmain.onload = imgMainReady;

	color = document.getElementById('color');
	//canvasmain.addEventListener('mousemove', pick);
	
	$( "#canvasmain" ).mousemove(function( event ) {
  		var msg = "";
  		//msg += event.clientX + ", " + event.clientY;
  		//msg += " " + event.pageX + ", " + event.pageY;

  		var parentOffset = $(this).parent().offset(); 
  		var relX = event.pageX - parentOffset.left;
  	   	var relY = event.pageY - parentOffset.top;
  	  	msg += "    " + relX + ", " + relY;
  	  
  		$( "#color" ).text( msg );
	});
	
    //draw();
});
</script>
