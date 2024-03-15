<!-- General JS Scripts -->
<script src="{{asset('assets/backend')}}/modules/jquery.min.js"></script>
<script src="{{asset('assets/backend')}}/modules/popper.js"></script>
<script src="{{asset('assets/backend')}}/modules/tooltip.js"></script>
<script src="{{asset('assets/backend')}}/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('assets/backend')}}/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="{{asset('assets/backend')}}/modules/moment.min.js"></script>
<script src="{{asset('assets/backend')}}/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="{{asset('assets/backend')}}/modules/simple-weather/jquery.simpleWeather.min.js"></script>
<script src="{{asset('assets/backend')}}/modules/chart.min.js"></script>
<script src="{{asset('assets/backend')}}/modules/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="{{asset('assets/backend')}}/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="{{asset('assets/backend')}}/modules/summernote/summernote-bs4.js"></script>
<script src="{{asset('assets/backend')}}/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Page Specific JS File -->
<script src="{{asset('assets/backend')}}/js/page/index-0.js"></script>

<script src="//cdn.datatables.net/2.0.1/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.0.1/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="{{asset('assets/backend')}}/js/bootstrap-iconpicker.bundle.min.js"></script>

<!-- Template JS File -->
<script src="{{asset('assets/backend')}}/js/scripts.js"></script>
<script src="{{asset('assets/backend')}}/js/custom.js"></script>

<script>
    @if($errors->any())
    @foreach($errors->all() as $error)

    toastr.error("{{ $error }}")
    @endforeach
    @endif
</script>

<!-- Dynamic Delete alart -->

<script>
    $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('body').on('click', '.delete-item', function(event){
            event.preventDefault();

            let deleteUrl = $(this).attr('href');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        type: 'DELETE',
                        url: deleteUrl,

                        success: function(data){

                            if(data.status == 'success'){
                                Swal.fire(
                                    'Deleted!',
                                    data.message,
                                    'success'
                                )
                                window.location.reload();
                            }else if (data.status == 'error'){
                                Swal.fire(
                                    'Cant Delete',
                                    data.message,
                                    'error'
                                )
                            }
                        },
                        error: function(xhr, status, error){
                            console.log(error);
                        }
                    })
                }
            })
        })

    })
  </script>
@stack('scripts')

