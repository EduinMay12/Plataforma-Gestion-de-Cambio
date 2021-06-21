<div style="position:relative" x-data="inputSearch()">
    <!-- Campo de búsqueda -->
    <input
        type="text"
        x-on:keydown="iconReset = true"
        wire:model="search"
        placeholder="Introduzca el término a buscar..."
    >
    <!-- Icono para borrar el campo de búsqueda (ajústalo con tu css) -->
    <div style="position: absolute" x-show="iconReset">
        <svg
            class="h-5 w-5 mt-1 cursor-pointer"
            x-on:click="iconReset = false"
            wire:click="clearSearch"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M6 18L18 6M6 6l12 12"
            >
            </path>
        </svg>
    </div>
</div>

<script>
    function inputSearch() {
        return {
            iconReset: false,
            search: '',
        }
    }
</script>
