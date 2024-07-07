
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="./src/style.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>Mentari | Transaksi</title>
    <style>
      .shadow-mentari::-webkit-scrollbar, .list-pesanan::-webkit-scrollbar, .pelanggan::-webkit-scrollbar, .pelanggan-bayar::-webkit-scrollbar {
        width: 0;
      }
    </style>
  </head>
  <body class="font-baloo">
    <div class="h-screen w-screen flex">
      <div class="w-[240px] h-full py-10 px-6 flex flex-col gap-6 items-center">
        <img src="./img/mentari.svg" width="140" alt="" />

        <div class="w-full flex flex-col gap-2">
          <a href="/penjualan">
            <div class="w-full flex items-center gap-4 px-6 py-1 rounded-lg text-indigo-800 outline-1 outline outline-indigo-800 hover:text-slate-50 hover:bg-indigo-800 transition-all">
              <span class="icon-[mdi--cart] text-xl"></span>
              <p class="text-xl font-medium">Penjualan</p>
            </div>
          </a>
          <a href="/pesanan">
            <div class="w-full flex items-center gap-4 px-6 py-1 rounded-lg text-indigo-800 outline-1 outline outline-indigo-800 hover:text-slate-50 hover:bg-indigo-800 transition-all">
              <span class="icon-[mingcute--clipboard-fill] text-xl"></span>
              <p class="text-xl font-medium">Pesanan</p>
            </div>
          </a>
        </div>

        <div class="w-full h-[2px] bg-slate-500 rounded-sm"></div>

        <div class="w-full flex flex-col gap-2 h-full">
          <a href="">
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
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 font-semibold text-indigo-800">
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
          <a href="">
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
          </div>
        </div>
      </div>
      <div style="width: calc(100vw - 240px)" class="h-full bg-slate-100 rounded-s-[40px] p-6 gap-6 flex flex-col">
        <div class="w-full h-1/6 p-4 gap-2 rounded-2xl bg-white">
          <div class="size-full flex gap-4 justify-between">
              <div class="flex size-full p-4 gap-1 rounded-lg bg-gradient-to-l from-indigo-800 to-indigo-700 items-center">
                  <p class="leading-8 text-[36px] font-semibold text-slate-50 w-32 text-center">{{ $totalTransaksi }}</p>
                  <p class="leading-4 font-medium text-slate-50">Total<br>Transaksi</p>
              </div>
              <div class="flex size-full p-4 gap-1 rounded-lg bg-gradient-to-l from-fuchsia-700 to-fuchsia-600 items-center">
                  <p class="leading-8 text-[36px] font-semibold text-slate-50 w-32 text-center">{{ $transaksiPenjualan }}</p>
                  <p class="leading-4 font-medium text-slate-50">Tranaksi<br>Penjualan</p>
              </div>
              <div class="flex size-full p-4 gap-1 rounded-lg bg-gradient-to-l from-rose-700 to-rose-600 items-center">
                  <p class="leading-8 text-[36px] font-semibold text-slate-50 w-32 text-center">{{ $transaksiPesanan }}</p>
                  <p class="leading-4 font-medium text-slate-50">Transaksi<br>Pesanan</p>
              </div>
              <div class="flex size-full p-4 gap-1 rounded-lg bg-gradient-to-l from-yellow-700 to-yellow-500 items-center">
                  <p class="leading-8 text-[36px] font-semibold text-slate-50 w-32 text-center">{{ $transaksiPending }}</p>
                  <p class="leading-4 font-medium text-slate-50">Transaksi<br>Pending</p>
              </div>
              <div class="flex size-full p-4 gap-1 rounded-lg bg-gradient-to-l from-lime-600 to-lime-500 items-center">
                  <p class="leading-8 text-[36px] font-semibold text-slate-50 w-32 text-center">{{ $transaksiLunas }}</p>
                  <p class="leading-4 font-medium text-slate-50">Transaksi<br>Lunas</p>
              </div>
          </div>      
        </div>

        <div class="w-full h-5/6 p-4 gap-2 rounded-2xl bg-white flex flex-col">
          <div class="w-full flex gap-2">
            <p class="text-indigo-800 text-2xl leading-6 font-medium w-full">Riwayat transaksi</p>
            <div class="relative">
              <input type="text" id="search-transaksi" class="w-56 ps-10 pe-4 py-1 rounded-2xl bg-indigo-100 leading-5 text-slate-500 placeholder-slate-500 focus:border-none focus:outline-none" placeholder="Cari pesanan" />
              <div class="absolute left-4 top-[6px]">
                <span class="icon-[mingcute--search-line] w-4 text-slate-500"></span>
              </div>
            </div>
          </div>
          <div class="size-full flex flex-col gap-1">
            <div class="w-full flex py-1 px-4 rounded-lg text-indigo-800 outline-2 outline outline-indigo-800">
              <button class="sortable flex w-2/12 justify-center items-center gap-2" data-sort="id">
                <p class="leading-[26px] font-semibold">INV</p>
                <span class="icon-[fa--sort] text-xs"></span>
              </button>
              <button class="sortable flex w-2/12 justify-center items-center gap-2" data-sort="pelanggan">
                <p class="leading-[26px] font-semibold">Nama pelanggan</p>
                <span class="icon-[fa--sort] text-xs"></span>
              </button>
              <button class="sortable flex w-2/12 justify-center items-center gap-2" data-sort="created">
                <p class="leading-[26px] font-semibold">Waktu transaksi</p>
                <span class="icon-[fa--sort] text-xs"></span>
              </button>
              <button class="sortable flex w-2/12 justify-center items-center gap-2" data-sort="harga">
                <p class="leading-[26px] font-semibold">Total harga</p>
                <span class="icon-[fa--sort] text-xs"></span>
              </button>
              <button class="sortable flex w-2/12 justify-center items-center gap-2" data-sort="metode">
                <p class="leading-[26px] font-semibold">Metode</p>
                <span class="icon-[fa--sort] text-xs"></span>
              </button>
              <button class="sortable flex w-2/12 justify-center items-center gap-2" data-sort="status">
                <p class="leading-[26px] font-semibold">Status</p>
                <span class="icon-[fa--sort] text-xs"></span>
              </button>
            </div>
            <div id="transaction-list" class="size-full flex flex-col gap-1">
              @foreach($transaksis as $t)
              <button id="" class="modal-button-transaksi w-full flex py-1 px-4 rounded-lg text-indigo-800 hover:bg-indigo-50" data-id="{{ $t->id }}" data-pelanggan="{{ $t->pelanggans->nama ?? $t->nama_pelanggan }}" data-created="{{ $t->created_at }}" data-harga="{{ $t->grand_total }}" data-metode="{{ $t->metode }}" data-status="{{ $t->status }}">
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px] font-semibold">#{{ $t->id }}</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px]">{{ $t->pelanggans->nama ?? $t->nama_pelanggan }}</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px]">{{ \Carbon\Carbon::parse($t->created_at)->translatedFormat('j F Y H:i') }}</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px] font-semibold">@moneyFormat($t->grand_total)</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px]">{{ $t->metode }}</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <div class="flex rounded-lg text-slate-50 gap-2 px-4 {{ $t->status === 'Lunas' ? 'bg-yellow-500' : 'bg-lime-500' }}">
                    {{-- <span class="icon-[solar--{{ $t->status === 'Lunas' ? 'check' : 'clock' }}-square-bold] w-3"></span> --}}
                    <span class="icon-[solar--check-square-bold] w-3"></span>
                    <span class="icon-[solar--clock-square-bold] w-3"></span>
                    <p class="text-xs">{{ $t->status  }}</p> 
                  </div>
                </div>
              </button>
              @endforeach
            </div>
          </div>
          <div class="w-full flex flex-col items-center gap-1">
            <p class="text-xs text-indigo-800">Menampilkan <span class="font-semibold" id="start-index">1</span> - <span class="font-semibold" id="end-index">3</span> dari <span class="font-semibold" id="total-data">0</span> data</p>
            {{-- <p class="text-xs text-indigo-800">Menampilkan <span class="font-semibold">1 - 10</span> dari <span class="font-semibold">100</span> data</p> --}}
            <div class="w-24 h-6 outline outline-1 outline-indigo-800 rounded-lg flex">
              <button id="prev-page" class="w-1/2 h-full flex items-center justify-center text-indigo-800 hover:bg-indigo-800 hover:text-white rounded-l-lg">
                <span class="icon-[mingcute--arrow-left-fill]"></span>
              </button>
              <div class="h-full w-[1px] bg-indigo-800"></div>
              <button id="next-page" class="w-1/2 h-full flex items-center justify-center text-indigo-800 hover:bg-indigo-800 hover:text-white rounded-r-lg">
                <span class="icon-[mingcute--arrow-right-fill]"></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Modal detail --}}
    <form action="/transaksi/edit" method="post">
    @csrf
    <div id="modal-transaksi" class="hidden z-20 fixed inset-0 bg-indigo-500 bg-opacity-5 flex items-center justify-center">
      <div class="w-[948px] flex flex-col rounded-2xl bg-white p-4 gap-4">
        <div class="w-full flex items-center">
          <p class="w-full text-indigo-800 font-medium text-2xl leading-6">Detail transaksi <span id="jenis"></span></p>
          <button type="button" id="modal-close-transaksi">
            <span class="icon-[mingcute--close-line] text-indigo-800"></span>
          </button>
        </div>

        <div class="size-full flex gap-4">
          <div class="min-h-full w-1/2 list-items flex flex-col gap-2 rounded p-2 bg-slate-50">

          </div>

          <div class="flex flex-col gap-2 w-1/2">
            <div class="flex items-center w-full">
              <p class=" text-slate-600 w-full leading-6">Pembayaran</p>
            </div>
            <div class="flex w-full">
              <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Metode</p>
              <div class="w-1/2 flex px-1">
                <div class="w-1/2 flex items-center gap-2">
                  <input type="radio" name="metode" id="tunai" value="Tunai">
                  <label for="tunai" class="w-full text-indigo-800 font-semibold cursor-pointer">Tunai</label>
                </div>
                <div class="w-1/2 flex items-center gap-2">
                  <input type="radio" name="metode" id="nontunai" value="Non Tunai">
                  <label for="nontunai" class="w-full text-indigo-800 font-semibold whitespace-nowrap cursor-pointer">Non Tunai</label>
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
            <div class="flex w-full">
              <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Status</p>
              <div class="w-1/2 flex gap-2">
                <label for="lunas" class="cursor-pointer h-5 flex rounded px-1 w-1/2 justify-center has-[:checked]:bg-yellow-500 group transition-all">
                  <div class=" flex items-center gap-1 w-min ">
                    <span class="icon-[solar--check-square-bold] h-3 text-yellow-500 group-has-[:checked]:text-slate-50"></span>
                    <p class="leading-3 text-xs text-yellow-500 group-has-[:checked]:text-slate-50">Lunas</p>
                  </div>
                  <input type="radio" value="Lunas" id="lunas" name="status" class="peer" hidden >
                </label>
                <label for="pending" class="cursor-pointer h-5 flex rounded px-1 w-1/2 justify-center has-[:checked]:bg-lime-500 group transition-all">
                  <div class=" flex items-center gap-1 w-min ">
                    <span class="icon-[solar--clock-square-bold] h-3 text-lime-500 group-has-[:checked]:text-slate-50"></span>
                    <p class="leading-3 text-xs text-lime-500 group-has-[:checked]:text-slate-50">Pending</p>
                  </div>
                  <input type="radio" value="Pending" id="pending" name="status" class="peer" hidden >
                </label>
              </div>
            </div>
            <div class="size-full rounded-lg bg-indigo-100 px-2">
              <div class="w-full flex">
                <p class="text-xl leading-8 font-semibold w-full">Diskon</p>
                <input type="text" hidden name="total_diskon" class="discount-total">
                <p id="" class="discount-total text-xl leading-8 font-semibold whitespace-nowrap">Rp 1.000</p>
              </div>
              <div class="w-full flex">
                <p class="text-[32px] leading-8 font-semibold w-full">Total</p>
                <input type="text" hidden name="grand_total" class="grand-total">
                <p class="grand-total text-[40px] leading-10 font-bold whitespace-nowrap">Rp 4.000</p>
              </div>
            </div>
            <div class="w-full flex self-end justify-end ">
              <button id="" type="button" class="w-1/4 h-5 font-semibold rounded text-xs bg-yellow-600 text-slate-50">Cetak</button>
            </div>
          </div>
        </div>

        <div class="w-full flex gap-4">
          <div class="flex flex-col gap-[2px] w-full">
            <div class="flex items-center w-full">
              <p class=" text-slate-600 w-full leading-6">Data transaksi</p>
            </div>
            <div class="flex w-full">
              <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">INV</p>
              <input readonly type="text" name="inv" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
            </div>
            <div class="flex w-full">
              <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Waktu transaksi</p>
              <input readonly type="datetime-local" id="created" name="created_at" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
            </div>
            <div class="flex w-full">
              <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Waktu update</p>
              <input readonly type="datetime-local" id="updated" name="updated_at" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
            </div>
          </div>

          <div class="flex flex-col gap-[2px] w-full">
            <div class="flex items-center w-full">
              <p class=" text-slate-600 w-full leading-6">Data pelanggan</p>
              <button type="button" id="modal-button-pelanggan" class="size-6 text-slate-50 bg-indigo-800 rounded items-center justify-center flex"><span class="icon-[fluent--people-list-16-filled] w-4"></span></button>
            </div>
            <input type="text" hidden name="id_pelanggan">
            <div class="flex w-full">
              <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Nama</p>
              <input type="text" name="nama" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
            </div>
            <div class="flex w-full">
              <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Nomor HP</p>
              <input type="text" name="hp" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
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
        </div>

        <div class="w-1/4 flex gap-2 self-end ps-1">
          <button id="hapus" type="button" class="w-1/2 p-2 leading-4 font-semibold rounded-lg bg-red-600 text-slate-50">Hapus</button>
          <button id="" type="submit"  name="simpan" value="simpan" class="w-1/2 p-2 leading-4 font-semibold rounded-lg bg-blue-600 text-slate-50">Simpan</button>
        </div>
      </div>
    </div>
    </form>

    <!-- Modalpelanggan-->
    <div id="modal-pelanggan" class="hidden z-40 fixed inset-0 bg-indigo-500 bg-opacity-5 flex items-center justify-center">
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
          <button type="button" id="modal-close-pelanggan" class=" w-32 p-2 leading-4 font-semibold rounded-lg bg-slate-200 text-slate-50" disabled>Pilih</button>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- <script>
      $(document).ready(function() {
        var currentPage = 1;
        var itemsPerPage = 4;
        var data = getData();
        var totalItems = data.length;

        function getData() {
          var data = [];
          $('#transaction-list button').each(function() {
            var item = {
              id: $(this).data('id'),
              pelanggan: $(this).data('pelanggan') || '',
              created: $(this).data('created'),
              harga: parseFloat($(this).data('harga')),
              metode: $(this).data('metode'),
              status: $(this).data('status')
            };
            data.push(item);
          });
          return data;
        }

        function populateList(data, page) {
          var list = $('#transaction-list');
          list.empty();

          var start = (page - 1) * itemsPerPage;
          var end = start + itemsPerPage;
          var paginatedData = data.slice(start, end);

          paginatedData.forEach(function(item) {
            var div = $('<button class="w-full flex py-1 px-4 rounded-lg text-indigo-800 hover:bg-indigo-50" data-id="' + item.id + '" data-pelanggan="' + item.pelanggan + '" data-created="' + item.created + '" data-harga="' + item.harga + '" data-metode="' + item.metode + '" data-status="' + item.status + '"></button>');
            div.append('<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px] font-semibold">#' + item.id + '</p></div>');
            div.append('<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px]">' + item.pelanggan + '</p></div>');
            div.append('<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px]">' + item.created + '</p></div>');
            div.append('<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px] font-semibold">Rp ' + item.harga.toLocaleString('id-ID') + '</p></div>');
            div.append('<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px]">' + item.metode + '</p></div>');
            div.append('<div class="flex w-2/12 justify-center items-center gap-2"><div class="flex rounded-lg text-slate-50 gap-2 px-4 ' + (item.status === 'Lunas' ? 'bg-yellow-500' : 'bg-lime-500') + '"><span class="icon-[solar--' + (item.status === 'Lunas' ? 'check' : 'clock') + '-square-bold] w-3"></span><p class="text-xs">' + item.status + '</p></div></div>');
            list.append(div);
          });

          $('#start-index').text(start + 1);
          $('#end-index').text(Math.min(end, totalItems));
          $('#total-data').text(totalItems);
        }

        function updatePaginationButtons() {
          $('#prev-page').prop('disabled', currentPage === 1);
          $('#next-page').prop('disabled', currentPage === Math.ceil(totalItems / itemsPerPage));
        }

        function sortData(column, order) {
          data.sort(function(a, b) {
            var aValue = a[column];
            var bValue = b[column];

            if (column === 'pelanggan') {
              // Handle empty or null values
              if (aValue === '' || aValue === null) return 1;
              if (bValue === '' || bValue === null) return -1;
            }

            if (order === 'asc') {
              return aValue > bValue ? 1 : -1;
            } else {
              return aValue < bValue ? 1 : -1;
            }
          });
        }

        $('.sortable').on('click', function() {
          var column = $(this).data('sort');
          var order = $(this).hasClass('asc') ? 'desc' : 'asc';
          $('.sortable').removeClass('asc desc');
          $(this).addClass(order);

          sortData(column, order);
          currentPage = 1;
          populateList(data, currentPage);
          updatePaginationButtons();
        });

        $('#prev-page').on('click', function() {
          if (currentPage > 1) {
            currentPage--;
            populateList(data, currentPage);
            updatePaginationButtons();
          }
        });

        $('#next-page').on('click', function() {
          if (currentPage < Math.ceil(totalItems / itemsPerPage)) {
            currentPage++;
            populateList(data, currentPage);
            updatePaginationButtons();
          }
        });

        populateList(data, currentPage);
        updatePaginationButtons();
      });
    </script> --}}
    {{-- Sort, Live Search, Pagination --}}
    <script>
      $(document).ready(function() {
        var currentPage = 1;
        var itemsPerPage = 4;
        var data = getData();
        var totalItems = data.length;
   
        function getData() {
          var data = [];
          $('#transaction-list button').each(function() {
            var item = {
              id: $(this).data('id'),
              pelanggan: $(this).data('pelanggan') || '',
              created: $(this).data('created'),
              harga: parseFloat($(this).data('harga')),
              metode: $(this).data('metode'),
              status: $(this).data('status')
            };
            data.push(item);
          });
          return data;
        }
   
        function populateList(data, page) {
          var list = $('#transaction-list');
          list.empty();
   
          var start = (page - 1) * itemsPerPage;
          var end = start + itemsPerPage;
          var paginatedData = data.slice(start, end);
   
          function formatDate(dateString) {
            const months = [
              "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli",
              "Agustus", "September", "Oktober", "November", "Desember"
            ];

            const date = new Date(dateString);
            const day = date.getDate();
            const month = months[date.getMonth()];
            const year = date.getFullYear();
            const hours = String(date.getHours()).padStart(2, '0');
            const minutes = String(date.getMinutes()).padStart(2, '0');

            return `${day} ${month} ${year} ${hours}:${minutes}`;
          }

          paginatedData.forEach(function(item) {
            var div = $('<button class="modal-button-transaksi w-full flex py-1 px-4 rounded-lg text-indigo-800 hover:bg-indigo-50" data-id="' + item.id + '" data-pelanggan="' + item.pelanggan + '" data-created="' + item.created + '" data-harga="' + item.harga + '" data-metode="' + item.metode + '" data-status="' + item.status + '"></button>');
            div.append('<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px] font-semibold">#' + item.id + '</p></div>');
            div.append('<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px]">' + item.pelanggan + '</p></div>');
            div.append('<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px]">' + formatDate(item.created) + '</p></div>');
            div.append('<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px] font-semibold">Rp ' + item.harga.toLocaleString('id-ID') + '</p></div>');
            div.append('<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px]">' + item.metode + '</p></div>');
            div.append('<div class="flex w-2/12 justify-center items-center gap-2"><div class="flex rounded-lg text-slate-50 gap-2 px-4 ' + (item.status === 'Lunas' ? 'bg-yellow-500' : 'bg-lime-500') + '"><span class="icon-[solar--' + (item.status === 'Lunas' ? 'check' : 'clock') + '-square-bold] w-3"></span><p class="text-xs">' + item.status + '</p></div></div>');
            list.append(div);
          });
   
          $('#start-index').text(start + 1);
          $('#end-index').text(Math.min(end, totalItems));
          $('#total-data').text(totalItems);
        }
   
        function updatePaginationButtons() {
          $('#prev-page').prop('disabled', currentPage === 1);
          $('#next-page').prop('disabled', currentPage === Math.ceil(totalItems / itemsPerPage));
        }
   
        function sortData(column, order) {
          data.sort(function(a, b) {
            var aValue = a[column];
            var bValue = b[column];
   
            if (column === 'pelanggan') {
              // Handle empty or null values
              if (aValue === '' || aValue === null) return 1;
              if (bValue === '' || bValue === null) return -1;
            }
   
            if (order === 'asc') {
              return aValue > bValue ? 1 : -1;
            } else {
              return aValue < bValue ? 1 : -1;
            }
          });
        }
   
        function filterData(searchTerm) {
          var filteredData = data.filter(function(item) {
            return item.id.toString().toLowerCase().includes(searchTerm) ||
                   item.pelanggan.toString().toLowerCase().includes(searchTerm) ||
                   item.status.toString().toLowerCase().includes(searchTerm) ||
                   item.metode.toString().toLowerCase().includes(searchTerm);
          });
          totalItems = filteredData.length;
          currentPage = 1;
          populateList(filteredData, currentPage);
          updatePaginationButtons();
        }
   
        $('#search-transaksi').on('keyup', function() {
          var searchTerm = $(this).val().toLowerCase();
          filterData(searchTerm);
        });
   
        $('.sortable').on('click', function() {
          var column = $(this).data('sort');
          var order = $(this).hasClass('asc') ? 'desc' : 'asc';
          $('.sortable').removeClass('asc desc');
          $(this).addClass(order);
   
          sortData(column, order);
          currentPage = 1;
          populateList(data, currentPage);
          updatePaginationButtons();
        });
   
        $('#prev-page').on('click', function() {
          if (currentPage > 1) {
            currentPage--;
            populateList(data, currentPage);
            updatePaginationButtons();
          }
        });
   
        $('#next-page').on('click', function() {
          if (currentPage < Math.ceil(totalItems / itemsPerPage)) {
            currentPage++;
            populateList(data, currentPage);
            updatePaginationButtons();
          }
        });
   
        populateList(data, currentPage);
        updatePaginationButtons();
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

        $('#transaction-list').on('click', '.modal-button-transaksi', function() {
          const id = $(this).data('id');
          $.ajax({
            url: '/transaksi/detail/' + id,
            method: 'POST',
            success: function(response) {
              const data = response.transaksi;
              const pesanan = response.pesanan;
              const penjualan = response.penjualan;

              const modal = $('#modal-transaksi');
              const created = new Date(new Date(data.created_at).getTime() + 7 * 60 * 60 * 1000).toISOString().slice(0, 16).replace('T', ' ');
              const updated = new Date(new Date(data.updated_at).getTime() + 7 * 60 * 60 * 1000).toISOString().slice(0, 16).replace('T', ' ');
              
              modal.find('input[name="inv"]').val(data.id);
              modal.find('input[name="created_at"]').val(created);
              modal.find('input[name="updated_at"]').val(updated);
              modal.find('input[name="diterima"]').val(data.diterima);
              modal.find('input[name="kembali"]').val(data.kembali);
              modal.find('#hapus').attr('data-id', data.id);

              modal.find('input[name="nama"]').val(data.pelanggans && data.pelanggans.nama ? data.pelanggans.nama : (data.nama_pelanggan || ''));
              modal.find('input[name="hp"]').val(data.pelanggans && data.pelanggans.hp ? data.pelanggans.hp : (data.hp_pelanggan || ''));
              modal.find('input[name="diskon"]').val(data.diskon);
              modal.find('input[name="id_pelanggan"]').val(data.pelanggan_id);

              modal.find('input[name="status"]').prop('checked', false);
              modal.find(`input[name="status"][value="${data.status}"]`).prop('checked', true);
              modal.find('input[name="metode"]').prop('checked', false);
              modal.find(`input[name="metode"][value="${data.metode}"]`).prop('checked', true);

              modal.find('.discount-total').val(data.total_diskon).text(data.total_diskon)
              modal.find('.grand-total').val(data.grand_total).text(data.grand_total)
              modal.find('.discount-total').text('Rp ' + data.total_diskon.toLocaleString('id-ID'));
              modal.find('.grand-total').text('Rp ' + data.grand_total.toLocaleString('id-ID'));

              modal.find('#jenis').text(data.id.includes('TPS-') ? 'pesanan' : 'penjualan' );
              modal.find('.list-items').empty();
              if (data.id.includes('TPS-')) {
                pesanan.forEach(function(ps) {
                  ps.detail_pesanans.forEach(function(detail) {
                    modal.find('.list-items').append(`
                        <div class="w-full flex gap-2 items-center">
                            <input readonly type="text" name="pesanan" value="${detail.nama}" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-8/12 rounded focus:border-none focus:outline-none" placeholder="Pesanan">
                            <input readonly type="number" name="harga" value="${detail.harga}" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-4/12 rounded focus:border-none focus:outline-none" placeholder="Harga">
                        </div>
                    `);
                  });
                });
              } else if (data.id.includes('TPJ-')) {
                penjualan.forEach(function(pj) {
                  modal.find('.list-items').append(`
                    <div class="w-full flex gap-2 cart-item"> 
                      <div class="flex flex-col w-full">
                          <p id="nama-barang" class="leading-4 ${pj.barangs?.nama ? 'text-slate-800' : 'text-slate-400' } ">${pj.barangs?.nama ?? 'barang terhapus'}</p>
                          <p id="harga-barang" class="text-xs leading-3 text-slate-500">${pj.barangs?.harga ? 'Rp ' : ''} ${pj.barangs?.harga.toLocaleString('id-ID') ?? ''}</p>
                      </div>
                      <p id="jumlah-barang" class="text-slate-800 font-semibold text-center">${pj.jumlah}x</p>
                      <p id="total-harga" class="font-medium text-slate-800 whitespace-nowrap text-end min-w-24 item-total-price">Rp ${pj.total_harga.toLocaleString('id-ID')}</p>
                    </div>
                  `);
                });
              }

              function calculateChange() {
                let amountReceived = $('#received-bayar').val();
                let grandTotal = $('input.grand-total').val();

                if (amountReceived) {
                  let changeAmount = amountReceived - grandTotal;
                  $('#change-bayar').val(changeAmount);
                } else {
                  $('#change-bayar').val('');
                }
              }

              $('#received-bayar').on('input', function() {
                calculateChange();
              });

              $('input.grand-total').on('input', function() {
                calculateChange();
              });

              calculateChange();

              function calculateDiscount() {
                let discount = parseFloat($('#discount-bayar').val());
                let discountTotalText = $('.discount-total').text().replace('Rp ', '').replace(/\./g, '').replace(',', '.');
                let grandTotalText = $('.grand-total').text().replace('Rp ', '').replace(/\./g, '').replace(',', '.');

                let discountTotal = isNaN(parseFloat(discountTotalText)) ? 0 : parseFloat(discountTotalText);
                let grandTotal = isNaN(parseFloat(grandTotalText)) ? 0 : parseFloat(grandTotalText);

                if (!isNaN(discount)) {
                    let originalTotal = discountTotal + grandTotal;
                    let discountNew = originalTotal * (discount / 100);
                    let grandNew = originalTotal - discountNew;

                    $('input.grand-total').val(grandNew.toFixed());
                    $('.grand-total').text('Rp ' + grandNew.toLocaleString('id-ID'));
                    $('input.discount-total').val(discountNew.toFixed());
                    $('.discount-total').text('Rp ' + discountNew.toLocaleString('id-ID'));
                }
                calculateChange();
              }

              $('#discount-bayar').on('input', function() {
                  calculateDiscount();
                  calculateChange();
              });             

              modal.removeClass('hidden');
            }
          });
        });

        $('#modal-close-transaksi').on('click', function() {
            $('#modal-transaksi').addClass('hidden');
        });

        $('#modal-transaksi').on('click', function(event) {
          if (event.target === this) {
            $(this).addClass('hidden');
          }
        });
      });
    </script>

    {{-- Modal pelanggan --}}
    <script>
      $(document).ready(function() {
        const $modalPelanggan = $("#modal-pelanggan");
        const $btnPelanggan = $("#modal-button-pelanggan");
        const $btnClosePelanggan = $("#modal-close-pelanggan");
        function calculateChange() {
          let amountReceived = $('#received-bayar').val();
          let grandTotal = $('input.grand-total').val();

          if (amountReceived) {
            let changeAmount = amountReceived - grandTotal;
            $('#change-bayar').val(changeAmount);
          } else {
            $('#change-bayar').val('');
          }
        }

        function calculateDiscount() {
          let discount = parseFloat($('#discount-bayar').val());
          let discountTotalText = $('.discount-total').text().replace('Rp ', '').replace(/\./g, '').replace(',', '.');
          let grandTotalText = $('.grand-total').text().replace('Rp ', '').replace(/\./g, '').replace(',', '.');

          let discountTotal = isNaN(parseFloat(discountTotalText)) ? 0 : parseFloat(discountTotalText);
          let grandTotal = isNaN(parseFloat(grandTotalText)) ? 0 : parseFloat(grandTotalText);

          if (!isNaN(discount)) {
              let originalTotal = discountTotal + grandTotal;
              let discountNew = originalTotal * (discount / 100);
              let grandNew = originalTotal - discountNew;

              $('input.grand-total').val(grandNew.toFixed());
              $('.grand-total').text('Rp ' + grandNew.toLocaleString('id-ID'));
              $('input.discount-total').val(discountNew.toFixed());
              $('.discount-total').text('Rp ' + discountNew.toLocaleString('id-ID'));
          }
          calculateChange();
        }

        $('#discount-bayar').on('input', function() {
            calculateDiscount();
            calculateChange();
        });

        $btnPelanggan.on('click', function() {
          $modalPelanggan.removeClass('hidden');
        });

        $modalPelanggan.on('click', function(event) {
          if (event.target === this) {
            $(this).addClass('hidden');
          }
        });
    
        function togglePilihButton() {
            const anyChecked = $('input[name="pelanggan[]"]:checked').length > 0;
            if (anyChecked) {
                $btnClosePelanggan.prop('disabled', false).removeClass('bg-slate-200').addClass('bg-green-600');
            } else {
                $btnClosePelanggan.prop('disabled', true).removeClass('bg-green-600').addClass('bg-slate-200');
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
        
        $btnClosePelanggan.on('click', function() {
            const selectedPelanggan = $('input[name="pelanggan[]"]:checked');
            const name = selectedPelanggan.data('name');
            const hp = selectedPelanggan.data('hp');
            const discount = selectedPelanggan.data('discount');

            $('input[name="nama"]').val(name);
            $('input[name="hp"]').val(hp);
            $('input[name="diskon"]').val(discount);

            $modalPelanggan.addClass('hidden');

            calculateDiscount();
            calculateChange();
        });

        calculateChange();
        calculateDiscount();
      })
    </script>

    {{-- Hapus transaksi--}}
    <script>
      $(document).ready(function() {
        $('#hapus').on('click', function(event) {
          event.preventDefault();

          let csrfToken = $('input[name="_token"]').val();

          let idTransaksi = $(this).data('id');

          let $form = $('<form>', {
              action: '/transaksi/delete/' + idTransaksi, // URL dengan ID pesanan
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
  </body>
</html>