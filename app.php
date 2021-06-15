<?php
error_reporting(E_ALL);
// print_r("expression");exit;
// error_reporting(0);
error_reporting(E_ERROR);
ini_set('display_errors', 1);

/* cross subdomain cookie sharing config */
//ini_set('session.cookie_domain', '.10times.com');
//session_set_cookie_params(0, '/', '.10times.com');
// echo "TESTING<br>";exit;
//error_reporting(E_ALL);
//var_dump($_GET);
$root = '/home/indiamart/public_html/beta-biztradeshows';
// $event = $stopwatch->stop('foo');
// echo $event->getDuration()." miliseconds";


// $location = '';
$location = getcwd();
$location .='/codeTo' ;
$location_extend = $location.'/data_files/s1/UserDashboardNew/ajax.html.twig';
// print_r($location_extend);exit;
// echo '<a href="'.$location.'">cssFinder</a>';
// echo file_get_contents($location_extend);
// include 'index2.html';
// require 'index_local.html';
require 'page/abc.html';



?>

<html>
<body>
asd
<a target="_blank" href="https://floor.bz/contact?utm_source=evm&utm_medium=Referral&utm_campaign=EVM_FLOOR_Q3_virtual_newBanner1&utm_content=evm_FLOOR_Q3_virtual_newBanner1">

<iframe id="FloorAd_Video" width="100%" height="" src="https://www.youtube.com/embed/jk_IQ5abmgY?&autoplay=1&mute=1&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</a>

<hr>
<a target="_blank" href="https://floor.bz/contact?utm_source=evm&utm_medium=Referral&utm_campaign=EVM_FLOOR_Q1'21_FLOOR_Video_Ad&utm_content=EVM_FLOOR_Q1'21_FLOOR_Video_Ad">
        <iframe src="https://c1.10times.com/videos/fl2.mp4" allow="autoplay">
        <video id="FloorAd_Video" autoplay muted="false" controls loop width="420" preload="metadata" style="width: 100%;">
          <source src="https://c1.10times.com/videos/fl2.mp4" type="video/mp4">
          <p>Your browser does not support HTML5 video.</p>
        </video>
        </iframe>
      </a>

<hr>
<!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <div id="player"></div>

    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: 'jk_IQ5abmgY',
          playerVars: {
            'playsinline': 1
          },
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>



</body>
</html>