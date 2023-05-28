var counter=0;
var images=[];
var time=3000;

images[0]="19-35-42-GiN3qwAAAAABJRU5ErkJggg==.jpg";
images[1]="19-36-13-2Q==.jpg";

function changingImage() {
  document.slideshow.src=images[counter];
    if (counter<images.length -1)
        { counter++  }
    else{counter=0;}

    setTimeout("changingImage()",time);
      
  
  
}window.onload=changingImage;