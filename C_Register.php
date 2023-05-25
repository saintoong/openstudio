<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
  <style>
    html, body{
      width: 100%;
      height: 100%;
      margin: 0px;
      padding: 0px;
    }
  </style>
  <link rel="stylesheet" href="Sign.css">
</head>

<body>
    <div id="full">
        <div id="top">
            <div id="top_left">
                <a href="index.php" class="font" style="text-decoration-line: none; font-size: 30px; font-weight: bolder;">OPENSTUDIO</a>
            </div>
            <div id="top_center"></div>
            <div id="top_right">
                <a href="Select_L.php" class="font" style="text-decoration-line: none; font-size: 12px; margin: 25px">LOGIN</a>
                <a href="Select_R.php" class="font" style="text-decoration-line: none; font-size: 12px; margin: 28px;">REGISTER</a>
            </div>
        </div>
        <div id="middle">
            <section class="sign-form">
                <h1>REGISTER</h1>
                <form action="C_DB_Register.php" method='POST'>
                  <div class="input-area">
                    <input type="text" name="id" id="id" autocomplete="on" required>
                    <label for="id">ID</label>
                  </div>
                  <div class="input-area">
                    <input type="password" name="password" id="password" autocomplete="off" required>
                    <label for="password">PASSWORD</label>
                  </div>
                  <div class="input-area">
                    <input type="password" name="confirm" id="pw" autocomplete="off" required>
                    <label for="confirm">CONFIRM PASSWORD</label>
                  </div>
                  <div class="input-area">
                    <input type="text" name="name" id="name" autocomplete="on" required>
                    <label for="name">NAME</label>
                  </div>
                  <div class="input-area">
                    <input type="text" name="phone" id="phone" autocomplete="on" required>
                    <label for="phone">PHONE</label>
                  </div>
                  <div class="input-area">
                    <input type="email" name="email" id="email" autocomplete="on" required>
                    <label for="email">EMAIL</label>
                  </div>
                  <div class="btn-area">
                    <button type="submit">REGISTER</button>
                  </div>
                </form>
                <div class="caption">
                  <a href="Login.php">Already a member?</a>
                </div>
              </section>
        </div>
    </div>

</body>

</html>