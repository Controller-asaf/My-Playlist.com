<!DOCTYPE html>
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Playlist</title>
<style>
  a:link, a:visited {
  background-color: grey(46, 46, 46);
  color: black;
  border: 2px solid green;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
  color: white;
}
body {
    background-color: grey;
    cursor: url('png-transparent.png'),auto;
}
* {
    box-sizing: border-box;
  }
  
  body {
    margin: 0;
  }
  
  .navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  .navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  .dropdown {
    float: left;
    overflow: hidden;
  }
  
  .dropdown .dropbtn {
    font-size: 16px;  
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font: inherit;
    margin: 0;
  }
  
  .navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 100%;
    left: 0;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content .header {
    background: red;
    padding: 16px;
    color: white;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
  
  /* Create three equal columns that floats next to each other */
  .column {
    float: left;
    width: 33.33%;
    padding: 10px;
    background-color: #ccc;
    height: 250px;
  }
  
  .column a {
    float: none;
    color: black;
    padding: 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  .column a:hover {
    background-color: #ddd;
  }
  
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .column {
      width: 100%;
      height: auto;
    }
  }
  .button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button {
  background-color: grey; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.topright {
  position: absolute;
  top: 0px;
  right: 16px;
  font-size: 18px;
}

.dark-mode {
  background-color: white;
  color: black;
  content: 'whatever it is you want to add';
}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
table {
    position: absolute;
  top: 0px;
  right: 16px;
  font-size: 18px;
}
</style>
<link href="style.scss" rel="stylesheet/scss" type="text/css">
<link href="style.css" rel="stylesheet/scss" type="text/css">
</head>
<body>
  <div class="navbar">
    <a href="#">Home</a>
    <a href="Game.php">LogIn</a>
    <a href="#contacts">contacts</a>
    <?php

$get_name = $_POST['uname'];

function coloredText($string, $color) {
    return '<span style="color: '.$color.'">'.$string.'</span>';
}

echo coloredText("Hello $get_name", 'white');

?>
    <div class="topright"><button class="button button2" onclick="myFunction231()">Light Mode</button></div>
  </div>
  <br><br>
    <div class="svg">
    <br><audio controls id="audio" preload="none" tabindex="0">
                      <source src="[YT2mp3.info] - Vierre Cloud - moment (Official Audio) (320kbps).mp3" data-track-number="1" />
                      <source src="[YT2mp3.info] - Snowman - Sia (Sped up and pitched) (320kbps).mp3" data-track-number="2" />
                      <source src="[YT2mp3.info] - my ordinary life - the living tombstone (sped up_nightcore) (320kbps).mp3" data-track-number="3" />
                      <source src="[YT2mp3.info] - Chandelier (Sped up) Sia (320kbps).mp3" data-track-number="4" />
                      <source src="[YT2mp3.info] - 2002-Anne-Marie-(sped up) (320kbps).mp3" data-track-number="5" />    
                      <source src="[YT2mp3.info] - Studio Killers - Jenny (sped up) (320kbps).mp3" data-track-number="6" />
                      <source src="[YT2mp3.info] - Seafret - Atlantis (Official Sped Up Version) (320kbps).mp3" data-track-number="7" />
                      <source src="[YT2mp3.info] - Marshmello_ Alone - SpeedUp (320kbps).mp3" data-track-number="8" />
                                          <source src="[YT2mp3.info] - Calvin Harris - Outside (sped up Tiktok Remix) (Lyrics) __There_'s a power in what you do__ (320kbps).mp3" data-track-number="9" />
                                          <source src="[YT2mp3.info] - SoFaygo - Knock Knock (Directed by Cole Bennett) (320kbps).mp3" data-track-number="10" />
                                          <source src="[YT2mp3.info] - Everytime we touch (sped up_nightcore) (320kbps).mp3" data-track-number="11" />
                                          <source src="[YT2mp3.info] - the neighbourhood - sweater weather (sped up) (320kbps).mp3" data-track-number="12" />
                                          <source src="[YT2mp3.info] - Shawn Mendes - Treat you better (sped up) (320kbps).mp3" data-track-number="13" />
                                          <source src="[YT2mp3.info] - xxxtentacion - revenge (sped up) (320kbps).mp3" data-track-number="14" />
                                          <source src="[YT2mp3.info] - mr kitty - after dark [ sped up + reverb + bass boosted ] (320kbps).mp3" data-track-number="15" />
                                          <source src="[YT2mp3.info] - shawn mendes-stitches (sped up+reverb) (320kbps).mp3" data-track-number="16" />
                                          <source src="[YT2mp3.info] - Keane - Somewhere Only We Know ( Sped Up + Lyrics ) (320kbps).mp3" data-track-number="17" />
                      Your browser does not support HTML5 audio.
                  </audio>
      
        <div class="player">
      
          <div class="large-toggle-btn">
            <i class="large-play-btn"><span class="screen-reader-text"></span></i>
          </div>
          <!-- /.play-box -->
      
          <div class="info-box">
            <div class="track-info-box">
              <div class="track-title-text"></div>
              <div class="audio-time">
                <span class="current-time">00:00</span> /
                <span class="duration">00:00</span>
              </div>
            </div>
            <!-- /.info-box -->
      
            <div class="progress-box">
              <div class="progress-cell">
                <div class="progress">
                  <div class="progress-buffer"></div>
                  <div class="progress-indicator"></div>
                </div>
              </div>
            </div>
      
          </div>
          <!-- /.progress-box -->
      
          <div class="controls-box">
            <i class="previous-track-btn disabled"><span class="screen-reader-text"></span></i>
            <i class="next-track-btn"><span class="screen-reader-text"></span></i>
          </div>
          <!-- /.controls-box -->
        </div>
        <!-- /.player -->
      
        <div class="play-list">
      
          <div class="play-list-row" data-track-row="1">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">

            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="1">Moment - Vierre Cloud</a>
            </div>
          </div>
          <div class="play-list-row" data-track-row="2">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">
              <br>
            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="2">Snowman - Sia</a>
            </div>
          </div>
          <div class="play-list-row" data-track-row="3">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">
              <br>
            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="3">My Ordinary Life - The Living Tombstone</a>
            </div>
          </div>
          <div class="play-list-row" data-track-row="4">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">
              <br>
            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="4">Chandelier - Sia</a>
            </div>
          </div>
          <div class="play-list-row" data-track-row="5">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">
              <br>
            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="5">2002 - Anne-Marie</a>
            </div>
          </div>
          <div class="play-list-row" data-track-row="6">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">
              <br>
            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="6">Studio Killers - Jenny</a>
            </div>
          </div>
          <div class="play-list-row" data-track-row="7">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">
              <br>
            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="7">Atlantis - Seafret</a>
            </div>
          </div>
          <div class="play-list-row" data-track-row="8">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">
              <br>
            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="8">Alone - Marshmello</a>
            </div>
          </div>
          <div class="play-list-row" data-track-row="9">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">
              <br>
            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="9">Calvin Harris - Outside</a>
            </div>
          </div>
          <div class="play-list-row" data-track-row="10">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">
              <br>
            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="10">SoFaygo - Knock Knock</a>
            </div>
          </div>
          <div class="play-list-row" data-track-row="11">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">
              <br>
            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="11">Everytime we touch - Cascada</a>
            </div>
          </div>
          <br>
          <div class="play-list-row" data-track-row="12">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">
              <br>
            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="12">the neighbourhood - sweater weather</a>
            </div>
          </div>
          <br>
          <div class="play-list-row" data-track-row="13">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">
              <br>
            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="13">Shawn Mendes - Treat you better</a>
            </div>
          </div>
          <div class="play-list-row" data-track-row="14">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">
              <br>
            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="14">Xxxtentacion -Revenge</a>
            </div>
          </div>
          <div class="play-list-row" data-track-row="15">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">
              <br>
            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="15">Mr Kitty - After Dark</a>
            </div>
          </div>
          <div class="play-list-row" data-track-row="16">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">
              <br>
            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="16">Shawn Mendes - Stitches</a>
            </div>
          </div>
          <div class="play-list-row" data-track-row="17">
            <div class="small-toggle-btn">
              <i class="small-play-btn"><span class="screen-reader-text"></span></i>
            </div>
            <div class="track-number">
              <br>
            </div>
            <div class="track-title">
              <a class="playlist-track" href="#" data-play-track="17">Keane - Somewhere Only We Know</a>
            </div>
          </div>
        </div>
<script>
function myFunction(x) {
  x.classList.toggle("change");
}

var audioPlayer = function() {
  "use strict";

  // Private variables
  var _currentTrack = null;
  var _elements = {
    audio: document.getElementById("audio"),
    playerButtons: {
      largeToggleBtn: document.querySelector(".large-toggle-btn"),
      nextTrackBtn: document.querySelector(".next-track-btn"),
      previousTrackBtn: document.querySelector(".previous-track-btn"),
      smallToggleBtn: document.getElementsByClassName("small-toggle-btn")
    },
    progressBar: document.querySelector(".progress-box"),
    playListRows: document.getElementsByClassName("play-list-row"),
    trackInfoBox: document.querySelector(".track-info-box")
  };
  var _playAHead = false;
  var _progressCounter = 0;
  var _progressBarIndicator = _elements.progressBar.children[0].children[0].children[1];
  var _trackLoaded = false;

  /**
   * Determines the buffer progress.
   *
   * @param audio The audio element on the page.
   **/
  var _bufferProgress = function(audio) {
    var bufferedTime = (audio.buffered.end(0) * 100) / audio.duration;
    var progressBuffer = _elements.progressBar.children[0].children[0].children[0];

    progressBuffer.style.width = bufferedTime + "%";
  };

  /**
   * A utility function for getting the event cordinates based on browser type.
   *
   * @param e The JavaScript event.
   **/
  var _getXY = function(e) {
    var containerX = _elements.progressBar.offsetLeft;
    var containerY = _elements.progressBar.offsetTop;

    var coords = {
      x: null,
      y: null
    };

    var isTouchSuopported = "ontouchstart" in window;

    if (isTouchSuopported) { //For touch devices
      coords.x = e.clientX - containerX;
      coords.y = e.clientY - containerY;

      return coords;
    } else if (e.offsetX || e.offsetX === 0) { // For webkit browsers
      coords.x = e.offsetX;
      coords.y = e.offsetY;

      return coords;
    } else if (e.layerX || e.layerX === 0) { // For Mozilla firefox
      coords.x = e.layerX;
      coords.y = e.layerY;

      return coords;
    }
  };

  var _handleProgressIndicatorClick = function(e) {
    var progressBar = document.querySelector(".progress-box");
    var xCoords = _getXY(e).x;

    return (xCoords - progressBar.offsetLeft) / progressBar.children[0].offsetWidth;
  };

  /**
   * Initializes the html5 audio player and the playlist.
   *
   **/
  var initPlayer = function() {

    if (_currentTrack === 1 || _currentTrack === null) {
      _elements.playerButtons.previousTrackBtn.disabled = true;
    }

    //Adding event listeners to playlist clickable elements.
    for (var i = 0; i < _elements.playListRows.length; i++) {
      var smallToggleBtn = _elements.playerButtons.smallToggleBtn[i];
      var playListLink = _elements.playListRows[i].children[2].children[0];

      //Playlist link clicked.
      playListLink.addEventListener("click", function(e) {
        e.preventDefault();
        var selectedTrack = parseInt(this.parentNode.parentNode.getAttribute("data-track-row"));

        if (selectedTrack !== _currentTrack) {
          _resetPlayStatus();
          _currentTrack = null;
          _trackLoaded = false;
        }

        if (_trackLoaded === false) {
          _currentTrack = parseInt(selectedTrack);
          _setTrack();
        } else {
          _playBack(this);
        }
      }, false);

      //Small toggle button clicked.
      smallToggleBtn.addEventListener("click", function(e) {
        e.preventDefault();
        var selectedTrack = parseInt(this.parentNode.getAttribute("data-track-row"));

        if (selectedTrack !== _currentTrack) {
          _resetPlayStatus();
          _currentTrack = null;
          _trackLoaded = false;
        }

        if (_trackLoaded === false) {
          _currentTrack = parseInt(selectedTrack);
          _setTrack();
        } else {
          _playBack(this);
        }

      }, false);
    }

    //Audio time has changed so update it.
    _elements.audio.addEventListener("timeupdate", _trackTimeChanged, false);

    //Audio track has ended playing.
    _elements.audio.addEventListener("ended", function(e) {
      _trackHasEnded();
    }, false);

    //Audio error. 
    _elements.audio.addEventListener("error", function(e) {
      switch (e.target.error.code) {
        case e.target.error.MEDIA_ERR_ABORTED:
          alert('You aborted the video playback.');
          break;
        case e.target.error.MEDIA_ERR_NETWORK:
          alert('A network error caused the audio download to fail.');
          break;
        case e.target.error.MEDIA_ERR_DECODE:
          alert('The audio playback was aborted due to a corruption problem or because the video used features your browser did not support.');
          break;
        case e.target.error.MEDIA_ERR_SRC_NOT_SUPPORTED:
          alert('The video audio not be loaded, either because the server or network failed or because the format is not supported.');
          break;
        default:
          alert('An unknown error occurred.');
          break;
      }
      trackLoaded = false;
      _resetPlayStatus();
    }, false);

    //Large toggle button clicked.
    _elements.playerButtons.largeToggleBtn.addEventListener("click", function(e) {
      if (_trackLoaded === false) {
        _currentTrack = parseInt(1);
        _setTrack()
      } else {
        _playBack();
      }
    }, false);

    //Next track button clicked.
    _elements.playerButtons.nextTrackBtn.addEventListener("click", function(e) {
      if (this.disabled !== true) {
        _currentTrack++;
        _trackLoaded = false;
        _resetPlayStatus();
        _setTrack();
      }
    }, false);

    //Previous track button clicked.
    _elements.playerButtons.previousTrackBtn.addEventListener("click", function(e) {
      if (this.disabled !== true) {
        _currentTrack--;
        _trackLoaded = false;
        _resetPlayStatus();
        _setTrack();
      }
    }, false);

    //User is moving progress indicator.
    _progressBarIndicator.addEventListener("mousedown", _mouseDown, false);

    //User stops moving progress indicator.
    window.addEventListener("mouseup", _mouseUp, false);
  };

  /**
   * Handles the mousedown event by a user and determines if the mouse is being moved.
   *
   * @param e The event object.
   **/
  var _mouseDown = function(e) {
    window.addEventListener("mousemove", _moveProgressIndicator, true);
    audio.removeEventListener("timeupdate", _trackTimeChanged, false);

    _playAHead = true;
  };

  /**
   * Handles the mouseup event by a user.
   *
   * @param e The event object.
   **/
  var _mouseUp = function(e) {
    if (_playAHead === true) {
      var duration = parseFloat(audio.duration);
      var progressIndicatorClick = parseFloat(_handleProgressIndicatorClick(e));
      window.removeEventListener("mousemove", _moveProgressIndicator, true);

      audio.currentTime = duration * progressIndicatorClick;
      audio.addEventListener("timeupdate", _trackTimeChanged, false);
      _playAHead = false;
    }
  };

  /**
   * Moves the progress indicator to a new point in the audio.
   *
   * @param e The event object.
   **/
  var _moveProgressIndicator = function(e) {
    var newPosition = 0;
    var progressBarOffsetLeft = _elements.progressBar.offsetLeft;
    var progressBarWidth = 0;
    var progressBarIndicator = _elements.progressBar.children[0].children[0].children[1];
    var progressBarIndicatorWidth = _progressBarIndicator.offsetWidth;
    var xCoords = _getXY(e).x;

    progressBarWidth = _elements.progressBar.children[0].offsetWidth - progressBarIndicatorWidth;
    newPosition = xCoords - progressBarOffsetLeft;

    if ((newPosition >= 1) && (newPosition <= progressBarWidth)) {
      progressBarIndicator.style.left = newPosition + ".px";
    }
    if (newPosition < 0) {
      progressBarIndicator.style.left = "0";
    }
    if (newPosition > progressBarWidth) {
      progressBarIndicator.style.left = progressBarWidth + "px";
    }
  };

  /**
   * Controls playback of the audio element.
   *
   **/
  var _playBack = function() {
    if (_elements.audio.paused) {
      _elements.audio.play();
      _updatePlayStatus(true);
      document.title = "\u25B6 " + document.title;
    } else {
      _elements.audio.pause();
      _updatePlayStatus(false);
      document.title = document.title.substr(2);
    }
  };

  /**
   * Sets the track if it hasn't already been loaded yet.
   *
   **/
  var _setTrack = function() {
    var songURL = _elements.audio.children[_currentTrack - 1].src;

    _elements.audio.setAttribute("src", songURL);
    _elements.audio.load();

    _trackLoaded = true;

    _setTrackTitle(_currentTrack, _elements.playListRows);

    _setActiveItem(_currentTrack, _elements.playListRows);

    _elements.trackInfoBox.style.visibility = "visible";

    _playBack();
  };

  /**
   * Sets the activly playing item within the playlist.
   *
   * @param currentTrack The current track number being played.
   * @param playListRows The playlist object.
   **/
  var _setActiveItem = function(currentTrack, playListRows) {
    for (var i = 0; i < playListRows.length; i++) {
      playListRows[i].children[2].className = "track-title";
    }

    playListRows[currentTrack - 1].children[2].className = "track-title active-track";
  };

  /**
   * Sets the text for the currently playing song.
   *
   * @param currentTrack The current track number being played.
   * @param playListRows The playlist object.
   **/
  var _setTrackTitle = function(currentTrack, playListRows) {
    var trackTitleBox = document.querySelector(".player .info-box .track-info-box .track-title-text");
    var trackTitle = playListRows[currentTrack - 1].children[2].outerText;

    trackTitleBox.innerHTML = null;

    trackTitleBox.innerHTML = trackTitle;

    document.title = trackTitle;
  };

  /**
   * Plays the next track when a track has ended playing.
   *
   **/
  var _trackHasEnded = function() {
    parseInt(_currentTrack);
    _currentTrack = (_currentTrack === _elements.playListRows.length) ? 1 : _currentTrack + 1;
    _trackLoaded = false;

    _resetPlayStatus();

    _setTrack();
  };

  /**
   * Updates the time for the song being played.
   *
   **/
  var _trackTimeChanged = function() {
    var currentTimeBox = document.querySelector(".player .info-box .track-info-box .audio-time .current-time");
    var currentTime = audio.currentTime;
    var duration = audio.duration;
    var durationBox = document.querySelector(".player .info-box .track-info-box .audio-time .duration");
    var trackCurrentTime = _trackTime(currentTime);
    var trackDuration = _trackTime(duration);

    currentTimeBox.innerHTML = null;
    currentTimeBox.innerHTML = trackCurrentTime;

    durationBox.innerHTML = null;
    durationBox.innerHTML = trackDuration;

    _updateProgressIndicator(audio);
    _bufferProgress(audio);
  };

  /**
   * A utility function for converting a time in miliseconds to a readable time of minutes and seconds.
   *
   * @param seconds The time in seconds.
   *
   * @return time The time in minutes and/or seconds.
   **/
  var _trackTime = function(seconds) {
    var min = 0;
    var sec = Math.floor(seconds);
    var time = 0;

    min = Math.floor(sec / 60);

    min = min >= 10 ? min : '0' + min;

    sec = Math.floor(sec % 60);

    sec = sec >= 10 ? sec : '0' + sec;

    time = min + ':' + sec;

    return time;
  };

  /**
   * Updates both the large and small toggle buttons accordingly.
   *
   * @param audioPlaying A booean value indicating if audio is playing or paused.
   **/
  var _updatePlayStatus = function(audioPlaying) {
    if (audioPlaying) {
      _elements.playerButtons.largeToggleBtn.children[0].className = "large-pause-btn";

      _elements.playerButtons.smallToggleBtn[_currentTrack - 1].children[0].className = "small-pause-btn";
    } else {
      _elements.playerButtons.largeToggleBtn.children[0].className = "large-play-btn";

      _elements.playerButtons.smallToggleBtn[_currentTrack - 1].children[0].className = "small-play-btn";
    }

    //Update next and previous buttons accordingly
    if (_currentTrack === 1) {
      _elements.playerButtons.previousTrackBtn.disabled = true;
      _elements.playerButtons.previousTrackBtn.className = "previous-track-btn disabled";
    } else if (_currentTrack > 1 && _currentTrack !== _elements.playListRows.length) {
      _elements.playerButtons.previousTrackBtn.disabled = false;
      _elements.playerButtons.previousTrackBtn.className = "previous-track-btn";
      _elements.playerButtons.nextTrackBtn.disabled = false;
      _elements.playerButtons.nextTrackBtn.className = "next-track-btn";
    } else if (_currentTrack === _elements.playListRows.length) {
      _elements.playerButtons.nextTrackBtn.disabled = true;
      _elements.playerButtons.nextTrackBtn.className = "next-track-btn disabled";
    }
  };

  /**
   * Updates the location of the progress indicator according to how much time left in audio.
   *
   **/
  var _updateProgressIndicator = function() {
    var currentTime = parseFloat(_elements.audio.currentTime);
    var duration = parseFloat(_elements.audio.duration);
    var indicatorLocation = 0;
    var progressBarWidth = parseFloat(_elements.progressBar.offsetWidth);
    var progressIndicatorWidth = parseFloat(_progressBarIndicator.offsetWidth);
    var progressBarIndicatorWidth = progressBarWidth - progressIndicatorWidth;

    indicatorLocation = progressBarIndicatorWidth * (currentTime / duration);

    _progressBarIndicator.style.left = indicatorLocation + "px";
  };

  /**
   * Resets all toggle buttons to be play buttons.
   *
   **/
  var _resetPlayStatus = function() {
    var smallToggleBtn = _elements.playerButtons.smallToggleBtn;

    _elements.playerButtons.largeToggleBtn.children[0].className = "large-play-btn";

    for (var i = 0; i < smallToggleBtn.length; i++) {
      if (smallToggleBtn[i].children[0].className === "small-pause-btn") {
        smallToggleBtn[i].children[0].className = "small-play-btn";
      }
    }
  };

  return {
    initPlayer: initPlayer
  };
};

(function() {
  var player = new audioPlayer();

  player.initPlayer();
})();

function myFunction231() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
document.getElementById("textchanger").onclick = function()                        //document אומר שנשנה משהו בתוך הדף
	{
		
		document.getElementById("collored").style.display  = "toggle dark mode";
		
	}

</script>

</body>
</html>