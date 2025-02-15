<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AJAX Example</title>
    <script>
        function loadData() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "data.php", true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("result").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
    </script>
</head>
<body>
    <h1>AJAX Example</h1>
    <button onclick="loadData()">Load Data</button>
    <div id="result"></div>
</body>
</html>