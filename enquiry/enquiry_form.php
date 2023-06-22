<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        #form_container {
            background-color: #dfdbe5;
            padding: 40px;
        }

        form>div {
            margin-top: 2rem;
        }

        form>input {
            color: #dfdbe5;
            font-weight: bold;
        }

        .bg-blue {
            background-color: blue !important;
        }
        .text-blue{
            color: blue;
        }
    </style>
</head>

<body>
    <div id="form_container">
        <div class="container w-50">

            <form action="enquiry_submit.php" class="p-4  m-auto" method="post" style="border-bottom: 25px; background-color:#fff">
                <div>
                    <p class="text-blue fw-semibold">PLAYGROUNDS</p>
                    <h3>Send Package Enquiry</h3>
                    <p>Please fill out the details and test the leads integration.</p>
                </div>

                <div class="d-flex justify-content-between mb-2 gap-5">
                    <div class="w-50">
                        <label for="Name" class="fw-bold">Name*</label>
                        <input type="text" class="form-control" placeholder="e.g. Sudhir M" name="name">
                    </div>
                    <div class="w-50 d-flex gap-3">
                        <div class="w-50">
                            <label for="No Of Adults" class="fw-bold">No Of Adults</label>
                            <input type="text" class="form-control" placeholder="eg: 4" name="no_of_adults">
                        </div>
                        <div class="w-50">
                            <label for="No Of Childs" class="fw-bold">No Of Childs</label>
                            <input type="text" class="form-control" placeholder="eg: 0" name="no_of_child">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-2 gap-5">
                    <div class="w-50">
                        <label for="Phone Number" class="fw-bold">Phone Number*</label>
                        <input type="text" class="form-control" placeholder="e.g. 8888888888" name="phone_number">
                    </div>
                    <div class="w-50">
                        <label for="Email" class="fw-bold">Email</label>
                        <input type="text" class="form-control" placeholder="e.g. name@example.com" name="email">
                    </div>

                </div>
                <div class="d-flex justify-content-between mb-2 gap-5">
                    <div class="w-50">
                        <label for="Name" class="fw-bold">Destination*</label>
                        <input type="text" class="form-control" placeholder="Destination" name="destination">
                    </div>
                    <div class="w-50 d-flex gap-3">
                        <div class="w-50">
                            <label for="date" class="fw-bold">Start date</label>
                            <input type="date" class="form-control"  name="date">
                        </div>
                        <div class="w-50">
                            <label for="days" class="fw-bold">No Of Days</label>
                            <input type="text" class="form-control" placeholder="eg. 4" name="days">
                        </div>
                    </div>
                </div>
                <div class="col w-full">
                    <div class="row">
                        <label for="" class="fw-bold "> Requirements / Comments </label>
                    </div>
                    <div class="row">
                        <textarea name="comments" class="form-control block w-full" id="" placeholder=" e.g.5 Days / 4 Star Hotel / 2,500 Budget"></textarea>
                    </div>
                </div>
                <div class="w-100">
                    <button class=" w-100 py-3 fs-5 text fw-semibold border border-0 rounded-3 bg-blue text-white">
                        Submit Query
                    </button>
                </div>

            </form>

        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"> -->
    <!-- </script> -->

</body>

</html>