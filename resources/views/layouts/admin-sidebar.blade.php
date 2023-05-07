  <aside class="fixed z-50 md:relative">
      <!-- Sidebar -->
      <input type="checkbox" class="peer hidden" id="sidebar-open" />
      <label
          class="peer-checked:rounded-full peer-checked:p-2 peer-checked:right-6 peer-checked:bg-gray-600 peer-checked:text-white absolute top-8 z-20 mx-4 cursor-pointer md:hidden"
          for="sidebar-open">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
      </label>
      <nav aria-label="Sidebar Navigation"
          class="peer-checked:w-64 left-0 z-10 flex h-screen w-0 flex-col overflow-hidden bg-gray-700 text-white transition-all md:h-screen md:w-64 lg:w-72">
          <div class="bg-slate-800 py-4">
              <span class="">
                  <span
                      class="mr-1 inline-flex h-12 w-8 items-center justify-center  align-bottom text-2xl font-bold"></span>
                  <span class="text-xl">SOMLMS</span>
              </span>
          </div>
          <ul class="mt-2 space-y-3">

              <li class="relative">
                  <button
                      class="focus:bg-slate-600 hover:bg-slate-600 flex w-full space-x-2 rounded-md px-10 py-4 text-gray-300 focus:outline-none">
                      <span class="fa fa-signal w-6 h-6"></span>
                      <a href="{{ route('dashboard') }}"> Dashboard</a>
                  </button>
              </li>
              <li class="relative">
                  <button
                      class="focus:bg-slate-600 hover:bg-slate-600 flex w-full space-x-2 rounded-md px-10 py-4 text-gray-300 focus:outline-none">
                      <span class="fa fa-book w-6 h-6"></span>
                      <a href="{{ route('dashboard') }}"> Courses</a>
                  </button>
              </li>

              <li class="relative">
                  <button
                      class="focus:bg-slate-600 hover:bg-slate-600 flex w-full space-x-2 rounded-md px-10 py-4 text-gray-300 focus:outline-none">
                      <span class="fa fa-list w-6 h-6"></span>
                      <a href="{{ route('admin.categories.index') }}"> Categories</a>
                  </button>
              </li>

              <li class="relative">
                  <button
                      class="focus:bg-slate-600 hover:bg-slate-600 flex w-full space-x-2 rounded-md px-10 py-4 text-gray-300 focus:outline-none">
                      <span class="fa fa-video w-6 h-6"></span>
                      <a href="{{ route('dashboard') }}"> Students</a>
                  </button>
              </li>
              <li class="relative">
                  <button
                      class="focus:bg-slate-600 hover:bg-slate-600 flex w-full space-x-2 rounded-md px-10 py-4 font-semibold focus:outline-none">
                      <span class="fa fa-user w-6 h-6"></span>
                      <span class="">Students</span>
                  </button>
                  <svg class="text-slate-200 absolute -right-1 -top-1/2 z-10 hidden h-32 w-8 md:block"
                      xmlns="http://www.w3.org/2000/svg" viewBox="399.349 57.696 100.163 402.081" width="1em"
                      height="4em">
                      <path fill="currentColor"
                          d="M 499.289 57.696 C 499.289 171.989 399.349 196.304 399.349 257.333 C 399.349 322.485 499.512 354.485 499.512 458.767 C 499.512 483.155 499.289 57.696 499.289 57.696 Z" />
                  </svg>
              </li>
              <li class="relative">
                  <button
                      class="focus:bg-slate-600 hover:bg-slate-600 flex w-full space-x-2 rounded-md px-10 py-4 text-gray-300 focus:outline-none">
                      <span class="fa fa-pen w-6 h-6"></span>
                      <a href="{{ route('dashboard') }}"> Instructors</a>
                  </button>
              </li>
          </ul>

          <div class="my-6 mt-auto ml-10 flex cursor-pointer">
              <div>
                  <img class="h-12 w-12 rounded-full"
                      src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" />
              </div>
              <div class="ml-3">
                  <p class="font-medium"><a href="{{ route('profile.edit') }}">{{ Auth::user()->firstname }}</a></p>
              </div>
          </div>
      </nav>
  </aside>
