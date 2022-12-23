<!DOCTYPE html>
<html>

<body>

    <h2>Register Test Forms</h2>

    <form action="/register" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="phone">Phone</label><br>
        <input type="text" id="phone" name="phone"><br>
        <label for="profile_photo_path">Photo</label><br>
        <input type="file" id="profile_photo_path" name="profile_photo_path"><br>
        <label for="password">Password</label><br>
        <input type="text" id="password" name="password"><br>
        <input type="submit" value="Register">
    </form>
</body>

</html>