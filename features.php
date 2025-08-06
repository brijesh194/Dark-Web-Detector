<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Features - Dark Web Detector</title>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.net.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.fog.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- Head में AOS CSS add -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body {
  font-family: 'Orbitron', sans-serif;
  color: #0ff;
  overflow-x: hidden;
  background: #0a0a0a;
}
#vanta-bg {
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0; left: 0;
  z-index: -1;
}

/* Navbar */
nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: rgba(18,18,18,0.8);
  padding: 15px 20px;
  position: relative;
  z-index: 1000;
}
nav .logo {
  color: #0ff;
  font-size: 22px;
  font-weight: bold;
}
nav ul {
  display: flex;
  list-style: none;
}
nav ul li {
  margin-left: 20px;
}
nav ul li a {
  text-decoration: none;
  color: #0ff;
  transition: 0.3s;
}
nav ul li a:hover {
  color: #fff;
}
.menu-toggle {
  display: none;
  font-size: 24px;
  cursor: pointer;
  color: #0ff;
}
@media (max-width: 768px) {
  nav ul {
    display: none;
    flex-direction: column;
    background: rgba(0,0,0,0.9);
    position: absolute;
    top: 60px;
    right: 0;
    width: 200px;
    padding: 15px;
    border-left: 1px solid #0ff;
  }
  nav ul.active { display: flex; }
  .menu-toggle { display: block; }
}

/* Page Title */
.page-header {
  text-align: center;
  padding: 80px 20px 30px;
}
.page-header h1 {
  font-size: 34px;
  color: #0ff;
}
.page-header p {
  color: #ccc;
  max-width: 700px;
  margin: 10px auto 0;
  font-size: 15px;
  line-height: 1.6;
}

/* Features Grid */
.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
  padding: 40px 20px;
  max-width: 1100px;
  margin: auto;
}
.feature-card {
  background: rgba(26, 26, 26, 0.7);
  padding: 25px;
  border-radius: 10px;
  border: 1px solid rgba(0,255,255,0.3);
  text-align: center;
  transition: 0.3s;
}
.feature-card:hover {
  transform: translateY(-5px);
  background: rgba(0, 255, 255, 0.05);
  box-shadow: 0 0 15px rgba(0,255,255,0.2);
}
.feature-card i {
  font-size: 40px;
  margin-bottom: 15px;
  color: #0ff;
}
.feature-card h3 {
  color: #0ff;
  margin-bottom: 10px;
}
.feature-card p {
  font-size: 14px;
  color: #aaa;
  line-height: 1.5;
}

/* Button */
.switch-btn {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background: #0ff;
  color: #000;
  border: none;
  padding: 8px 16px;
  font-size: 14px;
  border-radius: 6px;
  cursor: pointer;
  z-index: 1001;
}
.switch-btn:hover {
  background: #0cc;
}

/* Responsive */
@media (max-width: 500px) {
  .page-header h1 { font-size: 26px; }
}

.futuristic-footer {
  position: relative;
  overflow: hidden;
  padding: 60px 20px 30px;
  background: #0a0a0a;
  border-top: 2px solid #0ff;
}

.footer-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: repeating-linear-gradient(
    to bottom,
    rgba(0, 255, 255, 0.05),
    rgba(0, 255, 255, 0.05) 2px,
    transparent 2px,
    transparent 4px
  );
  animation: scanLines 5s linear infinite;
  z-index: 0;
  pointer-events: none;
}

@keyframes scanLines {
  0% {
    background-position-y: 0;
  }
  100% {
    background-position-y: 100px;
  }
}

.footer-glass {
  position: relative;
  backdrop-filter: blur(10px);
  background: rgba(0, 255, 255, 0.05);
  border: 1px solid rgba(0, 255, 255, 0.3);
  border-radius: 15px;
  padding: 40px;
  z-index: 1;
  box-shadow: 0 0 30px rgba(0, 255, 255, 0.2);
  transition: all 0.5s ease;
}

.footer-glass:hover {
  box-shadow: 0 0 50px rgba(0, 255, 255, 0.4);
  border-color: #0ff;
}

.footer-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 30px;
  color: #0ff;
  z-index: 2;
}

.footer-section {
  flex: 1 1 250px;
  color: #ccc;
}

.footer-section h3,
.footer-section h4 {
  color: #0ff;
  text-shadow: 0 0 10px #0ff;
  margin-bottom: 15px;
}

.footer-section p,
.footer-section a {
  color: #aaa;
  font-size: 14px;
  text-decoration: none;
}

.footer-section a:hover {
  color: #fff;
  text-shadow: 0 0 5px #0ff;
}

.footer-section ul {
  list-style: none;
  padding: 0;
}

.footer-section ul li {
  margin-bottom: 10px;
}

