<x-layout>
    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif

        {{-- <div class="lg:grid lg:grid-cols-3">
            <x-post-card/>

            <x-post-card/>

            <x-post-card/>
        </div> --}}
    </main>

    {{-- @foreach ($posts as $post)
        <article style="{{$loop->odd ? 'color:red' : ''}}">
            <h1>
                <a href="/posts/{{$post->slug}}">{{ $post->title }}</a>
            </h1>

            <p>
                by <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> on <a href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}
                </a>
            </p>

            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach --}}
</x-layout>