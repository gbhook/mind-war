(function(){
  console.log("PLAY EPISODE INCLUDED") ;

  var EpisodePlayer = function () {

    this.audioPlayer = new Audio() ;
    this.isPlaying = false ;
    this.isLoaded = false ;
    this.mp3Path = '' ;
  }

  var episodePlayer = EpisodePlayer.prototype ;

  episodePlayer.playEpisode = function(mp3Path) {
    this.audioPlayer.src = mp3Path ;
    this.audioPlayer.play() ;
  }

  window.player = new EpisodePlayer() ;



})()
