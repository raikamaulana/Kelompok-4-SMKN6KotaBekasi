<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/dist/output.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
    <title><?php echo $data['title'] ?></title>
</head>
<body>
    <div class="bg-blue-800 rounded-lg py-4 m-2">
        <h1 align="center" class="text-white text-5xl font-chakra font-semibold tracking-wider"><?php echo $data['header'] ?></h1>
    </div>
    <div class="bg-slate-300 flex gap-10 rounded-lg p-4 m-2">
        <div class="flex items-center relative max-w-3xl">
            <img src="./Image/Logo6.png" width="100" height="100" class="-translate-y-16"></img>
            <hr class="absolute left-16 w-28 border-t-4 border-blue-500 mr-4 rotate-90 -translate-y-16" />
            <div class="ml-12">
                <h1 class="text-4xl font-medium font-mono"><?php echo $data['header2']?></h1>
                <h2 class="-mt-1 text-sm text-slate-600">#kelompokempatjayajayajaya</h2>
                <p class="mt-4 text-justify"><?php echo $data['header3'] ?></p>
                <div class="flex gap-5 mt-8">
                    <a href="https://instagram.com">
                        <img src="./Image/instagram.png" width="35" height="35" alt="" class="opacity-50 hover:scale-110 hover:transition-all hover:duration-750 hover:opacity-100">
                    </a>
                    <a href="https://whatsapp.com">
                        <img src="./Image/whatsapp.png" width="35" height="35" alt="" class="opacity-50 hover:scale-110 hover:transition-all hover:duration-750 hover:opacity-100">
                    </a>
                    <a href="https://discord.com">
                        <img src="./Image/discord.png" width="35" height="35" alt="" class="opacity-50 hover:scale-110 hover:transition-all hover:duration-750 hover:opacity-100">
                    </a>
                </div>
            </div>
        </div>
        <div class="border-l border-slate-500 w-full">
            <div class="ml-10">
                <h1 class="text-lg font-bold">Sekolah :</h1>
                <h2><?php echo $data['namaSekolah'] ?></h2>
                <h1 class="text-lg font-bold mt-2">Mata Pelajaran :</h1>
                <h2><?php echo $data['mataPelajaran'] ?></h2>
                <h3 class="text-lg font-bold mt-2">Guru :</h3>
                <h4><?php echo $data['namaGuru'] ?></h4>
                <h5 class="text-lg font-bold mt-2">Kelas :</h5>
                <h6><?php echo $data['kelas'] ?></h6>
            </div>
        </div>
    </div>
    <div class="">
        <div class="flex bg-stone-600 rounded-lg text-white m-2 p-3 font-supercell">
            <h1 class="w-1/12 pl-2">No.</h1>
            <h2 class="w-full pl-5 border-l">Nama</h2>
            <h3 class="w-1/4 pl-5 border-l">Absen</h3>
            <h4 class="w-full pl-5 border-l">NIS</h4>
        </div>
        <div class="flex bg-gradient-to-b from-stone-300 via-stone-300 to-stone-400 rounded-lg m-2 p-3 hover:bg-gradient-to-b hover:from-lime-400 hover:via-lime-400 hover:to-green-500">
            <p class="w-1/12 flex items-center text-lg pl-2">1.</p>
            <div class="w-full pl-5 border-l border-slate-800">
                <h1 class="font-bold"><?php echo $data['namaKetuaKelompok']?></h1>
                <p class="italic mb-3">Ketua Kelompok</p>
            </div>
            <h2 class="w-1/4 pl-5 border-l border-slate-800"><?php echo $data['absenKetuaKelompok']?></h2>
            <h3 class="w-full pl-5 border-l border-slate-800"><?php echo $data['nisKetuaKelompok']?></h3>
        </div>
        <div class="flex bg-gradient-to-b from-stone-300 via-stone-300 to-stone-400 rounded-lg m-2 p-3 hover:bg-gradient-to-b hover:from-lime-400 hover:via-lime-400 hover:to-green-500">
            <p class="w-1/12 flex items-center text-lg pl-2">2.</p>
            <div class="w-full pl-5 border-l border-slate-800">
                <h1 class="font-bold"><?php echo $data['anggota1']?></h1>
                <p class="italic mb-3">Anggota</p>
            </div>
            <h2 class="w-1/4 pl-5 border-l border-slate-800"><?php echo $data['absenAnggota1']?></h2>
            <h3 class="w-full pl-5 border-l border-slate-800"><?php echo $data['nisAnggota1']?></h3>
        </div>
        <div class="flex bg-gradient-to-b from-stone-300 via-stone-300 to-stone-400 rounded-lg m-2 p-3 hover:bg-gradient-to-b hover:from-lime-400 hover:via-lime-400 hover:to-green-500">
            <p class="w-1/12 flex items-center text-lg pl-2">3.</p>
            <div class="w-full pl-5 border-l border-slate-800">
                <h1 class="font-bold"><?php echo $data['anggota2']?></h1>
                <p class="italic mb-3">Anggota</p>
            </div>
            <h2 class="w-1/4 pl-5 border-l border-slate-800"><?php echo $data['absenAnggota2']?></h2>
            <h3 class="w-full pl-5 border-l border-slate-800"><?php echo $data['nisAnggota2']?></h3>
        </div>
        <div class="flex bg-gradient-to-b from-stone-300 via-stone-300 to-stone-400 rounded-lg m-2 p-3 hover:bg-gradient-to-b hover:from-lime-400 hover:via-lime-400 hover:to-green-500">
            <p class="w-1/12 flex items-center text-lg pl-2">4.</p>
            <div class="w-full pl-5 border-l border-slate-800">
                <h1 class="font-bold"><?php echo $data['anggota3']?></h1>
                <p class="italic mb-3">Anggota</p>
            </div>
            <h2 class="w-1/4 pl-5 border-l border-slate-800"><?php echo $data['absenAnggota3']?></h2>
            <h3 class="w-full pl-5 border-l border-slate-800"><?php echo $data['nisAnggota3']?></h3>
        </div>
        <div class="flex bg-gradient-to-b from-stone-300 via-stone-300 to-stone-400 rounded-lg m-2 p-3 hover:bg-gradient-to-b hover:from-lime-400 hover:via-lime-400 hover:to-green-500">
            <p class="w-1/12 flex items-center text-lg pl-2">5.</p>
            <div class="w-full pl-5 border-l border-slate-800">
                <h1 class="font-bold"><?php echo $data['anggota4']?></h1>
                <p class="italic mb-3">Anggota</p>
            </div>
            <h2 class="w-1/4 pl-5 border-l border-slate-800"><?php echo $data['absenAnggota4']?></h2>
            <h3 class="w-full pl-5 border-l border-slate-800"><?php echo $data['nisAnggota4']?></h3>
        </div>
    </div>
    <div class="bg-blue-800 rounded-lg py-8 mx-2 mb-1">
        <h4 class="text-center text-5xl text-white font-bold font-chakra tracking-wider"><?php echo $data['footer'] ?></h4>
    </div>
    <div class="bg-blue-900 rounded-lg py-2 mx-2 mb-2">
        <h4 class="text-center text-sm text-white font-thin italic"><?php echo $data['copyright'] ?></h4>
    </div>
</body>
</html>