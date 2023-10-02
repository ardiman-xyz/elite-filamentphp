<header
    x-data="
            {
              navbarOpen: false
            }
          "
    class="flex w-full items-center bg-white shadow fixed z-50"
>
    <div class="container mx-auto">
        <div class="relative -mx-4 flex items-center justify-between">
            <div class="w-60 max-w-full px-4">
                <a href="{{ route('home') }}" class="block w-full py-5">
                    <img
                        src="{{ asset('images/logo.svg') }}"
                        alt="logo"
                        class="w-full"
                    />
                </a>
            </div>
            <div class="flex w-full items-center justify-between px-4">
                <div>
                    <button
                        @click="navbarOpen = !navbarOpen"
                        :class="navbarOpen && 'navbarTogglerActive' "
                        id="navbarToggler"
                        class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
                    >
                    <span
                        class="relative my-[6px] block h-[2px] w-[30px] bg-primary"
                    ></span>
                        <span
                            class="relative my-[6px] block h-[2px] w-[30px] bg-primary"
                        ></span>
                        <span
                            class="relative my-[6px] block h-[2px] w-[30px] bg-primary"
                        ></span>
                    </button>
                    <nav
                        :class="!navbarOpen && 'hidden' "
                        id="navbarCollapse"
                        class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none"
                    >
                        <ul class="block lg:flex">
                            <li>
                                <a
                                    href="{{ route('home') }}"
                                    class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex"
                                >
                                    Beranda
                                </a>
                            </li>
                            <li>
                                <a
                                    wire:navigate
                                    href="{{ route('classes.index') }}"
                                    class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex"
                                >
                                    Kelas
                                </a>
                            </li>
                            <li>
                                <a
                                    wire:navigate
                                    href="{{ route('team.index') }}"
                                    class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex"
                                >
                                    Tim
                                </a>
                            </li>
                            <li>
                                <a
                                    href="javascript:void(0)"
                                    class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex"
                                >
                                    Testimoni
                                </a>
                            </li>
                            <li>
                                <a
                                    wire:navigate
                                    href="/contact"
                                    class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex"
                                >
                                    Kontak
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
                    <a
                        href="javascript:void(0)"
                        class="py-3 px-7 text-base font-medium text-dark hover:text-primary"
                    >
                        Login
                    </a>
                    <a
                        href="javascript:void(0)"
                        class="rounded-lg bg-primary py-3 px-7 text-base font-medium text-white hover:bg-opacity-90"
                    >
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
