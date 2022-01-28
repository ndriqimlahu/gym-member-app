<x-app-layout>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Member') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-center">
                        <br>
                        <a class="btn btn-secondary btn-lg" href="{{ route('addMember') }}">Add Member</a>
                    </div>
                    <br>
                    <?php $viewGymMember = new App\Models\GymMemberModel();
                    $gymMember = $viewGymMember::all(); ?>

                    @forelse ($gymMember as $gymMembers)
                        @component('components.rowtable')
                            @slot('id', $gymMembers->getId())
                            @slot('first_name', $gymMembers->getFirstName())
                            @slot('last_name', $gymMembers->getLastName())
                            @slot('birth_date', $gymMembers->getBirthDate())
                            @slot('expire_date', $gymMembers->getExpireDate())
                            @slot('edit_member')
                                <form onsubmit="return confirm('Are your sure to edit this member?');" method="post"
                                    action="{{ route('showDataEditMember', $gymMembers->getId()) }}">
                                    @method('POST')
                                    @csrf
                                    <button class="btn btn-success">EDIT</button>
                                </form>
                            @endslot
                            @slot('delete_member')
                                <form onsubmit="return confirm('Are your sure to delete this member?');" method="post"
                                    action="{{ route('deleteGymMember', $gymMembers->getId()) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger">DELETE</button>
                                </form>
                            @endslot
                        @endcomponent
                        @empty
                            <div class="text-center mt-10 mb-10">
                                <h3>No gym member has been found!</h3>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