.socials a {
  margin-right: 10px;
  font-size: 20px;
  color: #0ff;
  transition: transform 0.3s ease;
}

.socials a:hover {
  transform: scale(1.2);
  color: #fff;
  text-shadow: 0 0 5px #0ff;
}

.footer-bottom {
  text-align: center;
  margin-top: 40px;
  font-size: 12px;
  color: #777;
  z-index: 2;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
  .footer-container {
    flex-direction: column;
    text-align: center;
  }
  .footer-section {
    margin-bottom: 20px;
  }
}

.futuristic-footer::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: radial-gradient(circle at center, rgba(0,255,255,0.05), transparent 70%);
  z-index: 0;
}

</style>
</head>
<body>

<div id="vanta-bg"></div>

<nav>
  <div class="logo">Dark Web Detector</div>
  <span class="menu-toggle" onclick="toggleMenu()">☰</span>
  <ul id="menu">
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="features.php">Features</a></li>
    <li><a href="price.php">Pricing</a></li>
    <li><a href="faq.php">FAQ</a></li>
  </ul>
</nav>

<div class="page-header" data-aos="fade-up">
  <h1>Our Powerful Features</h1>
  <p>Advanced tools designed to keep you safe from dark web threats. Explore our key features that provide maximum protection and peace of mind.</p>
</div>

<div class="features-grid" data-aos="zoom-in">
  <div class="feature-card">
    <i class="fas fa-search"></i>
    <h3>Real-Time Scanning</h3>
    <p>Instant scanning across thousands of dark web sources to detect stolen data.</p>
  </div>
  <div class="feature-card" data-aos="zoom-in">
    <i class="fas fa-bell"></i>
    <h3>Instant Alerts</h3>
    <p>Receive immediate alerts when your data appears on suspicious platforms.</p>
  </div>
  <div class="feature-card" data-aos="zoom-in">
    <i class="fas fa-user-shield"></i>
    <h3>Identity Protection</h3>
    <p>AI-powered monitoring tools to keep your personal information secure.</p>
  </div>
  <div class="feature-card" data-aos="zoom-in">
    <i class="fas fa-lock"></i>
    <h3>Strong Encryption</h3>
    <p>Your data is encrypted using the latest security protocols for complete privacy.</p>
  </div>
  <div class="feature-card" data-aos="zoom-in">
    <i class="fas fa-database"></i>
    <h3>Data Breach Reports</h3>
    <p>Detailed breach reports to understand what information has been exposed.</p>
  </div>
  <div class="feature-card" data-aos="zoom-in">
    <i class="fas fa-headset"></i>
    <h3>24/7 Support</h3>
    <p>Our experts are available round the clock to assist you with any queries.</p>
  </div>
</div>

<button class="switch-btn" onclick="switchBackground()">Switch Background</button>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({
  duration: 1200,
  once: true
});
</script>
<footer class="futuristic-footer">
  <div class="footer-overlay"></div>
  <div class="footer-glass">
    <div class="footer-container">
      <div class="footer-section about">
        <h3>Dark Web Detector</h3>
        <p>Protect your identity. Stay one step ahead of data breaches and digital threats.</p>
      </div>
      <div class="footer-section links">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Scan</a></li>
          <li><a href="#">About</a></li>
        </ul>
      </div>
      <div class="footer-section contact">
        <h4>Contact</h4>
        <p><i class="fas fa-envelope"></i> support@darkwebdetector.com</p>
        <div class="socials">
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-github"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>
    <p class="footer-bottom">© 2025 Dark Web Detector | Stay safe, stay secure 🔒</p>
    <p class="footer-bottom">Powerd By Brijesh Prajapati </p>
  </div>
</footer>

<script>
let vantaEffect;
let currentEffect = "net";

function loadNet() {
  if (vantaEffect) vantaEffect.destroy();
  vantaEffect = VANTA.NET({
    el: "#vanta-bg",
    mouseControls: true,
    touchControls: true,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    color: 0x00ffff,
    backgroundColor: 0x0a0a0a,
    points: 12.00,
    maxDistance: 20.00,
    spacing: 15.00
  });
}

function loadFog() {
  if (vantaEffect) vantaEffect.destroy();
  vantaEffect = VANTA.FOG({
    el: "#vanta-bg",
    highlightColor: 0x00ffff,
    midtoneColor: 0x0ff,
    lowlightColor: 0x000000,
    baseColor: 0x0a0a0a,
    blurFactor: 0.5,
    speed: 1.50,
    zoom: 0.8
  });
}

function switchBackground() {
  if (currentEffect === "net") {
    loadFog();
    currentEffect = "fog";
  } else {
    loadNet();
    currentEffect = "net";
  }
}

function toggleMenu() {
  document.getElementById("menu").classList.toggle("active");
}

loadNet();
</script>

</body>
</html>
