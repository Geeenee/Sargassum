<div>

        <!-- BEGIN: Content -->
        <div class="content">
            <h2 class="mt-10 text-lg font-medium intro-y">
                Category List
            </h2>
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap">
                    <button class="mr-2 shadow-md btn btn-primary">Add New Category</button>
                    <div class="hidden mx-auto md:block text-slate-500">Showing 1 to 10 of 150 entries</div>
                </div>
                <!-- BEGIN: Data List -->
                <div class="col-span-12 overflow-auto intro-y lg:overflow-visible">
                    <table class="table -mt-2 table-report">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">CATEGORY NAME</th>
                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>


                            @forelse ($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td class="w-56 table-report__action">
                                        <div class="flex items-center justify-center">
                                            <button  wire:click="selectItem({{$category->id}},'edit')"  class="flex items-center mr-3">  Edit </button>
                                            <button  wire:click="selectItem({{$category->id}},'delete')"  class="flex items-center text-danger"> Delete </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center">No Data Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- END: Data List -->
                <!-- BEGIN: Pagination -->
                <div class="flex flex-wrap items-center col-span-12 intro-y sm:flex-row sm:flex-nowrap">
                    <nav class="w-full sm:w-auto sm:mr-auto">
                        {{ $categories->links() }}

                    </nav>
                    <select class="w-20 mt-3 form-select box sm:mt-0">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
                <!-- END: Pagination -->
            </div>
            <!-- BEGIN: Delete Confirmation Modal -->

            <!-- END: Delete Confirmation Modal -->
        </div>
        <!-- END: Content -->
        <script>
            document.addEventListener('livewire:initialized', () => {
               @this.on('OpenEditModal', (event) => {
                   //
                   console.log("Mark")

               });
            });


        </script>

</div>
