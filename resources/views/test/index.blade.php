<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>2-Row Rack</title>
<style>
    /* Basic styling */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    .rack {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin: 20px auto;
        max-width: 800px;
    }
    .rack .item {
        width: 200px;
        height: 100px;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        margin: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
</head>
<body>

<div class="rack">
    <!-- First row -->
    <div class="item">Item 1</div>
    <div class="item">Item 2</div>
</div>

<div class="rack">
    <!-- Second row -->
    <div class="item">Item 3</div>
    <div class="item">Item 4</div>
</div>

</body>
</html>
