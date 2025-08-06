<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dark Web Detector</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />


  <style>
    * {
      margin: 0; padding: 0; box-sizing: border-box;
    }

    body {
      font-family: 'Orbitron', sans-serif;
      background: #0f0f0f;
      color: #0ff;
      overflow-x: hidden;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #121212;
      padding: 20px 50px;
      position: relative;
      top: 0;
      z-index: 1000;
    }

    nav .logo {
      color: #0ff;
      font-size: 28px;
      font-weight: bold;
    }

    nav ul {
      display: flex;
      list-style: none;
    }

    nav ul li {
      margin-left: 30px;
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
      font-size: 26px;
      cursor: pointer;
      color: #0ff;
    }

    @media (max-width: 768px) {
      .menu-toggle {
        display: block;
      }

      nav ul {
        flex-direction: column;
        background: #111;
        position: absolute;
        top: 85px;
        right: 50px;
        width: 90px;
        transform: translateX(100%);
        transition: transform 0.4s ease-in-out;
        display: none;
        padding: 10px 0;
        border-left: 1px solid #0ff;
        padding: 20px;
        border-radius: 0 0 10px 10px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        pointer-events: none;
        z-index: 999;
      }

      nav ul.active {
        display: flex;
        transform: translateX(0); /* slide in */
        opacity: 1;
        pointer-events: auto;
      }

      nav ul {
  transition: all 0.3s ease;
}
    }
    

    .container {
      text-align: center;
      padding: 80px 20px;
    }

    .container h1 {
      font-size: 48px;
      color: #0ff;
      margin-bottom: 20px;
      animation: pulse 2s infinite;
    }

    .container p {
      color: #aaa;
      max-width: 600px;
      margin: auto;
      margin-bottom: 40px;
    }

    .features {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      padding: 50px;
    }
    

    .feature-box {
      background: #1a1a1a;
      padding: 30px;
      flex: 1 1 250px;
      max-width: 300px;
      text-align: center;
      border-radius: 12px;
      border: 1px solid #0ff;
      transition: 0.3s;
    }

    .feature-box:hover {
      transform: scale(1.05);
      background: #0ff2;
    }

    .feature-box i {
      font-size: 40px;
      margin-bottom: 15px;
      color: #0ff;
    }
    @media only screen and (max-width: 768px) {
  .features {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px; /* spacing between boxes */
    padding: 20px;
  }

  .feature-box {
    width: 90%;
    max-width: 400px;
    text-align: center;
  }

  .feature-box i {
    font-size: 30px;
    margin-bottom: 10px;
  }

  .feature-box h3 {
    font-size: 20px;
  }

  .feature-box p {
    font-size: 14px;
  }
}



    .start-btn {
      padding: 15px 30px;
      font-size: 18px;
      background: #0ff;
      border: none;
      border-radius: 5px;
      color: #000;
      cursor: pointer;
      transition: 0.3s;
    }

    .start-btn:hover {
      background: #0cc;
    }

    @keyframes pulse {
      0% { text-shadow: 0 0 5px #0ff; }
      50% { text-shadow: 0 0 20px #0ff; }
      100% { text-shadow: 0 0 5px #0ff; }
    }

    /* Popup */
    .popup {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(0,0,0,0.8);
      backdrop-filter: blur(5px);
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .popup-content {
      background: #111;
      padding: 40px;
      border-radius: 10px;
      width: 90%;
      max-width: 500px;
      border: 2px solid #0ff;
      box-shadow: 0 0 20px #0ff;
      position: relative;
    }

    .popup-content h2 {
      color: #0ff;
      margin-bottom: 20px;
    }

    .popup-content input,
    .popup-content button {
      width: 100%;
      margin: 10px 0;
      padding: 12px;
      border: none;
      border-radius: 5px;
    }

    .popup-content input {
      background: #222;
      color: #0ff;
    }

    .popup-content button {
      background: #0ff;
      color: #000;
      font-weight: bold;
    }

    .animated-popup {
  animation: zoomIn 0.5s ease;
  position: relative;
}

@keyframes zoomIn {
  from {
    transform: scale(0.7);
    opacity: 0;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}

.hidden {
  display: none;
}

.scan-animation {
  margin-top: 20px;
  color: #0f0;
  font-family: 'Share Tech Mono', monospace;
  background: #000;
  padding: 20px;
  border: 1px solid #0f0;
  border-radius: 8px;
}

.terminal-text {
  animation: flicker 1.5s infinite alternate;
}

@keyframes flicker {
  0% { opacity: 1; }
  100% { opacity: 0.6; }
}

.dots::after {
  content: '';
  animation: dots 1.5s infinite;
}

@keyframes dots {
  0% { content: '.'; }
  33% { content: '..'; }
  66% { content: '...'; }
  100% { content: '.'; }
}


    .close-btn {
      position: absolute;
      top: 10px; right: 15px;
      font-size: 22px;
      color: #0ff;
      cursor: pointer;
    }

    #scanBtn{
        cursor: pointer;
    }

    /* Responsive Nav */
    /* @media (max-width: 768px) {
      nav ul {
        flex-direction: column;
        background: #111;
        position: absolute;
        top: 70px;
        right: 0;
        width: 200px;
        display: none;
      }

      nav ul.active {
        display: flex;
      }

      .menu-toggle {
        display: block;
        font-size: 24px;
        color: #0ff;
        cursor: pointer;
      }
    } */

       
    #box{
        color: gray;
    }
    #im{
        font-family:'Share Tech Mono', monospace ;
    }
    .glow-border {
      border: 2px solid #0ff;
      box-shadow: 0 0 12px #0ff;
      transition: all 0.3s ease;
    }

    .glow-border:focus, .glow-border:hover {
      box-shadow: 0 0 24px #0ff;
      outline: none;
    }

    
#resultMessage.success {
  background-color: #d4edda;
  color: #155724;
}

#resultMessage.error {
  background-color: #f8d7da;
  color: #721c24;
}

