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

        <form action="/Auth/logout" method="post">
            @csrf

            <div class="flex justify-end">
                <div class="basis-2/12">
                    <button class="w-full p-1 bg-red-600" name="logout" type="submit">Logout</button>
                </div>
            </div>
        </form>

    </nav>

    <main style="min-height: 900px;">

        <section class="p-2">

            <table class="border-collapse border border-slate-400 border-spacing-2 w-full" cellpadding="5">
                <thead>
                    <tr class="text-center bg-yellow-400">
                        <td class="border border-slate-400">Halaman</td>
                        <td class="border border-slate-400">Total</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="border border-slate-400">
                            <a href="#" class="text-blue-500 underline">Home/index</a>
                        </td>
                        <td class="border border-slate-400 text-right">100.000</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-400">
                            <a href="#" class="text-blue-500 underline">Home/index</a>
                        </td>
                        <td class="border border-slate-400 text-right">100.000</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-400">
                            <a href="#" class="text-blue-500 underline">Home/index</a>
                        </td>
                        <td class="border border-slate-400 text-right">100.000</td>
                    </tr>
                </tbody>

            </table>
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