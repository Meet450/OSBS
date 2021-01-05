<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Registration.css">
</head>

<body>
        <form action="info_registration.php" method="POST">
            <div class="container">
            <h1>Register Here</h1><br>
                <div class="form-group">
                    <input type="text" class="form-control" id="" name="name" placeholder="Username" required>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" id="" name="email" placeholder="xyz@gmail.com" required>
                </div>

                <div class="form-group">
                    <input type="date" class="form-control" id="" name="dob" placeholder="date" required>
                </div>

                <div class="form-group">
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="other"> Other
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" id="" name="number" placeholder="Mobile NO" required>
                </div>

                <div class="form-group">
                    <input type="textarea" class="form-control" id="" name="address" placeholder="Address" required>
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" id="" name="pincode" placeholder="Pin-code">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="" name="password" placeholder="password" required>
                </div>

                <button class="btn btn-outline-success" id="btn" name="submit" type="submit">Submit</button>

            </div>
        </form>
</body>

</html>
