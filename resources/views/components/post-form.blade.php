<form class="grow" method="POST" action="{{ $action }}">
    @csrf
    <label class="sr-only" for="{{ $fieldName }}">{{ $labelText }}</label>
    <textarea
    class="w-full resize-none text-lg"
    name="{{ $fieldName }}"
    id="{{ $fieldName }}"
    placeholder="{{ $placeholder }}"
    @if (!empty($rows)) rows="{{ $rows }}" @endif
    ></textarea>
    <div class="flex items-center justify-between gap-4">
    <div class="flex gap-4">
        <button type="button">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-6"
            fill="none"
            viewBox="0 0 24 19"
        >
            <g fill="#EEE" clip-path="url(#a)">
            <path
                d="M1.598 1.584h-1.6v1.584h1.6V1.584ZM3.196 0h-1.6v1.584h1.6V0Zm1.601 0h-1.6v1.584h1.6V0ZM6.4 0H4.8v1.584h1.6V0ZM8 0H6.4v1.584H8V0Z"
            />
            <path
                d="M9.598 0h-1.6v1.584h1.6V0Zm1.6 0h-1.6v1.584h1.6V0Z"
            />
            <path
                d="M12.794 0h-1.6v1.584h1.6V0ZM14.4 0h-1.6v1.584h1.6V0ZM16 0h-1.6v1.584H16V0Zm1.6 0H16v1.584h1.6V0ZM3.196 12.668h-1.6v1.583h1.6v-1.583Zm1.601-1.584h-1.6v1.584h1.6v-1.584ZM6.4 9.5H4.8v1.584h1.6V9.501ZM8 11.084H6.4v1.584H8v-1.584Zm1.598 1.584h-1.6v1.583h1.6v-1.583Zm1.6-1.584h-1.6v1.584h1.6v-1.584ZM12.794 9.5h-1.6v1.584h1.6V9.501ZM14.4 7.917h-1.6V9.5h1.6V7.917ZM16 6.333h-1.6v1.584H16V6.333Zm1.6 1.584H16V9.5h1.6V7.917ZM19.196 9.5h-1.6v1.584h1.6V9.501Zm1.6 1.584h-1.6v1.584h1.6v-1.584Zm1.604 1.584h-1.6v1.583h1.6v-1.583Z"
            />
            <path d="M19.196 0h-1.6v1.584h1.6V0Z" />
            <path
                d="M20.796 0h-1.6v1.584h1.6V0ZM22.4 0h-1.6v1.584h1.6V0ZM1.598 3.168h-1.6V4.75h1.6V3.168Zm0 1.584h-1.6v1.583h1.6V4.752Z"
            />
            <path
                d="M1.598 6.333h-1.6v1.584h1.6V6.333Zm0 1.584h-1.6V9.5h1.6V7.917Zm0 1.583h-1.6v1.584h1.6V9.501Zm0 1.584h-1.6v1.584h1.6v-1.584Zm0 1.584h-1.6v1.583h1.6v-1.583Z"
            />
            <path d="M1.598 14.25h-1.6v1.584h1.6V14.25Z" />
            <path
                d="M1.598 15.834h-1.6v1.583h1.6v-1.583Zm22.403-14.25h-1.6v1.584h1.6V1.584Zm0 1.584h-1.6V4.75h1.6V3.168Zm0 1.584h-1.6v1.583h1.6V4.752Z"
            />
            <path
                d="M24.001 6.333h-1.6v1.584h1.6V6.333Zm0 1.584h-1.6V9.5h1.6V7.917Zm0 1.583h-1.6v1.584h1.6V9.501Zm0 1.584h-1.6v1.584h1.6v-1.584Zm0 1.584h-1.6v1.583h1.6v-1.583Z"
            />
            <path d="M24.001 14.25h-1.6v1.584h1.6V14.25Z" />
            <path
                d="M24.001 15.834h-1.6v1.583h1.6v-1.583ZM3.196 17.418h-1.6V19h1.6v-1.583Zm1.601 0h-1.6V19h1.6v-1.583Zm1.603 0H4.8V19h1.6v-1.583Zm1.6 0H6.4V19H8v-1.583Z"
            />
            <path
                d="M9.598 17.418h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19h1.6v-1.583Z"
            />
            <path
                d="M12.794 17.418h-1.6V19h1.6v-1.583Zm1.606 0h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19H16v-1.583Zm1.6 0H16V19h1.6v-1.583Z"
            />
            <path d="M19.196 17.418h-1.6V19h1.6v-1.583Z" />
            <path
                d="M20.796 17.418h-1.6V19h1.6v-1.583Zm1.604 0h-1.6V19h1.6v-1.583ZM8 4.752H6.4v1.583H8V4.752Zm1.598-1.584h-1.6V4.75h1.6V3.168Zm1.6 1.584h-1.6v1.583h1.6V4.752Z"
            />
            <path d="M9.598 6.333h-1.6v1.584h1.6V6.333Z" />
            </g>
            <defs>
            <clipPath id="a">
                <path fill="#fff" d="M0 0h24v19H0z" />
            </clipPath>
            </defs>
        </svg>
        </button>
        <button type="button">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            class="w-6"
            viewBox="0 0 24 19"
        >
            <g fill="#EEE" clip-path="url(#a)">
            <path
                d="M1.602 1.584h-1.6v1.584h1.6V1.584ZM3.202 0h-1.6v1.584h1.6V0Zm1.601 0h-1.6v1.584h1.6V0Z"
            />
            <path d="M6.403 0h-1.6v1.584h1.6V0Z" />
            <path
                d="M8.001 0h-1.6v1.584h1.6V0Zm1.601 0h-1.6v1.584h1.6V0Zm1.6 0h-1.6v1.584h1.6V0Zm1.6 0h-1.6v1.584h1.6V0Zm1.6 0h-1.6v1.584h1.6V0Zm1.601 0h-1.6v1.584h1.6V0Zm1.6 0h-1.6v1.584h1.6V0Z"
            />
            <path d="M19.203 0h-1.6v1.584h1.6V0Z" />
            <path d="M20.8 0h-1.6v1.584h1.6V0Z" />
            <path
                d="M22.4 0h-1.6v1.584h1.6V0ZM1.602 3.167h-1.6v1.584h1.6V3.167Z"
            />
            <path
                d="M1.602 4.75h-1.6v1.584h1.6V4.751Zm0 1.584h-1.6v1.583h1.6V6.334Zm0 1.584h-1.6V9.5h1.6V7.918Zm0 1.582h-1.6v1.584h1.6V9.5Z"
            />
            <path
                d="M1.602 11.083h-1.6v1.584h1.6v-1.584Zm0 1.584h-1.6v1.583h1.6v-1.583Zm0 1.583h-1.6v1.583h1.6V14.25Zm0 1.584h-1.6v1.583h1.6v-1.583ZM24 1.584h-1.6v1.583H24V1.584Zm0 1.583h-1.6v1.584H24V3.167Z"
            />
            <path
                d="M24 4.75h-1.6v1.584H24V4.751Zm0 1.584h-1.6v1.583H24V6.334Zm0 1.583h-1.6v1.584H24V7.917Z"
            />
            <path
                d="M24 9.5h-1.6v1.584H24V9.5Zm0 1.584h-1.6v1.583H24v-1.583Zm0 1.583h-1.6v1.584H24v-1.584Z"
            />
            <path
                d="M24 14.25h-1.6v1.583H24V14.25Zm0 1.583h-1.6v1.584H24v-1.584ZM3.202 17.417h-1.6V19h1.6v-1.583Zm1.601 0h-1.6V19h1.6v-1.583Z"
            />
            <path d="M6.403 17.417h-1.6V19h1.6v-1.583Z" />
            <path
                d="M8.001 17.417h-1.6V19h1.6v-1.583Zm1.601 0h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19h1.6v-1.583Zm1.601 0h-1.6V19h1.6v-1.583Zm1.6 0h-1.6V19h1.6v-1.583Z"
            />
            <path d="M19.203 17.417h-1.6V19h1.6v-1.583Z" />
            <path d="M20.8 17.417h-1.6V19h1.6v-1.583Z" />
            <path
                d="M22.4 17.417h-1.6V19h1.6v-1.583ZM11.202 3.167h-1.6v1.584h1.6V3.167Zm-1.6 1.584h-1.6v1.583h1.6V4.751Zm0 1.583h-1.6v1.583h1.6V6.334Zm0 1.583h-1.6v1.584h1.6V7.917Z"
            />
            <path
                d="M9.602 9.5h-1.6v1.584h1.6V9.5Zm0 1.584h-1.6v1.583h1.6v-1.583Zm0 1.583h-1.6v1.584h1.6v-1.584Zm1.6 1.583h-1.6v1.583h1.6V14.25Zm6.401-6.333h-1.6v1.584h1.6V7.917Z"
            />
            <path
                d="M17.603 9.5h-1.6v1.584h1.6V9.5Zm-1.6-3.166h-1.6v1.583h1.6V6.334ZM14.402 4.75h-1.6v1.584h1.6V4.751Zm-1.6-1.583h-1.6v1.584h1.6V3.167Zm3.201 7.917h-1.6v1.583h1.6v-1.583Zm-1.601 1.583h-1.6v1.584h1.6v-1.584Zm-1.6 1.583h-1.6v1.583h1.6V14.25Z"
            />
            </g>
            <defs>
            <clipPath id="a">
                <path fill="#fff" d="M0 0h24v19H0z" />
            </clipPath>
            </defs>
        </svg>
        </button>
    </div>
    <button
        type="submit"
        class="bg-pixl hover:bg-pixl/90 active:bg-pixl/95 text-pixl-dark border border-transparent px-4 py-1 text-sm"
    >
        Post
    </button>
    </div>
</form>