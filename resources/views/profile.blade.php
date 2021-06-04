<x-app-layout>    

    <x-slot name="title">
        Booking
    </x-slot>


    <x-slot name="header">
    </x-slot>
{{-- {{dd($user)}} --}}
	<section id="mc-profile" class="section">
		<div class="container">
			<div class="has-text-centered">
				<h3 class="is-size-3 is-uppercase has-text-dark title">Account info</h3>
			</div>
			<br>
			<div class="columns is-centered is-multiline">
				<div class="column is-3">
					<figure>
						<img src="{{asset('/img/avatar/'.$user->foto_profile)}}" alt="" style="border-radius: 20px; height: 300px; object-fit: cover; width: 100%">
					</figure>
				</div>
				<div class="column is-4">
					<span>
						<p class="title is-semibolded is-size-6 has-text-grey">Nama</p>
						<p class="subtitle is-size-5">{{$user->name}}</p>
					</span>
					<br>
					<span>
						<p class="title is-semibolded is-size-6 has-text-grey">Tempat Tanggal Lahir</p>
						<p class="subtitle is-size-5">{{$user->tempat_lahir}}, {{$user->tgl_lahir}}</p>
					</span>
					<br>
					<span>
						<p class="title is-semibolded is-size-6 has-text-grey">Jenis Kelamin</p>
						<p class="subtitle is-size-5">{{$user->jenis_kelamin}}</p>
					</span>
				</div>
				<div class="column is-4">
					<span>
						<p class="title is-semibolded is-size-6 has-text-grey">Email</p>
						<p class="subtitle is-size-5">{{$user->email}}</p>
					</span>
					<br>
					<span>
						<p class="title is-semibolded is-size-6 has-text-grey">Nomor Telpon</p>
						<p class="subtitle is-size-5">{{$user->no_telp}}</p>
					</span>
					<br>
					<span>
						<p class="title is-semibolded is-size-6 has-text-grey">Status/Pekerjaan</p>
						<p class="subtitle is-size-5">{{$user->status}}</p>
					</span>
					<br>
					<div class="has-text-left">
						<a href="{{route('editpro.edit',Auth::user()->id)}}" class="button">Ubah Profile</a>
						<a href="editpasw" class="button">Ubah Kata Sandi</a>
					</div>
				</div>
			</div>
			<br>
			<div class="columns is-centered is-multiline" id="my-courses">
				<div class="column is-9">
					<h3 class="is-size-3 is-uppercase has-text-dark title">Riwayat Janji</h3>
				</div>
				<div class="column is-8" style="border: 1px solid lightgrey; border-radius: 3px; margin-bottom: 15px;">
					<div class="columns">
						<div class="column">
							<a href="subjects-detail.php" class="is-semibolded is-size-4">Dr. Agung Hendrawan</a>
						</div>
						<div class="column is-3 has-text-centered">
							<p class="has-background-warning">Proses Pembayaran</p>
						</div>
					</div>
				</div>
				<div class="column is-8" style="border: 1px solid lightgrey; border-radius: 3px; margin-bottom: 15px;">
					<div class="columns">
						<div class="column">
							<a href="subjects-detail.php" class="is-semibolded is-size-4">Dr. Indah Kusuma</a>
						</div>
						<div class="column is-3 has-text-centered">
							<p class="has-background-primary has-text-light">Terverifikasi</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</x-app-layout>