<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WTS Wiki</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/Base_Site_CSS.css">
    <link rel="stylesheet" href="Assets/CSS/Style_Index.css">
    <link rel="icon" type="image/png" href="favicon.ico" sizes="32x32" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div>
        <div class="static"></div>
        <div class="top_section">
                <img src="Assets/Misc/Site Title.png" alt="SITE TITLE">
        </div>
        <p>Welcome to the Worst Time Simulator 2's<br>Official Wiki/Manual!</p>
        <p class="MenuButtons" style="font-size:2.85vh; background-color: rgba(0,0,0,0.15);">&lt;|
            <a href="Docs/HowToSetup.php">&lt;How to Setup?&gt;<audio src="Assets/Sounds/Select.mp3" id="beep"></audio></a> |
        
            <a>&lt;Attack Functions&gt;</a> |&gt;
        </p>

        <div class="mid_section">
            mmm, put in text in here fredo when im done with this<br>im too lazy<br>literally<br>‎ <br>
            I'm outta ideas<br>
            <img src = "https://tenor.com/view/don-quixote-limbus-company-gif-7604350933643036789.gif">

        </div>

        
            <div class="bottom_section">

                <a href="https://github.com/Omegafredo/worst-time-simulator-2/releases/">
                    <img alt="GitHub Release" src="https://img.shields.io/github/v/release/Omegafredo/worst-time-simulator-2?display_name=release&style=for-the-badge&logo=github&labelColor=darkslategray&color=darkblue"> 
                </a>
                <a href="https://github.com/Omegafredo/worst-time-simulator-2/stargazers">
                    <img alt="GitHub Repo stars" src="https://img.shields.io/github/stars/Omegafredo/worst-time-simulator-2?style=for-the-badge&logo=github&labelColor=darkslategray&color=darkgoldenrod">
                </a>
                <a href="https://github.com/Omegafredo/worst-time-simulator-2/watchers">
                    <img alt="GitHub watchers" src="https://img.shields.io/github/watchers/Omegafredo/worst-time-simulator-2?style=for-the-badge&logo=github&labelColor=darkslategray&color=red">
                </a>
                
            </div>

        </div>

        </div>

    </div>
<script>

$(".MenuButtons a").each(function(i) {
            if (i != 0) {
            $("#beep")
                .clone()
                .attr("id", "beep" + i)
                .appendTo($(this));
            }
            $(this).data("beeper", i);
        })

        .mouseenter(function() {
            var Audio = $("#beep" + $(this).data("beeper"))[0]
            Audio.volume = 0.1
            Audio.play()
        });
        $("#beep").attr("id", "beep0");

</script>

</body>
</html>