document.addEventListener("DOMContentLoaded", function () {
    const notificationElement = document.querySelector("body");

    if (notificationElement && notificationElement.dataset.flashMessage) {
        const message = notificationElement.dataset.flashMessage;
        const type = notificationElement.dataset.flashType || "success"; // Default ke 'success' jika tidak ada

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
            timer: 3000,
            showConfirmButton: false,
            toast: true,
            position: "top-end",
        });
    }
});
