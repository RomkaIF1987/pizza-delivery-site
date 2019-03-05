<table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Phone</th>
        <th class="text-center">City</th>
        <th class="text-center">Street</th>
        <th class="text-center">House</th>
        <th class="text-center">Room</th>
        <th class="text-center">Role</th>
        <th class="text-center">Actions</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Phone</th>
        <th class="text-center">City</th>
        <th class="text-center">Street</th>
        <th class="text-center">House</th>
        <th class="text-center">Room</th>
        <th class="text-center">Role</th>
        <th class="text-center">Actions</th>
    </tr>
    </tfoot>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->city}}</td>
            <td>{{$user->street}}</td>
            <td>{{$user->house}}</td>
            <td>{{$user->room}}</td>
            <td>{{$user->role}}</td>
            <td class="d-flex"><a class="edit-modal btn btn-info mr-3"
                   href="{{route('adminEditUser', ['user' => $user->id])}}">Edit</a>
                <form action="{{route('users.destroy', ['user' => $user->id])}}"
                      method="POST">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="delete-modal btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>