<html>
<head>

<script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
<script>

function makeAccel(){
	
	let accelerometer = new LinearAccelerationSensor({frequency: 3});

	accelerometer.addEventListener('reading', e => {
	  //console.log("Acceleration along the X-axis " + accelerometer.x);
	  var xAcc = accelerometer.x.toFixed(0);
	  var xDis = ((1/2)*(xAcc)/(1));
	  alert(xDis);
	  //console.log("Acceleration along the Y-axis " + accelerometer.y);
	  var yAcc = accelerometer.y.toFixed(0);
	  var yDis = ((1/2)*(yAcc)/(1));
	  //console.log("Acceleration along the Z-axis " + accelerometer.z);
	  var zAcc = accelerometer.z.toFixed(0);
	  var zDis = ((1/2)*(zAcc)/(1));
	  alert(zDis);
	  /*
	  alert(xAcc);
	  alert(yAcc);
	  alert(zAcc);
	  */
	  var el = document.querySelector('#rig');
	  el.object3D.position.x += xDis;
	  //el.object3D.position.y += yDis;
	  el.object3D.position.z -= zDis;
	  
	});
	accelerometer.start();

}
AFRAME.registerComponent('foo', {
	init: function () {
		//initialLocation();
		makeAccel();  // Reference to the scene element.
	}	
});
//setInterval(callDeviceAPIs, 1000);
</script>
</head>
<body>

    <a-scene>	
	<a-entity id="rig" foo position="0 1.6 0"  wasd-controls look-controls>
	  <a-entity id="camera" camera></a-entity>
	</a-entity>

      <a-box position="0 0.5 0" rotation="45 45 45" color="black"></a-box>
      <a-box position="3 0.5 0" rotation="0 0 0" color="red"></a-box>
      <a-box position="6 0.5 0" rotation="0 0 0" color="red"></a-box>
      <a-box position="9 0.5 0" rotation="0 0 0" color="red"></a-box>
      <a-box position="-3 0.5 0" rotation="0 0 0" color="blue"></a-box>
      <a-box position="-6 0.5 0" rotation="0 0 0" color="blue"></a-box>
      <a-box position="-9 0.5 0" rotation="0 0 0" color="blue"></a-box>
      <a-box position="0 0.5 3" rotation="0 0 0" color="green"></a-box>
      <a-box position="0 0.5 6" rotation="0 0 0" color="green"></a-box>
      <a-box position="0 0.5 9" rotation="0 0 0" color="green"></a-box>
      <a-box position="0 0.5 -3" rotation="0 0 0" color="yellow"></a-box>
      <a-box position="0 0.5 -6" rotation="0 0 0" color="yellow"></a-box>
      <a-box position="0 0.5 -9" rotation="0 0 0" color="yellow"></a-box>
   </a-scene>
   
</body>
</html>