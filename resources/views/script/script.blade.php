<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
      const deleteLinks = document.querySelectorAll(".delete-link");
    
      deleteLinks.forEach((link) => {
        link.addEventListener("click", function (e) {
          e.preventDefault();
          const deleteUrl = this.href;
    
          Swal.fire({
            title: "Apakah Anda yakin?",
            text: "Hapus Data?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus!",
          }).then((result) => {
            if (result.isConfirmed) {
              // Redirect ke URL penghapusan jika pengguna menekan "Ya, Hapus!"
              window.location.href = deleteUrl;
            }
          });
        });
      });
    });
    </script>
     