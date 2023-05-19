<link rel="stylesheet" href="css/dashboard.css">
<x-app-layout>
    <div class="py-12" style="background-color: #8ec5fc; background-image: linear-gradient(62deg, #fcc7c3 0%,#8ec5fc 100% );">
        <div class="card">
            <div class="data">
                <div class="title">Informasi Data :</div>
                <div class="content">
                    <p>Nama : {{ Auth::user()->name}}</p>
                    <p>Email : {{ Auth::user()->email}}</p>
                    <p>No. Hp : {{ Auth::user()->no_hp}}</p>
                    <p>Total Tiket : {{ Auth::user()->total_tiket}}</p>
                </div>
            </div>
            <div class="penukaran">
                <a href="/penukaran">Penukaran</a>
            </div>
        </div>
    
        <div class="image">
            <img src="img/user.png">
        </div>
        
        <footer>
            <p> &copy; Made by Khairul Auni, Wilda Fahera, 
                Al Hilal Habib, Muhammad Kemal Fasya, and Abdul Helmi</p>
        </footer>
    </div>
</x-app-layout>
