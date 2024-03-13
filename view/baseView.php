
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
    <h1 class ="title font-bold mt-5 mb-5 flex flex-col text-center">PROJET OPENDATA</h1>
        <nav>
 <div class="flex direction-row items-center">       
<form class=" max-w-sm mx-auto ">
  <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
  <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option selected>choisir une option</option>
    <option value="US">particulier</option>
    <option value="CA">professionnel</option>
  </select>
</form>

<form class="max-w-sm mx-auto">
  <label for="years" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
  <select id="years" size="5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option>2019</option>
    <option>2020</option>
    <option>2021</option>
    <option>2022</option>
    <option>2023</option>
    <option>2024</option>
  </select>
  </form>

<form class="max-w-sm mx-auto">
  <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
  <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option selected>choisir une option</option>
    <option value="US">consommation</option>
    <option value="CA">production</option>
  </select>
</form>

</div>
  

  <div class="mt-5 flex flex-col items-center">

<button class="relative inline-flex items-center text-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
        VALIDER
</span>
</button>

</div>




        </nav>
    </header>


    <section class='container'>
        <?=$content ?> 
    </section>
    

</body>
</html>