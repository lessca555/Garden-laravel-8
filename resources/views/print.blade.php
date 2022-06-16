<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Reservation Invoice</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/management-assets/css/style.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/management-assets/css/component.css') }}" type="text/css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="invoice">
              <div class="invoice-print">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="invoice-title">
                      <img src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('assets/images/logo1.png')))}}" width="100px">
                      <p class="invoice-number">{{ 'Reservation ID #' . $id }}</p>
                    </div>
                    <hr>
                    <h4>Guest Information</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <strong>Name: </strong>{{ $guest_name }}
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <strong>Phone Number: </strong>{{ $phone }}
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row mt-4">
                  <div class="col-md-12">
                    <h4>Reservation Information</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <strong>Reservation Date: </strong>{{ $created_at }}
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <strong>Room Type: </strong>{{ $room_type }} Room
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 text-md-right">
                        <strong>Check In: </strong>{{ $check_in }}
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 text-md-right">
                        <strong>Check Out: </strong>{{ $check_out }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
