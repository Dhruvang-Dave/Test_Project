@if(session()->has('success'))
        <DIV x-data="{show:true}"
        x-init="setTimeout(() => show:false , 400000000)"
        x-show="show"
        class="fixed bottom-0 right-0 bg-blue-500 text-white py-2 px-2 rounded-xl mb-5 mr-4">
            <p>{{ session('success') }}</p>
        </DIV>
    @endif