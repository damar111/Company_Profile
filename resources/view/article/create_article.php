<?php
require './resources/view/layout/header1.php';
function title()
{
    yield "Create Article | Admin";
}
?>

<div class="container">

    <div class="row">
        <div class="col my-2">
            <br>
            <h2 class="fw-bold">
                <i class="bi bi-book"></i> New Article
            </h2>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <form method="POST" action="resources\view\query\store.php" enctype="multipart/form-data" class="needs-validation" novalidate>

                <div class="mb-3">
                    <input type="hidden" name="id" class="form-control" value="">
                </div>

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Input Title" required autofocus>
                    <div class="invalid-feedback">
                        <p>Please choose a title.</p>
                    </div>
                    <div class="valid-feedback">
                        <p class="fw-bold">Looks great!</p>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" placeholder="Input Whole Content" style="height: 300px;" required></textarea>
                    <div class="valid-feedback">
                        <p class="fw-bold">Looks good!</p>
                    </div>
                    <div class="invalid-feedback">
                        <p>Please fill the field.</p>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-controlfile" id="image" required>
                    <div class="invalid-feedback">
                        <p>Please insert an image.</p>
                    </div>
                </div>

                <div class="col my-4">
                    <br>
                    <a href="table" class="btn btn-outline-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
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
require './resources/view/layout/header1.php';
?>