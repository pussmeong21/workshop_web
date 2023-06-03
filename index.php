<html>
<head>
<title>anjay</title> 
<link href ="web.css" rel="stylesheet">

</head>
<body>
<div class="header">
header
<div class= "container">
    content
    <form method = "post" action = "process.php">
        <label> input content 1 </label>
    <input type = "text" name = "content[]" placeholder = "content 1">
        <label> input content 2 </label>
    <input type = "text" name = "content[]" placeholder = "content 2">
        <label> input content 3 </label>
    <input type = "text" name = "content[]" placeholder = "content 3">
        <label> input content 4 </label>
    <input type = "text" name = "content[]" placeholder = "content 4">
    <input type = "submit" value ="submit">
</from>
<div id="content-js"></div>
<input type = "text" id= "input_js">
</div>
<script src = "web.js"></script>
</body>
</html>