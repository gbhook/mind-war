(function(){

  console.log('MAIN') ;
  init = function() {
    console.log('INIT') ;
    window.player = new EpisodePlayer() ;
  }

  window.onload = init ;
})() ;
