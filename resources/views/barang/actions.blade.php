<div class="d-flex">
    <a href="{{ route('barang.show', ['barang' => $barang_sakkarepmu->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-inboxes"></i></a>
    <a href="{{ route('barang.edit', ['barang' => $barang_sakkarepmu->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

    <div>
        <form action="{{ route('barang.destroy', ['barang' => $barang_sakkarepmu->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
