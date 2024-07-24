{{-- @dd($barangs) --}}
<!DOCTYPE html>
<html>
  <x-head title="Barang" />
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
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 text-slate-500 font-medium hover:font-semibold hover:text-indigo-800 transition-all">
              <span class="icon-[fa--dashboard] w-4"></span>
              <p class="leading-4">Dashboard</p>
            </div>
          </a>
          <a href="/barang">
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 font-semibold text-indigo-800">
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
      
      <div style="width: calc(100vw - 240px)" class="h-full bg-slate-100 rounded-s-[40px] p-6 gap-6 flex">

        <div class="min-h-full w-8/12 p-4 gap-2 rounded-2xl bg-white flex flex-col">
          <div class="w-full flex gap-2">
            <p class="text-indigo-800 text-2xl leading-7 font-medium w-full">Daftar barang</p>
            <div class="relative">
              <input type="text" id="search-barang" class="w-56 ps-10 pe-4 py-1 rounded-2xl bg-indigo-100 leading-5 text-slate-500 placeholder-slate-500 focus:border-none focus:outline-none" placeholder="Cari barang" />
              <div class="absolute left-4 top-[6px]">
                <span class="icon-[mingcute--search-line] w-4 text-slate-500"></span>
              </div>
            </div>
          </div>
          <div class="size-full flex flex-col gap-1">
            <div class="w-full flex py-1 px-4 rounded-lg text-indigo-800 outline-2 outline outline-indigo-800">
              <button class="sortable flex w-2/12 justify-center items-center gap-2" data-sort="id">
                <p class="leading-[26px] font-semibold">ID</p>
                <span class="icon-[fa--sort] text-xs"></span>
              </button>
              <button class="sortable flex w-4/12 justify-center items-center gap-2" data-sort="barang">
                <p class="leading-[26px] font-semibold">Nama barang</p>
                <span class="icon-[fa--sort] text-xs"></span>
              </button>
              <button class="sortable flex w-2/12 justify-center items-center gap-2" data-sort="kategori">
                <p class="leading-[26px] font-semibold">Kategori</p>
                <span class="icon-[fa--sort] text-xs"></span>
              </button>
              <button class="sortable flex w-1/12 justify-center items-center gap-2" data-sort="satuan">
                <p class="leading-[26px] font-semibold">Satuan</p>
                <span class="icon-[fa--sort] text-xs"></span>
              </button>
              <button class="sortable flex w-2/12 justify-center items-center gap-2" data-sort="harga">
                <p class="leading-[26px] font-semibold">Harga</p>
                <span class="icon-[fa--sort] text-xs"></span>
              </button>
              <button class="sortable flex w-1/12 justify-center items-center gap-2" data-sort="stok">
                <p class="leading-[26px] font-semibold">Stok</p>
                <span class="icon-[fa--sort] text-xs"></span>
              </button>
            </div>
            <div id="barang-list" class="size-full flex flex-col gap-1">
              @foreach($barangs as $b)
              <button id="" class="modal-button-barang w-full flex py-1 px-4 rounded-lg text-indigo-800 hover:bg-indigo-50" data-id="{{ $b->id }}" data-barang="{{ $b->nama }}" data-created="{{ $b->created_at }}" data-harga="{{ $b->harga }}" data-stok="{{ $b->stok }}" data-satuan="{{ $b->satuans->nama }}" data-kategori="{{ $b->kategoris->nama }}">
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px] font-semibold">#{{ $b->id }}</p>
                </div>
                <div class="flex w-4/12 justify-center items-center gap-2">
                  <p class="leading-[26px]">{{ $b->nama }}</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px]">{{ $b->kategoris->nama }}</p>
                </div>
                <div class="flex w-1/12 justify-center items-center gap-2">
                  <p class="leading-[26px]">{{ $b->satuans->nama }}</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px] font-semibold">@moneyFormat($b->harga)</p>
                </div>
                <div class="flex w-1/12 justify-center items-center gap-2">
                  <p class="leading-[26px]">{{ $b->stok }}</p>
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

        <div class="h-full w-4/12 flex flex-col gap-6">
            <div class="w-full gap-4 p-4 flex flex-col bg-white rounded-2xl ">
                <div class="w-full flex gap-4">
                  <div class="w-full flex flex-col items-center py-4 px-2 bg-slate-100 gap-2 rounded-lg">
                      <div class="size-9 bg-gradient-to-t from-indigo-800 to-indigo-700 rounded-lg flex justify-center items-center">
                          <span class="icon-[mdi--package] text-slate-50 h-4"></span>
                      </div>
                      <div class="w-full flex flex-col gap-3 text-center">
                          <p class="text-indigo-800 font-semibold text-[32px] leading-6">{{ $totalBarang }}</p>
                          <p class=" leading-4 text-slate-800">Total barang</p>
                      </div>
                  </div>
                  <div class="w-full flex flex-col items-center py-4 px-2 bg-slate-100 gap-2 rounded-lg">
                      <div class="size-9 bg-gradient-to-t from-blue-700 to-blue-600 rounded-lg flex justify-center items-center">
                          <span class="icon-[mdi--package-check] text-slate-50 h-4"></span>
                      </div>
                      <div class="w-full flex flex-col gap-3 text-center">
                          <p class="text-blue-700 font-semibold text-[32px] leading-6">{{ $totalStok }}</p>
                          <p class=" leading-4 text-slate-800">Total stok barang</p>
                      </div>
                  </div>
                </div>
                <div class="w-full flex gap-4">
                    <div class="w-full flex flex-col items-center py-4 px-2 bg-slate-100 gap-2 rounded-lg">
                        <div class="size-9 bg-gradient-to-t from-lime-600 to-lime-500 rounded-lg flex justify-center items-center">
                            <span class="icon-[mdi--package-variant-closed-check] text-slate-50 h-4"></span>
                        </div>
                        <div class="w-full flex flex-col gap-3 text-center">
                            <p class="text-lime-500 font-semibold text-[32px] leading-6">{{ $barangAvailable }}</p>
                            <p class=" leading-4 text-slate-800">Barang tersedia</p>
                        </div>
                    </div>
                    <div class="w-full flex flex-col items-center py-4 px-2 bg-slate-100 gap-2 rounded-lg">
                        <div class="size-9 bg-gradient-to-t from-red-600 to-red-500 rounded-lg flex justify-center items-center">
                            <span class="icon-[mdi--package-variant-remove] text-slate-50 h-4"></span>
                        </div>
                        <div class="w-full flex flex-col gap-3 text-center">
                            <p class="text-red-600 font-semibold text-[32px] leading-6">{{ $barangNotAvailable }}</p>
                            <p class=" leading-4 text-slate-800">Barang tidak tersedia</p>
                        </div>
                    </div>
                </div>
            </div>

            <form action="/barang" method="post" class="w-full h-full flex flex-col bg-white rounded-2xl p-4 gap-2">
              @csrf
              <div class="w-full flex">
                <p class="text-indigo-800 text-2xl leading-7 font-medium w-full">Tambah barang</p>
              </div>
              <div class="flex flex-col w-full">
                <p class="text-slate-800 text-xl font-medium leading-8">Nama barang</p>
                <input type="text" name="nama" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
              </div>
              <div class="w-full flex flex-col">
                <p class="text-slate-800 text-xl font-medium leading-8">Kategori</p>
                <select name="kategori_id" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
                  <option value="" hidden selected></option>
                  @foreach($kategoris as $k)
                  <option value="{{ $k->id }}">{{ $k->nama }}</option>
                  @endforeach
                </select>
              </div>
              <div class="w-full flex flex-col">
                <p class="text-slate-800 text-xl font-medium leading-8">Satuan</p>
                <select name="satuan_id" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
                  <option value="" hidden selected></option>
                  @foreach($satuans as $s)
                  <option value="{{ $s->id }}">{{ $s->nama }}</option>
                  @endforeach
                </select>
              </div>
              <div class="size-full flex gap-2">
                <div class="w-8/12 flex flex-col">
                  <p class="text-slate-800 text-xl font-medium leading-8">Harga</p>
                  <input type="number"  name="harga" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
                </div>
                <div class="w-4/12 flex flex-col">
                  <p class="text-slate-800 text-xl font-medium leading-8">Stok</p>
                  <input type="number" name="stok" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
                </div>
              </div>
              <div class="w-full flex gap-2">
                <button type="submit" value="simpan" name="submit" class="w-full p-2 leading-4 font-semibold rounded-lg bg-blue-600 text-slate-50">Tambah</button>
              </div>
            </form>
        </div>
      </div>
    </div>

    {{-- Modal detail --}}
    <form action="/barang/edit" method="post">
      @csrf
      <div id="modal-barang" class="hidden z-20 fixed inset-0 bg-indigo-500 bg-opacity-5 flex items-center justify-center">
        <div class="size-[480px] flex flex-col rounded-2xl bg-white p-4 gap-2">
          <div class="w-full flex items-center">
            <p class="w-full text-indigo-800 font-medium text-2xl leading-6">Detail barang</p>
            <button type="button" id="modal-close-barang">
              <span class="icon-[mingcute--close-line] text-indigo-800"></span>
            </button>
          </div>
  
          <div class="w-full flex ">
            <div class="flex flex-col w-4/12">
              <p class="text-slate-800 text-xl font-medium leading-8">ID Barang</p>
              <input type="text" name="id" readonly class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
            </div>
            <div class="flex flex-col w-4/12 ps-2">
              <p class="text-slate-800 text-xl font-medium leading-8">Input</p>
              <input type="datetime" name="created_at" readonly class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
            </div>
            <div class="flex flex-col w-4/12 ps-2">
              <p class="text-slate-800 text-xl font-medium leading-8">Update</p>
              <input type="datetime" name="updated_at" readonly class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
            </div>
          </div>
          <div class="flex flex-col w-full">
            <p class="text-slate-800 text-xl font-medium leading-8">Nama barang</p>
            <input type="text" name="nama" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
          </div>
          <div class="w-full flex flex-col">
            <p class="text-slate-800 text-xl font-medium leading-8">Kategori</p>
            <select name="kategori_id" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
              <option value="" hidden selected></option>
              @foreach($kategoris as $k)
              <option value="{{ $k->id }}">{{ $k->nama }}</option>
              @endforeach
            </select>
          </div>
          <div class="w-full flex flex-col">
            <p class="text-slate-800 text-xl font-medium leading-8">Satuan</p>
            <select name="satuan_id" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
              <option value="" hidden selected></option>
              @foreach($satuans as $s)
              <option value="{{ $s->id }}">{{ $s->nama }}</option>
              @endforeach
            </select>
          </div>
          <div class="size-full flex">
            <div class="w-8/12 flex flex-col">
              <p class="text-slate-800 text-xl font-medium leading-8">Harga</p>
              <input type="number"  name="harga" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
            </div>
            <div class="w-4/12 flex flex-col ps-2">
              <p class="text-slate-800 text-xl font-medium leading-8">Stok</p>
              <input type="number" name="stok" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
            </div>
          </div>
  
          <div class="w-1/2 flex gap-2 self-end ps-1">
            <button id="hapus" type="button" class="w-1/2 p-2 leading-4 font-semibold rounded-lg bg-red-600 text-slate-50">Hapus</button>
            <button id="" type="submit"  name="simpan" value="simpan" class="w-1/2 p-2 leading-4 font-semibold rounded-lg bg-blue-600 text-slate-50">Simpan</button>
          </div>
        </div>
      </div>
    </form>
    
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Sort, Live Search, Pagination --}}
    <script>
      $(document).ready(function() {
        var currentPage = 1;
        var itemsPerPage = 16;
        var data = getData();
        var totalItems = data.length;
   
        function getData() {
          var data = [];
          $('#barang-list button').each(function() {
            var item = {
              id: $(this).data('id'),
              barang: $(this).data('barang'),
              kategori: $(this).data('kategori'),
              satuan: $(this).data('satuan'),
              created: $(this).data('created'),
              harga: parseFloat($(this).data('harga')),
              stok: $(this).data('stok')
            };
            data.push(item);
          });
          return data;
        }
   
        function populateList(data, page) {
          var list = $('#barang-list');
          list.empty();
   
          var start = (page - 1) * itemsPerPage;
          var end = start + itemsPerPage;
          var paginatedData = data.slice(start, end);

          paginatedData.forEach(function(item) {
            var button = $('<button class="modal-button-barang w-full flex py-1 px-4 rounded-lg text-indigo-800 hover:bg-indigo-50"></button>')
            .attr('data-id', item.id)
            .attr('data-barang', item.barang)
            .attr('data-created', item.created)
            .attr('data-harga', item.harga)
            .attr('data-stok', item.stok)
            .attr('data-satuan', item.satuan)
            .attr('data-kategori', item.kategori);

            button.append('<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px] font-semibold">#' + item.id + '</p></div>');
            button.append('<div class="flex w-4/12 justify-center items-center gap-2"><p class="leading-[26px]">' + item.barang + '</p></div>');
            button.append('<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px]">' + item.kategori + '</p></div>');
            button.append('<div class="flex w-1/12 justify-center items-center gap-2"><p class="leading-[26px]">' + item.satuan + '</p></div>');
            button.append('<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px] font-semibold">Rp ' + item.harga.toLocaleString('id-ID') + '</p></div>');
            button.append('<div class="flex w-1/12 justify-center items-center gap-2"><p class="leading-[26px]">' + item.stok + '</p></div>');

            list.append(button);
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
                   item.barang.toString().toLowerCase().includes(searchTerm) ||
                   item.kategori.toString().toLowerCase().includes(searchTerm) ||
                   item.satuan.toString().toLowerCase().includes(searchTerm) ||
                   item.stok.toString().toLowerCase().includes(searchTerm);
          });
          totalItems = filteredData.length;
          currentPage = 1;
          populateList(filteredData, currentPage);
          updatePaginationButtons();
        }
   
        $('#search-barang').on('keyup', function() {
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
  
          $('#barang-list').on('click', '.modal-button-barang', function() {
            const id = $(this).data('id');
            $.ajax({
              url: '/barang/detail/' + id,
              method: 'POST',
              success: function(data) {
  
                const modal = $('#modal-barang');
                const created = new Date(new Date(data.created_at).getTime() + 7 * 60 * 60 * 1000).toISOString().slice(0, 16).replace('T', ' ');
                const updated = new Date(new Date(data.updated_at).getTime() + 7 * 60 * 60 * 1000).toISOString().slice(0, 16).replace('T', ' ');
                
                modal.find('input[name="id"]').val(data.id);
                modal.find('input[name="created_at"]').val(created);
                modal.find('input[name="updated_at"]').val(updated);
                modal.find('input[name="nama"]').val(data.nama);
                modal.find('select[name="kategori_id"]').val(data.kategori_id);
                modal.find('select[name="satuan_id"]').val(data.satuan_id);
                modal.find('input[name="harga"]').val(data.harga);
                modal.find('input[name="stok"]').val(data.stok);
                modal.find('#hapus').attr('data-id', data.id);             
  
                modal.removeClass('hidden');
              }
            });
          });
  
          $('#modal-close-barang').on('click', function() {
              $('#modal-barang').addClass('hidden');
          });
  
          $('#modal-barang').on('click', function(event) {
            if (event.target === this) {
              $(this).addClass('hidden');
            }
          });
        });
    </script>

    {{-- Hapus transaksi--}}
    <script>
      $(document).ready(function() {
        $('#hapus').on('click', function(event) {
          event.preventDefault();

          let csrfToken = $('input[name="_token"]').val();

          let idTransaksi = $(this).data('id');

          let $form = $('<form>', {
              action: '/barang/delete/' + idTransaksi, // URL dengan ID pesanan
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