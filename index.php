<!doctype HTML>
<html>
<script src="https://aframe.io/releases/0.9.1/aframe.min.js"></script>
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.7.2/aframe/build/aframe-ar.js"></script>
  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs>
      <a-marker preset="hiro">
          <a-box position='0 0.5 0' material='color: yellow;'></a-box>
      </a-marker>
      <a-entity camera></a-entity>
    </a-scene>
  </body>
</html>