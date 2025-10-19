<?= view('components/header') ?>

<body class="antialiased bg-slate-900 text-slate-100">
    <?= view('components/navbar') ?>

    <main class="mt-8 mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <header class="mb-8">
            <h1 class="text-3xl font-extrabold">Mood Board — BLAST TECH SHOP</h1>
            <p class="mt-2 text-slate-400">Design tokens, color palette, typographic scale and UI samples used on the landing page.</p>
        </header>

        <!-- Palette -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="card p-4">
                <h3 class="font-semibold mb-3">Primary Palette</h3>
                <div class="grid grid-cols-3 gap-3">
                    <div class="p-3 bg-[var(--brand-accent)] rounded text-center">#004080<br><span class="text-sm">Accent</span></div>
                    <div class="p-3 bg-[var(--brand-accent-2)] rounded text-center">#400080<br><span class="text-sm">Accent 2</span></div>
                    <div class="p-3 bg-[var(--brand-bg)] rounded text-center">#08090b<br><span class="text-sm">Background</span></div>
                </div>
            </div>

            <div class="card p-4">
                <h3 class="font-semibold mb-3">Neutrals</h3>
                <div class="grid grid-cols-3 gap-3">
                    <div class="p-3 bg-slate-800 rounded text-center">#0f1720<br><span class="text-sm">Surface</span></div>
                    <div class="p-3 bg-slate-700 rounded text-center">#334155<br><span class="text-sm">Muted</span></div>
                    <div class="p-3 bg-white/6 rounded text-center">#E6EEF5<br><span class="text-sm">Divider</span></div>
                </div>
            </div>

            <div class="card p-4">
                <h3 class="font-semibold mb-3">Accent usage</h3>
                <div class="flex gap-3">
                    <button class="btn-primary">Primary</button>
                    <button class="btn-ghost">Ghost</button>
                </div>
            </div>
        </section>

        <!-- Typography -->
        <section class="card p-6 mb-8">
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
        <section class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="card p-4">
                <h3 class="font-semibold mb-3">Product Card</h3>
                <?= view('components/cards/product_card', [
                    'img' => '/assets/img/bulletSplash.jpg',
                    'title' => 'GPU — Prototype',
                    'subtitle' => 'Brand Prototype • Dev',
                    'price' => '$499.00',
                    'availability' => 'in stock'
                ]) ?>
            </div>

            <div class="card p-4">
                <h3 class="font-semibold mb-3">Buttons & Inputs</h3>
                <div class="space-y-3">
                    <div class="flex gap-3">
                        <button class="btn-primary">Primary</button>
                        <button class="btn-ghost">Ghost</button>
                        <button class="btn-ghost" disabled>Disabled</button>
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-slate-300">Search</label>
                        <input type="search" class="mt-1 w-full px-3 py-2 rounded bg-white/5" placeholder="Search parts...">
                    </div>
                </div>
            </div>
        </section>

        <!-- Imagery -->
        <section class="card p-4 mb-8">
            <h3 class="font-semibold mb-3">Imagery & Texture</h3>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                <img src="/assets/img/bulletSplash.jpg" alt="img1" class="rounded-md object-cover w-full h-28">
                <img src="/assets/img/bulletSplash.jpg" alt="img2" class="rounded-md object-cover w-full h-28">
                <img src="/assets/img/bulletSplash.jpg" alt="img3" class="rounded-md object-cover w-full h-28">
                <img src="/assets/img/bulletSplash.jpg" alt="img4" class="rounded-md object-cover w-full h-28">
            </div>
        </section>
    </main>

    <?= view('components/footer') ?>
</body>
