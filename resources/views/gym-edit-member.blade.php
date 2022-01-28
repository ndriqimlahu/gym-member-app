<x-app-layout>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Member') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-center">
                        <br>
                        <a class="btn btn-secondary btn-lg" href="{{ route('viewMember') }}">Go Back</a>
                    </div>
                    <br>
                    <form method="post" action="{{ route('editGymMember') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row card border-secondary align-items-center mt-10 mb-10">
                                <div class="form-group col-sm-8">
                                    <input type="hidden" name="id" value="{{ $gym_members['id'] }}">
                                    <br><br>
                                    <label>First Name</label>
                                    <input class="form-control" type="text" name="first_name"
                                        value="{{ $gym_members['first_name'] }}">
                                    <br><br>
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" name="last_name"
                                        value="{{ $gym_members['last_name'] }}">
                                    <br><br>
                                    <label>Birthdate</label>
                                    <input class="form-control" type="date" name="birth_date"
                                        value="{{ $gym_members['birth_date'] }}">
                                    <br><br>
                                    <label>Expire Date</label>
                                    <input class="form-control" type="date" name="expire_date"
                                        value="{{ $gym_members['expire_date'] }}">
                                    <br><br>
                                    <label>Profile Picture</label>
                                    <input class="form-control" type="file" name="profile_picture"
                                        value="{{ $gym_members['profile_picture'] }}" required>
                                    <br><br>
                                </div>
                                <input class="btn btn-warning btn-lg" type="submit" name="submit">
                                <br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
