<div>
    {{-- <button wire:click="showAlert" class="btn btn-primary">Show Alert</button> --}}
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.addEventListener('swal',function(e){
        Swal.fire({
            toast: true,
            timer: 3000,
            icon: 'success',
            title: 'Berhasil disimpan',
            text: "",
            position: 'top-end',
            showConfirmButton: false
        });
    });
</script>
