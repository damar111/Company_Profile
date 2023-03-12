<?php
require 'C:\xampp\htdocs\buyapps-project2_new\resources\view\layout\header_log.php';
function title()
{
    yield "Login | Admin";
}
?>


<div class="container">

    <div class="row">
        <div class="col-5" style="
                margin: auto;
                margin-top: 50px;
                background: #2A2C2F;
                padding: 30px;
                box-shadow: 1px 3px 6px 1px #2D3036;
                height: 30pc;">

            <div>
                <br>
                <h2 class="fw-bold">
                    Login
                </h2>
                <br>
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "kosong") {
                        echo "<p style='color:#ED0303' class='fw-light'>*Username or password incorrect!</p>";
                    }
                }
                ?>
            </div>

            <form action="resources\view\login\login.php" method="POST" onSubmit="return validasi()" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required autofocus>
                    <div class="invalid-feedback">
                        <p>*Please insert the username</p>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div class="invalid-feedback">
                        <p>*Please insert the password</p>
                    </div>
                    <!-- <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div> -->
                </div>

                <br>
                <a href="home" class="btn btn-outline-secondary">Home</a>
                <button type="submit" class="btn btn-primary" value="login">Sign in</button>

            </form>
            <br><br><br>
            <!-- <a href="regist" style="text-decoration: none; color: gray;" class="d-flex justify-content-end">
                <p>Don't have account?</p>
            </a> -->
        </div>
    </div>
    <br><br>
</div>

<script type="text/javascript">
    // function validasi() {
    //     var username = document.getElementById("username").value;
    //     var password = document.getElementById("password").value;
    //     if (username != "" && password != "") {
    //         return true;
    //     } else {
    //         alert('Username dan Password harus di isi !');
    //         return false;
    //     }
    // }

    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

<?php
require 'C:\xampp\htdocs\buyapps-project2_new\resources\view\layout\footer_log.php';
?>