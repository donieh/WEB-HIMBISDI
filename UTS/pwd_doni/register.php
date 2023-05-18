<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <form action="sv_register.php" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="fullname" id="fullname"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id="password" onkeyup="cek_password()"></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="confirmed_password" id="confirmed_password" onkeyup="cek_password()"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="daftar" id="button_submit" disabled></td>
                </tr>
            </table>
        </form>
    </body>

    <script>
        function cek_password()
        {
            var password = document.getElementById("password").value;
            var confirmed_password = document.getElementById("confirmed_password").value;


            if( password == confirmed_password ) {
                document.getElementById("button_submit").disabled = false;
            } else {
                document.getElementById("button_submit").disabled = true;
            }
        }
    </script>

</html>