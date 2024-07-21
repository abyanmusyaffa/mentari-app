
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="./src/style.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>Mentari | Administrator</title>
    <style>
      .shadow-mentari::-webkit-scrollbar, .list-pesanan::-webkit-scrollbar, .pelanggan::-webkit-scrollbar, .pelanggan-bayar::-webkit-scrollbar, .sakat::-webkit-scrollbar {
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
            <div class="w-full flex items-center gap-4 ps-8 pe-6 py-1 font-semibold text-indigo-800 ">
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
        <div class="w-full h-1/2 p-4 gap-2 rounded-2xl bg-white flex flex-col">
          <div class="w-full flex gap-2">
            <p class="text-indigo-800 text-2xl leading-6 font-medium w-full">Pengaturan</p>
          </div>
          <div class="w-full flex gap-8">
            <div class="w-1/3 flex gap-3">
              <div class="w-7/12 flex flex-col gap-3">
                <div class="flex flex-col w-full relative">
                  <p class="text-slate-500 leading-4 text-xs absolute left-2 top-1">Nama toko</p>
                  <input type="text" name="nama" class=" leading-4 px-2 pt-5 pb-1 bg-slate-100 rounded-lg focus:border-none focus:outline-none">
                </div>
                <div class="flex flex-col w-full relative">
                  <p class="text-slate-500 leading-4 text-xs absolute left-2 top-1">Alamat toko</p>
                  <input type="text" name="nama" class=" leading-4 px-2 pt-5 pb-1 bg-slate-100 rounded-lg focus:border-none focus:outline-none">
                </div>
                <div class="flex flex-col w-full relative">
                  <p class="text-slate-500 leading-4 text-xs absolute left-2 top-1">Nomor telepon</p>
                  <input type="text" name="nama" class=" leading-4 px-2 pt-5 pb-1 bg-slate-100 rounded-lg focus:border-none focus:outline-none">
                </div>
                <div class="flex flex-col w-full relative">
                  <p class="text-slate-500 leading-4 text-xs absolute left-2 top-1">Email</p>
                  <input type="text" name="nama" class=" leading-4 px-2 pt-5 pb-1 bg-slate-100 rounded-lg focus:border-none focus:outline-none">
                </div>
                <div class="flex flex-col w-full relative">
                  <p class="text-slate-500 leading-4 text-xs absolute left-2 top-1">Logo</p>
                  <input type="file" name="nama" class=" leading-4 px-2 pt-7 pb-3 bg-slate-100 rounded-lg focus:border-none focus:outline-none">
                </div>
              </div>
              <div class="w-5/12 flex flex-col gap-3">
                <div class="size-full flex flex-col justify-center items-center gap-2 rounded-lg bg-slate-100">
                  <img src="./img/mentari.svg" width="140" alt="" />
                </div>
                <button type="button" class="py-2 px-4 leading-4 rounded bg-lime-600 text-slate-50 text-center">Simpan perubahan</button>
              </div>
            </div>
            <div class="w-2/3 h-full flex gap-4">
              <div class="w-1/2 flex flex-col gap-2">
                <div class="w-full flex pe-2">
                  <p class="text-indigo-800 text-xl leading-5 w-full">Satuan</p>
                  <button class="flex items-center justify-center rounded size-5 bg-indigo-800 text-slate-50">
                    +
                  </button>
                </div>
                <div class="size-full sakat overflow-y-scroll rounded-lg gap-1 flex flex-col outline outline-2 outline-slate-100 p-2">
                  @foreach($satuans as $s)
                  <div class="w-full flex gap-2 items-center">
                    {{-- <div class="size-1 bg-slate-800 rounded-full"></div> --}}
                    <p class="w-full">{{ $s->nama }}</p>
                    <button class="flex items-center justify-center rounded p-1 bg-yellow-500 text-slate-50">
                      <span class="icon-[fa--pencil] text-xs"></span>
                    </button>
                    <button class="flex items-center justify-center rounded p-1 bg-red-600 text-slate-50">
                      <span class="icon-[fa--trash] text-xs"></span>
                    </button>
                  </div>
                  <div class="w-full h-[2px] bg-slate-100"></div>
                  @endforeach
                </div>
                {{-- <div class="w-full flex justify-end">
                  <button type="button" class="py-2 px-4 leading-4 rounded-lg bg-indigo-800 text-slate-50 text-center">Tambah satuan</button>
                </div> --}}
              </div>
              <div class="w-1/2 flex flex-col gap-2">
                <div class="w-full flex pe-2">
                  <p class="text-indigo-800 text-xl leading-5 w-full">Kategori</p>
                  <button class="flex items-center justify-center rounded size-5 bg-indigo-800 text-slate-50">
                    +
                  </button>
                </div>
                <div class="size-full sakat overflow-y-scroll rounded-lg gap-1 flex flex-col outline outline-2 outline-slate-100 p-2">
                  @foreach($kategoris as $k)
                  <div class="w-full flex gap-2 items-center">
                    {{-- <div class="size-1 bg-slate-800 rounded-full"></div> --}}
                    <p class="w-full">{{ $k->nama }}</p>
                    <button class="flex items-center justify-center rounded p-1 bg-yellow-500 text-slate-50">
                      <span class="icon-[fa--pencil] text-xs"></span>
                    </button>
                    <button class="flex items-center justify-center rounded p-1 bg-red-600 text-slate-50">
                      <span class="icon-[fa--trash] text-xs"></span>
                    </button>
                  </div>
                  <div class="w-full h-[2px] bg-slate-100"></div>
                  @endforeach
                </div>
                {{-- <div class="w-full flex justify-end">
                  <button type="button" class="py-2 px-4 leading-4 rounded-lg bg-indigo-800 text-slate-50 text-center">Tambah kategori</button>
                </div> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="w-full h-1/2 p-4 gap-2 rounded-2xl bg-white flex flex-col">
          <div class="w-full flex gap-2">
            <p class="text-indigo-800 text-2xl leading-6 font-medium w-full">User</p>
            <button  type="button" class="w-auto py-1 px-4 leading-4 rounded bg-indigo-800 text-slate-50 flex items-center whitespace-nowrap gap-2"><span class="icon-[mdi--plus] text-xl leading-4"></span><p>Tambah User</p></button>
          </div>
          <div class="size-full flex flex-col gap-1">
            <div class="size-full flex flex-col gap-1">
              <div class="w-full flex py-1 px-4 rounded-lg text-indigo-800">
                <div class="flex w-1/12 items-center gap-2">
                  
                </div>
                <div class="flex w-3/12 justify-center items-center gap-2">
                  <p class="leading-[26px] font-semibold">Nama</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px] font-semibold">Role</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px] font-semibold">Username</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px] font-semibold">Password</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  
                </div>
              </div>
              <div class="w-full h-[2px] bg-slate-100 rounded-sm"></div>
              <div class="w-full flex py-1 px-4 rounded-lg text-indigo-800">
                <div class="flex w-1/12 items-center gap-2">
                  <div style="background-image: url(/img/pp.jpg)" class="size-8 rounded-[50%] bg-top bg-cover bg-no-repeat self-center"></div>
                </div>
                <div class="flex w-3/12 justify-center items-center gap-2">
                  <p class="leading-[26px]">Abyan Aufa Alif Musyaffa</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <div class="flex justify-center rounded gap-2 w-32 bg-blue-600 text-slate-50">
                    Administrator
                  </div>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px]">mon</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p id="password" class="" data-password="12345">⁎⁎⁎⁎⁎⁎⁎⁎</p>
                  <button id="hide">
                    <span class="icon-[ph--eye-fill] mt-1"></span>
                  </button>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <button class="flex items-center justify-center rounded gap-2 w-20 bg-yellow-500 text-slate-50">
                    <span class="icon-[fa--pencil] text-xs"></span>
                    <p>Edit</p>
                  </button>
                  <button class="flex items-center justify-center rounded gap-2 w-20 bg-red-600 text-slate-50">
                    <span class="icon-[fa--trash] text-xs"></span>
                    <p>Hapus</p>
                  </button>
                </div>
              </div>
              <div class="w-full flex py-1 px-4 rounded-lg text-indigo-800">
                <div class="flex w-1/12 items-center gap-2">
                  <div style="background-image: url(/img/pp.jpg)" class="size-8 rounded-[50%] bg-top bg-cover bg-no-repeat self-center"></div>
                </div>
                <div class="flex w-3/12 justify-center items-center gap-2">
                  <p class="leading-[26px]">Abyan Aufa Alif Musyaffa</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <div class="flex justify-center rounded gap-2 w-32 bg-blue-500 text-slate-50">
                    Karyawan
                  </div>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p class="leading-[26px]">mon</p>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <p id="password" class="" data-password="12345">⁎⁎⁎⁎⁎⁎⁎⁎</p>
                  <button id="hide">
                    <span class="icon-[ph--eye-fill] mt-1"></span>
                  </button>
                </div>
                <div class="flex w-2/12 justify-center items-center gap-2">
                  <button class="flex items-center justify-center rounded gap-2 w-20 bg-yellow-500 text-slate-50">
                    <span class="icon-[fa--pencil] text-xs"></span>
                    <p>Edit</p>
                  </button>
                  <button class="flex items-center justify-center rounded gap-2 w-20 bg-red-600 text-slate-50">
                    <span class="icon-[fa--trash] text-xs"></span>
                    <p>Hapus</p>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Modal tambah satuan --}}
    <form action="/satuan" method="post">
      @csrf
      <div id="modal-satuan" class="hidden z-20 fixed inset-0 bg-indigo-500 bg-opacity-5 flex items-center justify-center">
        <div class="w-[480px] flex flex-col rounded-2xl bg-white p-4 gap-2">
          <div class="w-full flex items-center">
            <p class="w-full text-indigo-800 font-medium text-2xl leading-6">Tambah satuan</p>
            <button id="close-satuan" type="button" >
              <span class="icon-[mingcute--close-line] text-indigo-800"></span>
            </button>
          </div>
          <div class="w-full h-[2px] bg-slate-100"></div>
          <div class="flex flex-col w-full">
            <input type="text" name="nama" class="h-7 text-indigo-800 leading-4 px-2 bg-slate-100 rounded focus:border-none focus:outline-none">
          </div>
    
          <div class="w-1/2 flex gap-2 h-full justify-end items-end self-end ps-1 mt-4">
            <button id="" type="submit"  name="simpan" value="simpan" class="w-1/2 p-2 leading-4 font-semibold rounded-lg bg-blue-600 text-slate-50">Simpan</button>
          </div>
        </div>
      </div>
    </form>

    {{-- Modal edit satuan --}}
    <form action="/satuan/edit" method="post">
      @csrf
      <div id="modal-edit-satuan" class="hidden z-20 fixed inset-0 bg-indigo-500 bg-opacity-5 flex items-center justify-center">
        <div class="w-[480px] flex flex-col rounded-2xl bg-white p-4 gap-2">
          <div class="w-full flex items-center">
            <p class="w-full text-indigo-800 font-medium text-2xl leading-6">Tambah satuan</p>
            <button id="close-edit-satuan" type="button" >
              <span class="icon-[mingcute--close-line] text-indigo-800"></span>
            </button>
          </div>
          <div class="w-full h-[2px] bg-slate-100"></div>
          <div class="flex flex-col w-full">
            <input type="text" name="nama" class="h-7 text-indigo-800 leading-4 px-2 bg-slate-100 rounded focus:border-none focus:outline-none">
          </div>
    
          <div class="w-1/2 flex gap-2 h-full justify-end items-end self-end ps-1 mt-4">
            <button id="" type="submit"  name="simpan" value="simpan" class="w-1/2 p-2 leading-4 font-semibold rounded-lg bg-blue-600 text-slate-50">Simpan</button>
          </div>
        </div>
      </div>
    </form>

    {{-- Modal tambah kategori --}}
    <form action="/kategori" method="post">
      @csrf
      <div id="modal-kategori" class="hidden z-20 fixed inset-0 bg-indigo-500 bg-opacity-5 flex items-center justify-center">
        <div class="w-[480px] flex flex-col rounded-2xl bg-white p-4 gap-2">
          <div class="w-full flex items-center">
            <p class="w-full text-indigo-800 font-medium text-2xl leading-6">Tambah kategori</p>
            <button id="close-kategori" type="button" >
              <span class="icon-[mingcute--close-line] text-indigo-800"></span>
            </button>
          </div>
          <div class="w-full h-[2px] bg-slate-100"></div>
          <div class="flex flex-col w-full">
            <input type="text" name="nama" class="h-7 text-indigo-800 leading-4 px-2 bg-slate-100 rounded focus:border-none focus:outline-none">
          </div>
    
          <div class="w-1/2 flex gap-2 h-full justify-end items-end self-end ps-1 mt-4">
            <button id="" type="submit"  name="simpan" value="simpan" class="w-1/2 p-2 leading-4 font-semibold rounded-lg bg-blue-600 text-slate-50">Simpan</button>
          </div>
        </div>
      </div>
    </form>

    {{-- Modal edit kategori --}}
    <form action="/kategori/edit" method="post">
      @csrf
      <div id="modal-edit-kategori" class="hidden z-20 fixed inset-0 bg-indigo-500 bg-opacity-5 flex items-center justify-center">
        <div class="w-[480px] flex flex-col rounded-2xl bg-white p-4 gap-2">
          <div class="w-full flex items-center">
            <p class="w-full text-indigo-800 font-medium text-2xl leading-6">Tambah kategori</p>
            <button id="close-edit-kategori" type="button" >
              <span class="icon-[mingcute--close-line] text-indigo-800"></span>
            </button>
          </div>
          <div class="w-full h-[2px] bg-slate-100"></div>
          <div class="flex flex-col w-full">
            <input type="text" name="nama" class="h-7 text-indigo-800 leading-4 px-2 bg-slate-100 rounded focus:border-none focus:outline-none">
          </div>
    
          <div class="w-1/2 flex gap-2 h-full justify-end items-end self-end ps-1 mt-4">
            <button id="" type="submit"  name="simpan" value="simpan" class="w-1/2 p-2 leading-4 font-semibold rounded-lg bg-blue-600 text-slate-50">Simpan</button>
          </div>
        </div>
      </div>
    </form>
    
    {{-- Modal tambah user --}}
    <form action="/user" method="post">
      @csrf
      <div id="modal-user" class=" z-20 fixed inset-0 bg-indigo-500 bg-opacity-5 flex items-center justify-center">
        <div class="w-[480px] flex flex-col rounded-2xl bg-white p-4 gap-2">
          <div class="w-full flex items-center">
            <p class="w-full text-indigo-800 font-medium text-2xl leading-6">Tambah user</p>
            <button id="close-user" type="button" >
              <span class="icon-[mingcute--close-line] text-indigo-800"></span>
            </button>
          </div>
          <div class="w-full h-[2px] bg-slate-100"></div>
          <div class="flex flex-col w-full relative">
            <p class="text-slate-500 leading-4 text-xs absolute left-2 top-1">Nama lengkap</p>
            <input type="text" name="nama" class=" leading-4 px-2 pt-5 pb-1 bg-slate-100 rounded-lg focus:border-none focus:outline-none">
          </div>
          <div class="flex flex-col w-full relative">
            <p class="text-slate-500 leading-4 text-xs absolute left-2 top-1">Role</p>
            <select name="role" class=" leading-4 px-2 pt-5 pb-1 bg-slate-100 rounded-lg focus:border-none focus:outline-none">
              <option value="" hidden ></option>
              <option value="admin">Administrator</option>
              <option value="user">Karyawan</option>
            </select>
          </div>
          <div class="flex flex-col w-full relative">
            <p class="text-slate-500 leading-4 text-xs absolute left-2 top-1">Username</p>
            <input type="text" name="username" class=" leading-4 px-2 pt-5 pb-1 bg-slate-100 rounded-lg focus:border-none focus:outline-none">
          </div>
          <div class="flex flex-col w-full relative">
            <p class="text-slate-500 leading-4 text-xs absolute left-2 top-1">Password</p>
            <input type="password" name="password" class=" leading-4 px-2 pt-5 pb-1 bg-slate-100 rounded-lg focus:border-none focus:outline-none">
          </div>
          <div class="flex flex-col w-full relative">
            <p class="text-slate-500 leading-4 text-xs absolute left-2 top-1">Logo</p>
            <input type="file" name="nama" class=" leading-4 px-2 pt-7 pb-3 bg-slate-100 rounded-lg focus:border-none focus:outline-none">
          </div>
    
          <div class="w-1/2 flex gap-2 h-full justify-end items-end self-end ps-1 mt-4">
            <button id="" type="submit"  name="simpan" value="simpan" class="w-1/2 p-2 leading-4 font-semibold rounded-lg bg-blue-600 text-slate-50">Simpan</button>
          </div>
        </div>
      </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Password --}}
    <script>
      $(document).ready(function() {
        $('#hide').on('click', function() {
          var $passwordField = $('#password');
          var actualPassword = $passwordField.data('password');
          var isHidden = $passwordField.text() === '⁎⁎⁎⁎⁎⁎⁎⁎';

          if (isHidden) {
            $passwordField.text(actualPassword);
            $(this).find('span').removeClass('icon-[ph--eye-fill]').addClass('icon-[ph--eye-slash-fill]');
          } else {
            $passwordField.text('⁎⁎⁎⁎⁎⁎⁎⁎');
            $(this).find('span').removeClass('icon-[ph--eye-slash-fill]').addClass('icon-[ph--eye-fill]');
          }
        });
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
    
  </body>
</html>