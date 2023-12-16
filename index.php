<?php

//Explode
$msg = "Hello, I am Thasan";
$array = explode(" ",$msg);
print_r($array);
echo "<br><br>";

//Dynamic youtube thumbnail with function
function video_thumnail($video_url){
    $api = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg";

    $main_url = explode("?si=", $video_url);
    $video_array = explode('/',$main_url[0]);
    $video_id = end($video_array);

    $url = str_replace("<insert-youtube-video-id-here>",$video_id,$api);

    echo "<img src='$url'>";
}
video_thumnail("https://youtu.be/ZsibJDhnUtc?si=fjLDK942tcbr9dw3");
video_thumnail("https://youtu.be/GogcDtMpgMc?si=uOYGNTcltkO8tN22");

?>