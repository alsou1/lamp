<html>
<head>
    <meta charset="utf-8">
    <title> Page</title>

</head>
<body>
<center >
    <form name="main" method="post" onsubmit="return validateForm()">
        Email: <br />
        <input name="mail" type="text" size="25" maxlength="30"  /> <br />
        Пароль: <br />
        <input name="pd" type="password" size="25" maxlength="30" value="" /> <br />
        Логин: <br />
        <input name="login" type="text" id="login" /> <br />
            <textarea id="txt" name="about" class="form-control" rows="2" style="width: 230px;" onKeyDown="limitText(this,200);"
                      onKeyUp="limitText(this,200);"></textarea>
        <br>

        Осталось <input readonly type="text" id="counter" size="3" value="200"> символов.
        <input type="submit" name="enter" value="Вход" vis />
        <br>
    </form>
</center>
<script language="javascript" type="text/javascript">
    function validateForm() {
        var x = document.forms["main"]["mail"]['login'].value;
        if (x == null || x == "" || !validateEmail(x)) {
            alert("Ошибка проверки");
            return false;
        }
    }

    function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        return re.test(email);
    }

    function limitText( area ,limit ) {
        area.value = area.value.substring(0,limit);
        document.getElementById("counter").value = 200 - area.value.length;
    }


</script>

</body>
</html>