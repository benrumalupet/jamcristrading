<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Image Slider JavaScript | CodingNepal</title>
   <style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: radial-gradient( circle 975px at 2.6% 48.3%,  rgba(0,8,120,1) 0%, rgba(95,184,224,1) 99.7% );
  }
  .wrapper {
    display: flex;
    width: 800px;
    height: 500px;
    background: #fff;
    align-items: center;
    justify-content: center;
    position: relative;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
  .wrapper i.button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    height: 36px;
    width: 36px;
    background-color: #343f4f;
    border-radius: 50%;
    text-align: center;
    line-height: 36px;
    color: #fff;
    font-size: 15px;
    transition: all 0.3s linear;
    z-index: 100;
    cursor: pointer;
  }
  i.button:active {
    transform: scale(0.94) translateY(-50%);
  }
  i#prev {
    left: 25px;
  }
  i#next {
    right: 25px;
  }
  .image-container {
    height: 100%;
    max-width: 80%;
    width: 150%;
    overflow: hidden;
  }
  .image-container .carousel {
    display: flex;
    height: 100%;
    width: 100%;
    transition: all 0.4s ease;
  }
  .carousel img {
    height: 100%;
    width: 100%;
    border-radius: 18px;
    border: 10px solid #fff;
    object-fit:fill;
  }</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    
  </head>
  <body>
    <section class="wrapper">
      <i class="fa-solid fa-arrow-left button" id="prev"></i>
      <div class="image-container">
        <div class="carousel">
          <img src= "../product-img/import1.jpg" alt="" />
          <img src="../product-img/front1.jpg" alt="" />
          <img src="../product-img/harap1.jpg" alt="" />
          <img src="../product-img/import2.jpg"alt="" />
        </div>
        <i class="fa-solid fa-arrow-right button" id="next"></i>
      </div>
    </section>
    <script>// Get the DOM elements for the image carousel
        const wrapper = document.querySelector(".wrapper"),
          carousel = document.querySelector(".carousel"),
          images = document.querySelectorAll("img"),
          buttons = document.querySelectorAll(".button");
        
        let imageIndex = 1,
          intervalId;
        
        // Define function to start automatic image slider
        const autoSlide = () => {
          // Start the slideshow by calling slideImage() every 2 seconds
          intervalId = setInterval(() => slideImage(++imageIndex), 2000);
        };
        // Call autoSlide function on page load
        autoSlide();
        
        // A function that updates the carousel display to show the specified image
        const slideImage = () => {
          // Calculate the updated image index
          imageIndex = imageIndex === images.length ? 0 : imageIndex < 0 ? images.length - 1 : imageIndex;
          // Update the carousel display to show the specified image
          carousel.style.transform = `translate(-${imageIndex * 100}%)`;
        };
        
        // A function that updates the carousel display to show the next or previous image
        const updateClick = (e) => {
          // Stop the automatic slideshow
          clearInterval(intervalId);
          // Calculate the updated image index based on the button clicked
          imageIndex += e.target.id === "next" ? 1 : -1;
          slideImage(imageIndex);
          // Restart the automatic slideshow
          autoSlide();
        };
        
        // Add event listeners to the navigation buttons
        buttons.forEach((button) => button.addEventListener("click", updateClick));
        
        // Add mouseover event listener to wrapper element to stop auto sliding
        wrapper.addEventListener("mouseover", () => clearInterval(intervalId));
        // Add mouseleave event listener to wrapper element to start auto sliding again
        wrapper.addEventListener("mouseleave", autoSlide);</script>
  </body>
</html>