@keyframes typewriter {
  0% {opacity: 0;}
  100% {opacity: 1;}
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

  <nav>
    <div class="logo">Dark Web Detector</div>
    <div class="menu-toggle" id="menu-toggle" onclick="toggleMenu()">☰</div>
    <ul id="menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="features.php">Features</a></li>
      <li><a href="price.php">Pricing</a></li>
      <li><a href="faq.php">FAQ</a></li>
    </ul>
  </nav>

  <div class="container">
    <h1>Is Your Data On the Dark Web?</h1>
    <p>Scan your email, phone number, and images to detect if your personal information is leaked on illegal platforms.</p>
    <button class="start-btn" onclick="openPopup()">🔍 Start Scan</a></button>
  </div>

  <div class="features">
    <div class="feature-box">
      <i class="fas fa-user-shield"></i>
      <h3>Identity Protection</h3>
      <p>Find out if your personal data has been leaked online.</p>
    </div>
    <div class="feature-box">
      <i class="fas fa-shield-alt"></i>
      <h3>Data Breach Alerts</h3>
      <p>Get notified if your details are found on the dark web.</p>
    </div>
    <div class="feature-box">
      <i class="fas fa-image"></i>
      <h3>Image Recognition</h3>
      <p>Know if your photo is being misused on suspicious sites.</p>
    </div>
    <div class="feature-box">
      <i class="fas fa-search"></i>
      <h3>Real-Time Scan</h3>
      <p>Quickly scan data in real-time with intelligent detection.</p>
    </div>
  </div>

  

  <!-- Popup Form -->
<div class="popup" id="popup">
  <div class="popup-content animated-popup">
    <span class="close-btn" onclick="closePopup()">&times;</span>
    <h2 class="neon-text">🧠 Scan Your Identity</h2>

    <form id="scanForm" enctype="multipart/form-data">
      <label class="block mb-1 text-gray-300" id="box">📧 Email</label>
      <input type="email" name="email" placeholder="Enter your email" id="fill" required autocomplete="off" class="w-full p-2 rounded bg-gray-800 text-white glow-border"/>
      <label class="block mb-1 text-gray-300" id="box">Password</label>
      <input type="password" name="password" placeholder="Enter your password" id="fill" required class="w-full p-2 rounded bg-gray-800 text-white glow-border"/>
     
      <label class="block mb-1 text-gray-300" id="box">📱 Phone Number</label>
      <input type="text" name="phone"  id="mobile" maxlength="10"  placeholder="Enter your phone number"id="fill" required autocomplete="off" class="w-full p-2 rounded bg-gray-800 text-white glow-border"/>
      
      <button type="submit" id="scanBtn">🔍 Scan Now</button>
    </form>

    <!-- Hacker animation box -->
<div id="hackerAnimation" style="display:none; background:black; color:#00ff00; padding:20px; font-family:monospace; height:200px; overflow:auto;">
  <p id="animationText">Initializing Scan...</p>
</div>



<!-- Result message -->
<div id="resultMessage" style="display:none; padding:15px; font-weight:bold; border-radius:8px;"></div>
    <!-- Scan Animation -->
    <div id="scanAnimation" class="scan-animation hidden">
      <p class="terminal-text">Initializing scan...</p>
      <p class="terminal-text">Scanning dark web ⏳<span class="dots">.</span></p>
    </div>
  </div>
</div>


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
  function openPopup() {
    document.getElementById("popup").style.display = "flex";
    document.getElementById("scanAnimation").classList.add("hidden");
    document.getElementById("scanForm").reset();
    const loader = document.getElementById("loader");
    document.getElementById("scanBtn").disabled = false;
    document.getElementById("scanBtn").innerText = "🔍 Scan Now";
  }

  function closePopup() {
    document.getElementById("popup").style.display = "none";
  }
    // Show loader first
    loader.style.display = "block";
    resultBox.innerHTML = ""; // clear old result


  // function startScan(e) {
  //   e.preventDefault();
  //   const btn = document.getElementById("scanBtn");
  //   btn.disabled = true;
  //   btn.innerText = "🔄 Scanning...";
  //   document.getElementById("scanAnimation").classList.remove("hidden");

    // Simulate scanning (2.5 sec delay then redirect or success)
    setTimeout(() => {
      window.location.href = "scan.php"; // Change to your real backend file
    }, 2500);
  

  // function toggleMenu() {
  //   document.getElementById("menu").classList.toggle("active");
  // }
</script>

<script>
document.getElementById("scanForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);
    const hackerAnimation = document.getElementById("hackerAnimation");
    const animationText = document.getElementById("animationText");
    const resultBox = document.getElementById("resultMessage");

    // Reset & show animation
    hackerAnimation.style.display = "block";
    animationText.innerHTML = "🟢 Initializing scan...\n";
    resultBox.style.display = "none";

    const lines = [
        "Connecting to secure servers...",
        "Analyzing metadata...",
        "Searching across dark web...",
        "Checking illegal site databases...",
        "Validating encryption status...",
        "Finalizing threat report..."
    ];
    let index = 0;
    let interval = setInterval(() => {
        if (index < lines.length) {
            animationText.innerHTML += lines[index++] + "<br>";
            hackerAnimation.scrollTop = hackerAnimation.scrollHeight;
        }
    }, 3000); // every 3s

    // After 20s, stop animation and start processing
    setTimeout(() => {
        clearInterval(interval);
        hackerAnimation.style.display = "none";

        // First check password
        fetch("scan.php", {
            method: "POST",
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.status === "error") {
                resultBox.className = "error";
                resultBox.innerText = "❌ Error: " + data.message;
                resultBox.style.display = "block";
                return;
            }

            if (data.status === "breached" && data.type === "password") {
                resultBox.className = "error";
                resultBox.innerText = "🚨 Alert! Your password is found on illegal websites." + data.details;
            } else {
                resultBox.className = "success";
                resultBox.innerText = "✅ Your password is safe. No breach found.";
            }

            resultBox.style.display = "block";

            // Show password result for 3s
            setTimeout(() => {
                // Show "Checking email..." for 5s
                resultBox.className = "info";
                resultBox.innerText = "🔍 Checking email...";
                
                // Wait 5s before showing actual email result
                setTimeout(() => {
                    fetch("scan.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(res => res.json())
                    .then(emailData => {
                        if (emailData.status === "breached" && emailData.type === "email") {
                            resultBox.className = "error";
                            resultBox.innerText = "⚠️ Email Leaked: " + emailData.details;
                        } else {
                            resultBox.className = "success";
                            resultBox.innerText = "✅ Email looks safe!";
                        }

                        // Show email result for 3s, then hide everything
                        setTimeout(() => {
                            resultBox.style.display = "none";
                            form.reset();
                        }, 3000);
                    });
                }, 5000);
            }, 3000); // password result delay
        })
        .catch(() => {
            resultBox.style.display = "block";
            resultBox.className = "error";
            resultBox.innerText = "❌ Scan failed. Try again later.";
            setTimeout(() => resultBox.style.display = "none", 5000);
        });

    }, 20000); // after animation
});
</script>

<script>
  document.getElementById('mobile').addEventListener('input', function (e) {
    // केवल digits ही रहने देंगे
    this.value = this.value.replace(/[^0-9]/g, '');
  });
</script>

<script>
    const toggleBtn = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");

    toggleBtn.addEventListener("click", () => {
      menu.classList.toggle("active");
    });
  </script>

</body>
</html>
