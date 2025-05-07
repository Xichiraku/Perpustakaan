<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'peminjaman')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

</head>
<body>
    @include('components.navbarsiswa')
    @yield('content')
      <!-- Tombol di pojok kanan bawah -->
      <button onclick="toggleStatus(this)"
      class="absolute bottom-3 right-3 px-3 py-1 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-semibold">
      Proses
  </button>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<script>
function toggleStatus(button) {
  const statuses = ["Dipinjam", "Dikembalikan", "Proses"];
  const current = button.textContent.trim();
  const nextIndex = (statuses.indexOf(current) + 1) % statuses.length;
  button.textContent = statuses[nextIndex];

  // Optional: Ubah warna tombol sesuai status
  const colors = {
      "Dipinjam": "bg-blue-500 hover:bg-blue-500",
      "Dikembalikan": "bg-green-500 hover:bg-green-600",
      "Proses": "bg-yellow-400 hover:bg-yellow-500"
  };

  // Reset kelas dan terapkan yang baru
  button.className = `absolute bottom-3 right-3 px-3 py-1 rounded-lg text-white text-xs font-semibold ${colors[statuses[nextIndex]]}`;
}
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const ratingContainers = document.querySelectorAll('.rating-stars');

  ratingContainers.forEach(container => {
      const stars = container.querySelectorAll('.star');
      let currentRating = parseInt(container.getAttribute('data-rating')) || 0;

      // Set initial rating
      updateStars(stars, currentRating);

      // Add click event
      stars.forEach(star => {
          star.addEventListener('click', function () {
              const value = parseInt(this.getAttribute('data-value'));
              currentRating = value;
              updateStars(stars, currentRating);

              // Here you can add code to save the rating
              console.log(`Rating diberikan: ${currentRating} bintang`);
          });
      });
  });

  function updateStars(stars, rating) {
      stars.forEach(star => {
          const value = parseInt(star.getAttribute('data-value'));
          if (value <= rating) {
              star.classList.remove('text-gray-300');
              star.classList.add('text-yellow-300');
          } else {
              star.classList.remove('text-yellow-300');
              star.classList.add('text-gray-300');
          }
      });
  }
});
</script>
</body>
</html>