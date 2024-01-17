<div class="header-middle mb-10"><!--header-middle-->
  <div class="container">
      <div class="flex-col sm:flex-row justify-center items-center mt-8 mb-10">
          <div class="col-sm-4">
            <a href="{{ route('index') }}">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
              </svg>
            </a>
          </div>
          <div class="col-sm-8 flex justify-between items-center">
            <form action="{{ route('index') }}" class="pb-3 pr-2 w-3/4 flex items-center border-b border-b-slate-300 text-slate-300 focus-within:border-b-slate-900 focus-within:text-slate-900 transition">
              <input id="search" value="{{ request()->search }}" class="px-2 w-full outline-none leading-none placeholder-slate-400" type="search" name="search" placeholder="Rechercher un article">
              <button>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                      <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                  </svg>
              </button>
            </form>
            <nav x-data="{ open: false }" x-cloak class="relative">
              <button
                  @click="open = !open"
                  @click.outside="if (open) open = false"
                  @class([
                      'w-14 h-14 flex rounded-full bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2',
                      'md:hidden' => Auth::guest(),
                  ])
              >
                  @auth
                  <img class="h-14 w-14 rounded-full text-sm " src="{{ asset('images/blog/man-one.jpg') }}" alt="Image de profil">
                  @else
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                  </svg>
                  @endauth
              </button>
              <ul
                  x-show="open"
                  x-transition:enter="transition ease-out duration-200"
                  x-transition:enter-start="transform opacity-0 scale-95"
                  x-transition:enter-end="transform opacity-100 scale-100"
                  x-transition:leave="transition ease-in duration-75"
                  x-transition:leave-start="transform opacity-100 scale-100"
                  x-transition:leave-end="transform opacity-0 scale-95"
                  @class([
                      'absolute right-0 z-10 mt-2 w-80  origin-top-right rounded-md bg-white  py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none',
                      'md:hidden' => Auth::guest(),
                  ])
                  tabindex="-1"
              >
                  @auth
                  <li><a href="{{ route('home') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mon compte</a></li>
                  @if (Auth::user()->isAdmin())
                  <li><a href="{{ route('admin.products.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Gestion des posts</a></li>
                  @endif
                  <li><a href="{{ route('logout') }}" @click.prevent="$refs.logout.submit()" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Déconnexion</a></li>
                  <form x-ref="logout" action="{{ route('logout') }}" method="POST" class="hidden">
                      @csrf
                  </form>
                  @else
                  <li><a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Connexion</a></li>
                  <li>
                      <a href="{{ route('register') }}" class="flex items-center px-4 py-2 font-semibold text-sm text-indigo-700 hover:bg-gray-100">
                          Inscription
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 ml-1">
                              <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                          </svg>
                      </a>
                  </li>
                  @endauth
              </ul>
              @guest
              <ul class="hidden md:flex space-x-12 font-semibold">
                  <li><a href="{{ route('login') }}">Connexion</a></li>
                  <li>
                      <a href="{{ route('register') }}" class="flex items-center group text-indigo-700">
                          Inscription
                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-1 group-hover:ml-2 group-hover:mr-0 transition-all">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                          </svg>
                      </a>
                  </li>
              </ul>
              @endguest
            </nav>
          </div>
      </div>
  </div>
</div><!--/header-middle-->