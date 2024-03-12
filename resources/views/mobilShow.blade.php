<x-layout>
	<x-slot:title>
		Mobil
	</x-slot>
	<div class="py-32 px-32">
		<p class="text-2xl">Mobil</p>
		<div class="flex grid grid-cols-2 gap-3">


			<img src="{{$mobil->image}}">
			<div>

				<p>Model: {{$mobil->merek}}</p>
				<p>Merek: {{$mobil->model}}</p>
				<p id="">Harga: Rp. {{$mobil->price}}/Hari</p>
				<p id="">Plat No: {{$mobil->platno}}</p>
				<p id="">Pemilik: {{$mobil->user->name}}</p>
				<p id="">Nomor Pemilik: {{$mobil->user->telp}}</p>
				<br>
				<form action="/pinjaman" method="post">
					@csrf
					<div class="flex gap-3">
						<p>Mulai Pinjam: </p>
						<input type="date" name="start" id="tanggal" required>
						<input type="" name="mobil_id" value="{{$mobil->id}}" class="hidden">
						<input type="" name="durasi" id="real_count" value="1" class="hidden">
					</div>
					<div class="flex gap-3">
						<p>Sewa: </p>
						<div class="flex">
							<p id="count">1 </p>
							<p>Hari</p>
						</div>
						<button type="button" class="px-3 rounded bg-green-500" onclick="plus()">+</button>
						<button  type="button" class="px-3 rounded bg-green-500" onclick="minus()">-</button>
					</div>
					<br>
					<button class="rounded bg-green-500 px-2 py-1">Sewa</button>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		let count = 1;
		function plus(){
			count = count+1
			document.getElementById('count').innerHTML = count
			document.getElementById('real_count').value = count
			
		}
		function minus(){
			if(count>1){
				count = count-1
				document.getElementById('count').innerHTML = count
				document.getElementById('real_count').value = count
			}
		}
		document.getElementById('tanggal').setAttribute('min', new Date().toISOString().split('T')[0]);
	</script>
</x-layout>