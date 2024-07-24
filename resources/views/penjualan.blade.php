{{-- @dd($barangs) --}}

<!doctype html>
<html>
<x-head title="Penjualan" />
<body class="font-baloo">
  <div class="h-screen w-screen flex">
    {{-- <div class="w-[240px] h-full py-10 px-6 flex flex-col gap-6 items-center">
        <img src="./img/mentari.svg" width="140" alt="">

        <div class="w-full flex flex-col gap-2">
          <a href="/penjualan">
            <div class="w-full flex items-center gap-4 px-6 py-1 rounded-lg text-slate-50 outline-2 outline outline-indigo-800 bg-indigo-800">
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
              <p class="leading-4 ">Dashboard</p>
            </div>
          </a>
          <a href="/barang">
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 text-slate-500 font-medium hover:font-semibold hover:text-indigo-800 transition-all">
              <span class="icon-[fa-solid--layer-group] w-4"></span>
              <p class="leading-4 ">Stok barang</p>
            </div>
          </a>
          <a href="/transaksi">
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 text-slate-500 font-medium hover:font-semibold hover:text-indigo-800 transition-all">
              <span class="icon-[ph--list-checks-fill] w-4"></span>
              <p class="leading-4 ">Transaksi</p>
            </div>
          </a>
          <a href="/pelanggan">
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 text-slate-500 font-medium hover:font-semibold hover:text-indigo-800 transition-all">
              <span class="icon-[fluent--people-list-16-filled] w-4"></span>
              <p class="leading-4 ">Pelanggan</p>
            </div>
          </a>
          <a href="/admin">
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 text-slate-500 font-medium hover:font-semibold hover:text-indigo-800 transition-all">
              <span class="icon-[mingcute--settings-2-fill] w-4"></span>
              <p class="leading-4 ">Administrator</p>
            </div>
          </a>
        </div>

        <div class="w-full flex">
          <div class="h-32 w-full flex flex-col gap-2 justify-end rounded-2xl p-4 bg-gradient-to-t from-indigo-800 to-indigo-700 relative">
            <div style="background-image: url(/img/pp.jpg);" class="size-16 border-4 border-indigo-700 rounded-[50%] bg-top bg-cover bg-no-repeat absolute self-center top-[-32px]">
            </div>
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
    <div style="width: calc(100vw - 240px);" class="h-full bg-slate-100 rounded-s-[40px] p-6 gap-6 flex">
        <div class="w-7/12 h-full p-4 rounded-2xl bg-white flex flex-col justify-between">
            <div class="w-full flex">
              <p class="text-indigo-800 text-2xl leading-6 font-medium w-full">Pilih barang</p>
              <div class="relative">
                <input id="search-barang" type="text" class="w-56 ps-10 pe-4 py-1 rounded-2xl leading-5 bg-indigo-100 text-slate-500 placeholder-slate-500 focus:border-none focus:outline-none" placeholder="Cari barang">
                <div class="absolute left-4 top-[6px]">
                    <span class="icon-[mingcute--search-line] w-4 text-slate-500"></span>
                </div>
              </div>
            </div>

            <div style="height: calc(100% - 36px);" class="w-full flex gap-4">

              <div class="min-w-32 flex flex-col h-full gap-2 py-4">
                <button type="button" id="tab0" class="tab-btn w-full text-slate-50 bg-indigo-800 rounded text-center">
                  Semua
                </button>
                @foreach ($kategoris as $k)  
                <button type="button" id="tab{{ $k->id }}" class="tab-btn w-full text-slate-50 bg-indigo-800 rounded text-center">
                    {{ $k->nama }}
                </button>
                @endforeach
              </div>

              <div id="tab-content0" class="tab-content hidden size-full flex flex-col gap-2 p-2 rounded-2xl bg-slate-50 shadow-mentari overflow-y-scroll">
                @foreach ($barangs->where('stok', '>', 0) as $b)
                <label for="semua-barang-{{ $b->id }}" class="cursor-pointer w-full flex text-slate-800 bg-white py-1 px-2 rounded-lg shadow-md has-[:checked]:text-slate-50 has-[:checked]:bg-indigo-500 group transition-all">
                  <p class="w-full">{{ $b->nama }}</p>
                  <div class="flex gap-4 items-center text-indigo-500 group-has-[:checked]:text-slate-50 transition-all">
                    <span class="icon-[fluent--money-16-filled] text-xl"></span>
                    <p class="font-bold whitespace-nowrap min-w-16 text-end">Rp {{ $b->harga }}</p>
                  </div>
                  <input hidden class="semua-barang" type="checkbox" name="" id="semua-barang-{{ $b->id }}" data-id="{{ $b->id }}" data-name="{{ $b->nama }}" data-price="{{ $b->harga }}"  data-stock="{{ $b->stok }}">
                </label>
                @endforeach
              </div>

              @foreach ($kategoris as $k)
              <div id="tab-content{{ $k->id }}" class="tab-content hidden size-full flex flex-col gap-2 p-2 rounded-2xl bg-slate-50 shadow-mentari overflow-y-scroll">
                @foreach ($k->barangs()->where('kategori_id', $k->id)->where('stok', '>', 0)->get() as $kb )
                <label for="kategori-{{ $k->id }}-barang-{{ $kb->id }}" class="cursor-pointer w-full flex text-slate-800 bg-white py-1 px-2 rounded-lg shadow-md has-[:checked]:text-slate-50 has-[:checked]:bg-indigo-500 group transition-all">
                  <p class="w-full">{{ $kb->nama }}</p>
                  <div class="flex gap-4 items-center text-indigo-500 group-has-[:checked]:text-slate-50 transition-all">
                    <span class="icon-[fluent--money-16-filled] text-xl"></span>
                    <p class="font-bold whitespace-nowrap min-w-16 text-end">Rp {{ $kb->harga }}</p>
                  </div>
                  <input hidden type="checkbox" class="kategori-barang" name="" id="kategori-{{ $k->id }}-barang-{{ $kb->id }}" data-id="{{ $kb->id }}" data-name="{{ $kb->nama }}" data-price="{{ $kb->harga }}" data-stock="{{ $kb->stok }}">
                </label>
                @endforeach
              </div>
              @endforeach
            </div>
        </div>

        <form action="/penjualan" method="post" class="w-5/12 h-full p-4 rounded-2xl bg-white flex flex-col gap-2">
          @csrf
          <p class="text-indigo-800 text-2xl leading-6 font-medium w-full">Keranjang</p>
          <div id="keranjang-items" class="size-full overflow-y-scroll flex flex-col gap-2 p-3 rounded-2xl bg-slate-50 shadow-mentari">
            
          </div>

          <div class="w-full flex flex-col gap-2">
            <div class="flex flex-col gap-[2px] w-full">
              <div class="flex items-center w-full">
                <p class=" text-slate-600 w-full leading-6">Data pelanggan</p>
                <button type="button" id="modal-btn" class="size-6 text-slate-50 bg-indigo-800 rounded items-center justify-center flex"><span class="icon-[fluent--people-list-16-filled] w-4"></span></button>
              </div>
              <div class="flex w-full">
                <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Nama</p>
                <input type="text" name="nama" id="nama-pelanggan" class="h-7 text-slate-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
              </div>
              <div class="flex w-full">
                <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Nomor HP</p>
                <input type="text" name="hp" id="hp-pelanggan" class="h-7 text-slate-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
              </div>
              <div class="flex w-full">
                <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Diskon (%)</p>
                <input type="number" name="diskon" id="discount" class="h-7 text-slate-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
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
                <input type="number" name="diterima" id="amountReceived" step="500" class="h-7 text-slate-800 leading-4 px-2 bg-indigo-100 w-1/2  rounded focus:border-none focus:outline-none">
              </div>
              <div class="flex w-full">
                <p class="text-slate-800 text-xl font-medium w-1/2 leading-8">Kembali</p>
                <input readonly type="number" name="kembali" id="changeAmount" class="h-7 text-slate-800 leading-4 px-2 bg-indigo-100 w-1/2 rounded focus:border-none focus:outline-none">
              </div>
            </div>
          </div>

          <div class="w-full rounded-lg bg-indigo-100 p-2">
            <div class="w-full flex">
              <p class="text-xl leading-8 font-semibold w-full">Diskon</p>
              <input type="text" hidden name="total_diskon" class="total-discount">
              <p class="total-discount text-xl leading-8 font-semibold whitespace-nowrap"></p>
            </div>
            <div class="w-full flex">
              <p class="text-[32px] leading-8 font-semibold w-full">Total</p>
              <input type="text" hidden name="grand_total" class="grand-total">
              <p class="grand-total text-[40px] leading-10 font-bold whitespace-nowrap"></p>
            </div>
          </div>
          <div class="w-full flex gap-2">
            <button type="submit" value="pending" name="submit" class="w-6/12 p-2 leading-4 font-semibold rounded-lg bg-yellow-500 text-slate-50">Pending</button>
            <button type="submit" value="bayar" name="submit" class="w-6/12 p-2 leading-4 font-semibold rounded-lg bg-lime-600 text-slate-50">Bayar</button>
          </div>
        </form>
    </div>
  </div>

  <!-- Modal data pelanggan -->
  <div id="modal-content" class="hidden fixed inset-0 bg-indigo-500 bg-opacity-20 flex items-center justify-center">
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
        <button type="button" id="modal-btn-close" class=" w-32 p-2 leading-4 font-semibold rounded-lg bg-slate-200 text-slate-50" disabled>Pilih</button>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
  {{-- Tabs --}}
  {{-- <script>
    document.addEventListener('DOMContentLoaded', () => {
      const tabs = document.querySelectorAll('.tab-btn');
      const tabContents = document.querySelectorAll('.tab-content');
  
      tabs.forEach(tab => {
        tab.addEventListener('click', () => {
          // Menyembunyikan semua tab content
          tabContents.forEach(content => content.classList.add('hidden'));
  
          // Menghapus kelas aktif dari semua tab buttons
          tabs.forEach(btn => {
            btn.classList.remove('bg-indigo-500', 'text-slate-50');
            btn.classList.add('text-indigo-500', 'hover:bg-indigo-500', 'hover:text-slate-50');
          });
  
          // Menampilkan tab content yang sesuai
          const tabId = tab.id.replace('tab', 'tab-content');
          document.getElementById(tabId).classList.remove('hidden');
  
          // Menambahkan kelas aktif pada tab button yang diklik
          tab.classList.remove('text-indigo-500', 'hover:bg-indigo-500', 'hover:text-slate-50');
          tab.classList.add('bg-indigo-500', 'text-slate-50');
        });
      });
  
      // Menampilkan tab pertama secara default
      document.getElementById('tab0').click();
    });
  </script> --}}
  <script>
    $(document).ready(function () {
        const $tabs = $('.tab-btn');
        const $tabContents = $('.tab-content');

        $tabs.on('click', function () {
            const $tab = $(this);

            // Menyembunyikan semua tab content
            $tabContents.addClass('hidden');

            // Menghapus kelas aktif dari semua tab buttons
            $tabs.removeClass('bg-indigo-800 text-slate-50')
                 .addClass('text-indigo-800 hover:bg-indigo-800 hover:text-slate-50');

            // Menampilkan tab content yang sesuai
            const tabId = $tab.attr('id').replace('tab', 'tab-content');
            $(`#${tabId}`).removeClass('hidden');

            // Menambahkan kelas aktif pada tab button yang diklik
            $tab.removeClass('text-indigo-800 hover:bg-indigo-800 hover:text-slate-50')
                .addClass('bg-indigo-800 text-slate-50');
        });

        // Menampilkan tab pertama secara default
        $('#tab0').trigger('click');
    });
  </script>

  {{-- Live Search Barang --}}
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('search-barang');
        const allTabsContent = document.querySelectorAll('.tab-content');
        const allItemsMap = {};

        // Simpan semua barang awal dalam sebuah map berdasarkan id tab
        allTabsContent.forEach(tabContent => {
            const tabId = tabContent.id;
            allItemsMap[tabId] = Array.from(tabContent.querySelectorAll('label'));
        });

        // Function to display items based on search query
        function displayItems(tabId, items) {
            const tabContent = document.getElementById(tabId);
            if (tabContent) {
                tabContent.innerHTML = '';
                if (items.length > 0) {
                    items.forEach(item => {
                        tabContent.appendChild(item);
                    });
                } else {
                    const notFoundMessage = document.createElement('p');
                    notFoundMessage.className = 'text-center text-slate-500';
                    notFoundMessage.textContent = 'Barang tidak ditemukan';
                    tabContent.appendChild(notFoundMessage);
                }
            }
        }

        // Event listener untuk live search
        searchInput.addEventListener('input', function () {
            const query = searchInput.value.trim().toLowerCase();

            allTabsContent.forEach(tabContent => {
                const tabId = tabContent.id;
                const allItems = allItemsMap[tabId];

                if (query.length > 0) {
                    const filteredItems = allItems.filter(item => {
                        const itemName = item.querySelector('p').textContent.toLowerCase();
                        return itemName.includes(query);
                    });
                    displayItems(tabId, filteredItems);
                } else {
                    // Display all items when search input is cleared
                    displayItems(tabId, allItems);
                }
            });
        });
    });
  </script>

  {{-- Modals --}}
  <script>
    $(document).ready(function () {
        const $modal = $("#modal-content");
        const $btn = $("#modal-btn");
        const $btnClose = $("#modal-btn-close");
    
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
    
        $modal.on('click', function(event) {
            if (event.target === $modal[0]) {
                $modal.addClass('hidden');
            }
        });
    
        togglePilihButton();  // Ensure the button is correctly initialized on page load
    });
  </script>
  {{-- <script>
    const modal = document.getElementById("modal-content");

    const btn = document.getElementById("modal-btn");

    const btnClose = document.getElementById("modal-btn-close");

    btn.onclick = function() {
        modal.classList.remove('hidden');
    }

    btnClose.onclick = function() {
        modal.classList.add('hidden');
    }

    modal.onclick = function(event) {
        if (event.target === modal) {
            modal.classList.add('hidden');
        }
    }
  </script> --}}
  {{-- <script>
    $(document).ready(function () {
        const $modal = $("#modal-content");
        const $btn = $("#modal-btn");
        const $btnClose = $("#modal-btn-close");

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

        $btn.on('click', function() {
            $modal.removeClass('hidden');
        });

        $btnClose.on('click', function() {
            $modal.addClass('hidden');
        });

        $modal.on('click', function(event) {
            if (event.target === $modal[0]) {
                $modal.addClass('hidden');
            }
        });
    });
  </script> --}}
  {{-- <script>
    $(document).ready(function () {
        const $modal = $("#modal-content");
        const $btn = $("#modal-btn");
        const $btnClose = $("#modal-btn-close");
    
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
    
        $btnClose.on('click', function() {
            $modal.addClass('hidden');
        });
    
        $modal.on('click', function(event) {
            if (event.target === $modal[0]) {
                $modal.addClass('hidden');
            }
        });
    
        togglePilihButton();  // Ensure the button is correctly initialized on page load
    });
  </script> --}}


  {{-- Checkbox --}}
  <script>
    $(document).ready(function () {
      function syncCheckboxes(dataId, isChecked) {
          $(`.semua-barang[data-id="${dataId}"], .kategori-barang[data-id="${dataId}"]`).prop('checked', isChecked);
      }

      $('.semua-barang').on('change', function () {
          const dataId = $(this).data('id');
          const isChecked = $(this).prop('checked');
          syncCheckboxes(dataId, isChecked);
      });

      $('.kategori-barang').on('change', function () {
          const dataId = $(this).data('id');
          const isChecked = $(this).prop('checked');
          syncCheckboxes(dataId, isChecked);
      });
    });
  </script>


  {{-- Cart --}}
  <script>
    $(document).ready(function() {
        $('.semua-barang, .kategori-barang').on('change', function() {
            let itemId = $(this).data('id');
            let itemName = $(this).data('name');
            let itemPrice = $(this).data('price');
            let itemStock = $(this).data('stock');
            let isChecked = $(this).is(':checked');

            if (isChecked) {
                addToCart(itemId, itemName, itemPrice, itemStock);
            } else {
                removeFromCart(itemId);
            }
        });

        function addToCart(id, name, price, stock) {
            let formattedPrice = parseInt(price).toLocaleString('id-ID');
            let cartItem = `
                <div class="w-full flex gap-4 cart-item" data-id="${id}" data-price="${price}" data-stock="${stock}">
                    <input type="text" name="id[]" hidden value="${id}">
                    <input type="number" name="jumlah[]" class="quantity" hidden value="1">
                    <input type="number" name="total_harga[]" class="item-total-price" hidden value="${price}">
                    <div class="flex flex-col w-full">
                        <p class="leading-4 text-slate-800">${name}</p>
                        <p class="text-xs leading-3 text-slate-500">Rp ${formattedPrice}</p>
                    </div>
                    <div class="flex min-w-20 justify-between">
                        <button type="button" class="h-6 min-w-6 text-indigo-800 bg-indigo-100 rounded-lg font-semibold decrease-qty">-</button>
                        <p class="text-indigo-800 font-bold text-center w-full quantity">1</p>
                        <button type="button" class="h-6 min-w-6 text-indigo-800 bg-indigo-100 rounded-lg font-semibold increase-qty">+</button>
                    </div>
                    <p class="font-bold text-slate-800 whitespace-nowrap min-w-24 text-end item-total-price">Rp ${formattedPrice}</p>
                </div>
            `;
            $('#keranjang-items').append(cartItem);
            updateAndCalculate();
        }

        function removeFromCart(id) {
            $(`.cart-item[data-id="${id}"]`).remove();
            $(`input[data-id="${id}"]`).prop('checked', false);
            updateAndCalculate();
        }

        function updateTotal() {
          let totalAmount = 0;
          $('.cart-item').each(function() {
              let itemTotalPrice = $(this).find('.item-total-price').text().replace('Rp ', '').replace(/\./g, '');
              totalAmount += parseFloat(itemTotalPrice);
          });
          $('input.grand-total').val(totalAmount);
          return totalAmount;
        }

        function calculateDiscount() {
          let total = updateTotal();
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

        $('#modal-btn-close').on('click', function() {
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

        function updateAndCalculate() {
            updateTotal();
            calculateDiscount();
        }

        $('#keranjang-items').on('click', '.increase-qty', function() {
            let $quantity = $(this).siblings('.quantity');
            let quantity = parseInt($quantity.text());
            let stock = $(this).closest('.cart-item').data('stock');

            if (quantity < stock) {
                quantity += 1;
                $quantity.text(quantity);
                $(this).closest('.cart-item').find('input.quantity').val(quantity);

                let $itemTotalPrice = $(this).closest('.cart-item').find('.item-total-price');
                let pricePerItem = $(this).closest('.cart-item').data('price');
                let totalPrice = pricePerItem * quantity;
                $itemTotalPrice.text('Rp ' + totalPrice.toLocaleString('id-ID'));
                $(this).closest('.cart-item').find('input.item-total-price').val(totalPrice);
                updateAndCalculate();

                if (quantity === stock) {
                    $(this).removeClass('text-indigo-800');
                    $(this).addClass('text-indigo-100');
                    $(this).prop('disabled', true);
                }
            } 
        });

        $('#keranjang-items').on('click', '.decrease-qty', function() {
            let $quantity = $(this).siblings('.quantity');
            let quantity = parseInt($quantity.text()) - 1;
            if (quantity <= 0) {
                let itemId = $(this).closest('.cart-item').data('id');
                removeFromCart(itemId);
                return;
            }
            $quantity.text(quantity);
            $(this).closest('.cart-item').find('input.quantity').val(quantity);

            let $itemTotalPrice = $(this).closest('.cart-item').find('.item-total-price');
            let pricePerItem = $(this).closest('.cart-item').data('price');
            let totalPrice = pricePerItem * quantity;
            $itemTotalPrice.text('Rp ' + totalPrice.toLocaleString('id-ID'));
            $(this).closest('.cart-item').find('input.item-total-price').val(totalPrice);
            updateAndCalculate();

            if (quantity < $(this).closest('.cart-item').data('stock')) {
                $(this).siblings('.increase-qty').removeClass('text-indigo-100');
                $(this).siblings('.increase-qty').addClass('text-indigo-800');
                $(this).siblings('.increase-qty').prop('disabled', false);
            }
        });

        $('#discount').on('input', function() {
          calculateDiscount();
        });

        $('#amountReceived').on('input', function() {
          calculateChange();
        });

        calculateDiscount();
        updateAndCalculate();
        calculateChange();
    });
  </script>
    
    


  






  













</body>
</html>