


<div class="d-flex">
    <a href="{{ route('satuan.show', ['satuan' => $satuan_sakkarepmu->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-inboxes"></i></a>
    <a href="{{ route('satuan.edit', ['satuan' => $satuan_sakkarepmu->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi-pencil-square"></i></a>

            {{-- delete --}}
            <div>
                <form action="{{ route('satuan.destroy', ['satuan' => $satuan_sakkarepmu->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                </form>
            </div>
    <div>
    </div>
