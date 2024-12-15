// Toggles various elements display status depending on whether or not the mobile nav menu is active
function toggleMenu() {
    var menu = document.getElementById('menu'); //Gets the pointer for the nav menu with id 'menu'
    menu.classList.toggle('active'); //Toggles its class as active on and off; This changes styling to determine dispaly type

    var main = document.getElementById("content"); //All main tags have id 'content', determines if they are displayed. If they are, it hides, otherwise, it shows
    var footer = document.getElementById("footerContents");
    
    if (main.style.display === "none") {
      main.style.display = "block";
      footer.style.display = "block";
    }
    else {
      main.style.display = "none";
      footer.style.display = "none";
    }
}

// If the window grows to switch to desktop view while the menu is open, prevents the page from being hidden until reload
var main = document.getElementById("content");
window.onresize = function() {
  if (window.innerWidth > 900 && main.style.display === "none"){
    toggleMenu();
  }
}

// Validates the form
function validateForm() {
  // Ensures there is SOME value in the name field
  var name = document.forms["myForm"]["userName"].value;
  var nameValidation = document.getElementById('nameValidation');
  if (name == null || name == "") {
      document.forms["myForm"]["userName"].style.backgroundColor = 'pink';
      nameValidation.innerHTML = "A name is required and has not been filled out";
      return false;
  }
  else {
    nameValidation.innerHTML = null;
    document.forms["myForm"]["userName"].style.backgroundColor = 'rgb(0, 0, 0, 0.1)';
  }

  // Ensures there is SOME value in the message field
  var message = document.forms["myForm"]["message"].value;
  var messageValidation = document.getElementById('messageValidation');
  if (message == null || message == "") {
      document.forms["myForm"]["message"].style.backgroundColor = 'pink';
      messageValidation.innerHTML = "A message is required and has not been filled out";
      return false;
  }
  else {
    messageValidation.innerHTML = null;
    document.forms["myForm"]["message"].style.backgroundColor = 'rgb(0, 0, 0, 0.1)';
  }
}

// gets back to top button
let button = document.getElementById("toTop");

// shows the button when the user scrolls down 700px
window.onscroll = function() {
  scroll()
};

function scroll() {
  if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
    button.style.animation = "fadeIn .75s"
    button.style.display = "block";
  } else {
    button.style.display = "none";
  }
}

// Sends user to the top of the page without refreshing on click
function topFunction() {
  window.scrollTo({top: 0, behavior: 'smooth'});
}

// Makes an image large on click
function spotlight(image){
  let body = document.getElementsByTagName('body')[0];

  let background = document.createElement('div');

    background.setAttribute('id', 'spotlightBackground');

    // positions the background that freezes the page behind it
    background.style.position = 'absolute';
    background.style.top = '0';
    background.style.left = '0';
    background.style.width = '100%';
    background.style.height = document.documentElement.scrollHeight + 'px';

    background.style.zIndex = '9999999999999999';

    background.style.backgroundColor = "rgba(0, 0, 0, 0.4)";

    background.addEventListener('click', function() {
      let lb = document.getElementById('spotlightBackground');

      lb.parentNode.style.overflow = 'visible';
      lb.parentNode.removeChild(lb);
    });


    body.appendChild(background);


    let img = document.createElement('img');
    img.src = image.src;
    img.alt = image.alt;

    // position and size image
    img.style.objectFit = 'contain';
    img.style.position = 'fixed';
    img.style.maxWidth = '80vw';
    img.style.maxHeight = '80vh';
    img.style.borderRadius = '12px';
    


    // Center image
    img.style.top = '50%';
    img.style.left = '50%';
    img.style.transform = 'translate(-50%, -50%)';

    background.appendChild(img);

    // Creates the caption that gives instructions
    let caption = document.createElement('p');
    caption.innerHTML = "Click anywhere to exit";
    caption.style.width = "fit-content";
    caption.style.position = "fixed";
    caption.style.bottom = "10px";

    // center caption
    caption.style.left = "0";
    caption.style.right = "0";
    caption.style.marginInline = "auto";

    // style caption
    caption.style.background = "var(--midnight-green)";
    caption.style.color = "var(--sand)";
    caption.style.padding = "5px";
    caption.style.borderRadius = "8px";

    background.appendChild(caption);

    // Prevent interaction with background whill in spotlight
    body.style.overflow = 'hidden';

}