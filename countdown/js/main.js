document.addEventListener('DOMContentLoaded', () => {
  
// moment().format('DD/MM/YYYY HH:mm');
  var hoy =moment();
  // var fecha1 = moment('2020-01-12');
  var fechaFinal = moment('2020-09-13 11:00');
  var totalSegundos = fechaFinal.diff(hoy, 'seconds'); 
   console.log("segundos", totalSegundos);
   

  // Unix timestamp (in seconds) to count down to
  
  // var daysFromNow = (new Date().getTime() / 1000) + (86400 * diasddif) + 1;
  var daysFromNow = (new Date().getTime() / 1000) + (totalSegundos) + 1;
  

  // Set up FlipDown
  var flipdown = new FlipDown(daysFromNow)

    // Start the countdown
    .start()

    // Do something when the countdown ends
    .ifEnded(() => {
      console.log('The countdown has ended!');
    });
});
