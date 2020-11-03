<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- get the required files from 3rd party sources -->
      <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    </head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <body class="grey lighten-5">

    <div class="container-fluid theem_color" style="auto">
      <!-- Navigation -->
      <div class="row" style="padding: 10px;">
         <div class="col s12 m12 l12">
           <?php require_once('nav.php') ?>
         </div>    
      </div>
      <div class="row" style="padding: 10px;">
        <div class="col s12 m8 l8" style="padding-left: 60px;">
          <form>
            <div class="input-field">
              <input placeholder="Search Articals" style="padding-left: 10px;" class="browser-default search_box" id="search" type="search" required>
            </div>
          </form>
          <span class="white-text">Sign In</span>
        </div>
        <div class="col s12 m4 l4" style="position: relative; right: 20px; bottom: -30px;">
          <a class="waves-effect waves-light btn white black-text right"><i class="material-icons left">confirmation_number</i>Add Ticket</a>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row" style="padding: 20px;">
        <div class="col m1 l1 hide-on-small-only"></div>
        <div class="col s12 m10 l10 card white" style="padding: 60px 40px;">
          <div class="container-fluid">
            <div class="row" style="padding-bottom: 100px;">
              <!-- Sign In form -->
              <div class="col s12 m6 l6" style="padding: 20px;">
                <span style="font-size: 20px; font-weight: bold;">Already a member?</span><br>
                <span>Sign In</span>
                <form style="margin-top: 30px;">
                  <input placeholder="Email" class="input_style browser-default"  type="email" name="email"><br/>
                  <input placeholder="Password" class="input_style browser-default" type="password" name="password"><br>
                  <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Filled in</span>
                  </label>
                  <button class="btn btn-small theem_color white-text right">Sign In</button>
                </form>
              </div>
              <!--Other Links -->
              <div class="col s12 m6 l6" style="padding: 20px;">
                <div class="container-fluid">
                  <div class="row valign-wrapper" style="padding: 0 10px;">
                    <div class="col s12 m1 l1 hide-on-small-only"></div>
                    <div class="col s2 m2 l2">
                      <img src="images/user.svg" style="height: 50px; width: auto;">
                    </div>
                    <div class="col s10 m9 l9" style="padding: 0;">
                      <span style="font-size: 17px;">New User?</span>
                      <span style="font-size: 0.8em;"><a href="#" class="link_color">Sign Up</a></span>
                      <p style="font-size: 0.8em; " class="grey-text">Create an account to submit tickets, read articles and engage in our community.</p>
                    </div>
                  </div>
                  <div class="row valign-wrapper" style="padding: 0 10px;">
                    <div class="col s12 m1 l1 hide-on-small-only"></div>
                    <div class="col s2 m2 l2">
                      <img src="images/lock.svg" style="height: 50px; width: auto;">
                    </div>
                    <div class="col s10 m9 l9" style="padding: 0;">
                      <span style="font-size: 17px;">Forgot Password?</span>
                      <span style="font-size: 0.8em;"><a href="#" class="link_color">Reset</a></span>
                      <p style="font-size: 0.8em; " class="grey-text">Create an account to submit tickets, read articles and engage in our community.</p>
                    </div>
                  </div>
                  <div class="row valign-wrapper" style="padding: 0 10px;">
                    <div class="col s12 m1 l1 hide-on-small-only"></div>
                    <div class="col s2 m2 l2">
                      <img src="images/customer-care.svg" style="height: 50px; width: auto;">
                    </div>
                    <div class="col s10 m9 l9" style="padding: 0;">
                      <span style="font-size: 17px;">Are you an Agent?</span>
                      <span style="font-size: 0.8em;"><a href="#" class="link_color">Log in here</a></span>
                      <p style="font-size: 0.8em; " class="grey-text">Create an account to submit tickets, read articles and engage in our community.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>      
        </div>
      </div>
    </div>
    <div>
      <!-- footer -->
      <?php require_once('footer.php'); ?>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    </body>
  </html>