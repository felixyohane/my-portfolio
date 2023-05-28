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

function checkforblank() {
  if (document.getElementById('FirstName').value=="") {
    alert('please enter your firstname');
    document.getElementById('FirstName').style.borderColor ="red";
    return false;
    
  }
  }

 

  var currentime=new Date();
  var currentHour=currentime.getHours();
  var greeting;
  if (currentHour<12) {  greeting="Good morning";
    
  }

  else if(currentHour<18){   greeting="Good afternoon";

  }

  else{   "Good evening";

  }

  var greetingElement=document.getElementById(".greeting");
  greetingElement.textcontent=greeting;
