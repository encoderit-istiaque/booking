<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="css/jquery-ui.min.css">
  <link rel="stylesheet" href="css/checkbox.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="sass/style.css">
  <title>Booking</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="image/logo.png" class="logo" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

        <form class="d-flex">
          <a href=""><i class="fas fa-search"></i></a>
        </form>
      </div>
    </div>
  </nav>

  <section class="booking-header-bg">
    <div class="container ">
      <div class="row">
        <div class="col-lg-12 col-12">
          <div class="d-flex justify-content-between py-4 align-items-center">
            <h3 class="text-capitalize">booking</h3>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="bi bi-house text-dark"></i></a></li>
                <li class="breadcrumb-item" aria-current="page"><a class="text-decoration-none text-dark" href="">Booking</a></li>
              </ol>
            </nav>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- Circles which indicates the steps of the form: -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-12">
          <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
          </div>
        </div>


        <div class="col-lg-12 col-12">
          <p class="fw-bold pt-3">Please select service:</p>
        </div>

        <!-- One "tab" for each step in the form: -->

        <div class="tab">
          <div class="row">
            <div class="col-lg-4">
              <p class="fw-bold fs-5  default-colorblue-text">Service</p>

              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>

              <p class="fw-bold fs-5 pt-3 default-colorblue-text">Please select a service</p>
            </div>
            <div class="col-lg-4">
              <p class="fw-bold fs-5 default-colorblue-text">Employee</p>

              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-4">
              <p class="fw-bold fs-5 default-colorblue-text">Duration</p>

              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-lg-12">
              <a href="#" class="add-service">ADD SERVICE</a>
            </div>

            <div class="col-lg-3 pt-3">
              <p class="fw-bold fs-5 p">I'm available on or after</p>
              <input type="text" id="datepicker">
            </div>

            <div class="col-lg-5 pt-3 ">
              <div class="d-inline-block">
                <span class="text-dark">MON</span>
                <label class="container">
                  <input type="checkbox" checked="checked" class="checkbox">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="d-inline-block">
                <span class="text-dark">TUE</span>
                <label class="container">
                  <input type="checkbox" checked="checked" class="checkbox">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="d-inline-block">
                <span class="text-dark">WED</span>
                <label class="container">
                  <input type="checkbox" checked="checked" class="checkbox">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="d-inline-block">
                <span class="text-dark">THUR</span>
                <label class="container">
                  <input type="checkbox" checked="checked" class="checkbox">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="d-inline-block">
                <span class="text-dark">FRI</span>
                <label class="container">
                  <input type="checkbox" checked="checked" class="checkbox">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="d-inline-block">
                <span class="text-dark">SAT</span>
                <label class="container">
                  <input type="checkbox" checked="checked" class="checkbox">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>

            <div class="col-lg-2 pt-2">
              <p class="fw-bold fs-5">Start from</p>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-lg-2 pt-2">
              <p class="fw-bold fs-5">Finish by</p>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

          </div>
        </div>

        <div class="tab">Contact Info:
          <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
          <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
        </div>

        <div class="tab">Birthday:
          <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
          <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
          <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
        </div>

        <div class="tab">Login Info:
          <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
          <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
        </div>

        <div class="tab">Login Info:
          <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
          <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
        </div>

        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>