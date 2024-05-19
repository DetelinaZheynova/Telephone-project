<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
    <title>Въвеждане на информация за мобилен телефон</title>
</head>
<body>
   <h2>Въвеждане на информация за мобилен телефон</h2>
<form action="submit_phone.php" method="post">
    <label for="brand">Марка:</label><br>
    <input type="text" id="brand" name="brand"><br>
    <label for="model">Модел:</label><br>
    <input type="text" id="model" name="model"><br>
    <label for="camera">Камера:</label><br>
    <input type="text" id="camera" name="camera"><br>
    <label for="os">Операционна система:</label><br>
    <input type="text" id="os" name="os"><br>
    <label for="internal_memory">Вътрешна памет:</label><br>
    <input type="text" id="internal_memory" name="internal_memory"><br>
    <label for="ram">RAM:</label><br>
    <input type="text" id="ram" name="ram"><br>
    <label for="image_path">Път до снимката:</label><br>
    <input type="text" id="image_path" name="image_path"><br><br>
    <input type="submit" value="Запази">
</form>
<style>   
  .tooltip {text-align: center;}
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 400px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  top: 150%;
  left: 50%;
  margin-left: -60px;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  bottom: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: transparent transparent black transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>
<br>
    <div class="tooltip">Hints
  <span class="tooltiptext"><ul>
      <li>Въведената нформацията за Път до снимката трябва да започва с Images/</li>
      </ul></span>
</div>
    <br></br>
    <a href="index.php">Back</a>
</body>
</html>

