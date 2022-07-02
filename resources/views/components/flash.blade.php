@if(session()->has('success'))
        <DIV x-data="{show:true}"
        x-init="setTimeout(() => show:false , 1000)"
        x-show="show"
        class="fixed bottom-0 right-0 bg-blue-500 text-white py-2 px-2 rounded-xl mb-4 mr-4">
            <p class="m-2">{{ session('success') }}</p>
        </DIV>
    @endif