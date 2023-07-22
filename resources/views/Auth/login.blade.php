<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web undangan</title>

    <link rel="stylesheet" href="/asset/tailwind/output.css">

</head>

<body class="bg-color-4 ">

    <nav class="p-2 bg-blue-500" style="color: #EEEEEE;">
        <h1><b>Buat undangan</b></h1>
    </nav>

    <main style="min-height: 900px;">

        <section class="bg-white m-2 p-2">
            <h1 class="text-center mb-4 font-bold">LOGIN</h1>

            @if (session()->has('loginFailed'))
            <div class="p-2 mb-2 bg-red-100 text-red-500 border border-red-500 text-[12px] italic">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, eveniet?</p>
            </div>
            @endif

            <form method="post" action="/Auth/login">
                @csrf

                <div class="mb-2">
                    <label class="block" for="username">Username</label>
                    <input class="p-2 bg-slate-100 w-full" type="text" name="username" id="username" placeholder="username">

                    @error('username')
                    <ul class="text-red-500 text-[12px] italic list-disc ml-5">
                        <li><?= $message ?></li>
                    </ul>
                    @enderror
                </div>

                <div class="mb-2">
                    <label class="block" for="password">Password</label>
                    <input class="p-2 bg-slate-100 w-full" type="password" name="password" id="password" placeholder="username">
                    @error('password')
                    <ul class="text-red-500 text-[12px] italic list-disc ml-5">
                        <li><?= $message ?></li>
                    </ul>
                    @enderror
                </div>

                <div>
                    <button class="bg-blue-500 px-2 py-1 text-white w-full" name="login" type="submit">Login</button>
                </div>
            </form>

        </section>

    </main>

    <footer class="p-2 text-center" style="background-color: #171717; color: #EDEDED;">
        <p>Build by - dinarwijaksono11@gmail.com</p>
        <a href="https://wa.me/0859106979837" target="_blank" class="text-blue-400 hover:underline">
            <p>WA 0859 1069 7983 7</p>
        </a>
    </footer>


</body>

</html>