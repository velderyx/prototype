<div>
    <div class="modal fade" id="insuranceModal" tabindex="-1" aria-labelledby="insuranceModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <form wire:submit.prevent="storeData">
                    @csrf <!-- Add CSRF token -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="insuranceModalLabel">Tambah Nama Asuransi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeModal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Input fields for your form -->
                        <div class="form-group">
                            <label>Nama </label>
                            <input type="text" placeholder="contoh: Sonwelis Takaful" class="form-control" id="name1" wire:model="name">
                        </div>
                        <!-- Add more input fields as needed -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="closeModal">Close</button>
                        <button type="submit" class="btn btn-primary" >Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
