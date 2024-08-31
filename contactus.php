<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <!--bootstrap links-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        

</head>


<body>

    <!--Caption for Contact Us-->
    <div class="caption">
        <h1>
            <center>Contact Us</center>
        </h1><br>
        <p>
            <center>
                <font size="4">
                    Have questions about your next adventure? Our team is here to help! Reach out to us for personalized
                    travel advice, booking assistance, or any other inquiries. We're excited to help you create
                    unforgettable memories.</font>
            </center>
        </p>
    </div>
    <!--End of Caption for Contact Us-->

    <!--First column -->
    <div class="row">
        <div class="col-sm-6" id="col1">

            <div class="box">
                <div><img src="geo-alt.svg"></div>
                <div class="text">
                    <h3>Address</h3>
                    <p>No.223,<br>Havelock road,<br>Colombo 07</p>
                </div>
            </div>
            <div class="box">
                <div><img src="telephone.svg"></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>+94 11 222 23 23</p>
                </div>
            </div>

            <div class="box">
                <div><img src="envelope.svg"></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>support@gmail.com</p>
                </div>
            </div>
        </div>


        <!--form enter full name, email, your msg-->
        <div class="col-sm-6">
            <form action="connect.php" method="POST" class="contact">
                <h2>
                    <center>Send Massage</center>
                </h2><br>


                <label for="name">Full Name<br>
                    <input type="text" name="full_name" required="required" placeholder="Enter Your Full name"
                        id="name">

                </label><br>

                <label for="email">Email<br>
                    <input type="email" name="email" placeholder="example@gmail.com" id="email" required>

                </label>
                <br>
                <label for="message">Your Massage:<br>
                    <textarea rows="2" name="massage" placeholder="Enter Your Massage Here" id="massage"
                        required></textarea>

                </label>
                <br><br>
                <button type="submit" class="btn1" name="submit">Send</button>
                <button type="reset" class="btn1" name="clear">Clear</button>



            </form>
        </div>

    </div>
   </body> 

</html>
