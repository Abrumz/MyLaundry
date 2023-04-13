<html>
<head>
  <style>
    #rain {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
    }

    .drop {
      width: 10px;
      height: 20px;
      position: absolute;
      background-color: blue;
      animation: fall 1s linear infinite;
    }

    @keyframes fall {
      0% {
        transform: translateY(0);
      }
      100% {
        transform: translateY(100%);
      }
    }
  </style>
</head>
<body>
  <div id="rain">
    <div class="drop" style="left: 10%;"></div>
    <div class="drop" style="left: 20%;"></div>
    <div class="drop" style="left: 30%;"></div>
    <div class="drop" style="left: 40%;"></div>
    <div class="drop" style="left: 50%;"></div>
  </div>
</body>
</html>
