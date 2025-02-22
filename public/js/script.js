document.getElementById('hamburger').addEventListener('click', function() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    sidebar.classList.toggle('-translate-x-full');
    sidebar.classList.toggle('translate-x-0');

    // Mengubah visibilitas overlay
    overlay.classList.toggle('hidden');
    overlay.classList.toggle('opacity-100');
});

// Menambahkan event listener untuk menutup sidebar saat overlay diklik
document.getElementById('overlay').addEventListener('click', function() {
    closeSidebar();
});

// Menambahkan event listener untuk tombol tutup sidebar
document.getElementById('close-sidebar').addEventListener('click', function() {
    closeSidebar();
});

function closeSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    sidebar.classList.add('-translate-x-full');
    sidebar.classList.remove('translate-x-0');

    // Menyembunyikan overlay
    overlay.classList.add('hidden');
}