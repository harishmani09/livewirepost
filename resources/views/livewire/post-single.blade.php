<div class="flex">

    <div>
        <img src="{{ $post->user->avatar() }}" alt="" class="mr-4 rounded w-8">
    </div>
    <main>
        <h5 class="font-bold text-2xl">{{ $post->user->name }}</h5>
        {{ $post->body }}
    </main>
</div>
