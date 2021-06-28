$(document).ready(function () {
    $('.deleteForm').click(function (evt) {
        var name = $(this).data('name');
        var form = $(this).closest("form");
        evt.preventDefault();

        swal({
            title: `Are you sure Delete ${name}?`,
            text: `Delete not Recovery`,
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                form.submit();
              swal("Delete Success", {
                icon: "success",
              });
            } else {
              swal("ยังไม่ลบนะ");
            }
          });
    })
})