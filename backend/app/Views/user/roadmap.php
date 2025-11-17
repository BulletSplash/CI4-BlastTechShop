<?= view('components/head') ?>

<body class="antialiased bg-slate-900 text-slate-100 w-full">
	<?= view('components/header') ?>

	<main class="mt-8 mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
		<header class="mb-6">
			<h1 class="text-3xl font-extrabold">Roadmap & Functionalities</h1>
			<p class="mt-2 text-slate-400">Planned features, priorities and a master list of product functionalities.</p>
		</header>
        
		<section class="card p-6 mb-8">
			<div class="flex items-center justify-between mb-4">
				<h2 class="text-2xl font-bold">Roadmap Timeline</h2>
			</div>

			<ol id="timelineList" class="relative border-l border-slate-700 space-y-6">
				<?php
					$defaultTimeline = [
						['id'=>'t1','date'=>'Now','title'=>'MVP Launch','desc'=>'Core product listing, cart, and checkout features complete.','status'=>'in progress'],
						['id'=>'t2','date'=>'Q1','title'=>'Wishlist & Bundles','desc'=>'Save items and create bundle discounts at checkout.','status'=>'planned'],
						['id'=>'t3','date'=>'Q2','title'=>'Build Configurator','desc'=>'Interactive PC builder with compatibility checks and estimated pricing.','status'=>'backlog'],
					];
					$timeline = $timelineItems ?? $defaultTimeline;
				?>

				<?php foreach ($timeline as $item): ?>
					<li class="ml-6" data-id="<?= esc($item['id']) ?>">
						<span class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full <?= $item['status'] === 'done' ? 'bg-slate-600 text-black' : ($item['status'] === 'in progress' ? 'bg-green-600 p-2 text-white' : 'bg-slate-600 text-white') ?> font-bold text-xs"><?= esc($item['date']) ?></span>
						<div class="flex items-start justify-between gap-4">
							<div>
								<h3 class="text-lg font-semibold"><?= esc($item['title']) ?></h3>
								<p class="text-slate-300"><?= esc($item['desc']) ?></p>
								<time class="text-sm <?= $item['status'] === 'planned' ? 'text-amber-600' : ($item['status'] === 'in progress' ? 'text-blue-500' : 'text-white') ?>"><?= esc(ucfirst($item['status'])) ?></time>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
			</ol>
		</section>

		<!-- List of Functionalities -->
		<section class="card p-6 mb-8">
			<div class="flex items-center justify-between">
				<h2 class="text-2xl font-bold">List of Functionalities</h2>
			</div>

			<p class="text-slate-400 mt-2">This master list documents core features, status, and priority.</p>

			<?php
				$defaultFunctions = [
					['id'=> 'f1', 'title'=>'Product catalog', 'desc'=>'Search, filter, categories, product pages', 'status'=>'in progress', 'priority'=>'high'],
					['id'=> 'f2', 'title'=>'Cart & Checkout', 'desc'=>'Cart persistence, checkout, payments', 'status'=>'in progress', 'priority'=>'high'],
					['id'=> 'f3', 'title'=>'User accounts', 'desc'=>'Login, registration, order history', 'status'=>'in progress', 'priority'=>'high'],
					['id'=> 'f4', 'title'=>'Wishlist', 'desc'=>'Save items for later and share lists', 'status'=>'planned', 'priority'=>'medium'],
					['id'=> 'f5', 'title'=>'Build configurator', 'desc'=>'Compatibility checks and bundle suggestions', 'status'=>'planned', 'priority'=>'medium'],
                    ['id'=> 'f5', 'title'=>'CRUD Opertation', 'desc'=>'Create, Read, Update, Delete', 'status'=>'planned', 'priority'=>'high'],
				];
				$functions = $functionalities ?? $defaultFunctions;
			?>

			<div class="mt-4 overflow-x-auto">
				<table class="w-full text-left">
					<thead class="text-slate-300 text-sm">
						<tr>
							<th class="px-3 py-2">Feature</th>
							<th class="px-3 py-2">Description</th>
							<th class="px-3 py-2">Priority</th>
							<th class="px-3 py-2">Status</th>
							<th class="px-3 py-2">Actions</th>
						</tr>
					</thead>
					<tbody id="functionsBody" class="align-top">
						<?php foreach ($functions as $fn): ?>
						<tr data-id="<?= esc($fn['id']) ?>" class="border-t border-white/6">
							<td class="px-3 py-3 align-top font-semibold"><?= esc($fn['title']) ?></td>
							<td class="px-3 py-3 text-slate-300"><?= esc($fn['desc']) ?></td>
							<td class="px-3 py-3 text-sm"><?= esc(ucfirst($fn['priority'])) ?></td>
							<td class="px-3 py-3 text-sm"><?= esc(ucfirst($fn['status'])) ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</section>
	</main>
	<?= view('components/footer') ?>
</body>

