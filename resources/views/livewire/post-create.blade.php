<div>
    <div class="my-8 max-w-2xl bg-white shadow-sm p-2 m-2 rounded-lg">
        <form wire:submit.prevent="addPost">

            <div>
                <label class="block font-bold" for="body">Your Post</label>
                <textarea class="w-full border-none bg-gray-50 rounded-sm" type="text" id="body" name="body" wire:model="body"
                    placeholder="your post..."></textarea>
                <button class="bg-blue-500 text-white px-2 py-1 rounded-md block">Post</button>
                {{ $body }}
                @error('body')
                    <p class="text-xs text-red-500 ">{{ $message }}</p>
                @enderror
            </div>
        </form>
    </div>
</div>
