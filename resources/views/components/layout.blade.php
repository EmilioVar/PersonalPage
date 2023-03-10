<!--

  _  ____                _                                                _      _ 
 (_)/ ___|_ __ __ _  ___(_) __ _ ___   _ __   ___  _ __  __   _____ _ __ (_)_ __| |
 | | |  _| '__/ _` |/ __| |/ _` / __| | '_ \ / _ \| '__| \ \ / / _ \ '_ \| | '__| |
 | | |_| | | | (_| | (__| | (_| \__ \ | |_) | (_) | |     \ V /  __/ | | | | |  |_|
 |_|\____|_|  \__,_|\___|_|\__,_|___/ | .__/ \___/|_|      \_/ \___|_| |_|_|_|  (_)
                                      |_|                                          

si estas viendo esto es porque eres desarrollad@r, un reclutador/a, ambas cosas o 
ninguna, ante todo quiero agradecerte que dediques algo de tiempo a poder leer mi presentación.

Es una humilde presenstación, sin pretensiones de ser un gran escaparate, y espero poder ir mejorándola poco a poco añadiendo toda la experiencia que vaya consiguiendo a lo largo de los años, algo que espero que, si es posible, me ayudes :).

Si tienes cualquier consulta o puedo ayudarte como desarrollador, estoy a tu plena disposición.

animo! adelante siempre dessarollador@!

-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon"
        href="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/devicon/devicon-original.svg" />
    <!-- <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css"> -->


    <!-- google font 8bit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>EmilioVM About</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    {{ $slot }}
    <x-footer />
<!-- SCRIPTS -->

<!-- Add jquery cdn -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<!-- Momentsjs -->
<script src="https://rawgit.com/moment/moment/2.2.1/min/moment.min.js"></script>
<!-- personal javascript -->
@vite(['resources/js/app.js','resources/js/javascript.js'])
</body>

</html>
