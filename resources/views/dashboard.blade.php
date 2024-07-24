{{-- @dd($dailyStatistics) --}}
<!DOCTYPE html>
<html>
  <x-head title="Dashboard" />
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
            <div class="w-full flex items-center gap-4 px-6 py-1 rounded-lg text-indigo-800 outline-1 outline outline-indigo-800 hover:text-slate-50 hover:bg-indigo-800 transition-all">
              <span class="icon-[mingcute--clipboard-fill] text-xl"></span>
              <p class="text-xl font-medium">Pesanan</p>
            </div>
          </a>
        </div>

        <div class="w-full h-[2px] bg-slate-500 rounded-sm"></div>

        <div class="w-full flex flex-col gap-2 h-full">
          <a href="/">
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 font-semibold text-indigo-800">
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
          </div>
        </div>
      </div> --}}
      <x-menu />
      
      <div style="width: calc(100vw - 240px)" class="h-full bg-slate-100 rounded-s-[40px] p-6 gap-6 flex flex-col">

        <div class="w-full h-1/2 flex gap-6">

            <div class="w-8/12 min-h-full p-4 gap-2 rounded-2xl bg-white flex flex-col">
                <div class="w-full flex gap-2 items-center">
                    <p class="text-indigo-800 text-2xl leading-7 font-medium w-full">Statistik transaksi</p>
                    <p class="text-indigo-800 text-base whitespace-nowrap">{{ \Carbon\Carbon::parse($dailyStatistics[0]['tanggal'])->isoFormat('D MMMM') }} - {{ \Carbon\Carbon::parse($dailyStatistics[6]['tanggal'])->isoFormat('D MMMM YYYY') }}</p>
                </div>
                <div class="size-full flex justify-between">
                  @foreach($dailyStatistics as $d)
                  <div class="flex flex-col">
                    <div class="flex h-full gap-2 items-end ">
                      <div class="w-10 flex flex-col">
                        <p class="text-indigo-400 font-semibold text-center w-full">{{ $d['total_pesanan'] }}</p>
                        <div class="w-full bg-indigo-400 rounded-t-2xl" style="height: {{ $d['total_pesanan'] * 8 }}px;"></div>
                      </div>
                      <div class="w-10 flex flex-col">
                        <p class="text-indigo-600 font-semibold text-center w-full">{{ $d['total_penjualan'] }}</p>
                        <div class="w-full bg-indigo-600 rounded-t-2xl" style="height: {{ $d['total_penjualan'] * 8 }}px;"></div>
                      </div>
                    </div>
                    <p class="text-indigo-800 font-medium text-center w-full">{{ $d['hari'] }}</p>
                  </div>
                  @endforeach
                  {{-- <div class="flex flex-col">
                    <div class="flex h-full gap-2 items-end ">
                      <div class="w-10 flex flex-col">
                        <p class="text-indigo-400 font-semibold text-center w-full">26</p>
                        <div class="w-full h-20 bg-indigo-400 rounded-t-2xl"></div>
                      </div>
                      <div class="w-10 flex flex-col">
                        <p class="text-indigo-600 font-semibold text-center w-full">26</p>
                        <div class="w-full h-32 bg-indigo-600 rounded-t-2xl"></div>
                      </div>
                    </div>
                    <p class="text-indigo-800 font-medium text-center w-full">Selasa</p>
                  </div>
                  <div class="flex flex-col">
                    <div class="flex h-full gap-2 items-end ">
                      <div class="w-10 flex flex-col">
                        <p class="text-indigo-400 font-semibold text-center w-full">26</p>
                        <div class="w-full h-20 bg-indigo-400 rounded-t-2xl"></div>
                      </div>
                      <div class="w-10 flex flex-col">
                        <p class="text-indigo-600 font-semibold text-center w-full">26</p>
                        <div class="w-full h-32 bg-indigo-600 rounded-t-2xl"></div>
                      </div>
                    </div>
                    <p class="text-indigo-800 font-medium text-center w-full">Rabu</p>
                  </div>
                  <div class="flex flex-col">
                    <div class="flex h-full gap-2 items-end ">
                      <div class="w-10 flex flex-col">
                        <p class="text-indigo-400 font-semibold text-center w-full">26</p>
                        <div class="w-full h-20 bg-indigo-400 rounded-t-2xl"></div>
                      </div>
                      <div class="w-10 flex flex-col">
                        <p class="text-indigo-600 font-semibold text-center w-full">26</p>
                        <div class="w-full h-32 bg-indigo-600 rounded-t-2xl"></div>
                      </div>
                    </div>
                    <p class="text-indigo-800 font-medium text-center w-full">Kamis</p>
                  </div>
                  <div class="flex flex-col">
                    <div class="flex h-full gap-2 items-end ">
                      <div class="w-10 flex flex-col">
                        <p class="text-indigo-400 font-semibold text-center w-full">26</p>
                        <div class="w-full h-20 bg-indigo-400 rounded-t-2xl"></div>
                      </div>
                      <div class="w-10 flex flex-col">
                        <p class="text-indigo-600 font-semibold text-center w-full">26</p>
                        <div class="w-full h-32 bg-indigo-600 rounded-t-2xl"></div>
                      </div>
                    </div>
                    <p class="text-indigo-800 font-medium text-center w-full">Jumat</p>
                  </div>
                  <div class="flex flex-col">
                    <div class="flex h-full gap-2 items-end ">
                      <div class="w-10 flex flex-col">
                        <p class="text-indigo-400 font-semibold text-center w-full">26</p>
                        <div class="w-full h-20 bg-indigo-400 rounded-t-2xl"></div>
                      </div>
                      <div class="w-10 flex flex-col">
                        <p class="text-indigo-600 font-semibold text-center w-full">26</p>
                        <div class="w-full h-32 bg-indigo-600 rounded-t-2xl"></div>
                      </div>
                    </div>
                    <p class="text-indigo-800 font-medium text-center w-full">Sabtu</p>
                  </div>
                  <div class="flex flex-col">
                    <div class="flex h-full gap-2 items-end ">
                      <div class="w-10 flex flex-col">
                        <p class="text-indigo-400 font-semibold text-center w-full">26</p>
                        <div class="w-full h-20 bg-indigo-400 rounded-t-2xl"></div>
                      </div>
                      <div class="w-10 flex flex-col">
                        <p class="text-indigo-600 font-semibold text-center w-full">26</p>
                        <div class="w-full h-32 bg-indigo-600 rounded-t-2xl"></div>
                      </div>
                    </div>
                    <p class="text-indigo-800 font-medium text-center w-full">Minggu</p>
                  </div> --}}
                </div>
                <div class="w-full flex gap-12 justify-center">
                  <div class="flex gap-2">
                    <div class="min-w-4 h-4 bg-indigo-400 rounded-full"></div>
                    <p class="text-indigo-400 font-medium text-xs">Pesanan</p>
                  </div>
                  <div class="flex gap-2">
                    <div class="min-w-4 h-4 bg-indigo-600 rounded-full"></div>
                    <p class="text-indigo-600 font-medium text-xs">Penjualan</p>
                  </div>
                </div>
            </div>

            <div class="w-4/12 min-h-full p-4 gap-2 rounded-2xl bg-white flex flex-col">
              <div class="w-full flex gap-2 items-center">
                <p class="text-indigo-800 text-2xl leading-7 font-medium w-full">Hari ini</p>
              </div>
              <div class="size-full flex flex-col justify-between">
                <div class="w-full flex items-center p-2 bg-slate-100 gap-2 rounded-lg">
                  <div class="min-w-8 h-8 bg-gradient-to-t from-blue-700 to-blue-600 rounded-lg flex justify-center items-center">
                    <span class="icon-[fa-solid--list-ol] text-slate-50 w-3"></span>
                  </div>
                  <p class="text-xl leading-8 text-slate-800 w-full">Transaksi</p>
                  <p class="text-2xl font-semibold text-blue-600">{{ $transaksiToday }}</p>
                </div>
                <div class="w-full flex items-center p-2 bg-slate-100 gap-2 rounded-lg">
                  <div class="min-w-8 h-8 bg-gradient-to-t from-red-600 to-red-500 rounded-lg flex justify-center items-center">
                    <span class="icon-[fluent--text-bullet-list-square-clock-20-filled] text-slate-50 w-4"></span>
                  </div>
                  <p class="text-xl leading-8 text-slate-800 w-full">Transaksi pending</p>
                  <p class="text-2xl font-semibold text-red-500">{{ $pendingToday }}</p>
                </div>
                <div class="w-full flex items-center p-2 bg-slate-100 gap-2 rounded-lg">
                  <div class="min-w-8 h-8 bg-gradient-to-t from-lime-900 to-lime-800 rounded-lg flex justify-center items-center">
                    <span class="icon-[mdi--box-check] text-slate-50 w-4"></span>
                  </div>
                  <p class="text-xl leading-8 text-slate-800 w-full">Barang terjual</p>
                  <p class="text-2xl font-semibold text-lime-800">{{ $terjualToday }}</p>
                </div>
                <div class="w-full flex items-center p-2 bg-slate-100 gap-2 rounded-lg">
                  <div class="min-w-8 h-8 bg-gradient-to-t from-yellow-600 to-yellow-500 rounded-lg flex justify-center items-center">
                    <span class="icon-[mdi--clipboard-clock] text-slate-50 w-4"></span>
                  </div>
                  <p class="text-xl leading-8 text-slate-800 w-full">Pesanan akan diambil</p>
                  <p class="text-2xl font-semibold text-yellow-500">{{ $diambilToday }}</p>
                </div>
                <div class="w-full flex items-center p-2 bg-slate-100 gap-2 rounded-lg">
                  <div class="min-w-8 h-8 bg-gradient-to-t from-lime-600 to-lime-500 rounded-lg flex justify-center items-center">
                    <span class="icon-[fluent--clipboard-checkmark-16-filled] text-slate-50 w-4"></span>
                  </div>
                  <p class="text-xl leading-8 text-slate-800 w-full">Pesanan selesai</p>
                  <p class="text-2xl font-semibold text-lime-500">{{ $selesaiToday }}</p>
                </div>
              </div>

            </div>

        </div>

        <div class="h-1/2 w-full p-4 gap-2 rounded-2xl bg-white flex flex-col">
          <div class="w-full flex gap-2 items-center">
            <p class="text-indigo-800 text-2xl leading-7 font-medium w-full">Pesanan diambil hari ini</p>
          </div>
          <div class="size-full flex flex-col gap-1">
            <div class="w-full flex py-1 px-4 rounded-lg text-indigo-800 outline-2 outline outline-indigo-800">
              <button class="sortable flex w-2/12 justify-center items-center gap-2" data-sort="id">
                <p class="leading-[26px] font-semibold">ID</p>
              </button>
              <button class="sortable flex w-2/12 justify-center items-center gap-2" data-sort="pelanggan">
                <p class="leading-[26px] font-semibold">Nama pelanggan</p>
              </button>
              <button class="sortable flex w-2/12 justify-center items-center gap-2" data-sort="created">
                <p class="leading-[26px] font-semibold">Nomor HP</p>
              </button>
              <button class="sortable flex w-2/12 justify-center items-center gap-2" data-sort="harga">
                <p class="leading-[26px] font-semibold">Pesanan</p>
              </button>
              <button class="sortable flex w-2/12 justify-center items-center gap-2" data-sort="metode">
                <p class="leading-[26px] font-semibold">Jam pengambilan</p>
              </button>
              <button class="sortable flex w-2/12 justify-center items-center gap-2" data-sort="status">
                <p class="leading-[26px] font-semibold">Status</p>
              </button>
            </div>
            <div id="pesanan-list" class="size-full flex flex-col gap-1">
              @foreach($pesanans as $p)
              <button class="modal-button-pesanan w-full flex py-1 px-4 rounded-lg text-indigo-800 hover:bg-indigo-50" data-id="{{ $p->id }}" data-pelanggan="{{ $p->nama_pelanggan }}" data-hp="{{ $p->hp_pelanggan }}" data-pesanan="{{ $p->detail_pesanans->first()->nama }}" data-waktu="{{ \Carbon\Carbon::parse($p->waktu)->translatedFormat('H:i') }}" data-status="{{ $p->status }}">
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px] font-semibold">#{{ $p->id }}</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px]">{{ $p->nama_pelanggan }}</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px]">{{ $p->hp_pelanggan }}</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px] font-semibold">{{ $p->detail_pesanans->first()->nama }}</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px]">{{ \Carbon\Carbon::parse($p->waktu)->translatedFormat('H:i') }}</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  {!! ($p->status === 'Proses') ? '<span class="icon-[fluent--clipboard-settings-20-filled] h-4 text-blue-600"></span>' : (($p->status === 'Selesai') ? '<span class="icon-[fluent--clipboard-checkmark-16-filled] h-4 text-lime-500"></span>' : (($p->status === 'Siap') ? '<span class="icon-[ph--clipboard-text-fill] h-4 text-indigo-600"></span>' : '<span class="icon-[fluent--clock-bill-20-filled] h-4 text-yellow-500"></span>')) !!}
                  <p class="leading-5 {{ ($p->status === 'Proses') ? 'text-blue-600' : (($p->status === 'Selesai') ? 'text-lime-500' : (($p->status === 'Siap') ? 'text-indigo-600' : 'text-yellow-500')) }}">{{ $p->status }}</p>
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

    <form action="/pesanan/edit" method="post">
    @csrf
    <input type="text" hidden name="page" value="dashboard">
    <!-- Modal detail -->
    <div id="modal-detail" class="hidden z-10 fixed inset-0 bg-indigo-500 bg-opacity-5 flex items-center justify-center">
      <div class="size-[480px] flex flex-col rounded-2xl bg-white p-4 gap-4">
        
        <input type="text" hidden name="id_pesanan">
        <div class="w-full flex items-center">
          <p class="w-full text-indigo-800 font-medium text-2xl leading-6">Detail pesanan</p>
          <="icon-[mingcute--close-line] text-indigo-800"></span>
          </button>button id="modal-close-detail" type="button" >
            <span class
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
    
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Pagination --}}
    <script>
      $(document).ready(function() {
        var currentPage = 1;
        var itemsPerPage = 4;
        var data = getData();
        var totalItems = data.length;
    
        function getData() {
          var data = [];
          $('#pesanan-list button').each(function() {
            var item = {
              id: $(this).data('id'),
              pelanggan: $(this).data('pelanggan') || '',
              hp: $(this).data('hp') || '',
              waktu: $(this).data('waktu'),
              pesanan: ($(this).data('pesanan')),
              status: $(this).data('status')
            };
            data.push(item);
          });
          return data;
        }
    
        function populateList(data, page) {
          var list = $('#pesanan-list');
          list.empty();
    
          var start = (page - 1) * itemsPerPage;
          var end = start + itemsPerPage;
          var paginatedData = data.slice(start, end);
    
          // function formatDate(dateString) {
          //   const months = [
          //     "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli",
          //     "Agustus", "September", "Oktober", "November", "Desember"
          //   ];
    
          //   const date = new Date(dateString);
          //   const day = date.getDate();
          //   const month = months[date.getMonth()];
          //   const year = date.getFullYear();
          //   const hours = String(date.getHours()).padStart(2, '0');
          //   const minutes = String(date.getMinutes()).padStart(2, '0');
    
          //   return `${day} ${month} ${year} ${hours}:${minutes}`;
          // }
    
          paginatedData.forEach(function(item) {
            var div = $('<button class="list-items w-full flex py-1 px-4 rounded-lg text-indigo-800 hover:bg-indigo-50" data-id="' + item.id + '" data-pelanggan="' + item.pelanggan + '" data-hp="' + item.hp + '" data-pesanan="' + item.pesanan + '" data-waktu="' + item.waktu + '" data-status="' + item.status + '"></button>');
            div.append(
              '<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px] font-semibold">#' + item.id + '</p></div>',
              '<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px]">' + item.pelanggan + '</p></div>',
              '<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px]">' + item.hp + '</p></div>',
              '<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px] font-semibold">' + item.pesanan + '</p></div>',
              '<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px]">' + item.waktu + '</p></div>',
              '<div class="flex w-2/12 justify-center items-center gap-2">' +
                (item.status === 'Proses' ? '<span class="icon-[fluent--clipboard-settings-20-filled] h-4 text-blue-600"></span>' :
                (item.status === 'Selesai' ? '<span class="icon-[fluent--clipboard-checkmark-16-filled] h-4 text-lime-500"></span>' :
                (item.status === 'Siap' ? '<span class="icon-[ph--clipboard-text-fill] h-4 text-indigo-600"></span>' :
                '<span class="icon-[fluent--clock-bill-20-filled] h-4 text-yellow-500"></span>'))) +
                '<p class="leading-5 ' +
                (item.status === 'Proses' ? 'text-blue-600' :
                (item.status === 'Selesai' ? 'text-lime-500' :
                (item.status === 'Siap' ? 'text-indigo-600' :
                'text-yellow-500'))) +
                '">' + item.status + '</p>' +
              '</div>'
            );
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

    
  </body>
</html>