<div class="container mt-4">
    <div class="row">
    <div class="col-12">
        @if (session()->has('success'))
            <div class="alert alert-success m-0">
                {{session('success')}}
            </div>
        @endif
    </div>
    </div>
</div>