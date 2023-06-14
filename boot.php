<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        html {
            font-size: 16px;
            font-family: 'Noto Sans', sans-serif;
            font-weight: 400;
        }

        body {
            font-size: 1rem;
            --bs-body-font-family: 'Noto Sans', sans-serif;
        }

        h1 {
            font-weight: 700;
        }

        #banner {
            position: relative;
            background-image: linear-gradient(rgb(0 0 0 / 34%), rgb(0 0 0 / 230%)), url("https://spiti-trip.com/build/assets/spiti-banner.e4b0478c.webp");
            background-size: cover;
            background-position: center bottom;
            background-repeat: no-repeat;
            padding: 15px 0;
        }

        #banner:hover {
            background-image: linear-gradient(rgb(1 1 0 / 34%), rgb(0 0 0 / 230%)), url("https://i.pinimg.com/originals/e6/55/97/e655976c532458e425eddc0de625575c.jpg");
        }

        .free-quotes {
            background: #fff;
            position: relative;
            border-radius: 25px;
            overflow: hidden;
        }

        @keyframes example {
            from {
                background-color: red;
            }

            to {
                background-color: orange;
            }
            
        }

        .free-quotes .get-free {
            letter-spacing: 1px;
            margin: 0;
            color: #fff;
            padding: 10px 0;
            font-size: 25px;
            position: relative;
            font-weight: 700;
            background-color: red;
            text-align: center;
            animation-name: example;
            animation-duration: 2s;
            animation-iteration-count: infinite;
        }

        .child-width>div {
            width: 25%;
        }

        .text-style {
            font-family: Cormorant Garamond, serif;
            color: #2e3042;
        }

        @media screen and (max-width:800px) {
            #brand {
                display: none;
            }

            #text-container {
                display: none;
            }

            #full {
                width: 100%;
            }

            .child-width>div {
                width: 100%;
            }

        }

        @media screen and (min-width:500px) and (max-width:800px) {
            #grid-2 {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>

<body>
    <nav class="navbar p-4">
        <div id="brand">
            <a href="" class="navbar-brand nav-link text-danger fw-bold">Spiti Tour Packages</a>
        </div>
        <div>
            <img src="https://spiti-trip.com/images/spiti-trip-logo.webp" alt="" width="200px">
        </div>
        <div class="d-flex flex-row align-items-center">
            <div class="p-2">
                <img src="https://cdn.onlinewebfonts.com/svg/img_320899.png" alt="" width="40px">
            </div>
            <div class="p-2 text-danger fw-bold">
                +91-8894949439
            </div>
        </div>
    </nav>

    <div id="banner">
        <div class="container">
            <div class="row ">
                <div class="col-8" style="padding-top:120px" id="text-container">
                    <div class="text-white">
                        <h1 class="fw-light small " style="font-family: Cormorant Garamond,serif;color: #fff;text-transform: uppercase;font-size: 10px;letter-spacing: 4px;font-weight: 100;display: inline;">BEST SPITI TOUR OPERATOR FROM HIMACHAL PRADESH</h1>
                        <h2 class="fw-bold mb-3" style="font-family: Cormorant Garamond,serif; font-size:36px">Value for Money Tour Package with Best Service</h2>
                        <ul class="lh-lg p-0 m-0" style="list-style-type: none; font-family: Cormorant Garamond,serif;">
                            <li>
                                <span>
                                    <code>
                                        ✔
                                    </code>
                                </span>
                                Spiti Destination Expert
                            </li>
                            <li>
                                <span>
                                    <code>
                                        ✔
                                    </code>
                                </span>
                                Friendly customer support
                            </li>
                            <li>
                                <span>
                                    <code>
                                        ✔
                                    </code>
                                </span>
                                Safe and Secure Online Transactions
                            </li>
                            <li>
                                <span>
                                    <code>
                                        ✔
                                    </code>
                                </span>
                                Best price tour packages with great services
                            </li>
                            <li>
                                <span>
                                    <code>
                                        ✔
                                    </code>
                                </span>
                                Handpicked Hotels
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-4" id="full">
                    <div class="free-quotes">
                        <div class="get-free">
                            <span class="blinking">Get Free Quotes!</span>
                        </div>

                        <form action="submit.php" class="p-4  m-auto " method="post" style="border-bottom: 25px; background-color:#f1f0ee">
                            <div class="mb-2">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="mb-2">
                                <input type="text" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="mb-2">
                                <input type="number" class="form-control" placeholder="Mobile No." name="mobile">
                            </div>
                            <div class="mb-2">
                                <select class="form-control" name="travel">
                                    <option value="I am travelling from..">I am travelling from..</option>
                                    <option value="Jhansi">Jhansi</option>
                                    <option value="Jaipur">Jaipur</option>
                                    <option value="Gurugram">Gurugram</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <input class="form-control" type="date" name="date">
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <div class="w-50">
                                    <select class="form-control">
                                        <option value="Select Adults">Select Adults</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="more than 2">more than 2</option>
                                    </select>
                                </div>
                                <div class="w-50">
                                    <select class="form-control">
                                        <option value="Select Childs">Select Childs</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="more than 2">more than 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 d-flex flex-column align-items-center text-center gap-3 pt-2 ">
                                <button type="button" class="btn btn-dark w-100" style="border-radius: 30px; font-family: Cormorant Garamond,serif; font-size: 23px;">Get Free Quote</button>
                                <p class="text-gray" style="font-size: 0.7rem;">We assure the privacy of your contact data. Prices are indicative may vary based on trip customization</p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container bg-secondary-subtle">
        <div class="d-flex flex-column align-items-center pt-5">
            <div>
                <h1 class="text-style">
                    Why
                    <span style="color: red;">Spiti Trip?</span>
                </h1>

            </div>


            <div class="container pt-5">
                <div class="row m-auto">
                    <div class="col-sm-12 d-flex flex-column flex-sm-row mb-5 child-width" id="grid-2">
                        <div class="flex-fill d-flex flex-column justify-content-center text-center">
                            <div>
                                <img src="https://spiti-trip.com/images/why-us-1.png" alt="" width="80px">
                            </div>
                            <div>
                                <p>Approved by Ministry of Tourism, Government of India</p>
                            </div>
                        </div>

                        <div class="flex-fill d-flex flex-column justify-content-center text-center">
                            <div>
                                <img src="https://spiti-trip.com/images/why-us-2.png" alt="" width="80px">
                            </div>
                            <div>
                                <p>Trusted Name in Spiti Valley Packages</p>
                            </div>
                        </div>

                        <div class="flex-fill d-flex flex-column justify-content-center text-center">
                            <div>
                                <img src="https://spiti-trip.com/images/why-us-4.png" alt="" width="80px">
                            </div>
                            <div>
                                <p>Value for Money Packages</p>
                            </div>
                        </div>


                        <div class="flex-fill d-flex flex-column justify-content-center text-center">
                            <div>
                                <img src="https://spiti-trip.com/images/why-us-5.png" alt="" width="80px">
                            </div>
                            <div>
                                <p>Customized Tours</p>
                            </div>
                        </div>
                        <div class="flex-fill d-flex flex-column justify-content-center text-center">
                            <div>
                                <img src="https://spiti-trip.com/images/why-us-6.png" alt="" width="80px">
                            </div>
                            <div>
                                <p>Personalized Services</p>
                            </div>
                        </div>
                        <div class="flex-fill d-flex flex-column justify-content-center text-center">
                            <div>
                                <img src="https://spiti-trip.com/images/why-us-8.png" alt="" width="80px">
                            </div>
                            <div>
                                <p>National Tourism Award Winner</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="container">
        <div class="d-flex flex-column align-items-center pt-5">
            <div>
                <h1 class="text-style">
                    Spiti Valley
                    <span style="color: red;">Package Deals</span>
                </h1>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>

<!-- <img src="https://spiti-trip.com/images/why-us-1.png" alt="" width="50px"> -->