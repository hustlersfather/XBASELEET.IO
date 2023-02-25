   <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwindcss  -->
  <link href="./asset/css/tailwind.css" rel="stylesheet">
  <!-- Alpine js  -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <!-- Ionicons  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Datatable  -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
  <title>Luxfix.pw - online shop</title>
</head>
<body>
  <style>
      [x-cloak] { display: none; }
  </style>
  <!-- Dashboard layout -->
  <div x-data="{ open: false }" class="flex h-screen">    <!-- Sidebar -->
    <aside
      :class="open ? 'w-56 md:-translate-x-full' : '-translate-x-full md:translate-x-0'"
      class="fixed top-0 left-0 h-screen text-white transition-all duration-300 ease-in-out transform bg-gray-800 md:w-56"
    >
      <!-- Sidebar content -->
      <div class="p-2">
        <h1 class="p-2 mb-2 text-2xl font-bold flex items-center space-x-4">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"          viewBox="0 0 30 30" >
            <path d="M 8.8554688 2 C 7.8094687 2 6.9393281 2.8066094 6.8613281 3.8496094 L 6.5859375 7.515625 C 8.6789375 7.758625 11.608 8 15 8 C 18.392 8 21.321062 7.758625 23.414062 7.515625 L 23.138672 3.8496094 C 23.060672 2.8066094 22.190531 2 21.144531 2 L 8.8554688 2 z M 26.998047 8.9941406 A 1.0001 1.0001 0 0 0 26.804688 9.0195312 C 26.804688 9.0195312 21.904762 10 15 10 C 8.0952381 10 3.1953125 9.0195312 3.1953125 9.0195312 A 1.0001 1.0001 0 0 0 2.9980469 8.9980469 A 1.0001 1.0001 0 0 0 2.8046875 10.980469 C 2.8046875 10.980469 4.0232589 11.214906 6 11.457031 L 6 13.253906 C 5.7952345 13.309133 5.7768035 13.254845 5.5449219 13.373047 C 4.8137949 13.745739 4 14.679537 4 16 C 4 17.320463 4.8137949 18.254261 5.5449219 18.626953 C 5.7768035 18.745155 5.7952345 18.690867 6 18.746094 L 6 20 C 6 21.898556 7.0500866 23.824815 8.65625 25.349609 C 9.7994525 26.434897 11.261611 27.309621 12.912109 27.728516 C 13.306467 27.901809 13.739882 28 14.199219 28 L 15.800781 28 C 16.260118 28 16.693533 27.901809 17.087891 27.728516 C 18.738389 27.309621 20.200547 26.434897 21.34375 25.349609 C 22.949913 23.824815 24 21.898556 24 20 L 24 18.746094 C 24.204765 18.690864 24.223197 18.745155 24.455078 18.626953 C 25.186205 18.254261 26 17.320463 26 16 C 26 14.679537 25.186205 13.745739 24.455078 13.373047 C 24.223197 13.254845 24.204765 13.309133 24 13.253906 L 24 11.457031 C 25.976741 11.214906 27.195312 10.980469 27.195312 10.980469 A 1.0001 1.0001 0 0 0 26.998047 8.9941406 z M 8 11.675781 C 9.9404014 11.856093 12.327643 12 15 12 C 17.672357 12 20.059599 11.856093 22 11.675781 L 22 14 A 1.0001 1.0001 0 0 0 22.980469 15 C 22.980469 15 23.276049 15.01919 23.544922 15.15625 C 23.813795 15.293308 24 15.359463 24 16 C 24 16.640537 23.813795 16.706692 23.544922 16.84375 C 23.276049 16.980808 22.980469 17 22.980469 17 A 1.0001 1.0001 0 0 0 22 18 L 22 20 C 22 21.101444 21.257383 22.675185 19.966797 23.900391 C 19.669631 24.182502 19.34394 24.443119 19 24.681641 L 19 22.285156 C 19 21.028156 17.971844 20 16.714844 20 L 13.285156 20 C 12.029156 20 11 21.028156 11 22.285156 L 11 24.681641 C 10.65606 24.443119 10.330369 24.182502 10.033203 23.900391 C 8.7426166 22.675185 8 21.101444 8 20 L 8 18 A 1.0001 1.0001 0 0 0 7.0195312 17 C 7.0195312 17 6.7239511 16.98081 6.4550781 16.84375 C 6.1862051 16.706692 6 16.640537 6 16 C 6 15.359463 6.1862051 15.293308 6.4550781 15.15625 C 6.7239511 15.019192 7.0195312 15 7.0195312 15 A 1.0001 1.0001 0 0 0 8 14 L 8 11.675781 z M 8 14 L 8.8105469 17.242188 C 8.9215469 17.687188 9.32225 18 9.78125 18 L 13.21875 18 C 13.67775 18 14.078453 17.687187 14.189453 17.242188 L 14.5 16 L 15.5 16 L 15.810547 17.242188 C 15.921547 17.687187 16.32225 18 16.78125 18 L 20.21875 18 C 20.67775 18 21.078453 17.687188 21.189453 17.242188 L 22 14 L 18 14 L 15 14 L 8 14 z M 13.199219 22 L 16.800781 22 C 17.460781 22 18 22.539219 18 23.199219 L 18 23.800781 L 16.199219 25.599609 L 16.199219 24.400391 C 16.199219 23.740391 15.66 23.199219 15 23.199219 C 14.34 23.199219 13.800781 23.740391 13.800781 24.400391 L 13.800781 25.599609 L 12 23.800781 L 12 23.199219 C 12 22.539219 12.539219 22 13.199219 22 z"></path>
          </svg>
          Luxfix
        </h1>
        <span class="block mb-1 border-b border-gray-700"></span>
        <h1 class="flex items-center px-2 py-3 space-x-2 text-lg">
          <ion-icon name="person-circle-outline" class="text-2xl"></ion-icon>
          <span class="capitalize">
            hustlersfathers          </span>
        </h1>
        <span class="block mb-6 border-b border-gray-700"></span>

        <nav class="space-y-3 first:space-y-0">
          <a href="./dashboard.php" class="flex items-center p-2 space-x-2 transition-all duration-200 ease-in-out rounded hover:bg-gray-500">
            <ion-icon name="home-outline"></ion-icon>
            <span>Dashboard</span>
          </a>
          <a href="./bank-log.php" class="flex items-center p-2 space-x-2 transition-all duration-200 ease-in-out rounded hover:bg-gray-500">
            <ion-icon name="business-outline"></ion-icon>
            <span>Bank Logs</span>
          </a>
          <a href="./card.php" class="flex items-center p-2 space-x-2 transition-all duration-200 ease-in-out rounded hover:bg-gray-500">
            <ion-icon name="card-outline"></ion-icon>
            <span>Card</span>
          </a>
          <a href="./account.php" class="flex items-center p-2 space-x-2 transition-all duration-200 ease-in-out rounded hover:bg-gray-500">
            <ion-icon name="key-outline"></ion-icon>
            <span>Account</span>
          </a>
          <a href="./spamming.php" class="flex items-center p-2 space-x-2 transition-all duration-200 ease-in-out rounded hover:bg-gray-500">
            <ion-icon name="newspaper-outline"></ion-icon>
            <span>Spamming</span>
          </a>
          <a href="./user.php" class="flex items-center p-2 space-x-2 transition-all duration-200 ease-in-out rounded hover:bg-gray-500 hidden">
            <ion-icon name="people-outline"></ion-icon>
            <span>Users</span>
          </a>
          <!-- <a href="./mail.php" class="flex items-center p-2 space-x-2 transition-all duration-200 ease-in-out rounded hover:bg-gray-500 hidden">
            <ion-icon name="mail-unread-outline"></ion-icon>
            <span>Mailing</span>
          </a> -->
          <form action="./controller/logoutController.php" method="POST" class="flex items-center p-2 space-x-2 transition-all duration-200 ease-in-out rounded cursor-pointer hover:bg-gray-500">
            <ion-icon name="log-out-outline"></ion-icon>
            <button type="submit" name="logoutBtn">Logout</button>
          </form>
        </nav>
      </div>
    </aside>
    <!-- Main content -->
    <main
      :class="open ? 'ml-56 md:ml-0' : 'ml-0 md:ml-56'"  
      class="w-full overflow-y-scroll ease-in-out duration-300">

     <!-- Header -->
    <header class="flex items-center justify-between p-4 bg-gray-300">

      <div class="flex items-center space-x-6">

        <div class="flex items-center space-x-2">
          <!-- Sidebar toggle button -->
          <button
            @click="open = !open"
            class="text-gray-800 transition-all duration-200 ease-in-out outline-none hover:text-gray-900 focus:outline-none"
          >
            <ion-icon name="menu-outline" class="text-2xl"></ion-icon>
          </button>
          <p>
            <a href="/" class="font-semibold text-gray-500">Home</a>
          </p>
        </div>

        <div class="flex items-center space-x-2">
          <p class="font-semibold">Balance</p>
          <span class="p-1 text-white bg-teal-700 rounded-md">
            $0.00          </span>
          <a href="./deposit.php">
            <ion-icon name="add-outline" class="cursor-pointer"></ion-icon>
          </a>
        </div>

      </div>

      <div x-cloak x-data="{miniBar : false}" class="relative">
        <ion-icon @click="miniBar = !miniBar" name="person-circle-outline" class="text-2xl cursor-pointer"></ion-icon>
        <!-- drop down  -->
        <div :class="miniBar ? 'w-56' : 'scale-x-0' "  class="absolute right-0 z-50 p-2 duration-300 ease-in-out transform bg-gray-800 rounded-sm top-10">
          <nav class="space-y-3">
            <a href="./deposit.php" class="flex items-center justify-between space-x-2 text-gray-300 transition-all duration-200 ease-in-out rounded hover:text-white">
              <div class="space-x-1">
                <ion-icon name="wallet-outline"></ion-icon>
                <span>Add Balance</span>
              </div>
              <span class="p-1 text-white bg-blue-500 rounded-md">$0.00</span>
            </a>
            <a href="./my-order.php" class="flex items-center justify-between space-x-2 text-gray-300 transition-all duration-200 ease-in-out rounded hover:text-white">
              <div class="space-x-1">
                <ion-icon name="albums-outline"></ion-icon>
                <span>My Order</span>
              </div>
              <span class="p-1 text-white bg-green-500 rounded-md">0</span>
            </a>
            <!-- <a href="./setting.php" class="flex items-center space-x-2 text-gray-300 transition-all duration-200 ease-in-out rounded hover:text-white">
              <ion-icon name="settings-outline"></ion-icon>
              <span>Settings</span>
            </a> -->
            <form action="./controller/logoutController.php" method="POST" class="flex items-center space-x-2 text-gray-300 transition-all duration-200 ease-in-out rounded cursor-pointer hover:text-white">
              <ion-icon name="log-in-outline"></ion-icon>
              <button type="submit" name="logoutBtn">Logout</button>
            </form>
          </nav>
        </div>
      </div>
    </header>
      <!-- Breadcrumb  -->
      <div class="flex justify-between items-center m-4">
        <p class="font-bold text-xl">Bank Log</p>
        <p class="text-gray-500">
          Home
          <span>/</span>
          <span class="text-teal-600 font-semibold">Bank Logs</span>
        </p>
      </div>

    <!-- Error Display  -->
    <div
      class="hidden mx-4">
      <p class="p-2 my-2 text-white bg-red-500 border border-red-900 rounded-md">
              </p>
    </div>
    
    <!-- success Display  -->
    <div
      class="hidden mx-4">
      <p class="p-2 my-2 text-white bg-green-500 border border-green-900 rounded-md">
              </p>
    </div>

      <div class="flex justify-between items-center m-4 hidden">
        <p></p>

        <a href="add-product.php?product_name=bank-log" class="bg-teal-700 hover:bg-teal-800 p-2 rounded-sm transition-all ease-in-out  duration-200 text-white text-sm md:text-lg">
          <ion-icon name="add-circle-outline"></ion-icon>
          <span>
            Add Bank log
          </span>
          </a>
      </div>

      <div class="m-4">
                <table id="example" class="display" style="width:100%">
          <thead>
            <tr class="bg-gray-50 border-b">
              <th class="p-2 border-r cursor-pointer text-sm text-gray-500">
                ID
              </th>
              <th class="p-2 border-r cursor-pointer text-sm text-gray-500">
                Type
              </th>
              <th class="p-2 border-r cursor-pointer text-sm text-gray-500">
                Title
              </th>
              <th class="p-2 border-r cursor-pointer text-sm text-gray-500 w-96">
                Description
              </th>
              <th class="p-2 border-r cursor-pointer text-sm text-gray-500">
                Balance
              </th>
              <th class="p-2 border-r cursor-pointer text-sm text-gray-500">
                Price
              </th>
              <th class="p-2 border-r cursor-pointer text-sm text-gray-500 w-36">
                Date Created
              </th>
              <th class="p-2 border-r cursor-pointer text-sm text-gray-500">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
                      </tbody>
        </table>
      </div>
    </main>

    </div>  
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
  <script src="./asset/js/main.js"></script>
</body>
</html>
