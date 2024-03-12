<x-layout>
	<x-slot:title>
		Mobil
	</x-slot>
	<div class="py-32 px-32">
		<p class="text-2xl">Riwayat Peminjaman Pinjam</p>
		<br>

		<div class="relative overflow-x-auto">
			<div class="flex justify-end">
				<form action="pinjaman" method="post" class="flex justify-end w-full" id="formdelete">
					@csrf
					@method('DELETE')
					<input id="platdelete" type="" name="platdelete" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-2/12 mr-2" placeholder="Masukkan Plat nomor" onchange="changeval()">
					<button class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">kembalikan</button>
				</form>
			</div>
			<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
				<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
					<tr>
						<th scope="col" class="px-6 py-3">
							No.
						</th>
						<th scope="col" class="px-6 py-3">
							Model
						</th>
						<th scope="col" class="px-6 py-3">
							Merek
						</th>
						<th scope="col" class="px-6 py-3">
							Plat Nomor
						</th>
						<th scope="col" class="px-6 py-3">
							Harga Perhari
						</th>
						<th scope="col" class="px-6 py-3">
							Mulai Meminjam
						</th>
						<th scope="col" class="px-6 py-3">
							Durasi
						</th>
						<th scope="col" class="px-6 py-3">
							Total
						</th>
						<th scope="col" class="px-6 py-3">
							Status
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pinjaman as $index=>$mobil)
					<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
						<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
							{{ $index+1 }}
						</th>
						<td class="px-6 py-4">
							{{ $mobil->mobil->model }}
						</td>
						<td class="px-6 py-4">
							{{ $mobil->mobil->merek }}
						</td>
						<td class="px-6 py-4">
							{{ $mobil->mobil->platno }}
						</td>
						<td class="px-6 py-4">
							{{ $mobil->mobil->price }}
						</td>
						<td class="px-6 py-4">
							{{ $mobil->start }}
						</td>
						<td class="px-6 py-4">
							{{ $mobil->durasi }} hari
						</td>
						<td class="px-6 py-4">
							{{ $mobil->mobil->price*$mobil->durasi }} 
						</td>
						<td class="px-6 py-4">
							{{ $mobil->status }}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>

	</div>
	<script type="text/javascript">
		const rupiah = (number)=>{
			return new Intl.NumberFormat("id-ID", {
				style: "currency",
				currency: "IDR"
			}).format(number);
		}
		function changeval(){
			let plat = document.getElementById('platdelete').value;
			document.getElementById('formdelete').action = `pinjaman/${plat}`
			console.log(document.getElementById('formdelete').action);
		}
	</script>
</x-layout>