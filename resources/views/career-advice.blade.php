<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Career Advice | Kishvi Consulting</title>
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
            <h1 class="text-4xl font-extrabold mb-4">Career Advice</h1>
            <p class="text-slate-600 max-w-2xl">Practical guidance to help candidates crack interviews and grow faster.</p>
        </section>
        <section class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <article class="card bg-white p-6">
                <h3 class="text-xl font-bold mb-2">Resume Makeover</h3>
                <p class="text-sm">Use quantifiable outcomes, strong keywords and role-focused summaries.</p>
            </article>
            <article class="card bg-white p-6">
                <h3 class="text-xl font-bold mb-2">Interview Strategy</h3>
                <p class="text-sm">Prepare STAR stories, business understanding and confidence-driven responses.</p>
            </article>
            <article class="card bg-white p-6">
                <h3 class="text-xl font-bold mb-2">Salary Negotiation</h3>
                <p class="text-sm">Anchor with market data and align compensation with role impact.</p>
            </article>
        </section>
        <div class="mt-10">
            <a href="{{ route('contact') }}" class="btn btn-primary px-5 py-3 text-white">Talk to a Consultant</a>
        </div>
    </main>
    @include('partials.footer')
</body>
</html>
