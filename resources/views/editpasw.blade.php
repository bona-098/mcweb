<x-app-layout>    

    <x-slot name="title">
        Booking
    </x-slot>

  <section id="mc-editdata" class="section">
    <div class="container">
      <div class="columns is-centered is-multiline">
        <div class="column is-9">
          <h4 class="is-size-4 is-uppercase has-text-dark title">Ubah Kata Sandi</h3>
        </div>
        <div class="column is-8">
          <form action="" method="POST">
            @csrf
            <div class="columns is-centered">
              <div class="column is-6">
                <div class="field">
                    <label>Kata Sandi Lama</label>
                      <div class="control is-expanded">
                        <input class="input" type="password" placeholder="Enter password" required name ='old_password'>
                      </div>
                  </div>
                  <div class="field">
                    <label>Kata Sandi Baru</label>
                      <div class="control is-expanded">
                        <input class="input" type="password" placeholder="Confirm" required name ='password'>
                      </div>
                  </div>
                  <div class="field">
                    <label>Ulangi Kata Sandi Baru</label>
                      <div class="control is-expanded">
                        <input class="input" type="password" placeholder="Confirm" required name="password_confirmation">
                      </div>
                  </div>
                <div class="field">
                  <p class="control has-text-right">
                    <button class="button is-light" onclick="window.history.back()">Kembali</button>
                    <button type="submit" class="button is-dark">Simpan Perubahan</button>
                  </p>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</x-app-layout>

