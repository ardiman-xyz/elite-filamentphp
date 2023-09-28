<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=albert-sans:200,300,400,500,600" rel="stylesheet" />
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-albert">


    <header
        x-data="
        {
          navbarOpen: false
        }
      "
        class="flex w-full items-center bg-white"
    >
        <div class="container mx-auto">
            <div class="relative -mx-4 flex items-center justify-between">
                <div class="w-60 max-w-full px-4">
                    <a href="javascript:void(0)" class="block w-full py-5">
                        <img
                            src="assets/images/logo/logo.svg"
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
                                        href="javascript:void(0)"
                                        class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex"
                                    >
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="javascript:void(0)"
                                        class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex"
                                    >
                                        Payment
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="javascript:void(0)"
                                        class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex"
                                    >
                                        Features
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


    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-20">
              <span class="mb-2 block text-lg font-semibold text-primary">
                Our Blogs
              </span>
                        <h2
                            class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]"
                        >
                            Our Recent News
                        </h2>
                        <p class="text-base text-body-color">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>

            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto mb-10 max-w-[370px]">
                        <div class="mb-8 overflow-hidden rounded">
                            <img
                                src="assets/images/blogs/blog-01/image-01.jpg"
                                alt="image"
                                class="w-full"
                            />
                        </div>
                        <div>
                <span
                    class="mb-5 inline-block rounded bg-primary py-1 px-4 text-center text-xs font-semibold leading-loose text-white"
                >
                  Dec 22, 2023
                </span>
                            <h3>
                                <a
                                    href="javascript:void(0)"
                                    class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                                >
                                    Meet AutoManage, the best AI management tools
                                </a>
                            </h3>
                            <p class="text-base text-body-color">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto mb-10 max-w-[370px]">
                        <div class="mb-8 overflow-hidden rounded">
                            <img
                                src="assets/images/blogs/blog-01/image-02.jpg"
                                alt="image"
                                class="w-full"
                            />
                        </div>
                        <div>
                <span
                    class="mb-5 inline-block rounded bg-primary py-1 px-4 text-center text-xs font-semibold leading-loose text-white"
                >
                  Mar 15, 2023
                </span>
                            <h3>
                                <a
                                    href="javascript:void(0)"
                                    class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                                >
                                    How to earn more money as a wellness coach
                                </a>
                            </h3>
                            <p class="text-base text-body-color">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto mb-10 max-w-[370px]">
                        <div class="mb-8 overflow-hidden rounded">
                            <img
                                src="assets/images/blogs/blog-01/image-03.jpg"
                                alt="image"
                                class="w-full"
                            />
                        </div>
                        <div>
                <span
                    class="mb-5 inline-block rounded bg-primary py-1 px-4 text-center text-xs font-semibold leading-loose text-white"
                >
                  Jan 05, 2023
                </span>
                            <h3>
                                <a
                                    href="javascript:void(0)"
                                    class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                                >
                                    The no-fuss guide to upselling and cross selling
                                </a>
                            </h3>
                            <p class="text-base text-body-color">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </body>
</html>
