<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    
<form method="POST" class="row g-3 needs-validation m-3" action="gestione.php" enctype="multipart/form-data"
        novalidate>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control" name="firstname" placeholder="Joe" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control" name="lastname" placeholder="Doe" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" name="username" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">City</label>
            <input type="text" class="form-control" name="city" placeholder="Nuova Yorke" required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Tel.</label>
            <input type="tel" class="form-control" name="telnumber" placeholder="+1 23456789" required>
            <div class="invalid-feedback">
                Please provide a valid phone number.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom06" class="form-label">eMail</label>
            <input type="email" class="form-control" name="mail" placeholder="nome@example.com" required>
            <div class="invalid-feedback">
                Please provide a valid email.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom06" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="deve contenere 8 caratteri, una lettera maiuscola, un numero " required>
            <div class="invalid-feedback">
                Please provide a valid email.
            </div>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Insert your photo (jpeg or png format file)</label>
            <input class="form-control" type="file" name="fotoFile">
        </div>

        <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>
</html>