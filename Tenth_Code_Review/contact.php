<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require_once "components/boot.php"; ?>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="/components/style.css">
 </head>

<body>
    <header>
        <?php
        include_once 'components/navbar.php';
        ?>
    </header>
    <div class="d-flex justify-content-center align-items-center" style="background-image: url(https://desertfox-safari.com/wp-content/uploads/2019/12/contact-banner-1024x350.jpg); height: 50vh; background-size: cover; background-repeat: no-repeat; background-position: 50% 30%;">
        <h1 class="text-center text-dark">
    </div>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="well well-sm">
                        <form class="form-horizontal" action="" method="post">
                            <fieldset>

                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label mt-3" for="name">Name</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                    </div>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label mt-3" for="email">Your E-mail</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                                    </div>
                                </div>

                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label mt-3" for="message">Your message</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right mt-3">
                                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center col-md-6">
                    <h1>
                        Feel free to reach out to us for Feedback or if you have any questions!
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php
        include_once 'components/footer.php';
        ?>
    </footer>

</body>

</html>