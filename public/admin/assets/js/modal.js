// Ambil semua elemen tombol "Edit"
const editButtons = document.querySelectorAll('.btn-edit');

// Loop melalui setiap tombol "Edit"
editButtons.forEach(button => {
  // Tambahkan event listener untuk saat tombol "Edit" diklik
  button.addEventListener('click', function() {
    // Ambil nilai atribut data-id dan data-nama dari tombol "Edit" yang diklik
    const id = this.getAttribute('data-id');
    const nama = this.getAttribute('data-nama');
    
    // Tampilkan modal dengan ID yang sesuai
    const modal = document.querySelector('#editModal');
    
    // Ubah konten modal sesuai dengan data yang diambil dari tombol "Edit"
    modal.querySelector('.modal-title').textContent = 'Edit Kategori';
    modal.querySelector('input[name="id"]').value = id;
    modal.querySelector('input[name="nama"]').value = nama;
    
    // Tampilkan modal
    modal.style.display = 'block';
  });
});
