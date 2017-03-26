<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Reset Password</h2>
    <p>
      Did you forget your password? No problem, 
      click the button below to set a new one.
      <a href="{{ URL::to('password/reset/' . $token) }}">
        Reset Password
      </a>
    </p>
  </body>
</html>