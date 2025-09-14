<x-layout title="PIXL - Profile">
    @include('partials.navigation', ['showPostButton' => true])

    <!-- Content -->
    <main class="-mx-4 flex grow flex-col gap-4 overflow-y-auto px-4 py-4">
      <a href="/feed" class="group flex items-baseline gap-1.5">
        <svg
          class="size-3"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 12 12"
          fill="none"
        >
          <path
            fill="currentColor"
            d="M6.857 0v1.714H5.143V0zM5.143 1.715v1.714H3.429V1.715zM3.427 3.429v1.714H1.713V3.429zM1.715 5.143v1.714H0V5.143zm1.713 1.715v1.714H1.714V6.858zm1.714 1.714v1.714H3.428V8.572zm1.715 1.713V12H5.143v-1.714z"
          ></path>
          <path
            fill="currentColor"
            class="opacity-60 group-hover:opacity-100"
            d="M12 0v1.714h-1.714V0zm-1.714 1.714v1.714H8.572V1.714zM8.57 3.428v1.714H6.856V3.428zM6.857 5.143v1.714H5.143V5.143zM8.57 6.858v1.714H6.856V6.858zm1.715 1.714v1.714H8.571V8.572zM12 10.286V12h-1.714v-1.714z"
          ></path>
        </svg>
        <span>back</span>
      </a>
      
      <x-profile.header :profile="$profile" />

      <!-- Feed -->
      <ol class="border-pixl-light/10 border-t pt-4">
        @foreach ($posts as $item)

        <!-- Feed item -->
        <x-post
          :post="$item"
          :show-engagement="true"
        />
        
        @endforeach
        <!-- More feed items... -->
      </ol>

      <footer class="mt-30 ml-14">
        <p class="text-center">That's all, folks!</p>
        <hr class="border-pixl-light/10 my-4" />
        <!-- White noise -->
        <div class="h-20 bg-[url(/resources/images/white-noise.gif)]"></div>
      </footer>
    </main>

    @include('partials.aside')
  </x-layout>