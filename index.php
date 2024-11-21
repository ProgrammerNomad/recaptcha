<!DOCTYPE html>
<html>
<head>
  <title>reCAPTCHA v3 Test</title>
  <script src="https://www.google.com/recaptcha/api.js?render=6Lcpm4UqAAAAAPVkXHHBrWYtbOoSVG7iLBy5-EBK"></script> 
  <script>
    function onSubmit(token) {
      document.getElementById("demo-form").submit();
    }
  </script>
</head>
<body>
  <form id="demo-form" action="validate.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required><br>
    <input type="email" name="email" placeholder="Your Email" required><br>
    <button class="g-recaptcha" 
            data-sitekey="6Lcpm4UqAAAAAPVkXHHBrWYtbOoSVG7iLBy5-EBK" 
            data-callback='onSubmit' 
            data-action='submit'>Submit</button>
  </form>
</body>
</html>