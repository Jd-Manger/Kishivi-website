<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Browse Jobs | Kishvi Consulting</title>
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
            <h1 class="text-4xl font-extrabold mb-4">Browse Jobs</h1>
            <p class="text-slate-600 max-w-2xl">Explore active hiring opportunities curated by Kishvi Consulting across top industries.</p>
        </section>
        <section class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <article class="card bg-white p-6">
                <h3 class="text-xl font-bold mb-2">Business Development Manager</h3>
                <p class="text-sm mb-3">Location: Noida | Experience: 3+ years</p>
                <button class="btn btn-primary px-4 py-2 text-white">Apply Now</button>
            </article>
            <article class="card bg-white p-6">
                <h3 class="text-xl font-bold mb-2">HR Recruiter</h3>
                <p class="text-sm mb-3">Location: Ghaziabad | Experience: 1+ years</p>
                <button class="btn btn-primary px-4 py-2 text-white">Apply Now</button>
            </article>
            <article class="card bg-white p-6">
                <h3 class="text-xl font-bold mb-2">Senior Accountant</h3>
                <p class="text-sm mb-3">Location: Delhi NCR | Experience: 4+ years</p>
                <button class="btn btn-primary px-4 py-2 text-white">Apply Now</button>
            </article>
        </section>
    </main>
    @include('partials.footer')
</body>
</html>
