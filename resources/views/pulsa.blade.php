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

            <form action="{{ route('pulsa.store', Auth::user()->id) }}" method="post">
                @csrf
                @method('PUT')
                <button id="yesButton" class="yesButton" type="submit">Yes</button>
            </form>
        </div>
    
        <div class="image">
            <img src="img/pulsa.png">
        </div>
        
        <footer>
            <p> &copy; Made by Khairul Auni, Wilda Fahera, 
                Al Hilal Habib, Muhammad Kemal Fasya, and Abdul Helmi</p>
        </footer>
    </div>
</x-app-layout>