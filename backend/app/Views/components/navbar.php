<nav class="w-full sticky top-0 z-40 bg-slate-700">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between py-4">
            <div class="flex items-center gap-6">
                <a href="/" class="flex items-center gap-3">
                    <img src="/images/logo.png" alt="Blast Tech Logo" class="h-10 w-10 rounded-md object-cover"/>
                    <span class="brand-logo text-2xl">BLAST TECH <span class="text-slate-400">SHOP</span></span>
                </a>
                <nav class="hidden md:flex items-center gap-4 text-sm text-slate-300">
                    <a href="#products" class="hover:text-white">Products</a>
                    <a href="#deals" class="hover:text-white">Deals</a>
                    <a href="#mood-board" class="hover:text-white">MoodBoard</a>
                    <a href="#roadmap" class="hover:text-white">Roadmap</a>
                </nav>
            </div>

            <div class="flex items-center gap-3">
                <div class="hidden sm:flex items-center bg-white/5 rounded-md px-3 py-1">
                    <i class="fa-solid fa-magnifying-glass text-slate-400 mr-2"></i>
                    <input type="search" placeholder="Search parts, GPUs, SSDs..." class="bg-transparent outline-none placeholder:text-slate-500 text-sm text-white " />
                </div>

                <?= view('components/buttons/b_primary', ['link' => '/signin', 'text' => "Sign In"]) ?>
                <?= view('components/buttons/b_ghost', ['link' => '/signup', 'text' => "Sign Up"]) ?>
            </div>
        </div>
    </div>
</nav>
