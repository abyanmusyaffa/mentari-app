<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./src/style.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>Mentari | Pesanan</title>
    <style>
      .shadow-mentari::-webkit-scrollbar, .list-pesanan::-webkit-scrollbar {
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
            <div class="w-full flex items-center gap-4 px-6 py-1 rounded-lg text-slate-50 outline-2 outline outline-indigo-800 bg-indigo-800">
              <span class="icon-[mingcute--clipboard-fill] text-xl"></span>
              <p class="text-xl font-medium">Pesanan</p>
            </div>
          </a>
        </div>

        <div class="w-full flex flex-col gap-2 h-full">
          <a href="">
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 text-slate-500 font-medium hover:font-semibold hover:text-indigo-800 transition-all">
              <span class="icon-[fa--dashboard] w-4"></span>
              <p class="leading-4">Dashboard</p>
            </div>
          </a>
          <a href="">
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 text-slate-500 font-medium hover:font-semibold hover:text-indigo-800 transition-all">
              <span class="icon-[fa-solid--layer-group] w-4"></span>
              <p class="leading-4">Stok barang</p>
            </div>
          </a>
          <a href="">
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 text-slate-500 font-medium hover:font-semibold hover:text-indigo-800 transition-all">
              <span class="icon-[ph--list-checks-fill] w-4"></span>
              <p class="leading-4">Transaksi</p>
            </div>
          </a>
          <a href="">
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
            <a href="">
              <div class="w-full text-center rounded-lg px-8 text-slate-500 bg-slate-50 hover:text-indigo-800 transition-all">
                <p class="text-base leading-6 font-medium">Logout</p>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div style="width: calc(100vw - 240px)" class="h-full bg-slate-100 rounded-s-[40px] p-6 gap-6 flex">
        <div class="w-7/12 h-full p-4 gap-2 rounded-2xl bg-white flex flex-col justify-between">
          <div class="w-full flex gap-2">
            <p class="text-indigo-800 text-2xl leading-6 font-medium w-full">Daftar pesanan</p>
            <div class="relative flex ">
              <button type="button" id="dropdown-button" class="py-1 min-w-9 rounded-2xl leading-5 bg-indigo-100 items-center justify-center flex">
                <span class="icon-[solar--sort-linear] w-4 text-slate-500"></span>
              </button>
              <div id="dropdown-content" class="hidden absolute right-10 w-56 rounded-lg shadow-md bg-slate-50 flex flex-col z-50 p-2">
                <a href="#" class="px-4 py-2 text-xs text-slate-800 rounded hover:bg-indigo-100" data-sort="name">Name</a>
                <a href="#" class="px-4 py-2 text-xs text-slate-800 rounded hover:bg-indigo-100" data-sort="date">Date</a>
                <a href="#" class="px-4 py-2 text-xs text-slate-800 rounded hover:bg-indigo-100" data-sort="price">Price</a>
              </div>
            </div>
            <div class="relative">
              <input type="text" class="w-56 ps-10 pe-4 py-1 rounded-2xl bg-indigo-100 leading-5 text-slate-500 placeholder-slate-500 focus:border-none focus:outline-none" placeholder="Cari pesanan" />
              <div class="absolute left-4 top-[6px]">
                <span class="icon-[mingcute--search-line] w-4 text-slate-500"></span>
              </div>
            </div>
          </div>

          <div class="w-full flex px-4 gap-2 justify-between">
            <div class="w-full h-14 bg-slate-100 rounded-lg p-2 flex gap-2 items-center">
              <div class="h-10 min-w-10 bg-gradient-to-t from-lime-800 to-lime-600 rounded-lg flex justify-center items-center">
                <span class="icon-[ph--clipboard-text-fill] h-4 text-slate-50"></span>
              </div>
              <div class="w-full flex flex-col h-full">
                <p class="text-xs leading-4 text-slate-800">Pesanan siap</p>
                <p class="text-2xl leading-6 text-lime-600 font-semibold">186</p>
              </div>
            </div>

            <div class="w-full h-14 bg-slate-100 rounded-lg p-2 flex gap-2 items-center">
              <div class="h-10 min-w-10 bg-gradient-to-t from-blue-700 to-blue-600 rounded-lg flex justify-center items-center">
                <span class="icon-[fluent--clipboard-settings-20-filled] h-4 text-slate-50"></span>
              </div>
              <div class="w-full flex flex-col h-full">
                <p class="text-xs leading-4 text-slate-800">Proses</p>
                <p class="text-2xl leading-6 text-blue-600 font-semibold">186</p>
              </div>
            </div>

            <div class="w-full h-14 bg-slate-100 rounded-lg p-2 flex gap-2 items-center">
              <div class="h-10 min-w-10 bg-gradient-to-t from-red-600 to-red-500 rounded-lg flex justify-center items-center">
                <span class="icon-[fluent--clock-bill-20-filled] h-4 text-slate-50"></span>
              </div>
              <div class="w-full flex flex-col h-full">
                <p class="text-xs leading-4 text-slate-800">Pending</p>
                <p class="text-2xl leading-6 text-red-500 font-semibold">186</p>
              </div>
            </div>

            <div class="w-full h-14 bg-slate-100 rounded-lg p-2 flex gap-2 items-center">
              <div class="h-10 min-w-10 bg-gradient-to-t from-lime-600 to-lime-500 rounded-lg flex justify-center items-center">
                <span class="icon-[fluent--clock-bill-20-filled] h-4 text-slate-50"></span>
              </div>
              <div class="w-full flex flex-col h-full">
                <p class="text-xs leading-4 text-slate-800">Selesai</p>
                <p class="text-2xl leading-6 text-lime-500 font-semibold">186</p>
              </div>
            </div>
          </div>

          <div style="" class="w-full h-full flex flex-col gap-2 p-2 rounded-2xl bg-slate-50 shadow-mentari overflow-y-scroll">
            <div class="w-full bg-white shadow-mentari2 rounded-lg py-1 px-2">
                <p class="text-xs text-slate-400">#PSN-34532679</p>
                <div class="w-full flex">
                    <p class="w-full leading-5 text-indigo-800">Cetak Banner</p>
                    <div class="flex gap-2 items-center">
                        <span class="icon-[fluent--clipboard-settings-20-filled] h-4 text-blue-600"></span>
                        <p class="leading-5 text-blue-600">Proses</p>
                    </div>
                </div>
                <div class="w-full flex">
                    <p class="w-full text-xs text-slate-600">Cahyo Edi | 082345611234</p>
                    <p class="text-xs text-slate-600 whitespace-nowrap">22.00 | 12 Mei 2024</p>
                </div>
            </div>

            <div class="w-full bg-white shadow-mentari2 rounded-lg py-1 px-2">
                <p class="text-xs text-slate-400">#PSN-34532679</p>
                <div class="w-full flex">
                    <p class="w-full leading-5 text-indigo-800">Cetak Banner</p>
                    <div class="flex gap-2 items-center">
                        <span class="icon-[ph--clipboard-text-fill] h-4 text-lime-600"></span>
                        <p class="leading-5 text-lime-600">Siap</p>
                    </div>
                </div>
                <div class="w-full flex">
                    <p class="w-full text-xs text-slate-600">Cahyo Edi | 082345611234</p>
                    <p class="text-xs text-slate-600 whitespace-nowrap">22.00 | 12 Mei 2024</p>
                </div>
            </div>

            <div class="w-full bg-white shadow-mentari2 rounded-lg py-1 px-2">
                <p class="text-xs text-slate-400">#PSN-34532679</p>
                <div class="w-full flex">
                    <p class="w-full leading-5 text-indigo-800">Cetak Banner</p>
                    <div class="flex gap-2 items-center">
                        <span class="icon-[fluent--clock-bill-20-filled] h-4 text-red-500"></span>
                        <p class="leading-5 text-red-500">Pending</p>
                    </div>
                </div>
                <div class="w-full flex">
                    <p class="w-full text-xs text-slate-600">Cahyo Edi | 082345611234</p>
                    <p class="text-xs text-slate-600 whitespace-nowrap">22.00 | 12 Mei 2024</p>
                </div>
            </div>

            <div class="w-full bg-white shadow-mentari2 rounded-lg py-1 px-2">
                <p class="text-xs text-slate-400">#PSN-34532679</p>
                <div class="w-full flex">
                    <p class="w-full leading-5 text-indigo-800">Cetak Banner</p>
                    <div class="flex gap-2 items-center">
                        <span class="icon-[fluent--clock-bill-20-filled] h-4 text-lime-500"></span>
                        <p class="leading-5 text-lime-500">Selesai</p>
                    </div>
                </div>
                <div class="w-full flex">
                    <p class="w-full text-xs text-slate-600">Cahyo Edi | 082345611234</p>
                    <p class="text-xs text-slate-600 whitespace-nowrap">22.00 | 12 Mei 2024</p>
                </div>
            </div>
          </div>
        </div>

        <form action="/pesanan" method="post" class="w-5/12 h-full p-4 rounded-2xl bg-white flex flex-col gap-2">
            @csrf
            <p class="text-indigo-800 text-2xl leading-6 font-medium w-full">Buat pesanan</p>
            <div id="keranjang-items" class="size-full overflow-y-scroll list-pesanan flex flex-col gap-2">
              <div class="w-full flex gap-2 items-center items-row">
                <input type="text" name="pesanan[]" id="pesanan" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-8/12 rounded focus:border-none focus:outline-none" placeholder="Pesanan">
                <input type="number" step="500" name="harga[]" id="harga" class="item-total-price h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-3/12 rounded focus:border-none focus:outline-none" placeholder="Harga">
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
          <button type="button" id="modal-button-close" class=" w-32 p-2 leading-4 font-semibold rounded-lg bg-slate-200 text-slate-50" disabled>Pilih</button>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    
    {{-- Sort --}}
    <script>
      $(document).ready(function(){
        $("#dropdown-button").click(function(){
            $("#dropdown-content").toggleClass("hidden");
        });

        $(window).click(function(event) {
            if (!$(event.target).closest('#dropdown-button').length) {
                if (!$("#dropdown-content").hasClass('hidden')) {
                    $("#dropdown-content").addClass('hidden');
                }
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
              <input type="text" name="pesanan[]" class="h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-8/12 rounded focus:border-none focus:outline-none" placeholder="Pesanan">
              <input type="number" step="500" name="harga[]" class="item-total-price h-7 text-indigo-800 leading-4 px-2 bg-indigo-100 w-3/12 rounded focus:border-none focus:outline-none" placeholder="Harga">
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

    {{-- Modal --}}
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