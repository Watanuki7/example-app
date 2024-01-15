<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
  <div class="container">
    <div class="flex flex-wrap justify-between items-center -mx-4">
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex items-center -mx-3 sm:-mx-4">
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/me1.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/me3.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
          </div>
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="my-4 relative z-10">
              <img
                src="{{ url('/img/me2.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
              <x-about-dots></x-about-dots>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
        <div class="mt-10 lg:mt-0">
          <span class="font-semibold text-lg text-primary mb-2 block">
             <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                 "Time to tip the scales!"
             </blockquote>
          </span>
          <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
            About Me
          </h2>
          <p class="text-base dark:text-gray-400 mb-8">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut arcu eros. <br />
          Integer vestibulum sem eget pellentesque elementum. Phasellus leo ipsum,
          facilisis ac laoreet vel, sollicitudin sed lacus. Vivamus finibus et neque non hendrerit. Donec scelerisque, lacus nec tincidunt laoreet, arcu. <br />
          </p>
          <p class="text-base dark:text-gray-400 mb-8">
          Mauris congue fermentum tortor, a tempus quam volutpat vel, morbi.
            <span class="text-amber-500 font-bold">Javascript</span> and <span class="text-amber-500 font-bold">Laravel</span>. <br />
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut. <br />
          </p>
          <x-button-link href="https://www.youtube.com/watch?v=ZEcqHA7dbwM" variant="red" target="_blank">
            Botón
          </x-button-link>
        </div>
      </div>
    </div>
  </div>
</section>