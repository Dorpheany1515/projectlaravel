@extends('backend.master')

@section('site-title', 'Admin | Add Logo')
@section('page-main-title', isset($logo) ? 'Edit Logo' : 'Add Logo')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xl-12">
            <form action="/admin/addLogoSubmit" method="POST" enctype="multipart/form-data">
                 @csrf
                    <div class="card">
                       @if(session('message'))
                            <div class="alert alert-success text-dark alert-dismissible fade show custom-alert" role="alert" id="autoDismissAlert">
                                {{ session('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                       @if(session('error'))
                            <div class="alert alert-danger text-dark alert-dismissible fade show custom-alert" role="alert" id="autoDismissAlert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    <div class="card-body">
                        <input type="hidden" name="id" value="{{ $logo->id ?? '' }}">
                        <div class="row">
                             @if ($logos ?? '')
                                    <input type="hidden" name="id" value="{{ $logos->id }}">
                                @endif
                            <div class="mb-3 col-6">
                                <label for="formFile" class="form-label">Logo</label>
                                <input class="form-control" type="file" name="logo">
                                @if (!empty($logo->logo))
                                    <div class="mt-2">
                                        <img src="{{ $logo->logo }}" width="100" alt="Existing Logo">
                                    </div>
                                @endif
                            </div>
                        </div>

                       <div class="mb-3">
                                <input type="submit" id="btnAdd" class="btn btn-primary" value="Add Logo" name="btn">
                                <input type="submit" id="btnEdit" class="btn btn-success" value="Edit Logo" name="btn">
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        const url = window.location.href;
        if(url!='http://127.0.0.1:8000/admin/add-logo'){
           $('#title').html('Edit Logo');
            $('#btnAdd').hide();
            $('#btnEdit').show();
        }else{
            $('#title').html('Add Logo');
            $('#btnAdd').show();
            $('#btnEdit').hide();
        }
    });
</script>
@endsection

