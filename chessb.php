<!DOCTYPE html>
<html>
<head>
  <title>Chessboard</title>
  <style>
    table {
      border-collapse: collapse;
      width: 240px; /* 8 cells * 30px = 240px */
    }
    td {
      height: 30px;
      width: 30px;
    }
    .white {
      background-color: white;
    }
    .black {
      background-color: black;
    }
  </style>
</head>
<body>

  <table id="chessboard"></table>

  <script>
    const table = document.getElementById("chessboard");

    for (let row = 0; row < 8; row++) {
      const tr = document.createElement("tr");

      for (let col = 0; col < 8; col++) {
        const td = document.createElement("td");

        // Alternate colors
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
