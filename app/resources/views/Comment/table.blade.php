<table class="table table-striped  text-nowrap">
    <thead>
        <tr>
            <th>Comment</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($pageComments as $comment)
        <tr>
            <td>{{ $comment->comment }}</td>
            <td>{{ $comment->created_at }}</td>
            <td>{{ $comment->updated_at }}</td>
            <td>
                <a href="{{ route('comment.edit', ['comment' => $comment]) }}"
                    class="btn btn-sm btn-default "><i class="fa-solid fa-pen-to-square"></i></a>
                <form method="POST" action="{{ route('comment.destroy', ['comment' => $comment]) }}"
                    style="display: inline-block;" onclick="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">Aucun comment trouvé.
                <a href="#" class="mx-1">Ajouter comment</a>
            </td>
        </tr>

        @endforelse
    </tbody>
</table>
