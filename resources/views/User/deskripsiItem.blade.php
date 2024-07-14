<div class="modal fade" tabindex="-1" role="dialog" id="deskripsi{{ $row->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="('user.delete.myItem')" method="post">
                    @csrf
                    @method('')
                    <div>
                        <p class="text-center">Apakah yakin mau hapus item <strong style="color: red;">{{$row->nama_item}}</strong>?</p>
                        <input type="hidden" name="id" value="{{$row->id}}">
                    </div>

            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
        </div>
        </form>
    </div>
</div>