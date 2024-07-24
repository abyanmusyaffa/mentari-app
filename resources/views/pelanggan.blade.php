{{-- @dd($barangs) --}}
<!DOCTYPE html>
<html>
  <x-head title="Pelanggan" />
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
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 font-semibold text-indigo-800">
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
            <p class="text-indigo-800 text-2xl leading-7 font-medium w-full">Daftar pelanggan</p>
            <div class="relative">
              <input type="text" id="search-dapel" class="w-56 ps-10 pe-4 py-1 rounded-2xl bg-indigo-100 leading-5 text-slate-500 placeholder-slate-500 focus:border-none focus:outline-none" placeholder="Cari pelanggan" />
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
              <button class="sortable flex w-4/12 justify-center items-center gap-2" data-sort="nama">
                <p class="leading-[26px] font-semibold">Nama</p>
                <span class="icon-[fa--sort] text-xs"></span>
              </button>
              <button class=" flex w-2/12 justify-center items-center gap-2">
                <p class="leading-[26px] font-semibold">Nomor HP</p>
                {{-- <span class="icon-[fa--sort] text-xs"></span> --}}
              </button>
              <button class=" flex w-3/12 justify-center items-center gap-2">
                <p class="leading-[26px] font-semibold">Alamat</p>
                {{-- <span class="icon-[fa--sort] text-xs"></span> --}}
              </button>
              <button class="sortable flex w-1/12 justify-center items-center gap-2" data-sort="diskon">
                <p class="leading-[26px] font-semibold">Diskon</p>
                <span class="icon-[fa--sort] text-xs"></span>
              </button>
            </div>
            <div id="pelanggan-list" class="size-full flex flex-col gap-1">
              @foreach($pelanggans as $p)
              <button id="" class="modal-button-dapel w-full flex py-1 px-4 rounded-lg text-indigo-800 hover:bg-indigo-50" data-id="{{ $p->id }}" data-nama="{{ $p->nama }}" data-created="{{ $p->created_at }}" data-diskon="{{ $p->diskon }}" data-hp="{{ $p->hp }}" data-alamat="{{ $p->alamat }}">
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px] font-semibold">#{{ $p->id }}</p>
                </div>
                <div class="flex w-4/12 justify-center items-center gap-2">
                  <p class="leading-[26px]">{{ $p->nama }}</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px] font-semibold">{{ $p->hp }}</p>
                </div>
                <div class="flex w-3/12 justify-center items-center gap-2">
                  <p class="leading-[26px]">{{ $p->alamat }}</p>
                </div>
                <div class="flex w-1/12 justify-center items-center gap-2">
                  <p class="leading-[26px] font-semibold">{{ $p->diskon }} %</p>
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
                <div class="w-full flex items-center p-2 bg-slate-100 gap-2 rounded-lg">
                    <div class="min-w-9 h-9 bg-gradient-to-t from-indigo-800 to-indigo-700 rounded-lg flex justify-center items-center">
                        <span class="icon-[fluent--people-community-12-filled] text-slate-50"></span>
                    </div>
                    <p class="text-xl leading-8 text-slate-800 w-full">Total pelanggan</p>
                    <p class="text-2xl font-semibold text-indigo-800">{{ $totalPelanggan }}</p>
                </div>

                <div id="leaderboard" class="w-full flex flex-col gap-2">
                    <div class="w-full flex flex-wrap gap-2 justify-center items-center">
                        <span class="icon-[mingcute--chart-bar-fill] text-indigo-800"></span>
                        <p class="leading-4 text-indigo-800 font-medium">Pelanggan teratas</p>
                        <div class="w-full h-[2px] bg-slate-100 rounded-sm"></div>
                    </div>
                    <div id="leaderboard-list" class="w-full flex flex-col gap-2 px-2">
                        {{-- <div class="w-full flex gap-2">
                            <div class="min-w-6 h-6 bg-lime-700 rounded flex justify-center items-center text-slate-50 font-semibold">
                                1
                            </div>
                            <p class="text-slate-800 w-full">Abyan Musyaffa</p>
                            <p class="text-lime-700 text-xl font-semibold">60</p>
                        </div>
                        <div class="w-full flex gap-2">
                            <div class="min-w-6 h-6 bg-lime-600 rounded flex justify-center items-center text-slate-50 font-semibold">
                                2
                            </div>
                            <p class="text-slate-800 w-full">Abyan Musyaffa</p>
                            <p class="text-lime-600 text-xl font-semibold">60</p>
                        </div>
                        <div class="w-full flex gap-2">
                            <div class="min-w-6 h-6 bg-lime-500 rounded flex justify-center items-center text-slate-50 font-semibold">
                                3
                            </div>
                            <p class="text-slate-800 w-full">Abyan Musyaffa</p>
                            <p class="text-lime-500 text-xl font-semibold">60</p>
                        </div>
                        <div class="w-full flex gap-2">
                            <div class="min-w-6 h-6 bg-blue-600 rounded flex justify-center items-center text-slate-50 font-semibold">
                                4
                            </div>
                            <p class="text-slate-800 w-full">Abyan Musyaffa</p>
                            <p class="text-blue-600 text-xl font-semibold">60</p>
                        </div>
                        <div class="w-full flex gap-2">
                            <div class="min-w-6 h-6 bg-blue-500 rounded flex justify-center items-center text-slate-50 font-semibold">
                                5
                            </div>
                            <p class="text-slate-800 w-full">Abyan Musyaffa</p>
                            <p class="text-blue-500 text-xl font-semibold">60</p>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="w-full flex justify-center">
                    <button type="submit" value="simpan" name="submit" class=" px-4 py-1 leading-3 text-xs  rounded-lg outline-1 outline outline-slate-500 text-slate-500">Lainnya</button>
                </div> --}}
            </div>

            <form action="/pelanggan" method="post" class="w-full h-full flex flex-col bg-white rounded-2xl p-4 gap-2">
              @csrf
              <div class="w-full flex">
                <p class="text-indigo-800 text-2xl leading-7 font-medium w-full">Tambah pelanggan</p>
              </div>
              <div class="flex flex-col w-full">
                <p class="text-slate-800 text-xl font-medium leading-8">Nama</p>
                <input type="text" name="nama" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
              </div>
              <div class="flex flex-col w-full">
                <p class="text-slate-800 text-xl font-medium leading-8">Nomor HP</p>
                <input type="text" name="hp" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
              </div>
              <div class="flex flex-col w-full">
                <p class="text-slate-800 text-xl font-medium leading-8">Alamat</p>
                <input type="text" name="alamat" class="h-7 text-indigo-800 leading-4 p-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
              </div>
              <div class="flex flex-col w-full">
                <p class="text-slate-800 text-xl font-medium leading-8">Diskon (%)</p>
                <input type="number" name="diskon" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
              </div>
              <div class="w-full flex h-full items-end">
                <button type="submit" value="simpan" name="submit" class="w-full p-2 leading-4 font-semibold rounded-lg bg-blue-600 text-slate-50">Tambah</button>
              </div>
            </form>
        </div>
      </div>
    </div>

    {{-- Modal detail --}}
    <form action="/pelanggan/edit" method="post">
      @csrf
      <div id="modal-dapel" class="hidden z-20 fixed inset-0 bg-indigo-500 bg-opacity-5 flex items-center justify-center">
        <div class="size-[480px] flex flex-col rounded-2xl bg-white p-4 gap-2">
          <div class="w-full flex items-center">
            <p class="w-full text-indigo-800 font-medium text-2xl leading-6">Detail pelanggan</p>
            <button type="button" id="modal-close-dapel">
              <span class="icon-[mingcute--close-line] text-indigo-800"></span>
            </button>
          </div>
  
          <div class="w-full flex ">
            <div class="flex flex-col w-4/12">
              <p class="text-slate-800 text-xl font-medium leading-8">ID Pelanggan</p>
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
            <p class="text-slate-800 text-xl font-medium leading-8">Nama</p>
            <input type="text" name="nama" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
          </div>
          <div class="flex flex-col w-full">
            <p class="text-slate-800 text-xl font-medium leading-8">Nomor HP</p>
            <input type="text" name="hp" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
          </div>
          <div class="flex flex-col w-full">
            <p class="text-slate-800 text-xl font-medium leading-8">Alamat</p>
            <input type="text" name="alamat" class="h-7 text-indigo-800 leading-4 p-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
          </div>
          <div class="flex flex-col w-full">
            <p class="text-slate-800 text-xl font-medium leading-8">Diskon (%)</p>
            <input type="number" name="diskon" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 rounded focus:border-none focus:outline-none">
          </div>
          <div class="w-1/2 flex gap-2 h-full items-end self-end ps-1">
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
        var itemsPerPage = 9;
        var data = getData();
        var totalItems = data.length;
   
        function getData() {
          var data = [];
          $('#pelanggan-list button').each(function() {
            var item = {
              id: $(this).data('id'),
              nama: $(this).data('nama'),
              hp: $(this).data('hp'),
              created: $(this).data('created'),
              alamat: $(this).data('alamat'),
              diskon: $(this).data('diskon')
            };
            data.push(item);
          });
          return data;
        }
   
        function populateList(data, page) {
          var list = $('#pelanggan-list');
          list.empty();
   
          var start = (page - 1) * itemsPerPage;
          var end = start + itemsPerPage;
          var paginatedData = data.slice(start, end);

          paginatedData.forEach(function(item) {
            var button = $('<button class="modal-button-dapel w-full flex py-1 px-4 rounded-lg text-indigo-800 hover:bg-indigo-50"></button>')
            .attr('data-id', item.id)
            .attr('data-nama', item.nama)
            .attr('data-created', item.created)
            .attr('data-diskon', item.diskon)
            .attr('data-hp', item.hp)
            .attr('data-alamat', item.alamat);

            button.append('<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px] font-semibold">#' + item.id + '</p></div>');
            button.append('<div class="flex w-4/12 justify-center items-center gap-2"><p class="leading-[26px]">' + item.nama + '</p></div>');
            button.append('<div class="flex w-2/12 justify-center items-center gap-2"><p class="leading-[26px] font-semibold">' + item.hp + '</p></div>');
            button.append('<div class="flex w-3/12 justify-center items-center gap-2"><p class="leading-[26px]">' + item.alamat + '</p></div>');
            button.append('<div class="flex w-1/12 justify-center items-center gap-2"><p class="leading-[26px] font-semibold">' + (item.diskon ? item.diskon + '%' : '' ) + '</p></div>');

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
                   item.nama.toString().toLowerCase().includes(searchTerm) ||
                   item.hp.toString().toLowerCase().includes(searchTerm) ||
                   item.alamat.toString().toLowerCase().includes(searchTerm) ||
                   item.diskon.toString().toLowerCase().includes(searchTerm);
          });
          totalItems = filteredData.length;
          currentPage = 1;
          populateList(filteredData, currentPage);
          updatePaginationButtons();
        }
   
        $('#search-dapel').on('keyup', function() {
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
  
          $('#pelanggan-list').on('click', '.modal-button-dapel', function() {
            const id = $(this).data('id');
            $.ajax({
              url: '/pelanggan/detail/' + id,
              method: 'POST',
              success: function(data) {
  
                const modal = $('#modal-dapel');
                const created = new Date(new Date(data.created_at).getTime() + 7 * 60 * 60 * 1000).toISOString().slice(0, 16).replace('T', ' ');
                const updated = new Date(new Date(data.updated_at).getTime() + 7 * 60 * 60 * 1000).toISOString().slice(0, 16).replace('T', ' ');
                
                modal.find('input[name="id"]').val(data.id);
                modal.find('input[name="created_at"]').val(created);
                modal.find('input[name="updated_at"]').val(updated);
                modal.find('input[name="nama"]').val(data.nama);
                modal.find('input[name="hp"]').val(data.hp);
                modal.find('input[name="alamat"]').val(data.alamat);
                modal.find('input[name="diskon"]').val(data.diskon);
                modal.find('#hapus').attr('data-id', data.id);             
  
                modal.removeClass('hidden');
              }
            });
          });
  
          $('#modal-close-dapel').on('click', function() {
              $('#modal-dapel').addClass('hidden');
          });
  
          $('#modal-dapel').on('click', function(event) {
            if (event.target === this) {
              $(this).addClass('hidden');
            }
          });
        });
    </script>

    {{-- Hapus pelanggan--}}
    <script>
      $(document).ready(function() {
        $('#hapus').on('click', function(event) {
          event.preventDefault();

          let csrfToken = $('input[name="_token"]').val();

          let idPelanggan = $(this).data('id');

          let $form = $('<form>', {
              action: '/pelanggan/delete/' + idPelanggan,
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
    
    {{-- Leaderboard --}}
    <script>
      $(document).ready(function() {
          function updateLeaderboard() {
              $.ajax({
                  url: '/pelanggan/leaderboard',
                  method: 'POST',
                  success: function(data) {
                      var leaderboardList = $('#leaderboard-list');
                      leaderboardList.empty();

                      $.each(data, function(index, pelanggan) {
                          if (index < 5) { 
                              var rankClass;
                              switch(index + 1) {
                                  case 1: rankClass = 'bg-lime-700 text-lime-700'; break;
                                  case 2: rankClass = 'bg-lime-600 text-lime-600'; break;
                                  case 3: rankClass = 'bg-lime-500 text-lime-500'; break;
                                  case 4: rankClass = 'bg-blue-600 text-blue-600'; break;
                                  case 5: rankClass = 'bg-blue-500 text-blue-500'; break;
                                  // default: rankClass = 'bg-gray-400 text-gray-400';
                              }

                              leaderboardList.append(
                                  '<div class="w-full flex gap-2">' +
                                      '<div class="min-w-6 h-6 ' + rankClass.split(' ')[0] + ' rounded flex justify-center items-center text-slate-50 font-semibold">' +
                                          (index + 1) +
                                      '</div>' +
                                      '<p class="text-slate-800 w-full">' + pelanggan.nama + '</p>' +
                                      '<p class="' + rankClass.split(' ')[1] + ' text-xl font-semibold">' + pelanggan.transaksis_count + '</p>' +
                                  '</div>'
                              );
                          }
                      });
                  }
              });
          }

          updateLeaderboard();

          // $('#someButton').on('click', function() {
          //     updateLeaderboard();
          // });
      });
    </script>
    
  </body>
</html>