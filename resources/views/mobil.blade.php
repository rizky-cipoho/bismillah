<x-layout>
	<x-slot:title>
		Mobil
	</x-slot>
	<div class="py-32 px-32">
		<p class="text-2xl">Mobil</p>
		<div class="flex grid grid-cols-4 gap-3">
			{{-- @dd($mobils) --}}
			@foreach($mobils as $index=>$mobil)
			<div class="p-3 border">
				<img src="{{$mobil->image}}">
				<div>
					<p>{{$mobil->merek}}</p>
					<p>{{$mobil->model}}</p>
					<p id="m">Rp. {{$mobil->price}}</p>
					<br>
					<a href="mobil/{{$mobil->id}}" class="rounded bg-green-500 px-2 py-1">Sewa</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<script type="text/javascript">
		const rupiah = (number)=>{
			return new Intl.NumberFormat("id-ID", {
				style: "currency",
				currency: "IDR"
			}).format(number);
		}
	</script>
</x-layout>