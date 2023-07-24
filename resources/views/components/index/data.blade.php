<tr>
    <th scope="row">{{$id}}</th>
    <td>
        <img src="{{asset($image)}}" alt="" width="80">
    </td>
    <td>{{$title}}</td>
    <td>{{$description}}</td>
    <td>{{$category}}</td>
    <td>{{date('d-m-y', strtotime($creation))}}</td>
    <td>
        <a class="btn btn-success" href="{{route('posts.show', $id)}}">Show</a>
        <a class="btn btn-primary" href="{{route('posts.edit', $id)}}">Edit</a>
        <form action="{{route('posts.destroy',$id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn-sm btn-danger btn">
                Delete
            </button>
        </form>
    </td>
</tr>