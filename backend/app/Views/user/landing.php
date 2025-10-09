<?= view('components/header') ?>

<body class="antialiased bg-slate-900">
    <?= view('components/navbar') ?>
    <!-- HERO -->
    <main class="mt-8">
        <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <p class="text-sm text-brand-muted text-white">New arrivals • Free shipping over $99</p>
                    <h1 class="mt-4 text-4xl sm:text-5xl font-extrabold leading-tight text-white">Power your build with speed and reliability</h1>

                    <p class="mt-4 text-lg text-slate-300 max-w-xl">BLAST TECH SHOP carries the latest GPUs, CPUs, motherboards, SSDs and peripherals — curated for performance builders and upgrade-first customers.</p>

                            <div class="mt-6 flex items-center gap-4">
                                <a href="#products" class="btn-primary inline-flex items-center gap-3"><i class="fa-solid fa-bolt"></i> Shop Now</a>
                                <a href="#deals" class="btn-ghost inline-flex items-center gap-2"><i class="fa-solid fa-tag"></i> Today's Deals</a>
                            </div>

                    <ul class="mt-8 grid grid-cols-2 sm:grid-cols-3 gap-3 text-sm text-slate-400">
                        <li><strong class="text-white">Fast delivery</strong><span class="ml-2">— 1-3 business days</span></li>
                        <li><strong class="text-white">Secure payments</strong><span class="ml-2">— Visa, MC, PayPal</span></li>
                        <li><strong class="text-white">30-day returns</strong><span class="ml-2">— Peace of mind</span></li>
                    </ul>
                </div>
                <div class="hidden lg:block">
                    <div class="card p-6">
                        <img src="/images/default_product.png" alt="Hero product" class="w-full rounded-md object-cover" style="height:360px;" />
                    </div>
                </div>
            </div>
        </section>

        <!-- PRODUCTS GRID -->
        <section id="products" class="mt-12 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-bold">Popular picks</h2>
                <a href="/products" class="text-slate-300 hover:text-white">View all</a>
            </div>

            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Product card template (repeat) -->
                <?php for ($i = 1; $i <= 8; $i++): ?>
                    <?= view('components/cards/product_card', [
                        'img' => null,
                        'title' => "Component $i — High Perf",
                        'subtitle' => 'Brand X • Model Z',
                        'price' => '$' . number_format(49 + $i * 15, 2),
                        'availability' => 'in stock'
                    ]) ?>
                <?php endfor; ?>
            </div>
        </section>

        <?= view('components/cta_section') ?>
   
    </main>
    <?= view('components/footer') ?>
</body>