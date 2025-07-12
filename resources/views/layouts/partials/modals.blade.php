 <!-- Modal Tambah Guru -->
 <div class="modal fade" id="modalTambahGuru" tabindex="-1" aria-labelledby="modalTambahGuruLabel" aria-hidden="true">
     <div class="modal-dialog">
         <form action="{{ route('guru.store') }}" method="POST">
             @csrf
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="modalTambahGuruLabel">Tambah Data Guru</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                 </div>
                 <div class="modal-body">
                     <div class="mb-3">
                         <label for="nama" class="form-label">Nama Lengkap</label>
                         <input type="text" class="form-control" name="nama" id="nama" required>
                     </div>
                     <div class="mb-3">
                         <label for="email" class="form-label">Email Guru</label>
                         <input type="email" class="form-control" name="email" id="email" required>
                     </div>
                     <div class="mb-3">
                         <label for="password" class="form-label">Password Login</label>
                         <input type="password" class="form-control" name="password" id="password" required>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="submit" class="btn btn-success">Simpan</button>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                 </div>
             </div>
         </form>
     </div>
 </div>

 <!-- end page-wrapper -->

 <!-- Modal Edit Guru -->
 <div class="modal fade" id="modalEditGuru" tabindex="-1" aria-labelledby="modalEditGuruLabel" aria-hidden="true">
     <div class="modal-dialog">
         <form id="formEditGuru" method="POST">
             @csrf
             @method('PUT')
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="modalEditGuruLabel">Edit Data Guru</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                 </div>
                 <div class="modal-body">
                     <input type="hidden" name="id" id="edit-id">
                     <div class="mb-3">
                         <label for="edit-nama" class="form-label">Nama</label>
                         <input type="text" class="form-control" name="name" id="edit-nama" required>
                     </div>
                     <div class="mb-3">
                         <label for="edit-email" class="form-label">Email</label>
                         <input type="email" class="form-control" name="email" id="edit-email" required>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="submit" class="btn btn-success">Update</button>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                 </div>
             </div>
         </form>
     </div>
 </div>
