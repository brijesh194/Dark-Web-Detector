<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Pricing - Dark Web Detector</title>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.net.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.fog.min.js"></script>
<style>
* {margin: 0; padding: 0; box-sizing: border-box;}
body {
  font-family: 'Orbitron', sans-serif;
  color: #0ff;
  overflow-x: hidden;
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
  nav ul.active {display: flex;}
  .menu-toggle {display: block;}
}

/* Pricing Section */
.pricing-container {
  text-align: center;
  padding: 80px 20px;
  max-width: 1100px;
  margin: auto;
}
.pricing-container h1 {
  font-size: 34px;
  margin-bottom: 10px;
}
.pricing-container p {
  color: #ccc;
  margin-bottom: 40px;
}

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
}
.card {
  background: rgba(0, 0, 0, 0.6);
  border: 1px solid rgba(0,255,255,0.3);
  padding: 30px;
  border-radius: 10px;
  transition: 0.3s;
  text-align: center;
}
.card:hover {
  transform: translateY(-5px);
  background: rgba(0,255,255,0.05);
}
.card h3 {
  color: #0ff;
  margin-bottom: 10px;
}
.price {
  font-size: 28px;
  margin: 15px 0;
}
.features {
  list-style: none;
  padding: 0;
  margin: 20px 0;
}
.features li {
  color: #aaa;
  margin-bottom: 8px;
}
.buy-btn {
  background: #0ff;
  color: #000;
  border: none;
  padding: 10px 20px;
  font-size: 15px;
  border-radius: 6px;
  cursor: pointer;
  transition: 0.3s;
}
.buy-btn:hover {
  background: #0cc;
}

/* Switch button */
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
.switch-btn:hover {background: #0cc;}
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

<section class="pricing-container">
  <h1>Our Pricing Plans</h1>
  <p>Choose a plan that fits your needs and keep your data safe from dark web threats.</p>
  
  <div class="cards">
    <div class="card">
      <h3>Free</h3>
      <p class="price">$0 / month</p>
      <ul class="features">
        <li>Basic Dark Web Scan</li>
        <li>Monthly Reports</li>
        <li>Email Alerts</li>
      </ul>
      <button class="buy-btn" onclick="buyNow(0)">Get Started</button>
    </div>
    <div class="card">
      <h3>Standard</h3>
      <p class="price">$2.99 / month</p>
      <ul class="features">
        <li>Real-Time Scans</li>
        <li>Weekly Reports</li>
        <li>Identity Monitoring</li>
      </ul>
      <button class="buy-btn" onclick="buyNow(999)">Subscribe</button>
    </div>
    <div class="card">
      <h3>Premium</h3>
      <p class="price">$5.99 / month</p>
      <ul class="features">
        <li>Unlimited Real-Time Scans</li>
        <li>Email + Phone + Image Detection</li>
        <li>Daily Reports</li>
        <li>24/7 Support</li>
      </ul>
      <button class="buy-btn" onclick="buyNow(1999)">Subscribe</button>
    </div>
  </div>
</section>

<button class="switch-btn" onclick="switchBackground()">Switch Background</button>

<!-- Footer Placeholder -->
<footer style="text-align:center; padding:20px; color:#aaa;">
  © 2025 Dark Web Detector | Stay safe, stay secure 🔒
</footer>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
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
  if (currentEffect === "net") { loadFog(); currentEffect = "fog"; }
  else { loadNet(); currentEffect = "net"; }
}
function toggleMenu() {
  document.getElementById("menu").classList.toggle("active");
}
function buyNow(amount) {
  let options = {
    key: "rzp_test_1sKWSqkzYjOlTH",
    amount: amount * 100,
    currency: "INR",
    name: "Dark Web Detector",
    description: "Plan Purchase",
    handler: function (response){
      alert("Payment Successful: " + response.razorpay_payment_id);
    },
    theme: { color: "#0ff" }
  };
  let rzp1 = new Razorpay(options);
  rzp1.open();
}

loadNet();
</script>

</body>
</html>
