<div class="container">
    <div class="row card border-secondary justify-content-center mt-10 mb-10">
        <table class="table text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Birthdate</th>
                    <th>Expire Date</th>
                    <th>Edit Member</th>
                    <th>Delete Member</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $id }}</td>
                    <td>{{ $first_name }}</td>
                    <td>{{ $last_name }}</td>
                    <td>{{ $birth_date }}</td>
                    <td>{{ $expire_date }}</td>
                    <td>{{ $edit_member }}</td>
                    <td>{{ $delete_member }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
