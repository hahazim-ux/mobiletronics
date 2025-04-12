<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Footer Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">
    <style>
        :root {
            --primary-color: #b20000;
            --primary-hover: #d60000;
            --text-light: #e0e0e0;
            --text-muted: #999999;
            --bg-dark: #0c0c0c;
            --bg-darker: #070707;
            --border-color: #222;
        }

        .footer-wrapper {
            background: var(--bg-dark);
            border-top: 3px solid var(--primary-color);
            padding: 0;
            color: var(--text-light);
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0;
            display: grid;
            grid-template-columns: 1fr;
        }

        .footer-main {
            display: grid;
            grid-template-columns: 1fr;
            padding: 40px 25px;
        }

        @media (min-width: 768px) {
            .footer-main {
                grid-template-columns: 1fr 1fr;
                gap: 40px;
            }
        }

        .footer-branding {
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
        }

        .logo-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 40px;
            height: 40px;
            background-color: var(--primary-color);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            box-shadow: 0 2px 8px rgba(178, 0, 0, 0.3);
        }

        .logo img {
            width: 25px;
            height: 25px;
        }

        .brand-name {
            font-size: 1.6rem;
            font-weight: 700;
            color: white;
            letter-spacing: 0.5px;
        }

        .tagline {
            color: var(--text-light);
            font-size: 0.95rem;
            max-width: 300px;
            margin-bottom: 25px;
        }

        .social-container {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 38px;
            background-color: rgba(255, 255, 255, 0.08);
            color: var(--text-light);
            font-size: 1.2rem;
            transition: all 0.2s ease;
        }

        .social-link:hover {
            background-color: var(--primary-color);
            transform: translateY(-2px);
        }

        .footer-nav {
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
        }

        @media (min-width: 480px) {
            .footer-nav {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .footer-nav-section h3 {
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            margin-bottom: 15px;
            position: relative;
            padding-bottom: 8px;
        }

        .footer-nav-section h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 30px;
            height: 2px;
            background-color: var(--primary-color);
        }

        .footer-nav-links {
            list-style: none;
        }

        .footer-nav-links li {
            margin-bottom: 10px;
        }

        .footer-nav-links a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.2s ease;
            display: inline-block;
        }

        .footer-nav-links a:hover {
            color: white;
            transform: translateX(3px);
        }

        .footer-bottom {
            background: var(--bg-darker);
            padding: 15px 25px;
            text-align: center;
            border-top: 1px solid var(--border-color);
        }

        .copyright {
            color: var(--text-muted);
            font-size: 0.85rem;
        }

        @media (max-width: 480px) {
            .footer-main {
                padding: 30px 20px;
            }
            
            .brand-name {
                font-size: 1.4rem;
            }
            
            .logoz {
                width: 36px;
                height: 36px;
            }
            
            .logoz img {
                width: 22px;
                height: 22px;
            }
            
            .footer-nav {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <footer class="footer-wrapper">
        <div class="footer-container">
            <div class="footer-main">
                <div class="footer-branding">
                    <div class="logo-container">
                        <div class="logo">
                            <img src="{{ asset('uploads/mobiletronic.jpg') }}" alt="M">
                        </div>
                        <div class="brand-name">Mobiletronics</div>
                    </div>
                    <p class="tagline">Your devices, back in action — without the drama. Expert device repair services you can trust.</p>
                    <div class="social-container">
                        <a href="https://www.facebook.com/p/Mobile-Tronics-Solutions-100068087839201/" target="_blank" class="social-link">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.tiktok.com/@mobiletronics.solutions" target="_blank" class="social-link">
                            <i class="bi bi-tiktok"></i>
                        </a>
                    </div>
                </div>
                
                <div class="footer-nav">
                    <div class="footer-nav-section">
                        <h3>Services</h3>
                        <ul class="footer-nav-links">
                            <li>Screen Repairs</li>
                            <li>Battery Replacement</li>
                            <li>Water Damage</li>
                            <li>Data Recovery</li>
                        </ul>
                    </div>
                    
                    <div class="footer-nav-section">
                        <h3>Company</h3>
                        <ul class="footer-nav-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Book a Repair</a></li>
                            <li><a href="#">Repair Status</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p class="copyright">&copy; 2024 Mobiletronics. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>