<table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th class="text-center">Photo</th>
        <th class="text-center">Name</th>
        <th class="text-center">Description</th>
        <th class="text-center">Action</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th class="text-center">Photo</th>
        <th class="text-center">Name</th>
        <th class="text-center">Description</th>
        <th class="text-center">Action</th>

    </tr>
    </tfoot>
    <tbody>
    @foreach($galleries as $gallery)
        <tr>
            <td><img src="{{$gallery->getFirstMedia('gallery_images')->getUrl()}}" width="150" height="100"></td>
            <td>{{$gallery->name}}</td>
            <td>{{$gallery->description}}</td>
            <td>
                <form action="{{route('galleries.destroy', ['gallery' => $gallery->id])}}"
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