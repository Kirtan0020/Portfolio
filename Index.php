<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kirtan Prajapati - Portfolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
    html { scroll-behavior: smooth; }
  </style>
 <script>
    window.addEventListener("scroll", function () {
      const navbar = document.getElementById("navbar");
      if (window.scrollY > 10) {
        navbar.classList.add("backdrop-blur", "bg-white/30", "shadow-md");
        navbar.classList.remove("bg-indigo-700"); // Remove original bg
      } else {
        navbar.classList.remove("backdrop-blur", "bg-white/30", "shadow-md");
        navbar.classList.add("bg-indigo-700"); // Reapply original bg
      }
    });
  </script>
</head>
<body class="bg-gray-50 antialiased">

  <!-- Navbar -->
  <nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-indigo-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        <a href="#" class="flex items-center space-x-3">
          <img src="Image/logo.png" class="h-8" alt="Logo">
          <span class="text-xl font-bold text-gray-800">Kirtan Prajapati</span>
        </a>
        <div class="hidden md:flex space-x-8">
          <a href="#home" class="text-black font-semibold hover:text-gray-500">Home</a>
          <a href="#about" class="text-black font-semibold hover:text-gray-500">About</a>
          <a href="#projects" class="text-black font-semibold hover:text-gray-500">Projects</a>
          <a href="#skills" class="text-black font-semibold hover:text-gray-500">Skills</a>
          <a href="#contact" class="text-black font-semibold hover:text-gray-500">Contact</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section id="home" class="bg-gradient-to-r from-indigo-700 to-purple-600 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20 flex flex-col md:flex-row items-center">
      <div class="md:w-1/2 mb-10 md:mb-0">
        <img src="Image/006.jpg"
        class="rounded-2xl shadow-2xl w-full max-w-md h-auto transform transition-all duration-500 border-4 border-indigo-500"
        alt="Kirtan Image">
      </div>
      <div class="md:w-1/2 md:pl-12 text-center md:text-left">
        <h1 class="text-4xl font-bold mb-4">Hi, I'm Kirtan Prajapati</h1>
        <p class="mb-6 text-lg leading-relaxed">Crafting user-friendly websites with a perfect blend of design and function. Let me help bring your vision to life.</p>
        <a href="#contact" class="inline-block px-6 py-3 bg-white text-indigo-700 font-semibold rounded-lg shadow hover:shadow-lg transition-transform transform hover:scale-105">Contact Me</a>
      </div>
    </div>
  </section>

  <!-- About Me -->
  <section id="about" class="py-20 bg-gray-100">
    <div class="max-w-5xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-semibold text-indigo-700">About Me</h2>
      <p class="mt-6 text-gray-700 leading-relaxed">
      Hi! I'm Kirtan Prajapati, a Web Developer and WordPress enthusiast with a passion for building modern, responsive, and user-friendly websites. I'm currently pursuing a degree in Computer Science Engineering (AIML), and I specialize in creating custom WordPress websites that not only look great but also perform flawlessly.

I enjoy working with both code and design — whether it's crafting a clean front-end with HTML, CSS, and JavaScript, or customizing WordPress themes and plugins to fit unique project needs. From personal portfolios to business websites, I love helping ideas turn into functional, polished websites.

