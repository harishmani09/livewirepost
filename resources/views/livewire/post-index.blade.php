<div class="mx-auto max-w-4xl ">

    @if (session()->has('message'))
        <div class="bg-green-300 text-white rounded-sm text-xs py-1 px-2 m-2">{{ session('message') }}</div>
    @endif


    <h2 class="text-3xl my-8">Posts</h2>
    <main>
        <livewire:post-create />

        @foreach ($posts as $post)
            <livewire:post-single :post="$post" :key="$post->id" />
        @endforeach

        {{ $posts->links() }}
    </main>
</div>
