(function () {
  $("tr td #delete").click(function(ev){
    ev.preventDefault();
  Swal.fire({
    title: 'Are ss sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'

  }).then((result) => {
    if (result.value) {
      Swal(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  })
  })
})();
