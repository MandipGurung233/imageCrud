<tr>
    <th scope="row">{{$post->id}}</th>
    <td>
        <img src="{{asset($post->image)}}" alt="" width="80">
    </td>
    <td>{{$post->title}}</td>
    <td>{{$post->description}}</td>
    <td>{{$post->category->name}}</td>
    <td>{{date('d-m-y', strtotime($post->created_at))}}</td>
    <td>
        <div class="d-flex">
            <a class="btn btn-primary mx-1" href="{{route('posts.restore',$post->id)}}">Restore</a>
            <form action="{{route('posts.force_delete', $post->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn-sm btn-danger btn mx-1">
                    Remove
                </button>
            </form>
        </div>
        
    </td>
</tr>