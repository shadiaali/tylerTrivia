//Pause audio on document load
document.getElementById('sound1').pause();
//Detect button clikc
document.getElementById('play').addEventListener("click", cuntingsec, false); 

//Function to count second 
function cuntingsec()
{
  var seconds = 0;
  var el = document.getElementById('seconds-counter');

  function incrementSeconds() {
      seconds += 1;
      el.innerText = "It has been " + seconds + "/120 seconds.";
//Detect audio end
document.getElementById('sound1').addEventListener("ended", function(){
            el.innerText = "It has been 2 minutes - TIME IS UP!";
      //Clear interval
      clearInterval(cancel);

});
  }

  var cancel = setInterval(incrementSeconds, 1000);
}