<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <h3> &#128515 Validation Form </h3>
    <form action="form_result.php" method="post">
        <label>LASTNAME:</label>
        <input type="text" name="lastname" id="lastname" required><br>

        <label>FIRSTNAME:</label>
        <input type="text" name="firstname" id="firstname" required><br>

        <label>EMAIL:</label>
        <input type="email" name="email" id="email" required><br>

        <label>ADDRESS:</label>
        <input type="text" name="address" id="address" required><br>
        
        <label>AGE:</label>
        <input type="number" name="age" id="age" required><br>

        <label>PHONE NUMBER:</label>
        <input type="number" name="phonenumber" id="phonenumber" required><br><br>
        
        <label>GENDER:</label>
        <select name="gender" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br><br>

        <label>COMMENT:</label>
        <textarea name="comment" id="comment" cols="35" rows="7"></textarea><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>