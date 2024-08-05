let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    spaceBetween: 30,
    effect: "fade",
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

// services


//reviews

var swiper = new Swiper(".reviews-slider", {
    loop:true,
    spaceBetween:20,
    autoHeight:true,
    grabCursor:true,
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });


  //packages load more functionality

  let loadMoreBtn = document.querySelector('.packages .load-more .btn');
  let currentItem = 3;

  loadMoreBtn.onclick=() =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (var i = currentItem; i<currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
    };
    currentItem +=3;
    if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
    }
  }


// booking query form successful submission message 


// document.getElementById("myBtn").addEventListener("click", function() {
//   alert("Hello World!");
//   });

document.getElementById("myBtn").addEventListener('DOMContentLoaded', function() {
  var form = document.getElementById('bookingForm');
  var confirmationMessage = document.getElementById('confirmationMessage');

  form.addEventListener('submit', function(event) {
      // Prevent the default form submission behavior
      event.preventDefault();

      // Serialize form data
      var formData = new FormData(form);

      // Send form data to server using fetch API
      fetch('book_form.php', {
          method: 'POST',
          body: formData
      })
      .then(response => {
          if (response.ok) {
              // Clear the form
              form.reset();
              // Display confirmation message
              confirmationMessage.textContent = 'Thank you! Your booking has been submitted successfully.';
              // Show the confirmation message
              confirmationMessage.style.display = 'block';
              // Debugging: Log message to console
              console.log('Confirmation message displayed:', confirmationMessage.textContent);
          } else {
              throw new Error('Network response was not ok.');
          }
      })
      .catch(error => {
          console.error('Error:', error);
          // Handle errors
      });
  });
});




// document.addEventListener('DOMContentLoaded', function() {
//   var form = document.getElementById('bookingForm');
//   var confirmationMessage = document.getElementById('confirmationMessage');

//   form.addEventListener('submit', function(event) {
//       // Prevent the default form submission behavior
//       event.preventDefault();

//       // Serialize form data
//       var formData = new FormData(form);

//       // Send form data to server using fetch API
//       fetch('book_form.php', {
//           method: 'POST',
//           body: formData
//       })
//       .then(response => {
//           if (response.ok) {
//               // Clear the form
//               form.reset();
//               // Display confirmation message
//               confirmationMessage.textContent = 'Thank you! Your booking has been submitted successfully.';
//               confirmationMessage.style.display = 'block'; // Show the confirmation message
//           } else {
//               throw new Error('Network response was not ok.');
//           }
//       })
//       .catch(error => {
//           console.error('Error:', error);
//           // Handle errors
//       });
//   });
// });