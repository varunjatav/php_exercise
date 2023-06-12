<?php
$deals = [
    [
        "title" => "34 years of experience in organising tours within the Himalays",
        "img" => "https://t4.ftcdn.net/jpg/00/97/29/01/360_F_97290116_0IrxzwPH4HjPqB9dJv7gXy6j04X7wh2n.jpg",
    ],
    [
        "title" => "34 years of experience in organising tours within the Himalays",
        "img" => "https://t4.ftcdn.net/jpg/00/97/29/01/360_F_97290116_0IrxzwPH4HjPqB9dJv7gXy6j04X7wh2n.jpg",
    ],
    [
        "title" => "34 years of experience in organising tours within the Himalays",
        "img" => "https://t4.ftcdn.net/jpg/00/97/29/01/360_F_97290116_0IrxzwPH4HjPqB9dJv7gXy6j04X7wh2n.jpg",
    ],

];

?>

<div class="banner">
    <div>
        <h1>Let us show you Spiti Valley</h1>
        <p>Customisable Road Trips and Treks from ₹11,750</p>
    </div>
    <div>
        <form action="submit.php" class="form" method="post">
            <div>
                <input type="text" placeholder="Name" name="name">
            </div>
            <div>
                <input type="text" placeholder="Email" name="email">
            </div>
            <div>
                <input type="number" placeholder="Mobile No." name="mobile">
            </div>
            <div>
                <select name="travel">
                    <option value="I am travelling from..">I am travelling from..</option>
                    <option value="Jhansi">Jhansi</option>
                    <option value="Jaipur">Jaipur</option>
                    <option value="Gurugram">Gurugram</option>
                </select>
            </div>
            <div>
                <input type="date" name="date">
            </div>
            <div class="two_input">
                <div>
                    <select>
                        <option value="Select Adults">Select Adults</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="more than 2">more than 2</option>
                    </select>
                </div>
                <div>
                    <select>
                        <option value="Select Childs">Select Childs</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="more than 2">more than 2</option>
                    </select>
                </div>
            </div>
            <div class="form_btn_div">
            <button>Get A Free Quote</button>
            <p>We assure the privacy of your contact data. Prices are indicative may vary based on trip customization</p>
            </div>
            
        </form>
    </div>
</div>
<div class="deals">
    <?php
    foreach ($deals as $deal) { ?>

        <div>
            <img src="<?php echo $deal["img"]; ?>" alt="">
            <p> <?php echo $deal["title"]; ?></p>
        </div>

    <?php
    }
    ?>
</div>