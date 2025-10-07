</main>

<footer>
    <div class="text-center">
        &copy; 2024 Masjid At-Taqwa | All Rights Reserved
    </div>
</footer>

<!-- Chart.js untuk Grafik -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('donasiChart').getContext('2d');
    var donasiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
            datasets: [{
                label: 'Donasi (Rp)',
                data: [500000, 750000, 600000, 900000, 1200000, 1100000],
                backgroundColor: 'rgba(54, 162, 235, 0.6)'
            }]
        },
        options: {
            responsive: true
        }
    });
</script>
</body>
</html>
