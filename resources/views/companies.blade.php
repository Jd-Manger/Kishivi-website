<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Companies | Kishvi Consulting</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/premium-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sales-upgrade.css') }}">
    <script defer src="{{ asset('js/sales-upgrade.js') }}"></script>
    <style>body{font-family:'Plus Jakarta Sans',sans-serif}</style>
</head>
<body class="bg-slate-50 text-slate-800">
    @include('partials.navbar')

    <main class="max-w-6xl mx-auto px-4 pt-32 pb-14">
        <section class="mb-12">
            <h1 class="text-4xl font-extrabold mb-4">Partner Companies</h1>
            <p class="text-slate-600 max-w-2xl">We help fast-growing companies hire high-impact talent with speed and confidence.</p>
        </section>
        <section class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <article class="card bg-white p-6">
                <h3 class="text-xl font-bold mb-2">IT & SaaS</h3>
                <p class="text-sm">Product, engineering, support and growth teams hiring through Kishvi.</p>
            </article>
            <article class="card bg-white p-6">
                <h3 class="text-xl font-bold mb-2">Manufacturing</h3>
                <p class="text-sm">Plant operations, supply chain, QA and leadership positions.</p>
            </article>
            <article class="card bg-white p-6">
                <h3 class="text-xl font-bold mb-2">Healthcare</h3>
                <p class="text-sm">Clinical and non-clinical talent for hospitals and healthcare startups.</p>
            </article>
        </section>
    </main>
    @include('partials.footer')
</body>
</html>
