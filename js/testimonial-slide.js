
function newQuote(){
  var testimonials = [
    'I found Michael Ware by accident. I was in a bit of a pickle and needed someone quickly. I phoned Michael and he came round to my house and fixed my problem quickly and efficiently. I was very impressed by the way he took care in  my home.  I have never seen a room so well covered up before the job began. This made me go back to Michael when I needed to have my lounge painted.  I only wanted 3 walls to be done but this was no problem to Michael. He gave me a very fair price and as I was unsure about paints he advised me. I found him to be very knowledgeable and helpful. We decided on a paint and because the 3 walls were painted so thoroughly and so well, I asked him to carry on up my stairs and landing.  My husband and I are delighted with the finished work. We found Michael to be a charming young man, who is considerate and who is very good with pensioners and dogs. We wouldn\'t hesitate to recommend him to anyone. I can\'t wait to have him paint my next room. Mrs F Cottingham',

    'Michael has decorated two properties for me to a very high standard. I find him reliable, trustworthy and professional and I have gladly recommended him to other people. Mrs S, Weldon',

    '...We engaged Michael Ware for a whole-house painting job. Michael was punctual, hardworking, reliable and very considerate of our home and family life throughout the project. He is extremely approachable and always provided excellent communications. We were particularly impressed with the pride he clearly takes in his work and the value for money he delivered. We would definitely recommend Michael Ware for any decorating project. Mr. and Mrs. B, Northamptonshire',

    'Mike has now completed a few decorating jobs for us over the past eighteen months. He has good product knowledge and we are delighted with a paint he recommended for a high traffic area.  His rates are competitive, he is punctual, very tidy and respectful of our home. Mike takes great care and pride in his work and is polite and friendly. We will be using him again and we have no hesitation in recommending him. Mrs P – Northants',
    'So happy with the work Michael has done for us, hanging plain and patterned wallpaper. Friendly, professional and tidy. Can\'t wait to get the next room done! Highly recommended. Charlie & George, Little Stanion',
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
