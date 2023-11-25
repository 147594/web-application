<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Details Form</title>
</head>
<body>
    <h2>Author Details Form</h2>
    <form action="process_form.php" method="post">
        <label for="authorId">Author ID:</label>
        <input type="text" id="authorId" name="authorId" required><br>

        <label for="authorFullName">Author Full Name:</label>
        <input type="text" id="authorFullName" name="authorFullName" required><br>

        <label for="authorEmail">Author Email:</label>
        <input type="email" id="authorEmail" name="authorEmail" required><br>

        <label for="authorAddress">Author Address:</label>
        <input type="text" id="authorAddress" name="authorAddress" required><br>

        <label for="authorBiography">Author Biography:</label>
        <textarea id="authorBiography" name="authorBiography" rows="4" required></textarea><br>

        <label for="authorDateOfBirth">Author Date of Birth:</label>
        <input type="date" id="authorDateOfBirth" name="authorDateOfBirth" required><br>

        <label for="authorSuspended">Author Suspended:</label>
        <input type="checkbox" id="authorSuspended" name="authorSuspended"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
