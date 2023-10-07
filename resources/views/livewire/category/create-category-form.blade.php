<div>
    <tr class="intro-x">
        <td class="w-1/2">
            <p class="font-medium whitespace-nowrap">{{  }}</p>
        </td>
        <td class="w-1/2 table-report__action">
            <div class="flex items-center justify-center">
                <a class="flex items-center mr-3" href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
            </div>
        </td>
    </tr>
</div>
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
