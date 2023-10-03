<!DOCTYPE html>
<html>  
</head>
<title>register</title>
<body>
    <h1>Register</h1>
    <form method="POST" action="/welcome">
        @csrf
        <label for="first_name">first Name:</label>
        <input type="text" name="first_name" required><br>
        
        <label for="last_name">last Name:</label>
        <input type="text" name="last_name" required><br>
        
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>