<table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th class="text-center">Name</th>
        <th class="text-center">Description</th>
        <th class="text-center">Price</th>
        <th class="text-center">Type</th>
        <th class="text-center">Actions</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th class="text-center">Name</th>
        <th class="text-center">Description</th>
        <th class="text-center">Price</th>
        <th class="text-center">Type</th>
        <th class="text-center">Actions</th>
    </tr>
    </tfoot>
    <tbody>
    @foreach($menuItems as $menuItem)
        <tr>
            <td>{{$menuItem->name}}</td>
            <td>{{$menuItem->description}}</td>
            <td>{{$menuItem->price}}</td>
            <td>{{$menuItem->type}}</td>
            <td class="d-flex"><a class="edit-modal btn btn-info mr-3"
                   href="{{route('menu-items.edit', ['menuItem' => $menuItem->id])}}">Edit </a>
                <form action="{{route('menu-items.destroy', ['menuItem' => $menuItem->id])}}"
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