
function newQuote(){
  var testimonials = [
    '1',
    '2',
    '3',
    '4',
    '5',
    '6',
    '7',
    '8',
    '9',
    '10'
  ]

  var randomNumber = Math.floor(Math.random() * (testimonials.length));

  document.getElementById('testimonial-slide').innerHTML = testimonials[randomNumber];

}

window.addEventListener('load', newQuote);
// call quote function on load
setInterval(newQuote, 30000);
// show new quote every 30 seconds
