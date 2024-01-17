@auth
  

  <li class="relative mb-2">
    <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" 
      href="{{ route('user.profile') }}"
    >
      <div class="flex py-1">
        <div class="my-auto">
          <img src="{{ asset('assets/img/team-2.jpg') }}" class="inline-flex items-center justify-center mr-4 text-sm text-white h-9 w-9 max-w-none rounded-xl" />
        </div>
        <div class="flex flex-col justify-center">
          <h6 class="mb-1 text-sm font-normal leading-normal"><span class="font-semibold">{{ Auth::user()->name }}</span></h6>
          <p class="mb-0 text-xs leading-tight text-slate-400">
            Paramètre de mon profile
          </p>
        </div>
      </div>
    </a>
  </li>

  <li class="relative mb-2">
    <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" href="{{ route('admin.products.index') }}">
      <div class="flex py-1">
        <div class="my-auto">
          <i class=" fa fa-lock inline-flex items-center justify-center mr-4 text-sm text-white bg-gradient-to-tl from-gray-900 to-slate-800 h-9 w-9 max-w-none rounded-xl"></i>
        </div>
        <div class="flex flex-col justify-center">
          <h6 class="mb-1 text-sm font-normal leading-normal"><span class="font-semibold">Gerer mes produits</span></h6>
          <p class="mb-0 text-xs leading-tight text-slate-400">
            Administration 
          </p>
        </div>
      </div>
    </a>
  </li>

  <li class="relative">
    <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" 
    href="{{ route('logout') }}"
    id="logout"
    >
      <div class="flex py-1">
        <div class="my-auto">
            <i class=" fa fa-sign-out inline-flex items-center justify-center mr-4 text-sm text-white bg-gradient-to-tl from-gray-900 to-slate-800 h-9 w-9 max-w-none rounded-xl"></i>
        </div>
        <div class="flex flex-col justify-center">
          <h6 class="mb-1 text-sm font-normal leading-normal">Se deconnecter</h6>
          <p class="mb-0 text-xs leading-tight text-slate-400">
            Revenir ver l'acceuil
          </p>
        </div>
      </div>
    </a>
    <form id="logout_form" action="{{ route('logout') }} " method="POST" class="hidden">
        @csrf
    </form>
  </li>
  @endauth