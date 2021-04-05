<html>
    <head>
        <title>Gym View Member</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
        <a class="btn btn-primary" href="{{route('addMember')}}">Add Member</a>
        <br><br>
            <?php $viewGymMember = new App\Models\GymMemberModel();
                $gymMember = $viewGymMember::all(); ?>

            @foreach($gymMember as $gymMembers)
                @component('components.rowtable')
                    @slot('id',$gymMembers->getId())
                    @slot('first_name',$gymMembers->getFirstName())
                    @slot('last_name',$gymMembers->getLastName())
                    @slot('birth_date',$gymMembers->getBirthDate())
                    @slot('expire_date',$gymMembers->getExpireDate())
                    @slot('delete_member')
                        <form onsubmit="return confirm('Are your sure to delete this member?');"
                        method="post" action="{{route('deleteGymMember',$gymMembers->getId())}}">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">DELETE</button>
                            </form>
                    @endslot
                @endcomponent
            @endforeach

    </body>
</html>
