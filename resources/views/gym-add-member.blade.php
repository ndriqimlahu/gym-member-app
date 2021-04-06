<html>
    <head>
        <title>Gym Add Member</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
        <div class="text-center">
            <br>
            <a class="btn btn-primary btn-lg" href="{{route('viewMember')}}">View Members</a>
        </div>
        <br>
        <form method="post" action="{{route('addedMember')}}" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row card border-secondary align-items-center">
                    <div class="form-group col-sm-8">
                        <br><br>
                        <label>First Name</label>
                        <input class="form-control" type="text" name="first_name" required>
                        <br><br>
                        <label>Last Name</label>
                        <input class="form-control" type="text" name="last_name" required>
                        <br><br>
                        <label>Birthdate</label>
                        <input class="form-control" type="date" name="birth_date" required>
                        <br><br>
                        <label>Expire Date</label>
                        <input class="form-control" type="date" name="expire_date" required>
                        <br><br>
                        <label>Profile Picture</label>
                        <input class="form-control" type="file" name="profile_picture" required>
                        <br><br>
                    </div>
                    <input class="btn btn-secondary" type="submit" name="submit">
                    <br><br>
                </div>
            </div>
        </form>
    </body>
</html>
