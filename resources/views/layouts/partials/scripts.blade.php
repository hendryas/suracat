 <script>
     $(document).ready(function() {
         $('.btn-delete').on('click', function() {
             const guruId = $(this).data('id');
             const guruName = $(this).data('name');

             Swal.fire({
                 title: 'Yakin ingin menghapus?',
                 text: `Data guru "${guruName}" akan dihapus!`,
                 icon: 'warning',
                 showCancelButton: true,
                 confirmButtonColor: '#d33',
                 cancelButtonColor: '#6c757d',
                 confirmButtonText: 'Ya, hapus!',
                 cancelButtonText: 'Batal'
             }).then((result) => {
                 if (result.isConfirmed) {
                     $.ajax({
                         url: `/admin/guru/${guruId}`,
                         type: 'POST',
                         data: {
                             _token: '{{ csrf_token() }}',
                             _method: 'DELETE'
                         },
                         success: function(res) {
                             if (res.status === 'success') {
                                 Swal.fire('Berhasil!', res.message, 'success').then(
                                     () => {
                                         location.reload();
                                     });
                             } else {
                                 Swal.fire('Gagal', res.message, 'error');
                             }
                         },
                         error: function() {
                             Swal.fire('Error', 'Gagal menghapus data.', 'error');
                         }
                     });
                 }
             });
         });
     });
 </script>


 <!-- Javascript  -->
 <!-- vendor js -->

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script>
     $(document).ready(function() {
         $('form').on('submit', function(e) {
             e.preventDefault();

             var form = $(this);
             var formData = form.serialize();
             var actionUrl = form.attr('action');

             $.ajax({
                 url: actionUrl,
                 method: 'POST',
                 data: formData,
                 success: function(response) {
                     if (response.status === 'success') {
                         $('#modalTambahGuru').modal('hide');

                         Swal.fire({
                             icon: 'success',
                             title: 'Berhasil',
                             text: response.message,
                             timer: 2000,
                             showConfirmButton: false
                         }).then(() => {
                             location.reload(); // reload page to show new data
                         });
                     } else {
                         Swal.fire({
                             icon: 'error',
                             title: 'Gagal',
                             text: response.message || 'Terjadi kesalahan.'
                         });
                     }
                 },
                 error: function(xhr) {
                     Swal.fire({
                         icon: 'error',
                         title: 'Error',
                         text: 'Gagal menyimpan data. Silakan periksa input Anda.'
                     });
                 }
             });
         });
     });
 </script>

 <script>
     $(document).ready(function() {
         // Saat tombol edit diklik
         $('.btn-edit').on('click', function() {
             let id = $(this).data('id');
             let name = $(this).data('name');
             let email = $(this).data('email');

             $('#edit-id').val(id);
             $('#edit-nama').val(name);
             $('#edit-email').val(email);

             // Set action URL untuk form update
             $('#formEditGuru').attr('action', `/admin/guru/${id}`);
         });

         // Handle form update dengan AJAX dan SweetAlert
         $('#formEditGuru').on('submit', function(e) {
             e.preventDefault();

             let form = $(this);
             let actionUrl = form.attr('action');
             let formData = form.serialize();

             $.ajax({
                 url: actionUrl,
                 type: 'POST',
                 data: formData,
                 success: function(res) {
                     if (res.status === 'success') {
                         $('#modalEditGuru').modal('hide');
                         Swal.fire('Sukses', res.message, 'success').then(() => {
                             location.reload();
                         });
                     } else {
                         Swal.fire('Gagal', res.message, 'error');
                     }
                 },
                 error: function() {
                     Swal.fire('Error', 'Terjadi kesalahan saat mengupdate data.', 'error');
                 }
             });
         });
     });
 </script>

 <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

 <script src="{{ asset('assets/libs/simple-datatables/umd/simple-datatables.js') }}"></script>
 <script src="{{ asset('assets/js/pages/datatable.init.js') }}"></script>

 <script src="{{ asset('assets/js/app.js') }}"></script>
