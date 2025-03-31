@extends('layouts.base')

@section('title', 'Daftar Promosi')

@section('content')
<h1 class="text-2xl font-bold mb-4">Daftar Promosi</h1>

{{-- Tombol Tambah Promosi --}}
<button onclick="openCreateModal()" 
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 
           font-medium rounded-lg text-sm px-5 py-2.5 w-full md:w-auto mb-4">
    Tambah Promosi
</button>


<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @forelse ($promotions as $promo)
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset('storage/' . $promo->image) }}" alt="Promo Image" />
            </a>
            <div class="p-5">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $promo->title }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ Str::limit($promo->description, 100) }}</p>

              
                <button onclick="openModal({{ $promo->id }})"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Edit
                    <svg class="w-3.5 h-3.5 ms-2" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </button>

           
                <form id="delete-form-{{ $promo->id }}" action="{{ route('promotions.destroy', $promo->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>

            
                <button onclick="confirmDelete({{ $promo->id }})"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 ml-2">
                    Delete
                    <svg class="w-3.5 h-3.5 ms-2" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </button>
            </div>
        </div>

   
        @include('promotions.edit', ['promotion' => $promo])
    @empty
        <p class="col-span-full">Tidak ada promosi tersedia saat ini.</p>
    @endforelse
</div>


@include('promotions.create')

<script>
   
    function openModal(id) {
        const modal = document.getElementById('crud-modal-' + id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

   
    function closeModal(id) {
        const modal = document.getElementById('crud-modal-' + id);
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

   
    function openCreateModal() {
        const modal = document.getElementById('crud-create-modal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    
    function closeCreateModal() {
        const modal = document.getElementById('crud-create-modal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

  
    function confirmDelete(id) {
        if (confirm('Apakah Anda yakin ingin menghapus promosi ini?')) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
</script>

@endsection
