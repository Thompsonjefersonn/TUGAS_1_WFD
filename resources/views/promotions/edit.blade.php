<div id="crud-modal-{{ $promotion->id }}"
    class="hidden fixed inset-0 z-[100] bg-black bg-opacity-40 backdrop-blur-sm flex items-center justify-center"
    style="background-color: rgba(0, 0, 0, 0.4);">
   <div class="relative p-4 w-full max-w-md max-h-full">
       <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
           <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200 dark:border-gray-600">
               <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Edit Promosi</h3>
               <button onclick="closeModal({{ $promotion->id }})"
                       class="text-gray-400 hover:text-gray-900 dark:hover:text-white text-sm w-8 h-8 rounded-lg">
                   &times;
               </button>
           </div>

           <form action="{{ route('promotions.update', $promotion->id) }}"
                 method="POST" enctype="multipart/form-data"
                 class="p-4 md:p-5">
               @csrf
               @method('PUT')

            

               <div class="grid gap-4 mb-4 grid-cols-2">
                   <!-- Judul -->
                   <div class="col-span-2">
                       <label class="block text-sm font-medium text-gray-900 dark:text-white">Judul:</label>
                       <input type="text" name="title" value="{{ $promotion->title }}" required
                              class="w-full p-2.5 rounded-lg border bg-gray-50 text-gray-900 dark:bg-gray-600 dark:text-white" />
                   </div>

                   <!-- Gambar -->
                   <div class="col-span-2 sm:col-span-1">
                       <label class="block text-sm font-medium text-gray-900 dark:text-white">Gambar:</label>
                       <input type="file" name="image"
                              class="w-full p-2.5 rounded-lg border bg-gray-50 text-gray-900 dark:bg-gray-600 dark:text-white" />
                   </div>

                   <!-- Waktu -->
                   <div class="col-span-2 sm:col-span-1">
                       <label class="block text-sm font-medium text-gray-900 dark:text-white">Waktu:</label>
                       <input type="date" name="time" value="{{ $promotion->time }}"
                              class="w-full p-2.5 rounded-lg border bg-gray-50 text-gray-900 dark:bg-gray-600 dark:text-white" />
                   </div>

                   <!-- Deskripsi -->
                   <div class="col-span-2">
                       <label class="block text-sm font-medium text-gray-900 dark:text-white">Deskripsi:</label>
                       <textarea name="description" rows="4" required
                                 class="w-full p-2.5 rounded-lg border bg-gray-50 text-gray-900 dark:bg-gray-600 dark:text-white">{{ $promotion->description }}</textarea>
                   </div>
               </div>

               <!-- Tombol Submit -->
               <button type="submit"
                       class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700">
                   Update
               </button>
           </form>
       </div>
   </div>
</div>
