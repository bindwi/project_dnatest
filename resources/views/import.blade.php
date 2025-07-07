<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Dna Test - Import Profiles</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
</head>

<body class="bg-gray-100 p-6">

    <div class="max-w-4xl mx-auto bg-white rounded shadow p-4">
        <h1 class="text-2xl font-bold mb-4">Import Profiles</h1>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 text-red-800 p-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form action="/import" method="POST">
            @csrf
            <button
                type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded"
            >
                Import Profiles
            </button>
        </form>

        <h2 class="text-xl font-semibold mt-8 mb-2">Profiles List</h2>
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border p-2">ID</th>
                        <th class="border p-2">Name</th>
                        <th class="border p-2">Email</th>
                        <th class="border p-2">Ethnicity</th>
                        <th class="border p-2">Sex</th>
                        <th class="border p-2">Birth Year</th>
                        <th class="border p-2">Created at API</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($profiles as $profile)
                        <tr>
                            <td class="border p-2">{{ $profile->api_id }}</td>
                            <td class="border p-2">{{ $profile->name }}</td>
                            <td class="border p-2">{{ $profile->email }}</td>
                            <td class="border p-2">{{ $profile->ethnicity }}</td>
                            <td class="border p-2">{{ $profile->sex }}</td>
                            <td class="border p-2">{{ $profile->birth_year }}</td>
                            <td class="border p-2">{{ $profile->created_at_api }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="border p-2 text-center">No profiles yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
