require('./bootstrap');

import Plyr from 'plyr';

window.onload = () => {
  // Change "{}" to your options:
  // https://github.com/sampotts/plyr/#options
  const player = new Plyr('#playerplay', {
    i18n: {
      play: 'Reproducir',
      speed: 'Velocidad'
    },
    youtube: {
      showinfo: 0,
      controls: 0
    }
  });
  $('#justplay').on('click', function() {
    // setTimeout(() => {
      player.play();
    // }, 100);
  });
  $('#close').on('click', function() {
    player.pause();
  });
  // Expose player so it can be used from the console
  // window.player = player;
}
