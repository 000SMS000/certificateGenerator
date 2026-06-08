<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificate Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-lg">

        <h1 class="text-2xl font-bold text-center mb-6">
            🎓 Certificate Generator
        </h1>

        <form method="POST" action="#">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <label class="block mb-1 font-medium">Full Name</label>
                <input type="text" name="name"
                       class="w-full border p-2 rounded"
                       placeholder="Enter full name" required>
            </div>

            <!-- Course -->
            <div class="mb-4">
                <label class="block mb-1 font-medium">Course / Achievement</label>
                <input type="text" name="course"
                       class="w-full border p-2 rounded"
                       placeholder="e.g. Docker Basics" required>
            </div>

            <!-- Date -->
            <div class="mb-4">
                <label class="block mb-1 font-medium">Date</label>
                <input type="date" name="date"
                       class="w-full border p-2 rounded" required>
            </div>

            <!-- Button -->
            <button type="submit"
                    class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">
                Generate Certificate
            </button>

        </form>

    </div>

</body>
</html>