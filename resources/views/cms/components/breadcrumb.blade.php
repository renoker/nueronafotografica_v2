<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                {{ $breadcrumb_title ?? '' }}
                <ol class="breadcrumb">
                    {{ $slot ?? '' }}
                </ol>
            </div>
            <div class="col-lg-6">
                <!-- Bookmark Start-->
                <div class="bookmark">
                    <ul>
                        {{ $add_row ?? '' }}
                    </ul>
                </div>
                <!-- Bookmark Ends-->
            </div>
        </div>
    </div>
</div>
