<li class="flex items-start gap-4 not-first:pt-2.5">
    <a href="{{ route('profiles.show', $post->profile) }}" class="shrink-0">
    <img
        src="{{ $post->profile->avatar_url }}"
        alt="Avatar for {{ $post->profile->display_name }}"
        class="size-10 object-cover"
    />
    </a>
    <div class="grow pt-1.5">
    <div class="border-pixl-light/10 border-b pb-5">
        <!-- User meta -->
        <div class="flex items-center justify-between gap-4">
        <div class="flex items-center gap-2.5">
            <p><a class="hover:underline" href="{{ route('profiles.show', $post->profile) }}}">{{ $post->profile->display_name }}</a></p>
            <p class="text-pixl-light/40 text-xs">
                <a href="{{ route('posts.show', [$post->profile, $post]) }}">{{ $post->created_at }}</a>
            </p>
            <p>
            <a
                class="text-pixl-light/40 hover:text-pixl-light/60 text-xs"
                href="{{ route('profiles.show', $post->profile) }}"
                >{{ $post->profile->handle }}</a
            >
            </p>
        </div>
        <button
            class="group flex gap-[3px] py-2"
            aria-label="Post options"
        >
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
        <!-- Post content -->
        <div
        class="[&_a]:text-pixl mt-4 flex flex-col gap-3 text-sm [&_a]:hover:underline"
        >
        {!! $post->content !!}

        @if ($post->isRepost() && $post->content != null)
            <ul>
                <x-post 
                    :post="$post->repostOf" 
                    :show-engagement="false"
                />
            </ul>

        @endif


        </div>

        @if ($showEngagement)
        <!-- Action buttons -->
        
        <div class="mt-6 flex items-center justify-between gap-4">
        <div class="flex items-center gap-8">
            
            <!-- Like -->
            <div class="flex items-center gap-1">
                <button aria-label="Like" class="hover:text-pixl">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    class="h-[17px]"
                    viewBox="0 0 20 17"
                    >
                    <g fill="currentColor" clip-path="url(#a)">
                        <path
                        d="M5.714 0H2.857v2.857h2.857V0Zm2.858 0H5.714v2.857h2.858V0Zm2.857 2.858H8.57v2.857h2.858V2.858ZM14.288 0h-2.857v2.857h2.857V0Z"
                        />
                        <path
                        d="M17.143 0h-2.857v2.857h2.857V0ZM20 2.858h-2.857v2.857H20V2.858Z"
                        />
                        <path
                        d="M20 5.714h-2.857v2.858H20V5.714ZM2.857 2.858H0v2.857h2.857V2.858Z"
                        />
                        <path
                        d="M2.857 5.714H0v2.858h2.857V5.714Zm2.857 2.858H2.857v2.857h2.857V8.572Zm2.858 2.858H5.714v2.857h2.858v-2.858Zm8.571-2.858h-2.857v2.857h2.857V8.572Zm-2.855 2.858h-2.857v2.857h2.857v-2.858Z"
                        />
                        <path d="M11.429 14.286H8.57v2.858h2.858v-2.858Z" />
                    </g>
                    <defs>
                        <clipPath id="a">
                        <path fill="#fff" d="M0 0h20v17H0z" />
                        </clipPath>
                    </defs>
                    </svg>
                </button>
                <span class="text-sm">{{ $post->likes_count }}</span>
            </div>
            <!-- Comment -->
            <div class="flex items-center gap-1">
                <button aria-label="Comment" class="hover:text-pixl">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    class="h-[17px]"
                    viewBox="0 0 20 17"
                    >
                    <g fill="currentColor" clip-path="url(#a)">
                        <path d="M3.581 0h1.824v1.824H3.581z" />
                        <path
                        d="M1.824 0h1.824v1.824H1.824zm0 10.947h1.824v1.824H1.824zM0 3.649h1.824v1.824H0zm0-1.825h1.824v1.824H0zm18.176 1.825H20v1.824h-1.824zm0-1.825H20v1.824h-1.824z"
                        />
                        <path
                        d="M0 5.472h1.824v1.824H0zm18.176 0H20v1.824h-1.824zM0 7.297h1.824v1.824H0zm18.176 0H20v1.824h-1.824zM0 9.121h1.824v1.824H0zm18.176 0H20v1.824h-1.824zM3.647 10.947h1.824v1.824H3.647zm9.056 0h1.824v1.824h-1.824zm-7.23 0h1.824v1.824H5.473zm1.824 1.824h1.824v1.824H7.297zm3.581 0h1.824v1.824h-1.824z"
                        />
                        <path
                        d="M9.122 14.594h1.824v1.824H9.122zm0-9.122h1.824v1.824H9.122zm-3.717 0h1.824v1.824H5.405zm7.431 0h1.824v1.824h-1.824zm1.691 5.475h1.824v1.824h-1.824zM5.405 0h1.824v1.824H5.405zM7.23 0h1.824v1.824H7.23zm1.826 0h1.824v1.824H9.056z"
                        />
                        <path
                        d="M10.878 0h1.824v1.824h-1.824zm1.825 0h1.824v1.824h-1.824zm1.824 0h1.824v1.824h-1.824zm1.824 0h1.824v1.824h-1.824zm0 10.947h1.824v1.824h-1.824z"
                        />
                    </g>
                    <defs>
                        <clipPath id="a">
                        <path fill="#fff" d="M0 0h20v17H0z" />
                        </clipPath>
                    </defs>
                    </svg>
                </button>
                <span class="text-sm">{{ $post->replies_count }}</span>
            </div>
            <!-- Re-post -->
            <div class="flex items-center gap-1">
                <button aria-label="Re-post" class="hover:text-pixl">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    class="h-[17px]"
                    viewBox="0 0 20 17"
                    >
                    <path
                        fill="currentColor"
                        d="M1.429 3.857H0v1.429h1.429V3.857Z"
                    />
                    <path
                        fill="currentColor"
                        d="M2.854 3.857H1.426v1.429h1.428V3.857Z"
                    />
                    <path
                        fill="currentColor"
                        d="M2.854 2.429H1.426v1.429h1.428V2.429Zm1.432 0H2.858v1.429h1.428v-1.43Z"
                    />
                    <path
                        fill="currentColor"
                        d="M4.286 1H2.858v1.429h1.428V1Z"
                    />
                    <path
                        fill="currentColor"
                        d="M5.712 1H4.284v1.429h1.428V1Zm1.432 0H5.716v1.429h1.428V1Z"
                    />
                    <path
                        fill="currentColor"
                        d="M7.144 2.429H5.716v1.429h1.428v-1.43Z"
                    />
                    <path
                        fill="currentColor"
                        d="M8.57 2.429H7.142v1.429H8.57V2.429Z"
                    />
                    <path
                        fill="currentColor"
                        d="M8.57 3.857H7.142v1.429H8.57V3.857Zm1.43 0H8.572v1.429H10V3.857ZM5.712 2.429H4.284v1.429h1.428V2.429Z"
                    />
                    <path
                        fill="currentColor"
                        d="M5.712 3.857H4.284v1.429h1.428V3.857Z"
                    />
                    <path
                        fill="currentColor"
                        d="M5.712 5.286H4.284v1.429h1.428V5.286Z"
                    />
                    <path
                        fill="currentColor"
                        d="M5.712 6.714H4.284v1.429h1.428V6.714Zm0 1.429H4.284v1.429h1.428V8.143Zm1.432 1.429H5.716V11h1.428V9.57Z"
                    />
                    <path
                        fill="currentColor"
                        d="M8.57 9.572H7.142V11H8.57V9.572ZM11.428 11H10v1.428h1.428V11Zm1.428 0h-1.428v1.428h1.428V11Zm0 1.429h-1.428v1.428h1.428V12.43Zm1.43 0h-1.428v1.428h1.428V12.43Zm1.428 1.428h-1.428v1.429h1.428v-1.429Z"
                    />
                    <path
                        fill="currentColor"
                        d="M17.142 13.857h-1.428v1.429h1.428v-1.429Zm-2.856 0h-1.428v1.429h1.428v-1.429Zm2.856-1.428h-1.428v1.428h1.428V12.43Zm1.43 0h-1.428v1.428h1.428V12.43Zm0-1.429h-1.428v1.428h1.428V11Z"
                    />
                    <path
                        fill="currentColor"
                        d="M20 11h-1.429v1.428H20V11Zm-4.286 1.429h-1.428v1.428h1.428V12.43Zm0-1.429h-1.428v1.428h1.428V11Zm0-1.428h-1.428V11h1.428V9.572Z"
                    />
                    <path
                        fill="currentColor"
                        d="M15.714 8.143h-1.428v1.429h1.428V8.143Zm0-1.429h-1.428v1.429h1.428V6.714Z"
                    />
                    <path
                        fill="currentColor"
                        d="M15.714 5.286h-1.428v1.429h1.428V5.286Zm-1.428 0h-1.428v1.429h1.428V5.286Zm-1.43 0h-1.428v1.429h1.428V5.286Z"
                    />
                    </svg>
                </button>
                <span class="text-sm">{{ $post->reposts_count }}</span>
            </div>
            
        </div>
        <div class="flex items-center gap-3">
            <!-- Save -->
            <div class="flex items-center gap-1">
            <button aria-label="Save" class="hover:text-pixl">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                class="h-[17px]"
                viewBox="0 0 14 17"
                >
                <g fill="currentColor" clip-path="url(#a)">
                    <path
                    d="M1.545 7.727H0v1.546h1.545V7.727Zm0 1.546H0v1.545h1.545V9.273Zm0 1.545H0v1.546h1.545v-1.546Zm0 1.546H0v1.545h1.545v-1.545Zm0 1.546H0v1.545h1.545v-1.546Zm1.545 1.544H1.546V17h1.546v-1.546Z"
                    />
                    <path d="M4.636 15.454H3.091V17h1.545v-1.546Z" />
                    <path
                    d="M4.636 13.91H3.091v1.545h1.545v-1.546Zm1.546 0H4.636v1.545h1.546v-1.546Zm0-1.546H4.636v1.545h1.546v-1.545Zm1.545 0H6.182v1.545h1.545v-1.545Zm1.546 0H7.727v1.545h1.546v-1.545Zm0 1.546H7.727v1.545h1.546v-1.546Zm1.545 0H9.273v1.545h1.545v-1.546Zm1.546 1.544h-1.546V17h1.546v-1.546Z"
                    />
                    <path
                    d="M10.818 15.454H9.273V17h1.545v-1.546Zm3.092-1.544h-1.546v1.545h1.545v-1.546Zm0-1.546h-1.546v1.545h1.545v-1.545Zm0-1.546h-1.546v1.546h1.545v-1.546Zm0-1.545h-1.546v1.545h1.545V9.273Zm0-1.546h-1.546v1.546h1.545V7.727ZM4.636 0H3.091v1.545h1.545V0Zm1.546 0H4.636v1.545h1.546V0Zm1.545 0H6.182v1.545h1.545V0Zm1.546 0H7.727v1.545h1.546V0Zm1.545 0H9.273v1.545h1.545V0ZM3.09 1.545H1.546v1.546h1.546V1.545Zm9.274 0h-1.546v1.546h1.546V1.545ZM1.545 3.09H0v1.546h1.545V3.091Z"
                    />
                    <path
                    d="M3.09 3.09H1.546v1.546h1.546V3.091Zm9.274 0h-1.546v1.546h1.546V3.091Zm1.546 0h-1.546v1.546h1.545V3.091ZM1.545 4.636H0v1.546h1.545V4.636Zm12.365 0h-1.546v1.546h1.545V4.636Zm0 1.546h-1.546v1.545h1.545V6.182Zm-12.365 0H0v1.545h1.545V6.182Z"
                    />
                </g>
                <defs>
                    <clipPath id="a">
                    <path fill="#fff" d="M0 0h14v17H0z" />
                    </clipPath>
                </defs>
                </svg>
            </button>
            <span class="text-pixl-light/40 text-sm">Save</span>
            </div>
            <!-- Share -->
            <div class="flex items-center gap-1">
            <button aria-label="Share" class="hover:text-pixl">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                class="h-[17px]"
                viewBox="0 0 19 17"
                >
                <g fill="currentColor" clip-path="url(#a)">
                    <path d="M2.125 6.375H0V8.5h2.125V6.375Z" />
                    <path
                    d="M4.25 6.375H2.123V8.5H4.25V6.375Zm0-2.125H2.123v2.125H4.25V4.25Z"
                    />
                    <path
                    d="M6.373 4.25H4.248v2.125h2.125V4.25Zm0-2.125H4.248V4.25h2.125V2.125Zm2.127 0H6.375V4.25H8.5V2.125ZM8.5 0H6.375v2.125H8.5V0Z"
                    />
                    <path
                    d="M10.624 0H8.499v2.125h2.125V0Zm2.126 0h-2.124v2.125h2.125V0Zm2.125 2.125H12.75V4.25h2.125V2.125Z"
                    />
                    <path
                    d="M12.75 2.125h-2.124V4.25h2.125V2.125Zm2.125 2.125H12.75v2.125h2.125V4.25Z"
                    />
                    <path
                    d="M16.999 4.25h-2.125v2.125h2.125V4.25Zm0 2.125h-2.125V8.5h2.125V6.375Zm2.126 0H17V8.5h2.125V6.375Zm-8.501-4.25H8.499V4.25h2.125V2.125Zm0 2.125H8.499v2.125h2.125V4.25Zm0 2.125H8.499V8.5h2.125V6.375Zm0 2.125H8.499v2.124h2.125V8.5Zm0 2.125H8.499v2.125h2.125v-2.125Zm0 2.125H8.499v2.125h2.125V12.75Zm0 2.125H8.499V17h2.125v-2.125Zm-6.374 0H2.123V17H4.25v-2.125Z"
                    />
                    <path
                    d="M6.373 14.875H4.248V17h2.125v-2.125Zm2.127 0H6.375V17H8.5v-2.125Zm4.25 0h-2.124V17h2.125v-2.125Z"
                    />
                    <path d="M14.875 14.875H12.75V17h2.125v-2.125Z" />
                    <path
                    d="M16.999 14.875h-2.125V17h2.125v-2.125ZM2.125 12.75H0v2.125h2.125V12.75Zm0 2.125H0V17h2.125v-2.125Zm17-2.125H17v2.125h2.125V12.75Zm0 2.125H17V17h2.125v-2.125Z"
                    />
                </g>
                <defs>
                    <clipPath id="a">
                    <path fill="#fff" d="M0 0h19v17H0z" />
                    </clipPath>
                </defs>
                </svg>
            </button>
            </div>
        </div>
        </div>
        @endif
    </div>

    @if ($showReplies)
    <!-- Threaded replies -->
    <ol>
        <!-- Reply -->
        @foreach ($post->replies as $reply) 
            <x-reply :post="$reply" :show-engagement="$showEngagement" :show-replies="$showReplies" />
        @endforeach
        <!-- More replies... -->
    </ol>

    @endif
    </div>
</li>