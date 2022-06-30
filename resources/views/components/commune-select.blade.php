<div class="relative max-w-sm mx-auto text-xs bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500"
     x-data="{
            items: a,
            search: '',
            showSelector: false,
            selected: {},
            options: [],
            clearOpts() {
                this.search = '';
                this.showSelector = false;
                this.options = []
            },
            select(id, commune) {
                this.selected = commune;
                this.clearOpts();
                $dispatch('selected', Object.keys(this.selected));
            },
            goSearch() {
                if (this.search) {
                    const res = this.items.filter((commune) => commune.name.replace('أ','ا').indexOf(this.search.replace('أ','ا')) > -1)
                    this.options = res
                    this.showSelector = true;
                } else {
                    this.showSelector = false;
                }
            },
        }">
    <input x-model="selected.id" name="{{ $name }}" hidden >
    <div class="bg-white rounded-md p-1 flex gap-1 flex-wrap" @click="$refs.search_input.focus()"
         @click.outside="showSelector=false">
            <div x-show="selected.name" class="bg-blue-200 rounded-md flex items-center w-1/2">
                <div class="py-2 px-6" x-text="selected.name"></div>
            </div>
        <div class="flex-1">
            <input type="text" x-model="search" x-ref="search_input"
                   @input.debounce.400ms="goSearch();" placeholder="Search"
                   class="w-full border-0 focus:border-0 focus:outline-none focus:ring-0 py-1 px-0">
            <div x-show="showSelector" class="absolute left-0 bg-white z-30 w-full rounded-b-md font-medium">
                <div class="p-2 space-y-1">
                    <template x-for="(commune, id) in options.slice(0,100)">
                        <div>
                            <template x-if="!selected[id]">
                                <div @click="select(id, commune)"
                                     class="bg-blue-200 border-2 border-blue-200 cursor-pointer rounded-md p-2 hover:border-light-blue-1"
                                     x-text="commune.name"></div>
                            </template>
                        </div>
                    </template>
                    <template x-if="options.length === 0">
                        <div class="text-gray-500">
                            No result
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
const a = @json($communes); 
</script>