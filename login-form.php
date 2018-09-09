<html>
<Head>
    <title> Inventory Control - Login   </title>
    <link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-theme.css.map" type="text/css">
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script>

        $( document ).ready(function() {
            // DOM ready

            // Test data
            /*
             * To test the script you should discomment the function
             * testLocalStorageData and refresh the page. The function
             * will load some test data and the loadProfile
             * will do the changes in the UI
             */
            // testLocalStorageData();
            // Load profile if it exits
            loadProfile();
        });

        /**
         * Function that gets the data of the profile in case
         * thar it has already saved in localstorage. Only the
         * UI will be update in case that all data is available
         *
         * A not existing key in localstorage return null
         *
         */
        function getLocalProfile(callback){
            var profileImgSrc      = localStorage.getItem("PROFILE_IMG_SRC");
            var profileName        = localStorage.getItem("PROFILE_NAME");
            var profileReAuthEmail = localStorage.getItem("PROFILE_REAUTH_EMAIL");

            if(profileName !== null
                && profileReAuthEmail !== null
                && profileImgSrc !== null) {
                callback(profileImgSrc, profileName, profileReAuthEmail);
            }
        }

        /**
         * Main function that load the profile if exists
         * in localstorage
         */
        function loadProfile() {
            if(!supportsHTML5Storage()) { return false; }
            // we have to provide to the callback the basic
            // information to set the profile
            getLocalProfile(function(profileImgSrc, profileName, profileReAuthEmail) {
                //changes in the UI
                $("#profile-img").attr("src",profileImgSrc);
                $("#profile-name").html(profileName);
                $("#reauth-email").html(profileReAuthEmail);
                $("#inputEmail").hide();
                $("#remember").hide();
            });
        }

        /**
         * function that checks if the browser supports HTML5
         * local storage
         *
         * @returns {boolean}
         */
        function supportsHTML5Storage() {
            try {
                return 'localStorage' in window && window['localStorage'] !== null;
            } catch (e) {
                return false;
            }
        }

        /**
         * Test data. This data will be safe by the web app
         * in the first successful login of a auth user.
         * To Test the scripts, delete the localstorage data
         * and comment this call.
         *
         * @returns {boolean}
         */
        function testLocalStorageData() {
            if(!supportsHTML5Storage()) { return false; }
            localStorage.setItem("PROFILE_IMG_SRC", "//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" );
            localStorage.setItem("PROFILE_NAME", "César Izquierdo Tello");
            localStorage.setItem("PROFILE_REAUTH_EMAIL", "oneaccount@gmail.com");
        }
    </script>
</Head>
<body>

<div class="container">
    <div class="card card-container" >

        <img id="profile-img" class="profile-img-card" src="img/logos/user.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" action="login.php" method="post">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="text" id="inputEmail" class="form-control" placeholder="User Name" name="username" required autofocus>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>
        </form><!-- /form -->

    </div><!-- /card-container -->
</div><!-- /container -->


</body>
<?php
/*

echo '
<div id="login">
        <form action="login.php" method="post">

            <table style="width: 400px;margin: auto;text-align: center">
                <tr><td colspan="2"><h1>Welcome to Hospital Management System</h1></td> </tr>';


echo '               
<tr>
    <td>User Name :</td>
    <td><input type="text" name="username" placeholder="Enter User Name"></td>
</tr>
<tr>
    <td>Password:</td>
    <td><input type="password" name="password" placeholder="Enter Password"></td>
</tr>
<br><tr> <td style="text-decoration-color: red;" colspan="2"> ';
if (isset($_SESSION['error'])){
    echo $_SESSION['error'];
}
echo'</td></tr>
<tr>  <td colspan="2"><input type="submit" value="Login"></td> </tr>


</table>
</form>

</div>';*/
?>
</html>
