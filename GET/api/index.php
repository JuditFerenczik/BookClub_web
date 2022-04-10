<!DOCTYPE html>

<html lang="hu">

<head>
    <title>PizzásTér</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="registration.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php
    if (isset($_POST)) {
        require_once('insert.php');
    }

    ?>
    <div class="signup-form">
        <form action="" method="post">
            <h2>Regisztráció</h2>
            <p>Töltse ki az alábbi adatlapot!</p>
            <hr>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="fa fa-user"></span>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="nev" placeholder="nev" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="fa fa-user"></span>
                        </span>
                    </div>
                    <input type="number" class="form-control" name="adoaz" placeholder="adoazonosito" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-paper-plane"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="fonok" placeholder="fonok" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-address-book-o"></i>
                        </span>
                    </div>
                    <input type="number" class="form-control" name="munkarend" placeholder="munkarend" required="required">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-phone-square"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="belepes" placeholder="belepes" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-phone-square"></i>
                        </span>
                    </div>
                    <input type="email" class="form-control" name="email" placeholder="email" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <input type="password" class="form-control" name="jelszo" placeholder="Jelszó" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-phone-square"></i>
                        </span>
                    </div>
                    <input type="number" class="form-control" name="szabads" placeholder="szabads" required="required">
                </div>

            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-phone-square"></i>
                        </span>
                    </div>
                    <input type="number" class="form-control" name="hetimunk" placeholder="hatimunka" required="required">
                </div>
            </div>

            <div class="form-group">
                <label class="form-check-label"><input type="checkbox" required="required"> Elfogadom <a href="#">Felhasználói feltételeket</a>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Regisztráció</button>
            </div>
        </form>
        <div class="text-center">Van már fiókod?? <a href="./bejelentkezes.php">Bejelentkezés itt.</a></div>
    </div>


</head>



</html>