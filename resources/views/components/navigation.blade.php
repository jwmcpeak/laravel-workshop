   <!-- Navigation -->
    <header
      class="my-4 hidden w-48 shrink-0 flex-col justify-between gap-8 pl-4 sm:flex xl:ml-32"
    >
      <div class="overflow-y-auto">
        <!-- Logo -->
        <a href="/">
          <svg
            class="h-8"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 182 61"
            fill="none"
          >
            <path
              fill="#EEE"
              d="M10.083 0H0v10.083h10.083V0Zm10.084 0H10.084v10.083h10.083V0Z"
            ></path>
            <path
              fill="#EEE"
              d="M30.25 0H20.165v10.083h10.083V0ZM10.083 10.083H0v10.084h10.083V10.083Zm30.25 0H30.25v10.084h10.083V10.083Zm-30.25 10.084H0V30.25h10.083V20.167Zm30.25 0H30.25V30.25h10.083V20.167ZM10.083 30.25H0v10.083h10.083V30.25Zm10.084 0H10.084v10.083h10.083V30.25Z"
            ></path>
            <path
              fill="#EEE"
              d="M30.25 30.25H20.165v10.083h10.083V30.25ZM10.083 40.333H0v10.084h10.083V40.333Zm0 10.084H0V60.5h10.083V50.417ZM60.5 0H50.415v10.083h10.083V0Zm10.083 0H60.5v10.083h10.083V0Zm10.084 0H70.584v10.083h10.083V0ZM70.583 10.083H60.5v10.084h10.083V10.083Zm0 10.084H60.5V30.25h10.083V20.167Zm0 10.083H60.5v10.083h10.083V30.25Zm0 10.083H60.5v10.084h10.083V40.333Zm0 10.084H60.5V60.5h10.083V50.417ZM60.5 50.416H50.415V60.5h10.083V50.416Zm20.167 0H70.584V60.5h10.083V50.416Z"
            ></path>
            <path
              fill="#ECA749"
              d="M100.833 0H90.75v10.083h10.083V0Zm0 10.083H90.75v10.084h10.083V10.083ZM131.083 0H121v10.083h10.083V0Zm0 10.083H121v10.084h10.083V10.083Zm-30.25 30.25H90.75v10.084h10.083V40.333Zm0 10.084H90.75V60.5h10.083V50.417Zm30.25-10.084H121v10.084h10.083V40.333Zm0 10.084H121V60.5h10.083V50.417ZM110.917 30.25h-10.083v10.083h10.083V30.25Zm10.082-10.084h-10.083V30.25h10.083V20.166Z"
            ></path>
            <path
              fill="#ECA749"
              d="M110.917 20.166h-10.083V30.25h10.083V20.166Zm10.082 10.084h-10.083v10.083h10.083V30.25Z"
            ></path>
            <path
              fill="#EEE"
              d="M151.249 0h-10.083v10.083h10.083V0Zm0 10.084h-10.083v10.083h10.083V10.083Z"
            ></path>
            <path
              fill="#EEE"
              d="M151.249 20.166h-10.083V30.25h10.083V20.166Zm0 10.084h-10.083v10.083h10.083V30.25Zm0 10.084h-10.083v10.083h10.083V40.333Z"
            ></path>
            <path
              fill="#EEE"
              d="M151.249 50.416h-10.083V60.5h10.083V50.416Zm10.084.001H151.25V60.5h10.083V50.417Zm10.084-.001h-10.083V60.5h10.083V50.416Z"
            ></path>
            <path
              fill="#EEE"
              d="M181.499 50.416h-10.083V60.5h10.083V50.416Z"
            ></path>
          </svg>
        </a>
        <!-- Navigation -->
        <nav class="mt-10">
          <ul class="flex flex-col gap-3.5">
            <li><a class="hover:underline" href="{{ route('posts.index') }}">Home</a></li>
            <li><a class="hover:underline" href="#">Explore</a></li>
            <!-- Active item -->
            <li class="-ml-4 flex items-center gap-2">
              <div class="bg-pixl size-2 shrink-0"></div>
              <a class="hover:underline" href="#">Notifications</a>
            </li>

            <li><a class="hover:underline" href="#">Lists</a></li>
            <li><a class="hover:underline" href="#">Bookmarks</a></li>
            <li><a class="hover:underline" href="#">Jobs</a></li>
            <li><a class="hover:underline" href="#">Communities</a></li>
            <li><a class="hover:underline" href="#">Premium</a></li>
            <li><a class="hover:underline" href="#">Profile</a></li>
            <li><a class="hover:underline" href="#">More</a></li>
          </ul>
        </nav>
      </div>

      @if(!request()->routeIs('posts.index'))
        <div class="flex flex-col gap-6">
            <button
            class="bg-pixl hover:bg-pixl/90 active:bg-pixl/95 text-pixl-dark border border-transparent px-4 py-3 text-sm"
            >
            Post
            </button>
      @endif
      <!-- User controls -->
      <div class="flex gap-3.5">
        <a href="/profile" class="shrink-0">
          <img
            src="/images/adrian.png"
            alt="Avatar for Adrian"
            class="size-11 object-cover"
          />
        </a>
        <div class="flex flex-col gap-1 text-sm">
          <p>_adrian</p>
          <p class="text-pixl-light/60">@tudssss</p>
        </div>
        <button class="group flex gap-[3px] py-2" aria-label="Post options">
          <span
            class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"
          ></span>
          <span
            class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"
          ></span>
          <span
            class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"
          ></span>
        </button>
      </div>

      @if(!request()->routeIs('posts.index'))
        </div>
      @endif
    </header>