<?php
require 'C:\xampp\htdocs\buyapps-project2_new\resources\view\layout\header_log.php';
function title()
{
    yield "Register | Admin";
}
?>

<!-- empty field notif -->
<?php if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "kosong") {
        echo "Pasword setidaknya harus 8 karakter dan harus memiliki angka!";
    }
}
?>

<div class="container">

    <div class="row">
        <div class="col-5" style="
                margin: auto;
                margin-top: 50px;
                background: #2A2C2F;
                padding: 30px;
                box-shadow: 1px 3px 6px 1px #2D3036;">

            <div>
                <br>
                <h2 class="fw-bold">
                    Sign up
                </h2>
            </div>

            <form action="resources\view\login\regist.php" method="POST" onSubmit="return validasi()" class="needs-validation" novalidate>
                <div class="mb-3">
                    <input type="hidden" name="id" class="form-control" value="">
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nama" name="nama" required autofocus>
                    <div class="invalid-feedback">
                        <p>*Please insert the Name</p>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                    <div class="invalid-feedback">
                        <p>*Please insert the username</p>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div class="invalid-feedback">
                        <p>*Password must be at least 8 characters long and must have numbers!</p>
                    </div>
                    <!-- <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div> -->
                </div>

                <br>
                <a href="admin" class="btn btn-outline-secondary">Previous</a>
                <button type="submit" class="btn btn-primary" value="regist">Submit</button>

            </form>
            <br><br><br>
            <!-- <a href="login" style="text-decoration: none; color: gray;" class="d-flex justify-content-end">
                <p>Already have an account?</p>
            </a> -->
        </div>
    </div>
    <br><br>
</div>

<script type="text/javascript">
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