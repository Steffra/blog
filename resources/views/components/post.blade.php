<div class="flex flex-col sm:justify-center sm:pt-0 bg-white shadow-md overflow-hidden sm:rounded-lg mb-10 pl-2">
    <div class="mx-2">
        <div class="text-left font-bold text-xl">
            {{ $post->title }}
        </div>
        <div class="pb-2 text-sm">
            Published at:
            <span class="text-dotbite">
                {{ substr($post->published_at, 0,-3) }}
            </span>
        </div>
    </div>
    <div class="w-full m-2 ml-3">
        <p>
            {!! nl2br(e( $post->body)) !!}
        </p>
    </div>
    <div class="flex mr-3 ml-2">
        @if (Auth::user()->is_admin)
        <div class="text-left flex-1 text-sm">
            Posted by:
            <span class="text-dotbite">
                {{ $post->user->email }}
            </span>
        </div>
        @endif
        @if ($post->is_deletable)
        <div class="pb-2 flex-1 text-right">
            <form method="post" action="{{ route('posts.destroy',$post->id) }}">
                @csrf
                @method('DELETE')
                <x-primary-button>
                    {{ __('Delete post') }}
                </x-primary-button>
                </button>
            </form>
        </div>
        @endif
    </div>
</div>
