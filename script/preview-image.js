const inputImage = document.querySelector("#inputImage")
const perviewImage = document.querySelector('#previewImage');

perviewImage.style.display = 'none'

inputImage.addEventListener('change', function(){
   const file = document.querySelector("#inputImage").files[0]
   if (file){
      perviewImage.src = URL.createObjectURL(file)
      perviewImage.style.display = 'block'
   }
});