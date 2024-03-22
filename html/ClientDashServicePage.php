<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  
  
  <!-- css file link -->
  <link rel="stylesheet" href="clientDashStyle.css">
   
  <!-- Media buttons link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
    // JavaScript for handling the toggling of subtopics
    function toggleSubnav(element) {
      const subnav = element.nextElementSibling;
      subnav.style.display = subnav.style.display === "block" ? "none" : "block";
    }
  </script>

  <style>
    /* ================= our services Section Start =========  */
.service{
  margin-top: 2px;
  padding: 10px 8% 40px;

}


/*============== Services Style =============*/

.main-txt h3{
  font-size: 36px;
  text-transform: uppercase;
  font-weight: 600;
  color: #012bfb;
  text-align: center;
  text-shadow: 0px 1px 1px black;
  }
.main-txt h3 span{
  color:#0d1d06f9;
  }

.ServiceContainer {
  margin-top: 10px;
  position: relative;
  font-family: sans-serif;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.ServiceContainer .Servicebox {
  width: calc(25% - .01rem); 
  height: auto;
  padding: 1rem;
  background-color: rgba(22, 25, 56, 0.167);
  border: 3px solid rgb(0, 0, 0);
  -webkit-backdrop-filter: blur(20px);
  backdrop-filter: blur(20px);
  border-radius: .7rem;
  transition: all ease .3s;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  margin-bottom: 2rem; 
}

.ServiceContainer .Servicebox .title {
  font-size: 2rem;
  font-weight: 500;
  letter-spacing: .1em;
}

.ServiceContainer .Servicebox div {
  display: flex;
  flex-direction: column;
  align-items: center; 
  text-align: center; 
}

.ServiceContainer .Servicebox div img {
  width: 65%;
  height: auto;
  border-radius: .7rem;
  margin-bottom: .8rem;
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Add transition for both transform and box-shadow */
  transform-style: preserve-3d;
}

.ServiceContainer .Servicebox div img:hover {
  transform: perspective(800px) rotateY(30deg) translateZ(30px);
  box-shadow: 10px 5px 20px rgba(0, 0, 0, 0.4); /* Add a shadow to the background on hover */
}


.ServiceContainer .Servicebox div strong {
  display: block;
  margin-bottom: .5rem;
  color: #10106c;
  text-shadow: 1px 1px 3px rgb(255, 255, 255)
}


.ServiceContainer .Servicebox div span:nth-child(3) {
  font-weight: 500;
  margin-right: .2rem;
}

.ServiceContainer .Servicebox:hover {
  box-shadow: 0px 0px 20px 1px #00d0ff;
  border: 1.5px solid rgba(255, 255, 255, 0.454);
}

@media screen and (max-width: 700px) {
  .ServiceContainer .Servicebox {
    width: calc(40% - 0rem);
  }
}

@media screen and (max-width: 676px) {
  .ServiceContainer .Servicebox {
    width: calc(100% - 2rem);
  }
}


/* ========= Button style  ===========  */

button {
 --glow-color: rgb(1, 232, 44);
 --glow-spread-color: rgba(14, 6, 43, 0.266);
 --enhanced-glow-color: rgb(27, 148, 41);
 --btn-color: rgb(255, 255, 255);
 border: .25em solid var(--glow-color);
 padding: 1em 3em;
 color: rgb(0, 0, 0);
 font-size: 15px;
 font-weight: bold;
 background-color: var(--btn-color);
 border-radius: 1em;
 outline: none;
 box-shadow: 0 0 1em .25em var(--glow-color),
        0 0 4em 1em var(--glow-spread-color),
        inset 0 0 .75em .25em var(--glow-color);
 text-shadow: 0 0 .5em var(--glow-color);
 position: relative;
 transition: all 0.3s;
}

button::after {
 pointer-events: none;
 content: "";
 position: absolute;
 top: 120%;
 left: 0;
 height: 100%;
 width: 100%;
 background-color: var(--glow-spread-color);
 filter: blur(2em);
 opacity: .7;
 transform: perspective(1.5em) rotateX(35deg) scale(1, .6);
}

button:hover {
 color: var(--btn-color);
 background-color: var(--glow-color);
 box-shadow: 0 0 1em .25em var(--glow-color),
        0 0 4em 2em var(--glow-spread-color),
        inset 0 0 .75em .25em var(--glow-color);
}

button:active {
 box-shadow: 0 0 0.6em .25em var(--glow-color),
        0 0 2.5em 2em var(--glow-spread-color),
        inset 0 0 .5em .25em var(--glow-color);
}


/*============ our services Section End ============= */
  </style>
</head>
<body style="background-image: url(./images/ClientdashBg.jpg);">
  <!-- Header Contant Details -->
  <div class="headerContantDetails">
    <p>For any issues 📞 077-1579711 || 📧 mathanihasam@gmail.com</p>
  </div>

  <!-- Top Navigation Bar -->
  <div class="topnav">
    <div class="left-nav">
        <a href="login.php">Logout <i class="fa fa-home fa-1x" aria-hidden="true"></i></a>
      </div>
    
    <div class="center-nav">
      <p>GROWELL LANKA </p>
    </div>

    <div class="right-nav">
      <a href="ClientDashMain.html" >Main Page <i class="fa fa-home fa-1x" aria-hidden="true"></i></a>
    </div>
  </div>
</div>


  
  
  <!-- Main Content Area -->
  <div class="main" >
    <div class="mainarea">
        <div class="content">
            
               <div class="radio-inputs">
                  <label class="radio">
                    <input type="radio" name="radio" checked="" onclick="window.location.href='ClientDashServicePage.php'"  >
                    <span class="name">Service</span>
                  </label>
                  <label class="radio">
                    <input type="radio" name="radio" onclick="window.location.href='ClientDashPaymentPage.php'">
                    <span class="name">Payment</span>
                  </label>  
                  <label class="radio">
                    <input type="radio" name="radio" onclick="window.location.href='ClientDashComplainPage.php'">
                    <span class="name">Complains/Quries</span>
                  </label>  
                  <label class="radio">
                    <input type="radio" name="radio" onclick="window.location.href='ClientDashFoodPage.php'">
                    <span class="name">Food&Bevarages</span>
                  </label>  
                  <label class="radio">
                    <input type="radio" name="radio" onclick="window.location.href='ClientDashReviewPage.php'">
                    <span class="name">Review</span>
                  </label>  
                </div>
        </div>
        
        
        <div class="WelcomeWithName" style="text-align: center;" >
                      <!--========== Service Section Start ======= -->
   <section class="service" id="service">
    <div class="main-txt">
        <h3>Book Our <span>Services </span> </h3> 
    </div>
    <div class="ServiceContainer">
      <div class="Servicebox">
        <span class="title"></span>
        <div>
          <img src="./images/servicesImg/Cleaning.jpg" alt="Image 1">
          <strong>Industrial and Commercial Cleaning Services</strong>
        </div>
      </div>
      <div class="Servicebox">
        <span class="title"></span>
        <div>
          <img src="./images/servicesImg/maintanance.jpg" alt="Image 2">
          <strong>Operations & Maintenance Services</strong>
        </div>
      </div>
      <div class="Servicebox">
        <span class="title"></span>
        <div>
          <img src="./images/servicesImg/management.jpg" alt="Image 2">
          <strong>MANAGEMENT SUPPORT Services</strong>
        </div>
      </div>
      <div class="Servicebox">
        <span class="title"></span>
        <div>
          <img src="./images/servicesImg/gardening.jpg" alt="Image 2">
          <strong>GARDENING AND LANDSCAPING Services</strong>
        </div>
      </div>
      <div class="Servicebox">
        <span class="title"></span>
        <div>
          <img src="./images/servicesImg/hospitality.jpg" alt="Image 2">
          <strong>HOSPITALITY Services</strong>
        </div>
      </div>
      <div class="Servicebox">
        <span class="title"></span>
        <div>
          <img src="./images/servicesImg/sanitizing.jpg" alt="Image 2">
          <strong>Environmental Cleaning & Sanitizing services</strong>
        </div>
      </div>
     
    </div>

</section>
<!-- ===========   Service Section End ============= -->
<div class="btnform">
  <a href="ClientDashBookingService.php">
    <button>Click Here To Book Our Service</button>
  </a>
</div>
      
        </div>
    </div>
  </div>
  
     
  
</body>
</html>
