{{-- <a href="{{ $href }}">
    <div class="w-full flex items-center gap-4 px-6 py-1 rounded-lg
        {{ $active ? 'text-slate-50 bg-indigo-800' : 'text-indigo-800 outline-1 outline outline-indigo-800 hover:text-slate-50 hover:bg-indigo-800' }}
        transition-all">
        <span class="icon-[{{ $icon }}] text-xl"></span>
        <p class="text-xl font-medium">{{ $slot }}</p>
    </div>
</a> --}}

<a href="{{ $href }}">
    <div class="w-full flex items-center gap-4 px-6 py-1 rounded-lg {{ $active ? 'text-slate-50 outline-2 outline outline-indigo-800 bg-indigo-800 ' : 'text-indigo-800 outline-1 outline outline-indigo-800 hover:text-slate-50 hover:bg-indigo-800 transition-all' }}">
    <span class="icon-[{{ $icon }}] text-xl"></span>
      <p class="text-xl font-medium">{{ $slot }}</p>
    </div>
</a>