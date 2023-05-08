<link rel="stylesheet" href="css/pulsa.css">
<x-app-layout>
    <div class="py-12" style="background-color: #8ec5fc; background-image: linear-gradient(62deg, #8ec5fc 0%, #fcc7c3 100%);">
        <div class="card">
            <div class="data">
                <div class="title">Pulsa</div>
                <div class="content">
                    <p>Apakah anda ingin menukarkan 3 tiket
                        dengan pulsa sebesar Rp. 30.000 ?
                    </p>
                </div>
            </div>
            <button id="noButton" class="noButton" type="button"><a href="/penukaran">No</a></button>
            <button id="yesButton" class="yesButton" type="button">Yes</button>
        </div>

        <script>
            var totalTiket = {{ Auth::user()->total_tiket }}; // Mengambil nilai total_tiket dari Laravel
        
            var yesButton = document.getElementById('yesButton');

            if (totalTiket >= 3) {
                yesButton.disabled = false;
                yesButton.addEventListener('click', function() {
                    alert('Sukses ditukar, mohon menunggu');
                    window.location.href = "dashboard";
                });
            } else {
                yesButton.disabled = true;
                yesButton.style.backgroundColor = "#ccc";
            }
        </script>
    
        <div class="image">
            <img src="img/pulsa.png">
        </div>
        
        <footer>
            <p> &copy; Made by Khairul Auni, Wilda Fahera, 
                Al Hilal Habib, Muhammad Kemal Fasya, and Abdul Helmi</p>
        </footer>
    </div>
</x-app-layout>