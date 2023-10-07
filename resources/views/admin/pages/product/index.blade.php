@extends('admin.layout.base')

@section('title', 'Products')

@section('head')
    <title>Products</title>
@endsection

@section('content')
<div class="w-full py-5 md:py-0">
    <div class="content">
        <h2 class="mt-10 text-lg font-medium intro-y">
            Products
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap">
                <button class="mr-2 shadow-md btn btn-primary">Add New Product</button>
                {{-- <div class="dropdown">
                    <button class="px-2 dropdown-toggle btn box" aria-expanded="false" data-tw-toggle="dropdown">
                        <span class="flex items-center justify-center w-5 h-5"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                    </button>
                    <div class="w-40 dropdown-menu">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <div class="hidden mx-auto md:block text-slate-500">Showing 1 to 10 of 150 entries</div>
                {{-- <div class="w-full mt-3 sm:w-auto sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="relative w-56 text-slate-500">
                        <input type="text" class="w-56 pr-10 form-control box" placeholder="Search...">
                        <i class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3" data-lucide="search"></i>
                    </div>
                </div> --}}
            </div>
            <!-- BEGIN: Data List -->
            <div class="col-span-12 overflow-auto intro-y lg:overflow-visible">
                <table class="table -mt-2 table-report">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">PRODUCT NAME</th>
                            <th class="text-center whitespace-nowrap">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ( as )

                        @endforeach --}}
                        <tr class="intro-x">
                            <td class="w-1/2">
                                <p class="font-medium whitespace-nowrap">Sargassum Extract</p>
                            </td>
                            <td class="w-1/2 table-report__action">
                                <div class="flex items-center justify-center">
                                    <a class="flex items-center mr-3" href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->
            <!-- BEGIN: Pagination -->
            <div class="flex flex-wrap items-center col-span-12 intro-y sm:flex-row sm:flex-nowrap">
                <nav class="w-full sm:w-auto sm:mr-auto">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                        </li>
                        <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                        <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                        </li>
                    </ul>
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
        <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="p-0 modal-body">
                        <div class="p-5 text-center">
                            <i data-lucide="x-circle" class="w-16 h-16 mx-auto mt-3 text-danger"></i>
                            <div class="mt-5 text-3xl">Are you sure?</div>
                            <div class="mt-2 text-slate-500">
                                Do you really want to delete these records?
                                <br>
                                This process cannot be undone.
                            </div>
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <button type="button" data-tw-dismiss="modal" class="w-24 mr-1 btn btn-outline-secondary">Cancel</button>
                            <button type="button" class="w-24 btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Delete Confirmation Modal -->
    </div>
</div>



@endsection
