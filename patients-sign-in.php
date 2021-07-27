<!DOCTYPE html>
<html lang="en">
<head>
	<title>Patient |Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
	<!-- ===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.icon"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" href="assets/bs css/bootstrap.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" href="assets/css/fontawesome-free-5.15.3-web/css/all.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
        <link rel="stylesheet" href="assets/css/patient-sign-in.css">
        <link rel="stylesheet" href="build/css/intlTelInput.css">
        <!-- <link rel="stylesheet" href="build/css/demo.css"> -->
<body>
    </section>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="reg.php" method="POST">
                <h1 style="font-weight: 700; font-size: 28px;">Sign Up</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                    <div class="form-floating mb-3 mt-1">
                        <input type="text" class="form-control push" id="floatingInput1" name="firstname" placeholder="First Name" style="padding-left: -46px" required>
                        <label for="floatingInput">First Name</label>
                    </div>
                    <div class="form-floating mb-3 mt-1">
                        <input type="text" class="form-control push" id="floatingInput1" name="lastname" placeholder="Last Name" style="padding-left: -46px" required>
                        <label for="floatingInput">Last Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control push" id="floatingInput1" name="email" placeholder="Email" required>
                        <label for="floatingInput">Email</label>
                    </div>
                    <!-- <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="phone" placeholder="Phone Number" name="phone">
                    </div> -->
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control push" id="floatingInput3" name="password" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control push" id="floatingInput4" name="cpassword" placeholder="Confirm Password" required>
                        <label for="floatingPassword">Confirm Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="log_patient.php" method="POST">
                <h1 style="font-weight: 700; font-size: 28px;">Sign In</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                    <div class="form-floating mb-3 mt-1">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Email" required>
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                <a href="#">Forgot your password?</a>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Already having an account, click the button below to login</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Don't have an account?</h1>
                    <p>Click the button below to start a journey with us.</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
       
    </footer>

    <script src="assets/js/patient.js"></script>
    <script src="build/js/intlTelInput.js"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: "off",
        // dropdownContainer: document.body,
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //     var countryCode = (resp && resp.country) ? resp.country : "";
        //     callback(countryCode);
        //   });
        // },
        // hiddenInput: "full_number",
        // initialCountry: "auto",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // placeholderNumberType: "MOBILE",
        // preferredCountries: ['cn', 'jp'],
        // separateDialCode: true,
        utilsScript: "build/js/utils.js",
        });
    </script>
</body>
</html>