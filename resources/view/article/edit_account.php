<!DOCTYPE html>
<html lang="en">
<?php

$data = $_GET['id'];
$posts = QB::table('users1')->where('id', $data)->first();

require './resources/view/layout/header1.php';
function title()
{
    yield "Change Password | Admin";
}

?>


<head>
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Change Password | Admin</title>
    <link rel="shortcut icon" href="public/assets/img/tabIcon.png">
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col my-2">
                <br>
                <h2 class="fw-bold">
                    <i class="bi bi-book"></i> Change Password
                </h2>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <form method="POST" action="resources\view\query\edit_pw.php?id=<?php echo $posts->id; ?>">

                    <div class="mb-3">
                        <input type="hidden" name="id" class="form-control" value="">
                    </div>

                    <!-- <div class="mb-3">
                        <input type="hidden" name="nama" class="form-control" value="">
                    </div>

                    <div class="mb-3">
                        <input type="hidden" name="username" class="form-control" value="">
                    </div> -->

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" id="password" name="password" value="<?php echo $posts->password ?>" required>

                    </div>

                    <div class="col my-4">
                        <br>
                        <a href="account" class="btn btn-outline-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary" name="update">Simpan</button>
                    </div>

                </form>
            </div>
        </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <?php
    require './resources/view/layout/header1.php';
    ?>