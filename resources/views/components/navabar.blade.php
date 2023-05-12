@include('layouts.app')
<div class="px-10comp h-12 justify-center mx-auto mt-4 rounded-lg flex border-b-2">

    <div class="flex">
        <a href="#">
            <img src="{{ asset('images/codecrafters logo.png') }}" alt="logo" width="38%" height="38%">
        </a>

        <ul class="flex mb-8 mr-72 text-xl">
            <li class="text-black font-semibold py-2 px-4 h-10 justify-center mt-1">
                <a href="/">Home</a>
            </li>
            <li class="text-black font-semibold py-2 px-4 h-10 justify-center mt-1">
                <a href="#">Projects</a>
            </li>
            <li class="text-black font-semibold py-2 px-4 h-10 justify-center mt-1">
                <a href="#">Abouts</a>
            </li>
            <li class="text-black font-semibold py-2 px-4 h-10 justify-center mt-1">
                <a href="#">Contacts</a>
            </li>

        </ul>

        <a href="#">
            <button class="w-52 h-12 bg-red-600 text-white rounded-sm">
                Register As Tutor
            </button>
        </a>

    </div>

</div>
