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
            <td><a class="edit-modal btn btn-info"
                   href="{{route('adminEditUser', ['user' => $user->id])}}">
                    <span class="glyphicon glyphicon-edit"></span> Edit
                </a>
                <form action="{{route('users.destroy', ['user' => $user->id])}}"
                      method="POST">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="delete-modal btn btn-danger">
                        <span class="glyphicon glyphicon-trash"></span> Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>