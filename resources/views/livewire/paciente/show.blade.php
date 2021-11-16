<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
  
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div class="flex justify-center items-center h-screen">
	<!--actual component start-->
	<div x-data="setup()">
		<ul class="flex justify-center items-center my-4">
			<template x-for="(tab, index) in tabs" :key="index">

				<li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
					:class="activeTab===index ? 'text-green-500 border-green-500' : ''" @click="activeTab = index"
					x-text="tab"></li>
			</template>
		</ul>

		<div class="w-80 bg-white p-16 text-center mx-auto border">
			<div x-show="activeTab===0">
			<div class="mt-10 sm:mt-0">
								  <div class="md:grid md:grid-cols-3 md:gap-6">
								    <div class="md:col-span-1">
								      <div class="px-4 sm:px-0">
								        <h3 class="text-lg font-medium leading-6 text-gray-900">Padecimientos</h3>
								        <p class="mt-1 text-sm text-gray-600">
								          Describa los padecimientos del paciente de en cantidad "01000"
								        </p>
								      </div>
								    </div>
								    <div class="mt-5 md:mt-0 md:col-span-2">
								      <form action="#" method="POST">
								        <div class="shadow overflow-hidden sm:rounded-md">
								          <div class="px-4 py-5 bg-white sm:p-6">
								            <div class="grid grid-cols-6 gap-6">
								              <!-- <div class="col-span-6 sm:col-span-3">
								                <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
								                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
								              </div>

								              <div class="col-span-6 sm:col-span-3">
								                <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
								                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
								              </div> -->

								               <div class="col-span-6 sm:col-span-3">
								                <label for="last-name" class="block text-sm font-medium text-gray-700">Cardiovascular</label>
								                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
								              </div>
								               <div class="col-span-6 sm:col-span-3">
								                <label for="last-name" class="block text-sm font-medium text-gray-700">Gastrointestinal</label>
								                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
								              </div>
								               <div class="col-span-6 sm:col-span-3">
								                <label for="last-name" class="block text-sm font-medium text-gray-700">Oftalmologia</label>
								                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
								              </div>
								               <div class="col-span-6 sm:col-span-3">
								                <label for="last-name" class="block text-sm font-medium text-gray-700">Nervioso</label>
								                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
								              </div>

								           <!--    <div class="col-span-6 sm:col-span-3">
								                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
								                <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
								                  <option>United States</option>
								                  <option>Canada</option>
								                  <option>Mexico</option>
								                </select>
								              </div> -->

								            <!--   <div class="col-span-6">
								                <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
								                <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
								              </div> -->

								              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
								                <label for="city" class="block text-sm font-medium text-gray-700">Ginecologico</label>
								                <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
								              </div>

								              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
								                <label for="region" class="block text-sm font-medium text-gray-700">Muscular </label>
								                <input type="text" name="region" id="region" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
								              </div>

								              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
								                <label for="postal-code" class="block text-sm font-medium text-gray-700"> Peso</label>
								                <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
								              </div>
								            </div>
								          </div>
								          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
								            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
								              Save
								            </button>
								          </div>
								        </div>
								      </form>
								    </div>
								  </div>
								</div>
			</div>
			<div x-show="activeTab===1">Procedencia </div>
			<div x-show="activeTab===2">Telefono</div>
			<div x-show="activeTab===3">Celular</div>
		</div>

		<ul class="flex justify-center items-center my-4">
			<template x-for="(tab, index) in tabs" :key="index">
				<li class="cursor-pointer py-3 px-4 rounded transition"
					:class="activeTab===index ? 'bg-green-500 text-white' : ' text-gray-500'" @click="activeTab = index"
					x-text="tab"></li>



			</template>
		</ul>
		
		<div class="flex gap-4 justify-center border-t p-4">
			<button
				class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
				@click="activeTab--" x-show="activeTab>0"
				>Back</button>
			<button
				class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
				@click="activeTab++" x-show="activeTab<tabs.length-1"
				>Next</button>
		</div>
	</div>
	<!--actual component end-->
</div>

<script>
	function setup() {
    return {
      activeTab: 0,
      tabs: [
          "Padecimientos",
          "Procedencia",
          "Telefono",
          "Celular",
      ]
    };
  };
</script>

</div>
