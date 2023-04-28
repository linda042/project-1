<?php if($_GET['alert'] === 'pin_s'): ?>
<div id="alert-box" class="px-4 py-2 rounded-sm text-sm bg-green-100 border border-green-200 text-green-600">
    <div class="flex w-full justify-between items-start">
        <div class="flex">
            <svg class="w-4 h-4 shrink-0 fill-current opacity-80 mt-[3px] mr-3" viewBox="0 0 16 16">
                <path
                    d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z">
                </path>
            </svg>

        </div>
        <button class="opacity-70 hover:opacity-80 ml-3 mt-[3px]" id="alert">
            <div class="sr-only">Close</div>
            <svg class="w-4 h-4 fill-current">
                <path
                    d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
                </path>
            </svg>
        </button>
    </div>
</div>
<?php endif; ?>

<?php if($_GET['alert'] === 'f'): ?>
<div id="alert-box" class="px-4 py-2 rounded-sm text-sm bg-red-100 border border-red-200 text-red-600">
    <div class="flex w-full justify-between items-start">
        <div class="flex">
            <svg class="w-4 h-4 shrink-0 fill-current opacity-80 mt-[3px] mr-3" viewBox="0 0 16 16">
                <path
                    d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z">
                </path>
            </svg>
            <div>Message Fail.</div>
        </div>
        <button class="opacity-70 hover:opacity-80 ml-3 mt-[3px]" id="alert">
            <div class="sr-only">Close</div>
            <svg class="w-4 h-4 fill-current">
                <path
                    d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
                </path>
            </svg>
        </button>
    </div>
</div>
<?php endif; ?>