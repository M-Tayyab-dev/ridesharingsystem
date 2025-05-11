<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP--EcoRide</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <section class="signup-pg">
        <div class="signup-id">
    <h2>Create Your EcoRide Account</h2>
    <p>Join our green community and make every ride count!</p>
        </div>
    <div class="signup2-id">
<form class="signup-form" action="create.php" method="POST">
    <label for="name">Full Name</label>
    <input type="text" id="name" name="UserName" placeholder="Enter your full name" required>
  
    <label for="email">Email</label>
    <input type="email" id="email" name="Email"placeholder="Enter your email" required>
  
    <label for="phone">Phone Number</label>
    <input type="tel" id="phone" name="PhoneNo" placeholder="Enter your phone number" required>
  
    <label for="password">Password</label>
    <input type="password" id="password" name="Password" placeholder="Create a password" required>
  
    <label for="confirmPassword">Confirm Password</label>
    <input type="password" id="confirmPassword" name="ConfirmPassword"  placeholder="Confirm your password" required>
  
    <button type="submit">Sign Up</button>
    <p>Already have an account? <a href="login.html">Login here</a></p>
  </form>
  </div>
  </section>
  
  <script src="signup.js"></script>
</body>
</html>