<!DOCTYPE html>
<html>
<head>
    <title>User Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin: 5px 0;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        input[type="submit"] {
            background: #333;
            color: #fff;
            border: 0;
            border-radius: 3px;
            padding: 10px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Registration</h2>
        <form>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label>Occupation:</label>
            <input type="radio" id="student" name="occupation" value="student">
            <label for="student">Student</label>
            <input type="radio" id="parent" name="occupation" value="parent">
            <label for="parent">Parent</label>
            <input type="radio" id="teacher" name="occupation" value="teacher">
            <label for="teacher">Teacher</label>

            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>
