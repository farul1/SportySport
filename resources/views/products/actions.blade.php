<div class="btn-group" role="group" aria-label="Basic example">
    <a href="{{ route('products.show', $product->id) }}" class="btn3" title="Lihat"><i class="bi bi-eye">show</i></a>
    <a href="{{ route('products.edit', $product->id) }}" class="btn3" title="Edit"><i class="bi bi-pencil">edit</i></a>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn3" onclick="return confirm('Anda yakin ingin menghapus produk ini?')" title="Hapus"><i class="bi bi-trash"></i>delete</button>
    </form>
</div>
