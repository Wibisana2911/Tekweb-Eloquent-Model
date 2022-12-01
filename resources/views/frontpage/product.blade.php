<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
<div class="container my-24 px-6 mx-auto">

<!-- Section: Design Block -->
<section class="mb-32 text-gray-800 text-center md:text-left">
  <div class="block rounded-lg shadow-lg bg-white">
    <div class="flex flex-wrap items-center">
      <div class="grow-0 shrink-0 basis-auto block lg:flex w-full lg:w-6/12 xl:w-4/12">
        <img src="{{ (asset('image/Joger Navy model.png'))}}"
          class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" />
      </div>
      <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
        <div class="px-6 py-12 md:px-12">
          <h1 class=" text-start text-3xl font-bold mb-6 pb-2">ORDER</h1>
          <p class="text-gray-500 mb-6 pb-2">
            Joger Activewere Navy from Sport ACtivewere Sport
          </p>

    <form class="my-8 text-sm w-80">
    <div class="flex flex-col my-4">
    <label for="number" class="text-gray-700">Quantity</label>
    <input type="number" name="number" id="number" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900">
    </div>

    <div class="flex justify-center">
    <div class="mb-3 xl:w-96">
    <label for="number" class="text-gray-700">Color</label>
    <select class="form-select appearance-none
      block
      w-80
      px-40
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
        <option selected>Navy</option>
    </select>
  </div>
</div>

<div class="mb-3 xl:w-50">
      <label for="number" class="text-gray-700">Size</label>
    <select class="form-select appearance-none
      block
      w-80
      px-40
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
        <option selected>M</option>
        <option value="1">L</option>
        <option value="1">XL</option>
    </select>
  </div>
</div>
      
    <a herf="/home"
<button type="button"
    class="inline-block px-7 py-5 bg-gray-700 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">
    Back
          </button>
      </a>

    <button type="button"
    class="inline-block px-7 py-5 bg-gray-800 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">
    ADD TO SHOPCART
          </button>

          <a href="/order" 
          <button type="button" 
    class="inline-block px-7 py-5 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">
    ORDER NOW

          </button>
</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

</div>
</body>
</html>