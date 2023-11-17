<!-- resources/views/product/index.blade.php -->

@extends('layouts.app')

@section('content')


    <body class="bg-white">
        <!-- Header Navbar -->
        <nav class="fixed top-0 left-0 z-20 w-full border-b border-gray-200 bg-white py-2.5 px-6 sm:px-4">
            <div class="container mx-auto flex max-w-6xl flex-wrap items-center justify-between">
                <a href="#" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="mr-3 h-6 text-blue-500 sm:h-9">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                    </svg>

                    <span class="self-center whitespace-nowrap text-xl font-semibold">SWITCHER</span>
                </a>
                <div class="mt-2 sm:mt-0 sm:flex md:order-2"></div>
                <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto" id="navbar-sticky">
                    <ul
                        class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:text-sm md:font-medium">
                        <li>
                            <a href="#"
                                class="block rounded bg-blue-700 py-2 pl-3 pr-4 text-white md:bg-transparent md:p-0 md:text-blue-700"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block rounded py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">Categories</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block rounded py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">Products</a>
                        </li>
                        {{-- <li>
            <a href="#" class="block rounded py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">Contact</a>
          </li> --}}
                    </ul>
                </div>
            </div>
        </nav>


        <!-- Title -->
        <div class="pt-32  bg-white">
            <h1 class="text-center text-2xl font-bold text-gray-800">All Products</h1>
        </div>

        <!-- Tab Menu -->


        <!-- Product List -->
        <section class="py-10 bg-gray-100">

            <div class="mx-auto grid max-w-6xl  grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($products as $product)
                <article
                    class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                    <a href="#">
                        <div class="relative flex items-end overflow-hidden rounded-xl">
                            <img src="https://images.unsplash.com/photo-1515955656352-a1fa3ffcd111?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                alt="Hotel Photo" />
                            <div
                                class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>

                                <button class="text-sm"></button>
                            </div>
                        </div>

                        <div class="mt-1 p-2">
                            <h2 class="text-slate-700">
                                <a href="{{ route('products.show', $product->slug) }}">
                                {{ $product->name }}
                                </a>
                            </h2>
                            <p class="mt-1 text-sm text-slate-400">
                                <a href="{{ route('products.show', $product->slug) }}">
                                {{ $product->description }}
                                </a></p>

                            <div class="mt-3 flex items-end justify-between">
                                <p class="text-lg font-bold text-blue-500">
                                    <a href="{{ route('products.show', $product->slug) }}">
                                    {{ $product->price }}€
                                    </a></p>

                                <div
                                    class="flex items-center space-x-1.5 rounded-lg bg-blue-500  py-1.5 text-white duration-100 hover:bg-blue-600">
                                    <button class="text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                </article>
                </a>

                @endforeach
        </section>

        <!-- Footer -->
        <footer class="py-6  bg-gray-200 text-gray-900">
            <div class="container px-6 mx-auto space-y-6 divide-y divide-gray-400 md:space-y-12 divide-opacity-50">
                <div class="grid justify-center  lg:justify-between">
                    <div class="flex flex-col self-center text-sm text-center md:block lg:col-start-1 md:space-x-6">

                    </div>
                    <div class="flex justify-center pt-4 space-x-4 lg:pt-0 lg:col-end-13">
                        <a rel="noopener noreferrer" href="#" title="Email"
                            class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-500 hover:bg-blue-600 duration-150 text-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-5 h-5">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="#" title="Linkedin"
                            class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-500 hover:bg-blue-600 duration-150 text-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <path fill="#0078d4" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5	V37z"></path><path d="M30,37V26.901c0-1.689-0.819-2.698-2.192-2.698c-0.815,0-1.414,0.459-1.779,1.364	c-0.017,0.064-0.041,0.325-0.031,1.114L26,37h-7V18h7v1.061C27.022,18.356,28.275,18,29.738,18c4.547,0,7.261,3.093,7.261,8.274	L37,37H30z M11,37V18h3.457C12.454,18,11,16.528,11,14.499C11,12.472,12.478,11,14.514,11c2.012,0,3.445,1.431,3.486,3.479	C18,16.523,16.521,18,14.485,18H18v19H11z" opacity=".05"></path><path d="M30.5,36.5v-9.599c0-1.973-1.031-3.198-2.692-3.198c-1.295,0-1.935,0.912-2.243,1.677	c-0.082,0.199-0.071,0.989-0.067,1.326L25.5,36.5h-6v-18h6v1.638c0.795-0.823,2.075-1.638,4.238-1.638	c4.233,0,6.761,2.906,6.761,7.774L36.5,36.5H30.5z M11.5,36.5v-18h6v18H11.5z M14.457,17.5c-1.713,0-2.957-1.262-2.957-3.001	c0-1.738,1.268-2.999,3.014-2.999c1.724,0,2.951,1.229,2.986,2.989c0,1.749-1.268,3.011-3.015,3.011H14.457z" opacity=".07"></path><path fill="#fff" d="M12,19h5v17h-5V19z M14.485,17h-0.028C12.965,17,12,15.888,12,14.499C12,13.08,12.995,12,14.514,12	c1.521,0,2.458,1.08,2.486,2.499C17,15.887,16.035,17,14.485,17z M36,36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698	c-1.501,0-2.313,1.012-2.707,1.99C24.957,25.543,25,26.511,25,27v9h-5V19h5v2.616C25.721,20.5,26.85,19,29.738,19	c3.578,0,6.261,2.25,6.261,7.274L36,36L36,36z"></path>
                                </svg>
                        </a>
                        <a rel="noopener noreferrer" href="#" title="GitHub"
                            class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-500 hover:bg-blue-600 duration-150 text-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                class="w-5 h-5">
                                <path
                                    d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>


    </body>
@endsection
