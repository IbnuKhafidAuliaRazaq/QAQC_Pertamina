
// BTN ALERT DELETE

$('.btn-alert-delete').on("click", function (e) {
    e.preventDefault()
    Swal.fire({
        title: 'Apakah anda yakin untuk menghapus data ini?',
        showCancelButton: true,
        confirmButtonText: 'Iya',
        cancelButtonText: 'Tidak',
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = this.href
        } else {
            Swal.fire('Tidak jadi menghapus data', '', 'info')
        }
    })
})


