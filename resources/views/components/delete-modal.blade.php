<div class="modal fade" id="reminderModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog  d-none" role="document" id="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Ingin menghapus field ini? aksi ini tidak dapat di kembalikan.</p>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dontShowToday">
                    <label class="form-check-label" for="dontShowToday">Jangan tampilkan untuk hari ini</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Hapus</button>
            </div>
        </div>
    </div>
</div>
