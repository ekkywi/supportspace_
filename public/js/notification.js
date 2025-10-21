// Notifikasi
document.addEventListener("DOMContentLoaded", function () {
    const notificationElement = document.querySelector("body");

    if (notificationElement && notificationElement.dataset.flashMessage) {
        const message = notificationElement.dataset.flashMessage;
        const type = notificationElement.dataset.flashType || "success";
        let title = "Berhasil!";
        if (type === "error") {
            title = "Gagal!";
        } else if (type === "warning") {
            title = "Peringatan!";
        } else if (type === "info") {
            title = "Informasi";
        }

        Swal.fire({
            icon: type,
            title: title,
            text: message,
            timer: 2000,
            showConfirmButton: false,
            toast: true,
            position: "top-end",
        });
    }

    // Konfirmasi Hapus
    document.querySelectorAll(".delete-button").forEach((button) => {
        button.addEventListener("click", function () {
            const id = this.dataset.id;
            Swal.fire({
                title: "Anda yakin?",
                text: "Data yang Anda pilih akan dihapus, Anda harus melakukan restore data untuk mengembalikannya!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#6c757d",
                confirmButtonText: "Hapus",
                cancelButtonText: "Batal",
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("delete-form-" + id).submit();
                }
            });
        });
    });
});

function confirmForceDelete(id) {
    Swal.fire({
        title: "Anda Yakin?",
        text: "Tindakan ini akan menghapus data secara permanen dan tidak dapat dibatalkan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#6c757d",
        confirmButtonText: "Ya, Hapus Permanen!",
        cancelButtonText: "Batal",
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById("force-delete-form-" + id).submit();
        }
    });
}

// Konfirmasi Hapus Permanen
function showConfirmationDialog(options) {
    const config = {
        title: options.title || "Apakah Anda yakin?",
        text:
            options.text ||
            "Tindakan ini akan menghapus data secara permanen dan tidak dapat dipulihkan!",
        icon: options.icon || "warning",
        confirmButtonText: options.confirmButtonText || "Ya, Lanjutkan!",
        formId: options.formId,
    };

    Swal.fire({
        title: config.title,
        text: config.text,
        icon: config.icon,
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#6c757d",
        confirmButtonText: config.confirmButtonText,
        cancelButtonText: "Batal",
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.getElementById(config.formId);
            if (form) {
                form.submit();
            } else {
                console.error(
                    "Error: Form with ID '" + config.formId + "' not found."
                );
            }
        }
    });
}
