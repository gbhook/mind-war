
  console.log("PLAY EPISODE INCLUDED") ;

  var EpisodePlayer = function () {

    this.audioPlayer = new Audio() ;
    this.isPlaying = false ;
    this.isLoaded = false ;
    this.currentTrack = '' ;
    this.loadedTracks = [];

    this.onCanPlay_DEL = this.onCanPlay.bind(this);



    var articles = document.querySelectorAll('article') ;
    console.log('QUERY ALL') ;
    for(var i=0; i < articles.length; i++) {
      this.loadedTracks.push({articleId:articles[i].id, progress:0});
      console.log(articles[i].id) ;
    }

  }

  var episodePlayer = EpisodePlayer.prototype ;

  episodePlayer.playEpisode = function(mp3Path, theId) {

    //If already playing pause, and check
    if(this.isPlaying===true) {
      console.log('Already Playing') ;
      //store progress on whats Playing

      //If a new episode is clicked load it and play
      if(theId!=this.currentTrack) {
        console.log('Already Playing - Loading new episode') ;
        this.storeProgress(this.currentTrack, this.audioPlayer.currentTime) ;
        this.audioPlayer.pause();
        this.audioPlayer.addEventListener('canplay',this.onCanPlay_DEL) ;
        this.isPlaying = true ;
        this.currentTrack = theId ;
        this.audioPlayer.src = mp3Path ;
        this.audioPlayer.currentTime = this.checkProgress(theId) ;

      } else {
        console.log('Pausing') ;
        this.audioPlayer.pause();
        this.isPlaying=false ;
        this.storeProgress(theId, this.audioPlayer.currentTime) ;
      }

    } else {

      console.log('Not Playing') ;

      if(theId!=this.currentTrack) {
        console.log('Not Playing - Load new episode')
        this.storeProgress(this.currentTrack, this.audioPlayer.currentTime) ;
        this.audioPlayer.addEventListener('canplay',this.onCanPlay_DEL) ;
        this.currentTrack = theId ;
        this.audioPlayer.src = mp3Path ;
        this.audioPlayer.currentTime = this.checkProgress(theId) ;

      } else {

        console.log('Replaying') ;
        this.isPlaying=true ;
        this.audioPlayer.play() ;
      }


    }

  }

  episodePlayer.checkProgress = function (theId) {

    console.log('Check Progress') ;

    for(var i=0 ; i<this.loadedTracks.length ; i++) {

      console.log(this.loadedTracks[i].progress) ;
      if(this.loadedTracks[i].articleId===theId) {
          console.log(this.loadedTracks[i].progress) ;
          return this.loadedTracks[i].progress ;
      }

    }

  }

  episodePlayer.storeProgress = function (theId, progress) {

    console.log('Store Progress') ;
    console.log(progress) ;
    console.log(this.loadedTracks.length) ;

    for(var i=0 ; i<this.loadedTracks.length ; i++) {


      if(this.loadedTracks[i].articleId===theId) {
          this.loadedTracks[i].progress=progress ;
      }
      console.log(this.loadedTracks[i].progress) ;
    }

  }

  episodePlayer.onCanPlay = function () {

      this.audioPlayer.removeEventListener('canplay',this.onCanPlay_DEL) ;
      this.audioPlayer.play() ;
      this.isPlaying = true ;
  }
