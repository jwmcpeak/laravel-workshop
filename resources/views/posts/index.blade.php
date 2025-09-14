<x-layout title="PIXL - Feed">
    @include('partials.navigation')

    <!-- Content -->
    <main class="-mx-4 flex grow flex-col gap-4 overflow-y-auto px-4 py-4">
      <div class="h-full">
        <nav class="overflow-x-auto [scrollbar-width:none]">
          <ul class="flex min-w-max justify-end gap-8 text-sm">
            <li><a href="#">For you</a></li>
            <li>
              <a class="text-pixl-light/60 hover:text-pixl-light/80" href="#"
                >Idea streams</a
              >
            </li>
            <li>
              <a class="text-pixl-light/60 hover:text-pixl-light/80" href="#"
                >Following</a
              >
            </li>
          </ul>
        </nav>
      </div>

      <!-- Post prompt -->
      <div
        class="border-pixl-light/10 mt-8 flex items-start gap-4 border-b pb-4"
      >
        <a href="{{ route('profiles.show', $profile) }}" class="shrink-0">
          <img
            src="{{ $profile->avatar_url }}"
            alt="Avatar for {{ $profile->display_name }}"
            class="size-10 object-cover"
          />
        </a>
        <x-post-form
          :label-text="'Post body'"
          :field-name="'content'"
          :placeholder="'What\'s up '. $profile->handle . '?'"
          :action="route('posts.store')"
        />

      </div>

      <!-- Feed -->
      <ol class="mt-4">
        
        @foreach ($posts as $item)

        <!-- Feed item -->
        <x-post :post="$item" />
        

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