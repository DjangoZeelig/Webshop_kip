@extends('layouts.app')

@section('content')

    <div>
        <livewire:admin-product>
    </div>

@endsection

@section('script')
<script>
    window.addEventListener('close-modal', event => {

        $('#adminProductModal').modal('hide');
        $('#updateAdminProductModal').modal('hide');
        $('#deleteAdminProductModal').modal('hide');
    })
</script>
@endsection

