<?php
include 'modal-edit.php';
include 'modal-search.php';
?>

<script>
function archiveFunction(ev) {
event.preventDefault(); // prevent form submit
var urlToRedirect = ev.currentTarget.getAttribute('href');
        swal({
  title: "Apa Kamu yakin?",
  text: "Semua yang telah dihapus tidak dapat dikembalikan.",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Ya, hapus ini!",
  cancelButtonText: "Tidak, Cancel",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    window.location.href= urlToRedirect;          // submitting the form when user press yes
  } else {
    swal("Cancel", "Tidak Jadi dihapus :)", "error");
  }
});
}
</script>