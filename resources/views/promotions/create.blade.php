<div id="crud-create-modal"
    class="hidden fixed inset-0 z-[100] bg-black bg-opacity-40 backdrop-blur-sm flex items-center justify-center"
    style="background-color: rgba(0, 0, 0, 0.4);">
    <div class="relative p-4 w-full max-w-3xl max-h-full">
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tambah Promosi</h3>
                <button type="button" onclick="closeCreateModal()"
                    class="text-gray-400 hover:text-gray-900 dark:hover:text-white text-sm w-8 h-8 rounded-lg">
                    &times;
                </button>
            </div>

            <form action="{{ route('promotions.store') }}" method="POST" enctype="multipart/form-data" class="p-4 md:p-5">
                @csrf

                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div>
                        <label class="block text-sm font-medium text-gray-900 dark:text-white">Judul:</label>
                        <input type="text" name="title" required
                            class="w-full p-2.5 rounded-lg border bg-gray-50 text-gray-900 dark:bg-gray-600 dark:text-white" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-900 dark:text-white">Gambar:</label>
                        <input type="file" name="image" accept="image/*"
                            class="w-full p-2.5 rounded-lg border bg-gray-50 text-gray-900 dark:bg-gray-600 dark:text-white" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-900 dark:text-white">Waktu:</label>
                        <input type="date" name="time"
                            class="w-full p-2.5 rounded-lg border bg-gray-50 text-gray-900 dark:bg-gray-600 dark:text-white" />
                    </div>

                    <div class="col-span-2">
                        <label class="block text-sm font-medium text-gray-900 dark:text-white">Deskripsi Utama:</label>
                        <textarea name="description" rows="4" required
                            class="w-full p-2.5 rounded-lg border bg-gray-50 text-gray-900 dark:bg-gray-600 dark:text-white"></textarea>
                    </div>
                </div>

                <div class="grid gap-4 grid-cols-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-900 dark:text-white">Deskripsi 1:</label>
                        <textarea name="desc1" rows="3" required name="desc1"
                            class="w-full p-2.5 rounded-lg border bg-gray-50 text-gray-900 dark:bg-gray-600 dark:text-white"></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-900 dark:text-white">Deskripsi 2:</label>
                        <textarea name="desc2" rows="3" required name="desc2"
                            class="w-full p-2.5 rounded-lg border bg-gray-50 text-gray-900 dark:bg-gray-600 dark:text-white"></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-900 dark:text-white">Deskripsi 3:</label>
                        <textarea name="desc3" rows="3" required name="desc3"
                            class="w-full p-2.5 rounded-lg border bg-gray-50 text-gray-900 dark:bg-gray-600 dark:text-white"></textarea>
                    </div>
                </div>

                <button type="submit"
                    class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
