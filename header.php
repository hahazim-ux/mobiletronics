<style>
   header {
  background: none;
  position: sticky;
  top: 0;
  width: 100%;
  z-index: 1000;
  box-shadow: none; /* Optional: remove shadow */
}



    .container {
      width: 90%;
      max-width: 1200px;
      margin: auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1px 0;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: 600;
      color: #14A0EB;
    }

    .logo img {
  border-radius: 8px; /* Adjust this value as needed */
}


    nav ul {
      list-style: none;
      display: flex;
      gap: 40px;
    }

    nav li {
  display: inline-block;
  margin-left: 10px;
  padding-top: 23px;

  position: relative;
}

nav a {
  color: #fff;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 14px;
}

nav a:hover {
  color:rgb(184, 230, 254);
}

nav a::before {
  content: '';
  display: block;
  height: 5px;
    background-color:rgb(184, 230, 254);
  position: absolute;
  top: 0;
  width: 0%;

  transition: all ease-in-out 250ms;
}

nav a:hover::before {
  width: 100%;
}

    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
    }

    .hamburger span {
      height: 3px;
      width: 25px;
      background: #333;
      margin: 4px 0;
      transition: all 0.3s ease;
    }

    @media (max-width: 768px) {
      nav ul {
        position: absolute;
        top: 70px;
        right: 0;
        background: white;
        width: 100%;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        padding: 20px 0;
        display: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
      }

      nav ul.active {
        display: flex;
      }

      .hamburger {
        display: flex;
      }
    }
  </style>
</head>
<body>

<header>
  <div class="container">
  <h1 class="logo">
  <img src="<?= base_url('uploads/frontpage/mobiletronic.jpg'); ?>" alt="Mobiletronics Logo" style="height: 50px;">
</h1>

    <nav>
      <div class="hamburger" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <ul id="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Our Products</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Repair Now!</a></li>
      </ul>
    </nav>
  </div>
</header>

<script>
  function toggleMenu() {
    const navLinks = document.getElementById('nav-links');
    navLinks.classList.toggle('active');
  }
</script>