I’m always learning, experimenting with new technologies, and staying up-to-date with the latest trends in web development. If you’re looking for someone who’s passionate, detail-oriented, and easy to work with — I’d love to connect!
      </p>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">
      <h2 class="text-3xl font-semibold text-center text-indigo-700">My Projects</h2>
      <div class="mt-10 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
       <a href="uttam.html">
        <div class="bg-gray-50 rounded-lg shadow p-6 hover:shadow-xl transition-shadow">
          <img src="Image/003.png" class="w-full h-48 object-cover rounded" alt="Project 1">
          <h3 class="mt-4 text-xl font-bold">Uttam Interior</h3>
          <p class="text-gray-600">WordPress portfolio site with custom plugins and responsive layout.</p>
        </div>
    </a>
      <a href="CP.html">
        <div class="bg-gray-50 rounded-lg shadow p-6 hover:shadow-xl transition-shadow">
          <img src="Image/004.png" class="w-full h-48 object-cover rounded" alt="Project 2">
          <h3 class="mt-4 text-xl font-bold">Comfort Plumbing</h3>
          <p class="text-gray-600">Clean and modern business website for a local company.</p>
        </div>
        <a href="KK.html">
        <div class="bg-gray-50 rounded-lg shadow p-6 hover:shadow-xl transition-shadow">
          <img src="Image/005.png" class="w-full h-48 object-cover rounded" alt="Project 3">
          <h3 class="mt-4 text-xl font-bold">Karolina Kobialka</h3>
          <p class="text-gray-600">Interactive landing page with Tailwind and JavaScript animations.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills" class="bg-gray-100 py-20">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-semibold text-indigo-700">My Skills</h2>
      <p class="text-gray-700 mt-4">Technologies I work with:</p>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 mt-10">
        <div class="bg-white rounded-lg p-4 shadow hover:bg-indigo-50 transition">
          <img src="path/to/html-icon.png" class="w-10 mx-auto mb-2" alt="HTML">
          <h3 class="text-lg font-medium">HTML</h3>
        </div>
        <div class="bg-white rounded-lg p-4 shadow hover:bg-indigo-50 transition">
          <img src="path/to/css-icon.png" class="w-10 mx-auto mb-2" alt="CSS">
          <h3 class="text-lg font-medium">CSS</h3>
        </div>
        <div class="bg-white rounded-lg p-4 shadow hover:bg-indigo-50 transition">
          <img src="path/to/js-icon.png" class="w-10 mx-auto mb-2" alt="JavaScript">
          <h3 class="text-lg font-medium">JavaScript</h3>
        </div>
        <div class="bg-white rounded-lg p-4 shadow hover:bg-indigo-50 transition">
          <img src="path/to/tailwind-icon.png" class="w-10 mx-auto mb-2" alt="TailwindCSS">
          <h3 class="text-lg font-medium">TailwindCSS</h3>
        </div>
        <div class="bg-white rounded-lg p-4 shadow hover:bg-indigo-50 transition">
          <img src="path/to/wordpress-icon.png" class="w-10 mx-auto mb-2" alt="WordPress">
          <h3 class="text-lg font-medium">WordPress</h3>
        </div>
        <div class="bg-white rounded-lg p-4 shadow hover:bg-indigo-50 transition">
            <img src="path/to/com-icon.png" class="w-10 mx-auto mb-2" alt="Communication">
            <h3 class="text-lg font-medium">php</h3>
          </div>
          <div class="bg-white rounded-lg p-4 shadow hover:bg-indigo-50 transition">
              <img src="path/to/com-icon.png" class="w-10 mx-auto mb-2" alt="Communication">
              <h3 class="text-lg font-medium">MySQL</h3>
            </div>
        <div class="bg-white rounded-lg p-4 shadow hover:bg-indigo-50 transition">
          <img src="path/to/git-icon.png" class="w-10 mx-auto mb-2" alt="Git">
          <h3 class="text-lg font-medium">Git</h3>  
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" style="display: flex; flex-wrap: wrap; background: linear-gradient(to right, #f8f8f8, #ffffff); padding: 60px 20px; font-family: 'Segoe UI', sans-serif;">
    <div style="flex: 1 1 300px; padding: 30px; background-color: #7214dc; color: #fff; border-radius: 12px 0 0 12px;">
      <h2 style="font-size: 2rem; margin-bottom: 20px;">Let’s Connect</h2>
      <p style="margin-bottom: 30px;">I’m always open to new opportunities, <br> collaborations or just a friendly chat.</p>
      <!-- Add this in your <head> tag -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<p>
  <strong><i class="fas fa-envelope" style="margin-right: 8px; color: #ffffff;"></i>Email:</strong>
  <a href="mailto:prajapatikirtan00@gmail.com" style="color: #ffffff;"><br>prajapatikirtan00@gmail.com</a>
</p>
<p>
  <strong><i class="fas fa-phone" style="margin-right: 8px; color: #ffffff;"></i>Phone:</strong>
  <a href="tel:+918799540046" style="color: #ffffff;"><br>+91 87995400465</a>
</p>
<p>
  <strong><i class="fas fa-map-marker-alt" style="margin-right: 8px; color: #ffffff;"></i>Location:</strong>
  Surat, Gujarat, India
</p>
    </div>
    <div style="flex: 1 1 300px; padding: 30px; background-color: #fff; border-radius: 0 12px 12px 0;">
  <form id="contactForm" method="POST" class="max-w-xl mx-auto p-6 bg-white shadow-lg rounded-xl grid gap-4">
    <h2 class="text-2xl font-bold text-center text-indigo-700">Contact Me</h2>

    <input 
      type="text" 
      name="name" 
      placeholder="Your Name" 
      required 
      class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400"
    />

    <input 
      type="email" 
      name="email" 
      placeholder="Your Email" 
      required 
      class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400"
    />

    <textarea 
      name="message" 
      rows="5" 
      placeholder="Your Message" 
      required 
      class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400"
    ></textarea>

    <button 
      type="submit" name="Send"
      class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition duration-300">
      Send Message
    </button>
    <div id="formResponse" class="hidden text-center font-medium pt-2"></div>
  </form>
</div>

<!-- ✅ JavaScript goes here -->
<script defer>
    document.addEventListener("DOMContentLoaded", function () {
      const form = document.getElementById("contactForm");
      const responseBox = document.getElementById("formResponse");
      const submitBtn = form.querySelector("button[type='submit']");

      form.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(form);

        // Show immediate response and disable the button
        responseBox.textContent = "Sending your message...";
        responseBox.classList.remove("hidden", "text-red-600");
        responseBox.classList.add("text-indigo-600");
        submitBtn.disabled = true;
        submitBtn.textContent = "Sending...";

        fetch("send.php", {
          method: "POST",
          body: formData
        })
          .then(response => {
            if (response.ok) {
              responseBox.textContent = "Thank you! I'll get back to you soon.";
              responseBox.classList.remove("text-red-600", "text-indigo-600");
              responseBox.classList.add("text-green-600");
              form.reset();
            } else {
              responseBox.textContent = "Oops! Something went wrong. Please try again.";
              responseBox.classList.remove("text-green-600", "text-indigo-600");
              responseBox.classList.add("text-red-600");
            }
          })
          .catch(error => {
            responseBox.textContent = "Failed to send. Please check your internet connection.";
            responseBox.classList.remove("text-green-600", "text-indigo-600");
            responseBox.classList.add("text-red-600");
          })
          .finally(() => {
            setTimeout(() => {
              submitBtn.disabled = false;
              submitBtn.textContent = "Send Message";
            }, 3000);
          });
      });
    });
  </script>


  </section>

  <!--  -->


  <!-- Footer -->
  <footer class="bg-gray-800 text-white text-center py-6">
    <p>&copy; 2025 Kirtan Prajapati. All rights reserved.</p>
  </footer>

  
</body>
</html>
