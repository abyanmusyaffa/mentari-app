<!DOCTYPE html>
<html>
  <x-head title="Pesanan" />
  <body class="font-baloo">
    <div class="h-screen w-screen flex">
      {{-- <div class="w-[240px] h-full py-10 px-6 flex flex-col gap-6 items-center">
        <img src="./img/mentari.svg" width="140" alt="" />

        <div class="w-full flex flex-col gap-2">
          <a href="/penjualan">
            <div class="w-full flex items-center gap-4 px-6 py-1 rounded-lg text-indigo-800 outline-1 outline outline-indigo-800 hover:text-slate-50 hover:bg-indigo-800 transition-all">
              <span class="icon-[mdi--cart] text-xl"></span>
              <p class="text-xl font-medium">Penjualan</p>
            </div>
          </a>
          <a href="/pesanan">
            <div class="w-full flex items-center gap-4 px-6 py-1 rounded-lg text-slate-50 outline-2 outline outline-indigo-800 bg-indigo-800">
              <span class="icon-[mingcute--clipboard-fill] text-xl"></span>
              <p class="text-xl font-medium">Pesanan</p>
            </div>
          </a>
        </div>

        <div class="w-full h-[2px] bg-slate-500 rounded-sm"></div>

        <div class="w-full flex flex-col gap-2 h-full">
          <a href="/">
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 text-slate-500 font-medium hover:font-semibold hover:text-indigo-800 transition-all">
              <span class="icon-[fa--dashboard] w-4"></span>
              <p class="leading-4">Dashboard</p>
            </div>
          </a>
          <a href="/barang">
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 text-slate-500 font-medium hover:font-semibold hover:text-indigo-800 transition-all">
              <span class="icon-[fa-solid--layer-group] w-4"></span>
              <p class="leading-4">Stok barang</p>
            </div>
          </a>
          <a href="/transaksi">
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 text-slate-500 font-medium hover:font-semibold hover:text-indigo-800 transition-all">
              <span class="icon-[ph--list-checks-fill] w-4"></span>
              <p class="leading-4">Transaksi</p>
            </div>
          </a>
          <a href="/pelanggan">
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 text-slate-500 font-medium hover:font-semibold hover:text-indigo-800 transition-all">
              <span class="icon-[fluent--people-list-16-filled] w-4"></span>
              <p class="leading-4">Pelanggan</p>
            </div>
          </a>
          <a href="/admin">
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 text-slate-500 font-medium hover:font-semibold hover:text-indigo-800 transition-all">
              <span class="icon-[mingcute--settings-2-fill] w-4"></span>
              <p class="leading-4">Administrator</p>
            </div>
          </a>
        </div>

        <div class="w-full flex">
          <div class="h-32 w-full flex flex-col gap-2 justify-end rounded-2xl p-4 bg-gradient-to-t from-indigo-800 to-indigo-700 relative">
            <div style="background-image: url(/img/pp.jpg)" class="size-16 border-4 border-indigo-700 rounded-[50%] bg-top bg-cover bg-no-repeat absolute self-center top-[-32px]"></div>
            <div class="w-full text-center text-xs leading-5 text-slate-50">
              <p class="font-bold">Abyan Aufa Alif Musyaffa</p>
              <p class="">Administrator</p>
            </div>
            <form action="/logout" method="post">
                @csrf
              <button class="w-full leading-6 font-medium text-center rounded-lg px-8 text-slate-500 bg-slate-50 hover:text-indigo-800 transition-all">
                Logout
              </button>
            </form>
            </a>
          </div>
        </div>
      </div> --}}
      <x-menu />

      <div style="width: calc(100vw - 240px)" class="h-full bg-slate-100 rounded-s-[40px] p-6 gap-6 flex">
        <div class="w-7/12 h-full p-4 gap-2 rounded-2xl bg-white flex flex-col justify-between">
          <div class="w-full flex gap-2">
            <p class="text-indigo-800 text-2xl leading-6 font-medium w-full">Daftar pesanan</p>
            <div class="relative flex ">
              <button type="button" id="dropdown-button" class="py-1 min-w-9 rounded-2xl leading-5 bg-indigo-100 items-center justify-center flex">
                <span class="icon-[solar--sort-linear] w-4 text-slate-500"></span>
              </button>
              <div id="dropdown-content" class="hidden absolute right-10 w-56 rounded-lg shadow-md bg-slate-50 flex flex-col z-50 p-2">
                <a href="#" class="sort-option px-4 py-2 text-xs text-slate-800 rounded hover:bg-indigo-100" data-sort="pesanan-asc">Pesanan (A-Z)</a>
                <a href="#" class="sort-option px-4 py-2 text-xs text-slate-800 rounded hover:bg-indigo-100" data-sort="pesanan-desc">Pesanan (Z-A)</a>
                <a href="#" class="sort-option px-4 py-2 text-xs text-slate-800 rounded hover:bg-indigo-100" data-sort="status-asc">Status (A-Z)</a>
                <a href="#" class="sort-option px-4 py-2 text-xs text-slate-800 rounded hover:bg-indigo-100" data-sort="status-desc">Status (Z-A)</a>
                <a href="#" class="sort-option px-4 py-2 text-xs text-slate-800 rounded hover:bg-indigo-100" data-sort="waktu-asc">Diambil terdekat</a>
                <a href="#" class="sort-option px-4 py-2 text-xs text-slate-800 rounded hover:bg-indigo-100" data-sort="waktu-desc">Diambil terjauh</a>
                <a href="#" class="sort-option px-4 py-2 text-xs text-slate-800 rounded hover:bg-indigo-100" data-sort="created-desc">Terbaru</a>
                <a href="#" class="sort-option px-4 py-2 text-xs text-slate-800 rounded hover:bg-indigo-100" data-sort="created-asc">Terlama</a>
                <a href="#" class="sort-option px-4 py-2 text-xs text-slate-800 rounded hover:bg-indigo-100" data-sort="pelanggan-asc">Pelanggan (A-Z)</a>
                <a href="#" class="sort-option px-4 py-2 text-xs text-slate-800 rounded hover:bg-indigo-100" data-sort="pelanggan-desc">Pelanggan (Z-A)</a>
              </div>
            </div>
            <div class="relative">
              <input type="text" id="search-pesanan" class="w-56 ps-10 pe-4 py-1 rounded-2xl bg-indigo-100 leading-5 text-slate-500 placeholder-slate-500 focus:border-none focus:outline-none" placeholder="Cari pesanan" />
              <div class="absolute left-4 top-[6px]">
                <span class="icon-[mingcute--search-line] w-4 text-slate-500"></span>
              </div>
            </div>
          </div>

          <div class="w-full flex px-4 gap-2 justify-between">
            <div class="w-full h-14 bg-slate-100 rounded-lg p-2 flex gap-2 items-center">
              <div class="h-10 min-w-10 bg-gradient-to-t from-indigo-800 to-indigo-700 rounded-lg flex justify-center items-center">
                <span class="icon-[ph--clipboard-text-fill] h-4 text-slate-50"></span>
              </div>
              <div class="w-full flex flex-col h-full">
                <p class="text-xs leading-4 text-slate-800">Pesanan siap</p>
                <p class="text-2xl leading-6 text-indigo-600 font-semibold">{{ $jumlahSiap }}</p>
              </div>
            </div>

            <div class="w-full h-14 bg-slate-100 rounded-lg p-2 flex gap-2 items-center">
              <div class="h-10 min-w-10 bg-gradient-to-t from-blue-700 to-blue-600 rounded-lg flex justify-center items-center">
                <span class="icon-[fluent--clipboard-settings-20-filled] h-4 text-slate-50"></span>
              </div>
              <div class="w-full flex flex-col h-full">
                <p class="text-xs leading-4 text-slate-800">Proses</p>
                <p class="text-2xl leading-6 text-blue-600 font-semibold">{{ $jumlahProses }}</p>
              </div>
            </div>

            <div class="w-full h-14 bg-slate-100 rounded-lg p-2 flex gap-2 items-center">
              <div class="h-10 min-w-10 bg-gradient-to-t from-yellow-700 to-yellow-500 rounded-lg flex justify-center items-center">
                <span class="icon-[fluent--clock-bill-20-filled] h-4 text-slate-50"></span>
              </div>
              <div class="w-full flex flex-col h-full">
                <p class="text-xs leading-4 text-slate-800">Pending</p>
                <p class="text-2xl leading-6 text-yellow-500 font-semibold">{{ $jumlahPending }}</p>
              </div>
            </div>

            <div class="w-full h-14 bg-slate-100 rounded-lg p-2 flex gap-2 items-center">
              <div class="h-10 min-w-10 bg-gradient-to-t from-lime-600 to-lime-500 rounded-lg flex justify-center items-center">
                <span class="icon-[fluent--clipboard-checkmark-16-filled] h-4 text-slate-50"></span>
              </div>
              <div class="w-full flex flex-col h-full">
                <p class="text-xs leading-4 text-slate-800">Selesai</p>
                <p class="text-2xl leading-6 text-lime-500 font-semibold">{{ $jumlahSelesai }}</p>
              </div>
            </div>
          </div>

          <div style="" id="data-list" class="w-full h-full flex flex-col gap-2 p-2 rounded-2xl bg-slate-50 shadow-mentari overflow-y-scroll">
            @foreach($pesanans as $p)
            <div id="modal-button-detail{{ $p->id }}"  class="list-items hover:bg-slate-50 cursor-pointer w-full bg-white shadow-mentari2 rounded-lg py-1 px-2" data-id="{{ $p->id }}" data-pesanan="{{ $p->detail_pesanans->first()->nama }}" data-pelanggan="{{ $p->nama_pelanggan }}" data-hp="{{ $p->hp_pelanggan }}" data-status="{{ $p->status }}" data-waktu="{{ $p->waktu }}" data-created="{{ $p->created_at }}">
                <p class="text-xs text-slate-400">#{{ $p->id }}</p>
                <div class="w-full flex">
                    <p class="w-full leading-5 text-indigo-800">{{ $p->detail_pesanans->first()->nama }}</p>
                    <div class="flex gap-2 items-center">
                        {!! ($p->status === 'Proses') ? '<span class="icon-[fluent--clipboard-settings-20-filled] h-4 text-blue-600"></span>' : (($p->status === 'Selesai') ? '<span class="icon-[fluent--clipboard-checkmark-16-filled] h-4 text-lime-500"></span>' : (($p->status === 'Siap') ? '<span class="icon-[ph--clipboard-text-fill] h-4 text-indigo-600"></span>' : '<span class="icon-[fluent--clock-bill-20-filled] h-4 text-yellow-500"></span>')) !!}
                        <p class="leading-5 {{ ($p->status === 'Proses') ? 'text-blue-600' : (($p->status === 'Selesai') ? 'text-lime-500' : (($p->status === 'Siap') ? 'text-indigo-600' : 'text-yellow-500')) }}">{{ $p->status }}</p>
                    </div>
                </div>
                <div class="w-full flex">
                    <p class="w-full text-xs text-slate-600">{{ $p->nama_pelanggan }} {{ $p->nama_pelanggan && $p->hp_pelanggan ? '|' : '' }} {{ $p->hp_pelanggan }}</p>
                    <p class="text-xs text-slate-600 whitespace-nowrap">{{ \Carbon\Carbon::parse($p->waktu)->translatedFormat('H:i') }} | {{ \Carbon\Carbon::parse($p->waktu)->translatedFormat('j F Y') }}</p>
                </div>
            </div>
            @endforeach
          </div>
        </div>

        <form action="/pesanan" method="post" class="w-5/12 h-full p-4 rounded-2xl bg-white flex flex-col gap-2">
            @csrf
            <p class="text-indigo-800 text-2xl leading-6 font-medium w-full">Buat pesanan</p>
            <div id="keranjang-items" class="size-full overflow-y-scroll list-pesanan flex flex-col gap-2">
              <div class="w-full flex gap-2 items-center items-row">
                <input type="text" name="pesanan[]" id="pesanan" class="h-7 text-slate-800 leading-4 px-2 bg-indigo-100 w-8/12 rounded focus:border-none focus:outline-none" placeholder="Pesanan">
                <input type="number"  name="harga[]" id="harga" class="item-total-price h-7 text-slate-800 leading-4 px-2 bg-indigo-100 w-3/12 rounded focus:border-none focus:outline-none" placeholder="Harga">
                <button type="button" id="add-row" class="size-6 text-slate-50 bg-indigo-800 rounded items-center justify-center flex">+</button>
              </div>
            </div>
  
            <div class="w-full flex flex-col gap-2">
              <div class="flex flex-col gap-[2px] w-full">
                <div class="flex w-full">
                  <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Waktu pengambilan</p>
                  <input type="datetime-local" name="waktu" id="waktu" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
                </div>
                <div class="flex items-center w-full">
                  <p class=" text-slate-600 w-full leading-6">Data pelanggan</p>
                  <button type="button" id="modal-button" class="size-6 text-slate-50 bg-indigo-800 rounded items-center justify-center flex"><span class="icon-[fluent--people-list-16-filled] w-4"></span></button>
                </div>
                <div class="flex w-full">
                  <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Nama</p>
                  <input type="text" name="nama" id="nama-pelanggan" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
                </div>
                <div class="flex w-full">
                  <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Nomor HP</p>
                  <input type="text" name="hp" id="hp-pelanggan" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
                </div>
                <div class="flex w-full">
                  <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Diskon (%)</p>
                  <input type="number" name="diskon" id="discount" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
                </div>
                <div class="flex w-full gap-1 justify-end items-center simpan-pelanggan">
                  <label for="simpan-pelanggan" class="text-slate-800">Simpan data pelanggan</label>
                  <input type="checkbox" name="simpan_pelanggan" id="simpan-pelanggan" class="h-4 rounded focus:border-none focus:outline-none">
                </div>
              </div>
  
              <div class="flex flex-col gap-[2px] w-full">
                <div class="flex items-center w-full">
                  <p class=" text-slate-600 w-full leading-6">Pembayaran</p>
                </div>
                <div class="flex w-full">
                  <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Metode</p>
                  <div class="w-1/2 flex px-1">
                    <div class="w-1/2 flex items-center gap-2">
                      <input type="radio" name="metode" id="tunai" value="Tunai" checked>
                      <label for="tunai" class="w-full text-indigo-800 font-semibold">Tunai</label>
                    </div>
                    <div class="w-1/2 flex items-center gap-2">
                      <input type="radio" name="metode" id="nontunai" value="Non Tunai">
                      <label for="nontunai" class="w-full text-indigo-800 font-semibold whitespace-nowrap">Non Tunai</label>
                    </div>
                  </div>
                </div>
                <div class="flex w-full">
                  <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Diterima</p>
                  <input type="number" name="diterima" id="amountReceived" step="500" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2  rounded focus:border-none focus:outline-none">
                </div>
                <div class="flex w-full">
                  <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Kembali</p>
                  <input readonly type="number" name="kembali" id="changeAmount" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
                </div>
              </div>
            </div>
  
            <div class="w-full rounded-lg bg-indigo-100 p-2">
              <div class="w-full flex">
                <p class="text-xl leading-8 font-semibold w-full">Diskon</p>
                <input type="text" hidden name="total_diskon" class="total-discount">
                <p id="" class="total-discount text-xl leading-8 font-semibold whitespace-nowrap"></p>
              </div>
              <div class="w-full flex">
                <p class="text-[32px] leading-8 font-semibold w-full">Total</p>
                <input type="text" hidden name="grand_total" class="grand-total">
                <p id="" class="grand-total text-[40px] leading-10 font-bold whitespace-nowrap"></p>
              </div>
            </div>
            <div class="w-full flex gap-2">
              <button type="submit" value="proses" name="submit" class="w-6/12 p-2 leading-4 font-semibold rounded-lg bg-blue-600 text-slate-50">Proses</button>
              <button type="submit" value="bayar" name="submit" class="w-6/12 p-2 leading-4 font-semibold rounded-lg bg-yellow-600 text-slate-50">Bayar</button>
            </div>
        </form>
      </div>
    </div>

    <form action="/pesanan/edit" method="post">
    @csrf
    <!-- Modal detail -->
    <div id="modal-detail" class="hidden z-10 fixed inset-0 bg-indigo-500 bg-opacity-5 flex items-center justify-center">
      <div class="size-[480px] flex flex-col rounded-2xl bg-white p-4 gap-4">
        
        <input type="text" hidden name="id_pesanan">
        <div class="w-full flex items-center">
          <p class="w-full text-indigo-800 font-medium text-2xl leading-6">Detail pesanan</p>
          <button id="modal-close-detail" type="button" >
            <span class="icon-[mingcute--close-line] text-indigo-800"></span>
          </button>
        </div>
        <div class="size-full flex flex-col items-center gap-2">
          <div class="size-full list-pesanan flex flex-col gap-2 rounded-2xl p-2 bg-slate-50">


          </div>
          <div class="w-1/2 flex gap-2 self-end justify-end ">
            <p id="total-modal-detail" class="font-semibold text-xl leading-5 text-slate-800"></p>
            <button id="modal-button-pembayaran" type="button" class="w-20 h-5 font-semibold rounded text-xs bg-yellow-600 text-slate-50">Bayar</button>
          </div>
        </div>
        <div class="w-full flex flex-col">
          <div class="flex w-full">
            <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Waktu pengambilan</p>
            <input type="datetime-local" name="waktu" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
          </div>
          <div class="flex w-full">
            <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Nama pelanggan</p>
            <input type="text" name="nama" id="nama-pelanggan-detail" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
          </div>
          <div class="flex w-full">
            <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Nomor HP</p>
            <input type="text" name="hp" id="hp-pelanggan-detail" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
          </div>
          <div class="flex w-full items-center">
            <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Status</p>
            <div class="w-1/2 flex justify-between">
              <label for="siap" class="cursor-pointer h-5 flex rounded px-1 w-[68px] justify-center has-[:checked]:bg-indigo-600 group transition-all">
                <div class=" flex items-center gap-1 w-min ">
                  <span class="icon-[ph--clipboard-text-fill] h-3 text-indigo-600 group-has-[:checked]:text-slate-50"></span>
                  <p class="leading-3 text-xs text-indigo-600 group-has-[:checked]:text-slate-50">Siap</p>
                </div>
                <input type="radio" value="Siap" id="siap" name="status" class="peer" hidden >
              </label>
              <label for="proses" class="cursor-pointer h-5 flex rounded px-1 w-[68px] justify-center has-[:checked]:bg-blue-600 group transition-all">
                <div class=" flex items-center gap-1 w-min ">
                  <span class="icon-[fluent--clipboard-settings-20-filled] h-3 text-blue-600 group-has-[:checked]:text-slate-50"></span>
                  <p class="leading-3 text-xs text-blue-600 group-has-[:checked]:text-slate-50">Proses</p>
                </div>
                <input type="radio" value="Proses" id="proses" name="status" class="peer" hidden >
              </label>
              <label for="pending" class="cursor-pointer h-5 flex rounded px-1 w-[68px] justify-center has-[:checked]:bg-yellow-500 group transition-all">
                <div class=" flex items-center gap-1 w-min ">
                  <span class="icon-[fluent--clock-bill-20-filled] h-3 text-yellow-500 group-has-[:checked]:text-slate-50"></span>
                  <p class="leading-3 text-xs text-yellow-500 group-has-[:checked]:text-slate-50">Pending</p>
                </div>
                <input type="radio" value="Pending" id="pending" name="status" class="peer" hidden >
              </label>
              <input type="radio" name="status" hidden value="Selesai">
            </div>
          </div>
        </div>
        <div class="w-1/2 flex gap-2 self-end btn-mentari">
          <button id="hapus" type="button" class="w-6/12 p-2 leading-4 font-semibold rounded-lg bg-red-600 text-slate-50">Hapus</button>
          <button id="modal-close-detail" type="submit"  name="simpan" value="simpan" class="w-6/12 p-2 leading-4 font-semibold rounded-lg bg-blue-600 text-slate-50">Simpan</button>
        </div>
      </div>
    </div>

    <!-- Modal pembayaran -->
    <div id="modal-pembayaran" class="hidden z-20 fixed inset-0 bg-indigo-500 bg-opacity-5 flex items-center justify-center">
      <div class="size-[480px] flex flex-col rounded-2xl bg-white p-4 gap-4">
        <div class="w-full flex items-center">
          <p class="w-full text-indigo-800 font-medium text-2xl leading-6">Pembayaran pesanan</p>
          <button type="button" id="modal-close-pembayaran">
            <span class="icon-[mingcute--close-line] text-indigo-800"></span>
          </button>
        </div>
        <div class="size-full flex flex-col gap-1">
          <div class="flex flex-col gap-[2px] w-full">
            <div class="flex items-center w-full">
              <p class=" text-slate-600 w-full leading-6">Data pelanggan</p>
              <button type="button" id="modal-button-pelanggan-bayar" class="size-6 text-slate-50 bg-indigo-800 rounded items-center justify-center flex"><span class="icon-[fluent--people-list-16-filled] w-4"></span></button>
            </div>
            <div class="flex w-full">
              <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Nama</p>
              <input type="text" name="nama" id="nama-pelanggan-bayar" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
            </div>
            <div class="flex w-full">
              <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Nomor HP</p>
              <input type="text" name="hp" id="hp-pelanggan-bayar" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
            </div>
            <div class="flex w-full">
              <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Diskon (%)</p>
              <input type="number" name="diskon" id="discount-bayar" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
            </div>
            <div class="flex w-full gap-1 justify-end items-center simpan-pelanggan">
              <label for="simpan-pelanggan-modal" class="text-slate-800">Simpan data pelanggan</label>
              <input type="checkbox" name="simpan_pelanggan" id="simpan-pelanggan-modal" class="h-4 rounded focus:border-none focus:outline-none">
            </div>
          </div>

          <div class="flex flex-col gap-[2px] w-full">
            <div class="flex items-center w-full">
              <p class=" text-slate-600 w-full leading-6">Pembayaran</p>
            </div>
            <div class="flex w-full">
              <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Metode</p>
              <div class="w-1/2 flex px-1">
                <div class="w-1/2 flex items-center gap-2">
                  <input type="radio" name="metode" id="tunai-modal" value="Tunai" checked>
                  <label for="tunai-modal" class="w-full text-indigo-800 font-semibold cursor-pointer">Tunai</label>
                </div>
                <div class="w-1/2 flex items-center gap-2">
                  <input type="radio" name="metode" id="nontunai-modal" value="Non Tunai">
                  <label for="nontunai-modal" class="w-full text-indigo-800 font-semibold whitespace-nowrap cursor-pointer">Non Tunai</label>
                </div>
              </div>
            </div>
            <div class="flex w-full">
              <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Diterima</p>
              <input type="number" name="diterima" id="received-bayar" step="500" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2  rounded focus:border-none focus:outline-none">
            </div>
            <div class="flex w-full">
              <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Kembali</p>
              <input readonly type="number" name="kembali" id="change-bayar" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
            </div>
          </div>

          <div class="size-full rounded-lg bg-indigo-100 px-2">
            <div class="w-full flex">
              <p class="text-xl leading-8 font-semibold w-full">Diskon</p>
              <input type="text" hidden name="total_diskon" class="discount-modal">
              <p id="" class="discount-modal text-xl leading-8 font-semibold whitespace-nowrap">Rp 1.000</p>
            </div>
            <div class="w-full flex">
              <p class="text-[32px] leading-8 font-semibold w-full">Total</p>
              <input type="text" hidden name="grand_total" class="grand-modal">
              <p class="grand-modal text-[40px] leading-10 font-bold whitespace-nowrap">Rp 4.000</p>
            </div>
          </div>
        </div>
        <div class="w-1/2 flex gap-2 self-end">
          <button id="modal-pending-button" type="submit" name="pending" value="pending" class="w-6/12 p-2 leading-4 font-semibold rounded-lg bg-yellow-500 text-slate-50">Pending</button>
          <button id="modal-bayar-button" type="submit"  name="bayar" value="bayar" class="w-6/12 p-2 leading-4 font-semibold rounded-lg bg-lime-600 text-slate-50">Bayar</button>
        </div>
      </div>
    </div>
    </form>

    <!-- Modal data pelanggan bayar-->
    <div id="modal-pelanggan-bayar" class="hidden z-40 fixed inset-0 bg-indigo-500 bg-opacity-5 flex items-center justify-center">
      <div class="size-[480px] flex flex-col rounded-2xl bg-white p-4 gap-4">
        <div class="w-full flex">
          <p class="text-indigo-800 text-2xl leading-6 font-medium w-full">Pilih pelanggan</p>
          <div class="relative">
            <input id="search-pelanggan-bayar" type="text" class="w-44 ps-10 pe-4 py-1 rounded-2xl leading-5 bg-indigo-100 text-slate-500 placeholder-slate-500 focus:border-none focus:outline-none" placeholder="Cari pelanggan">
            <div class="absolute left-4 top-[6px]">
                <span  class="icon-[mingcute--search-line] w-4 text-slate-500"></span>
            </div>
          </div>
        </div>
        <div class="pelanggan-bayar size-full flex flex-col gap-1 bg-slate-50 rounded-2xl p-2 overflow-y-scroll">
          @foreach($pelanggans as $p)
          <label for="pelanggan-bayar{{ $p->id }}" class="pelanggan-item-bayar w-full h-10 bg-white py-1 px-2 flex gap-4 items-center rounded-lg">
            <input type="radio" name="pelanggan-bayar[]" id="pelanggan-bayar{{ $p->id }}" class="pelanggan-radio-bayar" data-id="{{ $p->id }}" data-name="{{ $p->nama }}" data-hp="{{ $p->hp}}" data-discount="{{ $p->diskon }}">
            <div class="w-full">
              <p class="nama-pelanggan leading-4 font-medium text-indigo-800">{{ $p->nama }}</p>
              <p class="instansi-hp text-xs leading-3 text-slate-600">{{ $p->hp }}</p>
            </div>
            <p class="text-slate-400  text-xs font-medium whitespace-nowrap">#{{ $p->id }}</p>
          </label>
          @endforeach
        </div>
        <div class="w-full flex justify-end gap-2">
          <button type="button" id="modal-close-pelanggan-bayar" class=" w-32 p-2 leading-4 font-semibold rounded-lg bg-slate-200 text-slate-50" disabled>Pilih</button>
        </div>
      </div>
    </div>

    <!-- Modal data pelanggan -->
    <div id="modal-content" class="hidden fixed inset-0 bg-indigo-500 bg-opacity-5 flex items-center justify-center">
      <div class="size-[480px] flex flex-col rounded-2xl bg-white p-4 gap-4">
        <div class="w-full flex">
          <p class="text-indigo-800 text-2xl leading-6 font-medium w-full">Pilih pelanggan</p>
          <div class="relative">
            <input id="search-pelanggan" type="text" class="w-44 ps-10 pe-4 py-1 rounded-2xl leading-5 bg-indigo-100 text-slate-500 placeholder-slate-500 focus:border-none focus:outline-none" placeholder="Cari pelanggan">
            <div class="absolute left-4 top-[6px]">
                <span  class="icon-[mingcute--search-line] w-4 text-slate-500"></span>
            </div>
          </div>
        </div>
        <div class="pelanggan size-full flex flex-col gap-1 bg-slate-50 rounded-2xl p-2 overflow-y-scroll">
          @foreach($pelanggans as $p)
          <label for="pelanggan{{ $p->id }}" class="pelanggan-item w-full h-10 bg-white py-1 px-2 flex gap-4 items-center rounded-lg">
            <input type="radio" name="pelanggan[]" id="pelanggan{{ $p->id }}" class="pelanggan-radio" data-id="{{ $p->id }}" data-name="{{ $p->nama }}" data-hp="{{ $p->hp}}" data-discount="{{ $p->diskon }}">
            <div class="w-full">
              <p class="nama-pelanggan leading-4 font-medium text-indigo-800">{{ $p->nama }}</p>
              <p class="instansi-hp text-xs leading-3 text-slate-600">{{ $p->hp }}</p>
            </div>
            <p class="text-slate-400  text-xs font-medium whitespace-nowrap">#{{ $p->id }}</p>
          </label>
          @endforeach
        </div>
        <div class="w-full flex justify-end gap-2">
          <button type="button" id="modal-button-close" class=" w-32 p-2 leading-4 font-semibold rounded-lg bg-slate-200 text-slate-50" disabled>Pilih</button>
        </div>
      </div>
    </div>

    <!-- Modal pending -->
    <div id="modal-pending" class="hidden fixed inset-0 bg-indigo-500 bg-opacity-5 flex items-center justify-center">
      <div class="size-[360px] flex flex-col rounded-2xl bg-white p-4 gap-4">
        <div class="w-full gap-1">
          <p class="text-red-600 font-medium text-center text-2xl leading-6">Pembayaran dipending</p>
          <p class="text-red-600 text-center text-[10px] leading-3">Anda dapat merubah status pembayaran dihalaman Transaksi</p>
        </div>
        <div class="size-full flex justify-center items-center">
          <span class="icon-[mingcute--warning-line] size-32 text-red-600"></span>
        </div>
        <div class="w-full flex gap-8 justify-center">
          <button id="modal-pending-close" class="w-[106px] bg-red-600 rounded p-2 text-slate-50 leading-4 font-semibold text-center">
            Tutup
          </button>
        </div>
      </div>
    </div>

    <!-- Modal bayar -->
    <div id="modal-bayar" class="hidden fixed inset-0 bg-indigo-500 bg-opacity-5 flex items-center justify-center">
      <div class="size-[360px] flex flex-col rounded-2xl bg-white p-4 gap-4">
        <div class="w-full">
          <p class="text-yellow-600 font-medium text-center text-2xl leading-10">Pembayaran berhasil</p>
        </div>
        <div class="size-full flex justify-center items-center">
          <span class="icon-[ph--check-circle-bold] size-32 text-yellow-600"></span>
        </div>
        <div class="w-full flex gap-8 justify-center">
          <button class="w-[106px] bg-sky-600 rounded p-2 text-slate-50 leading-4 font-semibold text-center">
            Cetak
          </button>
          <button id="modal-bayar-close" class="w-[106px] bg-red-600 rounded p-2 text-slate-50 leading-4 font-semibold text-center">
            Tutup
          </button>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    {{-- Sort --}}
    {{-- <script>
      $(document).ready(function() {
          $("#dropdown-button").click(function() {
              $("#dropdown-content").toggleClass("hidden");
          });
  
          $(document).on('click', function(event) {
              if (!$(event.target).closest('#dropdown-button').length && !$(event.target).closest('#dropdown-content').length) {
                  if (!$("#dropdown-content").hasClass('hidden')) {
                      $("#dropdown-content").addClass('hidden');
                  }
              }
          });
  
          $(".sort-option").click(function(e) {
              e.preventDefault();
              var sortBy = $(this).data('sort');
              sortData(sortBy);
              $("#dropdown-content").addClass('hidden'); // Menambahkan kelas hidden
          });
  
          function sortData(sortBy) {
              var items = $(".bg-white");
  
              items.sort(function(a, b) {
                  var aValue = getDataValue(a, sortBy);
                  var bValue = getDataValue(b, sortBy);
  
                  // Handle special cases like date sorting
                  if (sortBy === 'waktu' || sortBy === 'created') {
                      aValue = new Date(aValue);
                      bValue = new Date(bValue);
                  }
  
                  // Compare values and return sorting order
                  if (sortBy.includes('-asc')) {
                      return (aValue < bValue) ? -1 : (aValue > bValue) ? 1 : 0;
                  } else if (sortBy.includes('-desc')) {
                      return (aValue > bValue) ? -1 : (aValue < bValue) ? 1 : 0;
                  } else {
                      return 0; // No sorting
                  }
              }).each(function() {
                  var parent = $(this).parent();
                  parent.append(this);
              });
          }
  
          function getDataValue(element, sortBy) {
              var dataAttr = 'data-' + sortBy.replace(/-(asc|desc)$/, '');
              return $(element).attr(dataAttr);
          }
  
      });
    </script> --}}
    <script>
      $(document).ready(function() {
          $("#dropdown-button").click(function() {
              $("#dropdown-content").toggleClass("hidden");
          });
  
          $(document).on('click', function(event) {
              if (!$(event.target).closest('#dropdown-button').length && !$(event.target).closest('#dropdown-content').length) {
                  $("#dropdown-content").addClass('hidden');
              }
          });

          defaultSorting();

          function defaultSorting() {
              let defaultSortBy = 'created-desc';
              sortData(defaultSortBy);
          }
  
          function getDataValue(element, sortBy) {
              let dataAttr = 'data-' + sortBy.replace(/-(asc|desc)$/, '');
              return $(element).attr(dataAttr);
          }
          
          $(document).on('click', '.sort-option', function(e) {
              e.preventDefault();
              let sortBy = $(this).data('sort');
              
              if (sortBy === 'waktu-asc' || sortBy === 'waktu-desc') {
                  sortDataWithException(sortBy);
              } else if (sortBy === 'pelanggan-asc' || sortBy === 'pelanggan-desc') {
                  sortDataWithCustomerException(sortBy);
              } else {
                  sortData(sortBy);
              }
              
              $("#dropdown-content").addClass('hidden');
          });
  
          function sortDataWithException(sortBy) {
              let items = $(".bg-white");
  
              items.sort(function(a, b) {
                  let aValue = getDataValue(a, sortBy);
                  let bValue = getDataValue(b, sortBy);
  
                  if (sortBy === 'waktu-asc' || sortBy === 'waktu-desc') {
                      aValue = new Date(aValue);
                      bValue = new Date(bValue);
                  }
  
                  if (sortBy === 'waktu-asc') {
                      return (aValue < bValue) ? -1 : (aValue > bValue) ? 1 : 0;
                  } else if (sortBy === 'waktu-desc') {
                      return (aValue > bValue) ? -1 : (aValue < bValue) ? 1 : 0;
                  } else {
                      return 0;
                  }
              }).each(function() {
                  let parent = $(this).parent();
                  parent.append(this);
              });
  
              let completedItems = $(".bg-white[data-status='Selesai']");
              completedItems.each(function() {
                  let parent = $(this).parent();
                  parent.append(this);
              });
          }
  
          function sortData(sortBy) {
              let items = $(".bg-white");
  
              items.sort(function(a, b) {
                  let aValue = getDataValue(a, sortBy);
                  let bValue = getDataValue(b, sortBy);
  
                  if (sortBy === 'waktu' || sortBy === 'created') {
                      aValue = new Date(aValue);
                      bValue = new Date(bValue);
                  }
  
                  if (sortBy.includes('-asc')) {
                      return (aValue < bValue) ? -1 : (aValue > bValue) ? 1 : 0;
                  } else if (sortBy.includes('-desc')) {
                      return (aValue > bValue) ? -1 : (aValue < bValue) ? 1 : 0;
                  } else {
                      return 0;
                  }
              }).each(function() {
                  let parent = $(this).parent();
                  parent.append(this);
              });
          }
  
          function sortDataWithCustomerException(sortBy) {
              let items = $(".bg-white");
  
              items.sort(function(a, b) {
                  let aValue = getDataValue(a, 'pelanggan');
                  let bValue = getDataValue(b, 'pelanggan');
  
                  if (aValue === '' && bValue !== '') return 1;
                  if (aValue !== '' && bValue === '') return -1;
                  if (aValue === '' && bValue === '') return 0;
  
                  if (sortBy === 'pelanggan-asc') {
                      return (aValue < bValue) ? -1 : (aValue > bValue) ? 1 : 0;
                  } else if (sortBy === 'pelanggan-desc') {
                      return (aValue > bValue) ? -1 : (aValue < bValue) ? 1 : 0;
                  }
              }).each(function() {
                  let parent = $(this).parent();
                  parent.append(this);
              });
  
              let emptyCustomerItems = $(".bg-white[data-pelanggan='']");
              emptyCustomerItems.each(function() {
                  let parent = $(this).parent();
                  parent.append(this);
              });
          }
          
      });
    </script>

    {{-- Live search --}}
    <script>
      $(document).ready(function() {
        $('#search-pesanan').on('keyup', function() {
            var searchTerm = $(this).val().toLowerCase();
            var hasResults = false;
            
            $('.list-items').each(function() {
                var id = $(this).data('id').toLowerCase();
                var pesanan = $(this).data('pesanan').toLowerCase();
                var pelanggan = $(this).data('pelanggan').toLowerCase();
                var status = $(this).data('status').toLowerCase();

                if (pesanan.includes(searchTerm) || pelanggan.includes(searchTerm) || status.includes(searchTerm) || id.includes(searchTerm)) {
                    $(this).show();
                    hasResults = true;
                } else {
                    $(this).hide();
                }
            });

            if (!hasResults) {
                if ($('#no-results-message').length === 0) {
                    const notFoundMessage = $('<p></p>')
                        .attr('id', 'no-results-message')
                        .addClass('text-center text-slate-500')
                        .text('Pesanan tidak ditemukan');
                    $('#data-list').append(notFoundMessage);
                }
            } else {
                $('#no-results-message').remove();
            }
        });
      });
    </script>

    {{-- Cart --}}
    <script>
      $(document).ready(function() {
        $('#add-row').click(function() {
          var newRow = `
            <div class="w-full flex gap-2 items-center items-row">
              <input type="text" name="pesanan[]" class="h-7 text-slate-800 leading-4 px-2 bg-indigo-100 w-8/12 rounded focus:border-none focus:outline-none" placeholder="Pesanan">
              <input type="number" name="harga[]" class="item-total-price h-7 text-slate-800 leading-4 px-2 bg-indigo-100 w-3/12 rounded focus:border-none focus:outline-none" placeholder="Harga">
              <button type="button" id="delete-row" class="size-6 text-slate-50 bg-indigo-800 rounded items-center justify-center flex">
                <span class="icon-[mdi--trash]"></span>
              </button>
            </div>`;
          $('#keranjang-items').append(newRow);
        });
    
        $('#keranjang-items').on('click', '#delete-row', function() {
          $(this).parent('.items-row').remove();
          calculateDiscount();
        });
    
        function updateGrandTotal() {
          var grandTotal = 0;
          $('.item-total-price').each(function() {
            var harga = parseFloat($(this).val()) || 0;
            grandTotal += harga;
          });
          return grandTotal; 
        }
    
        $('#keranjang-items').on('input', '.item-total-price, #discount', function() {
          calculateDiscount();
        });

        $('#discount').on('input', function() {
          calculateDiscount();
        });

        function calculateDiscount() {
          let total = updateGrandTotal();
          let discountPercentage = parseFloat($('#discount').val());
          if (!isNaN(discountPercentage) && discountPercentage > 0) {
            let discountAmount = (total * discountPercentage) / 100;
            let finalTotal = total - discountAmount;
    
            $('.total-discount, input.total-discount').text('Rp ' + discountAmount.toLocaleString('id-ID'));
            $('input.total-discount').val(discountAmount);
            $('.grand-total, input.grand-total').text('Rp ' + finalTotal.toLocaleString('id-ID'));
            $('input.grand-total').val(finalTotal);
            calculateChange();
          } else {
            $('.total-discount').text('Rp 0');
            $('.grand-total').text('Rp ' + total.toLocaleString('id-ID'));
            $('input.total-discount').val(0);
            $('input.grand-total').val(total);
            calculateChange();
          }
        }

        $('#modal-button-close').on('click', function() {
            const selectedPelanggan = $('input[name="pelanggan[]"]:checked');
            const name = selectedPelanggan.data('name');
            const hp = selectedPelanggan.data('hp');
            const discount = selectedPelanggan.data('discount');
        
            $('#nama-pelanggan').val(name);
            $('#hp-pelanggan').val(hp);
            $('#discount').val(discount);

            $('#modal-content').addClass('hidden');

            calculateDiscount();
        });

        function calculateChange() {
            let amountReceived = parseFloat($('#amountReceived').val().replace(/\./g, '').replace(',', '.'));
            let grandTotal = parseFloat($('.grand-total').text().replace('Rp ', '').replace(/\./g, ''));
            
            if (!isNaN(amountReceived)) {
                let changeAmount = amountReceived - grandTotal;
                $('#changeAmount').val(changeAmount);
            } else {
                $('#changeAmount').val('');
            }
        }

        $('#amountReceived').on('input', function() {
          calculateChange();
        });

        calculateChange();
        calculateDiscount();
        updateGrandTotal();
      });
    </script>

    {{-- Modal pembayaran --}}
    <script>
      $(document).ready(function() {
        $('#modal-button-pembayaran').on('click', function() {
          $('#modal-pembayaran').removeClass('hidden');
        });

        $('#modal-close-pembayaran').on('click', function() {
            $('#modal-pembayaran').addClass('hidden');
        });

        $('#modal-pembayaran').on('click', function(event) {
          if (event.target === this) {
            $(this).addClass('hidden');
          }
        });
        
        $('#nama-pelanggan-detail, #hp-pelanggan-detail').on('input', function() {
            $('#nama-pelanggan-bayar').val($('#nama-pelanggan-detail').val());
            $('#hp-pelanggan-bayar').val($('#hp-pelanggan-detail').val());
        });
        
        const $modalPelanggan = $("#modal-pelanggan-bayar");
        const $btnPelanggan = $("#modal-button-pelanggan-bayar");
        const $btnClosePelanggan = $("#modal-close-pelanggan-bayar");

        $btnPelanggan.on('click', function() {
          $modalPelanggan.removeClass('hidden');
        });

        $modalPelanggan.on('click', function(event) {
          if (event.target === this) {
            $(this).addClass('hidden');
          }
        });
    
        function togglePilihButton() {
            const anyChecked = $('input[name="pelanggan-bayar[]"]:checked').length > 0;
            if (anyChecked) {
                $btnClosePelanggan.prop('disabled', false).removeClass('bg-slate-200').addClass('bg-green-600');
            } else {
                $btnClosePelanggan.prop('disabled', true).removeClass('bg-green-600').addClass('bg-slate-200');
            }
        }
    
        $('#search-pelanggan-bayar').on('input', function() {
            const query = $(this).val().trim().toLowerCase();
            let hasResults = false;
    
            if (query.length > 0) {
                $('.pelanggan-item-bayar').each(function() {
                    const itemName = $(this).find('.nama-pelanggan').text().toLowerCase();
                    const itemInstansiHp = $(this).find('.instansi-hp').text().toLowerCase();
                    const itemId = $(this).find('p:last').text().toLowerCase();
    
                    if (itemName.includes(query) || itemInstansiHp.includes(query) || itemId.includes(query)) {
                        $(this).show();
                        hasResults = true;
                    } else {
                        $(this).hide();
                    }
                });
            } else {
                $('.pelanggan-item-bayar').show();
                hasResults = true;
            }
    
            if (!hasResults) {
                if ($('#no-results').length === 0) {
                    const notFoundMessage = $('<p>', {
                        id: 'no-results',
                        class: 'text-center text-xs text-slate-500',
                        text: 'Pelanggan tidak ditemukan'
                    });
                    $('.pelanggan-bayar').append(notFoundMessage);
                }
            } else {
                $('#no-results').remove();
            }
        });
    
        $('input[name="pelanggan-bayar[]"]').on('change', function() {
            togglePilihButton();
        });
        
        $btnClosePelanggan.on('click', function() {
            const selectedPelanggan = $('input[name="pelanggan-bayar[]"]:checked');
            const name = selectedPelanggan.data('name');
            const hp = selectedPelanggan.data('hp');
            const discount = selectedPelanggan.data('discount');

            $('#nama-pelanggan-bayar').val(name);
            $('#hp-pelanggan-bayar').val(hp);
            $('#discount-bayar').val(discount);

            $modalPelanggan.addClass('hidden');

            calculateDiscountModal();
        });

        $('#discount-bayar').on('input', function() {
          calculateDiscountModal();
        });

        $('#received-bayar').on('input', function() {
          calculateChangeModal();
        }); 

        $('.grand-modal').on('input', function() {
          calculateChangeModal();
        }); 

        function calculateTotal() {
            let total = 0;
            $('input[name="harga[]"]').each(function() {
                const val = parseFloat($(this).val());
                if (!isNaN(val)) {
                    total += val;
                }
            });
            return total;
        }

        function calculateDiscountModal() {
          const total = calculateTotal();
          let discountPercentage = parseFloat($('#discount-bayar').val());
          if (!isNaN(discountPercentage) && discountPercentage > 0) {
            let discountAmount = (total * discountPercentage) / 100;
            let finalTotal = total - discountAmount;
    
            $('.discount-modal').text('Rp ' + discountAmount.toLocaleString('id-ID'));
            $('input.discount-modal').val(discountAmount);
            $('.grand-modal').text('Rp ' + finalTotal.toLocaleString('id-ID'));
            $('input.grand-modal').val(finalTotal);
            calculateChangeModal();
          } else {
            $('.discount-modal').text('Rp 0');
            $('input.discount-modal').val(0);
            $('.grand-modal').text('Rp ' + total.toLocaleString('id-ID'));
            $('input.grand-modal').val(total);
            calculateChangeModal();
          }
        }

        function calculateChangeModal() {
            let amountReceived = parseFloat($('#received-bayar').val().replace(/\./g, '').replace(',', '.'));
            let grandTotal = parseFloat($('.grand-modal').text().replace('Rp ', '').replace(/\./g, ''));
            
            if (!isNaN(amountReceived)) {
                let changeAmount = amountReceived - grandTotal;
                $('#change-bayar').val(changeAmount);
            } else {
                $('#change-bayar').val('');
            }
        }

        calculateChangeModal();
        calculateDiscountModal();
      });
    </script>

    {{-- Modal detail --}}   
    <script>
      $(document).ready(function() {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        function calculateTotal() {
            let total = 0;
            $('input[name="harga[]"]').each(function() {
                const val = parseFloat($(this).val());
                if (!isNaN(val)) {
                    total += val;
                }
            });
            $('#total-modal-detail').text('Rp ' + total.toLocaleString('id-ID'));
            $('.grand-modal').text('Rp ' + total.toLocaleString('id-ID'));
            $('.grand-modal').val(total);
            return total;
        }

        function calculateChangeModal() {
            let amountReceived = parseFloat($('#received-bayar').val().replace(/\./g, '').replace(',', '.'));
            let grandTotal = parseFloat($('.grand-modal').text().replace('Rp ', '').replace(/\./g, ''));
            
            if (!isNaN(amountReceived)) {
                let changeAmount = amountReceived - grandTotal;
                $('#change-bayar').val(changeAmount);
            } else {
                $('#change-bayar').val('');
            }
        }

        $('.list-items').on('click', function() {
            const id = $(this).data('id');

            $.ajax({
                url: '/pesanan/detail/' + id, // Your route to get the order details
                method: 'POST',
                success: function(data) {
                    const modal = $('#modal-detail');
                    const modalPembayaran = $('#modal-pembayaran');
                    const waktuFormat = data.waktu.split(':');
                    const waktuTanpaDetik = waktuFormat[0] + ':' + waktuFormat[1]; 

                    modal.find('input[name="id_pesanan"]').val(data.id);
                    modal.find('input[name="nama"]').val(data.nama_pelanggan);
                    modal.find('input[name="waktu"]').val(waktuTanpaDetik);
                    modal.find('input[name="hp"]').val(data.hp_pelanggan);
                    modal.find('#hapus').attr('data-id', data.id);
    
                    modalPembayaran.find('#nama-pelanggan-bayar').val(data.nama_pelanggan);
                    modalPembayaran.find('#hp-pelanggan-bayar').val(data.hp_pelanggan);
                    modal.find('.list-pesanan').empty();
    
                    data.detail_pesanans.forEach(function(detail) {
                        modal.find('.list-pesanan').append(`
                            <div class="w-full flex gap-2 items-center">
                                <input type="text" hidden name="id_detail[]" value="${detail.id}">
                                <input type="text" name="pesanan[]" value="${detail.nama}" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-8/12 rounded focus:border-none focus:outline-none" placeholder="Pesanan">
                                <input type="number" name="harga[]" value="${detail.harga}" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-4/12 rounded focus:border-none focus:outline-none" placeholder="Harga">
                            </div>
                        `);
                    });
    
                    modal.find('input[name="status"]').prop('checked', false);
                    modal.find(`input[name="status"][value="${data.status}"]`).prop('checked', true);
    
                    const bayarButton = modal.find('#modal-button-pembayaran');
                    const hapusButton = modal.find('#hapus');
                    const inputHarga = modal.find('input[name="harga[]"]');
                    const inputPesanan = modal.find('input[name="pesanan[]"]');
                    const inputWaktu = modal.find('input[name="waktu"]');
                    const inputStatus = modal.find('input[name="status"]');
                    const inputStatusSelesai = modal.find('input[name="status"][value="Selesai"]');
                    console.log(inputStatusSelesai);
                    if (data.status === 'Selesai') {
                        inputHarga.prop('readonly', true);
                        inputPesanan.prop('readonly', true);
                        inputWaktu.prop('readonly', true);
                        inputStatus.prop('disabled', true);
                        inputStatusSelesai.prop('disabled', false);
                        bayarButton.removeClass('bg-yellow-600').addClass('bg-slate-400').text('Selesai').prop('disabled', true);
                        hapusButton.removeClass('bg-red-600').addClass('bg-slate-400').prop('disabled', true);
                    } else {
                        inputHarga.prop('readonly', false);
                        inputPesanan.prop('readonly', false);
                        inputWaktu.prop('readonly', false);
                        inputStatus.prop('disabled', false);
                        bayarButton.removeClass('bg-slate-400').addClass('bg-yellow-600').text('Bayar').prop('disabled', false);
                        hapusButton.removeClass('bg-slate-400').addClass('bg-red-600').prop('disabled', false);
                    }
    
                    modal.removeClass('hidden');

                    calculateTotal();
                    
                    modal.find('input[name="harga[]"]').on('input', function() {
                      calculateChangeModal();
                      calculateTotal();
                    });
                }
            });
        });
    
        $('#modal-close-detail').on('click', function() {
            $('#modal-detail').addClass('hidden');
        });

        $('#modal-detail').on('click', function(event) {
          if (event.target === this) {
            $(this).addClass('hidden');
          }
        });
      });
    </script>
    {{-- <script>
      $(document).ready(function () {
        $('[id^=modal-button-detail]').on('click', function() {
          var id = $(this).attr('id').replace('modal-button-detail', '');
          $('#modal-detail' + id).removeClass('hidden');
        });

        $('[id^=modal-close-detail]').on('click', function() {
          var id = $(this).attr('id').replace('modal-close-detail', '');
          $('#modal-detail' + id).addClass('hidden');
        });

        $('[id^=modal-detail]').on('click', function(event) {
          if (event.target === this) {
            $(this).addClass('hidden');
          }
        });

        $('input[class^="harga-modal-detail-"]').on('input', function() {
            var classList = $(this).attr('class').split(/\s+/);
            var pesananClass = classList.find(cls => cls.startsWith('harga-modal-detail-'));
            var pesananId = pesananClass.split('harga-modal-detail-')[1];

            var total = 0;

            $('.' + pesananClass).each(function() {
                var harga = parseFloat($(this).val());

                if (!isNaN(harga)) {
                    total += harga; 
                }
            });

            $('#total-modal-detail' + pesananId).text('Rp ' + total.toLocaleString('id-ID'));
            $('.grand-modal-pembayaran' + pesananId).text('Rp ' + total.toLocaleString('id-ID'));
            $('.grand-modal-pembayaran' + pesananId).val(total);
        });

        $('input[class^="harga-modal-detail-"]').each(function() {
            $(this).trigger('input'); 
        });

      });
    </script> --}}

    {{-- Hapus pesanan --}}
    <script>
      $(document).ready(function() {
        $('#hapus').on('click', function(event) {
          event.preventDefault();

          let csrfToken = $('input[name="_token"]').val();

          let idPesanan = $(this).data('id');

          let $form = $('<form>', {
              action: '/pesanan/delete/' + idPesanan, // URL dengan ID pesanan
              method: 'POST'
          });

          $form.append($('<input>', {
              type: 'hidden',
              name: '_token',
              value: csrfToken
          }));

          $form.append($('<input>', {
              type: 'hidden',
              name: '_method',
              value: 'DELETE'
          }));

          $form.appendTo('body').submit();
        });
      });
    </script>

    {{-- Modal pelanggan--}}
    <script>
      $(document).ready(function () {
          const $modal = $("#modal-content");
          const $btn = $("#modal-button");
          const $btnClose = $("#modal-button-close");
      
          function togglePilihButton() {
              const anyChecked = $('input[name="pelanggan[]"]:checked').length > 0;
              if (anyChecked) {
                  $btnClose.prop('disabled', false).removeClass('bg-slate-200').addClass('bg-green-600');
              } else {
                  $btnClose.prop('disabled', true).removeClass('bg-green-600').addClass('bg-slate-200');
              }
          }
      
          $('#search-pelanggan').on('input', function() {
              const query = $(this).val().trim().toLowerCase();
              let hasResults = false;
      
              if (query.length > 0) {
                  $('.pelanggan-item').each(function() {
                      const itemName = $(this).find('.nama-pelanggan').text().toLowerCase();
                      const itemInstansiHp = $(this).find('.instansi-hp').text().toLowerCase();
                      const itemId = $(this).find('p:last').text().toLowerCase();
      
                      if (itemName.includes(query) || itemInstansiHp.includes(query) || itemId.includes(query)) {
                          $(this).show();
                          hasResults = true;
                      } else {
                          $(this).hide();
                      }
                  });
              } else {
                  $('.pelanggan-item').show();
                  hasResults = true;
              }
      
              if (!hasResults) {
                  if ($('#no-results').length === 0) {
                      const notFoundMessage = $('<p>', {
                          id: 'no-results',
                          class: 'text-center text-xs text-slate-500',
                          text: 'Pelanggan tidak ditemukan'
                      });
                      $('.pelanggan').append(notFoundMessage);
                  }
              } else {
                  $('#no-results').remove();
              }
          });
      
          $('input[name="pelanggan[]"]').on('change', function() {
              togglePilihButton();
          });
      
          $btn.on('click', function() {
  
              $modal.removeClass('hidden');
          });
  
          // $btnClose.on('click', function() {
          // const selectedPelanggan = $('input[name="pelanggan[]"]:checked');
          //     const name = selectedPelanggan.data('name');
          //     const hp = selectedPelanggan.data('hp');
          //     const discount = selectedPelanggan.data('discount');
  
          //     $('#nama-pelanggan').val(name);
          //     $('#hp-pelanggan').val(hp);
          //     $('#discount').val(discount);
  
          //     $modal.addClass('hidden');
  
          //     calculateDiscount();
          // });

          $btnClose.on('click', function() {
            const selectedPelanggan = $('input[name="pelanggan[]"]:checked');
            // const id= selectedPelanggan.data('id');
            const name = selectedPelanggan.data('name');
            const hp = selectedPelanggan.data('hp');
            const discount = selectedPelanggan.data('discount');
        
            // $('#id-pelanggan').val(id);
            $('#nama-pelanggan').val(name);
            $('#hp-pelanggan').val(hp);
            $('#discount').val(discount);

            $('#modal-content').addClass('hidden');

            calculateDiscount();
          });
      
          $modal.on('click', function(event) {
              if (event.target === $modal[0]) {
                  $modal.addClass('hidden');
              }
          });
      
          togglePilihButton();  // Ensure the button is correctly initialized on page load
      });
    </script>

  </body>
</html>