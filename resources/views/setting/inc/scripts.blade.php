<script>
    function remove(id){
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
                    url: 'settings/'+id,
                    type: "DELETE",
                    data:{
                            _token : "{{csrf_token()}}"
                        },
                    dataType: "json"
                }).always( function() {
                    location.href=@if(empty(Request::get('page'))) "settings" @else "settings?page={{Request::get('page')}}" @endif
                });
            }
        })
    }
</script>
