<script>
    
    function sweetalertDelete(id) {
            event.preventDefault();
            swal({
                    title: "Are you sure?",
                    text: "To continue this action!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Your action has beed done! :)", {
                            icon: "success",
                            buttons: false,
                            timer: 1000
                        });
                        $("#deleteButton" + id).submit();
                    }
                });
        }
</script>