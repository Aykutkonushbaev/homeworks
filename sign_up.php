
<!--/**-->
<!-- * Created by Aykut-->
<!-- * Date: 2/14/14-->
<!-- * Time: 11:08 AM-->
<!-- */-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Регистрация</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://jquery.bassistance.de/validate/demo/site-demos.css">
    <script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/validation.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="well span4 offset4">
                <legend>Регистрация на сайте</legend>
<!--                <div class="alert alert-error">-->
<!--                    <a class="close" href="#" data-dismiss="alert">x</a>Введены неверные данные-->
<!--                </div>-->
                <form id="sign_up" method="POST" action="/greeting.php" accept-charset="utf-8">
                    <input type="email" class="span4" placeholder="Введите ваш E-mail" name="email">
                    <input type="password" class="span4" placeholder="Введите Ваш Новый Пароль" id="password" name="password">
                    <input type="password" class="span4" placeholder="Подтвердите Пароль" id="password_2" name="password_2">
                    <button  type="submit" name="submit" class="btn btn-block btn-success">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<!--<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>-->
<script src="http://jquery.bassistance.de/validate/jquery.validate.js"></script>
<script src="http://jquery.bassistance.de/validate/additional-methods.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    jQuery.validator.setDefaults({
//        debug: true,
        success: "valid"
    });
//function(){
//
//    document.getElementById("sign_up").submit();
//};

</script>
</body>
</html>
