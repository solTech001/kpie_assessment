<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="{{ asset('../asset/css/dash.css') }}">
    <!-- js link -->
</head>
<body>
    <div class="container">
        <div>
            <img src="{{ asset('../asset/img/my_img.jpg') }}" alt="profile_pic">
        </div>
        <form action="" method="post">
            <label for="name">Name</label>
            <div>
                <input type="text" id="name"name ="name"value="">
            </div>
            <label for="username">username</label>
            <div>
              <input type="text" id="username" value="" readonly>
            </div>
            <label for="username">Balance</label>
            <div>
               <input type="text" id="username" value="" readonly>
            </div>
            <div>
             <button type="submit" name="update">Edit Profile</button>
            </div>
        </form>
    </div>
</body>
</html>