<!DOCTYPE html>
<script src="vendor/aframe/build/aframe.min.js"></script>
<!-- include aframe-ar.js -->
<script src="../build/aframe-ar.js"></script>

<body style='margin : 0px; overflow: hidden; font-family: Monospace;'><div style='position: fixed; top: 10px; width:100%; text-align: center; z-index: 1;'>
	<a href="https://github.com/jeromeetienne/AR.js/" target="_blank">AR.js</a> - example for a-frame
	<br/>
	Contact me any time at <a href='https://twitter.com/jerome_etienne' target='_blank'>@jerome_etienne</a>
</div>
	<a-scene embedded arjs='sourceType: webcam; detectionMode: mono_and_matrix; matrixCodeType: 3x3;'>
		<!-- handle unknown marker -->
		<!-- <a-marker type='unknown'>
			<a-box depth="1" height="1" width="1" position='0 0.5 0' material='opacity: 0.5; side:double; color:blue;'></a-box>
		</a-marker> -->

		<!-- handle hiro marker -->
		<a-marker preset='hiro'>
			<a-box position='0 0.5 0' material='opacity: 0.5; side: double;color:red;'>
				<a-torus-knot radius='0.26' radius-tubular='0.05'
				animation="property: rotation; to:360 0 0; dur: 5000; easing: linear; loop: true">
				</a-torus-knot>
			</a-box>
		</a-marker>

		<!-- add a simple camera -->
		<a-entity camera></a-entity>
	</a-scene>
</body>
</html>