<html>
<head>
<style>
  #light {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background-color: gray;
    margin: auto;
  }
</style>
<script>
  function toggleLight() {
    var light = document.getElementById("light");
    if (light.style.backgroundColor == "gray") {
      light.style.backgroundColor = "red";
    } else {
      light.style.backgroundColor = "gray";
    }
  }
</script>
</head>
<body>
<h3>Ấn vào hình tròn xem đi haha</h3>
<div id="light" onclick="toggleLight()"></div>
</body>
</html>
