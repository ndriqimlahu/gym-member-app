<html>
    <head>
        <title>Gym Edit Member</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
        <br>
        <form method="post" action="{{route('editGymMember')}}" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row card border-secondary align-items-center">
                    <div class="form-group col-sm-8">
                        <input type="hidden" name="id" value="{{$gym_members['id']}}">
                        <br><br>
                        <label>First Name</label>
                        <input class="form-control" type="text" name="first_name" value="{{$gym_members['first_name']}}">
                        <br><br>
                        <label>Last Name</label>
                        <input class="form-control" type="text" name="last_name" value="{{$gym_members['last_name']}}">
                        <br><br>
                        <label>Birthdate</label>
                        <input class="form-control" type="date" name="birth_date" value="{{$gym_members['birth_date']}}">
                        <br><br>
                        <label>Expire Date</label>
                        <input class="form-control" type="date" name="expire_date" value="{{$gym_members['expire_date']}}">
                        <br><br>
                        <label>Profile Picture</label>
                        <input class="form-control" type="file" name="profile_picture" value="{{$gym_members['profile_picture']}}" required>
                        <br><br>
                    </div>
                    <input class="btn btn-secondary" type="submit" name="submit">
                    <br><br>
                </div>
            </div>
        </form>
    </body>
</html>
