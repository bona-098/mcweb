<x-app-layout> 
<section id="mc-formjanji" class="section">
    <form method="POST" action="{{route('psikolog.create')}}">
        @csrf
        
    <h2 class="is-size-3 is-fwindsor mt-4">Buat Janji</h2>
        <p class="is-size-6 has-text-grey">Harap mengisi Form untuk membuat janji</p>
        <br>

        <h2 class="is-size-4 is-fwindsor mt-4 t">Info Psikolog</h2>
        <br>
        <div class="columns">
            <div class="column test">
                <img src="{{asset('img')}}/james.jpg" alt="Foto Profil">
                <div>
                    <p class="is-size-6 has-text-grey ml-3">Nama :</p>
                    <h4 class="is-size-4 is-fwindsor ml-5">{{$psikolog->nama_psikolog}}</h4>
                    <p class="is-size-6 has-text-grey mt-2 ml-3">Alamat :</p>
                    <h4 class="is-size-5 is-fwindsormt-1 ml-5">{{$psikolog->alamat}}</h4>
                    <p class="is-size-6 has-text-grey mt-2 ml-3">kategori :</p>
                    <h4 class="is-size-5 is-fwindsor mt-1 ml-5">{{$psikolog->kategori}}</h4>
                </div>
            </div>
        </div>
        <p class="is-size-5 ml-3">Jadwal Praktik </p>
        <div class="columns">
            <div class="column">
                <p class="is-size-6 has-text-grey mt-2 ml-3">Jumat, 16 April 2021 : </p>
                <li class="is-size-6 mt-1 ml-5">10.00-10.30</li>
                <li class="is-size-6 mt-1 ml-5">10.30-11.00</li>
                <li class="is-size-6 mt-1 ml-5">13.30-14.00</li>
                <li class="is-size-6 mt-1 ml-5">14.30-15.00</li>
                <li class="is-size-6 mt-1 ml-5">16.00-16.30</li>
            </div>
            <div class="column">
                <p class="is-size-6 has-text-grey mt-2 ml-3">Sabtu, 17 April 2021 : </p>
                <li class="is-size-6 mt-1 ml-5">10.00-10.30</li>
                <li class="is-size-6 mt-1 ml-5">10.30-11.00</li>
                <li class="is-size-6 mt-1 ml-5">13.00-13.30</li>
                <li class="is-size-6 mt-1 ml-5">13.30-14.00</li>
            </div>
            <div class="column">
                <p class="is-size-6 has-text-grey mt-2 ml-3">Senin, 18 April 2021 : </p>
                <li class="is-size-6 mt-1 ml-5">10.30-11.00</li>
                <li class="is-size-6 mt-1 ml-5">13.30-14.00</li>
                <li class="is-size-6 mt-1 ml-5">14.30-15.00</li>
                <li class="is-size-6 mt-1 ml-5">16.00-16.30</li>
            </div>
            <div class="column">
                <p class="is-size-6 has-text-grey mt-2 ml-3">Selasa, 19 April 2021 : </p>
                <li class="is-size-6 mt-1 ml-5">13.00-13.30</li>
                <li class="is-size-6 mt-1 ml-5">13.30-14.00</li>
                <li class="is-size-6 mt-1 ml-5">14.30-15.00</li>
                <li class="is-size-6 mt-1 ml-5">16.00-16.30</li>
            </div>
          </div>
        


        <h2 class="is-size-4 mt-4 pisah">test</h2>
        <br>

            <div class="field mb-5">
                <label class="is-size-5">Pilih Jadwal</label>
                <div class="control mt-2">
                    <div name="jadwal" class="select is-fullwidth is-medium">
                      <select>
                        <option selected disabled>Pilih Waktu</option>
                        <option>Senin, 10.00-11.30</option>
                        <option>Senin, 11.30-12.00</option>
                        <option>Selasa, 13.30-14.00</option>
                        <option>Rabu, 14.30-15.00</option>
                        <option>Rabu, 16.00-16.30</option>
                      </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <p class="control">
                    <button type="submit" class="button is-dark is-medium is-fullwidth">Buat Janji</button>
                </p>
            </div>
        </form>
</section>
</x-app-layout>