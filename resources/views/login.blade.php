<!doctype html>
<html>
<x-head title="Login" />
<body class="font-baloo">
    <div class="h-screen w-screen flex justify-center items-center">
        <form action="/auth" method="post">
        @csrf
        <div class="w-[400px] bg-slate-100 rounded-2xl p-6 flex flex-col gap-9">
            <div class="w-full flex flex-col gap-6 items-center">
                <img src="./img/mentari.svg" width="140" alt="">
                <p class="text-slate-500 text-xs leading-3 text-center">Selamat Datang,<br>Silahkan login dengan username dan password</p>
            </div>
            <div class="w-full flex flex-col gap-6">
                <div class="relative">
                    <input name="username" type="text" class="w-full ps-10 pe-2 py-1 rounded-lg leading-4 bg-white text-slate-500 placeholder-slate-500 focus:border-none focus:outline-none" placeholder="Username">
                    <div class="absolute left-2 top-2">
                        <span class="icon-[mdi--user] w-4 text-indigo-800"></span>
                    </div>
                </div>
                <div class="relative">
                    <input name="password" type="password" class="w-full ps-10 pe-2 py-1 rounded-lg leading-4 bg-white text-slate-500 placeholder-slate-500 focus:border-none focus:outline-none" placeholder="Password">
                    <div class="absolute left-2 top-2">
                        <span class="icon-[ph--lock-key-fill] w-4 text-indigo-800"></span>
                    </div>
                </div>
            </div>
            <div class="w-full flex justify-center">
                <button name="login" type="submit" class="w-40 p-2 leading-4 font-semibold rounded-lg bg-indigo-800 text-slate-50 hover:bg-indigo-900  ">Login</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>