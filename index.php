<!doctype HTML>
<html>
<!--
<a-scene embedded arjs>

<a-entity camera></a-entity>
-->
<script src="https://aframe.io/releases/0.9.1/aframe.min.js"></script>
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.7.2/aframe/build/aframe-ar.js"></script>
  <body style='margin : 0px; overflow: hidden;'>
	<a-scene embedded arjs='sourceType: webcam; debugUIEnabled: false;' renderer='logarithmicDepthBuffer: true;'>
	  <a-assets>
		<a-asset-item id="crate-obj" src="Reuben_Sandwich/13931_Reuben_Sandwich_on_Plate_v2_L1.obj"></a-asset-item>
		<a-asset-item id="crate-mtl" src="Reuben_Sandwich/13931_Reuben_Sandwich_on_Plate_v2_L1.mtl"></a-asset-item>
		<a-asset-item id="crate-obj2" src="hotdog/objHotdog.obj"></a-asset-item>
		<a-asset-item id="crate-mtl2" src="hotdog/objHotdog.mtl"></a-asset-item>
	  </a-assets>

      <a-marker preset="hiro">
		<a-obj-model src="#crate-obj2" mtl="#crate-mtl2" scale=".2 .2 .2" rotation="0 0 0"></a-obj-model>
      </a-marker>	  
	
	<a-marker preset='kanji'>
		<a-obj-model src="#crate-obj" mtl="#crate-mtl" scale=".1 .1 .1" rotation="-90 0 0"></a-obj-model>
	</a-marker>
    <a-marker-camera camera="far:100000; near:0.01" >
    </a-scene>
  </body>
</html>