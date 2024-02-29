<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interactive Room Blueprint</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    .grid {
        display: grid;
        grid-template-columns: repeat(10, 1fr);
        grid-template-rows: repeat(10, 1fr);
        height: 80vh;
    }
    .cell {
        border: 1px solid #ccc;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .wall {
        background-color: #333;
    }
    .door {
        background-color: #aaa;
    }
    .window {
        background-color: #8af;
    }
</style>
</head>
<body>
<div class="grid">
    <!-- Rows -->
    <div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div>
    <div class="cell wall"></div><div class="cell wall"></div><div class="cell wall"></div><div class="cell wall"></div><div class="cell wall"></div><div class="cell wall"></div><div class="cell wall"></div><div class="cell wall"></div><div class="cell wall"></div><div class="cell wall"></div>
    <div class="cell wall"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell wall"></div><div class="cell wall"></div>
    <div class="cell wall"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell wall"></div><div class="cell wall"></div>
    <div class="cell wall"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell wall"></div><div class="cell wall"></div>
    <div class="cell wall"></div><div class="cell wall"></div><div class="cell wall"></div><div class="cell wall"></div><div class="cell wall"></div><div class="cell wall"></div><div class="cell wall"></div><div class="cell wall"></div><div class="cell wall"></div><div class="cell wall"></div>
</div>
</body>
</html>
