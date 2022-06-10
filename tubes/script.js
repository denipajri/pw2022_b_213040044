function previewImage() {
  const movie_img=document.querySelector('#movie_img');
  const imgPrewiew=document.querySelector('#img-preview');
  imgPrewiew.style.display='block';
  var oFReader=new FileReader();
  oFReader.readAsDataURL(movie_img.files[0]);

  oFReader.onload=function(oFReader) {
    imgPrewiew.src=oFReader.target.result;
  };
}