<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Google Sign-In -->
    <meta name="google-signin-client_id" content="YOUR_GOOGLE_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    
    <style>
        body, html {
            height: 100%;
        }
        .bg{
            background-image: url('./images/cspc-ccs.jpg');
            background-size: cover;
            background-position: center;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background: rgb(60, 60, 60, 0.5);
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .google-btn {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .google-btn img {
            margin-right: 8px;
        }
    </style>
</head>
<body>
<div class="bg">
        <div class="login-container">
            <form>
                <h3 class="text-center font-weight-bold text-warning">User Login</h3>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" id="email" placeholder="cspc@my.edu.ph">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                </div>
                <button type="submit" class="btn btn-warning btn-block">Login</button>
            </form>
            <hr>
                <div class="text-center">
                    <div class="g-signin2 google-btn" data-onsuccess="onSignIn" data-theme="dark"></div>
                </div>
        </div>
    </div>

    <!-- jQuery Bundle -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            var id_token = googleUser.getAuthResponse().id_token;

            // Send the ID token to the server with AJAX
            $.ajax({
                url: 'login/authenticate',
                method: 'POST',
                data: {
                    id_token: id_token
                },
                success: function(response) {
                    // Handle success response
                    window.location.href = 'admin_dashboard';
                },
                error: function(error) {
                    // Handle error response
                    console.error('Error during Google Sign-In:', error);
                }
            });
        }
    </script>
</body>
</html>