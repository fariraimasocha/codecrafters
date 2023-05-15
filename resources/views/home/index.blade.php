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

    <div class="w-full justify-center mx-auto px-32 tracking-normal ease-in-out duration-700 bg-black text-white mt-8">

        <div class="py-20">
            <div class="px-16 justify-center mx-auto tracking-normal ease-in-out duration-700">
                <h1 class="text-white text-7xl font-semibold mt-44">From research to presentation, we can help you every
                    step of the way.</h1>
            </div>

            <div class="space-y-64">
                <div
                    class="flex mt-32 justify-center mx-auto w-9/12 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                    <div class="flex space-x-10">
                        <h1 class="text-3xl font-semibold">01/</h1>
                        <div class="space-y-8">
                            <h1 class="text-3xl font-semibold">Web Design And Development</h1>
                            <p class="text-xl">Bring your project to the web with ease. We provide custom web platforms
                                tailored
                                to your project needs. Contact us today to get started.</p>
                            <p class="text-xl mt-24 font-semibold">Learn More</p>
                        </div>
                        <img src="{{ asset('images/web development.jpg') }}" alt="image" class="rounded-lg"
                            width="40%" height="40%">
                    </div>
                </div>
                <div
                    class="flex mt-32 justify-center mx-auto w-9/12 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                    <div class="flex space-x-10">

                        <img src="{{ asset('images/assignment.jpg') }}" alt="image" class="rounded-lg" width="40%"
                            height="40%">
                        <div class="space-y-8">
                            <h1 class="text-3xl font-semibold">Class Assignments</h1>
                            <p class="text-xl">Low on budget but high on quality? Our assignment services provide the
                                perfect balance. Contact us now to learn more</p>
                            <p class="text-xl mt-24 font-semibold">Learn More</p>
                        </div>
                        <h1 class="text-3xl font-semibold">02/</h1>
                    </div>
                </div>
                <div
                    class="flex mt-32 justify-center mx-auto w-9/12 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                    <div class="flex space-x-10">
                        <h1 class="text-3xl font-semibold">03/</h1>
                        <div class="space-y-8">
                            <h1 class="text-3xl font-semibold">Tutoring</h1>
                            <p class="text-xl">We offer personalized tutoring services to help you succeed in your
                                studies. Our experienced tutors provide one-on-one support in a variety of courses,
                                helping you build the skills and confidence you need to excel.</p>
                            <p class="text-xl mt-24 font-semibold">Learn More</p>
                        </div>
                        <img src="{{ asset('images/tutor.jpg') }}" alt="image" class="rounded-lg" width="40%"
                            height="40%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full justify-center mx-auto px-32 tracking-normal ease-in-out duration-700 bg-white text-black mt-8">
        <h1 class=" text-7xl font-semibold py-32">Latest Projects</h1>
        <div class="py-12">
            <div
                class="flex mt-20 justify-center bg-white mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                <div class="flex space-x-10">
                    <img src="{{ asset('images/projects/codecrafters.png') }}" alt="image" width="50%"
                        height="25%">
                    <div class="space-y-8">
                        <h1 class="text-5xl ">CodeCrafters</h1>
                        <p class="text-xl">Bring your project to the web with ease. We provide custom web platforms
                            tailored
                            to your project needs. Contact us today to get started.</p>
                        <button class="text-black rounded-lg w-44 h-14 ring-2 ring-red-700 mt-14">
                            Explore Project
                        </button>
                    </div>
                </div>
            </div>
            <div
                class="flex mt-20 justify-center bg-white mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                <div class="flex space-x-10">
                    <img src="{{ asset('images/projects/it.png') }}" alt="image" width="50%" height="25%">
                    <div class="space-y-8">
                        <h1 class="text-5xl ">IT Helpdesk</h1>
                        <p class="text-xl">The platform automates ticket assignment, ensuring that each ticket is
                            assigned to the appropriate support staff based on their expertise or workload. This
                            eliminates manual routing and ensures that issues are promptly addressed by the most
                            suitable team member.</p>
                        <button class="text-black rounded-lg w-44 h-14 ring-2 ring-red-700 mt-14">
                            Explore Project
                        </button>
                    </div>
                </div>
            </div>
            <div
                class="flex mt-20 justify-center bg-white mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                <div class="flex space-x-10">
                    <img src="{{ asset('images/projects/musikacommerce.jpg') }}" alt="image" width="50%"
                        height="25%">
                    <div class="space-y-8">
                        <h1 class="text-5xl ">Musika Ecommerce</h1>
                        <p class="text-xl">Musika Ecommerce is a dynamic and innovative e-commerce website designed to
                            cater specifically to music enthusiasts. It provides a seamless online shopping experience
                            for music-related products, including instruments, accessories, sheet music, and audio
                            equipment.</p>
                        <button class="text-black rounded-lg w-44 h-14 ring-2 ring-red-700 mt-14">
                            Explore Project
                        </button>
                    </div>
                </div>
            </div>
            <div
                class="flex mt-20 justify-center bg-white mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                <div class="flex space-x-10">
                    <img src="{{ asset('images/projects/ptracker.png') }}" alt="image" width="50%" height="25%">
                    <div class="space-y-8">
                        <h1 class="text-5xl ">Tasktracker</h1>
                        <p class="text-xl">
                            TaskTracker is a powerful project management tool designed to streamline task tracking and
                            progress monitoring within a company. It provides a comprehensive and centralized platform
                            for teams to effectively collaborate, communicate, and stay organized.</p>
                        <button class="text-black rounded-lg w-44 h-14 ring-2 ring-red-700 mt-14">
                            Explore Project
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 bg-black">
        <h1 class="text-white text-7xl font-bold mt-44 py-5 px-24 mb-20">Do you require assistance with a school
            project?
            Allow us to relieve you of your burden.</h1>
        <img src="{{ asset('images/code.png') }}" class="py-20">

    </div>

    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between h-2/6">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/"
                class="hover:underline">CODECRAFTERS™</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">Crafts</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Projects</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact Me On:</a>
            </li>
        </ul>
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">fariraimasocha@gmail.com</span><span
            class="text-sm text-white sm:text-center">+263781840930</span>
        <img src="{{ asset('images/codecrafters logo.png') }}" alt="logo" width="38%" height="38%">
    </div>

</body>
