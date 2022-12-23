<!DOCTYPE html>
<html>

<body>

    <h2>Login Test Forms</h2>

    <form action="/login" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="email">Email</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="password">Password</label><br>
        <input type="text" id="password" name="password"><br>
        <input type="submit" value="Register">
    </form>
</body>

</html>