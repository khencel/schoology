@extends('landingPage')

@section('content')
<style>
    .card{
        background-color: rgba(225, 225, 225, 0.7) !important;
        backdrop-filter: blur(6px) !important;
    }
</style>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-body">
                   <table class="table table-hover" id="jurisprudence">
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#jurisprudence').DataTable({
            processing: true,
            serverSide: true,
            pageLength: 50, 
            ajax: "{{ url('/sample') }}",
            columns: [
                {data: 'action', name: 'action'},
            ]
        });
    });

</script>
{{-- <script src="{{ asset('js/guest/jurisprudence.js') }}"></script> --}}
@endsection
