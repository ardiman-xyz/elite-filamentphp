<div>
    <div class="h-[150px] bg-primary">
        <div class="container mx-auto max-w-4xl pt-6">
            <h4 class="text-white">Private kelas</h4>
            <h1 class="text-3xl font-bold text-white">{{ $class->title }}</h1>
        </div>
    </div>
    <div class="container mx-auto max-w-4xl bg-white rounded -mt-10">
        <img src="{{ asset('storage/'. $class->cover) }}" alt="gambar" class="w-full">

        <div class="py-4 mt-7">
            <p>{!! $class->description !!}</p>
        </div>
    </div>
</div>
