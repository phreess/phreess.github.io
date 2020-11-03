<?php echo "hello world"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="SHA256 online hash function">
    <title>SHA256 Online
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
  </head>
  <body>
    <div id="body">
      <script src="js/main.js"></script>
      <div id="main">
        <h1>SHA256
        </h1>
        <div class="description">SHA256 online hash function
        </div>
        <div class="input">
          <textarea id="input" placeholder="Input"></textarea>
          <div class="option-block">
            <label for="input-type">Input type</label>
            <select id="input-type">
              <option value="text">Text</option>
              <option value="hex">Hex</option>
            </select>
          </div>
        </div>
        <div class="submit">
          <input id="execute" type="button" value="Hash" class="btn btn-default">
          <label>
            <input id="auto-update" type="checkbox" value="1" checked="checked">Auto Update
          </label>
        </div>
        <div class="output">
          <textarea id="output" placeholder="Output"></textarea>
        </div><br><br></br></br>
		Credit: <a href="https://emn178.github.io/online-tools/sha256.html">https://emn178.github.io/online-tools/sha256.html</a>
      </div>
      
      <script src="https://cdn.jsdelivr.net/gh/emn178/js-sha256/build/sha256.min.js"></script>
      <script>method = sha256;</script>
    </div>
  </body>
</html>