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
          <form method="post" action="newticket_process.php">
            <div class="input-field">
              <input placeholder="Search Articals" style="padding-left: 10px;" class="browser-default search_box" id="search" type="search" required>
            </div>
          </form>
          <span class="white-text">My Area / Submit a Ticket</span>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row" style="padding: 20px;">
        <div class="col hide-on-med-and-down" style="width: 50px;"></div>
        <div class="white col s12 m8 l8" style="padding: 20px; border: 1px solid #D6D6D6; border-radius: 3px;">
          <span style="font-size: 25px; font-weight: bold;">Submit a ticket</span><br>
          <form style="margin-top: 30px;">
            <span style="font-size: 17px; font-weight: bold;">Ticket Information</span><br>
            <div class="form_section">
                <p style="font-size: 17px;" class="form_label black-text">Department <span class="red-text">*</span> </p>
                <select class="browser-default">
                  <option>one</option>
                  <option>two</option>
                </select>
            
                <p style="font-size: 17px;" class="form_label black-text">Category <span class="red-text">*</span> </p>
                <select class="browser-default">
                  <option>one</option>
                  <option>two</option>
                </select>
            
                <p style="font-size: 17px;" class="form_label black-text">
                  PWSLab Project URL<span class="red-text">*</span> 
                </p>
                <input class="input_style browser-default" type="text" name="name"><br>
            
                <p style="font-size: 17px;" class="form_label black-text">
                  Subject<span class="red-text">*</span> 
                </p>
                <input class="input_style browser-default" type="text" name="name"><br>
            
                <p style="font-size: 17px;" class="form_label black-text">
                  Description<span class="red-text">*</span> 
                </p>
                <textarea class="browser-default" style="border-radius: 4px; border: 1px solid #d6d6d6; height: 150px;" name="editor1"></textarea>
            </div>
            <span style="font-size: 17px; font-weight: bold;">Contact Details</span><br>
            <div class="form_section">
                <p style="font-size: 17px;" class="form_label black-text">
                  Contact Name<span class="red-text">*</span> 
                </p>
                <input class="input_style browser-default" type="text" name="name"><br>
            
                <p style="font-size: 17px;" class="form_label black-text">
                  Email<span class="red-text">*</span> 
                </p>
                <input class="input_style browser-default" type="text" name="name"><br>
            
                <p style="font-size: 17px;" class="form_label black-text">
                  Phone<span class="red-text">*</span> 
                </p>
                <input class="input_style browser-default" type="text" name="name"><br>
            </div>
            <span style="font-size: 17px; font-weight: bold;">Additioanla Information</span><br>
            <div class="form_section">
                <p style="font-size: 17px;" class="form_label black-text">
                  Priority<span class="red-text">*</span> 
                </p>
                <select class="browser-default">
                  <option>one</option>
                  <option>two</option>
                </select>
                <button style="border: none; background: none;" type="input">
                  <i class="material-icons blue darken-4 white-text" style="padding: 20px; font-size: 40px; margin-top: 40px; border-radius: 100%;">file_upload</i>
                  <br>
                  <span style="font-size: 17px;">Attach a File</span>
                  <br>
                  <span style="font-size: 10px; text-align: center;">Up to 20MB</span>
                </button>
                
            </div>
            
            <button class="btn btn-small theem_color white-text">Submit</button>
            <button class="btn btn-small white blue-text text-darken-4">Discard</button>
          </form>
        </div>
        <div class="col s1 m1 l1 hide-on-med-and-down" style="width: 30px;"> </div>
        <div class=" col s12 m3 l3" style="padding: 0 20px;">
          <span style="font-size: 17px; font-weight: bold;">Popular Articles</span><br> <br>
          <div class="row" style="margin: 0;"> 
              <div class="col s1 m1 l1">
                <i class="material-icons grey-text text-darken-3">description</i>
              </div>
              <div class="col s11 m11 l11">
                <a href="" class="link_color truncate"> PeerXP TDS Policy</a>
              </div>
          </div> 
          <div class="row" style="margin: 0;"> 
              <div class="col s1 m1 l1">
                <i class="material-icons grey-text text-darken-3">description</i>
              </div>
              <div class="col s11 m11 l11">
                <a href="" class="link_color truncate"> How To Change Git Remote URL?</a>
              </div>
          </div> 
          <div class="row" style="margin: 0;"> 
              <div class="col s1 m1 l1">
                <i class="material-icons grey-text text-darken-3">description</i>
              </div>
              <div class="col s11 m11 l11">
                <a href="" class="link_color truncate"> Mirroring PWSLab Repositories to GitHub, Bitbucket and GitLab or any Git repositories</a>
              </div>
          </div>  
          <div class="row" style="margin: 0;"> 
              <div class="col s1 m1 l1">
                <i class="material-icons grey-text text-darken-3">description</i>
              </div>
              <div class="col s11 m11 l11">
                <a href="" class="link_color truncate"> PWSLab Git Workshop - Useful commands and concepts</a>
              </div>
          </div> 
          <div class="row" style="margin: 0;"> 
              <div class="col s1 m1 l1">
                <i class="material-icons grey-text text-darken-3">description</i>
              </div>
              <div class="col s11 m11 l11">
                <a href="" class="link_color truncate"> Google OAuth2 OmniAuth Provider for PWSLab Signin/Signup</a>
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

    <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace( 'editor1' );
    </script>
    </body>
  </html>