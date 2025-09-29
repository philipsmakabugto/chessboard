<!DOCTYPE html>
<html>
<head>
  <title>Chessboard</title>
  <style>
    table {
      border-collapse: collapse;
      width: 240px; 
    }
    td {
      height: 30px;
      width: 30px;
    }
    .white {
      background-color: #ffffff;
    }
    .black {
      background-color: #000000;
    }
  </style>
</head>
<body>

  <h1>CHESSBOARD</h1>

  <table id="chessboard"></table>

  <script>
    const table = document.getElementById("chessboard");

    for (let row = 0; row < 8; row++) {
      const tr = document.createElement("tr");

      for (let col = 0; col < 8; col++) {
        const td = document.createElement("td");

        if ((row + col) % 2 === 0) {
          td.className = "white";
        } else {
          td.className = "black";
        }

        tr.appendChild(td);
      }

      table.appendChild(tr);
    }
  </script>

</body>
</html>
