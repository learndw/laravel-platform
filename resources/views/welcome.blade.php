 <x-app-layout>
     <section class="bg-cover" style="background-image: url({{ asset('img/home/students.jpg') }})">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
             <div class="w-full md:w-3/4 lg:w-1/2">
                 <h1 class="text-white font-fold text-4xl">
                     Lorem ipsum dolor, sit amet consectetur
                 </h1>
                 <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste
                     dolorum repellat, exercitationem
                     reiciendis quidem esse dolor voluptates, error similique id explicabo magnam corrupti dolore modi
                     expedita architecto tempore veniam minima.
                 </p>
                 <!-- component -->
                 <!-- This is an example component -->
                 <div class="pt-2 relative mx-auto text-gray-600">
                     <input
                         class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                         type="search" name="search" placeholder="Search">
                     <button
                         class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
                         Buscar
                     </button>

                 </div>
             </div>
         </div>
     </section>

     <section class="mt-24">
         <h1 class="text-gray-600 text-center text-3xl mb-6">
             Contenido
         </h1>
         <div
             class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

             <article>
                 <figure>
                     <img src="{{ asset('img/home/students.jpg') }}" class="rounded-xl h-36 w-full object-cover">
                 </figure>

                 <header class="mt-2">
                     <h1 class="text-center text-xl text-gray-700">
                         Cursos y proyectos
                     </h1>
                     <p class="text-sm text-gray-500">
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatem ea veniam officia
                         hic accusantium, quia officiis labor
                     </p>
                 </header>
             </article>

             <article>
                 <figure>
                     <img src="{{ asset('img/home/students.jpg') }}" class="rounded-xl h-36 w-full object-cover">
                 </figure>

                 <header class="mt-2">
                     <h1 class="text-center text-xl text-gray-700">
                         Cursos y proyectos
                     </h1>
                     <p class="text-sm text-gray-500">
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatem ea veniam officia
                         hic accusantium, quia officiis labor
                     </p>
                 </header>
             </article>

             <article>
                 <figure>
                     <img src="{{ asset('img/home/students.jpg') }}" class="rounded-xl h-36 w-full object-cover">
                 </figure>

                 <header class="mt-2">
                     <h1 class="text-center text-xl text-gray-700">
                         Cursos y proyectos
                     </h1>
                     <p class="text-sm text-gray-500">
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatem ea veniam officia
                         hic accusantium, quia officiis labor
                     </p>
                 </header>
             </article>

             <article>
                 <figure>
                     <img src="{{ asset('img/home/students.jpg') }}" class="rounded-xl h-36 w-full object-cover">
                 </figure>

                 <header class="mt-2">
                     <h1 class="text-center text-xl text-gray-700">
                         Cursos y proyectos
                     </h1>
                     <p class="text-sm text-gray-500">
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatem ea veniam officia
                         hic accusantium, quia officiis labor
                     </p>
                 </header>
             </article>

         </div>

     </section>

     <section class="mt-24 bg-gray-700 py-12">
         <h1 class="text-center text-white text-3xl">
             No sabes que aprender?
         </h1>
         <p class="text-center text-white">
             Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente libero cumque eaque optio architecto
             tempore debitis obcaecati.
         </p>

         <div class="flex justify-center mt-4">
             <a href="{{ route('courses.index') }}"
                 class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                 Catalogo de Cursos
             </a>
         </div>
     </section>

     <section class="my-24">
         <h1 class="text-center text-3xl text-gray-600">Ultimos Cursos</h1>
         <p class="text-center text-gray-500 text-sm mb-6">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit.
         </p>
         <div
             class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
             @foreach ($courses as $course)
                 <x-course-card :course="$course" />
             @endforeach
         </div>
     </section>
 </x-app-layout>
