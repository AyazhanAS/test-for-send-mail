<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?="test";?></title>
</head>
<body>
<form method='POST' action='sendmail.php'>
    <select name="subject" id="">
        <option disabled selected>тема письма</option>
        <option value="1">вопрос по уроку</option>
        <option value="2">благодарность</option>
        <option value="3">жалоба</option>
        <option value="4">личный вопрос</option>
    </select>
    <input type="email" name='email' placeholder="enter email" maxlength='50' required><br>
    <textarea name="message" placeholder='enter message' maxlength='50' required></textarea>
    <img src="capcha.png" alt="">
    <input type="number" name='capcha' placeholder='enter image number'>
    <input type="submit" value='send message'>
</form>


    
</body>
</html>