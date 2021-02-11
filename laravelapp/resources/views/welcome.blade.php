<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <section>
        <video class="video"id="slider" autoplay muted loop> 
            <source src="1.mp4" type="video/mp4">
        </video>
        <ul class="navigation">
           <li onclick="videoUrl('1.mp4')"><img src="1.png" alt=""></li>
           <li onclick="videoUrl('video/2.mp4')"><img src="1.png" alt=""></li>
           <li onclick="videoUrl('video/3.mp4')"><img src="1.png" alt=""></li>
           <li onclick="videoUrl('video/4.mp4')"><img src="1.png" alt=""></li>
           <li onclick="videoUrl('video/5.mp4')"><img src="1.png" alt=""></li>
           <li onclick="videoUrl('video/6.mp4')"><img src="1.png" alt=""></li>
           <li onclick="videoUrl('video/7.mp4')"><img src="1.png" alt=""></li>
           <li onclick="videoUrl('video/8.mkv')"><img src="1.png" alt=""></li>
           <li onclick="videoUrl('video/9.mp4')"><img src="1.png" alt=""></li>
        </ul>
    </section>  
    <script type="text/javascript">
        function videoUrl (getVideo) {
            document.getElementById("slider").src = getVideo;
        }
    </script>
</body>
</html>
