window.confirmDelete = function (
    id,
    message = "Data ini akan dihapus secara permanen. Lanjutkan?"
) {
    event.preventDefault(); // jaga-jaga kalau onclick lupa
    Swal.fire({
        title: "Yakin ingin menghapus?",
        text: message,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#6c757d",
        confirmButtonText: "Ya, hapus!",
        cancelButtonText: "Batal",
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.getElementById(`delete-form-${id}`);
            if (form) form.submit();
        }
    });
};
