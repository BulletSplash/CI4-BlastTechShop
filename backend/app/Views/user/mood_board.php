<?= view('components/head') ?>

<body class="antialiased bg-slate-900 text-slate-100">
    <?= view('components/header') ?>

    <main class="mx-auto mt-8 max-w-6xl sm:px-6 lg:px-8">
        <section class="mb-8 ">
            <h1 class="text-3xl font-extrabold">Mood Board</h1>
            <p class="mt-2 text-slate-400">Design tokens, color palette, typographic scale and UI samples used on the BLAST TECH SHOP.</p>
        </section>

        <!-- Palette -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8 font-bold">
            <div class="card">
                <h3 class="font-semibold mb-3">Base on <?= view("components/buttons/b_underlined", ['link' => 'https://tailwindcss.com/docs/colors', 'text' => 'TailwindCSS']) ?> color palette</h3>
                <div class="grid grid-rows-3 gap-3">
                    <div class="p-3 bg-blue-900 rounded text-center border border-white"> Blue - 900 <br></div>
                    <div class="p-3 bg-violet-950 rounded text-center border border-white"> Violet - 950 <br></div>
                    <div class="p-3 bg-slate-900 rounded text-center border border-white"> Slate - 900 <br></div>
                </div>
            </div>

            <div class="card">
                <div class="py-[18px]"></div>
                <div class="grid grid-rows-3 gap-3">
                    <div class="p-3 bg-slate-400 rounded text-center border border-white"> Slate - 400 <br></div>
                    <div class="p-3 bg-amber-600 rounded text-center border border-white"> Amber - 600 <br></div>
                    <div class="p-3 bg-white rounded text-center border border-white text-slate-800"> White <br></div>
                </div>
            </div>
        </section>

        <section class="mb-8">
            <h3 class="font-semibold mb-3">Buttons & Inputs</h3>
            <div class="card">
                <div class="flex gap-3">
                    <?= view("components/buttons/b_primary", ['link' => null, 'text' => 'Primary']) ?>
                    <?= view("components/buttons/b_ghost", ['link' => '', 'text' => 'Ghost']) ?>
                    <div class="flex gap-3 py-2.5">
                        <?= view("components/buttons/b_underlined", ['link', 'text' => 'Underlined']) ?>
                        <?= view("components/buttons/b_glow", ['link' => '', 'text' => 'Glow']) ?>
                    </div>
                    <div class="hidden sm:flex items-center bg-white/5 rounded-md px-3 py-1 ml-10">
                        <i class="fa-solid fa-magnifying-glass text-slate-400 mr-2"></i>
                        <input type="search" placeholder="Search parts, GPUs, SSDs..." class="bg-transparent outline-none placeholder:text-slate-500 text-sm text-white " />
                    </div>
                </div>
            </div>
        </section>

        <!-- Typography -->
        <section class="card mb-8">
            <h3 class="font-semibold mb-4">Typography</h3>
            <div class="space-y-3">
                <div>
                    <h1 class="text-3xl sm:text-4xl font-extrabold">H1 — Playfair Display / 40px</h1>
                    <p class="text-slate-400">Usage: headings, hero titles.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold">H2 — Playfair Display / 28px</h2>
                    <p class="text-slate-400">Usage: section headings.</p>
                </div>
                <div>
                    <p class="text-base">Body copy — Lato 16px. Example sentence: "BLASTTECH SHOP carries the latest GPUs, CPUs, motherboards, SSDs and peripherals."</p>
                </div>
            </div>
        </section>

        <!-- UI samples -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="card">
                <h3 class="font-semibold mb-3">Cards Sample</h3>
                <?= view('components/cards/product_card', [
                    'img' => null,
                    'title' => "GPU — High Perf",
                    'subtitle' => 'Brand X • Model Z',
                    'price' => '$' . number_format(10000, 2),
                    'availability' => 'in stock'
                ]) ?>
            </div>
            <div class="card">
                <div class="py-[18px]"></div>
                <?= view('components/cards/product_card_2', [
                    'img' => null,
                    'title' => "GPU — High Perf",
                    'subtitle' => 'Brand X • Model Z',
                    'price' => '$' . number_format(10000, 2),
                    'availability' => 'in stock'
                ]) ?>
            </div>
            <div class="card text-xs">
                <div class="py-[18px]"></div>
                <?= view('components/cards/product_card_os', [
                    'img' => null,
                    'title' => "GPU — High Perf",
                    'subtitle' => 'Brand X • Model Z',
                    'price' => '$' . number_format(10000, 2),
                    'availability' => 'out of stock'
                ]) ?>
            </div>
        </section>

        <!-- Imagery -->
        <section class="card p-4 mb-8">
            <h3 class="font-semibold mb-3">Logos</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-5">
                <div class="border border-white/4 bg-gradient-to-t from-white/2 to-white/1 text-center pb-5">
                    <div class="flex items-center justify-center rounded-full bg-violet-950 mt-10 ml-15 mr-15 mb-2">
                        <img src="images/logo.png" class="md:p-5 lg:p-10" />
                    </div>
                    <h3 class="font-semibold text-white">Main - Circle</h3>
                </div>
                <div class="border border-white/4 bg-gradient-to-t from-white/2 to-white/1 text-center pb-5">
                    <div class="flex items-center justify-center rounded-xl bg-violet-950 mt-10 ml-15 mr-15 mb-2">
                        <img src="images/logo.png" class=" p-2 sm:p-5 md:p-10" />
                    </div>
                    <h3 class="font-semibold text-white">Main - Square</h3>
                </div>
            </div>
        </section>
    </main>

    <?= view('components/footer') ?>
</body>
