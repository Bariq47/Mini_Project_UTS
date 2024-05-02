<div class="d-flex">
    <a href="{{ route('Inventorys.show', ['Inventory' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi-personlines-fill"></i></a>
    <a href="{{ route('Inventorys.edit', ['Inventory' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi-pencilsquare"></i></a>
    <div>
        <form action="{{ route('Inventorys.destroy', ['Inventory' => $barang->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me2"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
