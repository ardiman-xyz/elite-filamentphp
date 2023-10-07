<section class="mt-10">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[510px] text-center">
              <span class="mb-2 block text-lg font-semibold text-primary">
                Kelas
              </span>
                    <h2
                        class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]"
                    >
                        Kelas Terbaru Kami
                    </h2>
                    <p class="text-base text-body-color">
                        Jelajahi berbagai peluang pendidikan yang beragam, disesuaikan untuk memenuhi tujuan belajar Anda dan meningkatkan keterampilan Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="-mx-4 flex flex-wrap">
        @foreach($classes as $class)
            <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                <div class="relative mb-12">
                    <div class="overflow-hidden rounded-lg">
                        <img
                            src="{{ asset('storage/'. $class->cover) }}"
                            alt="portfolio"
                            class="w-full"
                        />
                    </div>
                    <div
                        class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
                    >
                <span class="mb-2 block text-sm font-semibold text-primary">
                  private kelas
                </span>
                        <h3 class="mb-4 text-xl font-bold text-dark">
                            {{ $class->title }}
                        </h3>
                        <a
                            wire:navigate
                            href="{{ route('class.detail', $class->id) }}"
                            class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-body-color transition hover:border-primary hover:bg-primary hover:text-white"
                        >
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</section>
