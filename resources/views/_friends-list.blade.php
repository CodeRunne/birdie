<h3 class="font-bold text-xl mb-2">Friends</h3>

<ul class="px-0">
	@foreach(range(1, 8) as $index)
		<li class="flex items-center mb-4">
			<img src="/images/img (1).jpg" alt="" class="rounded-full w-[40px] h-[40px] object-cover mr-2">
			John Doe
		</li>
	@endforeach
</ul>