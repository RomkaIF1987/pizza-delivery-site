<table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th class="text-center">Title</th>
        <th class="text-center">Description</th>
        <th class="text-center">Body</th>
        <th class="text-center">Category</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th class="text-center">Title</th>
        <th class="text-center">Description</th>
        <th class="text-center">Body</th>
        <th class="text-center">Category</th>
    </tr>
    </tfoot>
    <tbody>
    @foreach($blogs as $blog)
        <tr>
            <td>{{$blog->title}}</td>
            <td>{{$blog->description}}</td>
            <td>{{$blog->body}}</td>
            <td>{{$blog->category}}</td>
            <td class="d-flex"><a class="edit-modal btn btn-info mr-3"
                                  href="{{route('blogs.edit', ['blog' => $blog->id])}}">Edit</a>
                <form action="{{route('blogs.destroy', ['blog' => $blog->id])}}"
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