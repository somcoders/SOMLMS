  <header class="relative flex flex-col items-center bg-white px-4 py-4 shadow sm:flex-row md:h-20">
      <div
          class="flex w-full flex-col justify-between overflow-hidden transition-all sm:max-h-full sm:flex-row sm:items-center">
          <div class="relative ml-10 flex items-center justify-between rounded-md sm:ml-auto">
              <svg class="absolute left-2 block h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                  height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="11" cy="11" r="8" class=""></circle>
                  <line x1="21" y1="21" x2="16.65" y2="16.65" class="">
                  </line>
              </svg>
              <input type="name" name="search"
                  class="h-12 w-full rounded-md border border-gray-100 bg-gray-100 py-4 pr-4 pl-12 shadow-sm outline-none focus:border-blue-500"
                  placeholder="Search for anything" />
          </div>

          <ul class="mx-auto mt-4 flex space-x-6 sm:mx-5 sm:mt-0">
              <li class="">
                  <!-- Authentication -->
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf

                      <x-dropdown-link :href="route('logout')"
                          onclick="event.preventDefault();
                                                this.closest('form').submit();">
                          {{ __('Log Out') }}
                      </x-dropdown-link>
                  </form>
              </li>
          </ul>
      </div>
  </header>
