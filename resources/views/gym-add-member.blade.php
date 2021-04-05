<html>
    <head>
        <title>Gym Add Member</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
        <form method="post" action="{{route('addedMember')}}" enctype="multipart/form-data">
            @csrf
            <a href="{{route('viewMember')}}">View Members</a>
            <br><br>
            <label>First Name</label>
            <input type="text" name="first_name">
            <br><br>
            <label>Last Name</label>
            <input type="text" name="last_name">
            <br><br>
            <label>Birthdate</label>
            <input type="date" name="birth_date">
            <br><br>
            <label>Expire Date</label>
            <input type="date" name="expire_date">
            <br><br>
            <label>Profile Picture</label>
            <input type="file" name="profile_picture">
            <br><br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>
