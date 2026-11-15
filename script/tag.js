const tags = document.querySelectorAll('.tags ul li');

function toggleTag(index){
   tags[index].classList.toggle('selected')
   console.log('clicked')
};