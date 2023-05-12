<body class="bg-gray-950">
    @include('layouts.navbar')

    <div class="w-7/12 px-10 transition-all ease-in duration-700">

        <h1 class="text-white text-7xl font-semibold mt-44">Need help with a school project? Let us take the stress
            off your shoulders.</h1>
        <p class="text-white text-2xl mt-8">School projects can be overwhelming, but they don't have to be. Our
            experienced team is here to offer you the support you need to achieve academic success. Contact us today
            to get started.</p>

    </div>

    <div class="px-10 w-5/12 flex space-x-5 mt-14">

        <input type="text"
            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm
                focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
            placeholder="Enter Mobile Number">

        <button class="w-72 h-12 bg-red-600 text-white rounded-sm transition-colors duration-300 hover:bg-red-500">
            Olk Lets Go
        </button>
    </div>

    <div class="px-32 justify-center mx-auto tracking-normal ease-in-out duration-700 bg-black">
        <h1 class="text-white text-7xl font-semibold mt-44">From research to presentation, we can help you every
            step of the way.</h1>
    </div>

    <div class="w-full justify-center mx-auto px-32 tracking-normal ease-in-out duration-700 bg-black text-white mt-8">

        <div class="flex mt-32 justify-center mx-auto w-9/12">
            <div class="flex space-x-10">
                <h1 class="text-3xl font-semibold">01/</h1>
                <div class="space-y-8">
                    <h1 class="text-3xl font-semibold">Web Design And Development</h1>
                    <p class="text-xl">Bring your project to the web with ease. We provide custom web platforms tailored
                        to your project needs. Contact us today to get started.</p>
                    <p class="text-xl mt-24 font-semibold">Learn More</p>
                </div>
                <img src="{{ asset('images/web development.jpg') }}" alt="image" class="" width="40%"
                    height="40%">
            </div>

        </div>
        <div class="flex mt-32 justify-center mx-auto w-9/12">
            <div class="flex space-x-10">
                <h1 class="text-3xl font-semibold">01/</h1>
                <div class="space-y-8">
                    <h1 class="text-3xl font-semibold">Web Design And Development</h1>
                    <p class="text-xl">Bring your project to the web with ease. We provide custom web platforms tailored
                        to your project needs. Contact us today to get started.</p>
                    <p class="text-xl mt-24 font-semibold">Learn More</p>
                </div>
                <img src="{{ asset('images/web development.jpg') }}" alt="image" class="" width="40%"
                    height="40%">
            </div>

        </div>
    </div>

</body>
