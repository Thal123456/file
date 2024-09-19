<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>HELLO WORLD</div>
    <div class="container">
        <h1>Time Calculator</h1>
        <form id="timeForm">
            <label for="time">Initial Time:</label>
            <input type="time" id="time" name="time" required>

            <label for="days">Number of Days:</label>
            <input type="number" id="days" name="days" min="0" required>

            <button type="submit">Calculate</button>
        </form>

        <div id="result" class="hidden">
            <h2>Result:</h2>
            <p id="newTime"></p>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>