@include('layouts.app')
<div class="px-10 h-12 justify-center mx-auto flex border-b-2 border-black mt-4">
    <div class="flex">
        <a href="#">
            <img src="{{ asset('images/codecrafters logo.png') }}" alt="logo" width="38%" height="38%">
        </a>
        <ul class="flex mb-8 mr-72 text-xl text-white">
            <li class=" font-semibold py-2 px-4 h-10 justify-center mt-1 w-full">
                <a href="/">Crafts</a>
            </li>
            <li class=" font-semibold py-2 px-4 h-10 justify-center mt-1">
                <a href="#">Projects</a>
            </li>
            <li class=" font-semibold py-2 px-4 h-10 justify-center mt-1">
                <a href="#">Contact</a>
            </li>
        </ul>
        <a href="#">
            <button class="w-52 h-12 bg-red-600 text-white rounded-sm transition-colors duration-300 hover:bg-red-500">
                Register As Tutor
            </button>
        </a>
    </div>
</div>
