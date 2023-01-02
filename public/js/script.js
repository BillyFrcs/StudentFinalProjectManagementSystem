function Delete($id) {
    $message = confirm('Are you sure you want to delete this?');

    if ($message) {
        window.location.href = ("/Admin/Delete/") + $id;
    } else {
        return false;
    }
}
