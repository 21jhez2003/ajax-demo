<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <title>Create Account</title>
</head>

<body>
  <!-- SVG -->

  <div style="margin-top: 50px" class="row me-0 justify-content-center align-items-center">
    <div class="row mb-3 justify-content-center align-items-center">
      <div class="col-6">
        <h2 class="text-center text-primary">
          Asynchronous Javascript and XML (AJAX) Demo
        </h2>
      </div>
    </div>

    <div class="col-6">
      <div class="card">
        <div class="card-header">
          <h4 class="mb-0">Registration</h4>
          <p class="mb-0">Register and start doing things that do nothing.</p>
        </div>
        <div class="card-body">
          <form class="" action="" method="post">
            <div class="row">
              <div class="col">
                <div class="alert alert-warning" role="alert">
                  Error handling here!
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <input class="form-control mb-3" id="username" type="text" placeholder="Username" />
              </div>
              <div class="col">
                <input class="form-control mb-3" id="email" type="email" placeholder="Email" />
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input class="form-control mb-3" id="first_name" type="text" id="first_name" placeholder="First name" />
              </div>
              <div class="col">
                <input class="form-control mb-3" id="last_name" type="text" placeholder="Last name" />
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input class="form-control mb-3" id="password" type="password" placeholder="Password" />
              </div>
              <div class="col">
                <input class="form-control mb-3" id="confirm_password" type="password" placeholder="Confirm Password" />
              </div>
            </div>
            <button type="button" id="btnSave" class="btn btn-primary">
              Save
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="js/jquery.js"></script>
  <script src="js/auth.process.js"></script>

</body>

</html>