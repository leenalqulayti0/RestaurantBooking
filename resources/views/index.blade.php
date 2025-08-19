<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Auth · Sign Up / Sign In</title>
  @vite(['resources/css/styles.css','resources/js/app.js'])
</head>
<body>
  <main id="container" class="container">
    <section class="form-container sign-up-container">
      <form id="signupForm" novalidate>
        <h1>Create Account</h1>
        <p>Fill in your details to get started</p>
        <input id="name" name="name" type="text" placeholder="Full name" required />
  <input id="number" name="number" type="tel" placeholder="Phone number"required />
        <input id="password" name="password" type="password" placeholder="Password" minlength="6" required />
        <input id="confirmPassword" name="confirmPassword" type="password" placeholder="Confirm password" minlength="6" required />
        <button id="signupBtn" type="submit">Sign Up</button>
      </form>
    </section>
    <section class="form-container sign-in-container">
      <form id="loginForm" novalidate>
        <h1>Welcome Back</h1>
        <p>
  Glad to see you again!<br>
  Log in to your account below
</p>
        <input id="number" name="number" type="tel" placeholder="Phone number"required />
        <input id="loginPassword" name="loginPassword" type="password" placeholder="Password" required />
        <button id="loginBtn" type="submit">Log In</button>
      </form>
    </section>
    <div class="overlay-container" aria-hidden="true">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h2>Already a Member?</h2>
          <p>Welcome back! Log in to pick up where you left.</p>
          <button class="ghost" id="toSignIn" type="button">Log In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h2>New Here?</h2>
          <p>Create your account in seconds.</p>
          <button class="ghost" id="toSignUp" type="button">Sign Up</button>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
