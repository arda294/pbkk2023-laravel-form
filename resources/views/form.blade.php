<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
</head>
<style>
    *{
        font-family: 'Poppins', sans-serif;
    }
</style>
<body>
    <div class="flex flex-col bg-green-300 p-10 h-screen">
        <form action="{{url('/form/submit')}}" class="flex flex-col gap-2 bg-white rounded-md p-5 drop-shadow-2xl w-5/6 self-center mt-auto mb-auto text-sm mb-1/2 sm:w-[600px] sm:text-lg" method="post" enctype="multipart/form-data" novalidate>
            @csrf
                <h1 class="text-center text-xl sm:text-2xl sm:m-4 font-bold">Form App</h1>
                
                <label for="name">Name</label>
                <input type="text" name="name" class="rounded-md ring-gray-500 ring-2 p-2 bg-gray-100 drop-shadow-lg mb-4" id="name">
                
                <label for="email">Email</label>
                <input type="email" name="email" class="rounded-md ring-gray-500 ring-2 p-2 bg-gray-100 drop-shadow-lg mb-4" id="email">
                
                <label for="gender">Gender</label>
                <select name="gender" class="rounded-md ring-gray-500 ring-2 p-2 bg-gray-100 drop-shadow-lg mb-4" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>

                <label for="sussiness">Sussiness %</label>
                <input type="number" class="rounded-md ring-gray-500 ring-2 p-2 bg-gray-100 drop-shadow-lg mb-4" name="sussiness" min="2.5" max="99.99" value="2.5" step="0.01" id="sussiness"
                    onchange="if(Number(this.value) > this.max) this.value = this.max;if(Number(this.value) < this.min) this.value = this.min ; this.nextElementSibling.value = Number(this.value)"
                >
                <input type="range" class="h-10" min="2.5" max="99.99" value="2.5" step="0.01" id="sussiness_slider"
                    oninput="this.previousElementSibling.value = Number(this.value)"
                >

                <label for="photo">Photo</label>
                <input type="file" class="rounded-md ring-2 ring-gray-500 p-1" name="photo" id="photo">

                <input type="submit" class="bg-black rounded-md text-white w-1/2 h-10 self-center mt-5" value="Submit">
        </form>
    </div>
</body>
</html>