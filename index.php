<!doctype HTML>
<html>
<script src="https://aframe.io/releases/0.9.1/aframe.min.js"></script>
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.7.2/aframe/build/aframe-ar.js"></script>
  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs>
	  <a-assets>
		<a-asset-item id="crate-obj" src="objHotdog.obj"></a-asset-item>
		<a-asset-item id="crate-mtl" src="objHotdog.mtl"></a-asset-item>
	  </a-assets>
	  
      <a-marker preset="hiro">
          <a-box position='0 0.5 0' material='color: yellow;'></a-box>
      </a-marker>
	
	<a-marker preset='kanji'>
		<a-obj-model src="#crate-obj" mtl="#crate-mtl" scale=".1 .1 .1"></a-obj-model>
	</a-marker>
    <a-entity camera></a-entity>
    </a-scene>
	<button style="position:absolute; left:500px; top:500px;" onclick="alert('hello');">Left</button>
	<button>Right</button>	
  </body>
</html>