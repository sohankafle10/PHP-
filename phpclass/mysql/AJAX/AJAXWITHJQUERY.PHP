<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AJAX Example</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $("button").click(function () {
                $.get("data.php", function (data, status) {
                    $("#result").html(data);
                });
            });
        });
    </script>