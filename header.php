<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navbar</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Passion+One&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');

    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      padding-top: 30px; /* Space for fixed navbar */
      font-family: 'Outfit', sans-serif;
    }
    
    .navbar {
  font-family: 'Passion One', cursive;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 70px;
  padding: 10px 20px;
  background-color: #fff;
  z-index: 1000;
  box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.25);
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: all 0.3s ease;
}

.navbar-container {
  width: 100%;
  max-width: 1352px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-radius: 22.5px;
  padding: 0 15px;
  position: relative; /* Ensure positioning context */
}

.avatar-container {
  position: absolute;
  top: 100%; /* Places it below the navbar */
  right: 0;
  margin-top: 5px;
}

.avatar-container .dropdown-menu {
  position: absolute;
  top: 100%;
  right: 0;
  min-width: 150px;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.2);
  z-index:1050 !important;
}

.avatar-container img {
  cursor: pointer;
  border: 2px solid #fff;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.15);
}


    

    
        .logo {
    position: absolute;
    top: -5px; /* Distance from the top */
    left: 50%;
    transform: translateX(-50%) scale(1);
    opacity: 0.8;
    border-radius: 18.9722px;
    width: 80px;
    z-index: 2;
    transition: transform 0.3s ease;
}


.logo:hover {
  transform: translateX(-50%) scale(1.1);
        }

    .logo img {
      height: 55px;
      border-radius: 10px;
      padding-bottom: 3%;
    }
    
    .nav-links {
      display: flex;
      list-style: none;
      gap: 30px;
    }
    
    .nav-links li a {
      font-size: 18.75px;
      color: black;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    
    .nav-links li a:hover {
      color: #F13FA8;
    }
    
    .auth-buttons {
      display: flex;
      gap: 15px;
    }
    
    .login-btn, .signup-btn {
      background-color: #F13FA8;
      color: #FFDBF0;
      border: none;
      border-radius: 15px;
      padding: 5px 20px;
      font-family: 'Passion One', cursive;
      font-size: 18.75px;
      cursor: pointer;
      transition: all 0.3s ease;
      filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    }
    
    .login-btn:hover, .signup-btn:hover {
      background-color: #d82f92;
    }
    
    .hamburger {
      display: none;
      flex-direction: column;
      justify-content: space-between;
      width: 30px;
      height: 21px;
      cursor: pointer;
    }
    
    .hamburger span {
      display: block;
      height: 3px;
      width: 100%;
      background-color: #4CC2A7;
      border-radius: 3px;
      transition: all 0.3s ease;
    }
    
    .user-avatar {
      width: 37px;
      height: 31px;
      background-color: #EADDFF;
      border-radius: 75px;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
    
    .user-avatar-placeholder {
      width: 70%;
      height: 65%;
      background-color: #4F378A;
      border-radius: 50%;
    }

    
    /* Responsive styles */
    @media (max-width: 1024px) {
      .nav-links {
        gap: 15px;
      }
      
      .nav-links li a {
        font-size: 16px;
      }
      
      .login-btn, .signup-btn {
        font-size: 16px;
        padding: 5px 15px;
      }
    }
    
    @media (max-width: 768px) {
      .hamburger {
        display: flex;
        z-index: 1001;
      }
      
      .nav-links {
        position: fixed;
        top: 0;
        left: -100%;
        width: 70%;
        height: 100vh;
        background-color: white;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transition: left 0.5s ease;
        z-index: 999;
        box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
      }
      
      .nav-links.active {
        left: 0;
      }
      
      .nav-links li {
        margin: 15px 0;
      }
      
      .nav-links li a {
        font-size: 20px;
      }
      
      .auth-buttons {
        gap: 10px;
      }
      
      .login-btn, .signup-btn {
        padding: 5px 10px;
        font-size: 16px;
      }
    }
    
    @media (max-width: 480px) {
      .logo img {
        height: 30px;
      }
      
      .auth-buttons {
        flex-direction: column;
        gap: 5px;
      }
      
      .login-btn, .signup-btn {
        padding: 3px 10px;
        font-size: 14px;
      }
      
      .navbar {
        height: 60px;
      }
      
      body {
        padding-top: 60px;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <div class="navbar-container">
      <div class="hamburger" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
      </div>
      
      <ul class="nav-links">
        <li><a href="<?= base_url('tinta/about/index'); ?>">About Us</a></li>
        <li><a href="<?= base_url('tinta/stagevr/index'); ?>">Stage VR</a></li>
        <li><a href="<?= base_url('tinta/whatson/index'); ?>">What's On?</a></li>
      </ul>
      
      <div class="logo">
        <a href="<?= base_url('tinta/home'); ?>">
        <img src="<?= base_url('uploads/frontpage/fmsp.png'); ?>" alt="Logo">
        </a>
      </div>
      
      <ul class="nav-links">
        <li><a href="<?= base_url('tinta/associates/index'); ?>">Associates</a></li>
        <li><a href="<?= base_url('tinta/faq/index'); ?>">FAQ</a></li>
        <li><a href="<?= base_url('tinta/gallery/index'); ?>">Gallery</a></li>
      </ul>

      <div class="avatar-container">
  <div class="dropdown">
    <a href="#" class="dropdown-toggle" id="avatarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="rounded-circle" width="40" height="40">
    </a>
    <ul class="dropdown-menu dropdown-menu-end" id="avatarDropdownMenu" aria-labelledby="avatarDropdown">
      <?php if (session()->get('isUserLoggedIn')): ?>
        <li><a class="dropdown-item" href="<?= site_url('tinta/user/profile') ?>">View Profile</a></li>
        <li><a class="dropdown-item" href="<?= site_url('tinta/user/book_history') ?>">View Booking History</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a href="#" class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
      <?php else: ?>
        <li><a class="dropdown-item" href="<?= site_url('auth/login') ?>">Login</a></li>
      <?php endif; ?>
    </ul>
  </div>
</div>

    </div>
  </nav>

  <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">
                        <i class="bi bi-exclamation-triangle-fill text-danger"></i> Confirm Logout
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center" style="color: black; ">
                    <h4>Are you sure you want to log out?</h4>
                </div>
                <div class="modal-footer">
                    <a href="<?= base_url('user/logout'); ?>" class="btn btn-danger">
                        <i class="bi bi-box-arrow-right"></i> Yes, Logout
                    </a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle"></i> Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
  
  <script>
    function toggleMenu() {
      const navLinks = document.querySelector('.nav-links');
      navLinks.classList.toggle('active');
      
      const hamburgerBars = document.querySelectorAll('.hamburger span');
      if (navLinks.classList.contains('active')) {
        hamburgerBars[0].style.transform = 'rotate(45deg) translate(5px, 6px)';
        hamburgerBars[1].style.opacity = '0';
        hamburgerBars[2].style.transform = 'rotate(-45deg) translate(5px, -6px)';
      } else {
        hamburgerBars[0].style.transform = 'rotate(0)';
        hamburgerBars[1].style.opacity = '1';
        hamburgerBars[2].style.transform = 'rotate(0)';
      }
    }
    
    // Add shadow on scroll
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 10) {
        navbar.style.boxShadow = '0 4px 10px rgba(0, 0, 0, 0.3)';
      } else {
        navbar.style.boxShadow = '0px 3px 3px rgba(0, 0, 0, 0.25)';
      }
    });
  </script>
  <script>
document.addEventListener("DOMContentLoaded", function() {
    let avatarDropdown = document.getElementById("avatarDropdown");
    let dropdownMenu = document.getElementById("avatarDropdownMenu");

    // Prevent dropdown from closing when clicking inside it
    dropdownMenu.addEventListener("click", function(event) {
        event.stopPropagation();
    });

    // Ensure dropdown closes properly when clicking outside
    document.addEventListener("click", function(event) {
        if (!avatarDropdown.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove("show");
        }
    });

    // Fix Bootstrap event conflicts (Accordion, Modals, etc.)
    document.querySelectorAll(".accordion-button, .modal").forEach(el => {
        el.addEventListener("click", function(event) {
            event.stopPropagation();
        });
    });
});
</script>

  <!-- Bootstrap Bundle (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
