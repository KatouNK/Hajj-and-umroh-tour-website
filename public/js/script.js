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

    function setupDrawer(buttonId, drawerId) {
        const button = document.getElementById(buttonId);
        const drawer = document.getElementById(drawerId);

        button.addEventListener('click', () => {
            drawer.classList.toggle('hidden');
        });

        drawer.addEventListener('click', (event) => {
            if (event.target.tagName === 'LI') {
                const value = event.target.getAttribute('data-value');
                button.textContent = value.charAt(0).toUpperCase() + value.slice(1); // Menampilkan pilihan yang dipilih
                drawer.classList.add('hidden'); // Menutup drawer setelah memilih
            }
        });
    }

    // Setup untuk setiap drawer
    setupDrawer('month-button', 'month-drawer');
    setupDrawer('package-button', 'package-drawer');
    setupDrawer('location-button', 'location-drawer');
    setupDrawer('days-button', 'days-drawer');

    // Menutup drawer jika mengklik di luar
    document.addEventListener('click', (event) => {
        const drawers = ['month-drawer', 'package-drawer', 'location-drawer', 'days-drawer'];
        drawers.forEach(drawerId => {
            const drawer = document.getElementById(drawerId);
            const button = document.getElementById(drawerId.replace('-drawer', '-button'));
            if (!button.contains(event.target) && !drawer.contains(event.target)) {
                drawer.classList.add('hidden');
            }
        });
    });

