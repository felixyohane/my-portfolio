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
      
  
  
}

function checkforblank() {
  if (document.getElementById('FirstName').value=="") {
    alert('please enter your firstname');
    document.getElementById('FirstName').style.borderColor ="red";
    return false;
    
  }
  }

  function getGreeting() {
    var date = new Date();
    var hours = date.getHours();
    var greeting;

    if(hours >=0 && hours <12){
      greeting="Goood morning";
    
    }
    else if(hours>=12 && hours<18){
      greeting="Good afternoon";

    }

    else{
      greeting="Good evening";
    }
    return greeting;
  }
  function displayGreeting(){
    var greeting=getGreeting();
    document.getElementById("greeting").textContent=greeting;
  }

  

 

