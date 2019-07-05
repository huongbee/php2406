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
    <form>
        Name: <input type="text" placeholder="Enter name">
        <br>
        Email: <input type="email" value="admin@gmail.com">
        <br>
        Gender: <label> 
                    <input type="radio" name="gender" value="male">
                    Male
                </label>
                <input type="radio" name="gender" value="female"
                id="female"> 
                <label for="female">Female </label>
        <br>
        Password: <input type="password">
        <br>
        Confirm Password: <input type="password">
        <br>
        <button type="reset">Clear</button>
        <button type="submit">Submit</button>
    </form>
</body>
</html>