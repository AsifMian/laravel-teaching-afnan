
<script src="https://cdn.tailwindcss.com"></script>

@auth

    <div class="p-6 text-gray-900 dark:text-gray-100 ">
        Your are logged in as: <strong>{{ auth()->user()->name }}</strong> 
        <br>
        Your Phone: <strong>{{ Auth::user()->phone }}</strong>
    </div>

@else
    <div class="p-6 text-gray-900 dark:text-gray-100 ">
        <p>Your are guest user</p>
    </div>

    <div class="flex">
        <a class="w-24 h-14 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{route('login')}}"> Login
        </a>

        <a class="w-40 h-14 bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{route('register')}}">
            Register 
        </a>
    </div>
@endauth
