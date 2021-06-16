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
        <div class="col-lg-12 col-12 d-md-block d-none">
          <div style="text-align:center;margin-top:20px;">
            <span class="step step-1"></span>
            <span class="step step-2"></span>
            <span class="step step-3"></span>
            <span class="step step-4"></span>
            <span class="step step-5"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
          <div class="row">
            <div class="col-lg-12 col-12">
              <h3 class="fw-bold pt-3">Please select service:</h3>
            </div>
            <div class="col-lg-4 col-12">
              <p class="fw-bold fs-5  default-colorblue-text">Service</p>
              <select class="form-select" aria-label="Default select example">
                <option selected>Select Service</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>

              <p class="fw-bold fs-5 pt-3 default-colorblue-text">Please select a service</p>
            </div>
            <div class="col-lg-4 col-12">
              <p class="fw-bold fs-5 default-colorblue-text">Employee</p>

              <select class="form-select" aria-label="Default select example">
                <option selected>Any</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-4 col-12">
              <p class="fw-bold fs-5 default-colorblue-text">Duration</p>

              <select class="form-select" aria-label="Default select example">
                <option selected>-</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-lg-12 col-12">
              <a href="#" class="add-service">ADD SERVICE</a>
            </div>

            <div class="col-lg-3 col-md-12 col-sm-12 pt-3 col-12">
              <p class="fw-bold fs-5 p">I'm available on or after</p>
              <input type="text" class="datepicker" value="2">
            </div>


            <div class="col-lg-5 pt-3 col-12 col-sm-12 sol-md-12">
              <div class="d-inline-block schedule">
                <div class="schedule-flex">
                  <span class="text-dark">MON</span>
                  <label class="container">
                    <input type="checkbox" checked="checked" class="checkbox">
                    <span class="checkmark mt-3 ms-2"></span>
                  </label>
                </div>
              </div>
              <div class="d-inline-block schedule">
                <div class="schedule-flex">
                  <span class="text-dark">TUE</span>
                  <label class="container">
                    <input type="checkbox" checked="checked" class="checkbox">
                    <span class="checkmark mt-3 ms-2"></span>
                  </label>
                </div>
              </div>
              <div class="d-inline-block schedule">
                <div class="schedule-flex">
                  <span class="text-dark">WED</span>
                  <label class="container">
                    <input type="checkbox" checked="checked" class="checkbox">
                    <span class="checkmark mt-3 ms-2"></span>
                  </label>
                </div>
              </div>
              <div class="d-inline-block schedule">
                <div class="schedule-flex">
                  <span class="text-dark">THURS</span>
                  <label class="container">
                    <input type="checkbox" checked="checked" class="checkbox">
                    <span class="checkmark mt-3 ms-2"></span>
                  </label>
                </div>
              </div>
              <div class="d-inline-block schedule">
                <div class="schedule-flex">
                  <span class="text-dark">FRI</span>
                  <label class="container">
                    <input type="checkbox" checked="checked" class="checkbox">
                    <span class="checkmark mt-3 ms-2"></span>
                  </label>
                </div>
              </div>
              <div class="d-inline-block schedule">
                <div class="schedule-flex">
                  <span class="text-dark">SAT</span>
                  <label class="container">
                    <input type="checkbox" checked="checked" class="checkbox">
                    <span class="checkmark mt-3 ms-2"></span>
                  </label>
                </div>
              </div>
              <div class="d-inline-block schedule">
                <div class="schedule-flex">
                  <span class="text-dark">SUN</span>
                  <label class="container">
                    <input type="checkbox" checked="checked" class="checkbox">
                    <span class="checkmark mt-3 ms-2"></span>
                  </label>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-12 pt-2">
              <p class="fw-bold fs-5">Start from</p>
              <select class="form-select" aria-label="Default select example">
                <option selected>12.00</option>
                <option value="1">12.00</option>
                <option value="2">12.00</option>
                <option value="3">12.00</option>
              </select>
            </div>

            <div class="col-lg-2 col-12 pt-2">
              <p class="fw-bold fs-5">Finish by</p>
              <select class="form-select" aria-label="Default select example">
                <option selected>11.00</option>
                <option value="1">1.00</option>
                <option value="2">2.00</option>
                <option value="3">3.00</option>
              </select>
            </div>

            <div class="col-lg-12 col-12">
              <hr class="mt-5">
            </div>

          </div>
        </div>
        <div class="tab">
          <div class="row">
            <div class="col-lg-12 col-12">
              <p style="width: 50%;" class="fs-5 py-3">Below you can find a list of available time slots for Artist Development by Dave Ferguson.
                Click on a time slot to proceed with booking.</p>
              <div class="py-3">
                <select class="form-select location" aria-label="Default select example">
                  <option selected>London</option>
                  <option value="1">London</option>
                  <option value="2">USA</option>
                  <option value="3">Bangladesh</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 col-12">

              <div class="DateBox datepicker pt-3 d-inline-block"></div>
              <!-- <input type="hidden" id="dateHidden" name="dateHidden" /> -->
            </div>
            <div class="col-md-4 col-12">
              <div class="col-lg-5  pt-3">
                <div class="border default-colorblue-bg">
                  <p class="fs-5 fw-bold text-white text-center px-3 mb-0">Thu,Jun 21</p>
                </div>
                <div class="border default-colorblue-bg">
                  <p class="fs-5 fw-bold text-white text-center px-3 mb-0"><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">11.00 am</p>
                </div>
                <div class="border default-colorblue-bg">
                  <p class="fs-5 fw-bold text-white text-center px-3 mb-0"><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">12.00 am</p>
                </div>
                <div class="border default-colorblue-bg">
                  <p class="fs-5 fw-bold text-white text-center px-3 mb-0"><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">13.00 am</p>
                </div>
                <div class="border default-colorblue-bg">
                  <p class="fs-5 fw-bold text-white text-center px-3 mb-0"><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">14.00 am</p>
                </div>
                <div class="border default-colorblue-bg">
                  <p class="fs-5 fw-bold text-white text-center px-3 mb-0"><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">15.00 am</p>
                </div>
              </div>
            </div>


          </div>
        </div>

        <div class="tab">
          <div class="row">
            <div class="col-lg-12 c0l-12">
              <p style="width: 50%;" class="fs-5">Below you can find a list of available time slots for Artist Development by Dave Ferguson.
                Click on a time slot to proceed with booking.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-5 col-6">
              <label for="exampleFormControlInput1" class="form-label default-colorblue-text fw-bold">First name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="col-lg-6 col-md-6 col-sm-5 col-6">
              <label for="exampleFormControlInput1" class="form-label default-colorblue-text fw-bold">Last name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
              <label for="exampleFormControlInput1" class="form-label default-colorblue-text fw-bold">Phone</label>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
              <label for="exampleFormControlInput1" class="form-label default-colorblue-text fw-bold">Email</label>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
              <label for="exampleFormControlInput1" class="form-label default-colorblue-text fw-bold">Confirm email</label>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="col-lg-12 col-12">
              <label for="exampleFormControlTextarea1" class="form-label default-colorblue-text fw-bold ">Example textarea</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <hr class="mt-3">
          </div>
        </div>

        <div class="tab">
          <div class="row">
            <div class="col-lg-12 col-12">
              <h3>Confirm Payment</h3>
            </div>
            <div class="col-lg-6">
              <h5>Payment Summary</h5>
              <p>Please review the following details</p>

              <table class="table table-striped">

                <tr class="table-background">
                  <th class="default-colorblue-text fw-bold fs-5">Description</th>
                  <th class="default-colorblue-text fw-bold fs-5">Item Price</th>
                </tr>

                <tr class="table-background">
                  <td class="default-colorblue-text fs-5">Base Price</td>
                  <td class="default-colorblue-text fs-5">10$</td>
                </tr>

                <tr class="table-background">
                  <td class="default-colorblue-text fs-5">Which one you want/</td>
                  <td class="default-colorblue-text fs-5">10$</td>
                </tr>

                <tr class="table-background">
                  <td class="default-colorblue-text fw-bold fs-5">Total</td>
                  <td class="default-colorblue-text fs-5">50$</td>
                </tr>

              </table>

            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-lg-8">
                  <label for="exampleFormControlInput1" class="form-label default-colorblue-text fw-bold fs-5">Name on Card</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1">

                </div>
                <div class="col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label default-colorblue-text fw-bold fs-5">Post Card</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="col-lg-12">
                  <label for="exampleFormControlInput1" class="form-label default-colorblue-text fw-bold fs-5">Card Numbers</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label default-colorblue-text fw-bold fs-5">Expiration</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label default-colorblue-text fw-bold fs-5">yy</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label default-colorblue-text fw-bold fs-5">CW</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>

              </div>

            </div>

          </div>
        </div>

        <div class="tab">
          <div class="row">
            <div class="col-lg-12 col-12">
              <p class="fs-5">Thank you! Your booking is complete. An email with details of your booking has been sent to you</p>

            </div>

          </div>
        </div>
      </div>
      <div class="row justify-content-end pt-4">
        <button type="button" class="btn btn-primary btn-width me-4" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" class="btn btn-primary btn-width" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>