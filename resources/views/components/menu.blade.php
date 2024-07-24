<div class="w-[240px] h-full py-10 px-6 flex flex-col gap-6 items-center">
    <img src="./img/{{ $toko->logo }}" width="140" alt="" />

    <div class="w-full flex flex-col gap-2">
        <x-menu-main href="/penjualan" icon="mdi--cart" :active="request()->is('penjualan')">Penjualan</x-menu-main>
        <x-menu-main href="/pesanan" icon="mingcute--clipboard-fill" :active="request()->is('pesanan')">Pesanan</x-menu-main>
    </div>

    <div class="w-full h-[2px] bg-slate-500 rounded-sm"></div>

    <div class="w-full flex flex-col gap-2 h-full">
        <x-menu-item href="/" icon="fa--dashboard" :active="request()->is('/')">Dashboard</x-menu-item>
        <x-menu-item href="/barang" icon="fa-solid--layer-group" :active="request()->is('barang')">Stok barang</x-menu-item>
        <x-menu-item href="/transaksi" icon="ph--list-checks-fill" :active="request()->is('transaksi')">Transaksi</x-menu-item>
        <x-menu-item href="/pelanggan" icon="fluent--people-list-16-filled" :active="request()->is('pelanggan')">Pelanggan</x-menu-item>
        @if($userData->role === 'admin')
            <x-menu-item href="/admin" icon="mingcute--settings-2-fill" :active="request()->is('admin')">Administrator</x-menu-item>
        @endif
    </div>

    <div class="w-full flex">
        <div class="h-32 w-full flex flex-col gap-2 justify-end rounded-2xl p-4 bg-gradient-to-t from-indigo-800 to-indigo-700 relative">
          <div style="background-image: url(/img/{{ $userData->image }})" class="size-16 border-4 border-indigo-700 rounded-[50%] bg-top bg-cover bg-no-repeat absolute self-center top-[-32px]"></div>
          <div class="w-full text-center text-xs leading-5 text-slate-50">
            <p class="font-bold">{{ $userData->name }}</p>
            <p class="">{{ $userData->role === 'admin' ? 'Administrator' : 'Karyawan' }}</p>
          </div>
          <form action="/logout" method="post">
            @csrf
           <button class="w-full leading-6 font-medium text-center rounded-lg px-8 text-slate-500 bg-slate-50 hover:text-indigo-800 transition-all">
             Logout
           </button>
          </form>
        </div>
    </div>
</div>