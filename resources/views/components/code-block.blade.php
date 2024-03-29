<div class="w-full gap-4 drag-and-drop m-4">
    <div class="w-full">
        <form wire:submit.prevent="submit(Object.fromEntries(new FormData($event.target)))">
            <div class=" w-10 h-5 bg-green-500 float-right mb-2"></div>
            {{--console--}}
            <div id="console"
                 class="w-full border-slime border-solid color-slime h-auto relative rounded text-base border">
                @foreach ($submittedCode as $key => $codeBlock)
                    <div data-value="{{$codeBlock}}" class="color-slime text-center text-2xl drag-item">
                        <input type="hidden" value="{{$codeBlock}}" name="code-block-{{$key}}"/>
                    </div>
                @endforeach
            </div>
            {{------}}
            @error('console-error')
            <div class="color-slime border border-red-400  px-4 py-1 rounded relative" role="alert">
                <span class="block sm:inline">{{ $message }}</span>
                <strong class="font-bold"></strong>
            </div>
            @enderror
            <button type="submit"
                    class="color-slime border-slime flex items-center float-right mt-2 mb-2 py-1 px-4 border rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 color-slime h-5 w-5" viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                          clip-rule="evenodd"/>
                </svg>
                Run Code
            </button>
            <div class="color-slime" wire:loading>Loading data</div>
        </form>
    </div>

    <div class="drag-container color-slime border-slime border rounded">
        <h2 class="text-center drag-column-header color-slime text-left text-2xl font-bold leading-normal mt-2 mb-2">
            Code Snipes</h2>
        <div id="code-snippets">
            {{--@dd($codeBlocks)--}}
            @foreach ($codeBlocks as $key => $codeBlock)
                <div data-value="{{$codeBlock}}" class="color-slime text-center text-2xl drag-item">
                    <input type="hidden" value="{{$codeBlock}}" name="code-block-{{$key}}"/>
                </div>
            @endforeach
        </div>
    </div>
</div>
