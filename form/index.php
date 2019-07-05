<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Create user account</h2>
    <form action="xuly-form.php" method="POST">
        Name: <input type="text" placeholder="Enter name" name="txtName">
        <br>
        Email: <input type="email" value="admin@gmail.com" name="txtEmail">
        <br>
        Gender: <label> 
                    <input type="radio" name="txtGender" value="male">
                    Male
                </label>
                <input type="radio" name="txtGender" value="female"
                id="female"> 
                <label for="female">Female </label>
        <br>
        Password: <input type="password" name="password">
        <br>
        Confirm Password: <input type="password"
        name="confirm_password" minlength="6">
        <br>
        <button type="reset">Clear</button>
        <!-- <button>Submit</button> -->
        <input type="submit" value="Submit">
    </form>
</body>
</html>