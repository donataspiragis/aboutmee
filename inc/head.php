<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X
    -UA-Compatible" content="ie=edge">
    <meta name="author" content="Donatas Piragis">
    <meta name = "description" 
        content = "Coding profile of PHP, Javascript, HTML, CSS" /> 
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="assets/navigation.css">
    <link rel="stylesheet" href="assets/hero.css">
    <link rel="stylesheet" href="assets/services.css">
    <link rel="stylesheet" href="assets/button.css">
    <link rel="stylesheet" href="assets/footer.css">
    <link rel="stylesheet" href="assets/contact.css">
    <link rel="stylesheet" href="assets/history.css">
    <link rel="stylesheet" href="assets/about.css">
    <link rel="stylesheet" href="assets/skills.css">
    <link rel="stylesheet" href="assets/prices.css">
    <link rel="stylesheet" href="assets/game.css">
    <link rel="stylesheet" href="assets/media.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>
    <script>
        function _(id) {return document.getElementById(id);}
        $(document).ready(function () {
        $("#mybtn").click(submitForm);
        function submitForm(){
            var formdata = {
                name: _("name").value,
                phone: _("phone").value,
                email: _("email").value,
                comment: _("comment").value,
                submit: true
           };
           
                $.post('save.php', {data: JSON.stringify(formdata)}, function(callback) {
                    $('#my_form').trigger("reset");
                    alert('Thank you. We will keep in touch soon!');
                }, "json");
            
                return;
        }
        })
    </script>
    <script src="//static.miniclipcdn.com/js/game-embed.js"></script>
    <title>About me</title>
</head>
<body>