<!DOCTYPE html>
<html lang="en">
<head>

     <title>Health - Blood Bank Website </title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
     <Style>

.alert {
    transition: opacity 0.5s ease-out;
}


#findblood {
    width: 100%; /* Full width */
    height: 100vh; /* Full viewport height */
    display: flex; /* Flexbox for vertical alignment */
      /* Center content vertically */
    justify-content: center; /* Center content horizontally */
    padding: 10%; /* Remove padding */
    background: #f2f2f2; /* Background color (change as needed) */
    
}

#donateblood {
    width: 100%; /* Full width */
    height: 100vh; /* Full viewport height */
    display: flex; /* Flexbox for vertical alignment */
     /* Center content vertically */
    justify-content: center; /* Center content horizontally */
    padding: 10%; /* Remove padding */
    background: #f2f2f2; /* Background color (change as needed) */
}

.search-btn {
     background-color: #f44336; /* Red background color */
     color: white;              /* White text color */
     border: none;              /* Remove default border */
    padding: 20px 20px;        /* Add some padding */
    cursor: pointer;    
    
 
}
.donate-btn {
     background-color: #f44336; /* Red background color */
     color: white;              /* White text color */
     border: none;              /* Remove default border */
    padding: 10px 20px;        /* Add some padding */
    cursor: pointer;   

}


     </Style>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

@if(session('success'))
    <div id="success-message" class="alert alert-success" style="display: none;">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div id="error-message" class="alert alert-danger" style="display: none;">
        {{ session('error') }}
    </div>
@endif


     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
    


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="" class="navbar-brand"><i class="fa fa-h-square"></i>ealthy Blood Care</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#findblood" class="smoothScroll">Find Blood</a></li>
                         <li><a href="#donateblood" class="smoothScroll">Donate Blood</a></li>
                         
                     
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Let's make your life happier</h3>
                                             <h1>Healthy Living</h1>
                                             <a href="#findblood" class="section-btn btn btn-default smoothScroll">Find Blood</a>
                                        </div>
                                   </div>
                              </div>

                            
                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Not only pray for life</h3>
                                             <h1>Your Health Benefits</h1>
                                             <a href="#donateblood" class="section-btn btn btn-default btn-blue smoothScroll">Donate Blood</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <i class="fa fa-h-square"></i>ealthy Blood Center</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>We facilitate the connection between voluntary donors and patients by ensuring a seamless, secure, and efficient donation process.</p>
                                   <p>Our blood bank is dedicated to providing a reliable and safe supply of blood and blood products to those in need.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="images/author-image.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. Neil Jackson</h3>
                                        <p>Hematologists</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>

 <!-- FIND BLOOD -->
 <section id="findblood" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Find Blood</h2>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                         <!-- FIND BLOOD FORM -->
                        
                         <form id="find-blood-form" role="form" method="post" action="{{ route('blood.search') }}">
                         @csrf

                              <div class="col-md-4 col-sm-4">
                                   <label for="blood-type">Blood Type</label>
                                   <select class="form-control" id="blood-type" name="blood-type">
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                   </select>
                              </div>

                              <div class="col-md-4 col-sm-4">
                        <label for="location">Location</label>
                        <select class="form-control" id="location" name="location">
                            <option value="nepalgunj">Nepalgunj</option>
                            <option value="koholpur">Koholpur</option>
                            <option value="khajura">Khajura</option>
                        </select>
                    </div>

                              <div class="col-md-4 col-sm-4">
                                   <button type="submit" class="search-btn" id="find-submit" name="submit">Find Blood</button>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>

           <!-- FIND BLOOD RESULTS SECTION -->
     

     <!-- BLOOD DONATE -->

     
     <section id="donateblood" data-stellar-background-ratio="2">
          <div class="container">
               <div class="row">

               

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Become a Blood Donor</h2>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                         <!-- BLOOD DONATE FORM -->
                       

                         <form id="blood-donate-form" role="form" method="post" action="{{ route('blood.donate') }}">
                        @csrf

                              <div class="col-md-6 col-sm-6">
                                   <label for="name">Name</label>
                                   <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <label for="email">Email</label>
                                   <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                              </div>

                              <div class="col-md-6 col-sm-6">
        <label for="mobile">Mobile No</label>
        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
    </div>
                              <div class="col-md-6 col-sm-6">
                                   <label for="blood-type-donate">Blood Type</label>
                                   <select class="form-control" id="blood-type-donate" name="blood-type-donate">
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                   </select>
                              </div>

                              <div class="col-md-4 col-sm-4">
                        <label for="location">Location</label>
                        <select class="form-control" id="location" name="location">
                            <option value="nepalgunj">Nepalgunj</option>
                            <option value="koholpur">Koholpur</option>
                            <option value="khajura">Khajura</option>
                        </select>
                    </div>

                              <div class="col-md-12 col-sm-12">
                                   <button type="submit" class="donate-btn" id="donate-submit" name="submit">Donate Blood</button>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>
    


     <!-- MAKE AN APPOINTMENT -->
 


     <!-- GOOGLE MAP -->
   

     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2018 Your Company 
                                   
                                   | Design: <a rel="nofollow" href="https://www.facebook.com/tooplate" target="_parent">Tooplate</a></p>
                              </div>
                         </div>
                        
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

     <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Show success message
        var successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.display = 'block';
            setTimeout(function() {
                successMessage.style.opacity = 0; // Fade out effect
                setTimeout(function() {
                    successMessage.style.display = 'none'; // Hide after fade out
                }, 500); // Match this to the fade-out duration
            }, 3000); // Display for 5 seconds
        }

        // Show error message
        var errorMessage = document.getElementById('error-message');
        if (errorMessage) {
            errorMessage.style.display = 'block';
            setTimeout(function() {
                errorMessage.style.opacity = 0; // Fade out effect
                setTimeout(function() {
                    errorMessage.style.display = 'none'; // Hide after fade out
                }, 500); // Match this to the fade-out duration
            }, 3000); // Display for 5 seconds
        }
    });
</script>

</body>
</html>