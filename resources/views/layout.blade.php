<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="./css/style.css"> --}}
    {!! Html::style('./css/style.css') !!}
    {!! Html::style('./css/bootstrap.min.css') !!}
    {{-- <link rel="stylesheet" href="./css/bootstrap.min.css"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navigationbar">
        <ul class="navigationbar-nav">

            <li class="logo">
                <a href="#" class="navLink">
                    <span class="linkText">Library</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Library</title><path d="M64 480H48a32 32 0 01-32-32V112a32 32 0 0132-32h16a32 32 0 0132 32v336a32 32 0 01-32 32zM240 176a32 32 0 00-32-32h-64a32 32 0 00-32 32v28a4 4 0 004 4h120a4 4 0 004-4zM112 448a32 32 0 0032 32h64a32 32 0 0032-32v-30a2 2 0 00-2-2H114a2 2 0 00-2 2z"/><rect x="112" y="240" width="128" height="144" rx="2" ry="2"/><path d="M320 480h-32a32 32 0 01-32-32V64a32 32 0 0132-32h32a32 32 0 0132 32v384a32 32 0 01-32 32zM495.89 445.45l-32.23-340c-1.48-15.65-16.94-27-34.53-25.31l-31.85 3c-17.59 1.67-30.65 15.71-29.17 31.36l32.23 340c1.48 15.65 16.94 27 34.53 25.31l31.85-3c17.59-1.67 30.65-15.71 29.17-31.36z"/></svg>
                </a>
            </li>

            <li class="navItem">
                <a href="{!! route('menu') !!}" class="navLink">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Home</title><path d="M261.56 101.28a8 8 0 00-11.06 0L66.4 277.15a8 8 0 00-2.47 5.79L63.9 448a32 32 0 0032 32H192a16 16 0 0016-16V328a8 8 0 018-8h80a8 8 0 018 8v136a16 16 0 0016 16h96.06a32 32 0 0032-32V282.94a8 8 0 00-2.47-5.79z"/><path d="M490.91 244.15l-74.8-71.56V64a16 16 0 00-16-16h-48a16 16 0 00-16 16v32l-57.92-55.38C272.77 35.14 264.71 32 256 32c-8.68 0-16.72 3.14-22.14 8.63l-212.7 203.5c-6.22 6-7 15.87-1.34 22.37A16 16 0 0043 267.56L250.5 69.28a8 8 0 0111.06 0l207.52 198.28a16 16 0 0022.59-.44c6.14-6.36 5.63-16.86-.76-22.97z"/></svg>
                <span class="linkText">Accueil</span>
                </a>
            </li>

            <li class="navItem">
            <a href="{{ route('book.index')}}" class="navLink">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Book</title><path d="M202.24 74C166.11 56.75 115.61 48.3 48 48a31.36 31.36 0 00-17.92 5.33A32 32 0 0016 79.9V366c0 19.34 13.76 33.93 32 33.93 71.07 0 142.36 6.64 185.06 47a4.11 4.11 0 006.94-3V106.82a15.89 15.89 0 00-5.46-12A143 143 0 00202.24 74zM481.92 53.3A31.33 31.33 0 00464 48c-67.61.3-118.11 8.71-154.24 26a143.31 143.31 0 00-32.31 20.78 15.93 15.93 0 00-5.45 12v337.13a3.93 3.93 0 006.68 2.81c25.67-25.5 70.72-46.82 185.36-46.81a32 32 0 0032-32v-288a32 32 0 00-14.12-26.61z"/></svg>
                <span class="linkText">Livres</span>
                </a>
            </li>

            <li class="navItem">
                <a href="#" class="navLink">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>People</title><path d="M336 256c-20.56 0-40.44-9.18-56-25.84-15.13-16.25-24.37-37.92-26-61-1.74-24.62 5.77-47.26 21.14-63.76S312 80 336 80c23.83 0 45.38 9.06 60.7 25.52 15.47 16.62 23 39.22 21.26 63.63-1.67 23.11-10.9 44.77-26 61C376.44 246.82 356.57 256 336 256zm66-88zM467.83 432H204.18a27.71 27.71 0 01-22-10.67 30.22 30.22 0 01-5.26-25.79c8.42-33.81 29.28-61.85 60.32-81.08C264.79 297.4 299.86 288 336 288c36.85 0 71 9 98.71 26.05 31.11 19.13 52 47.33 60.38 81.55a30.27 30.27 0 01-5.32 25.78A27.68 27.68 0 01467.83 432zM147 260c-35.19 0-66.13-32.72-69-72.93-1.42-20.6 5-39.65 18-53.62 12.86-13.83 31-21.45 51-21.45s38 7.66 50.93 21.57c13.1 14.08 19.5 33.09 18 53.52-2.87 40.2-33.8 72.91-68.93 72.91zM212.66 291.45c-17.59-8.6-40.42-12.9-65.65-12.9-29.46 0-58.07 7.68-80.57 21.62-25.51 15.83-42.67 38.88-49.6 66.71a27.39 27.39 0 004.79 23.36A25.32 25.32 0 0041.72 400h111a8 8 0 007.87-6.57c.11-.63.25-1.26.41-1.88 8.48-34.06 28.35-62.84 57.71-83.82a8 8 0 00-.63-13.39c-1.57-.92-3.37-1.89-5.42-2.89z"/></svg>
                <span class="linkText">Lecteurs</span>
                </a>
            </li>

            <li class="navItem">
                <a href="#" class="navLink">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>List</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M160 144h288M160 256h288M160 368h288"/><circle cx="80" cy="144" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="80" cy="256" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="80" cy="368" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                <span class="linkText">Catégories</span>
                </a>
            </li>

            <li class="navItem">
                <a href="#" class="navLink">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Repeat</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M320 120l48 48-48 48"/><path d="M352 168H144a80.24 80.24 0 00-80 80v16M192 392l-48-48 48-48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M160 344h208a80.24 80.24 0 0080-80v-16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                <span class="linkText">Emprunts</span>
                </a>
            </li>

            <li class="navItem">
                <a href="#" class="navLink">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Person Circle</title><path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm-50.22 116.82C218.45 151.39 236.28 144 256 144s37.39 7.44 50.11 20.94c12.89 13.68 19.16 32.06 17.68 51.82C320.83 256 290.43 288 256 288s-64.89-32-67.79-71.25c-1.47-19.92 4.79-38.36 17.57-51.93zM256 432a175.49 175.49 0 01-126-53.22 122.91 122.91 0 0135.14-33.44C190.63 329 222.89 320 256 320s65.37 9 90.83 25.34A122.87 122.87 0 01382 378.78 175.45 175.45 0 01256 432z"/></svg>
                <span class="linkText">Utilisateurs</span>
                </a>
            </li>

            <li class="navItem hide">
                <a href="{!! route('logout')!!}" class="navLink">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Log Out</title><path d="M160 256a16 16 0 0116-16h144V136c0-32-33.79-56-64-56H104a56.06 56.06 0 00-56 56v240a56.06 56.06 0 0056 56h160a56.06 56.06 0 0056-56V272H176a16 16 0 01-16-16zM459.31 244.69l-80-80a16 16 0 00-22.62 22.62L409.37 240H320v32h89.37l-52.68 52.69a16 16 0 1022.62 22.62l80-80a16 16 0 000-22.62z"/></svg>
                <span class="linkText">Se déconnecter</span>
                </a>
            </li>
        </ul>
    </nav>

    <main>

        <div class="searchs">
            <form action="" method="get">
                <input type="search" name="" placeholder="Faite votre recherche">
                <input type="submit" value="Search">
            </form>
        </div>
        <div class="container">
            @yield('content')
            <div class="mt-2" style="float: right">
                <a href="javascript:history.back()" class="btn btn-primary">
                    <span>Retour</span>
                </a>
            </div>
        </div>
    </main>
</body>
</html>
