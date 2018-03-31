<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>A Nested List</h2>
    <p>List can be nested (lists inside lists):</p>

    <ul>
    <li>Coffee</li>
    <li>Tea
        <ul>
        <li>Black tea</li>
        <li>Green tea</li>
        </ul>
    </li>
    <li>Milk</li>
    </ul>

    <h2>My Nested List</h2>
    <div id="nested-list"></div>
<script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
</script><!--Скачай нормальный jQuery -->
<script>
    $(document).ready(function() {
        $.ajax({
            method: "GET",
            url: "/categories/givenestedlist",
            cache: false})
        .done(function(msg){
            parseData(msg);
        });

        function parseData(msg) {
            console.log(msg);
            document.getElementById('nested-list').innerHTML = createHTML(msg, true);
        }

        function createHTML(json, isArray) {
            var html = '<ul>';
            for(var key in json){
                if(typeof json[key] == 'object'){
                    
                    html += '<li>' + (!isArray ? '<strong>'+ key +'</strong>' : '') + '</li>' + createHTML(json[key], (json[key] instanceof Array ? 1 : 0));
                } else {
                    html += '<li>'+ json[key] +'</li>';
                }
            }
            return html+'</ul>';

        }
    });
</script>
</body>
</html>