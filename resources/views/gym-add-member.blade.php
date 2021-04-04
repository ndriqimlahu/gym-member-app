<html>
    <head>
        <title>Gym Add Member</title>
    </head>
    <body>
        <form method="post" action="{{route('addedMember')}}" enctype="multipart/form-data">
            @csrf
            <button>View Members</button>
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
