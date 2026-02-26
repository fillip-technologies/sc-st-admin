<nav class="mt-6 flex-1 overflow-y-auto bg-white p-2">


    <div class="px-4 mb-4 mt-4">
        <p class="text-xs uppercase text-gray-500 font-bold tracking-wider">
            Navigation
        </p>
    </div>


    <a href="{{ url('/admin/dashboard') }}"
        class="flex items-center px-6 py-3 mb-3 mt-5 rounded-xl shadow-md
              bg-white text-black backdrop-blur-xl border border-[#7B2FF7]
              hover:bg-[#133860]
              hover:text-white hover:border-white hover:scale-[1.03]
              transition-all duration-300 group">

        <i class="fas fa-tachometer-alt mr-4
                  text-black group-hover:text-white transition"></i>
        Dashboard
    </a>

    @if (Auth::user()->role === 'super_admin')
        <a href="{{ route('index') }}"
            class="flex items-center px-6 py-3 mb-3 mt-4 rounded-xl shadow-md
              bg-white text-black backdrop-blur-xl border border-[#7B2FF7]
              hover:bg-[#133860]
              hover:text-white hover:border-white hover:scale-[1.03]
              transition-all duration-300 group">

            <i class="fa fa-user mr-4
                  text-black group-hover:text-white transition"></i>
            Users
        </a>

        <a href="{{ route('student') }}"
            class="flex items-center px-6 py-3 mb-3 mt-4 rounded-xl shadow-md
              bg-white text-black backdrop-blur-xl border border-[#7B2FF7]
              hover:bg-[#133860]
              hover:text-white hover:border-white hover:scale-[1.03]
              transition-all duration-300 group">

            <i class="fa fa-users mr-4
                  text-black group-hover:text-white transition"></i>
            Students
        </a>


        <a href="{{ route('school') }}"
            class="flex items-center px-6 py-3 mb-3 mt-4 rounded-xl shadow-md
              bg-white text-black backdrop-blur-xl border border-[#7B2FF7]
              hover:bg-[#133860]
              hover:text-white hover:border-white hover:scale-[1.03]
              transition-all duration-300 group">

            <i class="fa-solid fa-school mr-4
                  text-black group-hover:text-white transition"></i>
            Schools
        </a>
        <a href="{{ route('hotel') }}"
            class="flex items-center px-6 py-3 mb-3 mt-4 rounded-xl shadow-md
              bg-white text-black backdrop-blur-xl border border-[#7B2FF7]
              hover:bg-[#133860]
              hover:text-white hover:border-white hover:scale-[1.03]
              transition-all duration-300 group">

            <i class="fa-solid fa-hotel mr-4
                  text-black group-hover:text-white transition"></i>
            Hostels
        </a>

        <a href="{{ route('library') }}"
            class="flex items-center px-6 py-3 mb-3  mt-4 rounded-xl shadow-md
              bg-white text-black backdrop-blur-xl border border-[#7B2FF7]
              hover:bg-[#133860]
              hover:text-white hover:border-white hover:scale-[1.03]
              transition-all duration-300 group">

            <i class="fa-solid fa-book mr-4 text-black group-hover:text-white transition"></i>
            Library
        </a>
        <a href="{{ route('notice') }}"
            class="flex items-center px-6 py-3 mb-3  mt-4 rounded-xl shadow-md
              bg-white text-black backdrop-blur-xl border border-[#7B2FF7]
              hover:bg-[#133860]
              hover:text-white hover:border-white hover:scale-[1.03]
              transition-all duration-300 group">

            <i class="fa-solid fa-sign-hanging mr-4 text-black group-hover:text-white transition"></i>
            Notice Board
        </a>
    @elseif (Auth::user()->role === 'admin')
        <a href="{{ route('admin.index') }}"
            class="flex items-center px-6 py-3 mb-3 mt-4 rounded-xl shadow-md
              bg-white text-black backdrop-blur-xl border border-[#7B2FF7]
              hover:bg-[#133860]
              hover:text-white hover:border-white hover:scale-[1.03]
              transition-all duration-300 group">

            <i class="fa fa-user mr-4
                  text-black group-hover:text-white transition"></i>
            Users
        </a>
    @endif

</nav>
