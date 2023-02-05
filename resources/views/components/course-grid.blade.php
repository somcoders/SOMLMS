 @forelse ($courses as $course)
     <article class="h-40">
         <a class="block h-full flex flex-col justify-around rounded-lg bg-gradient-to-r from-{{ $course['gradient'][0] }}-500 via-{{ $course['gradient'][1] }}-400 to-{{ $course['gradient'][1] }}-400 p-2 transition hover:scale-105"
             href="{{ route('courses.show', $course['slug']) }}">
             <h2 class="mx-4 mt-4 font-semibold text-xl font-semibold text-white">
                 {{ $course['name'] }}
             </h2>
             <div class="flex flex-wrap justify-around text-gray-200">
                 <div>
                     <span class="fa fa-signal"></span>
                     <span class="mr-1">{{ $course['level'] }}</span>
                 </div>
                 <div>
                     <span class="fa fa-clock"></span>
                     <span class="mr-1">{{ $course['duration'] }}hrs</span>
                 </div>
             </div>
         </a>
     </article>
 @empty
     <h1 class="p-4 text-blue-800">No Course Found</h1>
 @endforelse
